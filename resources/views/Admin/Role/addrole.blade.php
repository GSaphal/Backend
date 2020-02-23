{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Roles</h1>
@stop

@section('content')
<h3>Add new role</h3>

<form method="POST" action="addrole/submit" >
@csrf
Role name: <input type="text" name="rolename" >


<br>

@foreach($permission as $permissions)
<input type="checkbox" id="permission" name="permission[]" value="{{$permissions->name}}">{{$permissions -> name}}
@endforeach
<br><br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop