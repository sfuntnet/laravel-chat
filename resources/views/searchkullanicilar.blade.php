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

</div>
<div class="container">
<div class="row">
<div class="col-lg-6">
  <form class="form-inline my-2 my-lg-0" action="{{route('search')}}" method="get">
       <input class="form-control mr-sm-2" name="search" type="search" placeholder="Kullanıcıları Ara" aria-label="Search">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
     </form>
</div>
</div>
</div>

<table class="table">
  <thead>
    <tr>

      <th scope="col">Ad</th>
      <th scope="col">Mesaj Gönder</th>

    </tr>
  </thead>
  <tbody>
      @foreach($register as $rows)
    <tr>

      <td>{{$rows->username}}</td>
      <td><a href="{{route('ozelmesajkullanıcı',$rows->id)}}" class="btn btn-success">Mesaj Gönder</td>

    </tr>
@endforeach
  </tbody>
</table>
{{$register->links()}}

@endsection







@section('js')



@endsection
