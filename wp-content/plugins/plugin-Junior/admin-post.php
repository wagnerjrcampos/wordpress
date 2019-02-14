<?php
    echo "<h3>Mensagem enviada</h3>";

    echo "<p>EMAIL: ".$_POST['email']."</p>";
    echo "<p>ASSUNTO: ".$_POST['assunto']."</p>";
    echo "<p>MENSAGEM: ".$_POST['mensagem']."</p>";

    $emaildestinatario = $_POST['email'];
    $headers = "From= wagnerjrcampos26@gmail.com\n";
    $emailsender = "From: wagnerjrcampos26@gmail.com\n";
    $assunto = $_POST['assunto'];
    $mensagemHTML = $_POST['mensagem'];

    if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers, "-r".$emailsender)){
        $headers.="Return-Path: " , $emailsender;mail($emaildestinatario,$assunto, $mensagemHTML, $headers);
    }
?>