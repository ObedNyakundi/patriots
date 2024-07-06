<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patriots extends Model
{
    use HasFactory;
    protected $table = 'patriots';

    protected $fillable = [
      'name',  
      'date_of_birth',
      'image',
      'added_by',
      'approved_by',
    ];

    //a patriot can have many euologies
    public function euology(){
        return $this->hasMany(Euology::class);
    }

    //a patriot should have only one approved biography
    public function biography(){
        return $this->hasOne(Biography::class);
    }
}
