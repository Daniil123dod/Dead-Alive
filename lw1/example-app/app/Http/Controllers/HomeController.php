<?php

namespace App\Http\HomeControllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'Blockone' => 'Под куполом ',
            'contentone' => 'тутуутут',
            'Blocktwo' => 'Кэрри',
            'contenttwo' => 'тутутут',
            'Blockthree' => 'Бессонница',
            'contentthree' => 'тутутут',
            'Blockfore' => 'Бессонница',
            'contentfore' => 'тутутут',
        ]);
    }
}
