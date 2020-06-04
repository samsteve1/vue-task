<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Lib\Money;

class Employee extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'job_title', 'salary', 'work_type', 'status'];

    public function getSalaryAttribute($value)
    {
        return new Money($value);
    }
    public function getForMattedSalaryAttribute()
    {
        return $this->salary->formatted();
    }
}
