<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PesanController extends Controller
{
    /**  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->has("role")){
            
            if(session()->get("role") == "admin"){
                return view("welcome");
            }elseif(session()->get("role") == "kasir"){
                return redirect('kasir');
            }
        }else{
            return redirect('/login');
        }
               
        
    }

    public function login() {
        return view('login');

    }    

    public function addproduct() {
        return view('addproduct');
    }

    public function barang() {
        $data = DB::table('tb_barang')->get();
        return view('barang',['data' => $data]);
    }

    public function edit_stok() {
        return view('edit_stok');
    }

    public function edit_harga() {
        return view('edit_harga');
    }

    public function manifest() {
        $data = DB::table('tb_manifest')->get();
        return view('manifest',['data' => $data]);
    }

    public function ganti_user() {
        $data = DB::table('login')->get();
        return view('ganti_user',['data' => $data]);
    }
   
   public function cek_login(Request $log ) {
        $coy = $log -> email; 
        $yoc = $log -> pass;

        $req = DB::table('login')->where('user',$coy)->count();
        if($req == null) {
             return redirect('/');

         }else{
            $users = DB::table('login')->where('user',$coy)->first();
            
            if($coy == $users->user) {
                        //xif(Hash::check($pass, $users->password))
                        if($yoc == $users->pass)
                        //if("aaa" == $yoc) 
                        {
                            if ($users-> role == "admin") {
                                $log->session()->put("nama",$users->user);
                                $log->session()->put("id",$users->id_login);  
                                $log->session()->put("role","admin");
                                return redirect('/');
                            }else{
                                $log->session()->put("nama",$users->user);
                                $log->session()->put("id",$users->id_login);  
                                $log->session()->put("role","kasir");
                                return redirect('/kasir');

                            }
                                
                            
                        }   
                            }
                    }
                }
            
    public function logout(Request $out ) {
            $out -> session()->flush();
        return redirect('/login');
    }


    
    public function add_user() {
        return view('add_user');
    }
    public function edit_user() {
        
        return view('edit_user');
    }

    public function manifest_kasir() {
        return view('manifest_kasir');
    }
    
    public function barang_kasir() {
        $data = DB::table('tb_barang')->get(); //manampilkan data dari database
        return view('barang_kasir',['data' => $data]);
    }

    public function kasir() {
        return view('kasir');
    }

    public function insertuser(Request $req) { 
        
        DB::table('login')->insert([
            'user' => $req->email,  //email name di view   
            'pass' => $req->password,
            'role' => "kasir",             
        ]);
        return redirect('/ganti_user');
    }

    public function hapusakun($id) {
        DB::table('login')->where('id_login',$id)->delete();
        return back();
    }

    public function edituser($id) {
        
        $data = DB::table('login')->where('id_login',$id)->first();
        return view('edit_user ', ['data'=>$data]);
    }

    public function updateakun(Request $req){
        DB::table('login')->where('id_login',$req->id)->update([
                'user' => $req->email,
                'pass' => $req->password
            ]);
            return redirect('/ganti_user');

    }   

    public function insertproduct(Request $req) { 
        
        DB::table('tb_barang')->insert([
            'kode_barang' => $req->kodebarang,    
            'merk' => $req->merk,
            'nama_barang' => $req->namabarang,
            'harga_beli' => $req->hargabeli,
            'harga_jual' => $req->hargajual,
            'stok' => $req->stok,

        ]);
        return redirect('/barang');
    }

    public function hapusproduct($id) {
        DB::table('tb_barang')->where('id_barang',$id)->delete();
        return back();
    }

    public function editharga($id) {
        
        $data = DB::table('tb_barang')->where('id_barang',$id)->first();
        return view('edit_harga ', ['data'=>$data]);
    }

    public function updateharga(Request $req){
        DB::table('tb_barang')->where('id_barang',$req->id)->update([
                'harga_beli' => $req->hargaawal,
                'harga_jual' => $req->hargasekarang
            ]);
            return redirect('/barang');

    }

    public function editstok($id) {
        
        $data = DB::table('tb_barang')->where('id_barang',$id)->first();
        return view('edit_stok ', ['data'=>$data]);
    }

    public function updatestok(Request $req){
        DB::table('tb_barang')->where('id_barang',$req->id)->update([
                'kode_barang' => $req->kodebarang,            
                'nama_barang' => $req->namabarang,
                'harga_beli' => $req->hargabeli,                
                'stok' => $req->jumlahbarang,
            ]);
            return redirect('/barang');

    }

    #########
    #BUATAN KEVIN
    #########
    public function InsertBarang(Request $req) { 
        $date = date('Y-m-d H:i:s');
        DB::table('tb_kasir')->insert([
            'kode_barang' => $req->kodebarang,            
            'nama_barang' => $req->namabarang,
            'merk' => $req->merk,
            'harga_satuan' => $req->harga_satuan,
            'jumlah' => $req->jumlah,
            'total' => $req->harga_satuan*$req->jumlah,
            'tanggal' => $date          
        ]);
        return redirect('/kasir');
    }

    public function DeleteBarang($id) {
        DB::table('tb_kasir')->where('id_kasir',$id)->delete();
        return back();
    }

    public function UpdateBarang(Request $req){
        $date = date('Y-m-d H:i:s');
        DB::table('tb_kasir')->where('id_kasir',$req->id)->update([
            'jumlah' => $req->jumlah,
            'total' => $req->harga_satuan*$req->jumlah,
            'tanggal' => $date  
            ]);
            return redirect('/kasir');

    }

   




}
