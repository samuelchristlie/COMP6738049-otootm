<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'class_id',
    ];

    protected $table = 'students';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class);
    }
}
