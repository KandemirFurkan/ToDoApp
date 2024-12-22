@extends('layout.master')
@section('content')
<form action="{{route('update',$todo->id)}}" method="post">
    @csrf
    <div class="row my-5">
        <div class="col-xl-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ToDo Düzenle</h3>
                </div>
                <div class="card-body">


                    <div class="mb-3">
                        <label  class="form-label">ToDo Başlık</label>
                        <input type="text" class="form-control" value="{{$todo->title}}"  name="title" placeholder="Başlık Giriniz">
                    </div>
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label  class="form-label">ToDo Açıklama</label>
                        <textarea class="form-control" name="description" placeholder="Açıklama Giriniz">{{$todo->description}}</textarea>
                    </div>

                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label  class="form-label">ToDo Durum</label>
<select class="form-control" name="completed" aria-label="Default select example">

    <option value="1" {{$todo->completed==1?'selected':''}}>Tamamlandı</option>
    <option  value="0" {{$todo->completed==0?'selected':''}}>Devam Ediyor</option>
    </select>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endsection
