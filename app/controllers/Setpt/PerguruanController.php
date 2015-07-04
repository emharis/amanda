<?php

namespace App\Controllers\Setpt;

class PerguruanController extends \BaseController {

    function getIndex() {
        $data = \DB::table('yayasan')->first();
        return \View::make('Setpt/Badanhukum/index', [
                    'data' => $data,
        ]);
    }
    
    function postUpdate(){
        \DB::table('yayasan')->update(array(
            'kode' => \Input::get(''),
            'nama' => \Input::get(''),
            'alamat1' => \Input::get(''),
            'alamat2' => \Input::get(''),
            'kota' => \Input::get(''),
            'kdpos' => \Input::get(''),
            'telp' => \Input::get(''),
            'fax' => \Input::get(''),
            'tgl_akta' => \Input::get(''),
            'no_sk' => \Input::get(''),
            'tgl_pengesahan' => \Input::get(''),
            'email' => \Input::get(''),
            'website' => \Input::get(''),
            'tgl_pendirian' => \Input::get(''),
            'updated_by' => \Session::get('onuserid'),
        ));
        
        return \Redirect::back();
    }

}
