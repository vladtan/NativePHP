<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NativePHP</title>
        @vite('resources/js/app.js')

        <style>
            body.dark {
                background: #222;
                color: #999;
            }
            body.dark a {
                color: pink;
            }
        </style>
    </head>
    <body class="antialiased {{ $theme }}">
        <div>
            <a href="/about">About</a>
            <a href="/?openwindow=true">Open window</a>
            <a href="/?notification=true">Notification</a>
            <a href="/settings">Settings</a>
            <a href="/fbi-most-wanted">FBI Most Wanted</a>
        </div>
        <div>
            {{ $theme }}
        </div>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            Hello there!!!!!!
        </div>
        <div>
            <div>
                <form action="/user" method="POST">
                    @csrf
                    <button type="submit">Create User</button>
                </form>
            </div>
            <div>
                @forelse($users as $user)
                    <div>{{ $user->name }}</div>
                @empty
                    <div>No users found</div>
                @endforelse
            </div>
        </div>
    </body>
</html>
