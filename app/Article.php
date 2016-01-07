<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','thumbnail','category','content','published_at'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
