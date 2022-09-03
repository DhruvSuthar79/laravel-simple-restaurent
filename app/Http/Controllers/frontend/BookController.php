<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view( 'frontend/book' );
    }
    
    public function booking( Request $request )
    {
        echo "<pre>";
        print_r( $request->all() );
        echo "</pre>";

        $request->validate([
            'your-name' => 'required',
            'your-phone' => 'required|min:10|max:10',
            'your-email' => 'required|email',
            'book-date' => 'required',
        ]);

        $name = $request[ 'your-name' ];
        $phone = $request[ 'your-phone' ];
        $email = $request[ 'your-email' ];
        $how_many = $request[ 'how-many' ];
        $date = $request[ 'book-date' ];

    }

    public function store()
    {

    }
}
