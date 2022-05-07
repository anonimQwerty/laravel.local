<?php

namespace App\Http\Controllers;
use App\Models\articles;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class mainController extends Controller
{
    function index(){
        $active= [
            'home'=>'current-menu-item',
            'blog'=>'',
            'page'=>'',
            'portfolio'=>'',
            'contact'=>'',
        ];

        $articles=articles::all()->sortByDesc('created_at')->take(4);

        return view('index', ['activemain'=>$active,'articles'=>$articles]);

    }

    function blog(){
        $active= [
            'home'=>'',
            'blog'=>'current-menu-item',
            'page'=>'',
            'portfolio'=>'',
            'contact'=>'',
        ];
    $articles=articles::orderBy('created_at', 'DESC')->paginate(4);
      return view('blog', ['activemain'=>$active, 'articles'=>$articles]);
    }

    function page()
    {
        $active= [
            'home'=>'',
            'blog'=>'',
            'page'=>'current-menu-item',
            'portfolio'=>'',
            'contact'=>'',
        ];
        return view('page', ['activemain'=>$active,]);

    }

    function page_elements()
    {
        $active= [
            'home'=>'',
            'blog'=>'',
            'page'=>'current-menu-item',
            'portfolio'=>'',
            'contact'=>'',
        ];
        return view('page_elements', ['activemain'=>$active,]);    
    }

    function page_icons()
    {
        $active= [
            'home'=>'',
            'blog'=>'',
            'page'=>'current-menu-item',
            'portfolio'=>'',
            'contact'=>'',
        ];

        $left_ico_elements = [[
            'img_path'=>'arrow32.png', 
            'alt'=>'arrow32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',],
            [
            'img_path'=>'arrowright32.png', 
            'alt'=>'arrowright32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],

[
            'img_path'=>'article32.png', 
            'alt'=>'article32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],
[
            'img_path'=>'bag32.png', 
            'alt'=>'bag32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],
[
            'img_path'=>'bargraph32.png', 
            'alt'=>'bargraph32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],

[
            'img_path'=>'block32.png', 
            'alt'=>'block32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],

[
            'img_path'=>'box32.png', 
            'alt'=>'box32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],

[
            'img_path'=>'boxdownload32.png', 
            'alt'=>'boxdownload32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],

[
            'img_path'=>'boxupload32.png', 
            'alt'=>'boxupload32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],
[
            'img_path'=>'camera32.png', 
            'alt'=>'camera32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],
[
            'img_path'=>'cameraminus32.png', 
            'alt'=>'cameraminus32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],

[
            'img_path'=>'cameraplus32.png', 
            'alt'=>'cameraplus32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],

[
            'img_path'=>'camerastar32.png', 
            'alt'=>'camerastar32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],

[
            'img_path'=>'camerastar32.png', 
            'alt'=>'camerastar32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],
[
            'img_path'=>'cardgame32.png', 
            'alt'=>'cardgame32',
            'desc'=>'Pellentesque habitant morbi ser fames turpis egestas tortor malesuada fames ete turpis  feugiat vitae.',
],
            ];

            
        return view('page_icons', ['activemain'=>$active,'left_ico_elements'=>$left_ico_elements,]);     
    }

    function portfolio(){
        $active= [
            'home'=>'',
            'blog'=>'',
            'page'=>'',
            'portfolio'=>'current-menu-item',
            'contact'=>'',
        ];
      return view('portfolio', ['activemain'=>$active,]);
    }

    function contact()
    {
         $active= [
            'home'=>'',
            'blog'=>'',
            'page'=>'',
            'portfolio'=>'',
            'contact'=>'current-menu-item',
        ];
      return view('contact', ['activemain'=>$active,]);
    }

    function form_handler($value='')
    {
        // code...
    }

    function show_article($id)
    {
        $article=articles::where('id', $id)->get()->first();
        $active= [
            'home'=>'',
            'blog'=>'current-menu-item',
            'page'=>'',
            'portfolio'=>'',
            'contact'=>'',
        ];
        if(!$article==null){
            return view('article', ['activemain'=>$active,'article'=>$article]);

        }
        else{
            abort(404);}
    }
}
