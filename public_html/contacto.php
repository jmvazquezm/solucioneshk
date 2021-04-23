<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Puertas automáticas, Cercos eléctricos, Cámaras de vigilancia, Alarmas, Control de acceso, Domótica, Gadgets."/>
    <meta name="keywords" content="puertas automaticas precios, cercos electricos para casa, automatización de puertas de garaje, camaras de video vigilancia profesionales">
    <title>Contactanos soluciones hk</title>
    <link rel="shortcut icon" href="img/icon.png"/>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
    <?php
      include('menu.php');
    ?>
    <main>
        <section class="caja">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="color-txt ">Contacto</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="separacion">
            <div class="container">
                <div class="col-md-12">
                    <div class="embed-container">                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7542.33853632291!2d-98.263023!3d19.056294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfc6f8cd44935f%3A0xf6e35693b2e18718!2sDe%20Las%20Mesas%206B%2C%20Bello%20Horizonte%2C%20Puebla%2C%20Pue.!5e0!3m2!1ses-419!2smx!4v1598932735352!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>                    
                </div>
            </div>
        </section>
        <section class="espacio-form">
            <div class="container">
                <div class="row ">
                    <div class="col-12 d-flex justify-content-center">
                        <h4 class="txt-parrafo">¡Cualquier duada o cotización <strong>Escribanos</strong> con gusto le atenderemos!</h4>
                    </div>
                </div>
            </div>
        </section>
        <section >
            <div class="container">
		        <div class="row mt-3">
			        <div class="col">
                        <form action="enviar.php" class="needs-validation" name="form" novalidate method="POST"  >
					        <div class="form-group row">
						        <div class="col-12 col-md-6 ">
							        <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
                                    <div class="invalid-feedback">
                                        Ingrese un nombre
                                    </div>
						        </div>
						        <div class="col-12 col-md-6 ">
							        <label for="correo">Correo electrónico</label>
                                    <input type="email" class="form-control" placeholder="Email" name="correo" id="correo" required>
                                    <div class="invalid-feedback">
                                        Ingrese un correo valido: ejemplo@ejemplo.com
                                    </div>
						        </div>
					        </div>
					        <div class="form-group row">						        
                                <div class="col-12 col-md-6 ">
							        <label for="telefono">Teléfono</label>
                                    <input type="number" class="form-control" placeholder="Teléfono" name="telefono" id="telefono" required>
                                    <div class="invalid-feedback">
                                        Ingrese un número de telefono
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 ">
							        <label for="mensaje">Mensaje</label>
                                    <textarea name="mensaje" id="mensaje" class="form-control" required></textarea>
                                    <div class="invalid-feedback">
                                        Ingrese un mensaje
                                    </div>
                                </div>										
					        </div>
					        <div class="form-group row">
						        <div class="col-12 text-center">							
							        <div class="row justify-content-center">
								        <div class="col-12 col-sm-9 col-md-4">
                                            <input class="btn btn-outline-danger btn-block" type="submit" value="Enviar">                                            
								        </div>
							        </div>
						        </div>
					        </div>
				        </form>
			        </div>
		        </div>
	        </div>
        </section>      
    </main>
   
    <?php
    include('footer.php');
    ?>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/codigo.js"></script>

    <script>
        (function() {
            'use strict';
             window.addEventListener('load', function() {            
             var forms = document.getElementsByClassName('needs-validation');               
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                 event.preventDefault();
                 event.stopPropagation();
             }
                form.classList.add('was-validated');
            }, false);
             });
        }, false);
        })();
    </script>
</body>
</html>