<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dalUser
 *
 * @author Arthur
 */
class dalUser {

    public static function getUsers(db $db) {
        $query = "SELECT UserName  FROM `users`";
        return $db->selectQeury($query);
    }

    public static function getActiveDelivery(db $db) {
        $query = "call Display_Delivery_Status(1)";
        return $db->selectQeury($query);
    }
	    public static function getStandByDelivery(db $db) {
        $query = "call Display_Delivery_Status(0)";
        return $db->selectQeury($query);
    }

}
