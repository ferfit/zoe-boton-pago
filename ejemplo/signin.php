<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sign In || Bitkkahpay</title>
    <?php include("../partials/head.php")?>
</head>

<body class="bkg-secondary-color">

<!--CUERPO-->
<main>

<div class="flex centrados fullscreen">
    <div class="container">
            <div class="col-sm-12">
                <div class="modal z-depth-3 modal-chico p0">
                    <div class="bkg-primary-color header-con-logo">
                        <img src="../images/iconos_logo_en_blanco.png" alt="Logo" class="img-responsive logo"/>
                    </div>                    
                    <div class="p20">
                    <div class="row">
                            <div class="col-sm-6">
                        <span class="titulo-ventana">Register with Bitkkahpay</span>
                            </div>
                            <div class="col-sm-6">
                                <div class="selector-idioma">
                                    <select id="idioma">
                                        <option value="es">Es</option>
                                        <option value="en" selected>En</option>
                                        <option value="ch" >Ch</option>
                                        <option value="ru" >Ru</option>
                                    </select>
                                </div>
                            </div>
                        </div>                           
                        <form action="" method="POST" id="">
                            <div class="campo-form">
                                <!-- <label for="name">Nombre de usuario</label> -->
                                <input id="name" type="text" placeholder="Name"/>
                            </div>                        
                            <div class="campo-form">
                                <!-- <label for="email">Email</label> -->
                                <input id="email" type="email" placeholder="Email"/>
                            </div>
                            <div class="campo-form">
                                <!-- <label for="password">Contraseña</label> -->
                                <input id="password" type="password" placeholder="Password"/>
                            </div>         
                            <div class="campo-form">
                                <!-- <label for="password2">Confirmá tu contraseña</label> -->
                                <input id="password2" type="password" placeholder="Confirm your password"/>
                            </div>                              
                            <div class="campo-form">
                                <input type="submit" class="btn btn-full" value="Register" id="cta"/>
                            </div>  
                            <hr>
                            <div class="campo-form center-text">
                                <a href="login.php" class="btn-secundario btn-full">sign in</a>
                            </div>                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<!--ROOTEO PARA PRUEBA-->
<script>
$("#cta").click(function(e){
    e.preventDefault();
    location.href='login.php';
});
</script>
<?php include("../partials/tags-finales.php")?>

</body>
</html>