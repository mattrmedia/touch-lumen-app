<?php

use App\Models\Tile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TileTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
          '1' => 'Heart Attack',
          '2' => 'Shingles',
          '3' => 'Bone Health and Osteoporosis',
          '4' => 'High Blood Pressure',
          '5' => 'Atrial Fibrillation',
          '6' => 'Heartburn and Acid Reflux',
          '7' => 'Stroke'
        ];

        $tiles = json_decode(file_get_contents(__DIR__ . '/tiles.json'));
        foreach($categories as $key => $value) {
            if(is_array($tiles)) {
                foreach($tiles as $tile) {
                    \App\Models\Tile::create([
                        'title' => $tile->title,
                        'description' => (isset($tile->description) ? $tile->description : NULL),
                        'type' => (isset($tile->type) ? $tile->type : NULL),
                        'image' => (isset($tile->image) ? $tile->image : NULL),
                        'video' => (isset($tile->video) ? $tile->video : NULL),
                        'featured' => (isset($tile->featured) ? $tile->featured : 0),
                        'category_id' => $key,
                    ]);
                }
            }
        }
    }
}
