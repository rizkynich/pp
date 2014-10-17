<?php echo $header;?>
<div class="content_block">
 <!-- top_title -->
 <div class="top_title">
  <div class="wraper">
      <h2 style="font-size: 38px;"><?php echo $data_price->original['name'];?></h2>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
     <h2>Prabayar</h2><br/>
     <div class="CSSTableGenerator" >
     <table border="0" style="width: 100%">
          <tbody>
              <tr>
                <td>No</td>
                <td>Kode</td>
                <td>Keterangan</td>
                <td>Harga</td>
              </tr>
              <?php
                $no = 1;
                $ppob = array();
                foreach ($data_pricing as $value) {
                    $prod = (array) Product::find($value->original['productid']);
                    if(isset($prod['original'])){
                        if($prod['original']['kind'] == 1){
                            ?>
                                <tr>
                                   <td><?php echo $no;?></td>
                                   <td><?php echo strtoupper($prod['original']['name']);?></td>
                                   <td><?php echo strtoupper($prod['original']['category']);?></td>
                                   <td style="text-align: right;"><?php echo number_format($value->original['price']);?></td>
                                </tr>
                            <?php
                            $no++;
                        } else {
                            $prod['original']['price'] = $value->original['price'];
                            $ppob[] = $prod;
                        }
                    }
                }
              ?>
          </tbody>
      </table>
     </div>
     <br/>
     <h2>PPOB / Pascabayar</h2><br/>
     <div class="CSSTableGenerator" >
     <table border="0" style="width: 100%">
          <tbody>
              <tr>
                <td>No</td>
                <td>Kode</td>
                <td>Keterangan</td>
                <td>Harga</td>
              </tr>
              <?php
                $no = 1;
                foreach ($ppob as $value) {
                    if(isset($value['original'])){
                        ?>
                            <tr>
                               <td><?php echo $no;?></td>
                               <td><?php echo strtoupper($value['original']['name']);?></td>
                               <td><?php echo strtoupper($value['original']['category']);?></td>
                               <td style="text-align: right;"><?php echo number_format($value['original']['price']);?></td>
                            </tr>
                        <?php
                        $no++;
                    }
                }
              ?>
          </tbody>
      </table>
     </div>
         <br/><br/>
         Kontak kami untuk harga terbaik ke +62-857-93-1111-50  ,  +62-818-131-394
         <br/>
         <br/>
 </div>
</div>

<?php echo $footer;?>