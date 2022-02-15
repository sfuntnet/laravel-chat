<!DOCTYPE html>
<html lang="en">
<head>
	<title>Giriş Yap</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('/')}}images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}css/main.css">
	@yield('css')
<!--===============================================================================================-->
</head>
<body>
<div class="container">
<div class="row">
  <div class="col-lg-12">
     @if(session('Hata'))
  <div class="alert alert-danger">
  {{session('Hata')}}
  </div>
		 @endif
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
     @if(session('giris'))
  <div class="alert alert-danger">
  {{session('giris')}}
  </div>
		 @endif
  </div>
</div>
</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('/')}}images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="{{route('logincontrol')}}" method="post">
					@csrf
					<span class="login100-form-title">
						Giriş Yap
					</span>

					<div class="wrap-input100 validate-input" 	>
						<input class="input100" type="text" name="email" placeholder="Email Adresiniz">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" 	>
						<input class="input100" type="password" name="pass" placeholder="Şifreniz">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>



					<div class="text-center p-t-136">
						<strong>Hesabınız Yoksa</strong>	<a class="txt2" href="{{route('kayıt')}}">
							Kayıt Olun
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{asset('/')}}vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('/')}}vendor/bootstrap/js/popper.js"></script>
	<script src="{{asset('/')}}vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('/')}}vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{asset('/')}}vendor/tilt/tilt.jquery.min.js"></script>
	@yield('js')
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('/')}}js/main.js"></script>

</body>
</html>
