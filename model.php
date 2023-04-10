<?php
if(isset($_GET['payrate'])){
    $hours = $_GET['hours'];
    $salarioBruto = $_GET['payrate'] * $hours * 5 * 4.34;
    $ir = $salarioBruto * 0.11;
    $inss = $salarioBruto * 0.08;
    $sindicato = $salarioBruto * 0.05;
    $salarioLuquido = $salarioBruto - $ir - $inss - $sindicato;

    echo "+ Salário Bruto : R$".sprintf("%.2f <br>",$salarioBruto);
    echo "- IR (11%) : R$".sprintf("%.2f <br>", $ir);
    echo "- INSS (8%) : R$".sprintf("%.2f <br>", $inss);
    echo "- Sindicato (5%) : R$".sprintf("%.2f <br>", $sindicato);
    echo "= Salário líquido : R$".sprintf("%.2f", $salarioLuquido);
}
?>
