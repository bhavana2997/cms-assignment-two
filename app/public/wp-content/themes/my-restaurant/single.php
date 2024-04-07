<?php

get_header(); 

while ( have_posts() ) :
    the_post();

    $product_id = get_the_ID(); 
    $product = wc_get_product( $product_id ); 

    if ( $product ) {
        echo '<div class="container mt-4">';
        echo '<div class="single-product">';

        echo '<h1>' . $product->get_name() . '</h1>'; 
        echo '<div class="price">' . $product->get_price_html() . '</div>'; 

        $image_id  = $product->get_image_id();
        $image_url = wp_get_attachment_image_url( $image_id, 'full' );
        if ( $image_url ) {
            echo '<div class="product-image">';
            echo '<img class="product-single-image" src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $product->get_name() ) . '">';
                echo '<form action="' . esc_url( $product->add_to_cart_url() ) . '" method="post" enctype="multipart/form-data">';
                echo '<button type="submit" class="add-to-cart-button">' . esc_html( $product->single_add_to_cart_text() ) . '</button>';
                echo '<input type="hidden" name="add-to-cart" value="' . absint( $product_id ) . '" />';
                wp_nonce_field( 'woocommerce-add_to_cart' );
                echo '</form>';
            echo '</div>';
            echo '</div>';
            
        } else {
            echo '<p>No image available.</p>';
        }

    
        $related_ids = wc_get_related_products( $product_id, 4 ); // Get 4 related products
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 4,
            'post__in' => $related_ids,
            'orderby' => 'rand'
        );
        $related_products = new WP_Query( $args );

        if ( $related_products->have_posts() ) {
            echo '<div class="related-products">';
            echo '<h2>Related Products</h2>';
            woocommerce_product_loop_start();
            while ( $related_products->have_posts() ) {
                $related_products->the_post();
                wc_get_template_part( 'content', 'product' ); // Outputs the product
            }
            woocommerce_product_loop_end();
            echo '</div>';

        } else {
            echo '<p>No related products found.</p>';
        }
        echo "</div>";

        wp_reset_postdata();


    } else {
        echo '<p>Product not found.</p>';
    }

endwhile;

get_footer(); 

?>