<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $table = 'batchmst';

    public $timestamps = false;
    protected $primaryKey = 'batch_id';

        protected $fillable = [
        'batch_name',
        'course_id',
        'startdate',
        'enddate',
        'faculty_id',
        'fees',


    ];
}
