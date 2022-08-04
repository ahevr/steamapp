<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;


class PostController extends Controller
{

    public function index(){

        ///ana url

        return view("homepage");
    }



    public function search($name){

        //aramanın döndüğü yer

        $posts = Http::get("https://steamcommunity.com/actions/SearchApps/$name")->json();

        dd($posts);

    }

//        $steamData = Http::get("https://api.steampowered.com/ISteamApps/GetAppList/v2");
//
//        $results = $steamData->json();
//
//        return view("homepage")->with("results",$resultsd);



    public function show($appid){


        //arama yapıldıktan sonra detayların döndüğü yer

        $posts = Http::get("https://store.steampowered.com/api/appdetails?appids=$appid&l=turkish")->json();

        return view("showpage")->with("posts",$posts);

    }







}
