<?php

$title = get_field('hero_title');
$img = get_field('hero_image');

?>

<div class="hero-container" style="background-image: url('<?php echo $img?>'); height: 600px;">
	<div class="hero-inner"></div>
</div>
