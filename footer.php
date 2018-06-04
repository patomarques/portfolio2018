<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package patomarques
 */

?>



<footer id="footer" class="dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
                <div class="copy-text">
                    <p>Pato Marques &#9398; 2018</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/custom/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/custom/js/bundle.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/custom/js/main.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/custom/js/patomarques.js"></script>

</body>
</html>
