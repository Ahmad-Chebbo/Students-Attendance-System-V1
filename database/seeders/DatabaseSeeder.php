<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email', 'admin@app.com')->exists()) {
            User::create([
                'name' => 'Ahmad Chebbo',
                'email' => 'admin@app.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password'),
                'role' => 'Admin'
            ]);
        }
        $this->call(SettingSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
