<?php

use App\Models\fruits;
use App\Models\members;
use App\Models\Users;
use App\Models\vegetables;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('login');
});

Route::get('/h', function () {
    return response('<h1>welcome</h1>');
});
Route::post('/login', function (Request $request) {
    if($request->user=="weisheng" && $request->pwd== "123") {
        return redirect("/foreach")->with("success","Login Successfully.");
    }else{
        return back()->with("error","login fail");
    }
});
Route::get("/register", function () {
    return view("register");

});

Route::post("/register", function (Request $request) {
    $insert = new Users();
    $insert->name = $request->user;
    $insert->email = $request->email;
        //    $row['']=$_POST[''];
    $insert->password = $request->pwd;
    $insert->save();
    return redirect("/")->with("success","Register Successfully.");

});
Route::get("/welcome", function () {
    return view("welcome");
});
Route::get('/posts/{id}', function ($id) {
    return response('My Score is ' . $id . '%');
})->where('id','[0-9]+');

Route::get('/look/{abc}', function ($abc) {
    return response('<h1 style="color:red; font-family:monospace;">The food Name is ' . $abc . '</h1>');
})->where('abc','[a-z]+');


Route::get('/foreach', function () {
    return view('foreach', [
        "fruits" => [
            [
                "id" => '1', "name" => 'Apple', "price" => '100'
            ]
            ,
            [
                "id" => '2', "name" => 'Orange', "price" => '200'
            ]
        ]
    ]
);

});

Route::get('/listings', function () {
    return view('listings');
});

Route::get('/listings/{id}', function ($id) {
        $listings = [
            [
                "id" => '1', "title" => 'Programming', "teacher" => 'Mr Yan Ping'
            ]
            ,
            [
                "id" => '2', "title" => 'Networking', "teacher" => 'Mr C2'
            ]
            ];

        foreach ($listings as $listing) {
            if($listing['id'] == $id){
                return $listing;
            }
        }

});

Route::get('/fruits', function () {
    return view('fruits',[
        'fruits'=> fruits::all()
]);

});


Route::get('/multiply/{id}', function ($id) {
    $result = '';
    for ($i = 1; $i <= 12; $i++) {
        $result .= $i . 'x' . $id . '=' . $i * $id . "<br>";
    }
    return response($result);
});

Route::get('/members', function () {
    return view('members',[
        'members'=> members::all()
]);

});
Route::get('/details/{id}', function ($id) {
    return view('details',[
        'members' => members::find($id)
    ]);
});

Route::get('vegetable', function () {
    return view('vegetable',[
        "vegetable" => vegetables::all()
    ]);
});
