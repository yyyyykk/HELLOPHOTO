<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'owner_id' => 1,
                'filename' => 'sample1.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample2.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample3.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample4.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample5.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample6.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample7.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample8.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample9.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample10.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample11.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample12.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample13.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample14.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample15.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample16.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample17.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample18.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample19.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample20.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample21.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample22.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample23.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample24.jpg',
                'title' => null
            ],
            [
                'owner_id' => 1,
                'filename' => 'sample25.jpg',
                'title' => null
            ]
        ]);
    }
}
