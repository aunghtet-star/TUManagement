<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Assignment;
use App\Models\Department;
use App\Http\Requests\StoreAssignmentRequest;
use App\Http\Requests\UpdateAssignmentRequest;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        $years = Year::all();
        $assignments = Assignment::all();

        return view('assignments.index',compact(['departments','years','assignments']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $years = Year::all();
        return view('assignments.create',compact('departments','years'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssignmentRequest $request)
    {
        // return $request;

        $assignment = new Assignment();
        $assignment->department_id = $request->department_id;
        $assignment->year_id = $request->year_id;
        $assignment->subject = $request->subject;

        if ($request->hasFile('assigment_file')) {
            $file = $request->file('assigment_file');
            $newName = "assigment_file_" . uniqid() . "." . $file->getClientOriginalExtension(); // extension() → getClientOriginalExtension()
            $file->storeAs("public/assigment_files", $newName);
            $assignment->assigment_file = $newName;
        }

        $assignment->save();

        return redirect()->route('assignment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        $departments = Department::all();
        $years = Year::all();
        return view('assignments.edit',compact('departments','years','assignment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssignmentRequest  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssignmentRequest $request, Assignment $assignment)
    {
        $assignment->department_id = $request->department_id;
        $assignment->year_id = $request->year_id;
        $assignment->subject = $request->subject;

        if ($request->hasFile('assigment_file')) {
            $file = $request->file('assigment_file');
            $newName = "assigment_file_" . uniqid() . "." . $file->getClientOriginalExtension(); // extension() → getClientOriginalExtension()
            $file->storeAs("public/assigment_files", $newName);
            $assignment->assigment_file = $newName;
        }

        $assignment->update();

        return redirect()->route('assignment.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        if($assignment){
            $assignment->delete();
            return back();
        }
    }
}
