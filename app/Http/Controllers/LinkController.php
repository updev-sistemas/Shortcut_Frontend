<?php

namespace App\Http\Controllers;

use App\Entities\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LinkController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function redirectEmpty(Request $request)
    {
        return view('welcome',['message' => 'Bem vinda(o) a página do Paulo Vitor Rei das Vendas', 'component' => 'welcome']);
    }

    public function redirectToLink($slug, Request $request)
    {
        try
        {
            $link = null;
            if (Cache::has($slug))
            {
                $link = Cache::get($slug);
            }
            else
            {
                $query = Link::query();
                $link = $query->where('slug', '=', $slug)->first();
            }

            if ($link == null)
            {
                return view('welcome',['message' => 'Não encontramos o link indicado.','component' => 'linkfail']);
            }
            else
            {
                Cache::forever($slug, $link);
                return redirect($link->url, 303);
            }
        }
        catch (\Exception $e)
        {
            logger("Ocorreu um erro ao processar o Link: {$slug}.");
            logger($e->getMessage());


            return view('welcome',['message' => 'Não encontramos o link indicado.','component' => 'exception']);
        }
    }
}
