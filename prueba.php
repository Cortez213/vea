<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="responsive.css">
	<link rel="stylesheet" href="style.css">
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<!-- single -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="js/imagezoom.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<!-- single -->
	<link rel="stylesheet" href="css/carrito.css">
	<link rel="stylesheet" href="css/preoloadre.css">
	<!-- cart -->
		<script src="js/simpleCart.min.js"></script>
	<!-- cart -->
	<!-- for bootstrap working -->
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
		<script src="js/jquery.easing.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.html"><img src="images/logo3.jpg"></a></h1>
		</div>
		<div class="col-md-6 header-middle">
			<form>
				<div class="search">
					<input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="null">All categories</option>
						<option value="null">Electronics</option>     
						<option value="AX">kids Wear</option>
						<option value="AX">Men's Wear</option>
						<option value="AX">Women's Wear</option>
						<option value="AX">Watches</option>
					</select>
				</div>
				<div class="sear-sub">
					<input type="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
					
				</li>
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
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

<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
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
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PS4<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/woo1.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Clothing</a></li>
											<li><a href="mens.html">Wallets</a></li>
											<li><a href="mens.html">Footwear</a></li>
											<li><a href="mens.html">Watches</a></li>
											<li><a href="mens.html">Accessories</a></li>
											<li><a href="mens.html">Bags</a></li>
											<li><a href="mens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Jewellery</a></li>
											<li><a href="mens.html">Sunglasses</a></li>
											<li><a href="mens.html">Perfumes</a></li>
											<li><a href="mens.html">Beauty</a></li>
											<li><a href="mens.html">Shirts</a></li>
											<li><a href="mens.html">Sunglasses</a></li>
											<li><a href="mens.html">Swimwear</a></li>
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
											<li><a href="womens.html">Clothing</a></li>
											<li><a href="womens.html">Wallets</a></li>
											<li><a href="womens.html">Footwear</a></li>
											<li><a href="womens.html">Watches</a></li>
											<li><a href="womens.html">Accessories</a></li>
											<li><a href="womens.html">Bags</a></li>
											<li><a href="womens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Jewellery</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Perfumes</a></li>
											<li><a href="womens.html">Beauty</a></li>
											<li><a href="womens.html">Shirts</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/woo.jpg" alt=" "/></a>
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
											<li><a href="womens.html">Clothing</a></li>
											<li><a href="womens.html">Wallets</a></li>
											<li><a href="womens.html">Footwear</a></li>
											<li><a href="womens.html">Watches</a></li>
											<li><a href="womens.html">Accessories</a></li>
											<li><a href="womens.html">Bags</a></li>
											<li><a href="womens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Jewellery</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Perfumes</a></li>
											<li><a href="womens.html">Beauty</a></li>
											<li><a href="womens.html">Shirts</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/woo.jpg" alt=" "/></a>
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
				<i style="position: relative;margin-left: 400px;color: #ffffff;margin-top: 20px;" class='bx bx-shopping-bag' id="cart-icon"></i>
	
				<!-- CART  -->
				<div class="cart">
					<h2 class="cart-title">Carrito</h2>
	
					<!-- CONTENT  -->
					<div class="cart-content">
	
	
					</div>
	
					<!-- TOTAL   -->
					<div class="total">
						<div class="total-title">Total</div>
						<div class="total-price">$0</div>
					</div>
					<!-- BUY BUTTON  -->
					
					<a href="javascript:genPDF()">Crear PDF</a>
					

					<!-- CART CLOSE  -->
					<i class='bx bx-x' id="cart-close"></i>
				</div>
				
			</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- banner -->





<!-- //banner-top -->
<script>
	// Ejemplo en la página de destino ("otra_pagina.html")
var params = new URLSearchParams(window.location.search);
var productName = params.get("name");
var productPrice = params.get("price");
var productImage = params.get("image");

// Usar los datos en la página
document.getElementById("product-name").textContent = productName;
document.getElementById("product-price").textContent = productPrice;
document.getElementById("product-image").src = productImage;

</script>
<div style="margin-top: 40px;" ></div>
<section>
    <div class="container flex">
      <div class="left">
		<div class="main_image">
			<img id="product-image" src="image/p1.jpg" class="slide" style="width: 500px; height: 591px; max-width: 100%;">
		  </div>
        <div  id="product-image"class="option flex">
          
         
          
        </div>
      </div>
	 
      <div class="right">
        <h3 id="product-name"></h3>
        <div class="product-price">
			<span id="product-price"></span>
		</div>


        <p id="product-description"></p>
		<h5>Consola</h5>
		<select id="color1" name="Consola">
			<option value="PlayStation 4">PlayStation 4</option>
			<option value="PlayStation 5">PlayStation 5</option>
		</select>
		<h5>Licencia</h5>
		<select id="color2" name="Licencia">
			<option value="Cuenta Primaria">Cuenta Primaria</option>
			<option value="Cuenta Secundaria">Cuenta Secundaria</option>
		</select>
		
	
	
	<section id="mi-contador" style="margin-left: -190px; margin-top: 20px;">
		<h5 style="text-align: center; margin-bottom: 10px;">Cantidad</h5>
		<div id="contador">
			<button id="restar" onclick="restar()">-</button>
			<span id="cantidad">1</span>
			<button id="sumar" onclick="sumar()">+</button>
		</div>
	</section>
		<script>
		// Variable para la cantidad inicial
