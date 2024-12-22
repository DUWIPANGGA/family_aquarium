<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aquariumss;

class AquariumssSeeder extends Seeder
{
    public function run()
    {
        Aquariumss::insert([
            ['name' => 'Ikan Cupang'],
            ['name' => 'Ikan Guppy'],
            ['name' => 'Ikan Koi'],
            ['name' => 'Ikan Betta'],
            ['name' => 'Ikan Arwana'],
            ['name' => 'Ikan Louhan'],
            ['name' => 'Ikan Oscar'],
            ['name' => 'Ikan Discus'],
            ['name' => 'Ikan Neons'],
            ['name' => 'Ikan Gourami'], 
            ['name' => 'Ikan Platies'],
            ['name' => 'Ikan Angelfish'],
            ['name' => 'Ikan Zebrafish'],
            ['name' => 'Ikan Corydoras'],
            ['name' => 'Ikan Molly'],
            ['name' => 'Ikan Goldfish'],
            ['name' => 'Ikan Tetra'],
            ['name' => 'Ikan Piranha'],
            ['name' => 'Ikan Rainbowfish'],
            ['name' => 'Ikan Guppy Variegated'],
            ['name' => 'Ikan Cichlid Malawi'],
            ['name' => 'Ikan Cichlid Oscar'],
            ['name' => 'Ikan Plecos'],
            ['name' => 'Ikan Fishbowl'],
            ['name' => 'Ikan Arowana Silver'],
            ['name' => 'Ikan Channa'],
            ['name' => 'Ikan Betta Halfmoon'],
            ['name' => 'Ikan Swordtail'],
            ['name' => 'Ikan Danio'],
            ['name' => 'Ikan Angelfish Koi'],
            ['name' => 'Ikan Seahorse'],
            ['name' => 'Ikan Clownfish'],
            ['name' => 'Ikan Lionfish'],
            ['name' => 'Ikan Tang'],
            ['name' => 'Ikan Butterflyfish'],
            ['name' => 'Ikan Snapper'],
            ['name' => 'Ikan Grouper'],
            ['name' => 'Ikan Triggerfish'],
            ['name' => 'Ikan Pufferfish'],
        ]);
    }    
    
}