<?php

namespace App\Controllers;

use App\Models\AntrianModel;

class Antrian extends BaseController
{
    public function index()
    {
        $model = new AntrianModel();
        $data['antrian'] = $model->findAll();

        return view('antrian/index', $data);
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {
            $model = new AntrianModel();
            $model->insert([
                'nomor_antrian' => 'A' . str_pad($model->countAll() + 1, 3, '0', STR_PAD_LEFT),
                'nama' => $this->request->getPost('nama'),
            ]);

            return redirect()->to('/');
        }

        return view('antrian/tambah');
    }
    public function edit($id)
    {
    $model = new AntrianModel();
    
    if ($this->request->getMethod() === 'post') {
        $model->update($id, [
            'nama' => $this->request->getPost('nama'),
            'status' => $this->request->getPost('status'),
        ]);
        return redirect()->to('/');
    }

    $data['antrian'] = $model->find($id);
    return view('antrian/edit', $data);
    }
    public function hapus($id)
    {
    $model = new AntrianModel();
    $model->delete($id);
    return redirect()->to('/');
    }


}
