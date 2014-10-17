<?php

class Home_Controller extends Base_Controller {
    
    public function action_index(){
        return View::make('home.index');
    }
    
    public function action_produk($id){
        $pricing = new Pricing();
        $data_price = $pricing->find($id);
        
        $data_pricing_product = $pricing->find($id)->pricing_products;
        $data = array(
            'data_price'=>$data_price,
            'data_pricing'=>$data_pricing_product
        );
        return View::make('home.produk')->with($data);
    }
    
    public function action_kontak(){
        return View::make('home.kontak');
    }
    
    public function action_registrasi(){
        return View::make('home.registrasi');
    }
    
    public function action_h2h(){
        return View::make('home.h2h');
    }

}