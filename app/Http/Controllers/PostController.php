<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PostController extends Controller
{

    public function index(){

        return view("homepage");

    }



    public function search($name){

        $posts = Http::get("https://steamcommunity.com/actions/SearchApps/$name");

        $results = $posts->object();

       return view("page.searchpage")->with("results",$results);

    }



    public function show($appid){

        $posts = Http::get("https://store.steampowered.com/api/appdetails?appids=$appid&l=turkish");

        $result = $posts->object();

        return view("page.gamedetail")->with("result",$result);

    }







}
