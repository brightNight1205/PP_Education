<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;

class MajorSeeder extends Seeder
{
    public function run()
    {
        // Sample majors by university IDs (make sure university IDs are correct in your database)

        $majorsByUniversity = [
            1 => [  // Royal University of Phnom Penh
                'Department of Biology',
                'Department of Chemistry',
                'Department of Computer Science',
                'Department of Environmental Science',
                'Department of Mathematics',
                'Department of Physic',
                'Department of Geography',
                'Department of History',
                'Department of Khmer Literature',
                'Department of Media and Communication',
                'Department of Philosophy',
                'Department of Psychology',
                'Department of Sociology',
                'Department of Social Work',
                'Department of Tourism',
                'Department of Information Technology Engineering',
                'Department of Telecommunication and Electronic Engineering',
                'Department of Bioengineering',
                'Department of Automation and Supply Chain Systems Engineering',
                'Department of Environmental Engineering',
                'Department of Community Development',
                'Department of Economic Development',
                'Department of Natural Resources Management and Development',
                'Department of Educational Studies',
                'Department of Higher Education Development and Management',
                'Department of Lifelong Learning',
                'Department of Chinese',
                'Department of English',
                'Department of French',
                'Department of Japanese',
                'Department of Korean',
                'Department of Thai',
                'Department of International Relations',
                'Department of International Economics',
                'Department of Political Science and Public Policy',
                'Department of Vietnamese Studies',
            ],

            2 => [ // Institute of Technology of Cambodia
                'Department of Electrical and Energy Engineering',
                'Department of Industrial and Energy Engineering',
                'Department of Information and Communications Technology (ICT)',
                'Department of Telecommunications and Network Engineering',
                'Department of E-learning',
                'Department of Applied Mathematics and Statistics',
                'Department of Civil Engineering',
                'Department of Architecture Engineering',
                'Department of Infrastructure and Transportation',
                'Department of Resources and Rural Infrastructure',
                'Department of Water Environmental Engineering',
                'Department of Geotechnical Engineering',
                'Department of Geo-resources and Petroleum',
                'Department of Chemical Engineering',
                'Department of Food Science and Technology',
            ],

            3 => [ // Royal University of Law and Economics
                'Bachelor of Law',
                'Bachelor of Public Administration',
                'Bachelor of International Relations',
                'Bachelor of Banking and Finance',
                'Bachelor of Accounting',
                'Bachelor of Development Economics',
                'Bachelor of Business Management',
                'Bachelor of Tourism and Hospitality Management',
                'Bachelor of Informatics Economics',
                'Bachelor of Information Technology',
            ],

            4 => [ // Asia Europe University
                'Department of Computer Network Technology',
                'Department of Electronic and Electricity Engineering',
                'Department of Information Technology',
                'Department of Public Law',
                'Department of Public Administration',
                'Department Community Development',
                'Department of Finance and Banking',
                'Bachelor of Information Technology',
                'Department of Economics',
                'Department of International Business',
                'Department of English Language',
                'Department of Chinese Literature',
                'Department of International Relations',
                'Department of Other Activities',
                'Department of Management',
                'Department of Marketing',
                'Department of Accounting',
                'Department Human Resource Management',
                'Department of Hotel and Tourism Management',
                'Department of Information Management Systems',
            ],

            5 => [ // Cambodia Academy of Digital Technology
                'Computer Science (B, M)',
                'Data Science',
                'Digital Media',
                'Cybersecurity',
                'Digital Governance Training',
                'Technology Transformation for Government Agencies',
                'Internet of Things (IoT)',
                'Digital Policy Research',
            ],
        ];

        foreach ($majorsByUniversity as $universityId => $majors) {
            foreach ($majors as $majorName) {
                Major::create([
                    'Name' => $majorName,
                    'UniversityID' => $universityId,
                ]);
            }
        }
    }
}
