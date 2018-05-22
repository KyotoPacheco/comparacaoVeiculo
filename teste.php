<?php

        function potencia(){

            $potencia1 = 100;
            $potencia2 = 2;
            $potencia3 = 90;
            $potencia4 = 300;

            if ($potencia1 > $potencia2 and $potencia1 > $potencia3 and $potencia1 > $potencia4){
                echo "A maior potencia é do carro 1 que chega a: $potencia1 cv \n";
            } elseif ($potencia2 > $potencia1 and $potencia2 > $potencia3 and $potencia2 > $potencia4){
                echo "A maior potencia é do carro 2 que chega a: $potencia2 cv \n";
            } elseif ($potencia3 > $potencia1 and $potencia3 > $potencia2 and $potencia3 > $potencia4){
                echo "A maior potencia é do carro 3 que chega a: $potencia3 cv \n";
            } else {
                echo "A maior potencia é do carro 4 que chega a: $potencia4 cv \n";
            }
        };

        function preco(){

            $preco1 = 25000;
            $preco2 = 100000;
            $preco3 = 100;
            $preco4 = 500;

            if ($preco1 < $preco2 and $preco1 < $preco3 and $preco1 < $preco4){
                echo "O menor preço a se pagar é do carro 1 que custa em torno de: R$ $preco1 reais \n";
            } elseif ($preco2 < $preco1 and $preco2 < $preco3 and $preco2 < $preco4){
                echo "O menor preço a se pagar é do carro 2 que custa em torno de: R$ $preco2 reais \n";
            } elseif ($preco3 < $preco1 and $preco3 < $preco2 and $preco3 < $preco4){
                echo "O menor preço a se pagar é do carro 3 que custa em torno de: R$ $preco3 reais \n";
            } else {
                echo "O menor preço a se pagar é do carro 4 que custa em torno de: R$ $preco4 reais \n";
            }
        };

        function altura(){

            $altura1 = 1850;
            $altura2 = 1450;
            $altura3 = 2000;
            $altura4 = 2001;

            if ($altura1 > $altura2 and $altura1 > $altura3 and $altura1 > $altura4){
                echo "O carro 1 é o mais alto entre eles e possui: $altura1 mm (milimetros) de altura \n";
            } elseif ($altura2 > $altura1 and $altura2 > $altura3 and $altura2 > $altura4){
                echo "O carro 2 é o mais alto entre eles e possui: $altura2 mm (milimetros) de altura \n";
            } elseif ($altura3 > $altura1 and $altura3 > $altura2 and $altura3 > $altura4){
                echo "O carro 3 é o mais alto entre eles e possui: $altura3 mm (milimetros) de altura \n";
            } else {
                echo "O carro 4 é o mais alto entre eles e possui: $altura4 mm (milimetros) de altura \n";
            }
        };

        function comprimento(){

            $comprimento1 = 2203;
            $comprimento2 = 2202;
            $comprimento3 = 2201;
            $comprimento4 = 2200;

            if ($comprimento1 > $comprimento2 and $comprimento1 > $comprimento3 and $comprimento1 > $comprimento4){
                echo "O carro 1 é o mais comprido entre eles e possui: $comprimento1 mm (milimetros) de comprimento \n";
            } elseif ($comprimento2 > $comprimento1 and $comprimento2 > $comprimento3 and $comprimento2 > $comprimento4){
                echo "O carro 2 é o mais comprido entre eles e possui: $comprimento2 mm (milimetros) de comprimento \n";
            } elseif ($comprimento3 > $comprimento1 and $comprimento3 > $comprimento2 and $comprimento3 > $comprimento4){
                echo "O carro 3 é o mais comprido entre eles e possui: $comprimento3 mm (milimetros) de comprimento \n";
            } else {
                echo "O carro 4 é o mais comprido entre eles e possui: $comprimento4 mm (milimetros) de comprimento \n";
            }
        };

        function velocidade(){

            $vel1 = 160;
            $vel2 = 150;
            $vel3 = 140;
            $vel4 = 130;

            if ($vel1 > $vel2 and $vel1 > $vel3 and $vel1 > $vel4){
                echo "o carro 1 é o mais rápido com: $vel1 km/h \n";
            } elseif ($vel2 > $vel1 and $vel2 > $vel3 and $vel2 > $vel4){
                echo "o carro 2 é o mais rápido com: $vel2 km/h \n";
            } elseif ($vel3 > $vel1 and $vel3 > $vel2 and $vel3 > $vel4){
                echo "o carro 3 é o mais rápido com: $vel3 km/h \n";
            } else {
                echo "o carro 4 é o mais rápido com: $vel4 km/h \n";
            }
        };

        function tq_combustivel(){

            $tq_combustivel1 = 76;
            $tq_combustivel2 = 75;
            $tq_combustivel3 = 74;
            $tq_combustivel4 = 73;

            if ($tq_combustivel1 > $tq_combustivel2 and $tq_combustivel1 > $tq_combustivel3 and $tq_combustivel1 > $tq_combustivel4){
                echo "o carro 1 é o que possui o maior tamque de combustivel com cerca de: $tq_combustivel1 litros \n";
            } elseif ($tq_combustivel2 > $tq_combustivel1 and $tq_combustivel2 > $tq_combustivel3 and $tq_combustivel2 > $tq_combustivel4){
                echo "o carro 2 é o que possui o maior tamque de combustivel com cerca de: $tq_combustivel2 litros \n";
            } elseif ($tq_combustivel3 > $tq_combustivel2 and $tq_combustivel3 > $tq_combustivel1 and $tq_combustivel3 > $tq_combustivel4){
                echo "o carro 3 é o que possui o maior tamque de combustivel com cerca de: $tq_combustivel3 litros \n";
            } else {
                echo "o carro 4 é o que possui o maior tamque de combustivel com cerca de: $tq_combustivel4 litros \n";
            }
        };

        function portaMalas(){

            $portaM1 = 306;
            $portaM2 = 305;
            $portaM3 = 304;
            $portaM4 = 303;

            if ($portaM1 > $portaM2 and $portaM1 > $portaM3 and $portaM1 > $portaM4){
                echo "O carro 1 possui o maior porta malas entre eles com: $portaM1 litros \n";
            } elseif ($portaM2 > $portaM1 and $portaM2 > $portaM3 and $portaM2 > $portaM4){
                echo "O carro 2 possui o maior porta malas entre eles com: $portaM2 litros \n";
            } elseif ($portaM3 > $portaM1 and $portaM3 > $portaM2 and $portaM3 > $portaM4){
                echo "O carro 3 possui o maior porta malas entre eles com: $portaM3 litros \n";
            } else {
                echo "O carro 4 possui o maior porta malas entre eles com: $portaM4 litros \n";
            }
        };

        function consumoUrb(){

            $consumo_urb1 = 10.6;
            $consumo_urb2 = 10.5;
            $consumo_urb3 = 10.4;
            $consumo_urb4 = 10.3;

            if ($consumo_urb1 > $consumo_urb2 and $consumo_urb1 > $consumo_urb3 and $consumo_urb1 > $consumo_urb4) {
                echo "O carro 1 é o mais economico nas ruas das cidades com: $consumo_urb1 l/km \n";
            } elseif ($consumo_urb2 > $consumo_urb1 and $consumo_urb2 > $consumo_urb3 and $consumo_urb2 > $consumo_urb4) {
                echo "O carro 2 é o mais economico nas ruas das cidades com: $consumo_urb2 l/km \n";
            } elseif ($consumo_urb3 > $consumo_urb2 and $consumo_urb3 > $consumo_urb1 and $consumo_urb3 > $consumo_urb4) {
                echo "O carro 3 é o mais economico nas ruas das cidades com: $consumo_urb3 l/km \n";
            } else {
                echo "O carro 4 é o mais economico nas ruas das cidades com: $consumo_urb4 l/km \n";
            }
        };

        function consumoRod(){

            $consumo_rod1 = 10.6;
            $consumo_rod2 = 10.5;
            $consumo_rod3 = 10.4;
            $consumo_rod4 = 10.3;

            if ($consumo_rod1 > $consumo_rod2 and $consumo_rod1 > $consumo_rod3 and $consumo_rod1 > $consumo_rod4) {
                echo "O carro 1 é o mais economico nas estradas com: $consumo_rod1 l/km \n";
            } elseif ($consumo_rod2 > $consumo_rod1 and $consumo_rod2 > $consumo_rod3 and $consumo_rod2 > $consumo_rod4) {
                echo "O carro 2 é o mais economico nas estradas com: $consumo_rod2 l/km \n";
            } elseif ($consumo_rod3 > $consumo_rod2 and $consumo_rod3 > $consumo_rod1 and $consumo_rod3 > $consumo_rod4) {
                echo "O carro 3 é o mais economico nas estradas com: $consumo_rod3 l/km \n";
            } else {
                echo "O carro 4 é o mais economico nas estradas com: $consumo_rod4 l/km \n";
            }
        };

        function largura(){

            $largura1 = 1806;
            $largura2 = 1805;
            $largura3 = 1804;
            $largura4 = 1803;

            if ($largura1 > $largura2 and $largura1 > $largura3 and $largura1 > $largura4) {
                echo "O carro 1 é o mais largo dentre eles com: $largura1 mm de largura \n";
            } elseif ($largura2 > $largura1 and $largura2 > $largura3 and $largura2 > $largura4) {
                echo "O carro 2 é o mais largo dentre eles com: $largura2 mm de largura \n";
            } elseif ($largura3 > $largura2 and $largura3 > $largura1 and $largura3 > $largura4) {
                echo "O carro 3 é o mais largo dentre eles com: $largura3 mm de largura \n";
            } else {
                echo "O carro 4 é o mais largo dentre eles com: $largura4 mm de largura \n";
            }
        };

        function direcao(){

            $mecanica   = "mecanica";
            $hidraulica = "hidraulica";
            $eletrica   = "eletrica";

            if ($eletrica > $hidraulica and $eletrica > $mecanica){
                echo "O carro de direção elétrica é a melhor dentre eles";
            } elseif ($hidraulica > $mecanica and $hidraulica > $eletrica){
                echo "A direção hidraulica é a melhor entre eles";
            } elseif ($mecanica > $hidraulica and $mecanica > $eletrica){
                echo "A direção mecanica é a melhor dentre eles";
            }

        }

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div id="info">

        <?php potencia(); ?>
        <br>
        <?php preco(); ?>
        <br>
        <?php altura(); ?>
        <br>
        <?php comprimento(); ?>
        <br>
        <?php largura(); ?>
        <br>
        <?php velocidade(); ?>
        <br>
        <?php tq_combustivel(); ?>
        <br>
        <?php portaMalas(); ?>
        <br>
        <?php consumoUrb(); ?>
        <br>
        <?php consumoRod(); ?>
        <br>
        <?php direcao(); ?>

    </div>

</body>
</html>



