<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Calc extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function __invoke(Request $request)
    {
        $weight = $request->input('weight');
        $carbocisteine = $weight * 10;
        return view('calc', compact('weight', 'carbocisteine'));
    }
}
