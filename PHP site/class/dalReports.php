
<?php

class dalReports {

    public static function getDeliveryReports(db $db) {
        $query = "select * FROM delivery LIMIT 5";
        return $db->selectQeury($query);
    }

}
