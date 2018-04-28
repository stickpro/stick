<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use DB;
use Mail;
class IndexController extends Controller
{
    //
public function execute(Request $request) {

	

	$pages=Page::all();
	$portfolios=Portfolio::get(array('name','filter', 'images', 'url', 'alias'));
	$services=Service::all();
	$peoples=People::take(3)->get();


	$tags=DB::table('portfolios')->distinct()->pluck('filter'); 

	$menu= array();

	foreach ($pages as $page) {
		# code...
		$item = array('title' =>$page->alias ,'alias'=>$page->title, 'name' =>$page->name );
		array_push($menu, $item);
	}

	return view('site.index', array(
									'menu'=> $menu,
									'pages'=> $pages,
									'services'=>$services,
									'peoples'=>$peoples,
									'portfolios'=>$portfolios,
									'tags'=>$tags
	));
	
}

}
