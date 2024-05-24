<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RacasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $racas = [
            ['nome' => 'Sem Raça Definida'],
            ['nome' => 'Labrador Retriever'],
            ['nome' => 'Bulldog'],
            ['nome' => 'Beagle'],
            ['nome' => 'Poodle'],
            ['nome' => 'Rottweiler'],
            ['nome' => 'Golden Retriever'],
            ['nome' => 'German Shepherd'],
            ['nome' => 'Siberian Husky'],
            ['nome' => 'Boxer'],
            ['nome' => 'Dachshund'],
            ['nome' => 'Yorkshire Terrier'],
            ['nome' => 'Doberman Pinscher'],
            ['nome' => 'Shih Tzu'],
            ['nome' => 'Great Dane'],
            ['nome' => 'Cocker Spaniel'],
            ['nome' => 'Shetland Sheepdog'],
            ['nome' => 'Chihuahua'],
            ['nome' => 'Pembroke Welsh Corgi'],
            ['nome' => 'Miniature Schnauzer'],
            ['nome' => 'Border Collie'],
            ['nome' => 'Basset Hound'],
            ['nome' => 'Australian Shepherd'],
            ['nome' => 'Saint Bernard'],
            ['nome' => 'Shiba Inu'],
            ['nome' => 'English Mastiff'],
            ['nome' => 'Pomeranian'],
            ['nome' => 'Maltese'],
            ['nome' => 'French Bulldog'],
            ['nome' => 'Cavalier King Charles Spaniel'],
            ['nome' => 'Weimaraner'],
            ['nome' => 'Bernese Mountain Dog'],
            ['nome' => 'Staffordshire Bull Terrier'],
            ['nome' => 'Vizsla'],
            ['nome' => 'Rhodesian Ridgeback'],
            ['nome' => 'Pug'],
            ['nome' => 'West Highland White Terrier'],
            ['nome' => 'Miniature Pinscher'],
            ['nome' => 'Bichon Frise'],
            ['nome' => 'Bloodhound'],
            ['nome' => 'Irish Setter'],
            ['nome' => 'Schnauzer'],
            ['nome' => 'Alaskan Malamute'],
            ['nome' => 'Dalmatian'],
            ['nome' => 'English Springer Spaniel'],
            ['nome' => 'Pointer'],
            ['nome' => 'Whippet'],
        ];
    
        DB::table('racas')->insert($racas);
    }
    
}
