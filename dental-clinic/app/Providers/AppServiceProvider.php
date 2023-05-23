<?php

namespace App\Providers;

use App\Models\Department;
use App\Models\DepartmentDoctor;
use App\Models\Doctor;
use App\Models\FormPatient;
use App\Models\License;
use App\Models\Patient;
use App\Models\Review;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function() {
            return base_path('public_html');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $departments = Department::all();
        $doctors = Doctor::all();
        $department_doctors = DepartmentDoctor::all();
        $patients = Patient::all();
        $form_patients = FormPatient::all();
        $licenses = License::all();
        $reviews = Review::all();

        Config::set(['admin' => [
            'department' => $departments->count(),
            'doctor' => $doctors->count(),
            'department_doctor' => $department_doctors->count(),
            'patient' => $patients->count(),
            'form_patient' => $form_patients->count(),
            'license' => $licenses->count(),
            'review' => $reviews->count(),
        ]]);

        Paginator::useBootstrap();
    }
}
