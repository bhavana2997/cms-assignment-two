<?php 
    get_header();
?>
<section class="banner container mt-5">
    <span class="cover"></span>
    <h1 class="heading-welcome">Welcome to Foodie Palace</h1>
</section>
   

<?php
global $woocommerce;

$args = array(
    'post_type' => 'product',
    'posts_per_page' => 4 
);

$loop = new WP_Query($args);

if ($loop->have_posts()) : 
    echo '<div class="container mt-4">';
    echo '<div class="products-wrapper d-flex gap-5 flex-wrap">';
    while ($loop->have_posts()) : $loop->the_post(); 
        global $product;
        echo '<div class="product-item">';
            if (has_post_thumbnail()) {
                echo '<div class="product-image">';
                    the_post_thumbnail('woocommerce_thumbnail');
                echo '</div>';
            }

            echo '<h3 class="product-title">' . get_the_title() . '</h3>';

            echo '<div class="product-price">' . $product->get_price_html() . '</div>';

            echo '<div class="product-add-to-cart mt-3">';
                woocommerce_template_loop_add_to_cart();
            echo '</div>';
        echo '</div>';
    endwhile;
    echo '</div>';
    echo '</div>';

endif;

wp_reset_postdata();
?>


<?php
    get_footer();
?>