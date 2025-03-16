<?php

namespace Vnideas\LangSwitcher;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Illuminate\Support\Facades\Route;
use Vnideas\Initial\Models\VniOption;

class LangSwitcherPlugin implements Plugin
{
    public function getId(): string
    {
        return 'lang-switcher';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        $panel->renderHook(
            'panels::user-menu.before',
            fn (): string => view('lang-switcher::dropdown')->render()
        );
        $panel->routes['lang-switcher'] = [
            Route::get('/lang/{lang}', static function ($lang) {
                if (in_array($lang, json_decode(VniOption::where('option_name', 'langs_enabled')
                    ->first()->option_value, true, 512, JSON_THROW_ON_ERROR), true)) {
                    session()->put('locale', $lang);
                    app()->setLocale($lang);
                }

                return redirect()->back();
            })->name('lang.switch'),
        ];
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
