<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public function getRemoteData(){
        $client = new Client();
        $res = $client->request('GET', 'https://api.football-data.org/v2/competitions/2021/standings', ['headers' => ['X-Auth-Token' => 'f480cbca04ce40cdb55f1274d8e2594f', 'Accept' => 'application/json','Content-type' => 'application/json']]);
        
        $contents = (string) $res->getBody();
        $pl = json_decode($contents, true);
        // print_r($pl['standings'][0]['table']);

        return view('standings', ['pl' => $pl['standings'][0]['table']]);
        // echo '<pre>' . print_r((string)$res->getBody(), true) . '</pre>';

        // $url = "https://apiv2.apifootball.com/?action=get_standings&league_id=148&APIkey=1f46e105982efeab910e9c815dc28668cd1a324b20c11017a106bd1ee7954769";
        // $json = file_get_contents($url);

        // $full_list = json_decode($json, true);
        // // print_r($full_list[0]['team_name']);

        // foreach($full_list as $team){
        //     print_r($team['team_name']);
        //     print_r('------');
    }   
}