<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Meu Blog - Administração</title> 
    </head>
    <body>
    <?php
        $atributos = array('name' => 'formulario_login', 'id' => 'formulario_login');
        echo form_open(base_url('administracao/login/efetuar_login'),$atributos);
            echo form_label("Usuário:","txt_usuario");
            echo br();
            echo form_input('txt_usuario');
            echo br();
            echo form_label("Senha:","txt_senha");
            echo br();
            echo form_password('txt_senha');
            echo br();
            echo form_submit("btn_enviar","Efetuar Login");        
        echo form_close();
        ?>
    </body>
</html>