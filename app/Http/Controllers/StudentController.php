<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Studygroup;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;



class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        Request $request,
        Student $student,
        Studygroup $StudyGroup
    )
    {
        $choosen  = $request->query('choosen');
        $groups   = $StudyGroup->all();
        if(is_null($choosen)) {
            $students = $student->paginate(10);
            $students->setPath('students');
        } else {
            $selectedGroups = $StudyGroup->findMany($choosen);
            $collection     = new Collection();
            foreach($selectedGroups as $group) {
                foreach($group->students as $student) { $collection->add($student); }
            }
            $currentPage      = LengthAwarePaginator::resolveCurrentPage('page');
            $currentPageItems = $collection->slice(($currentPage - 1) * 10, 10);
            $query            = $request->query();
            unset($query['page']);
            $students = new LengthAwarePaginator(
                $currentPageItems,
                $collection->count(),
                10,
                $currentPage,
                [
                    'pageName' => 'page',
                    'path' => \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPath(),
                    'query' => $query
                ]
            );
        }
        if($request->hasHeader('X-Requested-With') || !is_null($request->query('page'))) {
            return view('includes.studentlist', compact('students', 'groups'));
        } else {
            return view('layouts.students', compact('students', 'groups'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
