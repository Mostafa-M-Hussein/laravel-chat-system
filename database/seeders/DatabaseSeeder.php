<?php

namespace Database\Seeders;

use App\Models\Conversation;
use Illuminate\Database\Seeder;
use  App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create(
            [
                'name' => 'moado',
                'email' => 'moado@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('123123123'),

            ]);

        User::create(
            [
                'name' => 'zain',
                'email' => 'zain@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('123123123'),

            ]);

        User::create(
            [
                'name' => 'ali',
                'email' => 'Ali@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('123123123'),

            ]);

        User::create(
            [
                'name' => 'Sami',
                'email' => 'Sami@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('123123123'),

            ]);


        Conversation::create(
            [
                'name' => 'family Group  ',
                'uuid' => Str::uuid(),
                'user_id' => rand(0, 4),

            ]);

        Conversation::create(
            [
                'name' => 'Friends  Group  ',
                'uuid' => Str::uuid(),
                'user_id' => rand(0, 4),

            ]);

        Conversation::create(
            [
                'name' => 'Art  Group  ',
                'uuid' => Str::uuid(),
                'user_id' => rand(0, 4),

            ]);

        Conversation::create(
            [
                'name' => 'Cs  Group  ',
                'uuid' => Str::uuid(),
                'user_id' => 1,

            ]);

        Conversation::create(
            [
                'name' => 'family Group  ',
                'uuid' => Str::uuid(),
                'user_id' => 1,

            ]);


        DB::table('conversation_user')->insert(
            [
                'conversation_id' => 4,
                'user_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);
        DB::table('conversation_user')->insert(
            [
                'conversation_id' => 1,
                'user_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);
        DB::table('conversation_user')->insert(
            [
                'conversation_id' => 3,
                'user_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);
        DB::table('conversation_user')->insert(
            [
                'conversation_id' => 2,
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);
        DB::table('conversation_user')->insert(
            [
                'conversation_id' => 1,
                'user_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);


        $this->call(MessagesSeeder::class);


    }
}
