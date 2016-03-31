# CMS-Project

Bootstrap grid sisteminden istifade etmeliyik. Numune verilen ACMS responsivdi
Ilk olaraq main <div> var ve onun 2 esas child var sehifenin strukturuna uygun.leftSection ve rightSection
Ashagidaki skelet-kod butun sehifelerchun eynidir
Soldaki navigation paneli artiq hazirdi. navPanel faylina baxa bilersiz
Hemchinin de FontAwesome istifade edcekeyik
Bu faylda ishlemeyin, sadece instruksiya meqsedile yazilmishdir
Klass adlari verende diqqetli olun. Axirda css kodlarin merge edende bize mane olmasin deye. Hetta daha yaxshi olardi ki, oz adinizin bash herfi ile bashlasin, meselen: .nav class yerine .s-nav ve s.

<div class="main">	
	<div class="leftSection" id="navPanel"></div>
	<div class="rightSection"></div>
</div>

<div class="main">
  <?php 
      include 'nav_panel.php';
  ?>
  <div class="col-md-10 col-sm-10" id="rightSection">
  </div>
</div>
        
Lak lak
