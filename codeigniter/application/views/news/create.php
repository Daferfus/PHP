<h2>Crear Noticia</h2>

<!--<form action="<?php echo site_url('set_news') ?>" method="post" >-->

<?php echo validation_errors(); ?>
<?php echo form_open('news/create') ?>

    Titulo :<input type="text" name="title" value="" /><br>
    Texto :<textarea name="text" rows="4" cols="20">
    </textarea><br>
    <hr>
    <input type="submit" value="Alta Noticia" name="submit" />


</form>