<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>KPHP Tasik Besar Serkap - Provinsi Riau</title>
<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
    <link rel="stylesheet" href="<?php echo base_url() ;?>js/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.css">
    <script src="<?php echo base_url() ;?>js/leaflet-groupedlayercontrol/leaflet.groupedlayercontrol.js"></script>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Election Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!---strat-slider---->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!---//-slider---->
<style>
      html, body, #mapid{
        height: 600px;
		width: auto;
    <!--    margin: 0px;
        padding: 0px
		-->
		
      }
			.leaflet-control-attribution { display:none!important}
    </style>	
</head>
<body>
<!-- header -->
	<div class="header_bg">
		<div class="container">
			<!-----start-header----->
			<div class="header">
			<div class="logo">
					<a href="index.php"><img src="images/kphp.png"  style="float:left"  alt=" " /></a>
				</div> 
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="clearfix hd8  suckerfish" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
						
							<li><a href="index.php">Home</a></li>
								<li  class="act"><a href="<?php echo base_url('Peta'); ?>">Peta</a></li>
							<li><a href="<?php echo base_url('Profil'); ?>">Profil</a></li>
							<li><a href="<?php echo base_url('Kontak'); ?>">Kontak Kami</a></li>
							</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
			</div>
		</div>
	</div>
	<div class="header_bottom">
	</div>
<!-- //end-header -->
<!-- banner -->
	<body>



<div id="mapid"></div>
<script src="<?php echo base_url() ;?>js/projs.js"></script>
    <script src="/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url() ;?>/map/db"></script>
<script src="<?php echo base_url() ;?>/areal_kph/db"></script>
<script src="<?php echo base_url() ;?>/hti_update/db"></script>
<script src="<?php echo base_url() ;?>/hutan_desa/db"></script>
<script src="<?php echo base_url() ;?>/ksa_tbs/db"></script>
<script src="<?php echo base_url() ;?>/hutan_lindung/db"></script>
<script src="<?php echo base_url() ;?>/wilayah/db"></script>
<script>

	//var mymap = L.map('mapid').setView([51.505, -0.09], 13);
	//var mapboxAccessToken = {mapid};
	var mymap = L.map('mapid').setView([0.5, 101.5 ], 9);
	var mapboxAccessToken = {mymap};
	var basemap_mapbox = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw ', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);
		//L.geoJson(hti).addTo(mymap);

//	L.marker([51.5, -0.09]).addTo(mymap)
//		.bindPopup("<b>Hello world!</b><br />I am a popup.").openPopup();
//
//	L.circle([51.508, -0.11], 500, {
//		color: 'red',
//		fillColor: '#f03',
//		fillOpacity: 0.5
//	}).addTo(mymap).bindPopup("I am a circle.");
//
//	L.polygon([
//		[51.509, -0.08],
//		[51.503, -0.06],
//		[51.51, -0.047]
//	]).addTo(mymap).bindPopup("I am a polygon.");

//Fungsi untuk kursor berbeda
function style(feature) {
    return {
        fillColor: getColor(feature.properties.nama),
        weight: 1,
        opacity: 1,
        color: '#006400',
        dashArray: '3',
        fillOpacity: 0.7
    };
}
//L.geoJson(hti, {style: style}).addTo(mymap);

function getColor(d) {
    return d = 1000 ? ' #7CFC00' :
           d > 500  ? '#BD0026' :
           d > 200  ? '#E31A1C' :
           d > 100  ? '#FC4E2A' :
           d > 50   ? '#FD8D3C' :
           d > 20   ? '#FEB24C' :
           d > 10   ? '#FED976' :
                      '#FC4E2A';
}

var etarget;
function highlightFeature(e) {
	etarget = e.target;
    var layer = e.target;
    layer.setStyle({
        weight: 5,
        color: '#666',
        dashArray: '',
        fillOpacity: 0.7
    });

    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
    }
}


function resetHighlight(e) {
   layer_hti.resetStyle(e.target);
}
function resetHighlight(e) {
   layer_areal.resetStyle(e.target);
}
function resetHighlight(e) {
   hti_update.resetStyle(e.target);
}
function resetHighlight(e) {
   hutan_desa_updatet.resetStyle(e.target);
}
function resetHighlight(e) {
  ksa_tbs_ok.resetStyle(e.target);
}
function resetHighlight(e) {
   hutan_lindung_ok.resetStyle(e.target);
}
function resetHighlight(e) {
   wilayah_ok.resetStyle(e.target);
}

//var geojson;
// ... our listeners
//geojson = L.geoJson(hti);

function zoomToFeature(e) {
    mymap.fitBounds(e.target.getBounds());
	e.target.bindPopup(e.target.feature.properties.nama).openPopup();
	
}
function onEachFeature(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
		 click: zoomToFeature
       });
}

var layer_hti = L.geoJson(hti, {
    style: style,
    onEachFeature: onEachFeature,
	color: 'blue'
})//.addTo(mymap);

//	var popup = L.popup();
var layer_areal = L.geoJson(areal, {
    style: style,
    onEachFeature: onEachFeature
})

