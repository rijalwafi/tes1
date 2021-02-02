<?php namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table='komik';
    protected $primary_key='id';
    protected $useTimeStamps=TRUE;
    protected $allowedFields=['sampul','judul','slug'];

    public function getKomik($slug=false){

        if($slug==false){
            return $this->findAll();
        }
        return $this->where(['slug'=>$slug])->first();
    }
}