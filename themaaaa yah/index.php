<?php
//header
get_header();

//worpress loop
if(have_posts() ):
while (have_posts() ) : the_post()?>
<article class="bericht">
<div class="container">
<h2><?php the_title(); ?></h2>
<?php the_content();?>
</div>
</article>
<!-- einde container -->
</h2>

<?php
	endwhile;
else :
  echo '<p> er zijn geen berichten </p>';
endif;
//einde worpress loop

//footer
get_footer();


 ?>
