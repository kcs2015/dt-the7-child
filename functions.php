<?php



/**
 * Adds product SKUs above the "Add to Cart" buttons
 * Tutorial: http://www.skyverge.com/blog/add-information-to-woocommerce-shop-page/
**/
function skyverge_shop_display_skus() {

	global $product;
	
	if ( $product->get_sku() ) {
		echo '<span class="product-meta">SKU: ' . $product->get_sku() . '</span>';
	}
}
/*add_action( 'woocommerce_after_shop_loop_item_title', 'skyverge_shop_display_skus', 2 );*/



function insert_front_page_scripts(){
    if (is_front_page()){
        // Add mail chimp javascript
        
    }
    
}


?>
