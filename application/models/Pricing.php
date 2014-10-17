<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pricing
 *
 * @author Rizky
 */
class Pricing extends Eloquent {
    //put your code here
    public static $table = "pricing";
    
    public function pricing_products(){
        return $this->has_many('PricingProduct', 'pricingId');
    }
}

?>
