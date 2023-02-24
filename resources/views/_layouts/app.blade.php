<!DOCTYPE html>
<html lang="en" data-theme="night">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Posty</title>
</head>

<body class="">
    <header>   
        <div class="navbar bg-primary text-primary-content rounded">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" /></svg>
                    </label>
                    <ul tabindex="0"
                        class="menu menu-compact dropdown-content text-white mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Item 1</a></li>
                        <li><a>Item 3</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost normal-case text-2xl">posty.</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a>Home</a></li>
                    <li><a>Dashboard</a></li>
                    <li><a>Post</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <ul class="menu menu-horizontal px-1">
                    <li><a class=" hover:bg-slate-100 hover:bg-opacity-80 font-bold lowercase">Imann</a></li>
                    <li><a href="">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    <li><a href="">Logout</a></li>
                </ul>            
            </div>
        </div>
    </header>
    <main class="p-12">
        @yield('content')
    </main>
</body>

</html>