<?php 

//die(var_dump($query));?>

var areal = {
"type": "FeatureCollection",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
                                                                                
"features": [

<?php

foreach ($query as $f)
{
	echo '
	
	
	{"type": "Feature","properties": {"nama": "'
		.$f->nama_prh
		. '"},"geometry": '
		.$f->geometry
		.'},';
}
?>

]};