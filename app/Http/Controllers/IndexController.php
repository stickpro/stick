<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use \Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function execute(Request $request)
    {
        $pages=Page::all();
        $services=Service::all();
        $peoples=People::take(3)->get();
        $tags=DB::table('portfolios')->distinct()->pluck('filter');

        // Получаем все портфолио из БД
        $portfolios = Portfolio::all([
            'id', 'name', 'filter', 'images', 'url', 'alias',
        ]);

	    $menu = [];

        foreach ($pages as $page) {
            # code...
            $item = [
                'title' => $page->alias, 'alias' => $page->title, 'name' => $page->name
            ];
            array_push($menu, $item);
        }

        return view('site.index', [
            'menu' => $menu,
            'pages' => $pages,
            'services' => $services,
            'peoples' => $peoples,
            'portfolios' => $portfolios,
            'tags' => $tags,
        ]);
    }

    /**
     * Детали портфолио по ID
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function portfolioDetails ($id)
    {
        $portfolio = Portfolio::whereId($id)->firstOrFail();

        return view('site.partials.portfolio')->with(['portfolio' => $portfolio]);
    }
}
