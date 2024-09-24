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

    public function mostrarExer8(){
        return view("exer8");
    }
    public function calcularExer8(Request $request){
        $altura = (float)$request->input("altura");
        $largura = (float)$request->input("largura");
        return $altura * $largura;
    }

    public function mostrarExer9(){
        return view("exer9");
    }
    public function calcularExer9(Request $request){
        $raio = (float)$request->input("raio");
        
        return pi() * pow($raio, 2) ;
    }

    public function mostrarExer10(){
        return view("exer10");
    }
    public function calcularExer10(Request $request){
        $altura = (float)$request->input("altura");
        $largura = (float)$request->input("largura");
        return 2*$altura + 2*$largura;
    }

    public function mostrarExer11(){
        return view("exer11");
    }
    public function calcularExer11(Request $request){
        $raio = (float)$request->input("raio");
        
        return 2 * pi() * $raio;
    }

    public function mostrarExer12(){
        return view("exer12");
    }
    public function calcularExer12(Request $request){
        $base = (float)$request->input("base");
        $expoente = (float)$request->input("expoente");
        return pow($base, $expoente);
    }
}
