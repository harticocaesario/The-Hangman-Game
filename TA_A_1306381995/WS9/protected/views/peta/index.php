<?php
 
 $this->breadcrumbs=array(
  'Peta',
 );

?>

<h1>
Ini Peta Indonesia</h1>
<?php
 //import ekstensi EGMap nya
 Yii::import('ext.EGMap.*');

 $gMap = new EGMap();
 $gMap->setJsName('map');
 //set zoom peta
 $gMap->zoom = 5;
 //set width supaya memenuhi body
 $gMap->width = '100%';
 $gMap->height = 500;
 //set latitude, longitude (koordinat) di daerah kalimantan supaya
 //menampilkan peta indonesia
 $latitude=-0.440388;
 $longitude=114.762910;

 //Map settings
 //set center pada peta berdasarkan latitude longitude
 $gMap->setCenter($latitude, $longitude);
 //render map pada peta
 $gMap->renderMap();
?>
