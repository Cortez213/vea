<?php
session_start();
include 'Sistem-Gestion/conexion-carrito.php';


// Verifica si la clave "perfil" existe en la matriz de sesión
if(isset($_SESSION["perfil"]) && $_SESSION["perfil"] == "Adminstrador"){
    header('Location: Sistem-Gestion/index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Digital Game</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="icon" href="images/icon.jpg">
<!-- pignose css -->
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="footer copy.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<!-- //pignose css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
 <link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="banner.css">
<link rel="stylesheet" href="css/carrito.css">
<link rel="stylesheet" href="css/preoloadre.css">

<script src="js/jquery.easing.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>






@media (max-width: 600px) {
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
        width: calc(50% - 10px); /* Ajusta el ancho con margen */
        float: left;
        box-sizing: border-box;
        padding: 0 5px; /* Ajusta el margen lateral */
        margin-bottom: 10px; /* Agrega un margen inferior para separar los productos */
    }

    .product-men:nth-child(4n + 1) {
        clear: left; /* Limpia el flotante para que los productos se coloquen en la izquierda */
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

</head>
<body class="js" >
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

<!-- header -->
<div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Disponible las 24/7</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Tu Mejor Opcion</li>
			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">digitalgameverse@gmail.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.html"><img src="images/logo.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
		<?php 
include 'Sistem-Gestion/sech.php'; 
?>
				<div class="clearfix"></div>
			
		</div>
		<?php 
include 'inc.php'; 
?>
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
<!-- //header-bot -->
 <style>
	.dropdown:hover .dropdown-menu {
    display: block;
}
 </style>

<?php 
include 'menu.php'; 
?>
		
		
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- banner -->
<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<style>
	@media only screen and (max-width: 600px) {
		.single-slider {
    height: auto;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 1000px;
    --image1: url('images/slider.jpg');
    --image2: url('images/slider7.jpg');
    --image3: url('images/slider8.jpg');
	--image4: url('images/slider13.jpg');
    --image5: url('images/slider14.webp');
}
}


.single-slider {
    height: auto;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 500px;
    --image1: url('images/slider.jpg');
    --image2: url('images/slider7.jpg');
    --image3: url('images/slider8.jpg');
	--image4: url('images/slider13.jpg');
    --image5: url('images/slider14.webp');
}
	</style>
<script>
const slider = document.querySelector('.single-slider');
const images = [
    'var(--image1)',
    'var(--image2)',
    'var(--image3)',
	'var(--image4)',
    'var(--image5)'
];
let currentImageIndex = 0;

function showNextImage() {
    slider.style.backgroundImage = images[currentImageIndex];
    currentImageIndex = (currentImageIndex + 1) % images.length;
}

// Cambia de imagen cada 4 segundos (4000 ms)
setInterval(showNextImage, 4000);
</script>



	
	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/slider3.jpg" alt="#">
						<div class="content">
							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/slider10.webp" alt="#">
						<div class="content">
							
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="images/slider15.jpg" alt="#">
						<div class="content">
							
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	
<style>
	.product-details {
display: flex;
align-items: center; /* Centra verticalmente los elementos */
}

.product-image {
margin-right: 10px; /* Espacio entre la imagen y los detalles */
}

.product-info {
display: flex;
flex-direction: column; /* Apila los detalles verticalmente */
}
.delete-icon {
font-size: 16px; /* Tamaño del ícono */
color: #e74c3c; /* Color del ícono */
cursor: pointer; /* Cambia el cursor al pasar sobre el ícono */
margin-left: 200px; /* Espacio entre el ícono y el texto */
margin-top: -70px;
}
  </style>


<div class="product-easy">
	<div class="container">
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		
					<?php

// Mostrar la categoría PS4
echo '<div style="margin-bottom: 70px;">';
echo '<h1 style="text-align: center;">Juegos</h1>';
echo '</div>';
echo '<div class="sap_tabs" style="margin-top: -40px;">';
echo '<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">';
echo '<ul class="resp-tabs-list">';
echo '<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Destacados</span></li>';
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
while ($row = $result->fetch_assoc()) {
	echo '<div class="tab-1 resp-tab-content" id="ps5" aria-labelledby="tab_item-1">';
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



// Cerrar la conexión a la base de datos
$conn->close();
?>

<div class="clearfix"></div>						
</div>

						
						<div class="clearfix"></div>						
					</div>
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/g1.png" alt="" class="pro-image-front">
									<img src="images/g1.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Dresses</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/g2.png" alt="" class="pro-image-front">
									<img src="images/g2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html"> Shirts</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/g3.png" alt="" class="pro-image-front">
									<img src="images/g3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Shirts</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/mw2.png" alt="" class="pro-image-front">
									<img src="images/mw2.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">T shirts</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/w4.png" alt="" class="pro-image-front">
									<img src="images/w4.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Air Tshirt Black Domyos</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="col-md-3 product-men yes-marg">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/w3.png" alt="" class="pro-image-front">
									<img src="images/w3.png" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>
										
								</div>
								<div class="item-info-product ">
									<h4><a href="single.html">Hand Bags</a></h4>
									<div class="info-product-price">
										<span class="item_price">$45.99</span>
										<del>$69.71</del>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>									
								</div>
							</div>
						</div>
						<div class="clearfix"></div>		
					</div>	
				</div>	
			</div>
		</div>
	</div>
</div>
<!-- //product-nav -->


<?php 
include 'Sistem-Gestion/footer.php'; 
?>

<script src="Sistem-Gestion/js/carrito.js"></script>
  <!-- JavaScript para ocultar el preloader -->
 <script src="Sistem-Gestion/carrito.js"></script>
<script>
	window.onload = function() {
            document.querySelector(".preloader").style.display = "none";
        };
</script>

<!-- Ejemplo en la página de origen -->
<script>
$(document).ready(function() {
    $('.item_add').on('click', function() {
        var productItem = $(this).closest('.men-pro-item');
        var productName = productItem.find('h4 a').text();
        var productPrice = productItem.find('.item_price').text();
        var productImage = productItem.find('.pro-image-front').attr('src');
        var productDescription = productItem.find('.product-description').html(); // Clonar el contenido HTML de la descripción
        
        // Crear la URL con los parámetros codificados
		var url = "Sistem-Gestion/single.php?name=" + encodeURIComponent(productName) + "&price=" + encodeURIComponent(productPrice) + "&image=" + encodeURIComponent(productImage) + "&description=" + encodeURIComponent(productDescription);
      
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
