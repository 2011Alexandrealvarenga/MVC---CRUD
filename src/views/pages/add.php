<?php $render('header'); ?>
<h3>Adicionar Usuario</h3><br>

<form method="POST" action="<?php echo $base?>/novo">
    <input type="text" name="name" placeholder="nome"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="submit" value="adicionar"><br>


</form>


<?php $render('footer'); ?>