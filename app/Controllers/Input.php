<?php

namespace App\Controllers;


class Input extends BaseController{
    public function index(){
        helper('form');

        if (! $this->validate([
            'nama' => 'required',
            'nis' => 'required|numeric|min_length[5]',
            'kelas' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'alamat' => 'required',
            'jkel' => 'required',
            'agama' => 'required',
        ],
            [
                'nama' => [
                    'required' => 'Nama Harus diisi'
                ],
                'nis' => [
                    'required' => 'NIS Harus diisi',
                    'numeric' => 'NIS harus berisi angka',
                    'min_length' => 'Minimal 5 angka'
                ],
                'kelas' => [
                    'required' => 'Kelas Harus diisi'
                ],
                'tanggal' => [
                    'required' => 'Tanggal lahir Harus diisi'
                ],
                'tempat' => [
                    'required' => 'Tempat tinggal Harus diisi'
                ],
                'alamat' => [
                    'required' => 'Alamat Harus diisi'
                ],
                'jkel' => [
                    'required' => 'Jenis kelamin Harus diisi'
                ],
                'agama' => [
                    'required' => 'Agama Harus diisi'
                ],
            ])) 
        {
            return view('form_input', [
                'validation' => $this->validator,
            ]);
        } else {
            $this->input = new Input();
            return $this->input->hasil();
        }
    }

    public function hasil(){
        $data = [
            'nama' => $_POST["nama"],
            'nis' => $_POST["nis"],
            'kelas' => $_POST["kelas"],
            'tanggal' => $_POST["tanggal"],
            'tempat' => $_POST["tempat"],
            'alamat' => $_POST["alamat"],
            'jkel' => $_POST["jkel"],
            'agama' => $_POST["agama"],
        ];

        return view('hasil_input', $data);
    }
}