<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\skills;
use App\Degrees;
use App\Exps;
use App\Companies;


class Users extends Model
{
    //
    protected $table = 'users';
    public $primaryKey= 'id';
    public function listskill()
    {
        return $this->belongsToMany(Skills::class)->withPivot('rate');
    }
    public function listdegree()
    {
        return $this->belongsToMany(Degrees::class)->withPivot('date');
    }
    public function listexp()
    {
        return $this->hasMany(Exps::class);
    }
    public function listcompany()
    {
        return $this->belongsToMany(Companies::class)->withPivot('pos','sdate','edate');
    }
    public $timestamps = false;
}
