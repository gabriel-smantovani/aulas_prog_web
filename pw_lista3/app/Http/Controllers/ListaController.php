<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    //Página de navegação
    public function mostrarNavegacao() {
        return view('navegacao');
    }

    //Exercício 1
    public function mostrarExer1() {
        return view('exer1');
    }


    public function somar(Request $request) {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');

        return $valor1 + $valor2;
    }


    //Exercício 2
    public function mostrarExer2() {
        return view('exer2');
    }

    public function subtrair(Request $request) {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');

        return $valor1 - $valor2;
    }


    //Exercício 3
    public function mostrarExer3() {
        return view('exer3');
    }

    public function multiplicar(Request $request) {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');

        return $valor1 * $valor2;
    }


    //Exercício 4
    public function mostrarExer4() {
        return view('exer4');
    }

    public function dividir(Request $request) {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');

        if($valor2 == 0) {
            return 'Divisão por 0 (zero) não é possível!';
        }
        return $valor1 / $valor2;
    }


    //Exercício 5
    public function mostrarExer5() {
        return view('exer5');
    }

    public function calcularMediaAritimetica(Request $request) {
        $pattern = '/,/i';

        $valor1 = $request->input('valor1');
        $valor2 = $request->input('valor2');
        $valor3 = $request->input('valor3');

        $valor1 = (float)preg_replace($pattern, '.', $valor1);
        $valor2 = (float)preg_replace($pattern, '.', $valor2);
        $valor3 = (float)preg_replace($pattern, '.', $valor3);

        return ($valor1 + $valor2 + $valor3)/3;
    }


    //Exercício 6
    public function mostrarExer6() {
        return view('exer6');
    }

    public function converterCelsiusPFahrenheit(Request $request) {
        $pattern = '/,/i';

        $valorCelsius = $request->input('valorCelsius');

        $valorCelsius = (float)preg_replace($pattern, '.', $valorCelsius);

        return (9/5) * $valorCelsius + 32;
    }


    //Exercício 7
    public function mostrarExer7() {
        return view('exer7');
    }

    public function converterFahrenheitPCelsius(Request $request) {
        $pattern = '/,/i';

        $valorFahrenheit = $request->input('valorFahrenheit');

        $valorFahrenheit = (float)preg_replace($pattern, '.', $valorFahrenheit);

        return ($valorFahrenheit - 32) * (5/9);
    }


    //Exercício 8
    public function mostrarExer8() {
        return view('exer8');
    }

    public function calcularAreaRetangulo(Request $request) {
        $pattern = '/,/i';

        $valorLargura = $request->input('valorLargura');
        $valorAltura = $request->input('valorAltura');

        $valorLargura = (float)preg_replace($pattern, '.', $valorLargura);
        $valorAltura = (float)preg_replace($pattern, '.', $valorAltura);

        return $valorLargura * $valorAltura;
    }


    //Exercício 9
    public function mostrarExer9() {
        return view('exer9');
    }

    public function calcularAreaCirculo(Request $request) {
        $pattern = '/,/i';

        $valorRaio = $request->input('valorRaio');

        $valorRaio = (float)preg_replace($pattern, '.', $valorRaio);

        return M_PI * pow($valorRaio, 2);
    }


    //Exercício 10
    public function mostrarExer10() {
        return view('exer10');
    }

    public function calcularPerimetroRetangulo(Request $request) {
        $pattern = '/,/i';

        $valorLargura = $request->input('valorLargura');
        $valorAltura = $request->input('valorAltura');

        $valorLargura = (float)preg_replace($pattern, '.', $valorLargura);
        $valorAltura = (float)preg_replace($pattern, '.', $valorAltura);

        return $valorLargura * 2 + $valorAltura * 2;
    }


    //Exercício 11
    public function mostrarExer11() {
        return view('exer11');
    }

    public function calcularPerimetroCirculo(Request $request) {
        $pattern = '/,/i';

        $valorRaio = $request->input('valorRaio');

        $valorRaio = (float)preg_replace($pattern, '.', $valorRaio);

        return (2 * M_PI * $valorRaio);
    }


    //Exercício 12
    public function mostrarExer12() {
        return view('exer12');
    }

    public function potencializar(Request $request) {
        $pattern = '/,/i';

        $valorBase = $request->input('valorBase');
        $valorExpoente = (int)$request->input('valorExpoente');

        $valorBase = (float)preg_replace($pattern, '.', $valorBase);

        return pow($valorBase, $valorExpoente);
    }


    //Exercício 13
    public function mostrarExer13() {
        return view('exer13');
    }

    public function converterMetrosPCentimetros(Request $request) {
        $pattern = '/,/i';

        $valorMetros = $request->input('valorMetros');

        $valorMetros = (float)preg_replace($pattern, '.', $valorMetros);

        return $valorMetros * 100;
    }


    //Exercício 14
    public function mostrarExer14() {
        return view('exer14');
    }

    public function converterKmPMilha(Request $request) {
        $pattern = '/,/i';

        $valorKm = $request->input('valorKm');

        $valorKm = (float)preg_replace($pattern, '.', $valorKm);

        return $valorKm * 0.621371;
    }


    //Exercício 15
    public function mostrarExer15() {
        return view('exer15');
    }

    public function calcularIMC(Request $request) {
        $pattern = '/,/i';

        $valorPeso = $request->input('valorPeso');
        $valorAltura = $request->input('valorAltura');

        $valorPeso = (float)preg_replace($pattern, '.', $valorPeso);
        $valorAltura = (float)preg_replace($pattern, '.', $valorAltura);

        return $valorPeso / pow($valorAltura, 2);
    }


    //Exercício 16
    public function mostrarExer16() {
        return view('exer16');
    }

    public function calcularPrecoCDesconto(Request $request) {
        $pattern = '/,/i';

        $valorPreco = $request->input('valorPreco');
        $percentualDesconto = $request->input('percentualDesconto');

        $valorPreco = (float)preg_replace($pattern, '.', $valorPreco);
        $percentualDesconto = (float)preg_replace($pattern, '.', $percentualDesconto);

        return $valorPreco * (1 - ($percentualDesconto / 100));
    }


    //Exercício 17
    public function mostrarExer17() {
        return view('exer17');
    }

    public function calcularJurosSimples(Request $request) {
        $pattern = '/,/i';

        $valorCapital = $request->input('valorCapital');
        $percentualTaxa = $request->input('percentualTaxa');

        $valorCapital = (float)preg_replace($pattern, '.', $valorCapital);
        $percentualTaxa = (float)preg_replace($pattern, '.', $percentualTaxa);

        $periodo = (int)$request->input('periodo');

        return "Valor já com juros simples: " . $valorCapital + $valorCapital * ($percentualTaxa / 100) * $periodo;
    }


    //Exercício 18
    public function mostrarExer18() {
        return view('exer18');
    }

    public function calcularJurosComposto(Request $request) {
        $pattern = '/,/i';

        $valorCapital = $request->input('valorCapital');
        $percentualTaxa = $request->input('percentualTaxa');

        $valorCapital = (float)preg_replace($pattern, '.', $valorCapital);
        $percentualTaxa = (float)preg_replace($pattern, '.', $percentualTaxa);
        
        $periodo = (int)$request->input('periodo');

        return "Valor já com juros compostos: " . $valorCapital * pow(1 + $percentualTaxa / 100, $periodo);
    }


    //Exercício 19
    public function mostrarExer19() {
        return view('exer19');
    }

    public function converterDiasHoraMinutoSegundo(Request $request) {
        $dias = (int)$request->input('dias');

        $horas = $dias * 24;
        $minutos = $horas * 60;
        $segundos = $minutos * 60;

        return "Os dias inseridos (" . $dias . ") equivalem a " . $horas . " horas ou " . $minutos . " minutos ou " . $segundos . " segundos!"; 
    }


    //Exercício 20
    public function mostrarExer20() {
        return view('exer20');
    }

    public function calcularVelocidade(Request $request) {
        $pattern = '/,/i';

        $valorDistancia = $request->input('valorDistancia');
        $tempo = $request->input('tempo');

        $valorDistancia = (float)preg_replace($pattern, '.', $valorDistancia);
        $tempo = (float)preg_replace($pattern, '.', $tempo);

        return "A velocidade é de " . $valorDistancia / $tempo . " unidade da distância/unidade do tempo.";
    }
}
