<?php
include 'login.php';
//include 'update.php';
//include 'adminuser.php';
$UserQuery = "SELECT AddressOne,AddressTwo FROM RegisteredUser WHERE Id='" . $_GET['Id'] . "' LIMIT 1";
$UserResult = mysqli_query($link, $UserQuery);
$Address = mysqli_fetch_array($UserResult);
$variable = $Address['AddressOne'] . "&nbsp;" .$Address['AddressTwo'] . "&nbsp;" . $Address['City'] . "&nbsp;" . $Address['State'] . "&nbsp;" . $Address['Country'];
echo $variable;
?>

<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

        <script
            src="http://maps.googleapis.com/maps/api/js">
        </script>
        <script type="text/javascript">

            var geocoder = new google.maps.Geocoder();
            var address = "<?php echo $variable; ?>";


            geocoder.geocode({'address': address}, function (results, status) {


                if (status == google.maps.GeocoderStatus.OK) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();

                }



                var myCenter = new google.maps.LatLng(latitude, longitude);

                function initialize()
                {
                    var mapProp = {
                        center: myCenter,
                        zoom: 5,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                    var marker = new google.maps.Marker({
                        position: myCenter,
                    });

                    marker.setMap(map);
                }

                google.maps.event.addDomListener(window, 'load', initialize);
                
                $("#myModal").on("click","show.bs.modal",function(){
                    google.maps.event.trigger(googlemap,"resize");
                    return map.setcenter(mycenter);
                });


            });

        </script>
    </head>
    <body>
        <div id="googleMap" style="width:500px;height:380px;"></div>
    </body>
</html>