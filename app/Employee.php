<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Employee extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'job_title', 'salary', 'work_type', 'status'];
}
