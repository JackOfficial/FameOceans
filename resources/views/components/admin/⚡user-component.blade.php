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
    
    public $roles;
    public $permissions;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->roles = Role::all();
        $this->permissions = Permission::all();
    }

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
        
        $this->selectedRole = $user->roles->first()?->name;
        $this->selectedPermissions = $user->permissions->pluck('name')->toArray();

        $this->dispatch('show-edit-modal');
    }

    public function updateRolePermission()
    {
        $user = User::findOrFail($this->selectedUserId);

        if ($this->selectedRole) {
            $user->syncRoles([$this->selectedRole]);
        } else {
            $user->roles()->detach();
        }

        $user->syncPermissions($this->selectedPermissions);

        session()->flash('success', 'User updated successfully!');
        $this->dispatch('hide-edit-modal');
    }
};
?>

<div class="p-4">
    {{-- Self-Hiding Success Alert --}}
    @if(session()->has('success'))
    <div 
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 4000)" 
        x-show="show" 
        x-transition.duration.500ms
        class="alert alert-success d-flex align-items-center justify-content-between border-0 shadow-sm mb-4"
    >
        <div>
            <i class="fas fa-check-circle me-2"></i> 
            {{ session('success') }}
        </div>
        
        {{-- Manual Close Icon --}}
        <button type="button" class="btn p-0 border-0 shadow-none" @click="show = false">
            <i class="fas fa-times"></i>
        </button>
    </div>
@endif

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
            <h5 class="mb-0 fw-bold text-uppercase text-primary">User Access Control</h5>
            <a href="{{ route('register') }}" class="btn btn-primary btn-sm rounded-pill px-3 shadow-sm">
                <i class="fas fa-plus me-1"></i> Add User
            </a>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light text-muted small">
                        <tr>
                            <th class="ps-4">NAME</th>
                            <th>EMAIL</th>
                            <th>ROLE</th>
                            <th>PERMISSIONS</th>
                            <th class="text-end pe-4">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr wire:key="user-{{ $user->id }}">
                                <td class="ps-4 fw-bold text-dark">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @forelse($user->getRoleNames() as $role)
                                        <span class="badge rounded-pill bg-info text-dark fw-normal">{{ $role }}</span>
                                    @empty
                                        <span class="text-muted small italic">General User</span>
                                    @endforelse
                                </td>
                                <td>
                                    <span class="text-muted small">{{ $user->permissions->count() }} direct</span>
                                </td>
                                <td class="text-end pe-4">
                                    <button wire:click="editUser({{ $user->id }})" class="btn btn-outline-primary btn-sm rounded-circle shadow-sm">
                                        <i class="fas fa-user-shield"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="text-center py-5 text-muted">No users found in directory.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-0">{{ $users->links() }}</div>
    </div>

    {{-- Single-File Alpine & Bootstrap Modal --}}
    <div 
        wire:ignore.self 
        class="modal fade" 
        id="editUserModal" 
        tabindex="-1"
        x-data="{ 
            bsModal: null, 
            init() { 
                this.bsModal = new bootstrap.Modal($el);
            } 
        }"
        x-on:show-edit-modal.window="bsModal.show()"
        x-on:hide-edit-modal.window="bsModal.hide()"
    >
        <div class="modal-dialog modal-dialog-centered">
            <form wire:submit.prevent="updateRolePermission" class="modal-content border-0 shadow-lg">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title fw-bold">Manage Access</h5>
                    {{-- FIXED: Manual Alpine hide on close button --}}
                    <button type="button" class="btn border-0 shadow-none" @click="bsModal.hide()" aria-label="Close">
                        <i class="fas fa-times fs-5 text-muted"></i>
                    </button>
                </div>
                
                <div class="modal-body pt-0">
                    <div class="mb-4">
                        <label class="form-label small fw-bold text-muted">PRIMARY SYSTEM ROLE</label>
                        <select wire:model="selectedRole" class="form-select border-0 bg-light shadow-none">
                            <option value="">No Role Assigned</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-2">
                        <label class="form-label small fw-bold text-muted">DIRECT PERMISSIONS OVERRIDE</label>
                        <div class="p-3 border rounded-3 bg-light" style="max-height: 220px; overflow-y: auto;">
                            @foreach($permissions as $permission)
                                <div class="form-check mb-2">
                                    <input wire:model="selectedPermissions" class="form-check-input" type="checkbox" value="{{ $permission->name }}" id="perm-{{ $permission->id }}">
                                    <label class="form-check-label small" for="perm-{{ $permission->id }}">
                                        {{ str_replace('_', ' ', $permission->name) }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-top-0 pt-0">
                    {{-- FIXED: Manual Alpine hide on cancel button --}}
                    <button type="button" class="btn btn-light rounded-pill px-4 shadow-none" @click="bsModal.hide()">Cancel</button>
                    <button type="submit" class="btn btn-success rounded-pill px-4 shadow-sm" wire:loading.attr="disabled">
                        <span wire:loading.remove wire:target="updateRolePermission">Apply Changes</span>
                        <span wire:loading wire:target="updateRolePermission">
                            <span class="spinner-border spinner-border-sm me-1"></span> Processing...
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>