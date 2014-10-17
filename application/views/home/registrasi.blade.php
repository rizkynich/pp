<?php echo $header;?>
<div class="content_block">
 <!-- top_title -->
 <div class="top_title">
  <div class="wraper">
      <h2 style="font-size: 38px;">Registrasi Member</h2>
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
     <div class="contact_us">
        <?php 
           $form = new Form;
           echo $form->open('home/regsiter_save');
           echo "<p>".$form->label('name','Nama')."<br/>".$form->text('name')."</p>";
           echo "<p>".$form->label('phone','No Hp')."<br/>".$form->text('phone')."</p>";
           echo "<p>".$form->label('email','Email')."<br/>".$form->text('email')."</p>";
           echo "<p>".$form->label('address','Alamat')."<br/>".$form->textarea('address')."</p>";
           echo "<p>".$form->label('bank_tujuan','Bank Tujuan')."<br/>".$form->select('bank_tujuan',array('Mandiri','BCA','CASH'))."</p>";
           echo "<p>".$form->label('deposit','Jumlah Deposit')."<br/>".$form->text('deposit')."</p>";
           echo "<p>".$form->label('no_ref','No Referensi')."<br/>".$form->text('no_reff')."</p>";
           echo "<p>".$form->label('bank','Bank')."<br/>".$form->text('bank')."</p>";
           echo "<p>".$form->label('no_rek','No Rek')."<br/>".$form->text('no_rek')."</p>";
           echo "<p>".$form->label('atas_nama','Atas Nama')."<br/>".$form->text('atas_nama')."</p>";
           echo "<p>".$form->submit('Register')."</p>";
           echo "<p>&nbsp;</p>";
        ?>
     </div>
  <!-- sidebar -->
  <div class="sidebar">
   <!-- recent work -->
   <div class="most_popular">
    <h4>Deposit Transfer</h4>
    <ul>
     <li><div class="desc">Bank Mandiri 130 000 000 6554 An Hediati Sedia </div></li>
     <li><div class="desc">Bank BCA  438 146 4975  An Hediati Sedia</div></li>
     <li><div class="desc"></div></li>
    </ul>
   </div>
   <!-- /recent work -->
  </div>
  <!-- /sidebar -->
 </div>
</div>

<?php echo $footer;?>