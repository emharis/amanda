<?php

namespace App\Controllers\Setpt;

class BadanhukumController extends \BaseController {

    function getIndex() {
        $data = \DB::table('yayasan')->first();
        return \View::make('Setpt/Badanhukum/index', [
                    'data' => $data,
        ]);
    }
    
    function postSave   (){
        \DB::table('yayasan')->update(array(
            'kode' => \Input::get('kode'),
            'nama' => \Input::get('nama'),
            'alamat1' => \Input::get('alamat1'),
            'alamat2' => \Input::get('alamat2'),
            'kota' => \Input::get('kota'),
            'kdpos' => \Input::get('kdpos'),
            'telp' => \Input::get('telp'),
            'fax' => \Input::get('fax'),
            'tgl_akta' => \Input::get('tgl_akta'),
            'no_sk' => \Input::get('no_sk'),
            'tgl_pengesahan' => \Input::get('tgl_pengesahan'),
            'email' => \Input::get('email'),
            'website' => \Input::get('website'),
            'tgl_pendirian' => \Input::get('tgl_pendirian'),
            'updated_by' => \Session::get('onuserid'),
        ));
        
        return \Redirect::back();
    }

}
