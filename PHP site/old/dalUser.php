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
	    public static function getNewsUpdateAssign(db $db) {
        $query = "select * from display_assign";
        return $db->selectQeury($query);
    }
		 public static function getNewsUpdateDrop(db $db) {
        $query = "select * from display_Dropdown";
        return $db->selectQeury($query);
    }
		    public static function getNewsUpdatePickup(db $db) {
        $query = "select * from display_pickup";
        return $db->selectQeury($query);
    }
}
