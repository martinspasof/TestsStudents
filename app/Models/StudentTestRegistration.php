<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Session;

class StudentTestRegistration extends Model
{
  public function test()
  {
    return $this->belongsTo('App\Test');
  }

  public function students()
  {
    return $this->belongsTo('App\Test');
  }

}