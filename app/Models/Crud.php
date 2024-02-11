<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'instiute_name',
        'degree',
      'session',
      'created_by'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
