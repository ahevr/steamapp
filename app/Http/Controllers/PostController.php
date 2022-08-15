<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PostController extends Controller
{

    public function index(){
        return view("page.homepage");

    }

    public function aboutUs(){
        return view("page.aboutus");
    }



    public function search($name){

        $posts = Http::get("https://steamcommunity.com/actions/SearchApps/$name");

        $results = $posts->object();

       return view("page.steam.searchpage")->with("results",$results);

    }



    public function show($appid){

        $posts = Http::get("https://store.steampowered.com/api/appdetails?appids=$appid&l=turkish");

        $comment = Http::get("https://store.steampowered.com/appreviews/$appid?json=1&l=turkish");

        $result = $posts->object();

        $commentR = collect(json_decode($comment))->collapse();


        return view("page.steam.gamedetail")->with("result",$result)->with("commentR", $commentR);

    }







}
