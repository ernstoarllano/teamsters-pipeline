<?php

use Illuminate\Database\Seeder;
use App\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            'AL' => 'alabama',
            'AK' => 'alaska',
            'AZ' => 'arizona',
            'AR' => 'arkansas',
            'CA' => 'california',
            'CO' => 'colorado',
            'CT' => 'connecticut',
            'DE' => 'delaware',
            'DC' => 'district-of-columbia',
            'FL' => 'florida',
            'GA' => 'georgia',
            'HI' => 'hawaii',
            'ID' => 'idaho',
            'IL' => 'illinois',
            'IN' => 'indiana',
            'IA' => 'iowa',
            'KS' => 'kansas',
            'KY' => 'kentucky',
            'LA' => 'louisiana',
            'ME' => 'maine',
            'MD' => 'maryland',
            'MA' => 'massachusetts',
            'MI' => 'michigan',
            'MN' => 'minnesota',
            'MS' => 'mississippi',
            'MO' => 'missouri',
            'MT' => 'montana',
            'NE' => 'nebraska',
            'NV' => 'nevada',
            'NH' => 'new-hampshire',
            'NJ' => 'new-jersey',
            'NM' => 'new-mexico',
            'NY' => 'new-york',
            'NC' => 'north-carolina',
            'ND' => 'north-dakota',
            'OH' => 'ohio',
            'OK' => 'oklahoma',
            'OR' => 'oregon',
            'PA' => 'pennsylvania',
            'RI' => 'rhode-island',
            'SC' => 'south-carolina',
            'SD' => 'south-dakota',
            'TN' => 'tennessee',
            'TX' => 'texas',
            'UT' => 'utah',
            'VT' => 'vermont',
            'VA' => 'virginia',
            'WA' => 'washington',
            'WV' => 'west-virginia',
            'WI' => 'wisconsin',
            'WY' => 'wyoming',
        ];

        foreach ($states as $key => $state) {
            State::create(['state' => $key, 'slug' => $state]);
        }
    }
}
