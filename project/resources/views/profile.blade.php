@extends('template')

@section('title')
    Мой профиль
@endsection

@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4 h-100">
                    <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                             class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">Василий Пупкин</h5>
                        <p class="text-muted mb-1">Санитар</p>
                        <p class="text-muted mb-4">Россия, город Кемерово</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Редактировать профиль</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">ФИО</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Василий Пупкин</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Почта</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">example@example.com</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Телефон</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">(097) 234-5678</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Адресс</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Россия, город Кемерово</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="my-3">Что хотите сделать?</h5>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <a href="/product/get/add" class="list-group-item d-flex justify-content-between align-items-center p-3">
                                Добавить объявление
                            </a>
                            <a href="/product/show" class="list-group-item d-flex justify-content-between align-items-center p-3">
                                Просмотр моих объявлений
                            </a>
                            <a href="/product/wish" class="list-group-item d-flex justify-content-between align-items-center p-3">
                                Избранные объявления
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
