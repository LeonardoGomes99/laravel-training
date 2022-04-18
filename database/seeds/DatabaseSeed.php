<?php

use Illuminate\Database\Seeder;

class DatabaseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BookFullCircleSeed::class);
    }
}