let cantidad = 1;
let precioOriginal; // Agregamos una variable para almacenar el precio original

// Función para restar
function restar() {
	if (cantidad > 1) {
		cantidad--;
		actualizarPrecio();
	}
}

// Función para sumar
function sumar() {
	cantidad++;
	actualizarPrecio();
}

function actualizarPrecio() {
    // Obtener el precio real desde el elemento con el identificador "product-price"
    const productPriceElement = document.getElementById('product-price');
    const productPriceText = productPriceElement.textContent;
    const productPrice = parseFloat(productPriceText.replace('$', '')); // Eliminamos el símbolo "$" y convertimos a número

    // Si aún no hemos almacenado el precio original, lo hacemos ahora
    if (!precioOriginal) {
        precioOriginal = productPrice;
    }

    const precioTotal = cantidad * precioOriginal; 
    document.getElementById('cantidad').textContent = cantidad;
    document.getElementById('product-price').textContent = `$${precioTotal.toFixed(2)}`;
}


actualizarPrecio();
		</script>
	

	<button class="buton" onclick="addToCart()">Add to Bag</button>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
		<script>

const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];


if (cartItems.length === 0) {
    
    localStorage.removeItem('cartItems');
}
function addToCart() {
    const productName = document.getElementById("product-name").textContent;
    const productPriceText = document.getElementById("product-price").textContent;
    const productPrice = parseFloat(productPriceText.replace("$", "")) || 0; 
    const productConsola = document.getElementById("color1").value;
    const productLicencia = document.getElementById("color2").value;
    const productCantidad = parseInt(document.getElementById("cantidad").textContent);
    const productImage = document.getElementById("product-image").src; 

    
    const existingProduct = cartItems.find(item => (
        item.name === productName &&
        item.consola === productConsola &&
        item.licencia === productLicencia
    ));

    if (existingProduct) {
       
        existingProduct.cantidad += productCantidad;
        existingProduct.price += productPrice; 
    } else {
        
        const productItem = {
            name: productName,
            price: productPrice, 
            consola: productConsola,
            licencia: productLicencia,
            cantidad: productCantidad,
            image: productImage
        };
        cartItems.push(productItem);
    }

    
    localStorage.setItem('cartItems', JSON.stringify(cartItems));

    
    updateCartDisplay();
}
function genPDF() {
    // Recopila los datos del carrito (reemplaza esto con tu propia lógica)
    const cartData = cartItems; // Utilizamos directamente los datos del carrito

    // Crea un nuevo documento PDF
    const doc = new jsPDF();

    // Estilo del título
    doc.setFontSize(16);
    doc.setFontStyle("bold");
    doc.text("Productos en el carrito", 10, 10);

    // Estilo de la tabla
    const startX = 10;
    const startY = 20;
    const columnWidths = [10, 40, 30, 30, 20, 30]; // Ancho de cada columna
    const rowHeight = 10;

    // Encabezados de la tabla
    doc.setFontSize(12);
    doc.setFontStyle("bold");
    doc.setDrawColor(0); // Color de las líneas (negro)
    doc.setLineWidth(0.1); // Grosor de las líneas
    doc.rect(startX, startY, columnWidths.reduce((sum, w) => sum + w), rowHeight, "S"); // Rectángulo para la cabecera

    const headerTexts = ["ID", "Nombre", "Consola", "Licencia", "Cantidad", "Precio"];
    let currentX = startX;
    headerTexts.forEach((header, index) => {
        doc.text(header, currentX + columnWidths[index] / 2, startY + rowHeight / 2, { align: "center" });
        currentX += columnWidths[index];
        if (index < headerTexts.length - 1) {
            doc.line(currentX, startY, currentX, startY + rowHeight); // Línea vertical
        }
    });

    // Datos de la tabla
    doc.setFontStyle("normal");
    cartData.forEach((item, rowIndex) => {
        const y = startY + (rowIndex + 1) * rowHeight;
        doc.line(startX, y, startX + columnWidths.reduce((sum, w) => sum + w), y); // Línea horizontal
        currentX = startX;
        Object.values(item).forEach((value, colIndex) => {
            const textOptions = { align: "center" };
            if (colIndex === 1) {
                // Ajusta el nombre para evitar que se salga de la columna
                textOptions.splitRegex = /\s+/;
                textOptions.maxWidth = columnWidths[colIndex];
                textOptions.fontSize = 8; // Tamaño de fuente más pequeño para el nombre
            }
            if (colIndex === 0) {
                // Mueve el ID hacia la izquierda
                currentX -= 10;
            }
            if (colIndex === 5) {
                // Corrige el problema con el precio
                value = `$${item.price.toFixed(2)}`;
            }
            doc.text(value.toString(), currentX + columnWidths[colIndex] / 2, y + rowHeight, textOptions);
            currentX += columnWidths[colIndex];
            if (colIndex < headerTexts.length - 1) {
                doc.line(currentX, startY, currentX, y + rowHeight); // Línea vertical
            }
        });
    });

    // Línea horizontal al final de la tabla
    doc.line(startX, startY + (cartData.length + 1) * rowHeight, startX + columnWidths.reduce((sum, w) => sum + w), startY + (cartData.length + 1) * rowHeight);

    // Guarda o muestra el PDF
    doc.save('Carrito.pdf');
}
function removeFromCart(index) {
    
    cartItems.splice(index, 1);

    
    localStorage.setItem('cartItems', JSON.stringify(cartItems));

    
    updateCartDisplay();
}

