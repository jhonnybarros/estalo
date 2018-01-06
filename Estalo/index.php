<?php get_header(); ?>

<section class="intro">
   <div>
        <img class="egg" alt="Ovo Estalo" src="<?php echo get_template_directory_uri() . '/assets/image/logo.png'; ?>" />
        <p>crack<br/> the egg!</p>
    </div>
    <p class="arrow"></p>
</section>

<section class="light-sec">
    <div class="who">
        <h2 class="quem">
           // quem?
        </h2>
        <div class="content">
            <div class="who-img">
             
            </div>
            <p>
            Mussum Ipsum, cacilds vidis litro abertis. Leite de capivaris, leite de mula manquis sem cabeça. Quem num gosta di mé, boa gentis num é. Quem manda na minha terra sou euzis! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis.Mussum Ipsum, cacilds vidis litro abertis. Leite de capivaris, leite de mula manquis sem cabeça. Quem num gosta di mé, boa gentis num é. Quem manda na minha terra sou euzis! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis.</p>
        </div>
        <h2 class="onde">
           // onde?
        </h2>
        <div class="content">
            
            <p>
            Mussum Ipsum, cacilds vidis litro abertis. Leite de capivaris, leite de mula manquis sem cabeça. Quem num gosta di mé, boa gentis num é. Quem manda na minha terra sou euzis! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis.Mussum Ipsum, cacilds vidis litro abertis. Leite de capivaris, leite de mula manquis sem cabeça. Quem num gosta di mé, boa gentis num é. Quem manda na minha terra sou euzis! Nec orci ornare consequat. Praesent lacinia ultrices consectetur. Sed non ipsum felis.</p>
            <div class="who-img">
             
            </div>
        </div>
    </div>
</section>
<section class="dark-sec">
    <div class="our-job">
        <?php
        $gallery_shortcode = '[gallery id="' . intval( $post->post_parent ) . '"]';
        print apply_filters( 'the_content', $gallery_shortcode );
    ?>
    </div>
</section>
<section class="light-sec">

</section>
<section class="dark-sec">

</section>

<?php get_footer(); ?>