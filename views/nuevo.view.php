<?php require 'header.php'; ?>

	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Nuevo Post</h2>
				<form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
					<input type="text" name="titulo" placeholder="Titulo del Post">
					<input type="text" name="extracto" placeholder="Extracto del Post">
					<textarea name="texto" placeholder="Texto del Post"></textarea>
					<input type="file" name="thumb">
					<input type="submit" value="Crear nuevo Post">
				</form>
			</article>
		</div>
	</div>

<?php require 'footer.php'; ?>
