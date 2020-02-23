<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function index()
    {
        $role=Role::all();
        return view('admin.role.viewrole',compact('role'));
    }

    public function create()
    {
        $permission=Permission::all();
        return view('admin.role.addrole',compact('permission'));
    }

    public function store(Request $request)
    {
        $role=new Role;
        $role->name=$request->input('rolename');
        $role->save();
        $permission=$request->input('permission');
        $role->givePermissionTo($permission);
        return redirect('/admin/role');
    }
   
    public function edit($id)
    {
        $role=Role::findById($id);
        $permissions = $role->permissions()->get()->pluck('name');
        $allpermissions=Permission::all()->pluck('name');
                return view('admin.role.editrole',compact('permissions','role','allpermissions'));
    }

    
    public function update(Request $request, $id)
    {
        $role=Role::findbyId($id);
        
        $role->name=$request->input('role_name');
        $role->save();
        $permissionAll=Permission::all();
        $role->revokePermissionTo($permissionAll);
        $data=$request->input('permission');
        $role->givePermissionTo($data);
        return redirect('admin/role');
    }

    public function viewPermissions($id)
    {
        $role=Role::findbyId($id);
        $permissions = $role->permissions()->get()->pluck('name');
        return view('admin.role.viewpermission',compact('permissions'));

    }

    public function destroy($id)
    {
        $role=Role::findById($id);
        $role->delete();
        return redirect('admin/role');
    }
}
