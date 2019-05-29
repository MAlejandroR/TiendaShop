   {foreach $productos as $producto}
           <form action="http://localhost/TiendaShop/logica/producto.php" method="POST">
               <div class="elemento">
                   <input type="submit" class="add" name="comprar" value="Añadir">
                   <b>{$producto['nombre_corto']} </b> {$producto['PVP']} €<hr />
                   <input type="hidden" name="cod" value="{$producto['cod']}">
               </div>
           </form>
       {/foreach}