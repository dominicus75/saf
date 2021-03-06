<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Studygroup;
use App\Models\Enrolling;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

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
        if($request->hasHeader('X-Requested-With')) {
            return view('includes.studentlist', compact('students', 'groups'));
        } else {
            return view('layouts.students', compact('students', 'groups'));
        }
    }

    public function search(
        Request $request,
        Student $student,
        Studygroup $StudyGroup
    )
    {
        $searched = $request->query('name');
        if($request->hasHeader('X-Requested-With')) {
            $students = $student->where('name', 'LIKE', $searched.'%')->get();
            return view('includes.search', compact('students'));
        } else {
            $students = $student->where('name', 'LIKE', $searched.'%')->paginate(10);
            $groups   = $StudyGroup->all();
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
        return view('layouts.student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Student $student, Studygroup $StudyGroup)
    {
        $groups = $StudyGroup->all();
        return view('layouts.student.edit', compact('student', 'groups'));
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
        $validated = $request->validate([
            'name' => 'regex:/^[a-zA-Z\s\']{2,40}$/i',
            'sex' => ['regex:/^(Male|Female|Other)$/'],
            'birth_place' => 'regex:/^[a-zA-Z-\'\s]{2,40}$/i',
            'birth_date' => 'regex:/^([0-9]{4})-([0-9]{2})-([0-9]{2})$/',
            'email' => 'regex:/^.+@.+$/',
            'groups' => 'array|max:4'
        ]);

        foreach($validated as $key => $value) {
            if(!is_array($value)) {
                $student->$key = $value;
            } else {
                $enrolled = $student->studygroups->count();
                $choosen  = count($value);
                if($enrolled > $choosen) {
                    foreach($student->studygroups as $studygroup) {
                        if(!in_array($studygroup->id, $value)) {
                            $group = Enrolling::where([
                                ['student_id', '=', $student->id],
                                ['study_group_id', '=', $studygroup->id]
                            ]);
                            $group->delete();
                        }
                    }
                } elseif($enrolled < $choosen) {
                    foreach($value as $studygroup) {
                        if(!$student->studygroups->contains($studygroup)) {
                            $enrolling = new Enrolling;
                            $enrolling->student_id = $student->id;
                            $enrolling->study_group_id = $studygroup;
                            $enrolling->save();
                        }
                    }
                }
            }
        }

        $student->save();

        return redirect()->route('students.show', $student->id)->with('success','Student updated successfully');
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
