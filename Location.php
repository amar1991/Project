
<html>
  <head>
    <meta charset="utf-8">
    <title>Where am I?</title>

	<!-- //The following code is taken from http://css.dzone.com/articles/html5-geolocation-api-google  Published at DZone with by Mohamed Sanaulla, author and DZone MVB.  --> 



    <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places,weather"></script>
    <script src="myLoc.js"></script>
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map-canvas { height: 100% }
    </style>
  </head>
  <body>
    <div id="location">
      
    </div>
    <div id="map-canvas">
      Please refresh in case the map in not loaded!.
    </div>

	
	<input type='button'value='back' class="btn" onclick="document.location.href='PatientMain.php';"/>


  </body>
</html>