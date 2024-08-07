<?php
/**
 * Custom Single Product Template
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Getting Product Data.
$frhd_product_id = get_the_id();
$frhd_the_product = wc_get_product( $frhd_product_id );

// Check if the product object is valid
if ( $frhd_the_product && is_a( $frhd_the_product, 'WC_Product' ) ) {

    // Set the global $product variable to the current product object
    $GLOBALS['product'] = $frhd_the_product;
}
// Get additional product data
$frhd_currency = get_woocommerce_currency_symbol();
$frhd_permalink = $frhd_the_product->get_permalink();

/**
 * Header.
*/
wp_head();
get_header();

// Enqueuing the script.
wp_enqueue_script( 'gpsc-sscript', GPSC_PLUG_DIR_URL_FILE . 'public/js/gpsc-single-prod-temlt.js', array(), '1.0.0', true );
wp_enqueue_style( 'gpsc-sstyle', GPSC_PLUG_DIR_URL_FILE . 'public/css/gpsc-single-prod-temlt.css', array(), '1.0.0' );

    /**
     * Getting Product Data.
     */
    $image_id = $frhd_the_product->get_image_id();
    $product_image_url = wp_get_attachment_image_url( $image_id, 'full' );
    $attachment_ids = $frhd_the_product->get_gallery_image_ids();
    $wpgpsc_prod_info = get_post_meta( $frhd_product_id, '_prefix_prod_page_opt', true );

    // Product Review area
    if ( comments_open() || get_comments_number() ) {
        // Fetch all reviews for the product
        $args_reviews = array(
            'post_id' => get_the_ID(), // Get the current product ID
            'status' => 'approve', // Get only approved reviews
            'type' => 'review', // Get only reviews
        );
    
        $reviews = get_comments( $args_reviews );
    
        // Fetch all other comments for the product
        $args_comments = array(
            'post_id' => get_the_ID(), // Get the current product ID
            'status' => 'approve', // Get only approved comments
            'type' => 'comment', // Get only standard comments
        );
    
        $comments = get_comments( $args_comments );
    
        $reviews_with_rating = array();
        $reviews_without_rating = array();
        $comments_without_rating = array();
    
        // Separate reviews into those with and without ratings
        foreach ( $reviews as $review ) {
            $rating = get_comment_meta( $review->comment_ID, 'rating', true );
            if ( $rating ) {
                $reviews_with_rating[] = $review;
            } else {
                $reviews_without_rating[] = $review;
            }
        }
    
        // Separate standard comments (which should not have ratings)
        foreach ( $comments as $comment ) {
            $comments_without_rating[] = $comment;
        }
    
        $count_reviews_with_rating = count( $reviews_with_rating );
        $count_reviews_without_rating = count( $reviews_without_rating );
        $count_comments_without_rating = count( $comments_without_rating );
    
        // Display reviews with ratings
        if ( $reviews_with_rating ) {
            echo '<h2>Reviews with Ratings (' . $count_reviews_with_rating . ')</h2>';
            echo '<ul class="comment-list">';
            foreach ( $reviews_with_rating as $review ) {
                ?>
                <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                    <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
                        <footer class="comment-meta">
                            <div class="comment-author vcard">
                                <?php echo get_avatar( $review, 50 ); ?>
                                <?php printf( '<b class="fn">%s</b>', get_comment_author( $review ) ); ?>
                            </div>
                        </footer>
                        <div class="comment-content">
                            <?php comment_text( $review ); ?>
                            <?php
                            // Display rating if available
                            $rating = get_comment_meta( $review->comment_ID, 'rating', true );
                            if ( $rating ) {
                                echo '<p>Rating: ' . esc_html( $rating ) . ' stars</p>';
                            }
                            ?>
                        </div>
                        <div class="comment-reply">
                            <?php comment_reply_link( array( 'reply_text' => 'Reply', 'depth' => 1, 'max_depth' => 5 ) ); ?>
                        </div>
                    </article>
                </li>
                <?php
            }
            echo '</ul>';
        } else {
            echo '<p>No reviews with ratings found.</p>';
        }
    
        // Display reviews without ratings
        if ( $reviews_without_rating ) {
            echo '<h2>Reviews without Ratings (' . $count_reviews_without_rating . ')</h2>';
            echo '<ul class="comment-list">';
            foreach ( $reviews_without_rating as $review ) {
                ?>
                <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                    <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
                        <footer class="comment-meta">
                            <div class="comment-author vcard">
                                <?php echo get_avatar( $review, 50 ); ?>
                                <?php printf( '<b class="fn">%s</b>', get_comment_author( $review ) ); ?>
                            </div>
                        </footer>
                        <div class="comment-content">
                            <?php comment_text( $review ); ?>
                        </div>
                        <div class="comment-reply">
                            <?php comment_reply_link( array( 'reply_text' => 'Reply', 'depth' => 1, 'max_depth' => 5 ) ); ?>
                        </div>
                    </article>
                </li>
                <?php
            }
            echo '</ul>';
        } else {
            echo '<p>No reviews without ratings found.</p>';
        }
        // Show rating.
        comments_template();
    
        // Display standard comments without ratings
        
    
        // Display the comment form
        comment_form();
    } else {
        echo '<p>Comments are closed.</p>';
    }
