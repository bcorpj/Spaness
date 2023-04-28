<?php

use App\Http\Livewire\Pages\About;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Main;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/main', Main::class);
Route::get('/main/come', function () {
    $router = app(Router::class);
    $routes = $router->getRoutes()->match(Request::create('/main'))->action['controller'];
    /** @var $routes Livewire\Component  */
    $livewire = new $routes();

    return $livewire(app(), app(Illuminate\Routing\Route::class));
});



