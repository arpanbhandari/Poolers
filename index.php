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
		
            function validator(){
                if(document.getElementById("username").value===""){
                    alert("Please enter the USERNAME!");
                }
                
                if(document.getElementById("password").value===""){
                    alert("Please enter the PASSWORD!");
                }
                else{
                    window.open("landingPage.php",'_self');
                }
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
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=491045710995010";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        
        <script>

            window.fbAsyncInit = function()
            {
                FB.init
                (
                    {
                        appId   : "491045710995010",
                        status  : true,
                        cookie  : true,
                        oauth   : true
                    }
                );
            };

            function login()
            {
                FB.login
                (
                    function( response )
                    {
                        if ( response.authResponse )
                        {
                            FB.api
                            (
                                "/me",
                                function( response )
                                {
                                    window.open("landingPage.html");
                                }
                            )
                        }
                    }
                );
            }

       </script>
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
                       
                      
                      
                    </ul>
                  </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
      </nav>
        
        
        <!-- FORM -->
        <div style="height:200px; width:300px; margin-top:200px; margin-left:auto; margin-right:auto;">
            <form name="logInForm" action="userAuthentication.php" method="post">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" style="width:250px; margin-top:25px; margin-left:auto;margin-right:auto;"><br>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" style="width:250px; margin-left:auto;margin-right:auto;"><br>
                <input type="submit" class="btn btn-info btn-sm" value="Login" onClick="validator()" style="width:250px; margin-left:27px;"><br>
                 
            </form>
        </div>
        
                <div id="gConnect" style="margin-left:33%;">
                    <!--<div class="fb-login-button" data-max-rows="3" data-size="large" data-show-faces="false" data-auto-logout-link="false" style="width:400px;" ></div><br>-->
                        <div class="fb-login-button" data-show-faces="false"data-max-rows="1" data-size="large" style="height:70px;">Sign in with facebook</div><br>
                        <button class="g-signin" style="margin-left:10px;"
                            data-scope="https://www.googleapis.com/auth/plus.login"
                            data-requestvisibleactions="http://schemas.google.com/AddActivity"
                            data-clientId="525609275426-p8gmmem28i0edhtoh7qk981gl1mrqfcp.apps.googleusercontent.com"
                            data-callback="onSignInCallback"
                            data-theme="dark"
                            data-cookiepolicy="single_host_origin"
                            data-width="wide">
                        </button>
                    </div><br>
        
         
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
		window.open("landingPage.php",'_self');
		
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
    
</html>
