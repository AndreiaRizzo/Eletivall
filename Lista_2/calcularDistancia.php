<?php
class Ponto {
    public $x;
    public $y;
    private static $contador = 0;

    // Construtor que recebe as coordenadas X e Y e atualiza o contador de objetos
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++;
    }

    // Método de classe para retornar o valor do contador de objetos criados
    public static function getContador() {
        return self::$contador;
    }

    // Método para calcular a distância entre a instância atual e outro objeto Ponto
    public function calcularDistancia(Ponto $outroPonto) {
        $dx = $this->x - $outroPonto->x;
        $dy = $this->y - $outroPonto->y;
        return sqrt($dx * $dx + $dy * $dy);
    }

    // Método para calcular a distância entre a instância atual e um ponto dado pelas coordenadas X e Y
    public function calcularDistanciaCoordenadas($x, $y) {
        $dx = $this->x - $x;
        $dy = $this->y - $y;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }

    // Método de classe para calcular a distância entre dois pontos, dadas as coordenadas X1, Y1 e X2, Y2
    public static function calcularDistanciaEntrePontos($x1, $y1, $x2, $y2) {
        $dx = $x1 - $x2;
        $dy = $y1 - $y2;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }
}

// Exemplo de uso
$ponto1 = new Ponto(3, 4);
$ponto2 = new Ponto(7, 1);

// Distância entre dois objetos Ponto
echo "Distância entre os pontos: " . $ponto1->calcularDistancia($ponto2) . "<br>";

// Distância entre a instância atual e um ponto dado pelas coordenadas X e Y
echo "Distância até as coordenadas (0, 0): " . $ponto1->calcularDistanciaCoordenadas(0, 0) . "<br>";

// Distância entre dois pontos dados pelas coordenadas X1, Y1 e X2, Y2
echo "Distância entre as coordenadas (3, 4) e (7, 1): " . Ponto::calcularDistanciaEntrePontos(3, 4, 7, 1) . "<br>";

// Número de objetos criados
echo "Número de objetos criados: " . Ponto::getContador() . "<br>";
?>
