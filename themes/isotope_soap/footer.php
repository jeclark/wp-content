<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Isotope_Soap
 * @since Isotope_Soap 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'isotope_soap_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'isotope_soap' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'isotope_soap' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'isotope_soap' ), 'isotope_soap', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>


<script>

jQuery.Isotope.prototype._masonryResizeChanged = function() {
    return true;
};

jQuery.Isotope.prototype._masonryReset = function() {
// layout-specific props
    this.masonry = {};
    this._getSegments();
    var i = this.masonry.cols;
    this.masonry.colYs = [];
    while (i--) {
        this.masonry.colYs.push( 0 );
    }

    if ( this.options.masonry.cornerStampSelector ) {
        console.log(this.element);
        var $cornerStamp = this.element.find( this.options.masonry.cornerStampSelector ),
            stampWidth = $cornerStamp.outerWidth(true) - ( this.element.width() % this.masonry.columnWidth ),
            cornerCols = Math.ceil( stampWidth / this.masonry.columnWidth ),
            cornerStampHeight = $cornerStamp.outerHeight(true);
        for ( i = ( this.masonry.cols - cornerCols ); i < this.masonry.cols; i++ ) {
            this.masonry.colYs[i] = cornerStampHeight;
        }
        var allArticles = jQuery('article');
        var container = jQuery('#content');
        console.log(allArticles.length);
        if(allArticles.length == 1) {
            console.log(allArticles.width());
            allArticles.width(this.element.width() - 360)
            console.log(allArticles.width());
        }
    }
};

jQuery(function(){
    jQuery('#page').isotope({
        // options
        itemSelector : 'article.post',
        masonry: {
            columnWidth: 15,
            cornerStampSelector: 'header#masthead'   },
        onLayout: function( $elems, instance ) {
            console.log( instance );
        }
    });
});

</script>
</body>
</html>