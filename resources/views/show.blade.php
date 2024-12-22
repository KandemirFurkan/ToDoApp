@extends('layout.master')
@section('content')

    <div class="row my-5">
        <div class="col-xl-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ToDo Detay</h3>
                </div>
                <div class="card-body">


                    <div class="mb-3">
                        <label  class="form-label">ToDo Başlık</label>
                        <input type="text" @readonly(true) class="form-control" value="{{$todo->title}}"  name="title" placeholder="Başlık Giriniz">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">ToDo Açıklama</label>
                        <textarea class="form-control" @readonly(true) name="description" placeholder="Açıklama Giriniz">{{$todo->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">ToDo Durum</label>
<select class="form-control" name="completed"  aria-label="Default select example">

    <option {{$todo->completed==0?'hidden':''}}  value="1" {{$todo->completed==1?'selected':''}}>Tamamlandı</option>
    <option  {{$todo->completed==1?'hidden':''}} value="0" {{$todo->completed==0?'selected':''}}>Devam Ediyor</option>
    </select>

                    </div>
                    <div class="card-footer">
                        @csrf
                        <form action="{{route('index')}}"> <button type="submit" class="btn btn-primary">Geri Dön</button></form>

                    </div>
                </div>
            </div>
        </div>

    @endsection
