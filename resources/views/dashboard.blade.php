@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>

    <a href="{{ route('admin.users.create') }}">
       <button class="bg-green-600 text-white px-4 py-2 mt-4">Create New User</button>
    </a> 

</div>
@endsection
