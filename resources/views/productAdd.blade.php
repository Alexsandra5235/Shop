@extends('template')

@section('title')
    Добавление товара
@endsection

@section('main_content')

    @if($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Добавление товара</h2>
                        <form method="post" action="/product/add">
                            @csrf
                            <input type="hidden" name="profile_id" id="profile_id" value="{{ $profile->id }}">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" name="title" id="title" class="form-control form-control-lg" placeholder="Введите название товара"/>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" name="description" id="description" class="form-control form-control-lg" placeholder="Введите описание товара"/>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" name="price" id="price" class="form-control form-control-lg" placeholder="Введите цену товара"/>
                            </div>

                            <select name="status" id="status" class="form-select form-select-lg mb-4" aria-label="Пример выбора по умолчанию">
                                <option>Выберите состояние товара</option>
                                <option value="новый">Новое</option>
                                <option value="Б/У">Б/У</option>
                            </select>

                            <div class="d-flex justify-content-center">
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body w-100">
                                    Добавить товар</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
