<?php

namespace App\Providers;

use App\Events\MyEvent;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Facades\Window;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
//        Menu::new()
//            ->appMenu()
//            ->submenu('About', Menu::new()
//                ->link('https://beyondco.de', 'Beyond Code')
//                ->link('https://simonhamp.me', 'Simon Hamp')
//            )
//            ->submenu('View', Menu::new()
//                ->toggleFullscreen()
//                ->separator()
//                ->link('https://laravel.com', 'Learn More', 'CmdOrCtrl+L')
//            )
//            ->register();
        Menu::new()
            ->appMenu()
            ->editMenu()
            ->viewMenu()
            ->windowMenu()
            ->submenu('About', Menu::new()
                ->link('https://beyondco.de', 'Beyond Code')
                ->link('https://simonhamp.me', 'Simon Hamp')
                ->separator()
                ->label('My Label')
                ->event(\App\Events\MyEvent::class, 'Trigger my event', 'CmdOrCtrl+Shift+D')
            )->register();
        MenuBar::create()
//            ->icon(public_path('images/menuBarIcon@2x.png'))
//            ->route('menubar.index')
            ->showDockIcon()
            ->width(300)
            ->height(300);
//            ->withContextMenu(
//                Menu::new()
//                    ->quit()
//            )->alwaysOnTop();

        Window::open()
            ->width(500)
            ->height(500)
            ->showDevTools(FALSE);

    }
}
