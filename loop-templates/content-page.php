<?php
/**
 * Partial template for content in page.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$title = get_field('hero_title');
$img = get_field('hero_image');
//$form_cleaner = get_field('form');

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<div class="hero-container" style="background-image: url('<?php echo $img?>'); height: 600px;">
			<div class="hero-inner"><?php echo $title ?></div>			
		</div>

		<div class="container">
			<?php the_content(); ?>
		</div>

	</div><!-- .entry-content -->
	

</article><!-- #post-## -->
