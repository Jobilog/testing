<?php

use Illuminate\Database\Seeder;
use App\Create;

class RequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
for ($i=0; $i < 20 ; $i++) 
        { 
        	Record::create
        (
        	[
        		'name' => "name$i",
        		'email' => "email$i",
        		'phone' => "phone$i",
        		'address' => "address$i",
        		'company' => "company$i",
        		'city' => "city$i",
        		'transaction' => "transaction$i",
        		//cargo
        		'contype' => "contype$i",
        		'weight' => "weight$i",
        		'height' => "height$i",
        		'width' => "width$i",
        		'length' => "length$i",
        		'quantity' => "quantity$i",
        		'commodity' => "commodity$i",
        		//consignee
        		'con_name' => "con_name$i",
        		'con_add' => "con_add$i",
        		'con_phone' => "con_phone$i",
        		'con_country' => "con_country$i",
        		'con_email' => "con_email$i"

        	]
        	);
        }
    }
}
