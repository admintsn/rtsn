<?php

namespace App\Http\Controllers;

use App\Models\Ustadz;
use App\Models\Siaran;
use App\Models\Materi;
use App\Models\Tempat;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function siaranu()
    {
        $jadwala = Siaran::all()->where('is_active', 1);
        $penyiar = Ustadz::whereRelation('siaranustadz', 'is_active', 1)->get();
        $penyiarm = Materi::whereRelation('siaranmateri', 'is_active', 1)->get();
        $penyiart = Tempat::whereRelation('siarantempat', 'is_active', 1)->get();
       
          return view('welcome', compact('jadwala','penyiar','penyiarm','penyiart'));
    }
    
    // public function index(Ustadz $penyiar){
    //     // $jadwala = Siaran::where('is_active', 1)->get;
    //     $penyiar = Ustadz::whereRelation('siaranustadz', 'is_active', 1)->get();
        
    //     return view('welcome', compact('penyiar'));
    //     // return view('welcome', [
    //     //     'jadwala' => $jadwala,
    //     //     'penyiar' => $penyiar
    //     // ]);
    // }
    
    
}
