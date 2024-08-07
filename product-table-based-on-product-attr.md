```PHP
<?php

$args     = array( 'limit' => -1 );
$products = wc_get_products( $args );

echo '<style>table,th,td{border:1px solid black;}input[type="checkbox"]:hover{cursor: pointer;}</style>
<table style="width:100%;text-align:center;">
	<tr>
		<th style="width: 25px;"><input type="checkbox" id="allcb" name="allcb"/></th>
		<th>Product Name</th>';

$attributes     = wc_get_attribute_taxonomies();
$frhd_attr_list = array();
if ( $attributes ) {

	foreach ( $attributes as $attribute ) {

		echo '<th>' . $attribute->attribute_label . '</th>';
		$frhd_attr_list[] = $attribute->attribute_name;
	}
}
echo '<th>Price</th>';
echo '</tr>';

foreach ( $products as $product ) {

	$frhd_product_id = $product->id;

	echo '<tr>';
	echo '<td><input type="checkbox" id="' . $frhd_product_id . '" name="cb1"/></td>';
	$frhd_product_name = $product->get_title();
	echo '<td><a href="' . esc_url( get_permalink( $product->get_id() ) ) . '">' . $frhd_product_name . '</a></td>';

	if ( empty( $product->get_attributes() ) ) {

		for ( $i = 0; $i < count( $frhd_attr_list ); $i++ ) {

			echo '<td>+</td>';
		}
	}

	foreach ( $product->get_attributes() as $attr_name => $attr_obj ) {

		if ( is_array( $attr_obj->get_terms() ) ) {

			for ( $i = 0; $i < count( $frhd_attr_list ); $i++ ) {

				echo '<td>';
				echo $product->get_attribute( $frhd_attr_list[ $i ] ) ? $product->get_attribute( $frhd_attr_list[ $i ] ) : '-';
				echo '</td>';
			}
		} else {

			for ( $i = 0; $i < count( $frhd_attr_list ); $i++ ) {

				echo '<td>*</td>';
			}
		}
	}

	$frhd_product_price = $product->price;
	echo '<td>$' . $frhd_product_price . '</td>';

	echo '</tr>';

}
echo '</table>';
```