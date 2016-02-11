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
        ?>
        <h2>Meu blog</h3>
        <h3>Postagens recentes</h3>
        <?php
            foreach($postagens as $post){                
                $lista_urls[] = anchor( base_url("detalhes/" . $post->id), $post->titulo);            
            }
            echo ul($lista_urls);
        ?>
    </body>
</html>