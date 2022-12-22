<?php

namespace Database\Seeders\User;

use App\Models\Device;
use App\Models\DeviceTag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'user@user.com')->first();
        Device::factory()
            ->count(3)
            ->for($user)
            ->has(DeviceTag::factory()->count(3), 'tags')
            ->create();
    }
}
