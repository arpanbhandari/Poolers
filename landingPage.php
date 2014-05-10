
        <?php
            //session_start();
            //$_SESSION['source']=$_POST['source'];
            //$_SESSION['destination']=$_POST['destination'];
        ?>


<html>
    <head>
        <link type="text/css" rel="stylesheet" href="bootstrap.css" media="screen">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="custom.css" media="screen">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="bootstrap.js" type="text/javascript"></script>
        <script src="bootstrap.min.js" type="text/javascript"></script>
        <script>
            function validatorForShowOnMap(){
                if(document.getElementById("source").value===""){
                    alert("Please enter the SOURCE!");
                    return false;
                }
                
                if(document.getElementById("destination").value===""){
                    alert("Please enter the DESTINATION!");
                    return false;
                }
                
                else{
                    
                    calcRoute();
                    
                }
            }
        </script>
        <script>
            function validatorForNext(){
                if(document.getElementById("source").value===""){
                    alert("Please enter the SOURCE!");
                    return false;
                }
                
                if(document.getElementById("destination").value===""){
                    alert("Please enter the DESTINATION!");
                    return false;
                }
                
                else{
                    
                    // window.open("setDateTime.php",'_self');
                    return true;
                }
            }
        </script>
        
        <script
            src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
        </script>
        <script>
            function initialize()
            {
            var mapProp = {
              center:new google.maps.LatLng(51.508742,-0.120850),
              zoom:5,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        
        
        
        <script>
            var directionsDisplay;
            var directionsService = new google.maps.DirectionsService();
            var map;

            function initialize() {
              directionsDisplay = new google.maps.DirectionsRenderer();
              var chicago = new google.maps.LatLng(12.9715990,77.5945630);
              var mapOptions = {
                zoom:6,
                center: chicago
              }
              map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
              directionsDisplay.setMap(map);
                var source = /** @type {HTMLInputElement} */(
      document.getElementById('source'));
 var autocomplete = new google.maps.places.Autocomplete(source);
  autocomplete.bindTo('bounds', map);
                var destination = /** @type {HTMLInputElement} */(
      document.getElementById('destination'));
 var autocomplete = new google.maps.places.Autocomplete(destination);
  autocomplete.bindTo('bounds', map);
            }

            function calcRoute() {
              var start = document.getElementById('source').value;
              var end = document.getElementById('destination').value;
              var request = {
                  origin:start,
                  destination:end,
                  travelMode: google.maps.TravelMode.DRIVING
              };
              directionsService.route(request, function(response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                  directionsDisplay.setDirections(response);
                }
              });
            }

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>
        
        <style>
          #map-canvas {
            height:400px; width:300px;
            margin-left:auto; margin-right:auto;
          }
          #panel {
            position: absolute;
            top: 5px;
            left: 50%;
            margin-left: -180px;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
          }
        </style>
        
        
        
    </head>
    
    
    
    
    
    <body style="background-image:url('http://www.esc.cam.ac.uk/esc/images/Department/library/Areas%20Mapped%20by%20Part%20II%20Earth%20Sciences%20Students,%20Cambridge%20-%20Google%20Maps%20-%20Googl_2012-10-10_10-49-24.png'); opacity:1.5; background-size: cover; background-repeat:repeat;">
        
        
        <!--NAVBAR-->
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="landingPage.php">Poolers</a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                      <li  ><a href="aboutUs.html">About Us</a></li>
                      <li ><a href="contactUs.html" >Contact Us</a></li>
                      <li><a href="FAQ.html">FAQ</a></li>
                       
                      <li><a class="gb_Mb gb_Tb gb_R" id="gb_71" href="https://accounts.google.com/Logout?hl=en&amp;continue=https://www.google.co.in/%3Fgfe_rd%3Dcr%26ei%3DMRpRU9_3JKTO8gf_woDwDA" target="_top">Sign out</a></li>
                      
                    </ul>
                  </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
      </nav>
        
        
        <!--FORM-->
        <div style="height:750px; width:300px; margin-top:100px; margin-left:auto; margin-right:auto;">
            <form name="sourceDestinationForm" action="setDateTime.php" method="post" onsubmit="return validatorForNext()">
                <input type="text" name="source" id="source" class="form-control" placeholder="Source" style="width:250px; margin-top:25px; margin-left:auto;margin-right:auto;"><br>
                
                <input type="text" name="destination" id="destination" class="form-control" placeholder="Destination" style="width:250px; margin-left:auto;margin-right:auto;"><br>
		        
                <input type="button" class="btn btn-info btn-md" value="Show on map!" onClick="validatorForShowOnMap()" style="width:120px; margin-left:80px;"><br><br>
                <input type="submit" class="btn btn-info btn-md" value="Next" onClick="validatorForNext()"  style="width:120px; margin-left:80px;  ">
                <br>
                <br><div id="map-canvas"></div><br>
	           
            </form>
        </div>
       
        
        
        
        
       
        
        
     </body>
        <script type="text/javascript">
		 var helper = (function() {
  var BASE_API_PATH = 'plus/v1/';

  return {
    /**
     * Hides the sign in button and starts the post-authorization operations.
     *
     * @param {Object} authResult An Object which contains the access token and
     *   other authentication information.
     */
    onSignInCallback: function(authResult) {
      gapi.client.load('plus','v1', function(){
        $('#authResult').html('Auth Result:<br/>');
        for (var field in authResult) {
          $('#authResult').append(' ' + field + ': ' +
              authResult[field] + '<br/>');
        }
        if (authResult['access_token']) {
		window.open("landingPage.html",'_self');
		
        } else if (authResult['error']) {
          // There was an error, which means the user is not signed in.
          // As an example, you can handle by writing to the console:
          console.log('There was an error: ' + authResult['error']);
          $('#authResult').append('Logged out');
          $('#authOps').hide('slow');
          $('#gConnect').show();
        }
        console.log('authResult', authResult);
      });
    },

    /**
     * Calls the OAuth2 endpoint to disconnect the app for the user.
     */
    disconnect: function() {
      // Revoke the access token.
      $.ajax({
        type: 'GET',
        url: 'https://accounts.google.com/o/oauth2/revoke?token=' +
            gapi.auth.getToken().access_token,
        async: false,
        contentType: 'application/json',
        dataType: 'jsonp',
        success: function(result) {
          console.log('revoke response: ' + result);
          $('#authOps').hide();
          $('#profile').empty();
          $('#visiblePeople').empty();
          $('#authResult').empty();
          $('#gConnect').show();
        },
        error: function(e) {
          console.log(e);
        }
      });
    },

    /**
     * Gets and renders the list of people visible to this app.
     */
    people: function() {
      var request = gapi.client.plus.people.list({
        'userId': 'me',
        'collection': 'visible'
      });
      request.execute(function(people) {
        $('#visiblePeople').empty();
        $('#visiblePeople').append('Number of people visible to this app: ' +
            people.totalItems + '<br/>');
        for (var personIndex in people.items) {
          person = people.items[personIndex];
          $('#visiblePeople').append('<img src="' + person.image.url + '">');
        }
      });
    },

    /**
     * Gets and renders the currently signed in user's profile data.
     */
    profile: function(){
      var request = gapi.client.plus.people.get( {'userId' : 'me'} );
      request.execute( function(profile) {
        $('#profile').empty();
        if (profile.error) {
          $('#profile').append(profile.error);
          return;
        }
        $('#profile').append(
            $('<p><img src=\"' + profile.image.url + '\"></p>'));
        $('#profile').append(
            $('<p>Hello ' + profile.displayName + '!<br />Tagline: ' +
            profile.tagline + '<br />About: ' + profile.aboutMe + '</p>'));
        if (profile.cover && profile.coverPhoto) {
          $('#profile').append(
              $('<p><img src=\"' + profile.cover.coverPhoto.url + '\"></p>'));
        }
      });
    }
  };
})();

/**
 * jQuery initialization
 */
$(document).ready(function() {
  $('#disconnect').click(helper.disconnect);
  $('#loaderror').hide();
  if ($('[data-clientid="YOUR_CLIENT_ID"]').length > 0) {
    alert('This sample requires your OAuth credentials (client ID) ' +
        'from the Google APIs console:\n' +
        '    https://code.google.com/apis/console/#:access\n\n' +
        'Find and replace YOUR_CLIENT_ID with your client ID.'
    );
  }
});

/**
 * Calls the helper method that handles the authentication flow.
 *
 * @param {Object} authResult An Object which contains the access token and
 *   other authentication information.
 */
function onSignInCallback(authResult) {
  helper.onSignInCallback(authResult);
}
	</script>
    <script type="text/javascript">
		  (function() {
			var po = document.createElement('script');
			po.type = 'text/javascript'; po.async = true;
			po.src = 'https://plus.google.com/js/client:plusone.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(po, s);
		  })();
		</script>
        
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" ></script>
    
</html>