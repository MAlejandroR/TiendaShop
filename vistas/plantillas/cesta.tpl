<div id="cesta">
    <h3><img src="../imagenes/cesta.png" alt="">
    Cesta de la tienda</h3>
    <hr />
        {if $cesta->cesta_vacia()}
            Cesta vacía
            {$enabled="disabled"}
            <hr />
        {else}
            {$enabled="enabled  "}
            {foreach $cesta->get_productos_cesta() as $cod=>$producto}
                {$producto['unidades']} 
                {$producto['producto']['cod']} 
                {$producto['producto']['PVP']} euros <br />
            {/foreach}
            <hr />
            Total {$cesta->importe_total()} euros
            <hr />
        {/if}
        
             <form action="producto.php" method="POST">
               <input type="submit" value="Vaciar" name="vaciar" {$enabled}>
               <input type="submit" value="Pagar" name="pagar" {$enabled}>
            </form>

       
</div>