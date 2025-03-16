@extends('template')

@section('title')
    Вход или регистрация
@endsection

@section('main_content')
    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                         class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form>
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline my-4">
                            <input type="email" id="form1Example13" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example13">Почта</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="form-control form-control-lg" />
                            <label class="form-label" for="form1Example23">Пароль</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                <label class="form-check-label" for="form1Example3"> Запомнить меня </label>
                            </div>
                            <a href="#!">Забыли пароль?</a>
                        </div>

                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block w-100">Вход</button>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">ИЛИ</p>
                        </div>

                        <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block w-100" style="background-color: #3b5998" href="/registration"
                           role="button">
                            Регистрация
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
