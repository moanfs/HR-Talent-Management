<?php

namespace App\Controllers;

class Predict extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Predict | SDM Telkom '
        ];

        return view('pages/upload', $data);
    }

    public function model()
    {
        $data = [
            'title' => 'Uplaod | SDM Telkom '
        ];

        return view('pages/models', $data);
    }

    public function result()
    {
        $data = [
            'title' => 'Result | SDM Telkom '
        ];


        return view('pages/result', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'data' => [
                'rules' => 'uploaded[data]|ext_in[data,csv,xlsx]|max_size[data,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    // 'mime_in' => 'File Extention Harus Berupa csv dan excel',
                    'ext_in' => 'File Extention Harus Berupa csv dan excel',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $dataset = $this->request->getFile('data');
        $dataset->move('uploads/berkas');
        $namadata = $dataset->getName();

        $this->datasetModel->save([
            'data' => $namadata
        ]);

        return redirect()->to(base_url('predict/model'));

        // Random name
        // $berkas = new DatasetModel();
        // $dataBerkas = $this->request->getFile('data');
        // $fileName = $dataBerkas->getRandomName();
        // $berkas->insert([
        //     'data' => $fileName
        // ]);
        // $dataBerkas->move('uploads/berkas/', $fileName);
        // session()->setFlashdata('success', 'Berkas Berhasil diupload');
        // return redirect()->to(base_url('predict/model'));
    }


    public function randomforest()
    {
        $data = [
            'title' => 'Random Forest | SDM Telkom '
        ];

        return view('predicts/randomforest', $data);
    }

    public function treeboosting()
    {
        $data = [
            'title' => 'Gradinet Tree Boosting | SDM Telkom '
        ];

        return view('predicts/treeboosting', $data);
    }

    public function neighbors()
    {
        // $perintah = "C:\Users\moan\AppData\Local\Programs\Python\Python310\python.exe C:\xampp\htdocs\c4app\app\Views\neighbors.py";

        $data = [
            'title' => 'N-neighbors | SDM Telkom ',
            // 'output' => shell_exec($perintah)
        ];

        return view('predicts/neighbors', $data);
    }
}
