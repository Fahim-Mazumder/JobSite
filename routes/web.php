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


Route::get('/jobsite', 'jobController@index')->name('job.index');

Route::get('jobsite/applicantLogin', 'applicantController@login')->name('applicant.login');
Route::post('jobsite/applicantLogin', 'applicantController@loginCheck')->name('applicant.loginCheck');
Route::get('jobsite/applicantRegister', 'applicantController@register')->name('applicant.register');
Route::post('jobsite/applicantRegister', 'applicantController@store')->name('applicant.store');

Route::group(['middleware'=>'applicantSession'], function(){

    Route::get('jobsite/applicantJobApply', 'applicantController@jobApply')->name('applicant.jobApply');
    Route::get('jobsite/apply/{id}','applicantController@apply')->name('applicant.apply');
    Route::get('jobsite/applicantProfile', 'applicantController@profile')->name('applicant.profile');
    Route::post('jobsite/applicantProfilestore', 'applicantController@profileStore')->name('applicant.profileStore');
    Route::get('jobsite/applicantViewprofile', 'applicantController@viewProfile')->name('applicant.viewProfile');
    Route::get('jobsite/applicantUpdateprofile/{id}', 'applicantController@updateProfile')->name('applicant.updateProfile');
    Route::post('jobsite/applicantUpdateprofile/{id}', 'applicantController@updateProfileStore')->name('applicant.updateProfileStore');
    Route::get('jobsite/applicantLogout', 'applicantController@logout')->name('applicant.logout');

});

Route::get('jobsite/companyLogin', 'companyController@login')->name('company.login');
Route::post('jobsite/companyLogin', 'companyController@loginCheck')->name('company.loginCheck');
Route::get('jobsite/companyRegister', 'companyController@register')->name('company.register');
Route::post('jobsite/companyRegister', 'companyController@store')->name('company.store');

Route::group(['middleware'=>'companySession'], function(){

    Route::get('jobsite/companyDashboard', 'companyController@dashboard')->name('company.dashboard');
    Route::get('jobsite/companyJobpost', 'companyController@jobPost')->name('company.jobPost');
    Route::post('jobsite/companyJobpost', 'companyController@jobPostStore')->name('company.jobPostStore');
    Route::get('jobsite/companyViewpost', 'companyController@viewPost')->name('company.viewPost');
    Route::get('jobsite/edit-jobPost/{id}', 'companyController@editJobpost')->name('company.editJobpost');
    Route::post('jobsite/edit-jobPost/{id}', 'companyController@updateJobpost')->name('company.updateJobpost');
    Route::get('jobsite/delete-jobPost/{id}', 'companyController@deleteJobpost')->name('company.deleteJobpost');
    Route::get('jobsite/delete-appliedPost/{id}', 'companyController@deleteAppliedpost')->name('company.deleteAppliedpost');
    Route::get('jobsite/companyLogout', 'companyController@logout')->name('company.logout');

});

