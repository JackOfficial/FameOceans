<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display all users with their roles and permissions.
     */
    public function index()
    {
        $users = User::with('roles', 'permissions')->paginate(15);
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.index', compact('users', 'roles', 'permissions'));
    }

    /**
     * Change a user's role.
     */
    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|exists:roles,name',
        ]);

        // Remove existing roles
        $user->syncRoles([$request->role]);

        return back()->with('success', 'User role updated successfully.');
    }

    public function updateRolePermission(Request $request, User $user)
{
    $request->validate([
        'role' => 'nullable|string|exists:roles,name',
        'permissions' => 'nullable|array',
        'permissions.*' => 'string|exists:permissions,name',
    ]);

    // Remove all current roles
    $user->syncRoles($request->role ? [$request->role] : []);

    // Sync permissions
    $user->syncPermissions($request->permissions ?? []);

    return redirect()->back()->with('success', 'User role and permissions updated successfully.');
}

    /**
     * Change a user's permissions.
     */
    public function updatePermissions(Request $request, User $user)
    {
        $request->validate([
            'permissions' => 'nullable|array',
            'permissions.*' => 'exists:permissions,name',
        ]);

        // Sync permissions
        $user->syncPermissions($request->permissions ?? []);

        return back()->with('success', 'User permissions updated successfully.');
    }
}