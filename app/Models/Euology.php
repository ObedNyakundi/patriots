<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Euology extends Model
{
    use HasFactory;
    protected $table = 'euologies';

    $protected fillable = [
        'title',
        'body',
        'patriot_id',
        'added_by',
    ];

    public function patriots(){
       return $this->hasMany(Patriots::class);
    }
}
