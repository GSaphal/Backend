<?php
namespace App\Repositories\Admin\Interfaces;
use Illuminate\Http\Request;


interface RoleRepositoryInterface
{
    public function viewrole();
    public function createrole();
    public function storerole(Request $request);
    public function editrole($id);
    public function updaterole(Request $request,$id);
    public function viewpermission($id);
    public function deleterole($id);




}