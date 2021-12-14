<!DOCTYPE html>
<html lang="es">
<head>
    <title>Resume || Bitkkahpay</title>
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
                        <span class="titulo-ventana">Purchase summary</span>
                        <div class="caja-carrito">
                            <div class="caja-carrito-l">
                                <label>Product</label>
                            </div>
                            <div class="caja-carrito-r">
                                <label>Quantity</label>
                            </div>
                        </div>
                        <div class="caja-carrito">
                            <div class="caja-carrito-l">
                                <span class="caja-carrito-producto">Sarasazasd asdasld</span>
                            </div>
                            <div class="caja-carrito-r">
                                <div style="display: flex;align-items: center;">
                                    <span class="caja-carrito-producto" id="cantidad">1</span>
                                    <div class="controls">
                                        <button class="control control-up"><svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 24 24" width="30"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg></button>
                                        <button class="control control-down"><svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 24 24" width="30"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg></button>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <br>
                        <div class="caja-carrito">
                            <div class="caja-carrito-l">
                                <label>Unit value</label>
                            </div>
                            <div class="caja-carrito-r"></div>
                        </div>       
                        <div class="caja-carrito">
                            <div class="caja-carrito-l">
                                <b>0.000001BTC</b>
                            </div>
                        </div>   
                        <br><br>    
                        <div class="caja-carrito">
                            <div class="caja-carrito-l">
                                <label>Product description</label>
                            </div>
                            <div class="caja-carrito-r"></div>
                        </div>       
                        <div class="caja-carrito">
                            <b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, fuga laborum, illum sunt cupiditate magni in libero mollitia qui consequuntur pariatur doloremque magnam odio accusamus? Ipsam nostrum distinctio commodi ullam!</b>
                        </div>    
                        <br><br>         
                        <div class="caja-carrito">
                            <div class="caja-carrito-l-small">
                                <label>Seller</label>
                            </div>
                            <div class="caja-carrito-r-small">
                                <label>Rating</label>                                
                            </div>
                        </div>       
                        <div class="caja-carrito">
                            <div class="caja-carrito-l-small">
                                <b>Sr. Fulanito</b>
                            </div>
                            <div class="caja-carrito-r-small">
                                <i class="fas fa-star primary-color"></i>
                                <i class="fas fa-star primary-color"></i>
                                <i class="fas fa-star primary-color"></i>                                
                                <i class="fas fa-star primary-color"></i>
                                <i class="far fa-star primary-color"></i>
                            </div>
                        </div>
                        <hr>
                        <br><br> 
                        <div class="caja-carrito column-mobile">
                            <div class="caja-carrito-l-small">
                                <div>
                                    <input type="radio" id="saldo" name="pago" checked>
                                    <label for="saldo">Pay with <strong>Bitkkahpay</strong> balance</label>
                                </div>
                            </div>
                            <div class="caja-carrito-r-small">
                                <div>
                                    <input type="radio" id="wallet" name="pago">
                                    <label for="wallet">Pay with my wallet</label>
                                </div>
                            </div>
                        </div>                                                
                        <br><br>
                        <div class="caja-carrito center-text">
                            <p class="precio-total">0.000001 BTC</p>
                        </div>     
                        <br>
                        <div class="row center-text">
                            <div class="col-sm-12">
                                <b>10 USD</b><span class="barra">|</span><b>10 EUR</b>
                            </div>
                        </div>  
                        <br><br>
                        <div class="row center-text">
                            <div class="col-sm-12">
                                <a href="pagobitkkahpay.php" class="btn" id="cta">Pay</a>
                            </div>
                        </div>   
                        <div class="row center-text">
                            <div class="col-sm-12">
                                <b class="error-feedback">Check the fields.</b>
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
$(".control-up").click(function(){
    let valor = $("#cantidad").text();;
    valor = Number(valor);
    valor = valor + 1;
    $("#cantidad").text(valor);
});   
$(".control-down").click(function(){
    let valor = $("#cantidad").text();;
    valor = Number(valor);
    valor = valor - 1;
    $("#cantidad").text(valor);
});  

$("#saldo").click(function() {
    $("#cta").attr("href","pagobitkkahpay.php");   
});

$("#wallet").click(function() {
    $("#cta").attr("href","pagowallet.php");   
});

</script>
<?php include("../partials/tags-finales.php")?>

</body>
</html>