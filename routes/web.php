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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'HomesController@home');

Route::post('/login', 'Auth\LoginController@login');

Route::redirect('/home', '/profile');

Route::get('unautorized', function () {

    return view('errors.403');

});

Route::get('/404', function () {

    return abort(404);

});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', 'Auth\LoginController@logout');
    //User
    Route::get('/profile', 'UserController@profile');

    Route::post('/savepaymentlink', 'Test\PaymentController@savepaymentlink');

    Route::get('/projects', 'ProjectsController@projects');
    Route::get('/project/{id?}', 'ProjectsController@project');
    Route::post('/saveproject', 'ProjectsController@saveproject');
    Route::get('/deleteproject/{id}', 'ProjectsController@deleteproject');
    Route::get('/projectsdetails/{id}', 'ProjectsController@detail');
    Route::post('/paymentmodal', 'PaymentsController@paymentmodal');
    Route::post('/savepayment', 'PaymentsController@savepayment');
    Route::get('/deletepayment/{id}', 'PaymentsController@deletepayment');
    Route::get('/dashboard', 'ProjectsController@dashboard');
    Route::post('/saveuser', 'UserController@saveuser');
    Route::get('/employee','EmployeeController@employee');
    Route::get('/deleteemployee/{id}', 'EmployeeController@deleteemployee');
    Route::get('/employees/{id?}', 'EmployeeController@employees');
    Route::post('/saveemployee', 'EmployeeController@saveemployee');
    Route::get('/employeedetails/{id}', 'EmployeeController@details');
    Route::get('/addemployee/{id?}', 'EmployeeController@addemployee');
    Route::get('/salary','SalaryController@salary');
    Route::get('/addsalaryies/{id?}', 'SalaryController@addsalaryies');
    Route::post('/savesalary', 'SalaryController@savesalary');
    Route::get('/deletesalary/{id}', 'SalaryController@deletesalary');
    Route::get('/employeesdetails/{id}', 'EmployeeController@employeesdetails');
    Route::post('/salarymodal', 'SalaryController@salarymodal');
    Route::post('/savesalaryajax', 'SalaryController@savesalaryajax');
    Route::get('/setting','SettingsController@setting');
    Route::post('/savesettingsinfo','SettingsController@savesettingsinfo');
    Route::get('/expense/{id?}','ExpenseController@expense');
    Route::post('/saveexpense','ExpenseController@saveexpense');
    Route::get('/expenses','ExpenseController@expenses');
    Route::get('/deleteexpense/{id}','ExpenseController@deleteexpense');
    Route::get('/members','MembersController@members');
    Route::get('/addmembers/{id?}','MembersController@addmembers');
    Route::post('/savemembers','MembersController@savemembers');
    Route::get('/deletemember/{id}','MembersController@deletemember');
    Route::post('/uploadprofile','MembersController@uploadprofile');
    




   Route::post('/documentmodal', 'DocumentsController@documentmodal');
   Route::post('/savedocument', 'DocumentsController@savedocument');
   Route::get('/deletedocument/{id}', 'DocumentsController@deletedocument');
   Route::post('/uploadfile','DocumentsController@uploadfile');


   Route::post('/uploadlogo','SettingsController@uploadlogo');


     Route::get('/portfoliocateg','PortfolioFController@portfoliocateg');
     Route::get('/deleteportfoliocat/{id}', 'PortfolioFController@deleteportfoliocat');
     Route::get('/addportfoliocat/{id?}', 'PortfolioFController@addportfoliocat');
     Route::post('/saveportfoliocat', 'PortfolioFController@saveportfoliocat');
  

     Route::get('/portfolioo','PortfolioController@portfolioo');
     Route::get('/deleteportfolio/{id}', 'PortfolioController@deleteportfolio');
     Route::get('/addportfolio/{id?}', 'PortfolioController@addportfolio');
     Route::post('/saveportfolio', 'PortfolioController@saveportfolio');
     Route::post('/uploadimage','PortfolioController@uploadimage');


    Route::get('/addjobs/{id?}','JobsController@addjobs');
    Route::post('/savejobs','JobsController@savejobs');
    Route::get('/jobs','JobsController@jobs');
    Route::get('/deletejobs/{id}','JobsController@deletejobs');
    Route::get('/getportfolio','PortfolioController@getportfolio');


     Route::get('/bannerimg','BannersController@bannerimg');
     Route::get('/deletebannerimg/{id}', 'BannersController@deletebannerimg');
     Route::get('/addbannerimg/{id?}', 'BannersController@addbannerimg');
     Route::post('/savebannerimg', 'BannersController@savebannerimg');
     Route::post('/uploadbannerimg','BannersController@uploadbannerimg');

     Route::get('/pages','PagesController@pages');
     Route::get('/deletepages/{id}', 'PagesController@deletepages');
     Route::get('/addpages/{id?}', 'PagesController@addpages');
     Route::post('/savepages', 'PagesController@savepages');
     Route::post('/bannerimage','PagesController@bannerimage');
    
    


     Route::get('/testimonials','TestimonialsController@testimonials');
     Route::get('/deleteTestimonials/{id}', 'TestimonialsController@deleteTestimonials');
     Route::get('/addTestimonials/{id?}', 'TestimonialsController@addTestimonials');
     Route::post('/saveTestimonials', 'TestimonialsController@saveTestimonials');
     Route::post('/uploadTestiImage','TestimonialsController@uploadTestiImage');

     Route::get('/allcategory','CategoryAllController@allcategory');
     Route::get('/allprotfolio/{id}','CategoryAllController@allprotfolio');

    

 

});
    Route::get('/','HomesController@home');
    Route::get('/about-us','AboutController@about');
    Route::get('/services','ServicesController@services');
    Route::get('/portfolio','PortfolioController@portfolio');
    Route::get('/our-team','TeamController@team');
    Route::get('/contact-us','ContactController@contact');
    Route::post('/contactform', 'DocumentsController@contactform');
    Route::post('/contactus','ContactController@contactus');
    Route::post('/test','ContactController@Contact_us');
    Route::get('/contacts','ContactController@contacts');
    Route::get('/job','JobsController@job');

    Route::get('/jobdetails/{id?}','JobsController@jobdetails');


