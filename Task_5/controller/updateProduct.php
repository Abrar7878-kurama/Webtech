<?php
require_once '../model/model.php';
if(isset($_POST['save']))
{
	$data['name'] =  $_POST['name'];
	$data['bprice']= $_POST['bprice'];
	$data['sprice']= $_POST['sprice'];

	if(updateProduct($_POST['id'], $data))
	{
		echo 'Successfully updated !!';
		header('Location: ../view/product.php?id=' . $_POST['id']);
	}
	else{echo 'Something went wrong!!!';}
}
?>