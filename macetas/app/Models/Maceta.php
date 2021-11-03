<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maceta extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'file',
        'description',
        'color',
        'quantity',
        'material',
        'status',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
