<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BibleController extends Controller
{
    public function index() {
        $responds = Http::get('https://static.esvmedia.org/api/plans/book-of-common-prayer.json');
        $data = $responds->json();

        //dd($data);
        
        return view(
            'Bible.index',
            compact('data')
        );

    }
}
