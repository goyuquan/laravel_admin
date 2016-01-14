<?php

namespace App\Repositories;

use App\User;
use App\Article;

class ArticleRepository
{
    /**
    * Get all of the tasks for a given user.
    *
    * @param  User  $user
    * @return Collection
    */
    public function for_guest($id)
    {
        return Article::where('published_at','<',date("Y-m-d h:i:s"))
        ->orderBy('published_at', 'desc')
        ->orderBy('id', 'desc')
        ->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page = $id);
    }


    public function forUser(User $user)
    {
        return Article::where('user_id', $user->id)
        ->where('published_at','<',date("Y-m-d h:i:s"))
        ->orderBy('published_at', 'desc')
        ->get();
    }

}
