<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Student;
use App\Models\Studygroup;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $groups = Studygroup::withCount('students')->get();
        $students = 0;

        foreach($groups as $group) {
            $students += $group->students_count;
        }

        $data = [
            'students'      => Student::all()->count(),
            'groups'        => Studygroup::all()->count(),
            'with_students' => $students
        ];
        view()->share('data', $data);
    }
}
