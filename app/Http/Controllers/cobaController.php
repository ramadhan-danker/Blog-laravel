<?php

namespace App\Http\Controllers;

use App\Models\Coba;
use Illuminate\Http\Request;

class cobaController extends Controller
{
    public function showCoba()
    {
        return view('Coba', [
            "title" => "Coba",
            "coba" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni sunt enim vero sint laborum. Doloribus voluptatem eaque consequuntur aperiam vitae."
        ]);
    }
}
