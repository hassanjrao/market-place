<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                "title" => "Wordpress",
                "created_by" => 1,
                "created_at" => "2021-08-16 15:00:00",
                "updated_at" => "2021-08-16 15:00:00"
            ],
            [
                "title" => "Laravel",
                "created_by" => 1,
                "created_at" => "2021-08-16 15:00:00",
                "updated_at" => "2021-08-16 15:00:00"
            ],
            [
                "title" => "Codeigniter",
                "created_by" => 1,
                "created_at" => "2021-08-16 15:00:00",
                "updated_at" => "2021-08-16 15:00:00"
            ],
            [
                "title" => "Vuejs",
                "created_by" => 1,
                "created_at" => "2021-08-16 15:00:00",
                "updated_at" => "2021-08-16 15:00:00"
            ],
            [
                "title" => "Reactjs",
                "created_by" => 1,
                "created_at" => "2021-08-16 15:00:00",
                "updated_at" => "2021-08-16 15:00:00"
            ],
            [
                "title" => "Angularjs",
                "created_by" => 1,
                "created_at" => "2021-08-16 15:00:00",
                "updated_at" => "2021-08-16 15:00:00"
            ],
            [
                "title" => "Nodejs",
                "created_by" => 1,
                "created_at" => "2021-08-16 15:00:00",
                "updated_at" => "2021-08-16 15:00:00"
            ],
            [
                "title" => ".Net Core",
                "created_by" => 1,
                "created_at" => "2021-08-16 15:00:00",
                "updated_at" => "2021-08-16 15:00:00"
            ]
        ]);
    }
}
