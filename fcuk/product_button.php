<?php
switch($session_lang)
{
	case "en":
		$_product_add_1_txt="Choose items by ticking on the appropriate box and specify desired quantity.";
		$_product_add_2_txt="Click 'ADD TO CART' button to put items into your cart.";
		$_add_to_cart="Add to Cart";
		$_reset_cart="Reset";
		break;
	case "fr":
		$_product_add_1_txt="Choisir les articles en pla�ant le curseur dans le carr� appropri�. Pr�ciser la quantit� d�sir�e.";
		$_product_add_2_txt="Presser le bouton � AJOUTER AU PANIER � pour ajouter des articles dans votre panier.";
		$_add_to_cart="Ajouter au panier";
		$_reset_cart="Red�marrer";
		break;
	default:
		$_product_add_1_txt="Choose items by ticking on the appropriate box and specify desired quantity.";
		$_product_add_2_txt="Click 'ADD TO CART' button to put items into your cart.";
		$_add_to_cart="Add to Cart";
		$_reset_cart="Reset";
}			

?>
				
				
				<tr valign="middle">
					<td align="left" height="10" colspan="5" bgcolor="#EAFFEA">
					<!--
						<div align="left">
						<FONT face="Helvetica Condensed,Arial,verdana,sans-serif"  size="1" color="black">
						&nbsp; 1. <?php echo $_product_add_1_txt; ?><br>
						&nbsp; 2. <?php echo $_product_add_2_txt; ?><br>
						</div>
						</font>
					-->
					</td>
				</tr>

				<tr valign="middle">
					<td align="center" height="40" colspan="5" bgcolor="#99CC99">
					<INPUT TYPE="submit" value=" OK " class="addcart">
					&nbsp;
					<INPUT TYPE="reset" value="<?php echo $_reset_cart; ?>" class="addcart">
					</td>
				</tr>
