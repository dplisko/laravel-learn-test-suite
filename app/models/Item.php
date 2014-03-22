<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 22.03.14
 * Time: 2:24
 */

class Item extends Eloquent{
    public function reviews(){
        return $this->hasMany('Item\Review');
    }
} 