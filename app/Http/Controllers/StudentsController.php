<?php

namespace App\Http\Controllers;

use App\Models\Students as StudentModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StudentsController extends Controller {
  public function StudentsGetAll(){
    $students = new StudentModel;
    $students = $students::all();

      return view('StudentsAll', compact('students'));

  }

  public function StudentSave(Request $request){
    $this->validate($request,[
       'txtFirstName'=>  'required|min:3',
       'txtLastName'=>  'required|min:3',
       'txtStudentNumber'=>  'required'
    ]);
    $student_save =  new StudentModel;
    $student_save -> FirstName = request('txtFirstName');
    $student_save -> LastName = request('txtLastName');
    $student_save -> StudentNumber = request('txtStudentNumber');
    $student_save -> created_at = Carbon::now();
    $student_save -> updated_at = Carbon::now();
    $student_save -> save();

    return redirect()->back()->with('message', 'Successful created record!');

//    return redirect('/');
  }

  public function DeleteStudentId($id){
    DB::table('student_test_registrations')->where('StudentId', $id)->delete();
    $StudentModel = StudentModel::find($id);
    $StudentModel->delete($id);

    $return['success'] = '<div class="alert alert-success">Success deleted records! </div>';
    $return['done'] = TRUE;

    return json_encode($return);
  }

  public function FindStudentId($id){
     $StudentModel = StudentModel::find($id);
     $data['student'] = $StudentModel;

    return view('StudentsEdit', $data);

  }

  public function SaveEditedStudent(Request $request){
    $this->validate($request,[
      'txtFirstName'=>  'required|min:3',
      'txtLastName'=>  'required|min:3',
      'txtStudentNumber'=>  'required'
    ]);

    $studentUpdate = StudentModel::find($request['StudentId']);

    $studentUpdate -> FirstName = request('txtFirstName');
    $studentUpdate -> LastName = request('txtLastName');
    $studentUpdate -> StudentNumber = request('txtStudentNumber');
    $studentUpdate -> updated_at = Carbon::now();
    $studentUpdate -> save();

    return redirect()->back()->with('message', 'Successful updated record!');

  }

}