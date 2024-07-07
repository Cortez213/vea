<style>
			#user-menu {
    display: flex;
    align-items: center;
}

#user-options {
    display: flex;
    list-style: none;
    margin-left: auto;
}

#user-options li {
    margin-right: 30px;
}

#user-options a {
    color: #fff;
    text-decoration: none;
}
		</style>
		<style>
			#user-menu {
				margin-top: -60px;
				
    position: absolute;
	margin-left: 1200px;
    color: black;
    cursor: pointer;
}

@media screen and (max-width: 600px) {
    #user-menu {
		margin-top: -40px;
        margin-left: 330px; /* Ajusta el margen izquierdo según tus necesidades */
        /* Otros estilos específicos para dispositivos móviles */
    }
}
#user-menu ul li a[href="Cerrar_Session.php"] {
    color: #fff; /* Cambia esto al color que desees */
    text-decoration: none; /* Elimina el subrayado del enlace */
}

@media screen and (max-width: 600px) {
    #cart-icon {
		margin-top: -50px;
       
    }
}
#user-menu ul li a[href="Cerrar_Session.php"] {
    color: #fff; /* Cambia esto al color que desees */
    text-decoration: none; /* Elimina el subrayado del enlace */
}
#user-menu i {
    margin: 0 10px;
}

#user-menu ul {
    position: absolute;
    right: 0;
    top: 45px; /* Sube las opciones del usuario */
    background-color: #444;
    list-style-type: none;
    padding: 10px;
    border-radius: 5px;
}

#user-menu ul li {
    padding: 5px;
    display: flex; /* Añade esta línea para usar Flexbox */
    align-items: center; /* Alinea los ítems al centro verticalmente */
}
#user-menu ul li i {
    margin-right: 30px; /* Añade un margen a la derecha del ícono para separarlo del texto */
}
#user-menu ul li:hover {
    background-color: #555;
}
		</style>
		<div id="user-menu" style="display: flex; align-items: center;">
    <i style="font-size: 35px;" class="fas fa-user"></i>
    <ul id="user-options" style="display: none; margin-left: auto;">
        <li><a href="Formulario.php" style="color: #fff; text-decoration: none;"><i class="fas fa-sign-out-alt"></i> Iniciar Sesión</a></li>
		<?php

if (isset($_SESSION['nombre'])) {
    
    echo '<li><a href="cerrar_sesion.php" style="color: #fff; text-decoration: none;"><i class="fa-solid fa-power-off" style="color: #fff;"></i> Cerrar Sesión</a></li>';
} else {
    // Si la sesión no está iniciada, no muestra nada
}
?>

    </ul>
</div>