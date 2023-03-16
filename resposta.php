<?php
    //declara uma variável chamada $imc, a qual receber o peso dividido pela altura * a
$imc = $_POST["peso"] / ($_POST["altura"] * $_POST["altura"]);
//imprime o código HTML mostrando o valor variável $imc
echo "O seu IMC é $imc<br/>";
#faz uma estrutura comdiciona em que determina o estado do imc de acordo com a regra 
if ($imc<18.5) {
    echo "você está abaixo do peso";
} else if ($imc>=18.5 && $imc <=24.9) {
    echo "Você está com peso normal";
} else {
    echo "Você está com sobrepeso";
}
?>