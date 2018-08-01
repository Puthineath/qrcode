<?php

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
    return view('welcome');
});
Route::resource('employee','EmployeeController');
Route::get('employee/{id}/createqr',function($id){
	$employee = App\Employee::findOrFail($id);

	$firstName = $employee->first_name;
	$lastName = $employee->last_name;
	$title = '';
	$email = $employee->email;
	
	// Addresses
	$homeAddress = [
		'type' => '',
		'pref' => '',
		'street' => '',
		'city' => '',
		'state' => '',
		'country' => '',
		'zip' => ''
	];
	$wordAddress = [
		'type' => '',
		'pref' => false,
		'street' => '',
		'city' => '',
		'state' => '',
		'country' => '',
		'zip' => ''
	];
	
	$addresses = [$homeAddress, $wordAddress];
	
	// Phones
	$workPhone = [
		'type' => '',
		'number' => '',
		'cellPhone' => false
	];
	$homePhone = [
		'type' => '',
		'number' => '',
		'cellPhone' => false
	];
	$cellPhone = [
		'type' =>  '',
		'number' => $employee->phone_number,
		'cellPhone' => true
	];
	
	$phones = [$workPhone, $homePhone, $cellPhone];

	$data = [
		'first_name' => $firstName,
		'last_name' => $lastName,
		'email' => $email,
		'title' => $title,
		'addresses' => $addresses,
		'phones' => $phones
	];
	
	return back()->withFirstName($firstName)
				->withLastName($lastName)
				->withEmail($email)
				->withTitle($title)
				->withAddresses($addresses)
				->withPhones($phones);
});

// Route::get('/employee.test',function(){
	
//let create , create what lol test.blade.php
	// $employee = App\Employee::first();
	// // i want to know the data first run it save
	// // Personal Information
 //    $firstName = $employee->first_name;
 //    $lastName = $employee->last_name;
 //    $title = '';
 //    $email = $employee->email;
    
 //    // Addresses
 //    $homeAddress = [
 //        'type' => '',
 //        'pref' => '',
 //        'street' => '',
 //        'city' => '',
 //        'state' => '',
 //        'country' => '',
 //        'zip' => ''
 //    ];
 //    $wordAddress = [
 //       'type' => '',
 //       'pref' => false,
 //       'street' => '',
 //       'city' => '',
 //       'state' => '',
 //       'country' => '',
 //       'zip' => ''
 //    ];
    
 //    $addresses = [$homeAddress, $wordAddress];
    
 //    // Phones
 //    $workPhone = [
 //        'type' => '',
 //        'number' => '',
 //        'cellPhone' => false
 //    ];
 //    $homePhone = [
 //        'type' => '',
 //        'number' => '',
 //        'cellPhone' => false
 //    ];
 //    $cellPhone = [
 //        'type' =>  '',
 //        'number' => $employee->phone_number,
 //        'cellPhone' => true
 //    ];
    
 //    $phones = [$workPhone, $homePhone, $cellPhone];
	// return view('test',compact('firstName','lastName','email','title','addresses','phones'));


// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

