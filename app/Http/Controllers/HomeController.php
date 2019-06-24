<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro=Product::count();
        $order=Order::count();
        $user=User::count();
        $outofstock=Product::where('product-quantity','<=', '0')->count();
        $newOrder=Order::where("status","0")->get();
        //Analytic Starting
        $usersType=Analytics::performQuery(
            Period::days(7),
            'ga:sessions',
            [
                'dimensions'=>'ga:userType',
                'metrics'=>'ga:sessions'
            ]
        );
        $newUsers=json_decode($usersType['rows'][0][1]);
        $returingUsers=json_decode($usersType['rows'][1][1]);

        //Top Countries Data Google Aanalytics
        $country = Analytics::performQuery(Period::days(7),'ga:sessions',  ['dimensions'=>'ga:country','sort'=>'-ga:sessions']);
        $result= collect($country['rows'] ?? [])->map(function (array $dateRow) {
            return [
                'country' =>  $dateRow[0],
                'sessions' => (int) $dateRow[1],
            ];
        });

        $country=$result->pluck('country');
        $country_session=$result->pluck('sessions');
        //End of Top Countries Analytics Data

            $browser = Analytics::performQuery(Period::days(7), 'ga:sessions', ['dimensions' => 'ga:browser','metrics'=>'ga:sessions']);
            $browser_result = collect($browser['rows'] ?? [])->map(function (array $dateRow) {
                return [
                    'browser' => $dateRow[0],
                    'sessions' => (int)$dateRow[1],
                ];
            });
            $browser_name=$browser_result->pluck('browser');
            $browser_session=$browser_result->pluck('sessions');


        //Top Browser used
        //Total Page Viewers
        $page_views=Analytics::fetchTotalVisitorsAndPageViews(Period::days(7));
        $pageViews=$page_views->pluck('date');
        $abc=$pageViews->map(function($date) { return $date->format('d/m'); });
        $visitors=$page_views->pluck("visitors");
        $pageView=$page_views->pluck("pageViews");
        //End of Analytics
        return view('auth.home',
            [
                "totalPro"=>$pro,
                "totalOrder"=>$order,
                "users"=>$user,
                "newOrders"=>$newOrder,
                "outofstock"=>$outofstock,
                "newUsers"=>$newUsers,
                "returningUsers"=>$returingUsers,
                "country"=>$country,
                "country_sessions"=>$country_session,
                "browser_name"=>$browser_name,
                "browser_session"=>$browser_session,
                "abcdate"=>$abc,
                "visitors"=>$visitors,
                "pageview"=>$pageView,
            ]);
    }
}
