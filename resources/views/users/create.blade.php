@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create User</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="text" name="mobile" placeholder="Mobile No" required><br><br>
        <input type="text" name="department" placeholder="Department" required><br><br>
        <input type="text" name="designation" placeholder="Designation" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
