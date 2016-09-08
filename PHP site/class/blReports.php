<?php
class blReports{

    public static function getHtmlDeliveryReports(db $db) {
        $array = array();
        $html = "";
        try {
            $array = dalReports::getDeliveryReports($db);
            foreach ($array as $value) {
                $html .= "<table class='dataReport'> " . "<tr>" ."<td>". $value->DeliveryID ."</td>"."<td>". $value->Date ."</td>"."<td>". $value->PickupAddress ."</td>"."<td>".  $value->DropDownAddress ."</td>"."<td>".  $value->PickupTime."</td>". "<td>". $value->DropDownTime ."</td>"."</tr>"."</table><br/>";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $html;
    }
    
   
     
}
