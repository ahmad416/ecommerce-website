<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;
class AnalyticReport extends Controller
{
    public function __construct()
    {
//        $this->middleware("auth");
    }

    public function topCountries(){
        $country = Analytics::performQuery(Period::days(7),'ga:sessions',  ['dimensions'=>'ga:country','sort'=>'-ga:sessions']);
        $result= collect($country['rows'] ?? [])->map(function (array $dateRow) {
            return [
                'country' =>  $dateRow[0],
                'sessions' => (int) $dateRow[1],
            ];
        });

        $country=$result->pluck('country');
        $country_session=$result->pluck('sessions');
        return $country_session;
    }

}
