<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get("/", [HomeController::class, "index"]); // to index function in Home Controller
Route::get("/home", [HomeController::class, "index"]); // to index function in Home Controller
Route::get("/redirects", [HomeController::class, "redirects"]); // to redirects  function in Home Controller(for login admin)
Route::get("/users", [adminController::class, "user"]); // to user function in admin Controller
Route::get("/deleteuser/{id}", [adminController::class, "deleteuser"]); // to delete user
Route::get("/foodmenu", [adminController::class, "foodmenu"]); // to show food pages to admin
Route::post("/uploadfood", [adminController::class, "uploadfood"]); // to add food to database
Route::get("/deletefood/{id}", [adminController::class, "deletefood"]); // to delete food from database
Route::get("/updateview/{id}", [adminController::class, "updateview"]); // to show food update page database
Route::post("/foodupdate/{id}", [adminController::class, "foodupdate"]); // to  update food in  database
Route::post("/makeReservation", [adminController::class, "makeReservation"]); // to  makeReservation in the database
Route::get("/reservationPage", [adminController::class, "reservationPage"]); // to show reservationPage in admin panel
Route::get("/chefsPage", [adminController::class, "chefsPage"]); // to show chefsPage in admin panel
Route::post("/uploadchefs", [adminController::class, "uploadchefs"]); // to upload chefs to database
Route::get("/deletechefs/{id}", [adminController::class, "deletechefs"]); // to delete chefs from database
Route::get("/updatechefspage/{id}", [adminController::class, "updatechefspage"]); // to view  update chefs page

Route::post("/updatechefs/{id}", [adminController::class, "updatechefs"]); // to   update chefs in the database



Route::get("/showcart/{id}", [HomeController::class, "showcart"]); // to show the cart page

Route::post("/addcart/{id}", [HomeController::class, "addcart"]); // to check if the user is logined // to add cart to database

Route::get("/deletecart/{id}", [HomeController::class, "deletecart"]); // to delete cart from database
Route::get("/showadress/{id}", [HomeController::class, "showadress"]); // to show adress page
Route::post("/saveAdress/{id}", [HomeController::class, "saveAdress"]); // to save adress in the database
Route::get("/saveorder/{id}", [HomeController::class, "saveorder"]); // to save a order in the database

Route::get("/ordersPage", [adminController::class, "ordersPage"]); // to show the orders page

Route::get("/deleteorder/{id}", [adminController::class, "deleteorder"]); // to show the orders page
