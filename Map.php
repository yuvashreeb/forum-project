<?php
include 'login.php';
include 'update.php';
$variable = $Row['AddressTwo'] . "&nbsp;" . $Row['City'] . "&nbsp;" . $Row['State'] . "&nbsp;" . $Row['Country'];
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

           $(document).ready(function () {
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
                            zoom: 12,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        };

                        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                        var marker = new google.maps.Marker({
                            position: myCenter,
                            title: 'Click to zoom'
                        });

                        marker.setMap(map);
                        google.maps.event.addListener(marker, 'click', function () {
                            map.setZoom(9);
                            map.setCenter(marker.getPosition());

                        });


                        $("#Map").on("shown.bs.modal", function () {
                            google.maps.event.trigger(googleMap, "resize");
                            return map.setCenter(myCenter);
                        });

                    }
                    google.maps.event.addDomListener(window, 'load', initialize);



                });
            });

        </script>
    </head>
    <body>
        
        <div id="googleMap" style="height:380px;"></div>
    </body>
</html>