<?php

namespace Livewire\Component;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Storage;

class UserComponent extends Component
{
    use WithPagination;

    // Form State
    public $selectedUserId;
    public $selectedRole;
    public $selectedPermissions = [];

    // Search & Data
    public $search = '';
    public $roles;
    public $permissions;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        // Load static data once
        $this->roles = Role::all();
        $this->permissions = Permission::all();
    }

    // Reset pagination when search query changes
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function editUser($userId)
    {
        $this->selectedUserId = $userId;
        $user = User::findOrFail($userId);
        
        // Populate current user data
        $this->selectedRole = $user->getRoleNames()->first();
        $this->selectedPermissions = $user->getPermissionNames()->toArray();

        $this->dispatch('show-edit-modal');
    }

    public function updateRolePermission()
    {
        $this->validate([
            'selectedRole' => 'nullable|string|exists:roles,name',
            'selectedPermissions' => 'nullable|array',
            'selectedPermissions.*' => 'string|exists:permissions,name',
        ]);

        $user = User::findOrFail($this->selectedUserId);

        // Sync Roles (Pass empty array if none selected to clear)
        $user->syncRoles($this->selectedRole ? [$this->selectedRole] : []);

        // Sync Permissions
        $user->syncPermissions($this->selectedPermissions ?? []);

        session()->flash('success', 'User role and permissions updated successfully.');
        $this->dispatch('hide-edit-modal');
    }

    public function deleteUser($userId)
    {
        $user = User::findOrFail($userId);
        
        // Prevent deleting yourself
        if (auth()->id() === $user->id) {
            session()->flash('error', 'You cannot delete your own account.');
            return;
        }

        $user->delete();
        session()->flash('success', 'User deleted successfully.');
    }
}
?>
<div>
    {{-- Alerts --}}
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm">
            <i class="fas fa-exclamation-triangle me-2"></i> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white py-3">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <h5 class="mb-0 fw-bold text-uppercase">User Directory</h5>
                </div>
                <div class="col-md-5">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text bg-light border-end-0"><i class="fas fa-search text-muted"></i></span>
                        <input wire:model.live.debounce.300ms="search" type="text" class="form-control border-start-0 bg-light" placeholder="Search by name or email...">
                    </div>
                </div>
                <div class="col-md-3 text-md-end mt-2 mt-md-0">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm rounded-pill px-3">
                        <i class="fas fa-plus me-1"></i> Add User
                    </a>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4">Profile</th>
                            <th>Name & Email</th>
                            <th>Current Role</th>
                            <th>Permissions</th>
                            <th>Joined Date</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td class="ps-4">
                                    <img src="{{ $user->photo ? asset('storage/'.$user->photo) : asset('images/avatar-placeholder.png') }}" 
                                         class="rounded-circle border" style="width:45px; height:45px; object-fit:cover;">
                                </td>
                                <td>
                                    <div class="fw-bold">{{ $user->name }}</div>
                                    <small class="text-muted">{{ $user->email }}</small>
                                </td>
                                <td>
                                    @forelse($user->getRoleNames() as $role)
                                        <span class="badge rounded-pill bg-info text-dark fw-normal">{{ $role }}</span>
                                    @empty
                                        <span class="text-muted small italic">None</span>
                                    @endforelse
                                </td>
                                <td>
                                    <div class="d-flex flex-wrap gap-1" style="max-width: 200px;">
                                        @forelse($user->getAllPermissions()->take(3) as $perm)
                                            <span class="badge bg-light text-dark border fw-normal" style="font-size: 0.7rem;">{{ $perm->name }}</span>
                                        @empty
                                            <small class="text-muted">Direct: 0</small>
                                        @endforelse
                                        @if($user->getAllPermissions()->count() > 3)
                                            <span class="badge bg-secondary fw-normal" style="font-size: 0.7rem;">+{{ $user->getAllPermissions()->count() - 3 }}</span>
                                        @endif
                                    </div>
                                </td>
                                <td>{{ $user->created_at->format('M d, Y') }}</td>
                                <td class="text-end pe-4">
                                    <div class="btn-group">
                                        <button wire:click="editUser({{ $user->id }})" class="btn btn-outline-info btn-sm">
                                            <i class="fas fa-user-shield"></i>
                                        </button>
                                        <button wire:click="deleteUser({{ $user->id }})" 
                                                wire:confirm="Are you sure you want to delete this user?" 
                                                class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5 text-muted">
                                    <i class="fas fa-search fa-3x mb-3 opacity-25"></i>
                                    <p>No users found matching your criteria.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer bg-white">
            {{ $users->links() }}
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="editUserModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form wire:submit.prevent="updateRolePermission" class="modal-content border-0 shadow">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title fw-bold">Manage Access</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label class="form-label small fw-bold text-uppercase text-muted">Assign Primary Role</label>
                        <select wire:model="selectedRole" class="form-select shadow-sm">
                            <option value="">-- No Primary Role --</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold text-uppercase text-muted">Direct Permissions</label>
                        <div class="p-3 border rounded bg-light" style="max-height: 250px; overflow-y: auto;">
                            @foreach($permissions as $permission)
                                <div class="form-check mb-2">
                                    <input wire:model="selectedPermissions" class="form-check-input" type="checkbox" value="{{ $permission->name }}" id="perm_{{ $permission->id }}">
                                    <label class="form-check-label small" for="perm_{{ $permission->id }}">
                                        {{ $permission->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <small class="text-muted mt-2 d-block">Note: Permissions via Roles are inherited automatically.</small>
                    </div>
                </div>
                <div class="modal-footer border-top-0">
                    <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success rounded-pill px-4">
                        <span wire:loading.remove wire:target="updateRolePermission">Update Access</span>
                        <span wire:loading wire:target="updateRolePermission" class="spinner-border spinner-border-sm"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('show-edit-modal', () => {
                var modal = new bootstrap.Modal(document.getElementById('editUserModal'));
                modal.show();
            });

            Livewire.on('hide-edit-modal', () => {
                var modalEl = document.getElementById('editUserModal');
                var modal = bootstrap.Modal.getInstance(modalEl);
                if (modal) modal.hide();
            });
        });
    </script>
    @endpush
</div>