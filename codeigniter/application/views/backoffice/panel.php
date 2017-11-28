<?php 
if (empty($this->session->email))
    redirect('backoffice');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
Usuario conectado:<h1><?php echo $this->session->username ?></h1>
	<div>
		<a href='<?php echo site_url('backoffice/users')?>'>Usuarios</a> |
		<a href='<?php echo site_url('backoffice/logout')?>'>Salir</a>

	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
