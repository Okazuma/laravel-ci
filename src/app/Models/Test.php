<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TestController;

class Test extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'age',
        'address',
        'tel',
    ];
}
