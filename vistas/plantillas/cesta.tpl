<div id="cesta">
    {$enabled="disabled"}
        {if isset($cesta)}
            {foreach $cesta as $cod=>$producto}
                {$producto['unidades']} 
                {$producto['producto']['nombre_corto']} 
                {$producto['producto']['PVP']} euros <br />
            {/foreach}
        {/if}
       
</div>