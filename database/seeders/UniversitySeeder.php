<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\University;

class UniversitySeeder extends Seeder
{
    public function run()
    {
        $universities = [
            ['UniversityID' => 1, 'Name' => 'Royal University of Phnom Penh', 'Image' => 'https://upload.wikimedia.org/wikipedia/en/a/a2/RUPP_logo.PNG'],
            ['UniversityID' => 2, 'Name' => 'Institute of Technology of Cambodia', 'Image' => 'https://upload.wikimedia.org/wikipedia/en/f/f7/Institute_of_Technology_of_Cambodia_logo.png'],
            ['UniversityID' => 3, 'Name' => 'Royal University of Law and Economics', 'Image' => 'https://edurank.org/assets/img/uni-logos/royal-university-of-law-and-economics-logo.png'],
            ['UniversityID' => 4, 'Name' => 'Asia Euro University', 'Image' => 'https://www.aeu.edu.kh/uoe2/images/aeu.png'],
            ['UniversityID' => 5, 'Name' => 'Cambodia Academy of Digital Technology', 'Image' => 'https://www.cadt.edu.kh/wp-content/uploads/2023/02/cadt_square_logo_boundary.jpg'],
        ];

        foreach ($universities as $university) {
            University::updateOrCreate(['UniversityID' => $university['UniversityID']], $university);
        }
    }
}