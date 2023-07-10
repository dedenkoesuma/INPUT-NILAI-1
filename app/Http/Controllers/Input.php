<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Input extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function save(Request $request)
    {   
        $value = [
            "nama" => $request->input('nama'),
            "kelas" => $request->input('kelas'),
            "matematika" => $request->input('matematika'),
            "fisika" => $request->input('fisika'),
            "kimia" => $request->input('kimia')
        ];
        
        $averageMatematika = array_sum($value['matematika']) / count($value['matematika']);
        $averageFisika = array_sum($value['fisika']) / count($value['fisika']);
        $averageKimia = array_sum($value['kimia']) / count($value['kimia']);
    
        // Menghitung rata-rata total nilai
        $average = ($averageMatematika + $averageFisika + $averageKimia) / 3;

        $params = [
            "name" => $value['nama'],
            "class" => $value['kelas'],
            "average" =>round($average),
            "nilai" => "",
            "matematika" => $value['matematika'],
            "fisika" => $value['fisika'],
            "kimia" => $value['kimia'],
            "averageMtk" => array_sum($value['matematika']) /count($value['matematika']),
            "averageFisika" => array_sum($value['fisika']) / count($value['fisika']),
            "averageKimia" => array_sum($value['kimia']) /count($value['kimia'])
        ];
        
        if ($params["average"] > 90) {
            $params["nilai"] = "Sangat Baik";
        } else if ($params["average"] > 80 && $params["average"] < 90) {
            $params["nilai"] = "Baik";
        } else if ($params["average"] > 70 && $params["average"] < 80) {
            $params["nilai"] = "Cukup";
        } else if ($params["average"] > 60 && $params["average"] < 70) {
            $params["nilai"] = "Kurang";
        } else {
            $params["nilai"] = "Nilai Invalid";
        };

        return view("save", $params);
    }
}
