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
		//$this->call('UserTableSeeder');
		$this->call('PostsTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
    	//this line clears out any users already in the table
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = Hash::make('adminPass123!');
        $user->save();
    }

}

class PostsTableSeeder extends Seeder {

    public function run()
    {
    	//this line clears out any users already in the table
        //DB::table('posts');

        
        for($i=1; $i<10; $i++)
        {
	        $posts = new Post();
	        $posts->title = 'New post' . $i;
	        $posts->body = 'My new post';
	        $posts->save();
	    }
    }

}
