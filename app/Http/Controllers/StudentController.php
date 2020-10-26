<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function index()
  {
    $student = Student::all();
    return view("index", ["students" => $students]);
  }

}
