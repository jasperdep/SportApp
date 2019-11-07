<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public function getLeagueData(){
        $client = new Client();
        $comp = $client->request('GET', 'https://api.football-data.org/v2/competitions/2021/standings', ['headers' => ['X-Auth-Token' => 'f480cbca04ce40cdb55f1274d8e2594f', 'Accept' => 'application/json','Content-type' => 'application/json']]);
        
        $body_comp = (string) $comp->getBody();
        $pl = json_decode($body_comp, true);
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
    public function getTeamData(){
        $client = new Client();
        $team = $client->request('GET', 'https://api.football-data.org/v2/teams/64', ['headers' => ['X-Auth-Token' => 'f480cbca04ce40cdb55f1274d8e2594f', 'Accept' => 'application/json','Content-type' => 'application/json']]);
        
        $body_team = (string) $team->getBody();
        $liverpool = json_decode($body_team, true);
        // print_r($pl['standings'][0]['table']);

        return view('teams', ['liverpool' => $liverpool]);
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