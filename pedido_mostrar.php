<?php
echo "Bem vindo </br>";
echo "Seu acompanhamento é: ", $_POST["acompanhamento"],"</br>";
echo "Seu prato principal é: ", $_POST['prato_principal'],"</br>";

// Verifica se usuário escolheu algum adicional
if(isset($_POST["adicionais"]))
{
    echo "Os adicionais que escolheu são: 	";

    // Faz loop pelo array dos adicionais
    foreach($_POST["adicionais"] as $adicionais => $value)
    {
        echo $value, ", ";
    }

}
else
{
    echo "Você não escolheu adicional";
}


?>