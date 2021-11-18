<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\buku;
use App\User;

class pagecontroller extends Controller
{

    private $menu=
        [
            ['Home','dashboard',''],
            ['Katalog','katalog',''],
            ['Koleksi Terbaru','koleksiterbaru',''],
            ['Register','register',''],
            ['Guestbook','guestbook',''],
            ['Setting','','dropdown']
            

        ];
        private $submenu=
        [
            ['Home','',''],
            ['Katalog','',''],
            ['Koleksi Terbaru','',''],
            ['Register','',''],
            ['Setting','settinguser','Setting User'],
            ['Setting','settinghak','Setting Hak']
            
        ];


    public function bukawelcome(){
        return view('home1');
        //return view('auth.login');
    }
    public function bukacreateby(){
        return '<p style="color:red; text-align:center; font-size:18px;"> Aplikasi Perpustakaan Versi 1.0.1<br>
                Kampus Wearnes Education Center Malang<br>
                Created By : M. Fikih Nurul Fatkhan @2021 </p>';
    }
    public function bukaabout(){
        return view('pages.about');
    }
    public function bukadashboard(){
        $buku=buku::all();
        return view('halamanawal.halamanawal',compact('buku'));
    }

    public function bukakatalog(){
        $hal='Katalog';
        $listmenu =$this->menu;
        $listsubmenu =$this->submenu;
        return view('katalog.katalog',compact('listmenu','listsubmenu','hal'));
    }
    public function bukakoleksiterbaru(){
        $hal='Koleksi Terbaru';
        $listmenu =$this->menu;
        $listsubmenu =$this->submenu;
        return view('koleksiterbaru',compact('listmenu','listsubmenu','hal'));
    }
    public function bukaregister(){
        $hal='Register';
        $listmenu =$this->menu;
        $listsubmenu =$this->submenu;
        return view('register',compact('listmenu','listsubmenu','hal'));
    }
    public function settinguser(){
        $hal='Setting';
        $listmenu =$this->menu;
        $listsubmenu =$this->submenu;
        return view('setting.settinguser',compact('listmenu','listsubmenu','hal'));
    }
    public function settinghak(){
        $hal='Setting';
        $listmenu =$this->menu;
        $listsubmenu =$this->submenu;
        return view('setting.settinghak',compact('listmenu','listsubmenu','hal'));
    }
    public function guestbookuser(){
        $hal='Guestbook';
        $listmenu =$this->menu;
        $listsubmenu =$this->submenu;
        return view('guestbook.guestbookuser',compact('listmenu','listsubmenu','hal'));
    }
    public function guestbookadmin(){
        $hal='Guestbook';
        $listmenu =$this->menu;
        $listsubmenu =$this->submenu;
        return view('guestbook.guestbookadmin',compact('listmenu','listsubmenu','hal'));
    }

    // public function simpanbg(Request $request)
    // {
    //     return $request->all();
    // }







}
