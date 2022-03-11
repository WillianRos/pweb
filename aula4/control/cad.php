<?php
/*
$nome = $_POST["cxnome"];
$idade = $_POST["cxidade"];

echo "Nome ".$nome."<br>";
*/
$pg1 = $_POST["pg1"];
$pg2 = $_POST["pg2"];
$pg3 = $_POST["pg3"];
$pg4 = $_POST["pg4"];

if($pg1 == "certo" && $pg2 == "certo" && $pg3 == "certo" && $pg4 == "certo")
{
echo "Acertou miseravi";
}
else
{
    echo "Você é o Pelé"; 
}