<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Meu Blog</title> 
    </head>
    <body>
    <?php
        echo anchor(base_url()," Home ");
        echo anchor(base_url("fale-conosco")," Fale Conosco ");        
        echo heading("Meu blog",2);  
    ?>
    <h3>A página que você está tentando acessar não existe ou seu endereço foi modificado</h3>
    <a href="javascript:history.go(-1)">Voltar</a>
    </body>
</html>