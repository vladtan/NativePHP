<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NativePHP</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased">
        <div>
            <a href="/">Home</a>
        </div>
        <div>
            <div>Total Most Wanted: {{ $total }}</div>
            @foreach($items as $item)
                <div class="flex items-center">
                    <img src="{{ $item['images'][0]['thumb'] }}" alt="thumb" class="rounded-full w-20">
                    <div class="ml-2">
                        <div class="font-semibold">Name: {{ $item['title'] }}</div>
                        <div class="flex space-x-4">
                            <span>Eye color: {{ $item['eyes'] }}</span>
                            <span>Sex: {{ $item['sex'] }}</span>
                            <span>Date of birth: {{ $item['dates_of_birth_used'][0] ?? '' }}</span>
                            <p>Remarks: {{ $item['remarks'] }}</p>
                            <div>Wanted for:
                                <p>{{ $item['caution'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
