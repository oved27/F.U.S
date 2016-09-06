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

    public static function getHtmlUserDelivers(db $db) {
        $array = array();
        $html = "";
        try {
            $array = dalUser::getDeliversName($db);
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
                $html .= "<span>" . $value->FName . " " . $value->Lname . "</span><br/>";
				 
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $html;
    }
      public static function getHtmlStandByDelivery(db $db) {
        $array = array();
        $html = "";
        try {
            $array = dalUser::getStandByDelivery($db);
            foreach ($array as $value) {
                $html .= "<span>" .  $value->FName."</span><br/>";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $html;
    }

	      public static function getHtmlNewsUpdate(db $db) {
        $array = array();
        $html = "";
        try {
            $array = dalUser::getNewsUpdate($db);
            foreach ($array as $value) {
                $html .= "<span>" .  $value->FName." " ."</span><br/>";
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
        return $html;
    }
}
