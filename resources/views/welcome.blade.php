<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OperettaHarmony - Főoldal</title>


    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    @include('menu')
    <div class="content-container">
        <h2>
            Üdvözöljük az OperettaHarmony Színház hivatalos weboldalán!
        </h2>
        <p>
            Célunk, hogy egyedülálló és felejthetetlen operett élményeket kínáljunk a művészetek iránt érdeklődő
            közönségünknek. Az OperettaHarmony a hagyományos operett műfaját ötvözi a modern megközelítéssel, hogy
            minden előadásunk különleges legyen.
        </p>

        <h3>Miért válassza az OperettaHarmony-t?</h3>
        <div class="d-lg-none">
            <p>
            <p><strong>Művészi Kiválóság:</strong>
                Az OperettaHarmony Színház büszkén hordozza a művészi kiválóság
                zászlaját. Elkötelezettek vagyunk az operett műfajának hagyományai iránt, miközben friss és izgalmas
                interpretációkat nyújtunk.
            </p>
            <p>
                <strong>Lenyűgöző Előadások:</strong>
                Minden előadásunkban arra törekszünk, hogy lenyűgöző vizuális és zenei élményeket teremtsünk. A modern
                technológia segítségével emeljük az előadások színvonalát.
            </p>
            <p><strong>Közönségkapcsolat:</strong> Az OperettaHarmony Színházban fontosnak tartjuk a közönségünkkel való
                kapcsolatot.
                Interaktív élményekkel és rendezvényekkel szeretnénk közelebb hozni az operett világát a nézőkhöz.
            </p>
            <p><strong>Variabilitás:</strong> Repertoárunkban megtalálhatók a klasszikusok, de folyamatosan keresünk új,
                izgalmas
                darabokat
                is. Rugalmasságunknak köszönhetően széles körű operett élményeket kínálunk.
            </p>
            <strong>Klasszikus Operettek:</strong> A nagy operett mesterművek előadásai, hűen a hagyományokhoz.
            Modern Interpretációk: Friss és modern megközelítések a klasszikus témákhoz.
            Gálaműsorok és Események: Különleges alkalmakkor gálaműsorok és egyedi események szervezése.
            </p>
        </div>


        <div id="carouselExampleIndicators" interval=false class="carousel slide d-none d-lg-block carousel-fade"
            data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('/img/opera-1.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Művészi Kiválóság</h5>
                        <p>Az OperettaHarmony Színház büszkén hordozza a művészi kiválóság
                            zászlaját. Elkötelezettek vagyunk az operett műfajának hagyományai iránt, miközben friss és
                            izgalmas
                            interpretációkat nyújtunk</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/img/opera-2.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Lenyűgöző Előadások</h5>
                        <p>Minden előadásunkban arra törekszünk, hogy lenyűgöző vizuális és zenei élményeket teremtsünk.
                            A modern
                            technológia segítségével emeljük az előadások színvonalát</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/img/opera-3.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Közönségkapcsolat</h5>
                        <p>Az OperettaHarmony Színházban fontosnak tartjuk a közönségünkkel való
                            kapcsolatot.
                            Interaktív élményekkel és rendezvényekkel szeretnénk közelebb hozni az operett világát a
                            nézőkhöz.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/img/opera-4.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Variabilitás</h5>
                        <p>Repertoárunkban megtalálhatók a klasszikusok, de folyamatosan keresünk új,
                            izgalmas
                            darabokat
                            is. Rugalmasságunknak köszönhetően széles körű operett élményeket kínálunk.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('/img/opera-5.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Klasszikus Operettek</h5>
                        <p>A nagy operett mesterművek előadásai, hűen a hagyományokhoz.
                            Modern Interpretációk: Friss és modern megközelítések a klasszikus témákhoz.
                            Gálaműsorok és Események: Különleges alkalmakkor gálaműsorok és egyedi események szervezése.
                        </p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <p><strong>Látogasson el hozzánk és fedezze fel az OperettaHarmony Színház varázslatos világát! Köszönjük,
                hogy velünk
                tart, és várjuk Önt előadásainkon.</strong></p>

    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>