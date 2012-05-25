<?php

$cart = $_SESSION['cart'];
if ($cart) {
	$items = explode(',',$cart);
	$contents = array();
	foreach ($items as $item) {
		$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
	}

$total = 0;
$output[] = '<table>';
foreach ($contents as $id=>$qty) {
	$sql = 'SELECT * FROM books WHERE id = '.$id;
	$result = $db->query($sql);
	$row = $result->fetch();
	extract($row);
	$output[] = '<tr>';
	$output[] = '<td><a href="cart.php?action=delete&id='.$id.'" class="r">Remove</a></td>';
	$output[] = '<td>'.$title.' by '.$author.'</td>';
	$output[] = '<td>&pound;'.$price.'</td>';
	$output[] = '<td><input type="text" name="qty'.$id.'" value="'.$qty.'" size="3" maxlength="3" /></td>';
	$output[] = '<td>&pound;'.($price * $qty).'</td>';
	$total += $price * $qty;
	$output[] = '</tr>';
}
$output[] = '</table>';
$output[] = '<p>Grand total: &pound;'.$total.'</p>';

?>
