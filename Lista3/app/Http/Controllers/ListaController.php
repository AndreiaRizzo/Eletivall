<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ListaController
{
    public function mostrarExer1(){
        return view("exer1");
    }

    public function calcularExer1(Request $request){
        $valor1 = (int)$request->input("valor1");
        $valor2 = (int)$request->input("valor2");
        return $valor1 + $valor2;
    }

    public function mostrarExer2(){
        return view("exer2");
    }
    public function calcularExer2(Request $request){
        $valor1 = (int)$request->input("valor1");
        $valor2 = (int)$request->input("valor2");
        return $valor1 - $valor2;
    }

    public function mostrarExer3(){
        return view("exer3");
    }
    public function calcularExer3(Request $request){
        $valor1 = (int)$request->input("valor1");
        $valor2 = (int)$request->input("valor2");
        return $valor1 * $valor2;
      
    }

    public function mostrarExer4(){
        return view("exer4");
    }
    public function calcularExer4(Request $request){
        $valor1 = (int)$request->input("valor1");
        $valor2 = (int)$request->input("valor2");
        return $valor1 / $valor2;
      
    }

    public function mostrarExer5(){
        return view("exer5");
    }
    public function calcularExer5(Request $request){
        $valor1 = (float)$request->input("valor1");
        $valor2 = (float)$request->input("valor2");
        $valor3 = (float)$request->input("valor3");
        return ($valor1 + $valor2 + $valor3)/3;
      
    }

    public function mostrarExer6(){
        return view("exer6");
    }
    public function calcularExer6(Request $request){
        $celsius = (float)$request->input("celsius");
        
        return ($celsius * 9/5)+ 32;
      
    }

    public function mostrarExer7(){
        return view("exer7");
    }
    public function calcularExer7(Request $request){
        $fah = (float)$request->input("fah");
        
        return ($fah - 32) / 1.8;
    }

}
