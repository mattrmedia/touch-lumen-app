<?php

use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TopicTableSeeder extends Seeder
{
    public function run()
    {
        Topic::create([
          'title' => 'Heart Attack',
          'image' => 'card6.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'Shingles',
          'image' => 'card3.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'Bone Health and Osteoporosis',
          'image' => 'card2.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'High Blood Pressure',
          'image' => 'card5.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'Atrial Fibrillation',
          'image' => 'afib_passive_card.jpg',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'Heartburn and Acid Reflux',
          'image' => 'card7.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'Stroke',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'COPD',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'Depression',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'Pain Medicine Side Effects',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'Insomnia',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'Type 2 Diabetes',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'Using Insulin',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);

        Topic::create([
          'title' => 'High Cholesterol',
          'image' => 'card8.png',
          'thumbnail' => ''
        ]);
    }
}
