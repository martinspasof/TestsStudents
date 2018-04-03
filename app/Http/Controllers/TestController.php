<?php

namespace App\Http\Controllers;

use App\Models\Test as TestModel;

class TestController extends Controller {

  public function TestSave(){
    $test =  new TestModel;
    $test -> ClassRoom = request('ClassRoom');
    $test -> Course = request('Course');
    $test -> TestDateTime = Carbon::now();
    $test -> save();

    return redirect('/');
  }

}