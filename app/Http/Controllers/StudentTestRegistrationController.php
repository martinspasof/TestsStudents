<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Students as StudentModel;
use App\Models\Test as TestModel;
use App\Models\StudentTestRegistration as StudentTestRegistrationModel;
use Illuminate\Http\Request;

class StudentTestRegistrationController extends Controller {
  public function GetData(){
    $students = new StudentModel;
    $students = $students::all();

    $tests = new TestModel;
    $tests = $tests::all();

    return view('StudentTestRegistration', compact('students','tests'));

  }

  public function SaveData(Request $request){
    $this->validate($request,[
      'studentId'=>  'required',
      'TestId'=>  'required'
    ]);

    $student_test_registrations =  new StudentTestRegistrationModel;
    $student_test_registrations -> StudentId = request('studentId');
    $student_test_registrations -> TestId = request('TestId');
    $student_test_registrations -> TestRegDateTime = Carbon::now();
    $student_test_registrations -> save();

    return redirect()->back()->with('message', 'Successful created record!');

//    return redirect('/');
  }

  public function GetAllStudentTest(){
     $students = \DB::table('students')
       ->join('student_test_registrations', 'students.id', '=', 'StudentId')
       ->join('tests', 'student_test_registrations.TestId', '=', 'tests.id')
       ->get();

     //return $students;
    return view('GetAllStudentTest', compact('students'));
  }

}