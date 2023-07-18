<?php 
session_start();

if ($_POST){
   $_SESSION['cart'][]=$_POST;	
}

$cart =  $_SESSION['cart'];

$response = json_encode($_POST);


//echo $response;


?>
<table>
  <tr>
    <td>Item</td>
    <td>Amount</td>
	<td>Qty</td>
	<td>Total</td>
  </tr>
  
  <?php if($cart) { 
  foreach($cart as $key=>$row){?>
   <tr>
     <td><?= $row['item']; ?></td>
	 <td><?= $row['amount']; ?></td>
	 <td><?= $row['qty']; ?></td>
	 <td><?= ($row['qty']*$row['amount']); ?></td>
   </tr>
  <?php 
    }
  } ?>
</table>