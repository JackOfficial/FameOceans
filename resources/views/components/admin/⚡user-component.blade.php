<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

new class extends Component
{
    use WithPagination;

    public $selectedUserId;
    public $selectedRole;
    public $selectedPermissions = [];
    
    // Static data can stay in public properties
    public $roles;
    public $permissions;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        // Only load roles and permissions once
        $this->roles = Role::all();
        $this->permissions = Permission::all();
    }

    /**
     * Provide data to the view. 
     * This replaces public $users and keeps pagination working.
     */
    public function with()
    {
        return [
            'users' => User::with(['roles', 'permissions'])->latest()->paginate(10),
        ];
    }

    public function editUser($userId)
    {
        $this->selectedUserId = $userId;
        $user = User::findOrFail($userId);
        
        // Correct Spatie retrieval
        $this->selectedRole = $user->roles->first()?->name;
        $this->selectedPermissions = $user->permissions->pluck('name')->toArray();

        // New Livewire 3 dispatch syntax
        $this->dispatch('show-edit-modal');
    }

    public function updateRolePermission()
    {
        $user = User::findOrFail($this->selectedUserId);

        // Sync Role
        if ($this->selectedRole) {
            $user->syncRoles([$this->selectedRole]);
        } else {
            $user->roles()->detach();
        }

        // Sync Permissions
        $user->syncPermissions($this->selectedPermissions);

        session()->flash('success', 'Role & permissions updated successfully.');
        
        // New Livewire 3 dispatch syntax
        $this->dispatch('hide-edit-modal');
    }
};
?>

<div>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
            <h5 class="mb-0 fw-bold text-uppercase">User Access Control</h5>
            <a href="{{ route('register') }}" class="btn btn-primary btn-sm rounded-pill px-3">
                <i class="fas fa-plus"></i> Add User
            </a>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4">Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Permissions</th>
                            <th>Date</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr wire:key="{{ $user->id }}">
                                <td class="ps-4 fw-bold">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @forelse($user->getRoleNames() as $role)
                                        <span class="badge rounded-pill bg-info text-dark">{{ $role }}</span>
                                    @empty
                                        <span class="text-muted small">User</span>
                                    @endforelse
                                </td>
                                <td>
                                    <span class="text-muted small">{{ $user->permissions->count() }} direct permissions</span>
                                </td>
                                <td>{{ $user->created_at->format('M d, Y') }}</td>
                                <td class="text-end pe-4">
                                    <button wire:click="editUser({{ $user->id }})" class="btn btn-outline-primary btn-sm rounded-circle">
                                        <i class="fas fa-user-shield"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">No users found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer bg-white border-top-0">
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
                    <div class="mb-3">
                        <label class="form-label small fw-bold">PRIMARY ROLE</label>
                        <select wire:model="selectedRole" class="form-select border-0 bg-light">
                            <option value="">No Role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">DIRECT PERMISSIONS</label>
                        <div class="p-3 border rounded bg-light" style="max-height: 200px; overflow-y: auto;">
                            @foreach($permissions as $permission)
                                <div class="form-check">
                                    <input wire:model="selectedPermissions" class="form-check-input" type="checkbox" value="{{ $permission->name }}" id="p{{ $permission->id }}">
                                    <label class="form-check-label small" for="p{{ $permission->id }}">
                                        {{ $permission->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-top-0">
                    <button type="submit" class="btn btn-success rounded-pill px-4">Update User</button>
                </div>
            </form>
        </div>
    </div>

    @script
    <script>
        // New Livewire 3 Javascript listener syntax
        $wire.on('show-edit-modal', () => {
            new bootstrap.Modal(document.getElementById('editUserModal')).show();
        });

        $wire.on('hide-edit-modal', () => {
            const modalEl = document.getElementById('editUserModal');
            const modal = bootstrap.Modal.getInstance(modalEl);
            if (modal) modal.hide();
        });
    </script>
    @endscript
</div>