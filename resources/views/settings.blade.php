<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NativePHP</title>
    @vite('resources/js/app.js')
</head>
<body class="antialiased">
<div>
    <a href="/">Home</a>
</div>
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    Settings page
</div>
<div>
    <form action="/settings" method="POST">
        @csrf
        <fieldset>
            <legend>Select your theme</legend>
            <div>
                <input type="radio" id="light" name="theme" value="light" @checked($theme === 'light')>
                <label for="light">Light</label>
            </div>
            <div>
                <input type="radio" id="dark" name="theme" value="dark" @checked($theme === 'dark')>
                <label for="dark">Dark</label>
            </div>
        </fieldset>
        <button type="submit">Save</button>
    </form>
</div>
</body>
</html>
