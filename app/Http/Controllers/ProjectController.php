<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Doctors;
class ProjectController extends Controller
{
    public function index()
    {
        return view('projectPanel.pages.index');
    }
    public function appointment(){
        return view('projectPanel.pages.appointment');
    }
    public function addAppointment(Request $request){
        $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->mobilphone = $request->mobilphone;
        $appointment->doctorname = $request->doctorname;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->save();

        return redirect()->back();
    }
    public function schedulestiming(){
        return view('projectPanel.pages.schedulestiming');
    }
    public function contact(){
        return view('projectPanel.pages.contact');
    }


    public function getDepartments()
    {
        $departments = Department::all();
        return response()->json($departments);
    }

    public function getDoctorsByDepartment($departmentId)
    {
        $department = Department::with('doctors')->findOrFail($departmentId);
        return response()->json($department->doctors);
    }
}
