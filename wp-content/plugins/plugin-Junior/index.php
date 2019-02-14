<?php
/*
plugin Name: O meu Plugin
Plugin URI: http://exemple.org/o-meu-plugin
Description: Um plugin de teste didático, use shortcode [like]
version: 1.0
Author: Aluno SENAC
Author URI: meusite.com
license: GPLv2
*/
function example_like(){
    return "E não esqueça de curtir nossa fã page";

}
//add_shortcode("like", "example_like");

function form(){

    echo '
        <form method="post" action="'.plugins_url('admin-post.php', __File__).'">
        <div>
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <div>
            <label>Assunto</label>
            <input name= "assunto" type="text" class="form-control"  size"20">
        </div>

        <div>
            <label for="exampleFormControlTextarea1">Mensagem</label>
            <textarea  name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
        </div>
            <button type="enviar" class="btn btn-primary">Enviar</button>
        
        </form>
    ';

}
add_shortcode("formulario", "form");