?>


<div id="gpsc-main">
    <div class="gpsc-container">
        <!-- Breadcrumb -->
        <div class="gpsc-breadcrumb">
            <?php woocommerce_breadcrumb(); ?>
        </div>

        <!-- Product Details -->
        <div class="gpsc-product-details">
            <div class="gpsc-action">
                <div class="gpsc-share-on">
                    <span>Share:</span>
                    <ul>
                        <li><a href="#" data-sharer="facebook" data-hashtag="hashtag" data-url="<?php echo esc_url( $frhd_permalink ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="8"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg></a></li>
                        <li><a href="#" data-sharer="pinterest" data-url="<?php echo esc_url( $frhd_permalink ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="10"><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg></a></li>
                        <li><a href="#" data-sharer="whatsapp" data-title="Checkout Sharer.js!" data-url="<?php echo esc_url( $frhd_permalink ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="13"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></a></li>
                    </ul>
                </div>
                <div class="gpsc-options">
                    <ul>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="12"><path d="M0 48C0 21.5 21.5 0 48 0l0 48 0 393.4 130.1-92.9c8.3-6 19.6-6 27.9 0L336 441.4 336 48 48 48 48 0 336 0c26.5 0 48 21.5 48 48l0 440c0 9-5 17.2-13 21.3s-17.6 3.4-24.9-1.8L192 397.5 37.9 507.5c-7.3 5.2-16.9 5.9-24.9 1.8S0 497 0 488L0 48z"/></svg>Save</a></li>
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"><path d="M13 14h2v-3h3V9h-3V6h-2v3h-3v2h3zm-7 4V2h16v16zm-4 4V6h2v14h14v2z" /></svg>Add to Compare</a></li>
                    </ul>
                </div>
            </div>

            <div class="gpsc-row">
                <div class="gpsc-gallery-area">
                    <!-- Your gallery images -->
                    <div class="gpsc-product-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                        <?php 
                            echo '
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="'. esc_url( $product_image_url ) .'" itemprop="contentUrl" data-size="1024x768">
                                        <img src="'. esc_url( $product_image_url ) .'" itemprop="thumbnail" alt="Image description" />
                                    </a>
                                    <figcaption itemprop="caption description">Image caption</figcaption>
                                </figure>
                            ';
                        ?>    
                        <div class="gpsc-thumbnails">
                            <?php 
                                $attachment_ids = $frhd_the_product->get_gallery_image_ids();
                                if ( $attachment_ids && count( $attachment_ids ) > 0 ) {
                                    foreach ( $attachment_ids as $attachment_id ) {
                                        $gallery_image_url = wp_get_attachment_image_url( $attachment_id, 'full' );
                                        echo '
                                            <figure class="gpsc-thumb-image" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a href="'.esc_url( $gallery_image_url ).'" itemprop="contentUrl" data-size="400x400">
                                                    <img src="'.esc_url( $gallery_image_url ).'" itemprop="thumbnail" alt="Image description" />
                                                </a>
                                                <figcaption itemprop="caption description">Image caption</figcaption>
                                            </figure>
                                        ';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="gpsc-text-content-area">
                    <h1 class="gpsc-product-name"><?php echo '' . $frhd_the_product->get_name() . ''; ?></h1>
                    <ul class="gpsc-product-info">
                        <li class="gpsc-product-info-group gpsc-product-price">
                            <span class="gpsc-product-info-label">Price:</span>
                            <?php echo'<span class="gpsc-product-info-data gpsc-product-price"><ins>' . $frhd_the_product->get_sale_price() . '৳</ins><del>' . $frhd_the_product->get_regular_price() . '৳</del></span>'; ?>
                        </li>
                        <li class="gpsc-product-info-group">
                            <span class="gpsc-product-info-label">Regular Price:</span>
                            <?php echo'<span class="gpsc-product-info-data gpsc-product-regular-price"><ins>' . $frhd_the_product->get_regular_price() . '৳</ins></span>'; ?>
                        </li>
                        <li class="gpsc-product-info-group">
                            <span class="gpsc-product-info-label">Status:</span>
                            <?php echo'<span class="gpsc-product-info-data gpsc-product-status">' . $frhd_the_product->get_stock_status() . '</span>'; ?>
                        </li>
                        <li class="gpsc-product-info-group">
                            <span class="gpsc-product-info-label">Product Code:</span>
                            <?php echo'<span class="gpsc-product-info-data gpsc-product-code">' . $frhd_the_product->get_sku() . '</span>'; ?>
                        </li>
                        
                        <li class="gpsc-product-info-group">
                            <span class="gpsc-product-info-label">Brand:</span>
                            <span class="gpsc-product-info-data gpsc-product-brand">ABC</span>
                        </li>
                    </ul>
                    <div class="gpsc-product-short-description">
                        <?php echo''.$frhd_the_product->get_short_description().'' ?>
                        <a href="#specification" class="gpsc-view-btn">View More Info</a>
                    </div>
                    <?php
                    /**
                     * Add to cart and variations.
                     */
                    if ( $frhd_the_product ) :
                        if ( $frhd_the_product->is_type( 'variable' ) ) :
                            wp_enqueue_script( 'wc-add-to-cart-variation' );
                            $available_variations = $frhd_the_product->get_available_variations();
                            $attributes = $frhd_the_product->get_variation_attributes();
                            $selected_attributes = $frhd_the_product->get_default_attributes();
                            ?>
                            <form class="variations_form cart" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post" enctype='multipart/form-data' data-product_id="<?php echo esc_attr( $frhd_product_id ); ?>" data-product_variations="<?php echo htmlspecialchars( wp_json_encode( $available_variations ) ); ?>">
                                <table class="variations" cellspacing="0" role="presentation">
                                    <tbody>
                                        <?php foreach ( $attributes as $attribute_name => $options ) : ?>
                                            <tr>
                                                <th class="label"><label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>"><?php echo wc_attribute_label( $attribute_name ); ?></label></th>
                                                <td class="value">
                                                    <select id="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>" name="attribute_<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>" data-attribute_name="attribute_<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>">
                                                        <option value=""><?php esc_html_e( 'Choose an option', 'woocommerce' ); ?>&hellip;</option>
                                                        <?php
                                                        if ( is_array( $options ) ) {
                                                            foreach ( $options as $option ) {
                                                                $selected = ( isset( $selected_attributes[ sanitize_title( $attribute_name ) ] ) && $selected_attributes[ sanitize_title( $attribute_name ) ] === $option ) ? 'selected' : '';
                                                                echo '<option value="' . esc_attr( $option ) . '" ' . esc_attr( $selected ) . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option, $attribute_name, $frhd_the_product ) ) . '</option>';
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                                <div class="single_variation_wrap">
                                    <div class="gpsc-variation-price">
                                        <!-- <span>Price</span> -->
                                        <div class="woocommerce-variation single_variation"></div>
                                    </div>
                                    <div class="woocommerce-variation-add-to-cart variations_button">
                                        <?php woocommerce_quantity_input( array(
                                            'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $frhd_the_product->get_min_purchase_quantity(), $frhd_the_product ),
                                            'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $frhd_the_product->get_max_purchase_quantity(), $frhd_the_product ),
                                            'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $frhd_the_product->get_min_purchase_quantity(),
                                        ) ); ?>
                                        <button type="submit" class="single_add_to_cart_button button alt"><?php esc_html_e( 'Buy Now', 'woocommerce' ); ?></button>
                                        <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $frhd_product_id ); ?>">
                                        <input type="hidden" name="product_id" value="<?php echo esc_attr( $frhd_product_id ); ?>">
                                        <input type="hidden" name="variation_id" class="variation_id" value="0">
                                    </div>
                                </div>

                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                            </form>
                            <?php
                            wc_print_notices();
                        else :
                            ?>
                            <!-- Getting Add to Cart Button & Quantity -->
                            <form class="gpsc-cart" action="<?php echo esc_url( $frhd_permalink ); ?>" method="post" enctype='multipart/form-data'>
                                <?php
                                do_action( 'woocommerce_before_add_to_cart_button' );
                                woocommerce_quantity_input( array(
                                    'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $frhd_the_product->get_min_purchase_quantity(), $frhd_the_product ),
                                    'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $frhd_the_product->get_max_purchase_quantity(), $frhd_the_product ),
                                    'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $frhd_the_product->get_min_purchase_quantity(),
                                ) );
                                ?>
                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $frhd_product_id ); ?>" class="single_add_to_cart_button button alt ajax_add_to_cart">Buy Now</button>
                                <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                            </form>
                            <?php
                            wc_print_notices();
                        endif;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="gpsc-full-description">
        <div class="gpsc-container">
            <div class="gpsc-row">
                <!-- toggle between 'gpsc-tab' and 'gpsc-scroll' for change the  -->
                <div class="gpsc-description-left gpsc-scroll">
                    <div class="gpsc-tab-btns">
                        <button data-target="specification" class="active">Specification</button>
                        <button data-target="description">Description</button>
                        <button data-target="ask-question">Questions (<?php echo'' . $count_reviews_without_rating . ''; ?>)</button>
                        <button data-target="write-review">Reviews <?php echo '(' . $count_reviews_with_rating . ')'; ?></button>
                    </div>
                    <div class="gpsc-tab-contents specifications show" id="specification">
                        <div class="gpsc-section-head">
                            <h2>Specification</h2>
                        </div>
                        <?php  if (!empty($wpgpsc_prod_info) && isset($wpgpsc_prod_info['wpgpsc_prod_spec_table'])) { 
                            echo '<table class="gpsc-data-table gpsc-flex-table" cellpadding="0" cellspacing="0">
                            <colgroup>
                                <col class="name">
                                <col class="value">
                            </colgroup>';
                            foreach ($wpgpsc_prod_info['wpgpsc_prod_spec_table'] as $group) {
                                echo'<thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">' . esc_html($group['wpgpsc_prod_spec_group_name']) . '</td>
                                    </tr>
                                </thead>';
                                echo '<tbody>';
                                foreach ($group['wpgpsc_prod_spec_list'] as $item) {
                                    if (isset($item['wpgpsc_prod_spec_list_item']) && isset($item['wpgpsc_prod_spec_item_value'])) {
                                        echo '
                                            <tr>
                                                <td class="name">' . esc_html($item['wpgpsc_prod_spec_list_item']) . '</td><td class="value">' . esc_html($item['wpgpsc_prod_spec_item_value']) . '</td>
                                            </tr>
                                        ';
                                    }
                                }
                                echo '</tbody>';
                            }
                            echo '</table>';
                        } else {
                            echo 'No product specifications found.';
                        }?>
                    </div>
                    <!-- Description Area  -->
                    <div class="gpsc-tab-contents description" id="description">
                        <div class="gpsc-section-head">
                            <h2>Description</h2>
                        </div>
                        <div class="gpsc-full-desc">
                            <?php echo '<h3>' . $frhd_the_product->get_name() . '</h3>'; ?>
                            <p>The Epson Perfection V39 II Photo and Document Flatbed Scanner guarantees exceptional quality scans for both photos and documents thanks to its 4800 dpi optical resolution. Its unparalleled clarity and detail are unparalleled. Its ability to stitch scans together makes it simple for users to combine large photographs. The photographs may then be sent to cloud storage providers using the included Epson ScanSmart software. The V39 II simplifies the scanning process by offering simple buttons for one-touch scanning. This allows users to rapidly capture their files and transmit them straight to PDF or email. Its Easy Photo Fix technology also revives fading photographs with a single click, making color restoration a pleasure. The scanner is a quick fix for a variety of scanning requirements since it can produce excellent letter-sized scans in as little as 10 seconds. Moreover, it has optical character recognition (OCR) software, which enables users to convert scanned documents into editable Microsoft Word, Excel, and PowerPoint files. Designed for portability, the V39 II is USB-powered and features a built-in kickstand for space-saving vertical placement and storage. Its high-rise, removable lid accommodates bulky items such as books and photo albums, ensuring versatility in scanning different types of materials. The Epson Perfection V39 II is a fantastic option for individuals or businesses looking for a dependable and easy-to-use scanner solution since it provides the optimal balance of outstanding picture quality and affordable pricing.</p>
                        </div>
                    </div>
                    <!-- Question Area  -->
                    <div class="gpsc-tab-contents ask-question" id="ask-question">
                        <div class="gpsc-section-head">
                            <div class="gpsc-action-title">
                                <?php echo '<h2>Question (' . $count_reviews_without_rating . ')</h2>'; ?>
                                <p class="gpsc-section-text">Have question about this product? Get specific details about this product from expert.</p>
                            </div>
                            <div class="gpsc-action-btn">
                                <a href="#" class="gpsc-btn gpsc-btn-outline">Ask Question</a>
                            </div>
                        </div>
                        <div class="gpsc-question">
                            <?php
                                
                                if ( $reviews_without_rating ) {
                                    echo '<ul class="comment-list gpsc-comment-list">';
                                    foreach ( $reviews_without_rating as $review ) {
                                        ?>
                                        <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                                            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <?php echo get_avatar( $review, 50 ); ?>
                                                        <?php printf( '<p class="gpsc-comment-author">%s</p>', get_comment_author( $review ) ); ?>
                                                    </div>
                                                </footer>
                                                <div class="comment-content">
                                                    <?php comment_text( $review ); ?>
                                                </div>
                                                <div class="comment-reply">
                                                <?php
                                                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24"><path fill="currentColor" d="M10 9V5l-7 7l7 7v-4.1c5 0 8.5 1.6 11 5.1c-1-5-4-10-11-11"/></svg>'; 
                                                    comment_reply_link( array( 'reply_text' => 'Reply', 'depth' => 1, 'max_depth' => 5 ) ); 
                                                 ?>
                                                </div>
                                            </article>
                                        </li>
                                        <?php
                                    }
                                    echo '</ul>';
                                } else {
                                    echo '
                                        <div class="gpsc-empty-content ">
                                            <span class="gpsc-ques-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"  viewBox="0 0 24 24"><path fill="currentColor" d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2M9 11H7V9h2zm4 0h-2V9h2zm4 0h-2V9h2z"/></svg></span>
                                            <p class="gpsc-empty-text">There are no questions asked yet. Be the first one to ask a question.</p>
                                        </div>
                                    ';
                                }
                            ?>
                        </div>
                    </div>
                    <!-- Reviews Area -->
                    <div class="gpsc-tab-contents write-review" id="write-review">
                        <div class="gpsc-section-head">
                            <div class="gpsc-action-title">
                                <h2>Reviews <?php echo '(' . $count_reviews_with_rating . ')'; ?></h2>
                                <p class="gpsc-section-text">Get specific details about this product from customers who own it.</p>
                            </div>
                            <div class="gpsc-action-btn">
                                <a href="#" class="gpsc-btn gpsc-btn-outline">Write a Review</a>
                            </div>
                        </div>
                        <div class="gpsc-question">
                        <?php 
                            if ( $reviews_with_rating ) {
                                echo '<ul class="comment-list gpsc-comment-list">';
                                foreach ( $reviews_with_rating as $review ) {
                                    ?>
                                    <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                                        <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <?php echo get_avatar( $review, 50 ); ?>
                                                    <?php printf( '<p class="gpsc-comment-author">%s</p>', get_comment_author( $review )); ?>
                                                    <?php
                                                        // Display rating if available
                                                        $rating = get_comment_meta( $review->comment_ID, 'rating', true );
                                                        if ( $rating ) {
                                                            $percentage = ($rating / 5) * 100;
                                                            echo '
                                                                <div class="star-rating" role="img" aria-label="Rated ' . $rating . ' out of 5">
                                                                    <span style="width:' . $percentage . '%">Rated <strong class="rating">' . $rating . '</strong> out of 5</span>
                                                                </div>
                                                            ';
                                                        }
                                                        
                                                    ?>
                                                </div>
                                            </footer>
                                            <div class="comment-content">
                                                <?php comment_text( $review ); ?>
                                            </div>
                                            <div class="comment-reply">
                                                <?php
                                                    echo '<svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24"><path fill="currentColor" d="M10 9V5l-7 7l7 7v-4.1c5 0 8.5 1.6 11 5.1c-1-5-4-10-11-11"/></svg>'; 
                                                    comment_reply_link( array( 'reply_text' => 'Reply', 'depth' => 1, 'max_depth' => 5 ) ); 
                                                 ?>
                                            </div>
                                        </article>
                                    </li>
                                    <?php
                                }
                                echo '</ul>';
                            } else {
                                echo '
                                    <div class="gpsc-empty-content ">
                                        <span class="gpsc-ques-icon"><svg xmlns="http://www.w3.org/2000/svg"  width="20" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h4.2q.325-.9 1.088-1.45T12 1t1.713.55T14.8 3H19q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21zm2-4h7v-2H7zm0-4h10v-2H7zm0-4h10V7H7zm5-4.75q.325 0 .538-.213t.212-.537t-.213-.537T12 2.75t-.537.213t-.213.537t.213.538t.537.212"/></svg></span>
                                        <p class="gpsc-empty-text">This product has no reviews yet. Be the first one to write a review.</p>
                                    </div>
                                ';

                            }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="gpsc-description-sidebar">
                <!-- Related Products -->
                <?php
                woocommerce_related_products( array(
                    'posts_per_page' => 4,
                    'columns'        => 4,
                    'orderby'        => 'rand',
                ) );
                ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/sharer.js@0.5.2/sharer.min.js"></script>

<!-- Footer -->
<?php
wp_footer();
