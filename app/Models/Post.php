<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    protected $fillable = [
        'title',
        'description',
        'slug',
    ];
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
