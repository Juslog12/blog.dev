<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//add a new one of these lines for every new extended class below
		$this->call('UserTableSeeder');
		$this->call('PostsTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
    	//this line clears out any users already in the table
        DB::table('users')->delete();

        $user = new User();
        $user->email = $_ENV['ADMIN_USER'];
        $user->password = Hash::make($_ENV['ADMIN_PASS']);
        $user->save();
    }

}

class PostsTableSeeder extends Seeder {

    public function run()
    {
    	//this line clears out any users already in the table
        DB::table('posts')->delete();

        
        for($i=1; $i<10; $i++)
        {
	        $post = new Post();
	        $post->user_id = 1;
	        $post->title = 'New post' . $i;
	        $post->body = 'My new post';
	        $post->slug = "$i";
	        $post->save();
	    }
    }

}
