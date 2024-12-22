@extends('layout.master')
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-12 text-end">
            <a href="{{route('create')}}" class="btn btn-primary">Ekle</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Başlık</th>
                <th scope="col">Açıklama</th>
                <th scope="col">Durum</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $todos as $key=>$todo )
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$todo->title}}</td>
                <td>{{$todo->description}}</td>
                <td>{{$todo->completed==1?'Tamamlandı':'Devam Ediyor'}}</td>
                <td>
                    <a href="{{route('show',$todo->id)}}" class="btn btn-info">Göster</a>
                    <a href="{{route('edit',$todo->id)}}" class="btn btn-warning">Düzenle</a>
                    <a href="{{route('destroy',$todo->id)}}" class="btn btn-danger">Sil</a>

                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>
@endsection
