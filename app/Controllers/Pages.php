<?php

namespace App\Controllers;


class Pages extends BaseController
{
    protected $table = 'tb_data';

    public function index()
    {
        $data = [
            'title' => 'Dashboard | SDM Telkom '
        ];

        return view('pages/dashboard', $data);
    }

    public function results()
    {
        $data = [
            'title' => 'Results | SDM Telkom '
        ];

        return view('pages/results', $data);
    }

    public function template()
    {
        $data = [
            'title' => 'Template | SDM Telkom '
        ];

        return view('pages/template', $data);
    }

    public function history()
    {
        $data = [
            'title' => 'History | SDM Telkom '
        ];

        return view('pages/history', $data);
    }

    public function book()
    {
        $data = [
            'title' => 'Book | SDM Telkom '
        ];

        return view('pages/book', $data);
    }
}
