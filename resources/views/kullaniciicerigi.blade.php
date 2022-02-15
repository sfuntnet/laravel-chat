@extends('index')
@section('css')


@endsection






@section('main')
<div class="container">
<div class="row">
<div class="col-lg-12">
@if(session('userserror'))
<div class="alert alert-danger">
{{session('userserror')}}
</div>
@endif
</div>
</div>
<div class="row">
<div class="col-lg-12">
@if(session('Başarılı'))
<div class="alert alert-success">
{{session('Başarılı')}}
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
<div class="container">
<div class="row">
<div class="col-lg-12">

  <form action="{{route('kullanicigonder')}}" method="get">
    <div class="form-group">

      <input type="username" value="{{$kullanıcı->username}}"  name="alıcı" class="form-control" id="exampleFormControlInput1" placeholder="Alıcıyı Yazınız" >
    </div>
    <div class="form-group">

      <input type="text" name="baslik" class="form-control" id="exampleFormControlInput1" placeholder="Başlığı Yazınız">
    </div>

    <div class="form-group">

      <textarea class="form-control" name="mesaj" id="exampleFormControlTextarea1" rows="3" placeholder="Mesaj Yazınız.."></textarea>
    </div>
    <input type="submit"  class="btn btn-success" value="Mesajı Gönder">
  </form>

</div>
</div>
</div>





@endsection







@section('js')

@endsection
