	</div> <!-- #contenido -->
	<footer class="site-footer">
		<div class="container">
			<nav id="footer-navigation" class="footer-navigation">
				<!-- si creamos otro menu, tenemos que especificar el nombre del menu creado -->
				<?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>
			</nav>
		</div>
		<!-- limpiar floats con clear -->
		<div class="clear"></div>
		<div class="copyright">
			<p>Visita Toronto <?php echo date('Y'); ?></p>
		</div>
	</footer>
</div> <!-- #page -->
<?php wp_footer(); ?>
</body>
</html>