function enviarCarrito() {
    
    localStorage.removeItem('cartItems');

    
    window.location.href = 'checkout.html?cart=' + encodeURIComponent(JSON.stringify(cartItems));
}

function updateCartDisplay() {
    const cartContent = document.querySelector(".cart-content");
    cartContent.innerHTML = ""; 

    cartItems.forEach((item, index) => {
        const productElement = document.createElement("div");
        productElement.classList.add("cart-item");
        productElement.innerHTML = `
            <div class="product-details">
                <img src="${item.image}" alt="${item.name}" class="product-image" style="max-width: 100px;">
                <div class="product-info">
                    <span style="margin-top: -40px">${item.name}</span>
                    <span>${item.cantidad} x $${item.price.toFixed(2)}</span>
                    <span>(${item.consola}, ${item.licencia})</span>
                    <span class="delete-icon" onclick="removeFromCart(${index})">🗑️</span>
                </div>
            </div>
        `;

        if (index > 0) {
            const hrElement = document.createElement("hr");
            hrElement.style.margin = "10px 0";
            cartContent.appendChild(hrElement);
        }

        productElement.style.marginBottom = "20px"; 
        cartContent.appendChild(productElement);
    });

    
    const totalAmount = cartItems.reduce((total, item) => total + item.price, 0);
    const totalElement = document.querySelector(".total-price"); 
    totalElement.textContent = `$${totalAmount.toFixed(2)}`;
}

updateCartDisplay();
		  </script>
		      <script type="text/javascript" src="jspdf.min.js"></script>
		  
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
	
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- JavaScript para ocultar el preloader -->
 
<script>
	window.onload = function() {
            document.querySelector(".preloader").style.display = "none";
        };
</script>
  <script>
	var urlParams = new URLSearchParams(window.location.search);
var productName = urlParams.get('name');
var productPrice = urlParams.get('price');
var productImage = urlParams.get('image');
var productDescription = decodeURIComponent(urlParams.get('description')); // Decodificar la descripción

// Mostrar los datos en la página
document.getElementById('product-name').textContent = productName;
document.getElementById('product-price').textContent = productPrice;
document.getElementById('product-image').src = productImage;
document.getElementById('product-description').innerHTML = productDescription; // Mostrar la descripción

</script>

  <script>
    function img(anything) {
      document.querySelector('.slide').src = anything;
    }

    function change(change) {
      const line = document.querySelector('.home');
      line.style.background = change;
    }
  </script>

<!-- footer -->
<div class="footer" style="background-color: black;">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="images/logo3.jpg" alt=" " /></a></h2>
			<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur, adipisci velit, sed quia non 
			numquam eius modi tempora incidunt ut labore 
			et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>SIGN UP FOR NEWSLETTER !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="mens.html">Men's Wear</a></li>
						<li><a href="womens.html">Women's Wear</a></li>
						<li><a href="electronics.html">Electronics</a></li>
						<li><a href="codes.html">Short Codes</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
<!-- //footer -->
<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->


  <!-- JavaScript para ocultar el preloader -->
 <script src="js/carrito.js"></script>
<script>
	window.onload = function() {
            document.querySelector(".preloader").style.display = "none";
        };
</script>

<!-- Ejemplo en la página de origen -->
<script>
	var urlParams = new URLSearchParams(window.location.search);
var productName = urlParams.get('name');
var productPrice = urlParams.get('price');
var productImage = urlParams.get('image');
var productDescription = decodeURIComponent(urlParams.get('description')); // Decodificar la descripción

// Mostrar los datos en la página
document.getElementById('product-name').textContent = productName;
document.getElementById('product-price').textContent = productPrice;
document.getElementById('product-image').src = productImage;
document.getElementById('product-description').innerHTML = productDescription; // Mostrar la descripción

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
