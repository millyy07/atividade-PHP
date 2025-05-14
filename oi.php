<h1>minha primeira aula de PHP</h1>

<?php
//Exibindo uma mensagem na tela
echo "olá, mundo";
echo "<br>"; //quebra de linha
print "aprendendo PHP"; // outra forma de exibir texto

//comentário de uma linha
# comentário de uma linha
/*
comentário de múltiplas linhas
aqui você pode escrever várias linhas de comentários
sem se preocupar com o limite de uma linha.
*/

// variáveis iniciam com cifrão ($)
// podem conter letras, números e o caractere de sublinhado
$nome = "Emilly Gabrielly"; //string
$idade = 17; // inteiro
$altura = 1.76 ; // float
$peso = 75 ; // float
$namorando = true; // booleano (true ou false)

// Exibindo o valor de uma variável
echo "<strong>nome:</strong> $nome <br>";
echo "<strong>idade:</strong> $idade <br>";
echo "<strong>altura:</strong> $altura <br>";
echo "<strong>peso:</strong> $peso <br>";

?>