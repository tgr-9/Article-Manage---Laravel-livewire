<?php

namespace Zofe\Rapyd\Demo\Http\Controllers;

use App\Http\Controllers\Controller;
use Faker\Factory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Zofe\Rapyd\Demo\Models\DemoArticle;

class ArticlesController extends Controller
{
    public function index()
    {
        return view('rapyd-demo::articles.table');
    }
    
    public function view(DemoArticle $article)
    {
        return view('rapyd-demo::articles.view', compact('article'));
    }
    
    public function edit(DemoArticle $article = null)
    {
        $article = $article ? $article : new DemoArticle();
        return view('rapyd-demo::articles.edit', compact('article'));
    }

}
