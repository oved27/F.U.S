<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blUser
 *
 * @author Arthur
 */
class blUser {

    public static function getHtmlUser(db $db) {
        $array = array();
        $html = "";
        try {
            $array = dalUser::getUsers($db);
            foreach ($array as $value) {
                $html .= "<span> " . $value->UserName . "</span><br/>";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $html;
    }
    
    
      public static function getHtmlActiveDelivery(db $db) {
        $array = array();
        $html = "";
        try {
            $array = dalUser::getActiveDelivery($db);
            foreach ($array as $value) {
                $html .= "<span>" . $value->PickupAddress ."</span><br/>";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $html;
    }


}
