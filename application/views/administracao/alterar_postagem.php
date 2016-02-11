<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Meu Blog - Administração</title> 
    </head>
    <body>
    <?php
        echo anchor(base_url()," Home ");
        echo anchor(base_url("administracao/postagens")," Postagens ");
        echo anchor(base_url("administracao/logout")," Logout ");        
        echo heading("Adicionar uma nova postagem",3);        
        $atributos = array('name' => 'formulario_postagem', 'id' => 'formulario_postagem');
        echo form_open(base_url('administracao/postagens/salvar_alteracao'),$atributos);   
            
            echo form_hidden('id',$postagem[0]->id);
            
            echo form_label("Título:","txt_titulo") . br();
            echo form_input('txt_titulo',$postagem[0]->titulo);
            echo br();            
            echo form_label("Texto:","txt_texto") . br();
            echo form_textarea('txt_texto',$postagem[0]->texto);
            echo br();
            echo form_submit("btn_enviar","Salvar postagem");        
        echo form_close();
        ?>
    </body>
</html>