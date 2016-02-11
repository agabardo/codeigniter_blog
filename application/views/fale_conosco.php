<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Meu Blog</title>
        <?php
           echo link_tag('https://fonts.googleapis.com/css?family=Roboto+Condensed');
           echo link_tag('assets/css/estilo.css');
        ?>
    </head>
    <body>
    <?php
        echo anchor(base_url()," Home ");
        echo anchor(base_url("fale-conosco")," Fale Conosco ");        
        echo heading("Meu blog",2);        
        echo heading("Fale Conosco",3);
        
        echo validation_errors();
        
        $atributos = array('name' => 'formulario_contato', 'id' => 'formulario_contato');
        echo form_open(base_url('welcome/enviar_mensagem'),$atributos);            
            echo form_label("Nome:","txt_nome") . br();
            echo form_input('txt_nome', set_value('txt_nome'));
            echo br();            
            echo form_label("E-mail:","txt_email") . br();
            echo form_input('txt_email', set_value('txt_email'));
            echo br();            
            echo form_label("Mensagem:","txt_mensagem") . br();
            echo form_textarea('txt_mensagem', set_value('txt_mensagem'));
            echo br();
            echo form_submit("btn_enviar","Enviar Mensagem");        
        echo form_close();
        ?>
    </body>
</html>