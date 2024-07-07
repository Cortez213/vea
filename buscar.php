<?php
// buscar.php

// Obtén el término de búsqueda desde la URL
$q = $_GET['q'];

// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sis_inventario";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para buscar productos que coincidan con la descripción
$sql = "SELECT id_categoria, descripcion,precio_compra,descripcion_oculta, precio_venta, imagen FROM productos WHERE descripcion LIKE '%$q%' AND id_categoria BETWEEN 54 AND 55";
$result = $conn->query($sql);


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<title>Busqueda</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" href="images/icon.jpg">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script src="js/simpleCart.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/carrito.css">
<link rel="stylesheet" href="banner-1.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/preoloadre.css">
<script src="js/jquery.easing.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
@media (max-width: 600px) {
    .col-md-3.product-men {
        width: calc(50% - 1px); /* Ajusta el ancho con margen */
        float: inline-start;
        box-sizing: border-box;
		height: -100px;
        padding: 0 5px; /* Ajusta el margen lateral */
        margin-bottom: 20px; /* Agrega un margen inferior para separar los productos */
    }
	.pro-image-front{
		height: -100px;
	}

    .col-md-3.product-men:nth-child(odd) {
        clear: left; /* Limpia el flotante para que los productos se coloquen en la izquierda */
    }

    .item-info-product h4 a {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        max-width: 50%;
    }
}
@media (max-width: 1000px) {
    .col-md-3.product-men {
        width: calc(50% - 1px); /* Ajusta el ancho con margen */
		
        float: inline-start;
        box-sizing: border-box;
        padding: 0 5px; /* Ajusta el margen lateral */
        margin-bottom: 20px; /* Agrega un margen inferior para separar los productos */
    }

    .col-md-3.product-men:nth-child(odd) {
        clear: left; /* Limpia el flotante para que los productos se coloquen en la izquierda */
    }

    .item-info-product h4 a {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        max-width: 50%;
    }
}



</style>
<style>
	.col-md-3 product-men {
        width: calc(70% - 10px); 
        float: left;
        box-sizing: border-box;
        padding: 0 5px;
        margin-bottom: 10px; 
    }

    .product-men:nth-child(4n + 1) {
        clear: left; 
    }

    .item-info-product h4 a {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: normal;
        max-width: 100%;
    }
	.cart{
                position: fixed;
                top: 0;
                right: 0;
                right: -500%; 
                width: 360px;
                height: 100vh;
                z-index: 999;
                padding: 20px;
                background-color: var(--bg-color);
                box-shadow: -2px solid 4px hsla(0, 0%, 100%, 0.1);
                border: 1px solid var(--main-color);
                transition: 1.5s;
            }
</style>
<style>
			#color1, #color2 {
				 width: 100%;
				 padding: 10px;
				 margin-bottom: 10px;
				 border: 1px solid #ccc;
				 border-radius: 5px;
				 font-size: 16px;
				 background-color: white; /* Fondo blanco */
			 }
	 
			 /* Espacio entre los selectores */
			 #color1 {
				 margin-top: 10px;
			 }
			 #color2 {
				 margin-top: 10px;
			 }
			 /* Estilos para los botones de cantidad */
			
			 .add {
				 display: flex;
				 align-items: center;
			 }
			 .add span {
				 cursor: pointer;
				 font-size: 20px;
				 margin: 0 10px;
			 }
	 
			 /* Estilos para el precio */
			 #product-price {
				 font-size: 24px;
				 font-weight: bold;
			 }
		   </style>
		   <style>
			#contador {
	display: flex;
	align-items: center;
	justify-content: center;
}
#cantidad {
	font-size: 20px;
	font-weight: bold;
	margin: 10px 20px;
	padding: 10px 20px;
	border: 2px solid #000;
	border-radius: 10px; /* Añade esquinas redondeadas */
	background-color: #f0f0f0; /* Cambia el color de fondo */
}
#restar,
#sumar {
	border: none;
	background-color: tomato;
	padding: 10px 20px;
	border-radius: 5px;
	font-size: 20px; /* Ajusta el tamaño de los botones */
	font-weight: 800;
	color: white;
	cursor: pointer;
}
#sumar:hover,
#restar:hover {
	background-color: brown;
}

</style>
</head>
<body class="js" >
	
	
<div class="header">
	<div class="container">
		<ul>
		<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Disponible las 24/7</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Tu Mejor Opcion</li>
			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">digitalgameverse@gmail.com</a></li>
		</ul>
	</div>
</div>
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.html"><img src="images/logo.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			
		<form action="buscar.php" >
				<div class="search">
					<input type="search" name="q" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<form >
				
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				</form> 


				<script>
  $(document).ready(function() {
    $("#search-form").submit(function(e) {
      e.preventDefault(); // Evita el envío normal del formulario
      var query = $("input[name='q']").val(); // Obtén la consulta de búsqueda
      $.ajax({
        url: "buscar.php",
        type: "GET",
        data: { q: query },
        success: function(response) {
          $(".col-md-3 product-men").html(response); // Muestra los resultados en el div
        }
      });
    });
  });
