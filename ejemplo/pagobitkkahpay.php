<!DOCTYPE html>
<html lang="es">
<head>
    <title>Bitkkahpay payment || Bitkkahpay</title>
    <?php include("../partials/head.php")?>
</head>

<body class="bkg-secondary-color">

<!--CUERPO-->
<main>

<div class="flex centrados fullscreen">
    <div class="container">
            <div class="col-sm-12 p0">
                <div class="modal z-depth-3 modal-chico p0">
                    <div class="bkg-primary-color header-con-logo">
                        <img src="../images/iconos_logo_en_blanco.png" alt="Logo" class="img-responsive logo"/>
                    </div>                    
                    <div class="p20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="caja-user">
                                    <div class="img-user">
                                        <img src="https://via.placeholder.com/80x80" alt="">
                                    </div>
                                    <div class="nombre-user">
                                        <span>Welcome,</span><br>
                                        <b>Cosme Fulanito</b>
                                    </div>                            
                                </div>                           
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

                        <span class="titulo-ventana">Payment with Bitkkahpay balance</span>
                        <div class="row center-text">
                            <div class="col-sm-12">
                                <br>
                                <p class="precio-total">0.000001 BTC</p>
                                <br>
                            </div>
                        </div>                         
                        <div class="row center-text">
                            <div class="col-sm-12">
                                <a class="btn" id="cta">Confirm operation</a>
                            </div>
                        </div>                                 
                        <br>                               
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<!--ROOTEO PARA PRUEBA-->
<script>
$("#cta").click(function() {
    alert("Pago realizado");
});

</script>
<?php include("../partials/tags-finales.php")?>

</body>
</html>