<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingHour extends Model
{
    protected $table = 'working_hours';

    protected $fillable = [
        'date',
        'real_hours',
        'absence_hours',
        'lost_hours',
        'surplus_hours',
        'overtime_hours',
        'company_id',
        'employee_id',
        'total_salary',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
