<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContuctMe;

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
    return view('website/index');
});
Route::get('/yemenpay', function () {
    return view('website/index');
});
Route::get('/about-us', function () {
    return view('website/about');
});
// contuct form
Route::get('/contuct', function (){
    return view('website/contuct');
});
Route::post('/contuct', function (){
    $data=request(['name','email','subject','message']);
    Mail::to('roor3hakimi@gmail.com')->send(new ContuctMe($data));
    return  redirect('/contuct')
    ->with('flash','تم الارسال بنجاح');
    
});
Route::get('/user-profile', function () {
    return view('website/user_profile');
});
Route::get('/login', function () {
    return view('website/login');
});
// docs pages
Route::get('/document', function () {
    return view('docs/docs');
});
Route::get('/checkout', function () {
    return view('docs/checkout');
});
Route::get('/checkout-model', function () {
    return view('docs/checkout_model');
});
Route::get('/create-customer', function () {
    return view('docs/create_customer');
});
Route::get('/customer-model', function () {
    return view('docs/customer_model');
});
Route::get('/customers', function () {
    return view('docs/customers');
});
Route::get('/delete-customer', function () {
    return view('docs/delete_customer');
});
Route::get('/delete-payment-method', function () {
    return view('docs/delete_payment_method');
});
Route::get('/invoice-model', function () {
    return view('docs/invoice_model');
});
Route::get('/list-checkout', function () {
    return view('docs/list_checkout');
});
Route::get('/payment-method-model', function () {
    return view('docs/payment_method_model');
});
Route::get('/payment-method', function () {
    return view('docs/payment_method');
});
Route::get('/payment-model', function () {
    return view('docs/payment_model');
});
Route::get('/payments', function () {
    return view('docs/payments');
});
Route::get('/retrieve-checkout', function () {
    return view('docs/retrieve_checkout');
});
Route::get('/retrieve-customer', function () {
    return view('docs/retrieve_customer');
});
Route::get('/retrieve-payment', function () {
    return view('docs/retrieve_payment');
});
