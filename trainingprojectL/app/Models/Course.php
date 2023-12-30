<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'coursemst';

    
    public $timestamps = false;
    protected $primaryKey = 'course_id';

        protected $fillable = [
        'course_name',
        'course_fee',
        'course_content',
        'course_description',
    ];
}
