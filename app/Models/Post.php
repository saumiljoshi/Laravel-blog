<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    protected $fillable = [
        'categories_id',
        'user_id',
        'title',
        'description',
    ];
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
