<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $table = 'studentmst';

    public $timestamps = false;
    protected $primaryKey = 'student_id';

        protected $fillable = [
        'student_name',
        'registration_no',
        'student_email',
        'student_phoneno',
        'date_registration',
        'course_id',
        'course_fee',
        'due_amount',
        'second_payment',
        'discount',


    ];
}
