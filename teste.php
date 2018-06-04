<?php





        function potencia($pot1, $pot2, $pot3=0, $pot4=0){


            if ($pot1 > $pot2 and $pot1 > $pot3 and $pot1 > $pot4){
                echo "A maior potencia é do carro 1 que chega a: $pot1 cv \n";
            } elseif ($pot2 > $pot1 and $pot2 > $pot3 and $pot2 > $pot4){
                echo "A maior potencia é do carro 2 que chega a: $pot2 cv \n";
            } elseif ($pot3 > $pot1 and $pot3 > $pot2 and $pot3 > $pot4){
                echo "A maior potencia é do carro 3 que chega a: $pot3 cv \n";
            } else {
                echo "A maior potencia é do carro 4 que chega a: $pot4 cv \n";
            }

        };

        function preco($pre1, $pre2, $pre3=100000000000, $pre4=100000000000){


            if ($pre1 < $pre2 and $pre1 < $pre3 and $pre1 < $pre4){
                echo "O menor preço a se pagar é do carro 1 que custa em torno de: R$ $pre1 reais \n";
            } elseif ($pre2 < $pre1 and $pre2 < $pre3 and $pre2 < $pre4){
                echo "O menor preço a se pagar é do carro 2 que custa em torno de: R$ $pre2 reais \n";
            } elseif ($pre3 < $pre1 and $pre3 < $pre2 and $pre3 < $pre4){
                echo "O menor preço a se pagar é do carro 3 que custa em torno de: R$ $pre3 reais \n";
            } else {
                echo "O menor preço a se pagar é do carro 4 que custa em torno de: R$ $pre4 reais \n";
            }
        };

        function altura($alt1, $alt2, $alt3=null, $alt4=null){


            if ($alt1 > $alt2 and $alt1 > $alt3 and $alt1 > $alt4){
                echo "O carro 1 é o mais alto entre eles e possui: $alt1 mm (milimetros) de altura \n";
            } elseif ($alt2 > $alt1 and $alt2 > $alt3 and $alt2 > $alt4){
                echo "O carro 2 é o mais alto entre eles e possui: $alt2 mm (milimetros) de altura \n";
            } elseif ($alt3 > $alt1 and $alt3 > $alt2 and $alt3 > $alt4){
                echo "O carro 3 é o mais alto entre eles e possui: $alt3 mm (milimetros) de altura \n";
            } else {
                echo "O carro 4 é o mais alto entre eles e possui: $alt4 mm (milimetros) de altura \n";
            }
        };

        function comprimento($com1, $com2, $com3=null, $com4=null){


            if ($com1 > $com2 and $com1 > $com3 and $com1 > $com4){
                echo "O carro 1 é o mais comprido entre eles e possui: $com1 mm (milimetros) de comprimento \n";
            } elseif ($com2 > $com1 and $com2 > $com3 and $com2 > $com4){
                echo "O carro 2 é o mais comprido entre eles e possui: $com2 mm (milimetros) de comprimento \n";
            } elseif ($com3 > $com1 and $com3 > $com2 and $com3 > $com4){
                echo "O carro 3 é o mais comprido entre eles e possui: $com3 mm (milimetros) de comprimento \n";
            } else {
                echo "O carro 4 é o mais comprido entre eles e possui: $com4 mm (milimetros) de comprimento \n";
            }
        };

        function velocidade($vel1, $vel2, $vel3=null, $vel4=null){


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

        function tq_combustivel($tqc1, $tqc2, $tqc3=null, $tqc4=null){


            if ($tqc1 > $tqc2 and $tqc1 > $tqc3 and $tqc1 > $tqc4){
                echo "o carro 1 é o que possui o maior tamque de combustivel com cerca de: $tqc1 litros \n";
            } elseif ($tqc2 > $tqc1 and $tqc2 > $tqc3 and $tqc2 > $tqc4){
                echo "o carro 2 é o que possui o maior tamque de combustivel com cerca de: $tqc2 litros \n";
            } elseif ($tqc3 > $tqc2 and $tqc3 > $tqc1 and $tqc3 > $tqc4){
                echo "o carro 3 é o que possui o maior tamque de combustivel com cerca de: $tqc3 litros \n";
            } else {
                echo "o carro 4 é o que possui o maior tamque de combustivel com cerca de: $tqc4 litros \n";
            }
        };

        function portaMalas($por1, $por2, $por3=null, $por4=null){


            if ($por1 > $por2 and $por1 > $por3 and $por1 > $por4){
                echo "O carro 1 possui o maior porta malas entre eles com: $por1 litros \n";
            } elseif ($por2 > $por1 and $por2 > $por3 and $por2 > $por4){
                echo "O carro 2 possui o maior porta malas entre eles com: $por2 litros \n";
            } elseif ($por3 > $por1 and $por3 > $por2 and $por3 > $por4){
                echo "O carro 3 possui o maior porta malas entre eles com: $por3 litros \n";
            } else {
                echo "O carro 4 possui o maior porta malas entre eles com: $por4 litros \n";
            }
        };

        function consumoUrb($conu1, $conu2, $conu3=null, $conu4=null){


            if ($conu1 > $conu2 and $conu1 > $conu3 and $conu1 > $conu4) {
                echo "O carro 1 é o mais economico nas ruas das cidades com: $conu1 km/l \n";
            } elseif ($conu2 > $conu1 and $conu2 > $conu3 and $conu2 > $conu4) {
                echo "O carro 2 é o mais economico nas ruas das cidades com: $conu2 km/l \n";
            } elseif ($conu3 > $conu2 and $conu3 > $conu1 and $conu3 > $conu4) {
                echo "O carro 3 é o mais economico nas ruas das cidades com: $conu3 km/l \n";
            } else {
                echo "O carro 4 é o mais economico nas ruas das cidades com: $conu4 km/l \n";
            }
        };

        function consumoRod($conr1, $conr2, $conr3=null,$conr4=null){


            if ($conr1 > $conr2 and $conr1 > $conr3 and $conr1 > $conr4) {
                echo "O carro 1 é o mais economico nas estradas com: $conr1 km/l \n";
            } elseif ($conr2 > $conr1 and $conr2 > $conr3 and $conr2 > $conr4) {
                echo "O carro 2 é o mais economico nas estradas com: $conr2 km/l \n";
            } elseif ($conr3 > $conr2 and $conr3 > $conr1 and $conr3 > $conr4) {
                echo "O carro 3 é o mais economico nas estradas com: $conr3 km/l \n";
            } else {
                echo "O carro 4 é o mais economico nas estradas com: $conr4 km/l \n";
            }
        };

        function largura($lar1, $lar2, $lar3=null, $lar4=null){


            if ($lar1 > $lar2 and $lar1 > $lar3 and $lar1 > $lar4) {
                echo "O carro 1 é o mais largo dentre eles com: $lar1 mm de largura \n";
            } elseif ($lar2 > $lar1 and $lar2 > $lar3 and $lar2 > $lar4) {
                echo "O carro 2 é o mais largo dentre eles com: $lar2 mm de largura \n";
            } elseif ($lar3 > $lar2 and $lar3 > $lar1 and $lar3 > $lar4) {
                echo "O carro 3 é o mais largo dentre eles com: $lar3 mm de largura \n";
            } else {
                echo "O carro 4 é o mais largo dentre eles com: $lar4 mm de largura \n";
            }
        };

        function direcao($d1, $d2, $d3=null, $d4=null){

            $direcoes = [
                1=>['nome'=>'Direção Mecânica', 'peso'=>1],
                2=>['nome'=>'Direção Hidráulica', 'peso'=>2],
                3=>['nome'=>'Direção Elétrica', 'peso'=>3],
                4=>['nome'=>'null', 'peso'=>0]
            ];

            if ($direcoes[$d1]['peso'] > $direcoes[$d2]['peso'] and $direcoes[$d1]['peso'] > $direcoes[$d3]['peso'] and $direcoes[$d1]['peso'] > $direcoes[$d4]['peso']) {
                echo "o carro com melhor direção é o carro com " . $direcoes[$d1]['nome'];
            } elseif($direcoes[$d2]['peso'] > $direcoes[$d1]['peso'] and $direcoes[$d2]['peso'] > $direcoes[$d3]['peso'] and $direcoes[$d2]['peso'] > $direcoes[$d4]['peso']) {
                echo "o carro com melhor direção é o carro com " . $direcoes[$d2]['nome'];
            } elseif($direcoes[$d3]['peso'] > $direcoes[$d1]['peso'] and $direcoes[$d3]['peso'] > $direcoes[$d2]['peso'] and $direcoes[$d3]['peso'] > $direcoes[$d4]['peso']) {
                echo "o carro com melhor direção é o carro com " . $direcoes[$d3]['nome'];
            } else {
                echo "o carro com melhor direção é o carro com " . $direcoes[$d4]['nome'];
            }



        }

        potencia(220, 300, 400);
        preco(600, 200);
        altura(1500, 1850, 1900);
        comprimento(1500, 1650, 2000);
        largura(1200, 1300, 1500);
        velocidade(100, 150, 120);
        tq_combustivel(50, 70, 80);
        portaMalas(100, 250, 500);
        consumoUrb(7, 8, 9);
        consumoRod(10, 11, 12);
        direcao(2, 1, 4, 4);

?>

