# CMS-Project

<ol>
	<li>Bootstrap grid sistemindən istifadə etməliyik. Nümunə verilən ACMS responsivdir.</li>
	<li>İlk olaraq main <div> var ve onun 2 əsas child elementi var səhifənin strukturuna uyğun. leftSection ve rightSection.</li>
	<li>Aşağıdakı skelet-kod butun səhifələrçün eynidir.</li>
	<li>Soldakı navigation paneli artiq hazırdır. navPanel.php </li>
	<li>Həmçinin FontAwesome istifade edəcəyik</li>
	<li>Klass adları verəndə diqqətli olun. Axırda css kodların merge edəndə bizə mane olmasin deye. Hetta daha yaxshi olardi ki, oz adınızın baş hərfi ile başlasın, məsələn: .nav class yerinə .s-nav ve s. SASS istifadə edirik deyə problem olmamalıdır.</li>
</ol>
<pre>
div class="main"
  ?php 
      include 'nav_panel.php';
  ?
  div class="col-md-10 col-sm-10" id="rightSection"
  /div
/div
</pre>
// lahiye team listi ve github profil linklerini burda geyd etmek lazımdır.
