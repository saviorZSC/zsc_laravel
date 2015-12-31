<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        //执行Articles操作
        $this->call('TagTableSeeder');
        $this->call('PostTableSeeder');
        Model::reguard();
    }
}

//添加随机数据

/*class PostTableSeeder extends Seeder
{
    public function run()
    {
        App\Models\Post::truncate();
        factory(App\Models\Post::class,20)->create();
    }
}


class ArticleTableSeeder extends Seeder{
    public function run(){
        App\Models\Article::truncate();
        factory(App\Models\Article::class,20)->create();
    }
}*/

