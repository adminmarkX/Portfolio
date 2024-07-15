// all about the EDIT			
global $wpdb; // wordpress connector 
	$user_id = get_current_user_id(); // ton user_id pou theloume
	if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["EDIT"])){
		
		$idforedit = $_POST["idforedit"];
		$nameforedit = $_POST["name_of_product_update"];
		$typeforedit = $_POST["type_of_product_update"];
		$unitpriceforedit = $_POST["unitprice_of_product_update"];
		$fpaforedit = $_POST["fpa_of_product_update"]; 
		$sql = "
		UPDATE products 
		SET 
		name_of_product='$nameforedit' ,
		type_of_product='$typeforedit',
		unitPrice='$unitpriceforedit',
		fpa='$fpaforedit'
		WHERE user_id='$user_id' AND id='$idforedit'";
		
		$results = $wpdb->query($sql);
	
		
	}elseif($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["Delete"])){
			
		$idfordelete = $_POST["idfordelete"];
		$sql = "DELETE FROM products WHERE user_id='$user_id' AND id='$idfordelete'"; // to query pou theloume na treksoume stin basi
		$sql2 = "DELETE FROM products WHERE id=3"; // to query pou theloume na treksoume stin basi
		$results = $wpdb->query($sql);
	}
?>


<table class="tableCRUD">
		<thead> 
			<tr>
				<th scope="col"> ID Προϊόντος</th>
				<th scope="col"> Όνομα Προϊόντος </th>
				<th scope="col"> Τύπος Προϊόντος </th>
				<th scope="col"> Τιμή Μονάδας </th>
				<th scope="col"> ΦΠΑ%</th>
				<th scope="col"> Διαγραφή</th>
				<th scope="col"> Αλλαγή</th>
					
	
			</tr>
		</thead>
		<tbody> 
			<?php
				global $wpdb; // wordpress connector 
				$user_id = get_current_user_id();
				$sql = "SELECT * FROM products WHERE user_id LIKE '$user_id'";
				//$sql2 = "SELECT * FROM products WHERE user_id LIKE '1'";
				$results = $wpdb->get_results($sql);

    			foreach( $results as $result ) {
					
					
					$idfordelete = $result->id;
					$idforedit = $result->id;
					echo '
					<form method="POST">
					<tr>
						<th scope="row"> '.$result->id.'</th>
						<td> <input type="text" value="'.$result->name_of_product.'" name="name_of_product_update"></td>
						<td> <input type="text" value="'.$result->type_of_product.'" name="type_of_product_update"></td>
						<td> <input type="text" value="'.$result->unitPrice.'" name="unitprice_of_product_update"></td>
						<td> <input type="text" value="'.$result->fpa.'" name="fpa_of_product_update"></td> 
						<td><input type="hidden" value="'.$result->id.'" name="idfordelete"> <input type="submit" value="Del" name="Delete"></td>
						<td><input type="hidden" value="'.$result->id.'" name="idforedit"> <input type="submit" value="Edit" name="EDIT"></td>
					</tr>
					</form>
					';
    				}
				?>
		</tbody>
	</table>