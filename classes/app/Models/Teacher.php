<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    protected $table = 'teachers';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function class()
    {
        return $this->hasOne(SchoolClass::class);
    }
}
