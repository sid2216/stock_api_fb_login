<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="//connect.facebook.net/en_US/sdk.js"></script>
	<title></title>
</head>
<body>
  <button id="login">Login with Facebook</button>
 <div id="fb-root"></div>
 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=1430734107406929&autoLogAppEvents=1" nonce="5vFSWpNE"></script>
<!-- <div class="fb-login-button" data-width="" data-size="large" data-button-type="login_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"></div>  -->
</body>
</html>
 <script type="text/javascript">

$(document).ready(function(){
  $("#login").on('click',function(){
FB.login(function(response){
   window.location.href="{{url('/stock_data')}}";
});
  });

});

</script> 




