<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    use HasFactory;
    protected $table = 'biographies'; 
    protected $fillable = [
        'body',
        'patriot_id',
        'added_by',
        'approved_by',
    ];

    //a biography is added by a user
    public function user() {
        return $this->belongsTo(User::class, 'added_by');
    }

    //a biography is about a patriot
    public function patriots() {
       return $this->belongsTo(Patriots::class, 'patriot_id');   
    }
}