</script>
				<div class="clearfix"></div>
			
		</div>
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
				margin-top: 10px;
				
    position: absolute;
	margin-left: 900px;
    color: black;
    cursor: pointer;
}

@media screen and (max-width: 600px) {
    #user-menu {
		margin-top: 3px;
        margin-left: 300px; 
    }
}
#user-menu ul li a[href="Cerrar_Session.php"] {
    color: #fff; 
    text-decoration: none; 
}

@media screen and (max-width: 600px) {
    #cart-icon {
		margin-top: 30px;
       
    }
}
#user-menu ul li a[href="Cerrar_Session.php"] {
    color: #fff; 
    text-decoration: none; 
}
#user-menu i {
    margin: 0 10px;
}

#user-menu ul {
    position: absolute;
    right: 0;
    top: 45px; 
    background-color: #444;
    list-style-type: none;
    padding: 10px;
    border-radius: 5px;
}

#user-menu ul li {
    padding: 5px;
    display: flex; 
    align-items: center; 
}
#user-menu ul li i {
    margin-right: 30px; 
}
#user-menu ul li:hover {
    background-color: #555;
}
		</style>
		<div id="user-menu" style="display: flex; align-items: center;">
    <i style="font-size: 35px;" class="fas fa-user"></i>
    <ul id="user-options" style="display: none; margin-left: auto;">
        <li><a href="../Formulario.php" style="color: #fff; text-decoration: none;"><i class="fas fa-sign-out-alt"></i> Iniciar Sesión</a></li>
		<?php

if (isset($_SESSION['nombre'])) {
    
    echo '<li><a href="../cerrar_sesion.php" style="color: #fff; text-decoration: none;"><i class="fa-solid fa-power-off" style="color: #fff;"></i> Cerrar Sesión</a></li>';
} else {
    
}
?>

    </ul>
</div>
			<script>
				document.getElementById('user-menu').addEventListener('click', function() {
    var userOptions = document.getElementById('user-options');
    var userArrow = document.getElementById('user-arrow');
    if (userOptions.style.display === 'none') {
        userOptions.style.display = 'block';
        userArrow.classList.remove('fa-chevron-right');
        userArrow.classList.add('fa-chevron-down');
    } else {
        userOptions.style.display = 'none';
        userArrow.classList.remove('fa-chevron-down');
        userArrow.classList.add('fa-chevron-right');
    }
});

			</script>
				

 
			
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
 <style>
	.dropdown:hover .dropdown-menu {
    display: block;
}
 </style>

<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Inicio<span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PS4 <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/mini_opcion.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="Todos-los-juegos-ps4.php">Todo Los Juegos</a></li>
											<li><a href="mens.html">Aventura</a></li>
											<li><a href="veamos.php">Accion</a></li>
											<li><a href="mens.html">Rpg</a></li>
											<li><a href="mens.html">Mundo Abierto</a></li>
											<li><a href="mens.html">Disparos</a></li>
											<li><a href="mens.html">Terror</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Deporte</a></li>
											<li><a href="mens.html">Lucha</a></li>
											<li><a href="mens.html">Carreras</a></li>
											<li><a href="mens.html">Simulacion</a></li>
											
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PS5<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
										<li><a href="Todos-los-juegos-ps4.php">Todo Los Juegos</a></li>
											<li><a href="mens.html">Aventura</a></li>
											<li><a href="veamos.php">Accion</a></li>
											<li><a href="mens.html">Rpg</a></li>
											<li><a href="mens.html">Mundo Abierto</a></li>
											<li><a href="mens.html">Disparos</a></li>
											<li><a href="mens.html">Terror</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
										<li><a href="mens.html">Deporte</a></li>
											<li><a href="mens.html">Lucha</a></li>
											<li><a href="mens.html">Carreras</a></li>
											<li><a href="mens.html">Simulacion</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/mini_opcion2.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">XBOX<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
										<li><a href="Todos-los-juegos-ps4.php">Todo Los Juegos</a></li>
											<li><a href="mens.html">Aventura</a></li>
											<li><a href="veamos.php">Accion</a></li>
											<li><a href="mens.html">Rpg</a></li>
											<li><a href="mens.html">Mundo Abierto</a></li>
											<li><a href="mens.html">Disparos</a></li>
											<li><a href="mens.html">Terror</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
										<li><a href="mens.html">Lucha</a></li>
										<li><a href="mens.html">Deporte</a></li>
											
											<li><a href="mens.html">Carreras</a></li>
											
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/mini_opcion.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					
					<li class=" menu__item"><a class="menu__link" href="contact.html">contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		

			<!-- NAV  -->
			<div class="nav container">
				
				<!-- CART ICON  -->
				<i style="position: absolute;margin-left: 100px;color: #ffffff;margin-top: 20px;" class='bx bx-shopping-bag' id="cart-icon"></i>
	
				<!-- CART  -->
				<div class="cart">
                <h2 class="cart-title">Carrito</h2>

                <div class="cart-content">

</div>
                <div class="total">
    <div class="total-title">Total</div>
    <div class="total-price">$0</div>
