<?php

namespace App\Models;

use App\Controllers\BaseController;

class NewController extends BaseController
{
    public function index()
    {
        return view('forms/newform');
    }

    public function create()
    {
        // $session = session();

        $rules = [
            'lonumber' => 'required',
            'lotitle' => 'required',
            'abarcode' => 'required',
            'aserial' => 'required',
            'ardate' => 'required',
            'auser' => 'required',
            'alocation' => 'required',

            // 'password' => 'required|min_length[10]',
            // 'passconf' => 'required|matches[password]',
            // 'email'    => 'required|valid_email',
        ];

        if (!$this->validate($rules)) {
            return view('forms/newform', [
                'validation' => $this->validator,
            ]);
        } else {
            $now = new Time('now');
            $model = new Process_model();

            $model->save([
                'loNumber' => $this->request->getVar('lonumber'),
                'loTitle' => $this->request->getVar('lotitle'),
                'assetType' => $this->request->getVar('atype'),
                'assetBrand' => $this->request->getVar('abrand'),
                'assetBarcode' => $this->request->getVar('abarcode'),
                'assetSerial' => $this->request->getVar('aserial'),
                'receiveDate' => $this->request->getVar('ardate'),
                'assetUser' => $this->request->getVar('auser'),
                'currentLocation' => $this->request->getVar('alocation'),
                'assetOfficer' => $this->request->getVar('aofficer'),
                'created_by' => $this->request->getVar('createdby'),
                'created_at' => $now,
            ]);
        }
        return redirect()->to('/home')->with('create', 'success');
    }
}
