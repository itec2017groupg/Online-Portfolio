<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Users;


class Companies extends Model
{
  public $table="companies";
  public $primaryKey= 'id';
  public function listemployers()
  {
      return $this->belongsToMany(Users::class)->withPivot('pos','sdate','edate');
  }
}
