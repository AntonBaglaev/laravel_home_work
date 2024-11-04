<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $connection = 'mysql';
    public $timestamps = true;

    protected $fillable = ['name', 'surname', 'email'];
}
