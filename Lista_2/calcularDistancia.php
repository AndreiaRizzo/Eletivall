<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Distância entre Pontos</title>
</head>

<body>
    <h1>Calculadora de Distância entre Pontos</h1>

    <form method="post">
        <h3>Ponto 1</h3>
        Coordenada X1: <input type="number" name="x1" required><br><br>
        Coordenada Y1: <input type="number" name="y1" required><br><br>

        <h3>Ponto 2</h3>
        Coordenada X2: <input type="number" name="x2" required><br><br>
        Coordenada Y2: <input type="number" name="y2" required><br><br>

        <input type="submit" value="Calcular Distância">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $x1 = $_POST['x1'];
        $y1 = $_POST['y1'];
        $x2 = $_POST['x2'];
        $y2 = $_POST['y2'];

        class Ponto
        {
            public $x;
            public $y;
            private static $contador = 0;

            public function __construct($x, $y)
            {
                $this->x = $x;
                $this->y = $y;
                self::$contador++;
            }

            public static function getContador()
            {
                return self::$contador;
            }

            public function calcularDistancia(Ponto $outroPonto)
            {
                $dx = $this->x - $outroPonto->x;
                $dy = $this->y - $outroPonto->y;
                return sqrt($dx * $dx + $dy * $dy);
            }

            public function calcularDistanciaCoordenadas($x, $y)
            {
                $dx = $this->x - $x;
                $dy = $this->y - $y;
                return sqrt(pow($dx, 2) + pow($dy, 2));
            }

            public static function calcularDistanciaEntrePontos($x1, $y1, $x2, $y2)
            {
                $dx = $x1 - $x2;
                $dy = $y1 - $y2;
                return sqrt(pow($dx, 2) + pow($dy, 2));
            }
        }

        // Criando os objetos Ponto
        $ponto1 = new Ponto($x1, $y1);
        $ponto2 = new Ponto($x2, $y2);

        // Calculando a distância
        $distancia = $ponto1->calcularDistancia($ponto2);

        // Formatando a distância para 2 casas decimais
        $distanciaFormatada = number_format($distancia, 2);

        // Exibindo os resultados
        echo "<h3>Resultados</h3>";
        echo "Distância entre os pontos ($x1, $y1) e ($x2, $y2): " . $distanciaFormatada . "<br>";
        echo "Número de objetos criados: " . Ponto::getContador() . "<br>";
    }
    ?>
</body>

</html>