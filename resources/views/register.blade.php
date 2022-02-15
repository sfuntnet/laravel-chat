<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kayıt Ol</title>
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
      @if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">
{{$error}}
</div>
@endforeach
			@endif
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      @if(session('Emailhata'))

<div class="alert alert-danger">
{{session('Emailhata')}}
</div>

			@endif
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      @if(session('Şifrehata'))

<div class="alert alert-danger">
{{session('Şifrehata')}}
</div>

			@endif
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      @if(session('Basarili'))

<div class="alert alert-success">
{{session('Basarili')}}
</div>

			@endif
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      @if(session('Kullanıcıvar'))

<div class="alert alert-danger">
{{session('Kullanıcıvar')}}
</div>

			@endif
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
      @if(session('usernamevar'))

<div class="alert alert-danger">
{{session('usernamevar')}}
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

				<form class="login100-form validate-form" action="{{route('register')}}" method="get">

					<span class="login100-form-title">
						Kayıt Olunuz
					</span>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="username" placeholder="İsminizi Giriniz">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email Adresiniz">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email2" placeholder="Email Adresini Tekrar Giriniz">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Şifreniz">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="pass2" placeholder="Şifrenizi Tekrar Giriniz">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Kayıt Ol
						</button>
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
