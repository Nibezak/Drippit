<?php


namespace App;

trait Followable
{
      public function follows()
    {
        return $this->
        belongsToMany(
            User::class,'follows',
            'user_id',
            'following_user_id'
        );
    }



    public function follow(User $user)

    {
        return $this->follows()->save($user)->latest()->first();
    }

    public function isFollowing(User $user)
    {
        return $this->follows()
        ->where('following_user_id', $user->id)
        ->exists();
    }

    public function unFollow(User $user)
    {
        return $this->follows()->detach($user);

    }

    public function toggleFollow(User $user)
    {
            if($this->isFollowing($user))
             {
               return $this->unFollow($user);
             }
     
      return   $this->follow($user);

   
    }

    public function isNotFollowing()
    {
        return $this->
        belongsToMany(
            User::class,'follows',
            'user_id',
            'following_user_id'
        )->inRandomOrder();
    }

}