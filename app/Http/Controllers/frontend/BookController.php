<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use App\Models\TableBooking;

class BookController extends Controller
{
    public function index()
    {
        return view( 'frontend/book' );
    }
    
    public function booking( Request $request )
    {
        // echo "<pre>";
        // print_r( $request->all() );
        // echo "</pre>";

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
        $booking_date = $request[ 'book-date' ];

        $book = new TableBooking;

        $book->name = $name;
        $book->phone = $phone;
        $book->email = $email;
        $book->person_count = $how_many;
        $book->booking_date = $booking_date;
        $book->save();
    }
}
