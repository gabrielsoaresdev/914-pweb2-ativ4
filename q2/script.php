<?php
    $cpf = $_POST['cpf'];
    echo "Os primeiros dígitos são " . substr($cpf, 0, 3);
