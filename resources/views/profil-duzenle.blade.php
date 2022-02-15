@extends('index')
@section('css')


@endsection






@section('main')
<div class="container">
<div class="row">
   <div class="col-lg-12">
   @if(session('usernamehata'))
<div class="alert alert-danger">
  {{session('usernamehata')}}
</div>
   @endif
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
   @if(session('Update'))
<div class="alert alert-success">
  {{session('Update')}}
</div>
   @endif
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
   @if(session('Hataesit'))
<div class="alert alert-danger">
  {{session('Hataesit')}}
</div>
   @endif
   </div>
</div>
<div class="row">
   <div class="col-lg-12">
   @if(session('passwordhata'))
<div class="alert alert-danger">
  {{session('passwordhata')}}
</div>
   @endif
   </div>
</div>
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
</div>
<form action="{{route('isimguncelle')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">İsmi Güncelle</label>
    <input type="username" name="username" value="{{$username}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="İsmi Giriniz">
  </div>

  <button type="submit" class="btn btn-primary">İsmi Güncelle</button>
</form>
<form action="{{route('emailguncelle')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email adresi Güncelle</label>
    <input type="email" name="email" value="{{$email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email adresini Tekrar Giriniz</label>
    <input type="email" name="email2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <button type="submit" class="btn btn-primary">Emaili Güncelle</button>
</form>
<form action="{{route('sifreguncelle')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Şifreyi Güncelle</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Şifreyi Tekrar Gir</label>
    <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Şifreyi Güncelle</button>
</form>
@endsection




@section('js')


@endsection
