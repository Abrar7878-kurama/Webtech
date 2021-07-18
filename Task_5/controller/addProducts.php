<?php  
require_once '../model/model.php';


if (isset($_POST['save'])) {
	$data['name'] = $_POST['name'];
	$data['bprice'] = $_POST['bprice'];
	$data['sprice'] = $_POST['sprice'];
	
	if (addProduct($data)) {
  		echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>