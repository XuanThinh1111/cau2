<?php 
class chitiethoadonmodel extends Db{


    function insert($order_id, $book_id, $quanlity, $price)
	{
		$sql="INSERT into order_detail values ('$order_id','$book_id', '$quanlity', '$price')";
		
		return $this->updateQuery($sql);

    }
}



