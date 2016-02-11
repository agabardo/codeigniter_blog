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
        echo form_open(base_url('administracao/postagens/adicionar'),$atributos);   
            echo form_label("Título:","txt_titulo") . br();
            echo form_input('txt_titulo');
            echo br();            
            echo form_label("Texto:","txt_texto") . br();
            echo form_textarea('txt_texto');
            echo br();
            echo form_submit("btn_enviar","Cadastrar nova postagem");        
        echo form_close();
        
        
        echo heading("Postagens existentes",3);
        foreach($postagens as $post){
            echo anchor(base_url("administracao/postagens/excluir/".$post->id)," Excluir - ");
            echo anchor(base_url("administracao/postagens/alterar/".$post->id)," Alterar - ");
            echo "Postagem: " .  date("d/m/Y",  strtotime($post->data)) . " - " . $post->titulo;
            echo br();
        }        
        ?>
    </body>
</html>