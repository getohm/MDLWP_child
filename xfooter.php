<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package MDLWP
 */

?>

	<?php do_action( 'mdlwp_before_closing_content' ); ?>

</div>
<!-- #content -->

<footer
  class="dj-text-styling dj-footer mdl-mini-footer mdl-color--grey-900">


		<?php do_action( 'mdlwp_after_opening_footer' ); ?>

		  <div class="mdl-mini-footer__left-section">


      <div id="search-2"
        class="mdl-mini-footer__drop-down-section footer-widget widget_search">
        <form role="search" method="get" class="search-form"
          action="http://localhost:8080/discoveringjapan/">
          <label class="mdl-button mdl-js-button mdl-button--icon"
            for="fixed-header-drawer-exp"
            data-upgraded=",MaterialButton"> <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" value=""
              name="s" id="fixed-header-drawer-exp">
          </div>
        </form>
      </div>

      </div>
 		  <div class="mdl-mini-footer__right-section">
        <ul>
 <!-- Disable Twitter
          <li class="mdl-mini-footer--social-btn">
          <a href="https://twitter.com/googledesign" class="social-btn social-btn__twitter" role="button" title="Twitter"></a>
          </li>
  -->
          <li class="mdl-mini-footer--social-btn">
            <a href="https://www.facebook.com/" class="social-btn social-btn__facebook" role="button" title="Facebook"></a>
          </li>
           <!-- Disable Google+
          <li class="mdl-mini-footer--social-btn">
          <a href="https://plus.google.com/+googledesign" class="social-btn social-btn__gplus" role="button" title="Google+"></a>
          </li>
            -->
        </ul>

      </div>


		 <?php get_template_part( 'template-parts/nav', 'footer' ); ?>

		<?php do_action( 'mdlwp_before_closing_footer' ); ?>



</footer>

</main>
<!-- .mdl-layout__content -->
</div>
<!-- #page -->

<?php wp_footer(); ?>

<?php do_action( 'mdlwp_before_closing_body' ); ?>

</body>
</html>
