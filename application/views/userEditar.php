<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo base_url() . 'user';?>">Voltar</a>
        <h1>Editar Pessoa</h1>
        
        <?php echo form_open('user/atualizar'); ?>
            
            <input type="hidden" name="idusuario" required value="<?php echo $user[0]->idusuario; ?>"/>
            <input type="text" name="nomeUsuario" required placeholder="Nome aqui..." value="<?php echo $user[0]->nomeUsuario; ?>"/>
            <br><br>
            <input type="text" name="user" required placeholder="User aqui..." value="<?php echo $user[0]->user; ?>"/>
            <br><br>
            <input type="password" name="senha" required placeholder="Senha aqui..." value="<?php echo $user[0]->senha; ?>"/>
            <br><br>
            <input type="text" name="perfilAcesso" required placeholder="Perfil Acesso aqui..." value="<?php echo $user[0]->perfilAcesso; ?>"/>
            <br><br>
            <input type="submit" name="salvarUser" value="Salvar">
            
        <?php echo form_close(); ?>
            
    </body>
</html>
