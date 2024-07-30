<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Doctors;
class ProjectController extends Controller
{
    public function index()
    {
        $departments = Department::with('doctors')->get();

        return view('projectPanel.pages.index', compact('departments'));
    }
    public function appointment(){
        return view('projectPanel.pages.appointment');
    }
    public function schedulestiming(){
        return view('projectPanel.pages.schedulestiming');
    }
    public function contact(){
        return view('projectPanel.pages.contact');
    }
}
