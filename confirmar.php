<?php

$promo = $_POST['promo'];
$bebida = $_POST['bebida'];
$entrega = $_POST['entrega'];
$cliente = $_POST['cliente'];


switch($promo){
    case 1:
        $promo = 'PIZZA INDIVIDUAL + BEBIDA';
        $valor = 5000;
    break;
    case 2:
        $promo = 'PIZZA MEDIANA + BEBIDA';
        $valor = 7000;
    break;
    case 3:
        $promo = 'PIZZA FAMILIAR + BEBIDA';
        $valor = 10000;
    break;
    case 4:
        $promo = 'PIZZA XL + BEBIDA';
        $valor = 15000; 
    break;
}
switch($bebida){
    case 1:
        $bebida = 'Coca-Cola';
    break;
    case 2:
        $bebida = 'Fanta';
    break;
    case 3:
        $bebida = 'Sprite';
    break;
    case 4:
        $bebida = 'Pepsi';
    break;
}
switch($entrega){
    case 1:
        $entrega = 'Delivery';
        $costo = 2000;
    break;
    case 2:
        $entrega = 'Retiro en Local para Llevar';
        $costo = 0;
    break;
    case 3:
        $entrega = 'Retiro en Local para Servir';
        $costo = 0;
    break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Pizza HUT SPA.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>  
    <section>
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
<div class="card">
    <div class="card-header">
        Tu Orden se encuentra en proceso!
    </div>
    
    <div class="card-body">
        Detalle:
        <table class="table table-bordered">
            <tr>
                <th>Cliente</th>
                <td><?php echo $cliente; ?></td>
            </tr>
            <tr>
                <th>Promo</th>
                <td><?php echo $promo;?></td>
            </tr>
            <tr>
                <th>Bebida</th>
                <td><?php echo $bebida;?></td>
            </tr>
            <tr>
                <th>Despacho</th>
                <td><?php echo $entrega;?></td>
            </tr>
            <tr>
                <th>Total</th>
                <td>
                    <b><?php echo $valor + $costo;?></b>
                </td>
            </tr>
        </table>
    </div>
    <div class="card-footer">
        <?php 
            if($entrega == 1){?>
            <form action="pedido-realizado.php" method="post">
                
            </form>
           <?php } ?>
    

    
    </div>
</div>
            </div>
        </div>
    </section>
    
</body>
</html>