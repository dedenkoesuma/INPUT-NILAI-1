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
        
        $nilai = [$value["matematika"], $value["fisika"], $value["kimia"]];
        $mtk = [$value['matematika']];
        $fisika = [$value['fisika']];
        $kimia = [$value['kimia']];

        $params = [
            "name" => $value['nama'],
            "class" => $value['kelas'],
            "average" =>round(array_sum($nilai) / count($nilai)),
            "nilai" => "",
            "averageMtk" => array_sum($mtk) /count($mtk),
            "averageFisika" => array_sum($fisika) / count($fisika),
            "averageKimia" => array_sum($kimia) /count($kimia)
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
