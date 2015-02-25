<?
class Mage_Adminhtml_Block_Sales_Order_Renderer_CA extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract 
{
	public function render(Varien_Object $row)
	{
		
	$_order = Mage::getModel('sales/order')->load($row->getEntityId()); 
	

	//$item=$_order['increment_id'];

						$items = $_order->getAllItems();
                       
                        foreach ($items as $itemId => $item)
                        {
     if($item->getSku()=='pearlplan'){$device="Pearl 9105"; break;}
	 if($item->getSku()=='newpearlplan'){$device="Pearl 9105"; break;}
	$result = array(); 
if ($options = $item->getProductOptions()) { 
if (isset($options['options'])) { 
$result = array_merge($result, $options['options']); 
} 
if (isset($options['additional_options'])) { 
$result = array_merge($result, $options['additional_options']); 
} 
if (!empty($options['attributes_info'])) { 
$result = array_merge($options['attributes_info'], $result); 
} 
} 

$options = ''; 
if ($orderOptions = $result) { 
foreach ($orderOptions as $_option) { 
//if (strlen($options) > 0) { 
//$options .= ', '; 
//} 
//$options .= $_option['label'].': '.$_option['value']; 

if($_option['value']=='Blackberry Z10'){$device="Blackberry Z10"; break;}
if($_option['value']=='Blackberry Q10'){$device="Blackberry Q10"; break;}
if($_option['value']=='Blackberry Z30'){$device="Blackberry Z30"; break;}

} 
}
	 
                       	}

      //return 'aaaaaaaaaaa';
	  return $device;
	}
	
}

?>