<?php

use Illuminate\Database\Seeder;
use App\Models\Tour;
class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = [
            [
                'place' => 'Canada dell\'Est',
                'period' => 'Giugno - Luglio 2022',
                'price' => 1800.00,
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, quasi.',
            ],
            [
                'place' => 'Canada dell\'Ovest',
                'period' => 'Luglio - Settembre 2022',
                'price' => 2000.00,
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, quasi.',
            ],
            [
                'place' => 'Oman',
                'period' => 'Novembre - Dicembre 2022',
                'price' => 1400.00,
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, quasi.',
            ],

        ];

        foreach($tours as $tour){
            $new_tour = new Tour();
            
            $new_tour->place = $tour['place'];
            $new_tour->period = $tour['period'];
            $new_tour->price = $tour['price'];
            $new_tour->description = $tour['description'];

            $new_tour->save();

        }

    }
}
