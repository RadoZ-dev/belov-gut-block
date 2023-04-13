<?php
/**
 * The template used for Radoslav Test custom ACF block.
 *
 * @package wd_s
 */

$title = get_field( 'title' );
?>

<section class="radoslav-test">
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <?php
            if( have_rows( 'boxes' ) ): 
        ?>
            <div class="radoslav-test__boxes">
                <?php 
                    while( have_rows( 'boxes' ) ) : the_row();
                    
                    $img     = get_sub_field( 'image' );
                    $title   = get_sub_field( 'title' );
                    $text    = get_sub_field( 'text' );
                    $button  = get_sub_field( 'button' );
                ?>   
                    <div class="radoslav-test__box">
                        <img src="<?php echo $img['url']; ?>">
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $text; ?></p>
                        <a class="button" href="<?php echo $button['url']; ?>">
                            <?php echo $button['button_text']; ?>
                        </a>
                    </div>
                <?php
                    endwhile;
                ?>
            </div>
        <?php endif; ?>
    </div>
</section>