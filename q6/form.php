<?php
    if(array_key_exists('erroemail', $_GET)) {
        if($_GET['erroemail'] == 1)
            echo "O EMAIL INFORMADO NÃO É VÁLIDO<br>";
    }
    if(array_key_exists('errosenha', $_GET)) {
        if($_GET['errosenha'] == 1)
            echo "DIGITE UMA SENHA COM MAIS DE 6 CARACTERES<br>";
    }
?>

<form action="script.php" method="GET">
    <input type="email" name="email" placeholder="Digite o email aqui!">
    <input type="password" name="password" placeholder="Digite a senha aqui!">
    <input type="submit"/>
</form>
