<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use phpDocumentor\Reflection\Types\Array_;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function lastNews(){
        $content = file_get_contents(
            'https://www.moh.gov.sa/_layouts/15/moh/RssGenerator.aspx?WebSiteUrl=/Ministry/MediaCenter/News/&ListUrl=/Ministry/MediaCenter/News/Pages/&ViewName=RSSView&RssTitle=&RssDescription=&DescriptionField=BriefDesc'
        );
        $flux = new \SimpleXMLElement($content);

        return view('lastNews',compact(['flux']));
    }

    public function countries(){
        $all=json_decode(file_get_contents('https://disease.sh/v2/countries/'), true);
        $all=array_chunk($all,250);

        return view('countries',compact([
            'all',
        ]));
    }

    public function search(Request $request){
        $request->validate([
            'country'=>'required'
        ]);
        $name=$request->input('country');
        $all0 =[];
        try {
            $country=json_decode(file_get_contents("https://disease.sh/v2/countries/".$name), true);
            array_push($all0,$country);
            $all =array_chunk($all0,25);
            return view('countries',compact([
                'all','name'
            ]));
        }
        catch (\Exception $e){
            $all =array_chunk($all0,25);
            return view('countries',compact([
                'all','name'
            ]));
        }
    }

    public function critical(){

        ///// COVID-19 Data Saudi Arabia
        $sa=json_decode(file_get_contents('https://api.apify.com/v2/key-value-stores/40xwYCZ57p5OkyBIJ/records/LATEST?disableRedirect=true'), true);
        $sa_cities =array_slice($sa, 11);
        return view('critical',compact(['sa','sa_cities']));
    }
    public function about(){
        return view('about');
    }
}
