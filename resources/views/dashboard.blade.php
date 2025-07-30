@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>

    <a href="{{ route('users.create') }}" class="btn btn-primary">Create New User</a>
</div>
@endsection
