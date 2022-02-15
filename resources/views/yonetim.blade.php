@extends('index')
@section('css')


@endsection






@section('main')
<div class="container">
<div class="row">
<div class="col-lg-12">
  @if($errors->any())
   @foreach($errors->all() as $errors)
   <div class="alert alert-danger">
{{$errors}}
   </div>
   @endforeach
   @endif
</div>
</div>
</div>
<div class="container">
<div class="row">
  <div class="col-lg-12 text-center">
       <h1>Hoşgeldiniz {{$isim}}</h1>
       <h2>Topluluğumuza Katılın</h2>
  </div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-8">
  <form  action="{{route('mesajgonder')}}" method="get">


    <div class="form-group">

      <textarea class="form-control disabled" id="textarea_id" rows="30" placeholder="Gelen Mesajlar" disabled>
      @foreach($musteriler as $rows)
{{$rows->kimden}} : {{$rows->gelenmesajlar}}                 {{$rows->created_at}}

        @endforeach
      </textarea>
    </div>
    <div class="form-group">

      <textarea class="form-control" id="exampleFormControlTextarea1" name="mesajyaz" rows="2" placeholder="Mesaj Gönderiniz..."></textarea>

    </div>
    <input type="submit" name="" class="btn btn-success" value="Gönder">
  </form>
</div>
<div class="col-lg-3">
<h5>Yeni Kullanıcılar</h5>

<div class="form-group">

  <select multiple class="form-control" id="exampleFormControlSelect2">
    @foreach($musteriler2 as $rows)
    <option>{{$rows->username}}</option>
@endforeach
  </select>
</div>
</div>
</div>
</div>

<script type="text/javascript">
var textarea = document.getElementById('textarea_id');
textarea.scrollTop = textarea.scrollHeight;
</script>
@endsection
















@section('js')


@endsection
