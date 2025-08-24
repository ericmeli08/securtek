<?php

namespace Database\Seeders;

use App\Models\Dealer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

                $dealers = [
            [
                'name' => 'AAA Distribution Inc',
                'address' => '111-52 Bale St NE',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'postal_code' => 'T1Y 4G6',
                'phone' => '(403) 256-3766',
                'email' => 'info@aaadist.com',
                'website' => 'www.aaadist.com',
                'latitude' => 51.0447,
                'longitude' => -114.0719,
            ],
            [
                'name' => 'Audio West',
                'address' => '1234-56 West Ave SW',
                'city' => 'Calgary',
                'province' => 'Alberta',
                'country' => 'Canada',
                'postal_code' => 'T2P 1G7',
                'phone' => '(403) 555-0123',
                'email' => 'contact@audiowest.ca',
                'website' => 'www.audiowest.ca',
                'latitude' => 51.0486,
                'longitude' => -114.0708,
            ],
            [
                'name' => 'Nortalk Communications',
                'address' => '9890-50 Street',
                'city' => 'Edmonton',
                'province' => 'Alberta',
                'country' => 'Canada',
                'postal_code' => 'T6A 0L4',
                'phone' => '(780) 468-8324',
                'email' => 'info@nortalk.ca',
                'website' => null,
                'latitude' => 53.5444,
                'longitude' => -113.4909,
            ],
            [
                'name' => 'Barker City Locksmithing & Security',
                'address' => '1050 Jasper Avenue',
                'city' => 'Edmonton',
                'province' => 'Alberta',
                'country' => 'Canada',
                'postal_code' => 'T5J 1V5',
                'phone' => '(780) 424-7720',
                'email' => 'service@barkercity.com',
                'website' => null,
                'latitude' => 53.5461,
                'longitude' => -113.4938,
            ],
            [
                'name' => 'Getatron Link Ltd',
                'address' => '1455 Marine Dr',
                'city' => 'Vancouver',
                'province' => 'British Columbia',
                'country' => 'Canada',
                'postal_code' => 'V7T 1B8',
                'phone' => '(604) 988-2263',
                'email' => 'info@getatron.com',
                'website' => 'www.getatron.com',
                'latitude' => 49.2827,
                'longitude' => -123.1207,
            ],
            [
                'name' => 'Alpha Solutions Inc',
                'address' => '789 Hastings Street',
                'city' => 'Vancouver',
                'province' => 'British Columbia',
                'country' => 'Canada',
                'postal_code' => 'V6C 1A1',
                'phone' => '(604) 555-0789',
                'email' => 'contact@alphasolutions.ca',
                'website' => null,
                'latitude' => 49.2845,
                'longitude' => -123.1116,
            ],
            [
                'name' => 'Security Depot',
                'address' => '123 Bay Street',
                'city' => 'Toronto',
                'province' => 'Ontario',
                'country' => 'Canada',
                'postal_code' => 'M5H 2Y4',
                'phone' => '(416) 555-0456',
                'email' => 'info@securitydepot.ca',
                'website' => null,
                'latitude' => 43.6532,
                'longitude' => -79.3832,
            ],
            [
                'name' => 'ProComm Solutions',
                'address' => '456 Queen Street W',
                'city' => 'Toronto',
                'province' => 'Ontario',
                'country' => 'Canada',
                'postal_code' => 'M5V 2A9',
                'phone' => '(416) 555-0321',
                'email' => 'sales@procomm.ca',
                'website' => 'www.procomm.ca',
                'latitude' => 43.6426,
                'longitude' => -79.3957,
            ],
            [
                'name' => 'Team NTECH SERVICES',
                'address' => '1000 Rue Sherbrooke Est',
                'city' => 'Montreal',
                'province' => 'Quebec',
                'country' => 'Canada',
                'postal_code' => 'H2L 1L9',
                'phone' => '(514) 555-0987',
                'email' => 'info@equipetechnologies.ca',
                'website' => null,
                'latitude' => 45.5017,
                'longitude' => -73.5673,
            ]
        ];

        foreach ($dealers as $dealerData) {
            Dealer::create($dealerData);
        }
    }
}
