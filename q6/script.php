<?php

    #separa parte do email antes do @ e depois
    $email = explode('@', $_GET['email']);

    #pega parte depois do @ (ex: gmail.com)
    $email = end($email);

    #Divide em dois com base no primeiro ponto
    $email = explode('.', $email, 2);

    #Compara com as opções válidas
    $emailValido = ($email == 'com' || $email == 'com.br' || $email == 'net');

    #Verifica se a senha tem mais de 6 caracteres
    $senhaValida = (strlen($_GET['password']) > 6);

    if($emailValido && $senhaValida)
        echo "Válido";
    else
        header('Location: ./form.php?erroemail='.(!$emailValido).'&errosenha='.(!$senhaValida));
        #redireciona para a página form.php e envia dois boleanos para se a senha e o email é válido
