<?php

use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TopicTableSeeder extends Seeder
{
    public function run()
    {
        Topic::create([
          'name' => 'Heart Attack',
          'image' => 'card6.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'Shingles',
          'image' => 'card3.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'Bone Health and Osteoporosis',
          'image' => 'card2.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'High Blood Pressure',
          'image' => 'card5.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'Atrial Fibrillation',
          'image' => 'afib_passive_card.jpg',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'Heartburn and Acid Reflux',
          'image' => 'card7.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'Stroke',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'COPD',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'Depression',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'Pain Medicine Side Effects',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'Insomnia',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'Type 2 Diabetes',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'Using Insulin',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'name' => 'High Cholesterol',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);
    }
}
