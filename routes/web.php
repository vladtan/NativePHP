<?php

use Illuminate\Support\Facades\Route;
use Native\Laravel\Facades\Notification;
use Illuminate\Http\Request;
use App\Models\User;
use Native\Laravel\Facades\Settings;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    if (request()->notification) {
        Notification::title('Hello from NativePHP')
            ->message('This is notification message')
            ->show();
    }

    return view('welcome', [
        'users' => User::all(),
        'theme' => Settings::get('theme', 'light'),
    ]);
});

Route::post('/user', function (){
    User::factory()->create();
    Notification::title('User created!')
        ->message('Details about user are here:')
        ->show();
    return back();
});

Route::view('/about', 'about')->name('about');
Route::get('/settings', function () {
    return view('/settings', [
        'theme' => Settings::get('theme', 'light'),
    ]);
});
Route::post('/settings', function (Request $request) {
    Settings::set('theme', $request->theme);

    return redirect('/');
});

Route::get('/fbi-most-wanted', function () {
    $response = Http::get('https://api.fbi.gov/wanted/v1/list')->json();
    $items = $response['items'];
    $total = $response['total'];

    return view('index', [
        'items' => $items,
        'total' => $total
    ]);
});

