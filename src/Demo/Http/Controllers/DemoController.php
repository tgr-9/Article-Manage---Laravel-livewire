<?php

namespace Zofe\Rapyd\Demo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class DemoController extends Controller
{
    public function index()
    {
        return view('rapyd-demo::demo');
    }

    public function schema()
    {
        if (!Schema::hasTable('rapyd_demo_users')) {
            Artisan::call('migrate');
            Artisan::call('db:seed', [
                '--class' => 'DemoSeeder',
                '--force' => true
            ]);
        }


        return view('rapyd-demo::demo');
    }
}