<?php get_header();

    $post_title = get_the_title();;
    $post_content = get_post_field('post_content' );
?>

<main>

	<h1>
        <?= $post_title ?>
	</h1>

	<div>
        <?= $post_content ?>
    </div>

	<div style="margin-bottom: 30px">
        <?php get_template_part('sidebar' ); ?>
	</div>

    <div style="margin-bottom: 30px">
        <?php

        $next_post = get_adjacent_post(true, '', false) -> ID;
        $prev_post = get_adjacent_post( true ) -> ID;

        ?>

        <?php if ( $prev_post ): ?>
            <a href="<?= get_permalink( $prev_post ) ?>" style="margin-right: 20px">
                Prev
            </a>
        <?php endif; ?>

        <?php if ( $next_post ): ?>
            <a href="<?= get_permalink( $next_post ) ?>">
                Next
            </a>
        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>
