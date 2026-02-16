<?php

use Livewire\Component;
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

    // Note: It's better to keep these as simple arrays or collections
    public $roles;
    public $permissions;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->roles = Role::all();
        $this->permissions = Permission::all();
    }

    public function editUser($userId)
    {
        $this->selectedUserId = $userId;
        $user = User::findOrFail($userId);
        
        // Spatie methods
        $this->selectedRole = $user->getRoleNames()->first();
        $this->selectedPermissions = $user->getPermissionNames()->toArray();

        // Livewire 3 syntax
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

        session()->flash('success', 'User updated successfully.');
        $this->dispatch('hide-edit-modal');
    }

    // THIS IS THE MISSING PIECE: The Render Method
    public function render()
    {
        return view('livewire.user-management', [
            'users' => User::with(['roles', 'permissions'])->latest()->paginate(10)
        ]);
    }
};
?>

<div>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title text-uppercase">All Users</h3>
            <a href="{{ route('register') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Add User
            </a>
        </div>

        <div class="card-body table-responsive p-3">
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-light">
                    <tr class="text-uppercase">
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Permissions</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>
                                @if ($user->photo)
                                    <img src="{{ asset('storage/'.$user->photo) }}" class="rounded-circle border" style="width:50px;height:50px;object-fit:cover;">
                                @else
                                    <img src="{{ asset('images/avatar-placeholder.png') }}" class="rounded-circle border" style="width:50px;height:50px;object-fit:cover;">
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @forelse($user->getRoleNames() as $role)
                                    <span class="badge rounded-pill bg-info text-dark">{{ $role }}</span>
                                @empty
                                    <span class="badge rounded-pill bg-secondary">No role</span>
                                @endforelse
                            </td>
                            <td>
                                @forelse($user->getAllPermissions() as $perm)
                                    <span class="badge rounded-pill bg-warning text-dark">{{ $perm->name }}</span>
                                @empty
                                    <span class="badge rounded-pill bg-secondary">No permission</span>
                                @endforelse
                            </td>
                            <td>{{ $user->created_at->format('Y-m-d') }}</td>
                            <td class="d-flex gap-1">
                                <button wire:click="editUser({{ $user->id }})" class="btn btn-info btn-sm">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>

                                <form method="POST" action="{{ route('admin.users.destroy', $user) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this user?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-3">
                                <i class="fas fa-user-slash"></i> No users available.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form wire:submit.prevent="updateRolePermission" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Role & Permissions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Role</label>
                        <select wire:model="selectedRole" class="form-select">
                            <option value="">No Role</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Permissions</label>
                        <select wire:model="selectedPermissions" class="form-select" multiple>
                            @foreach($permissions as $permission)
                                <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        window.addEventListener('show-edit-modal', () => {
            var modal = new bootstrap.Modal(document.getElementById('editUserModal'));
            modal.show();
        });

        window.addEventListener('hide-edit-modal', () => {
            var modal = bootstrap.Modal.getInstance(document.getElementById('editUserModal'));
            modal.hide();
        });
    </script>
    @endpush
</div>