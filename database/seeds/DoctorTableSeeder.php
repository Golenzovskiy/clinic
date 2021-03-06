<?php

use Illuminate\Database\Seeder;
use Clinic\Models\Doctor;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Doctor::class, 50)->create();
    }
}
