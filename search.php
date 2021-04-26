<?php session_start();
include_once('_config.php'); ?>

<?php $address = $_POST["address"]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="image/x-icon" href="./images/small_lplate_border.jpg"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Search for approved driving instructors in Northern Ireland" >
  <meta name="author" content="Andy Marshall">
  <meta name="keywords" content="Learn to drive, driving instructor search, NI, Northern Ireland, DVANI, Approved Driving Instructor ">
  <title>Learn to Drive NI | Search</title>
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./css/table.css">
</head>
<body>
<header>
<div class="container">
  <div id="branding">
    <h1>Learn to Drive <span class="highlight">NI</span></h1>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        </ul>
    </nav>
    </div>
</div>
</header>
<body>

<section id="main">
  <div class="container">
    <div id="map"></div>
      <script>
      function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            center: {lat: 54.600, lng: -6.727}
          });
          var geocoder = new google.maps.Geocoder();

  		//Run geocode function when button is clicked
          window.onload = function(){
            geocodeAddress(geocoder, map);
  			};
      //window.onload = function(){
          //setMarkers(resultsMap);
        //}
  		  //Run setMarkers function when button is clicked

  	  }

  	//Geocode address using postcode entered into textbox and then centre map on postcode location

         function geocodeAddress(geocoder, resultsMap) {
          var address = '<?php echo $address; ?>';
          geocoder.geocode({'address': address}, function(results, status) {
            if (status === 'OK') {
  			  resultsMap.setCenter(results[0].geometry.location);
  			resultsMap.setZoom(10);
  			var lat1 = results[0].geometry.location.lat();
              var lon1 = results[0].geometry.location.lng();
  			  console.log(lat1, lon1);
              var marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location
              });
              setMarkers(resultsMap);
            } else {
              alert('Geocode was not successful for the following reason: ' + status);
            }
          });
        }



          </script>
      <aside id="sidebar">
        <div class="dark">
          <h3>Search</h3>
          <form class="quote">
                      <div>
                        <label>What vehicle do you want to learn to drive?</label><br>
                        <select id= "vehicle-select" name="vehicle-select">
                          <option value="car">Car</option>
                          <option value="motorcycle">Motorcycle</option>
                          <option value="truck">Truck</option>
                        </select>
                      </div>
                      <div>
                        <label>How far from home do you want to search?</label><br>
                        <select name="distance-select" id="distance-select">
                          <option value="10">10 miles</option>
                          <option value="20">20 miles</option>
                          <option value="30">30 miles</option>
                          <option value="40">40 miles</option>
                          <option value="50">50 miles</option>
                        </select>
                      </div>
                      <button type="submit" id='submit' name="submit" class="button_1">Markers</button>
                  </form>

        </div>


      </aside>
      <?php
$locations = array();
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if($link === false){
  die("ERROR: could not connect. ". mysqli_connect_error());
}

$sql = "SELECT * FROM doctor_data LIMIT 10";

if($result = mysqli_query($link, $sql)){
  if(mysqli_num_rows($result) > 0){
    echo '<div class="wrapper">
          <div class="table">
          <div class="row1 header">
          <div class="cell">
          Name
          </div>
          <div class="cell">
            City
          </div>
          <div class="cell">
            County
          </div>
          <div class="cell">
            Postcode
          </div>
    	  <div class="cell">
            Phone
          </div>
          <div class="cell">
              Latitude
            </div>
            <div class="cell">
                Longitude
              </div>
    	  </div>';

        while($row = mysqli_fetch_array($result)) {
          $name = $row['GP Name'];
          $address1 = $row["Address1"];
          $address2 = $row["Address2"];
          $address3 = $row["Address3"];
          $postcode = $row["Postcode"];
          $phone = $row["Phone"];
          $latitude = $row["lat"];
          $longitude = $row["long"];

          $locations[]=array("GP Name"=>$name,
          //"add1"=>$address1,
          //"add2"=>$address2,
          //"add3"=>$address3,
          
         
          //'postcode'=>$postcode,
          //'phone'=>$phone,
          'lat'=>$latitude,
          'long'=>$longitude );
          //echo $locations;
          $markers=json_encode($locations);
          echo  '<div class="row1">';
          echo  '<div class="cell" data-title="Name">' . $row["GP Name"] . '</div>';
          echo  '<div class="cell" data-title="Address">' . $row["Address1"] . '</div>';
          echo  '<div class="cell" data-title="Address2">' . $row["Address2"] . '</div>';
          echo  '<div class="cell" data-title="Postcode">' . $row["Postcode"] . '</div>';
          echo  '<div class="cell" data-title="Phone Number">' . $row["Phone Number"] . '</div>';
          echo  '<div class="cell" data-title="Latitude">' . $row["lat"] . '</div>';
          echo  '<div class="cell" data-title="Longitude">' . $row["long"] . '</div>';
          echo  '</div>';
        }
        echo "</div>
        	 </div>
        	 </div>";
  }
  else{
        echo "No records matching your query were found.";
    }
    //else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//}
}

mysqli_close($link);
	 ?>
  </div>
<script>
var map;
document.getElementById('submit').addEventListener('click', function() {
     setMarkers(resultsMap);
     function setMarkers(resultsMap){
     <?php echo "var markers = '$markers';\n";?>
     var infowindow = new google.maps.InfoWindow(), marker, lat, lng;
     var json = JSON.parse(markers);
     console.log(json);
        });
     // Loop through our array of markers & place each one on the map

     for( var o in json ){

                lat = json[ o ].lat;
                lng=json[ o ].lng;
                name=json[ o ].name;

                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lat,lng),
                    name:name,
                    map: resultsMap
                });
                google.maps.event.addListener( marker, 'click', function(e){
                    infowindow.setContent( this.name );
                    infowindow.open( map, this );
                }.bind( marker ) );
            }
          }
</script>
</section>
<script async defer
    src="">
    </script>
<footer>
  <p>Learn to Drive NI, Copyright &copy; 2018</p>
</footer>
</body>
</html>
