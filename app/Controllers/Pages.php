<?php 

namespace App\Controllers;

class Pages extends BaseController{

    public function index(){
        $data=[
            'title'=>'Home | Riwaba.co'

        ];
       
        return view('pages/v_home',$data);
       
    }

    public function about(){
        $data=[
            'title'=>'About Us',
            'tes'=>['satu','dua','tiga']
        ];
        
        return view('pages/v_about',$data);
   
    }
    public function kontak(){
        $data=[
            'title'=>'Contact us',
            'alamat'=>[
                [
                    'tipe'=>'Rumah',
                    'alamat'=>'jl. Pagangsaan Timur no.123',
                    'kota'=>'bandung'
                ],
                [
                    'tipe'=>'Kantor',
                    'alamat'=>'jl. Setiabudi no.1',
                    'kota'=>'bandung'
                ]
            ]
        ];
        return view('pages/v_contact',$data);
    } 
}

?>