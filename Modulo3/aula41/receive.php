<?php
    
    include_once 'Usuario.php';
    include_once 'Cliente.php';

    # Recebendo os dados do Formulario
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $confPass = $_POST['confPass'];
    $document = $_POST['document'];
    $address = $_POST['address'];
    $postalCode = $_POST['postalCode'];
    $phone = $_POST['phone'];
    $whatsapp = $_POST['whatsapp'];

    $cliente = new Cliente($fullName, $email, $pass);

    
    # testando se as senhas conferem
    if(!$cliente->validaSenha($confPass)){
        echo "Senhas não conferem!";
        die();
    }

    $cliente->cpf = $document;
    $cliente->endereco = $address;
    $cliente->cep = $postalCode;
    $cliente->telefone = $phone;
    $cliente->whatsapp = $whatsapp;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
<?php
    echo $cliente->montaTabela();
?>
</body>
</html>

