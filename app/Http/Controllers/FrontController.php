<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paket;
use App\Visitor;
use App\Booking;
use App\Information;
use App\Gallery;

class FrontController extends Controller
{
    public function index()
    {
        $paket = Paket::paginate(4);
        $information = Information::paginate(4);
        return view('frontend.index', [
            'paket' => $paket,
            'information' => $information            
        ]);
    }

    //Paket
    public function paket()
    {
        $paket = Paket::all();

        return view('frontend.paket.index', [
            'paket' => $paket
        ]);
    }

    public function showAllBuku()
    {
        return 'woke';
    }

    public function detailPaket($id)
    {
        $paket = Paket::findOrFail($id);
        
        return view('frontend.paket.detail', [
            'paket' => $paket
        ]);
    }

    public function bookingPaket($id)
    {
        $paket = Paket::findOrFail($id);
        
        return view('frontend.paket.booking', [
            'paket' => $paket
        ]);
    }

    public function postBooking(Request $request)
    {
        $visitor = new Visitor;
        $visitor->name = $request->input('name');
        $visitor->email = $request->input('email');
        $visitor->phone = $request->input('phone');
        if ($visitor->save()) {
            $booking = new Booking;
            $booking->kd_booking = $this->generateKodeBooking();
            $booking->visitor_id = $visitor->id;
            $booking->paket_id = $request->input('paket_id');
            if ($booking->save()) {
                return $this->ticketConfirm($booking);
            }
        }
    }

    public function ticketConfirm($booking)
    {
        $paket = Paket::findOrFail($booking->paket_id);
        $visitor = Visitor::findOrFail($booking->visitor_id);
        $kd_booking = $booking->kd_booking;

        return view('frontend.paket.confirm', [
            'paket' => $paket,
            'visitor' => $visitor,
            'kd_booking' => $kd_booking
        ]);

    }

    public function generateKodeBooking()
    {
        $kode = date('m').date('Y').rand(000,999);
        return $kode;
    }
    //End of Paket

    //Gallery
    public function gallery()
    {
        $gallery = Gallery::select(['url'])->get();

        return view('frontend.gallery.index', [
            'gallery' => $gallery
        ]);
    }

    //Location
    public function location()
    {
        return view('frontend.location.index');
    }

    //About
    public function about_us()
    {
        return view('frontend.about');
    }

    //Information
    public function information()
    {
        $informations = Information::paginate(5);

        return view('frontend.information.index', [
            'informations' => $informations
        ]);
    }

    public function readInformation($slug)
    {
        $information = Information::where('slug', $slug)->first();

        return view('frontend.information.detail', [
            'information' => $information
        ]);
    }
}
