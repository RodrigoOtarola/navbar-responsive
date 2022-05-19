<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Google Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
<div class="navbar-fixed">
    <nav class="nav-wrapper">
        <div class="container">
            <a href="#" class="brand-logo">Rodrigo Otárola</a>
            <a href="#" data-target="menu-responsive" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <!--clase hide-on-med-and-down es para desaparecer menu en responsive-->
                <li><a href="#">Sección 1</a></li>
                <li><a href="#">Sección 2</a></li>
                <li><a href="#">Sección 3</a></li>
                <li><a href="#" class="dropdown-trigger" data-target="id_drop">Desplegable<i
                                class="material-icons right">arrow_drop_down</i></a>
                </li>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--Si se activa el menu froptown se desplegan estas celdas-->
<ul id="id_drop" class="dropdown-content">
    <li><a href="#">Item 1</a></li>
    <li class="divider"></li>
    <li><a href="#">Item 2</a></li>
    <li class="divider"></li>
    <li><a href="#">Item 3</a></li>
    <li class="divider"></li>
    <li><a href="#" class="red-text"><i class="material-icons right">close</i>Cerrar</a></li>
</ul>
<!--Si pasamos a responsive se agrupa menu-->
<ul class="sidenav" id="menu-responsive"><!--id tiene que tener el mismo nombre del data target-->
    <li><a href="#">Sección 1</a></li>
    <li><a href="#">Sección 2</a></li>
    <li><a href="#">Sección 3</a></li>
    <!--<li><a href="#" class="dropdown-trigger" data-target="id_drop">Desplegable<i
                    class="material-icons right">arrow_drop_down</i></a>
    </li>-->
    <li><a href="index.php">Cerrar menú<i class="material-icons right">close</i></a></li>
</ul>
<div class="container section">
    <div class="row">
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="card-image waves-effect waves-light">
                    <img src="https://images.pexels.com/photos/1383562/pexels-photo-1383562.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                         alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Lorem, ipsum dolor.<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sapiente minima sequi
                        cupiditate at voluptatem.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="card-image waves-effect waves-light">
                    <img src="https://images.pexels.com/photos/1383562/pexels-photo-1383562.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                         alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Lorem, ipsum dolor.<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sapiente minima sequi
                        cupiditate at voluptatem.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="card-image waves-effect waves-light">
                    <img src="https://images.pexels.com/photos/1383562/pexels-photo-1383562.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                         alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Lorem, ipsum dolor.<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sapiente minima sequi
                        cupiditate at voluptatem.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="card-image waves-effect waves-light">
                    <img src="https://images.pexels.com/photos/1383562/pexels-photo-1383562.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                         alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Lorem, ipsum dolor.<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sapiente minima sequi
                        cupiditate at voluptatem.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="card-image waves-effect waves-light">
                    <img src="https://images.pexels.com/photos/1383562/pexels-photo-1383562.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                         alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Lorem, ipsum dolor.<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sapiente minima sequi
                        cupiditate at voluptatem.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="card-image waves-effect waves-light">
                    <img src="https://images.pexels.com/photos/1383562/pexels-photo-1383562.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                         alt="">
                </div>
                <div class="card-content">
                    <span class="card-title activator">Lorem, ipsum dolor.<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sapiente minima sequi
                        cupiditate at voluptatem.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--Para crear el card como en la pagina-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        M.AutoInit();/*Para inicializar todo lo de JS*/
    });
</script>
<footer class="footer grey">
    <div class="footer-copyright center">
        <div class="container">
            Todos los derechos reservados <?php echo date('Y'); ?>
        </div>
    </div>
</footer>
</body>
</html>