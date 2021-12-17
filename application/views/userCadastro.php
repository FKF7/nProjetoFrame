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
        <a href="<?php echo base_url() . 'home';?>">Home</a>
        <h1>Cadastro de User</h1>
          
        <?php echo form_open('user/inserirUser'); ?>
            <input type="text" name="nomeUsuario" required placeholder="Nome aqui..."/>
            <br><br>
            <input type="text" name="user" required placeholder="User aqui..."/>
            <br><br>
            <input type="password" name="senha" required placeholder="Senha aqui..."/>
            <br><br>
            <input type="text" name="perfilAcesso" required placeholder="Perfil Acesso aqui..."/>
            <br><br>
            
            <input type="submit" name="salvarUser" value="Salvar">
            <input type="reset" name="limpar" value="Limpar">
        <?php echo form_close(); ?>
        <h2>Lista de Users</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th><th>User</th><th>Perfil</th><th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->nomeUsuario; ?></td>
                    <td><?php echo $user->user; ?></td>
                    <td><?php echo $user->perfilAcesso; ?></td>
                    <td>
                        
                        <a href="<?php echo base_url() . 
                                'user/editar/' .
                                $user->idusuario;?>">Editar</a> | 
                        <a href="<?php echo base_url() . 
                                'user/excluir/' .
                                $user->idusuario;?>">Excluir</a>
                        
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
