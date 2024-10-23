<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_info;
class studentController extends Controller
{
   public function store(Request $request)
    {
        $student = new Student_info();
        $student->Student_name = $request->input('name');
        $student->Student_email = $request->input('email');
        $student->Student_Class = $request->input('class');
        $student->Student_Roll_no= $request->input('roll_no');
        $student->Student_Address = $request->input('address');
        $student->save();
        return response()->json(['message' => 'Student added successfully'], 200);
    }
    public function delete($id){
        $student = Student_info::find($id);
        $student->delete();
        return response()->json(['message' => 'Student deleted successfully'], 200);
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $student = Student_info::all();
        return response()->json($student, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student_info::find($id);
        return response()->json($student, 200);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)

    {
        $student = Student_info::find($id);
        $student->Student_name = $request->input('name');
        $student->Student_email = $request->input('email'); 
        $student->Student_Class = $request->input('class');
        $student->Student_Roll_no = $request->input('roll_no');
        $student->Student_Address = $request->input('address');
        $student->save();
        return response()->json(['message' => 'Student updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


    }
}
