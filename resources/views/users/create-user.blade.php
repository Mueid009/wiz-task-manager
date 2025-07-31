@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-6">
  <h2 class="text-2xl font-bold mb-4">Create User</h2>

  <form method="POST" action="{{ route('admin.users.store') }}">
    @csrf

    <input name="name" placeholder="Name" class="w-full p-2 mb-2 border" required>
    <input name="phone" placeholder="Phone Number" class="w-full p-2 mb-2 border" required>
    <input name="email" placeholder="Email" class="w-full p-2 mb-2 border" required>
    <input name="designation" placeholder="Designation" class="w-full p-2 mb-2 border" required>
    <input name="department" placeholder="Department" class="w-full p-2 mb-2 border" required>
    <input name="password" type="password" placeholder="Password" class="w-full p-2 mb-2 border" required>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2">Create User</button>
  </form>
</div>
@endsection
