<?php

namespace App\Controllers;

use App\Models\DatasetModel;

// use App\Models\DatasetModel;

class Dataset extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Dataset | SDM Telkom',
            'dataset' => $this->datasetModel->getDataset()
            // 'dataset' => $this->DatasetModel->getDataset()
            // dd($data);
        ];

        return view('pages/dataset', $data);
    }

    public function details($id_data)
    {

        $data = [
            'title' => 'Dataset | SDM Telkom',
            'dataset' => $this->datasetModel->getDataset($id_data)
        ];

        // jika dataset kosong pada tabel
        if (empty($data['dataset'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('File Data ' . $id_data . ' Tidak Ada');
        }

        return view('pages/details', $data);
    }

    // public function read()
    // {
    //     // $students = [];

    //     // if (($open = fopen(WRITEPATH . "uploads/berkas/data_test.csv", "r")) !== FALSE) {

    //     //     while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
    //     //         $students[] = $data;
    //     //     }

    //     //     fclose($open);
    //     // }

    //     // echo "<pre>";
    //     // print_r($students);
    // }

    public function delete($id_data)
    {
        //berdasarkan id
        $file = $this->datasetModel->find($id_data);

        //delete file
        unlink('uploads/berkas/' . $file['data']);

        $this->datasetModel->delete($id_data);
        return redirect()->to(base_url('/dataset'));
    }

    public function download($id_data)
    {
        // $berkas = new DatasetModel();
        $data = $this->datasetModel->find($id_data);
        $this->datasetModel->download('uploads/berkas/' . $data);
    }
}
