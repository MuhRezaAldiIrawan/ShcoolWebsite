<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Beranda';
        $blog = DB::table('kegiatans')->latest()->take(1)->get();
        $blog3 = DB::table('kegiatans')->latest()->take(2)->get();

        // Mendapatkan tanggal saat ini
        $currentDate = Carbon::now();

        // Format tanggal ke dalam format yang diinginkan (misalnya "12 Oktober 2000")
        $formattedDate = $currentDate->format('d F Y');

        return view('home.index', ['blog' => $blog, 'blog3' => $blog3, 'formattedDate' => $formattedDate], compact('title'));
    }

    public function kegiatan(Request $request)
    {
        $title = 'Kegiatan';
        $listkegiatan = DB::table('kegiatans')->latest()->get();

        // Mendapatkan tanggal saat ini
        $currentDate = Carbon::now();

        // Format tanggal ke dalam format yang diinginkan (misalnya "12 Oktober 2000")
        $formattedDate = $currentDate->format('d F Y');

        return view('home.kegiatan', ['listkegiatan' => $listkegiatan,'formattedDate' => $formattedDate], compact('title'));
    }

    public function detailkegiatan($id)
    {
        $title = 'Detail Kegiatan';
        $detailkegiatan = DB::table('kegiatans')->where('id', $id)->get();

        // Mendapatkan tanggal saat ini
        $currentDate = Carbon::now();

        // Format tanggal ke dalam format yang diinginkan (misalnya "12 Oktober 2000")
        $formattedDate = $currentDate->format('d F Y');

        return view('home.detailkegiatan', ['detailkegiatan' => $detailkegiatan,'formattedDate' => $formattedDate], compact('title'));
    }

    public function jadwal(Request $request)
    {
        $title = 'Jadwal Kegiatan';
        $jadwalkegiatan = DB::table('kegiatans')->where('status', 'on-comming')->latest()->get();

        // Mendapatkan tanggal saat ini
        $currentDate = Carbon::now();

        // Format tanggal ke dalam format yang diinginkan (misalnya "12 Oktober 2000")
        $formattedDate = $currentDate->format('d F Y');

        return view('home.jadwalkegiatan', ['jadwalkegiatan' => $jadwalkegiatan,'formattedDate' => $formattedDate], compact('title'))->with('i', ($request->input('page', 1) - 1));
    }

    public function video(Request $request)
    {
        $title = 'Video';
        // Mendapatkan tanggal saat ini
        $currentDate = Carbon::now();

        // Format tanggal ke dalam format yang diinginkan (misalnya "12 Oktober 2000")
        $formattedDate = $currentDate->format('d F Y');

        return view('home.video', ['formattedDate' => $formattedDate], compact('title'));
    }

    
    public function about(Request $request)
    {
        $title = 'About Us';
        // Mendapatkan tanggal saat ini
        $currentDate = Carbon::now();

        // Format tanggal ke dalam format yang diinginkan (misalnya "12 Oktober 2000")
        $formattedDate = $currentDate->format('d F Y');

        return view('home.about', ['formattedDate' => $formattedDate], compact('title'));
    }

    public function contact(Request $request)
    {
        $title = 'Contact';
        // Mendapatkan tanggal saat ini
        $currentDate = Carbon::now();

        // Format tanggal ke dalam format yang diinginkan (misalnya "12 Oktober 2000")
        $formattedDate = $currentDate->format('d F Y');

        return view('home.contact', ['formattedDate' => $formattedDate], compact('title'));
    }
}
