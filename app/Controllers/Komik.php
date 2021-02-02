<?php 
namespace App\Controllers;
use App\Models\KomikModel;

class Komik extends BaseController{
    protected $komikModel;
    public function __construct()
    {
        $this->komikModel=new KomikModel();
    }
    public function index(){

    // $komik=$this->komikModel->findAll();
   
    $data=[
        'title'=>'daftar komik',
        'title2'=>'Daftar Komik',
        'komik'=>$this->komikModel->getKomik()
    ];
    // contoh manual konek DB
    // $db=\Config\Database::connect();
    // $komik=$db->query("SELECT * FROM komik");
    // d($komik);

  
    return view('komik/v_index',$data);
    }
   
    public function detail($slug){
        $data=[

        'komik'=>$this->komikModel->getKomik($slug),
        'title'=>'Detail Komik',
        'title2'=>'Detail Komik'
        
            
    ];
    return view('komik/v_detail',$data);
    }
    public function create(){
      
        $data=[

            'title'=>'Form Tambah Data',
            'title2'=>'Form Tambah Data Komik',
            'validation'=>\Config\Services::validation(),
        ];
        return view('komik/v_create',$data);
    }
    public function save(){
        if(!$this->validate([
            'judul'=>[
                'rules'=>'required|is_unique[komik.judul]',
                'errors'=>[
                    'required'=>'{field} Komik Harus di Isi',
                    'is_unique'=>'{field} Komik Sudah ada'
                ]
            ]
        ])){
            $validation=\Config\Services::validation();

        return redirect()->to('/komik/create')->withInput()->with('validation',$validation);
        }
        $slug=url_title($this->request->getVar('judul'),'-',true);
        $this->komikModel->save([
            'judul'=>$this->request->getVar('judul'),
            'sampul'=>$this->request->getVar('sampul'),
            'slug'=>$slug
        ]);

        session()->setFlashdata('pesan','data berhasil di tambah');
        return redirect()->to('/komik');
    }
}
?>