</div>
<form action="nuevafactura.php" method="POST" id="comprarForm">
    <input type="hidden" name="productos_seleccionados" id="productosSeleccionados">
    
    <button type="submit" class="btn-buy" onclick="nuevaFactura()">Comprar</button>
</form>

<i class='bx bx-x' id="cart-close"></i>
<button id="empty-cart" class="btn-buy">Vaciar Carrito</button>
					
				</div>
				
			</div>
		
		
			<script src="carrito.js"></script>
		<div class="clearfix"></div>
	</div>
</div>




<style>
	.product-details {
display: flex;
align-items: center; 
}

.product-image {
margin-right: 10px; 
}

.product-info {
display: flex;
flex-direction: column; 
}
.delete-icon {
font-size: 16px; 
color: #e74c3c;
cursor: pointer; 
margin-left: 200px; 
margin-top: -70px;
}
  </style>

<div class="product-easy">
	<div class="container">
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default',            
									width: 'auto', 
									fit: true   
								});
							});
							
		</script>
		<?php
if ($result->num_rows > 0) {
  echo '<div style="margin-bottom: 70px;">';
  echo '<h1 style="text-align: center;">Tu Busqueda</h1>';
  echo '</div>';
  echo '<div class="sap_tabs" style="margin-top: -40px;">';
  echo '<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">';
  echo '<ul class="resp-tabs-list">';
  echo '<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Resultado</span></li>';
  echo '</ul>';
  echo '<div class="resp-tabs-container">';
  echo '<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">';

  while ($row = $result->fetch_assoc()) {
    echo '<div class="col-md-3 product-men">';
    echo '<div class="men-pro-item simpleCart_shelfItem">';
    echo '<div class="men-thumb-item">';
	echo '<img src="' . $row['imagen'] . '" alt="" class="pro-image-front" style="height: 270px;">'; 
    echo '<img src="' . $row['imagen'] . '" alt="" class="pro-image-back" style="height: 270px;">'; 
    echo '<div class="men-cart-pro">';
    echo '<div class="inner-men-cart-pro">';
    echo '<a href="#" class="link-product-add-cart">Quick View</a>';
    echo '</div>';
    echo '</div>';
    echo '<span class="product-new-top">New</span>';
    echo '</div>';
    echo '<div class="item-info-product">';
echo '<h4><a href="single.html">' . $row['descripcion'] . ' PS4 | PS5</a></h4>';
echo '<div class="product-description" style="display: none;">';
echo '<p>';

echo '<h5>' . $row['descripcion_oculta'] . '</h5>';
echo '</p>';
 
echo '</div>';
    echo '<div class="info-product-price">';
    echo '<span class="item_price">$' . $row['precio_compra'] . '</span>';
	echo '<del>$' . $row['precio_venta'] . '</del>'; // Precio de compra
    echo '</div>';
    echo '<br>';
    echo '<a href="#" class="item_add single-item hvr-outline-out button2">Agregar al carrito</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }

  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
} else {
  echo "No se encontraron productos en la base de datos.";
}


?>

						<div class="clearfix"></div>		
					</div>	
				</div>	
			</div>
		</div>
	</div>
</div>
<!-- //product-nav -->


<?php 
include 'footer.php'; 
?>

<script src="carrito.js"></script>

  <!-- JavaScript para ocultar el preloader -->
 <script src="js/carrito.js"></script>
<script>
	window.onload = function() {
            document.querySelector(".preloader").style.display = "none";
        };
</script>

<script>
$(document).ready(function() {
    $('.item_add').on('click', function() {
        var productItem = $(this).closest('.men-pro-item');
        var productName = productItem.find('h4 a').text();
        var productPrice = productItem.find('.item_price').text();
        var productImage = productItem.find('.pro-image-front').attr('src');
        var productDescription = productItem.find('.product-description').html(); 
        
        var productSalePrice = productItem.find('del').text(); 
        var url = "single.php?name=" + encodeURIComponent(productName) + "&price=" + encodeURIComponent(productPrice) + "&image=" + encodeURIComponent(productImage) + "&description=" + encodeURIComponent(productDescription) + "&salePrice=" + encodeURIComponent(productSalePrice);
      
        window.location.href = url;
    });
});
</script>

<script>
$(document).ready(function() {
    $('.link-product-add-cart').on('click', function() {
        var productItem = $(this).closest('.men-pro-item');
        var productName = productItem.find('h4 a').text();
        var productPrice = productItem.find('.item_price').text();
        var productImage = productItem.find('.pro-image-front').attr('src');
        var productDescription = productItem.find('.product-description').html(); // Clonar el contenido HTML de la descripción
        
        // Crear la URL con los parámetros codificados
		var url = "single.php?name=" + encodeURIComponent(productName) + "&price=" + encodeURIComponent(productPrice) + "&image=" + encodeURIComponent(productImage) + "&description=" + encodeURIComponent(productDescription);
      
        // Redirigir al usuario a la nueva página
        window.location.href = url;
    });
});
</script>
 <script src="js/slider.js"></script>
 <script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar li a").on('click', function(event) {

   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>	
</body>
</html>
