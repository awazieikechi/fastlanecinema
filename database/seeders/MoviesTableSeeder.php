<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('movies')->delete();
        
        \DB::table('movies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'movie_title' => 'Man For The Job',
                'movie_description' => 'a brilliant engineer teams up with a young recruit to solve a software problem for an IT company. However things take a turn for the worse when he’s accused of using.....',
                'movie_genre' => 'Drama',
                'movie_time' => '2H 5M',
                'movie_cinema' => 'FastLane Lagos',
                'movie_date' => '15th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'movie_title' => 'Man For The Job',
                'movie_description' => 'a brilliant engineer teams up with a young recruit to solve a software problem for an IT company. However things take a turn for the worse when he’s accused of using....',
                'movie_genre' => 'Drama',
                'movie_time' => '2H 5M',
                'movie_cinema' => 'FastLane Portharcourt',
                'movie_date' => '15th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'movie_title' => 'Man For The Job',
                'movie_description' => 'a brilliant engineer teams up with a young recruit to solve a software problem for an IT company. However things take a turn for the worse when he’s accused of using.....',
                'movie_genre' => 'Drama',
                'movie_time' => '2H 5M',
                'movie_cinema' => 'FastLane Abuja',
                'movie_date' => '15th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'movie_title' => 'Top Gun: Maverick',
                'movie_description' => 'After more than thirty years of service as one of the Navy\'s top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging.',
                'movie_genre' => 'Drama, Action',
                'movie_time' => '2H 11M',
                'movie_cinema' => 'FastLane Lagos',
                'movie_date' => '18th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'movie_title' => 'Top Gun: Maverick',
                'movie_description' => 'After more than thirty years of service as one of the Navy\'s top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging.',
                'movie_genre' => 'Drama, Action',
                'movie_time' => '2H 11M',
                'movie_cinema' => 'FastLane Portharcourt',
                'movie_date' => '18th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'movie_title' => 'Top Gun: Maverick',
                'movie_description' => 'After more than thirty years of service as one of the Navy\'s top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging.',
                'movie_genre' => 'Drama, Action',
                'movie_time' => '2H 11M',
                'movie_cinema' => 'FastLane Abuja',
                'movie_date' => '18th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'movie_title' => 'The Perfect Arrangement',
                'movie_description' => 'Tade, a free-spirited scion of a respected political family, is living her best life and without a care in the world. Things get complicated when she develops feelings...',
                'movie_genre' => 'Drama',
                'movie_time' => '1H 50M',
                'movie_cinema' => 'FastLane Lagos',
                'movie_date' => '22th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'movie_title' => 'The Perfect Arrangement',
                'movie_description' => 'Tade, a free-spirited scion of a respected political family, is living her best life and without a care in the world. Things get complicated when she develops feelings...',
                'movie_genre' => 'Drama',
                'movie_time' => '1H 50M',
                'movie_cinema' => 'FastLane Portharcourt',
                'movie_date' => '22th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'movie_title' => 'The Perfect Arrangement',
                'movie_description' => 'Tade, a free-spirited scion of a respected political family, is living her best life and without a care in the world. Things get complicated when she develops feelings...',
                'movie_genre' => 'Drama',
                'movie_time' => '1H 50M',
                'movie_cinema' => 'FastLane Abuja',
                'movie_date' => '22th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'movie_title' => 'The Wildflower',
            'movie_description' => 'Three women living in the same compound, experience different forms of assault from the men around them; Rolake, (24) gets a new job as the personal assistant to Gowon...',
                'movie_genre' => 'Drama',
                'movie_time' => '1H 50M',
                'movie_cinema' => 'FastLane Lagos',
                'movie_date' => '25th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'movie_title' => 'The Wildflower',
            'movie_description' => 'Three women living in the same compound, experience different forms of assault from the men around them; Rolake, (24) gets a new job as the personal assistant to Gowon...',
                'movie_genre' => 'Drama',
                'movie_time' => '1H 50M',
                'movie_cinema' => 'FastLane Portharcourt',
                'movie_date' => '25th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'movie_title' => 'The Wildflower',
            'movie_description' => 'Three women living in the same compound, experience different forms of assault from the men around them; Rolake, (24) gets a new job as the personal assistant to Gowon...',
                'movie_genre' => 'Drama',
                'movie_time' => '1H 50M',
                'movie_cinema' => 'FastLane Abuja',
                'movie_date' => '25th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'movie_title' => 'Doctor Strange in the Multiverse of Madness',
                'movie_description' => 'Dr. Stephen Strange casts a forbidden spell that opens the door to the multiverse, including an alternate version of himself, whose threat to humanity is too great for...
',
                'movie_genre' => 'Action, Adventure, Fantasy',
                'movie_time' => '2H 6M',
                'movie_cinema' => 'FastLane Lagos',
                'movie_date' => '30th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'movie_title' => 'Doctor Strange in the Multiverse of Madness',
                'movie_description' => 'Dr. Stephen Strange casts a forbidden spell that opens the door to the multiverse, including an alternate version of himself, whose threat to humanity is too great for...',
                'movie_genre' => 'Action, Adventure, Fantasy',
                'movie_time' => '2H 6M',
                'movie_cinema' => 'FastLane Portharcourt',
                'movie_date' => '30th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'movie_title' => 'Doctor Strange in the Multiverse of Madness',
                'movie_description' => 'Dr. Stephen Strange casts a forbidden spell that opens the door to the multiverse, including an alternate version of himself, whose threat to humanity is too great for...
',
                'movie_genre' => 'Action, Adventure, Fantasy',
                'movie_time' => '2H 6M',
                'movie_cinema' => 'FastLane Abuja',
                'movie_date' => '30th June 2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}