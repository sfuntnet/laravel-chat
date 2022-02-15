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
<table class="table">
  <thead>
    <tr>

      <th scope="col">Ad</th>
      <th scope="col">Tarih</th>
      <th scope="col">Mesajı Gör</th>
  
    </tr>
  </thead>
  <tbody>
      @foreach($musteri as $rows)
    <tr>

      <td>{{$rows->gönderen}}</td>
      <td>{{$rows->created_at}}</td>
      <td><a href="{{route('ozelmesajdetail',$rows->id)}}" class="btn btn-success">Mesajı Gör</td>

    </tr>
@endforeach
  </tbody>
</table>
{{$musteri->links()}}

@endsection







@section('js')



@endsection
