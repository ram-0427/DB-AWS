<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffmst';

    public $timestamps = false;
    protected $primaryKey = 'staff_id'; 

        protected $fillable = [
        'dept_id',
        'staff_name',
        'mobile_number',
        'email',
        'joining_date',
    ];
}