var hti_update = L.geoJson(hti_update, {
    style: style,
    onEachFeature: onEachFeature
})

var hutan_desa_updatet = L.geoJson(hutan_desa_updatet, {
    style: style,
    onEachFeature: onEachFeature
})

var ksa_tbs_ok = L.geoJson(ksa_tbs_ok, {
    style: style,
    onEachFeature: onEachFeature
})

var hutan_lindung_ok = L.geoJson(hutan_lindung_ok, {
    style: style,
    onEachFeature: onEachFeature
})

var wilayah_ok = L.geoJson(wilayah_ok, {
    style: style,
    onEachFeature: onEachFeature
})
	
	
//function onMapClick(e) {
	//	popup
		//.setLatLng (e.latlng)
	//.setContent("" + e.latlng.toString())
	//.openOn(mymap);
	//}
//	mymap.on('click', onMapClick);}

	//var layer_hti=L.geoJSON(hti);//.addTo(mymap);
	
	//menambah info
	
	
/* Basemap Layers */
var carto_positron_lite_rainbow = L.tileLayer(
  "https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_nolabels/{z}/{x}/{y}.png",{
	  subdomains:"abcd",
	  attribution:'&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
	  maxZoom: 18
  });

var carto_label = L.tileLayer(
	"https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_only_labels/{z}/{x}/{y}.png",{
	  subdomains:"abcd",
		maxZoom:18
	});
var cartoLight = L.tileLayer("https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="https://cartodb.com/attributions">CartoDB</a>'
});
/* var usgsImagery = L.layerGroup([L.tileLayer("http://basemap.nationalmap.gov/arcgis/rest/services/USGSImageryOnly/MapServer/tile/{z}/{y}/{x}", {
  maxZoom: 15,
}), L.tileLayer.wms("http://raster.nationalmap.gov/arcgis/services/Orthoimagery/USGS_EROS_Ortho_SCALE/ImageServer/WMSServer?", {
  minZoom: 16,
  maxZoom: 19,
  layers: "0",
  format: 'image/jpeg',
  transparent: true,
  attribution: "Aerial Imagery courtesy USGS"
})]); */


var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});

var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});

var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});

var googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
    maxZoom: 20,
    subdomains:['mt0','mt1','mt2','mt3']
});



	
	
var baseLayers = {
	"Mapbox":basemap_mapbox,
	"Google Streets"	:googleStreets,
	"Google Hybrid"	:googleHybrid,
	"Google Satellite"	:googleSat,
	"Google Terrain"	:googleTerrain,  
	"Carto Street Map"	: cartoLight,
	"Carto Positron": carto_positron_lite_rainbow
};




var groupedOverlays = {
"Hutan":{
		"Kawasan Suaka Alam - Riau":layer_hti,
		"Areal Kesatuan Pengelolaan Hutan":layer_areal,
		"Hutan Tanaman Industri":hti_update,
		"Hutan Desa":hutan_desa_updatet,
		"Kesatuan Suaka Alam - Tandan Buah Sawit":ksa_tbs_ok,
		"Hutan Lindung":hutan_lindung_ok,
		"Wilayah Tertentu":wilayah_ok
		
	}	
};
//var layerControl = 	L.control.groupedLayers(baseLayers, groupedOverlays, {
 // collapsed: isCollapsed
//}).addTo(mymap);
//L.control.layers(baseLayers, overlays).addTo(mymap);

var layerControl = L.control.groupedLayers(baseLayers, groupedOverlays, {
//var layerControl = L.control.groupedLayers(baseLayers, groupedOverlays, {
//  //collapsed: isCollapsed
}).addTo(mymap);


	
	
</script>



</body>
<!-- //banner -->
<!-- banner-bottom1 -->
	<div class="banner-bottom1">
		<div class="banner-bottom1-grids">
			<div class="col-md-4 banner-bottom1-left banner-bottom1-left1"><a href="results.html">
				<div class="banner-bottom1-lft">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					<h3>Campaign</h3>
					<p>Lorem Ipsum is therefore always free.</p>
				</div>
			</a></div>
			<div class="col-md-4 banner-bottom1-left"><a href="results.html">
				<div class="banner-bottom1-lft">
					<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
					<h3>Accessibility</h3>
					<p>Lorem Ipsum is therefore always free.</p>
				</div>
			</a></div>
			<div class="col-md-4 banner-bottom1-left banner-bottom1-left2"><a href="results.html">
				<div class="banner-bottom1-lft">
					<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
					<h3>Calendar</h3>
					<p>Lorem Ipsum is therefore always free.</p>
				</div>
			</a></div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom1 -->
<!-- banner-bottom -->
	
<!-- //banner-bottom -->
<!-- body_grids -->
	
<!-- //body_grids -->
<!-- footer-top -->
	
<!-- footer -->
	<div class="footer">
			
			<div class="footer-copy">
				<p>&copy 2018 Webgis Kementerian Lingkungan Hidup dan Kehutanan. All Rights Reserved.| Design by <a href="http://w3layouts.com">W3layouts.</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
		<!-- scroll_top_btn -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
<!-- for bootstrap working -->
	 <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
</body>
</html>