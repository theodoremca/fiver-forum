<?php
namespace App;

class MyFunctions
{
    public function generateData()
    {
        $x = 1;
        factory(Role::class)->create();
        factory(Role::class)->create();
        factory(Section::class)->create();
        factory(Section::class)->create();
        factory(Section::class)->create();
        while($x <= 17) {
            factory(User::class)->create();
            $x++;
        }
        factory(Discussion::class,12)->create();
        factory(Comment::class,40)->create();
        factory(Reply::class,120)->create();

        return "success";

    }
}
