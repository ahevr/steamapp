<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


class PostController extends Controller
{

    public function index(){

        return view("homepage");
    }



    public function search($name){

        $posts = Http::get("https://steamcommunity.com/actions/SearchApps/$name")->json();

        dd($posts);

    }

//        $steamData = Http::get("https://api.steampowered.com/ISteamApps/GetAppList/v2");
//
//        $results = $steamData->json();
//
//        return view("homepage")->with("results",$results);



    public function show($appid){

        $posts = Http::get("https://store.steampowered.com/api/appdetails?appids=$appid&l=turkish")->json();

        return view("showpage")->with("posts",$posts);

    }







}
