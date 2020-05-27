<?php

/*echo"Meu primeiro codigo PHP !<b>Hello World MY Friend PEDRO, my best friend</b>";

echo"<br>";

$curso = "Hcode";

echo $curso;

echo"<br>";

var_dump($curso);

echo isset($curso);

unset($curso);

echo $curso;

echo isset($curso);


$nome = "Tiago";
$sobreNome = "Brito";

echo $nome." ".$sobreNome;

$dataNascimento = new DateTime();

echo"<br>";
var_dump($dataNascimento);
echo"<br>";
var_dump($ano);
echo"<br>";
$arquivo = fopen("C:\xampp\htdocs\PhpHcode\index.php", "r");
var_dump($arquivo);
echo"<br>";

$hoje = date("d/m/y");
echo ($hoje);*/

$nome = (int)$_GET["b"];

//var_dump($nome);
echo "<br>";

//$ip = $_SERVER["REMOTE_ADDR"];
//echo $ip;

//$ip = $_SERVER["SCRIPT_NAME"];
//echo $ip;

$nome = "Tiago Brito";
echo $nome;

function ExibeNome(){
    
    global $nome;
    $nome = "Luiz Carlos";
}

ExibeNome();
echo $nome;

?>