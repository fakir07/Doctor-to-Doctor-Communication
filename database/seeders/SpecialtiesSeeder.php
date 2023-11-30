<?php

namespace Database\Seeders;

use App\Models\Specialties;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecialtiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialties = [
          "Anesthésiques",
          "Cardiologie",
          "Chirurgie cardiothoracique ",
          "Génétique clinique",
          "Chirurgie dentaire ",
          "Dentisterie",
          "Dermatologie",
          "Radiologie diagnostique ",
          "Endocrinologie",
          "Gastroentérologie et hépatologie ",
          "Médecine générale",
          "Pratique générale (GP)",
          "Hématologie",
          "Immunologie et allergie",
          "Soins intensifs",
          "Néphrologie",
         ];

          // Looping and Inserting Array's Permissions into Permission Table
         foreach ($specialties as $specialtie) {
           
                                DB::table('specialties')->insert([
                                    'specialty_name' => $specialtie,
                                    'description' => 'description',
                                ]);    
          }
    }
}
