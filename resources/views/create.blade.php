@extends('layout.master')
@section('content')
<form action="{{route('store')}}" method="post">
     @csrf
    <div class="row my-5">
        <div class="col-xl-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ToDo Ekle</h3>
                </div>
                <div class="card-body">


                    <div class="mb-3">
                        <label  class="form-label">ToDo Başlık</label>
                        <input type="text" class="form-control"  name="title" placeholder="Başlık Giriniz">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">ToDo Açıklama</label>
                        <textarea class="form-control" name="description" placeholder="Açıklama Giriniz"></textarea>





                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
