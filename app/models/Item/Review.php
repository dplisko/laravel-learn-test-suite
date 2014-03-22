<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 22.03.14
 * Time: 2:25
 */

namespace Item;


class Review extends \Eloquent{
    public function item(){
        return $this->belongsTo('Item');
    }

    public static function setupValidation(){
        Review::saving(function($review){
               if(!$review->author) return false;
            });
    }
} 