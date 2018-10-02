<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name'=>'Village Dev',
            'ceo_name'=>'Pushpa Shah',
            'address'=>' Kathmandu ,Nepal',
            'contact_number'=>' +9779811331624',
            'contact_email'=>' info@villagedev.com',
            'about_us_big'=>'Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur. Excepteur sint proident sunt in culpa qui officia anim id est laborum.',
            'about_us_small'=>'Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur. Excepteur sint proident sunt in culpa qui officia anim id est laborum.',
            'about_us_nutshell1'=>'Donate',
            'about_us_nutshell2'=>'Donate',
            'about_us_nutshell3'=>'Donate',
            'about_us_nutshell4'=>'Donate',



        ]);
    }
}
