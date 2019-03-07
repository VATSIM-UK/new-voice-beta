<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <title>AFV Beta</title>
</head>
<body class="bg-image font-sans select-none">

<div class="flex items-center h-screen text-white">
    <div class="mx-auto text-center">

        <div class="">
            <img src="images/logo.png"
                 class="h-32"/>

            <h1 class="text-5xl font-bold">Audio For VATSIM</h1>
            <h2 class="text-xl font-bold pb-5">Beta Signup</h2>
        </div>

        <div class="">
            <h2 class="text-xl pb-5">
                Hi
                @if(Auth::check())
                    {{ auth()->user()->name_first }}
                @else
                    there
                @endif
                👋
            </h2>
        </div>

        @auth
            <div class="">
                <a class="no-underline" href="{{ route('auth.login') }}">
                    <btn class="btn btn-blue">Register For Beta</btn>
                </a>
            </div>
        @endauth

        <div class="py-6">
            @if(Auth::check())
                <a class="no-underline" href="{{ route('auth.logout') }}">
                    <btn class="btn btn-blue">Logout</btn>
                </a>
            @else
                <a class="no-underline" href="{{ route('auth.login') }}">
                    <btn class="btn btn-blue">Login</btn>
                </a>
            @endif
        </div>

    </div>
</div>

</body>
</html>