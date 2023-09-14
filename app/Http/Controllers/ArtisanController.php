<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    public function linkStorage()
    {
        Artisan::call('storage:link');
        return 'Storage linked successfully.';
    }

    public function clearCache()
    {
        Artisan::call('cache:clear');
        return 'Cache cleared successfully.';
    }

    public function optimizeClear()
    {
        Artisan::call('optimize:clear');
        return 'Optimize clear successfully.';
    }

    public function configClear()
    {
        Artisan::call('config:clear');
        return 'Config cleared successfully.';
    }

    public function routeClear()
    {
        Artisan::call('route:clear');
        return 'Route cache cleared successfully.';
    }
}
