@extends('template')

@section('title')
    Главная страница
@endsection
@section('main_content')

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light"><ya-tr-span data-index="2-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Album example" data-translation="Пример альбома" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Пример альбома</ya-tr-span></h1>
                    <p class="lead text-body-secondary"><ya-tr-span data-index="3-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Something short and leading about the collection below—its contents, the creator, etc. " data-translation="Что-то короткое и информативное о коллекции ниже — её содержании, создателе и т. д. " data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Что-то короткое и информативное о коллекции ниже — её содержании, создателе и т. д. </ya-tr-span><ya-tr-span data-index="3-1" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Make it short and sweet, but not too short so folks don’t simply skip over it entirely." data-translation="Сделайте это кратко и лаконично, но не слишком коротко, чтобы люди не пропустили это мимо ушей." data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Сделайте это кратко и лаконично, но не слишком коротко, чтобы люди не пропустили это мимо ушей.</ya-tr-span></p>
                    <p>
                        <a href="#" class="btn btn-primary my-2"><ya-tr-span data-index="4-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Main call to action" data-translation="Основной призыв к действию" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Основной призыв к действию</ya-tr-span></a>
                        <a href="#" class="btn btn-secondary my-2"><ya-tr-span data-index="5-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Secondary action" data-translation="Вторичное действие" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Вторичное действие</ya-tr-span></a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($products as $item)
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                                <div class="card-body">
                                    <h5 class="card-title">{{$item->title}}</h5>
                                    <p class="card-text"><ya-tr-span data-index="6-0" data-translated="true" data-source-lang="en" data-target-lang="ru"
                                                                     data-ch="0" data-type="trSpan" style="visibility: inherit !important;">{{$item->description}}</ya-tr-span></p>
                                    <p class="card-text"><ya-tr-span data-index="6-0" data-translated="true" data-source-lang="en" data-target-lang="ru"
                                                                     data-ch="0" data-type="trSpan" style="visibility: inherit !important;">{{$item->price}} рублей</ya-tr-span></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group d-flex">
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><ya-tr-span data-index="7-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="View" data-translation="Вид" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Вид</ya-tr-span></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary"><ya-tr-span data-index="7-1" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Edit" data-translation="Редактировать" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">Редактировать</ya-tr-span></button>
                                        </div>
                                        <small class="text-body-secondary"><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="9 mins" data-translation="9 минут" data-ch="0" data-type="trSpan" style="visibility: inherit !important;">{{$item->created_at}}</ya-tr-span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>

@endsection
