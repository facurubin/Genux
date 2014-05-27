<?php 
	include_once 'header.php';
	include_once 'db.php';
    echo '<article id="productos">
	<h2 class="titulo">Create una cuenta: </h2>';
	
	if(!isset($_GET['u'])){
	    //Formulario de Registro de usuario
        echo '<form action="registrase.php?u=nuevo" method="POST">
        <p>Nombre:</p>
        <p><input type="text" placeholder="Tu Nombre" name="nombre" required/></p>
        <p>Apellido:</p>
        <p><input type="text" placeholder="Tu Apellido" name="apellido" required/></p>
        <p>Telefono:</p>
        <p><input type="text" placeholder="Tu Telefono" name="telefono" required/></p>
        <p>Email:</p>
        <p><input type="text" placeholder="Tu Email" name="email" required/></p>
        <p><input type="submit" value="Enviar" /></p>
        </form>';
	}elseif($_GET['u']=='nuevo'){
	    //Registro exitoso
	    echo 'Gracias por registrarse!!';
	}elseif($_GET['u']=='cerrar'){
	    //Cierre de sesion
	    echo 'Has cerrado sesion.';
	}
    echo '</article>';
    echo '<article id="contenido">
	<h2 class="titulo">Visitanos...</h2>
		<p>Los invitamos a visitar nuestro local ubicado en pleno centro de la ciudad de Corrientes Capital.</p>
		<p>Junin 985</p>
		<p>Entre Buenos Aires y Tucuman</p>
		<p>O ante alguna consulta nuestro telefono es:</p>
		<p>+54 (3794) 444452</p>
</article>';
    include_once 'footer.php';
?>
