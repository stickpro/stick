<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Page;
use App\Portfolio;
class PageController extends Controller
{
   public function execute($alias) {
   			
            

   			if(!$alias)
   			{
   				abort(404);
   			}

            if(view()->exists('site.index'))
            {

            $Portfolios=Portfolio::all();

            $alias= array();
               foreach ($Portfolios as $Portfolio) {
                # code...
            $data = array('images' =>$Portfolio->images ,'alias'=>$Portfolio->alias, 'name' =>$Portfolio->name );
                  array_push($alias, $data);
                   }
            $data = [
                     'alias' => $Portfolio->alias,
                     'images'  => $Portfolio->images,
                     'name' => $Portfolio->name
            ];
            return view('site.index', $data);
            
   			}
   			else {
               abort(404);
            }



   }
}
