<div class="barra">
    
<p>Bienvenido: <?php echo $nombre ?? ""; ?></p>

<a class="boton"  href="/logout">Cerrar Sesion</a>

</div>

<?php if(isset($_SESSION["admin"])){ ?>
   <div class="barra-servicios">

       <a class="boton"  href="/admin">Ver Citas</a>
       <a class="boton"  href="/servicios">Ver Servicios</a>
       <a class="boton"  href="/servicios/crear">Nuevo Servicios</a>
       
       
   </div>
<?php }   ?>

