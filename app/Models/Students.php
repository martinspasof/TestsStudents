<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Session;

class Students extends Model
{
  public function testStudent()
  {
    return $this->hasMany('App\StudentTestRegistration', 'foreign');
  }
}