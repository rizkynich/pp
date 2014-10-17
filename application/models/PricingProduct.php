<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pricing_product
 *
 * @author Rizky
 */
class PricingProduct extends Eloquent {
    public static $table = "pricing_product";
    
    public function pricing(){
        return $this->belongs_to('Pricing','id');
    }
}

?>
