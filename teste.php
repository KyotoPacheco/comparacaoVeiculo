<?php

/*      <function potencia(){

            $potencia1 = 100;
            $potencia2 = 2;
            $potencia3 = 90;
            $potencia4 = 300;

            if ($potencia1 > $potencia2 and $potencia1 > $potencia3 and $potencia1 > $potencia4){
                echo "A maior potencia é do carro 1 que chega a: $potencia1 cv";
            } elseif ($potencia2 > $potencia1 and $potencia2 > $potencia3 and $potencia2 > $potencia4){
                echo "A maior potencia é do carro 2 que chega a: $potencia2 cv";
            } elseif ($potencia3 > $potencia1 and $potencia3 > $potencia2 and $potencia3 > $potencia4){
                echo "A maior potencia é do carro 3 que chega a: $potencia3 cv";
            } else {
                echo "A maior potencia é do carro 4 que chega a: $potencia4 cv";
            }
        }

        <function preco(){

            $preco1 = 25000;
            $preco2 = 100000;
            $preco3 = 100;
            $preco4 = 500;

            if ($preco1 < $preco2 and $preco1 < $preco3 and $preco1 < $preco4){
                echo "O menor preço a se pagar é do carro 1 que custa em torno de: R$ $preco1 reais";
            } elseif ($preco2 < $preco1 and $preco2 < $preco3 and $preco2 < $preco4){
                echo "O menor preço a se pagar é do carro 2 que custa em torno de: R$ $preco2 reais";
            } elseif ($preco3 < $preco1 and $preco3 < $preco2 and $preco3 < $preco4){
                echo "O menor preço a se pagar é do carro 3 que custa em torno de: R$ $preco3 reais";
            } else {
                echo "O menor preço a se pagar é do carro 4 que custa em torno de: R$ $preco4 reais";
            }
    }

        <function altura(){

            $altura1 = 1850;
            $altura2 = 1450;
            $altura3 = 2000;
            $altura4 = 2001;

            if ($altura1 > $altura2 and $altura1 > $altura3 and $altura1 > $altura4){
                echo "O carro 1 é o mais alto entre eles e possui: $altura1 mm (milimetros) de altura";
            } elseif ($altura2 > $altura1 and $altura2 > $altura3 and $altura2 > $altura4){
                echo "O carro 2 é o mais alto entre eles e possui: $altura2 mm (milimetros) de altura";
            } elseif ($altura3 > $altura1 and $altura3 > $altura2 and $altura3 > $altura4){
                echo "O carro 3 é o mais alto entre eles e possui: $altura3 mm (milimetros) de altura";
            } else {
                echo "O carro 4 é o mais alto entre eles e possui: $altura4 mm (milimetros) de altura";
            }
        }

        <function comprimento(){

            $comprimento1 = 2203;
            $comprimento2 = 2202;
            $comprimento3 = 2201;
            $comprimento4 = 2200;

            if ($comprimento1 > $comprimento2 and $comprimento1 > $comprimento3 and $comprimento1 > $comprimento4){
                echo "O carro 1 é o mais comprido entre eles e possui: $comprimento1 mm (milimetros) de comprimento";
            } elseif ($comprimento2 > $comprimento1 and $comprimento2 > $comprimento3 and $comprimento2 > $comprimento4){
                echo "O carro 2 é o mais comprido entre eles e possui: $comprimento2 mm (milimetros) de comprimento";
            } elseif ($comprimento3 > $comprimento1 and $comprimento3 > $comprimento2 and $comprimento3 > $comprimento4){
                echo "O carro 3 é o mais comprido entre eles e possui: $comprimento3 mm (milimetros) de comprimento";
            } else {
                echo "O carro 4 é o mais comprido entre eles e possui: $comprimento4 mm (milimetros) de comprimento";
            }
        }

        <function velocidade(){

            $vel1 = 160;
            $vel2 = 150;
            $vel3 = 140;
            $vel4 = 130;

            if ($vel1 > $vel2 and $vel1 > $vel3 and $vel1 > $vel4){
                echo "o carro 1 é o mais rápido com: $vel1 km/h";
            } elseif ($vel2 > $vel1 and $vel2 > $vel3 and $vel2 > $vel4){
                echo "o carro 2 é o mais rápido com: $vel2 km/h";
            } elseif ($vel3 > $vel1 and $vel3 > $vel2 and $vel3 > $vel4){
                echo "o carro 3 é o mais rápido com: $vel3 km/h";
            } else {
                echo "o carro 4 é o mais rápido com: $vel4 km/h";
            }
        }

        <function tq_comustivel(){

            $tq_combustivel1 = 76;
            $tq_combustivel2 = 75;
            $tq_combustivel3 = 74;
            $tq_combustivel4 = 73;

            if ($tq_combustivel1 > $tq_combustivel2 and $tq_combustivel1 > $tq_combustivel3 and $tq_combustivel1 > $tq_combustivel4){
                echo "o carro 1 é o que possui o maior tamque de combustivel com cerca de: $tq_combustivel1 litros";
            } elseif ($tq_combustivel2 > $tq_combustivel1 and $tq_combustivel2 > $tq_combustivel3 and $tq_combustivel2 > $tq_combustivel4){
                echo "o carro 2 é o que possui o maior tamque de combustivel com cerca de: $tq_combustivel2 litros";
            } elseif ($tq_combustivel3 > $tq_combustivel2 and $tq_combustivel3 > $tq_combustivel1 and $tq_combustivel3 > $tq_combustivel4){
                echo "o carro 3 é o que possui o maior tamque de combustivel com cerca de: $tq_combustivel3 litros";
            } else {
                echo "o carro 4 é o que possui o maior tamque de combustivel com cerca de: $tq_combustivel4 litros";
            }
        }

        <function portaMalas(){

            $portaM1 = 306;
            $portaM2 = 305;
            $portaM3 = 304;
            $portaM4 = 303;

            if ($portaM1 > $portaM2 and $portaM1 > $portaM3 and $portaM1 > $portaM4){
                echo "O carro 1 possui o maior porta malas entre eles com: $portaM1 litros";
            } elseif ($portaM2 > $portaM1 and $portaM2 > $portaM3 and $portaM2 > $portaM4){
                echo "O carro 2 possui o maior porta malas entre eles com: $portaM2 litros";
            } elseif ($portaM3 > $portaM1 and $portaM3 > $portaM2 and $portaM3 > $portaM4){
                echo "O carro 3 possui o maior porta malas entre eles com: $portaM3 litros";
            } else {
                echo "O carro 4 possui o maior porta malas entre eles com: $portaM4 litros";
            }
        }*/


        $consumo_urb1 = 10;
        $consumo_urb1 = 10.1;
        $consumo_urb1 = 10.2;
        $consumo_urb1 = 10.3;

        if ($portaM1 > $portaM2 and $portaM1 > $portaM3 and $portaM1 > $portaM4){
            echo "O carro 1 possui o maior porta malas entre eles com: $portaM1 litros";
        } elseif ($portaM2 > $portaM1 and $portaM2 > $portaM3 and $portaM2 > $portaM4){
            echo "O carro 2 possui o maior porta malas entre eles com: $portaM2 litros";
        } elseif ($portaM3 > $portaM1 and $portaM3 > $portaM2 and $portaM3 > $portaM4){
            echo "O carro 3 possui o maior porta malas entre eles com: $portaM3 litros";
        } else {
            echo "O carro 4 possui o maior porta malas entre eles com: $portaM4 litros";
        }

?>

