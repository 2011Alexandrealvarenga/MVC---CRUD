<?php $render('header'); ?>
<h3>Editar Usuario</h3><br>

<form method="POST" action="<?php echo $base?>/usuario/<?php echo $usuario['id']?>/editar">
    <input type="text" name="name" placeholder="nome" value="<?php echo $usuario['nome'] ;?>"><br>
    <input type="email" name="email" placeholder="email" value="<?php echo $usuario['email'] ;?>"><br>
    <input type="submit" value="Salvar"><br>
</form>

<?php $render('footer'); ?>