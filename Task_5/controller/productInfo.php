<?php 

require_once ('../model/model.php');

function fetchAllProducts(){
	return showAllProduct();

}
function fetchProduct($id){
	return showProduct($id);

}
