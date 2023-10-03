<?php 
 $url = "http://".$_SERVER['HTTP_HOST']."/WebSite-Turismo"; 
 ?>
</main>
<!-- footer desing -->
<footer class="footer">
    <div class="footer-text">
        <p>Copyright &copy; 2023 H.Ayuntamiento | Todos los derechos reservados.</p>
    </div>
    <div class="logo-footer">
        <img src="<?php echo $url?>/assets/img/LOGO BLANCO AYUNTAMIENTO.webp" alt="Logo municipal de sultepec">
    </div>
    <div class="footer-text">
        <p>Redes sociales</p>
        
        <a href="https://www.facebook.com/Ayuntamientosultepec2022/"><img class="icon-footer-facebook"src="<?php echo $url?>/assets/icons/facebook.svg" alt="Flecha que regresa al index"></a>
    </div>
    <div class="footer-iconTop">
        <a href="#silder_main" title="redireccion al inicio"><img class="icon-footer-svg"src="<?php echo $url?>/assets/icons/arrow-up-solid.svg" alt="Flecha que regresa al index"></a>
    </div>
</footer>
<!-- Scripts JS -->
<script src="<?php echo $url; ?>/assets/js/index.js"></script>
<script src="<?php echo $url; ?>/assets/js/lightbox.js"></script>
</body>
</html>
