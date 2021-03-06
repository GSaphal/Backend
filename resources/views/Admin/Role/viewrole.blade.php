{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
<table class="table">
<tr>
<th scope="col">Role</th>
</tr>
@foreach($role as $roles)
<tr>
<td>{{$roles -> name}}</td>
<td> 
<a href="/admin/role/editrole/{{$roles->id}}"><button class="btn btn-info">Edit</button></a>
<a href="/admin/role/viewpermission/{{$roles->id}}"><button class="btn btn-success">View Permissions</button></a>
<a href="role/delete/{{$roles->id}}"> <button class="btn btn-danger">Delete</button></td></a>
</td>
</tr>
@endforeach
</table>
<a href="/admin/role/addrole"><button class="btn-primary">Add Role</button></a>
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop