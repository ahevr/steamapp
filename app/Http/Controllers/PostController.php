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

        $posts = Http::get("https://steamcommunity.com/actions/SearchApps/$name")->json();

       return view("searchpage")->with("posts",$posts);

    }



    public function show($appid){

        //arama yapıldıktan sonra detayların döndüğü yer

        $posts = Http::get("https://store.steampowered.com/api/appdetails?appids=$appid&l=turkish")->json();

        return view("showpage")->with("posts",$posts);

    }







}
