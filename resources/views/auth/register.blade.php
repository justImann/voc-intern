@extends('_layouts.app')

@section('content')
    <div class="flex justify-center ">
        <div class="w-8/12 p-6 rounded-lg border-2">
        <h1 class="text-3xl font-bold mb-6">Register Form</h1>
          <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-4">
                <p class="text-lg">Name</p>
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Your Name"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg text-black @error('name') border-error @enderror" value="{{ old('name') }}">
                @error('name')
                    <div class="text-red-500 text-sm mt-2">*{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <p class="text-lg">Username</p>
                <label for="username" class="sr-only">Username</label>
                <input type="text" name="username" id="username" placeholder="Your Username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg text-black @error('username') border-error @enderror" value="{{ old('username') }}">
                @error('username')
                    <div class="text-red-500 text-sm mt-2">*{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <p class="text-lg">Email</p>
                <label for="email" class="sr-only">Email</label>
                <input type="text" name="email" id="email" placeholder="Your Email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg text-black @error('email') border-error @enderror" value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-500 text-sm mt-2">*{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <p class="text-lg">Password</p>
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg text-black @error('password') border-error @enderror" value="">
                @error('password')
                    <div class="text-red-500 text-sm mt-2">*{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <p class="text-lg">Confirm Your Password</p>
                <label for="password_confirmation" class="sr-only">Confirm</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="repeat your password again"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg text-black @error('password_confirmation') border-error @enderror" value="">
                @error('password_confirmation')
                    <div class="text-red-500 text-sm mt-2">*{{ $message }}</div>
                @enderror
            </div>
            <div class="font-bold">
                <button type="submit" class="btn btn-primary w-full">Register</button>
            </div>
          </form>
        </div>  
    </div>
@endsection 