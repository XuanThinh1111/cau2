<?php 
class hoadonmodel extends Db{


    function insert($order_id,$email, $order_date, $consignee_name, $consignee_add, $consignee_phone)
	{
		$sql="INSERT into order values ('$order_id', '$email', CURRENT_TIMESTAMP', $consignee_name', '$consignee_add', $consignee_phone)";
		return $this->updateQuery($sql);

    }
}



