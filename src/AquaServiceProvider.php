<?php

namespace Nox\Aqua;

use Illuminate\Support\ServiceProvider;

class AquaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        info('aqua registered');
    }

    public function boot(): void
    {
        info('aqua booted');
    }
}