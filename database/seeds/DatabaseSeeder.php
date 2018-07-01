<?php

use Illuminate\Database\Seeder;
use App\Request;
use App\Create;
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
 // $this->call(UsersTableSeeder::class);

$this->call('RequestTableSeeder');

		 Model::reguard();
       
    }
}
