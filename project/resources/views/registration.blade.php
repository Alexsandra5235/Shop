@extends('template')

@section('title')
    Регистрация
@endsection

@section('main_content')
    <section>
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Создать аккаунт</h2>
                                <form>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Ваше имя</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">Ваша почта</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cg">Пароль</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg">Повторите пароль</label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button  type="button" data-mdb-button-init
                                                 data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body w-100">Зарегестрировать аккаунт</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Уже есть аккаунт?
                                        <a href="/sign" class="fw-bold text-body"><u>Войти</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
