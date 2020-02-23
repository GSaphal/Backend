<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
   
    public function index()
    {
        $permissions=Permission::all();
        return view('admin.permission.viewpermission',compact('permissions'));
    }

   
    public function create()
    {
        return view('admin.permission.addpermission');
        
    }

    
    public function store(Request $request)
    {
        $permission=new Permission;
        $permission->name=$request->permission_name;
        $permission->save();
        return redirect('admin/permission');
    }


    
    public function edit($id)
    {
        $permission=Permission::findById($id);
       return view('admin.permission.editpermission',compact('permission'));
    }

    
    public function update(Request $request, $id)
    {
        $permission=Permission::findbyId($id);
        $permission->name=$request->permission_name;
        $permission->save();
        return redirect('/admin/permission');
    }

    
    public function destroy($id)
    {
        $permissions=Permission::findById($id);
        $permissions->delete();
        return redirect('/admin/permission');
    }
}
