<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Session;

class Test extends Model
{
  public function testRegistration()
  {
    return $this->hasMany('App\StudentTestRegistration', 'foreign');
  }

}