<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['celular']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "kuinho15@gmail.com";
    $assunto = "Teste de envio de email;
    
    $corpo = "Nome: ".$nome."\n"."Email: ".$Email:."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: lerick_shop@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo ("E-mail enviado com sucesso");
        }
        else{
            echo("Houve um erro ao enviar o email!");
        }

?>