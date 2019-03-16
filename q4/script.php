<?php
    $mesDigitado = $_GET['mes'];
    $meses = array(1=>'Janeiro',2=>'Fevereiro',3=>'Março',4=>'Abril',5=>'Maio',
                    6=>'Junho',7=>'Julho',8=>'Agosto',9=>'Setembro',10=>'Outubro',
                    11=>'Nobembro',12=>'Dezembro');

    if($mesDigitado >= 1 && $mesDigitado <= 12)
        echo $meses[$mesDigitado];
    else
        echo "O mês informado não existe";

?>
