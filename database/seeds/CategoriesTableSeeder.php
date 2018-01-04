<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        Category::create([
          'name' => 'Heart Attack',
          'description' => 'Reducing Your Risk',
          'image' => 'card6.png',
          'video' => ''
        ]);

        Category::create([
          'name' => 'Shingles',
          'description' => 'Preventing this Painful Virus',
          'image' => 'card3.png',
          'video' => ''
        ]);

        Category::create([
          'name' => 'Bone Health and Osteoporosis',
          'description' => 'Protecting Your Bones',
          'image' => 'card2.png',
          'video' => ''
        ]);

        Category::create([
          'name' => 'High Blood Pressure',
          'description' => 'Improving Your Numbers',
          'image' => 'card5.png',
          'video' => ''
        ]);

        Category::create([
          'name' => 'Atrial Fibrillation',
          'description' => 'Managing Irregular Heartbeat',
          'image' => 'afib_passive_card.jpg',
          'video' => ''
        ]);

        Category::create([
          'name' => 'Heartburn and Acid Reflux',
          'description' => 'Reducing Stomach Acid',
          'image' => 'card7.png',
          'video' => ''
        ]);

        Category::create([
          'name' => 'Stroke',
          'description' => 'Know the Signs',
          'image' => 'card8.png',
          'video' => ''
        ]);

        //... add more quotes if you want!
    }
}
