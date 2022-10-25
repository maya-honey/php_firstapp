<?php

use Illuminate\Support\Facades\Route;

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

//基本のルーティング
Route::get('/', function () {
    return view('home');
});

//ビューのみを返す場合
//Route::view('/view', 'view');
//データを渡す
$view_array = [
    'Tom' => '24',
    'Take' => '34',
    'Main' => '3',
];
Route::view('/view', 'view', ['users' => $view_array]);

//リダイレクト
//Route::permanentRedirect('/here', '/there');
Route::redirect('/redirect', '/');

//必須パラメータ
//URLからIDを取得してみる
//パラメータは必要な数だけ定義できる
Route::get('/user/{id}', function ($id){
    return 'User'.$id;
});

//オプションパラメータ
//いつも存在するとは限らないパラメータ
//デフォルト値も指定できる
Route::get('/number/{number?}', function ($number = 99){
    return $number;
});

//正規表現


//名前付きルート
//nameメソッドを使用して、ルートの名前を指定できる
//ルート名は常に一意
Route::get('/nroot/profile', function() {
    //
})->name('profile');
//作成した名前付きルートは、URLやリダイレクトの生成に利用できる
Route::get('/namae', function() {
    $url_namae = route('profile');
    return "<p>${url_namae}</p>";

    //return redirect() ->route('profile');
    //return to_route('profile');
});
//名前付きルートがパラメータを定義している場合は
//パラメータを二番目の引数としてroute関数に渡す
Route::get('/onamae/{id}', function ($id) {
    //
})->name('profile_2');
Route::get('namae_2/{id}', function ($id){
    $url = route('profile_2', ['id' => $id, 'add_param' => "add_params"]);
    return "<p>${url}</p>";
});


//ミドルウェア（ルートグループ）
//kernel.phpの$routeMidlewareにミドルウェアを登録
//今回はensuretokenisvalidというキーを登録
//ルートにミドルウェアを割り当てる
Route::get('/middleware', function(){
    return "middoleware";
})->middleware('ensuretokenisvalid');
//ミドルウェアをグループ内全てのルートに割り当てる
Route::middleware(['middleware'])->group(function(){
    Route::get('/middoleware/one', function(){
        return 'ミドルウェア適用 /middoleware/one';
    });
    Route::get('/middoleware/two', function(){
        return 'ミドルウェア適用 /middoleware/two';
    });
});


//コントローラ（ルートグループ）
//シンプルに単体のルートに対してコントローラメソッドのルートを
//定義する方法は以下の通り
//use App\Http\Controllers\OrderController;
//Route::get('/user/{id}', [UserController::class, 'show']);

//グループが全て同じコントローラを利用する場合、
//controllerメソッドを使用すると共通のコントローラを定義できる
//これにより、ルート定義時にそのルートが呼び
//出すコントローラメソッドを指定するだけで良くなる
use App\Http\Controllers\OrderController;
Route::controller(OrderController::class)->group(function (){
    //showとstoreを指定
    Route::get('/orders/{id}', 'show');
    //Route::post('/orders', 'store');
});


//サブドメインルーティング（ルートグループ）
//サブドメインルーティングも処理できる
//Route::domain('{account}.example.com')->group(function() {
    //Route::get('user/{id}', function ($account, $id) {
        //
    //});
//});


//ルートプレフィックス（ルートグループ）
//prefixメソッドを利用すれば、グループ内の各ルートに特定の
//URIプレフィックスをつけることができる
//下の例では、/admin/usersのURLに一致
Route::prefix('prefix')->group(function() {
    Route::get('/users', function(){
        return "prefix/users";
    });
});
//名前付きルートにプレフィックスをつける

//Route::name('admin.')->group(function() {
    //Route::get('/users', function() {
        //ルートにadmin.usersが名付けられる
    //})->name('users');
//});




//コントローラ
use App\Http\Controllers\Con_Controller;

//Con_Controllerクラスのshowクラスを使用
Route::get(
    '/con_controller/{id}',
    [Con_Controller::class, 'show']
);