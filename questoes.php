<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Questões</title>

    <style>
        #space {
            margin-top: 30px;
        }

        body {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container" id="space">
            <div class="col">
                <strong>1ª Questão</strong><br>
                <code>
                    function somar($x, $y){<br>
                    return $soma = intval($x) + intval($y);<br>
                    }<br><br>

                    $x = $_GET['valor1'];<br>
                    $y = $_GET['valor2'];<br>

                    echo somar($x, $y);
                </code>
            </div><br>
            <div class="col">
                <strong>2ª QUestão</strong><br>
                <code>
                    function media($val1, $val2, $val3) {<br>
                    return $media = (intval($val1) + intval($val2) + intval($val3)) / 3;<br>
                    }<br>
                    $val1 = $_GET['valor'];<br>
                    $val2 = $_GET['valor2'];<br>
                    $val3 = $_GET['valor3'];<br><br>
                    $media = media($val1, $val2, $val3);<br>

                    echo "A media foi $media";
                </code>
            </div><br>
            <div class="col">
                <strong>3ª Questão</strong><br>
                <code>
                    function quadrado($x) {<br>
                    return $r = intval($x) * intval($x);<br>
                    }<br>

                    $a = $_GET['valor1'];<br>
                    $b = $_GET['valor2'];<br><br>

                    $a = quadrado($a);<br>
                    $b = quadrado($b);<br>

                    $soma = intval($a) + intval($b);<br><br>

                    echo "A soma dos quadrados dos números é: $soma";<br>
                </code>
            </div><br>
            <div class="col">
                <strong>4ª Questão</strong><br>
                <code>
                    function transforma($x) {<br>
                    return $r = floatval($x) * 3.6;<br>
                    }<br><br>

                    $vel = $_GET['valor'];<br>

                    $resposta = transforma($vel);<br>

                    echo $resposta;
                </code>
            </div><br>
            <div class="col">
                <strong>6ª Questão</strong><br>
                <code>
                    $valor = $_GET['valor'];<br>

                    $desconto = intval($valor) * 0.07;<br>

                    $valorD = intval($valor) - intval($desconto);<br>
                    <br>
                    echo "O valor original é: $valor";<br>
                    echo "O valor do desconto é : $desconto\n";<br>
                    echo "O valor com o desconto é: $valorD";<br>

                </code>
            </div><br>
            <div class="col">
                <strong>7ª QUestão</strong><br>
                <code>
                    for($x = 0; $x < 20; $x++) {<br>
                        $valor[100] = fgets(STDIN, 1000);<br>
                        }<br>

                        for($y = 0; $y < 10; $y++){<br>
                            $soma = 0;<br>
                            $soma = $valor[$y];<br>
                            }<br>

                            echo $soma;<br>
                </code>
            </div><br>
            <div class="col">
                <strong>9ª Questão</strong><br>
                <code>
                    $valor =$_GET['valor'];

                    $acrescimo = floatval($valor) * 0.16;

                    $valorN = floatval($valor) + floatval($acrescimo);

                    $valorParcela = floatval($valorN) / 10;

                    $valorParcela = number_format($valorParcela, 2, '.', '');

                    echo "Valor da Parcela: $valorParcela\n";
                    echo "Valor total da compra: $valorN";
                </code>
            </div><br>
            <div class="col">
                <strong>10ª Questões</strong><br>
                <code>
                    $distancia = $_GET['valor'];<br>
                    $combustivel = $_GET['valor2'];<br>
                    $consumo;<br>

                    $consumo = intval($distancia) / intval($combustivel);<br>

                    echo $consumo;<br>
                </code>
            </div><br>
            <div class="col">
                <strong>8ª Questão</strong><br>
                <code>
                    function somar($a, $b){<br>
                    echo 'Resultado = '.(intval($a)+intval($b));<br>
                    }<br>

                    function subtrair($a, $b){<br>
                    echo 'Resultado = '.(intval($a)-intval($b));<br>
                    }<br>

                    function dividir($a, $b){<br>
                    echo 'Resultado = '.(intval($a)/intval($b));<br>
                    }<br>

                    function multiplicar($a, $b){<br>
                    echo 'Resultado = '.(intval($a)*intval($b));<br>
                    }<br>
                    echo 'Defina o primeiro valor: ';<br>
                    $x = fgets(STDIN, 1000);<br>

                    echo 'Defina o segundo valor: ';<br>
                    $y = fgets(STDIN, 1000);<br>

                    echo 'Escolha a operação: ';<br>
                    $operacoes = fgets(STDIN, 1000);<br>

                    $operacoes = intval($operacoes);<br>

                    $a = fgets(STDIN, 1000);<br>
                    $b = fgets(STDIN, 1000);<br>

                    if($operacoes == '1'){<br>
                    somar($x, $y);<br>
                    }<br>
                    else if($operacoes == '2'){<br>
                    subtrair($x, $y);<br>
                    }<br>
                    else if($operacoes == '3'){<br>
                    dividir($x, <br>$y);<br>
                    }
                    else if($operacoes == '4'){<br>
                    multiplicar($x, $y);<br>
                    }<br>

                    ?>
                </code>

            </div><br>

    </div><br>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>