<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Lib\Money;

class Employee extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'job_title', 'salary', 'work_type', 'status'];
    protected $appends = ['salaryAmount'];
    public function getSalaryAttribute($value)
    {
        return new Money($value);
    }
    
    public function getSalaryAmountAttribute()
    {
        return ($this->salary->amount()) / 100;
    }
    public function getForMattedSalaryAttribute()
    {
        return $this->salary->formatted();
    }
    public function getAvatarAttribute()
    {
        return 'https://api.adorable.io/avatars/285/' . Str::of($this->name)->slug('-') . '.png';
    }
    
}
