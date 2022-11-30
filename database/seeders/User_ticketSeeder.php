<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\user_ticket;

class User_ticketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_tickets')->delete();

        user_ticket::create([
            'user_id' => 1,
            'tickets_id' => 1,
        ]);
    }
}
