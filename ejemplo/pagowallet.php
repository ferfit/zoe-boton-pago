<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pay with Wallet || Bitkkahpay</title>
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
                        <span class="titulo-ventana">Pay with Wallet</span>
                        <div class="row center-text">
                            <div class="col-sm-12">
                                <br>
                                <p class="precio-total">0.000001 BTC</p>
                                <br>
                                <img id="qr" src="../images/qr.png">
                            </div>
                        </div>      
                        <hr>     
                        <div class="row center-text">
                            <div class="col-sm-12">
                                <input type="text" value="123456789123456789123456789" id="walletId">
                            </div>
                        </div>                                       
                        <div class="row center-text">
                            <div class="col-sm-12">
                                <a class="btn" id="cta">Copy</a>
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
    alert("Wallet copiada");
});

</script>
<?php include("../partials/tags-finales.php")?>

</body>
</html>