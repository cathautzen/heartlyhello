<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Oprettelse</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Skrifttype sat ind fra Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<section id="step1"> <!--Første oprettelsesside-->
<div class="container">
    <div class="row">
        <div class="col text-center mt-5">
            <img class="justify-content-center" style="width: 100px;" src="images/logo_HeartlyHello.png" alt="HeartlyHello Logo" >
        </div>
    </div>
</div>

<div class="container">
        <div class="row mt-5 mb-4 justify-content-center">
            <div class="col-3 ">
                <div class="step-box bg-orange rounded-5">
                </div>
            </div>
            <div class="col-3">
                <div class="step-box bg-darklilla rounded-5">
                </div>
            </div>
            <div class="col-3">
                <div class="step-box bg-darklilla rounded-5">
                </div>
            </div>
        </div>
</div>

<div class="container">
    <div class="row">
        <div class="col text-center mt-5">
            <h3>Lad os starte med det formelle</h3>
        </div>
    </div>
</div>

<div class="container">
        <div class="row">
            <div class="col text-center mt-2">
                <form action="/submit_form" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputName" placeholder="Indtast dit navn" name="name">
                    </div>
                    <div class="form-group mt-4">
                        <input type="tel" class="form-control" id="inputPhone" placeholder="Indtast dit telefonnummer" name="phone">
                    </div>
                    <div class="form-group mt-4">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Indtast din email" name="email">
                    </div>
                    <div class="form-check mt-4">
                        <input type="checkbox" class="form-check-input" id="policyCheckbox" name="policy">
                        <label class="form-check-label" for="policyCheckbox">
                            Når du opretter en profil, accepterer
                            du vores <b>vilkår</b>. Læs om, hvordan vi
                            indsamler, bruger og deler dine data
                            i vores <b>politik om beskyttelse af
                                personoplysninger</b> samt om,
                            hvordan vi bruger <b>cookies</b> og
                            lignende teknologi i vores <b>politik
                                om cookies.</b></label>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col text-center mt-5">
                                <button id="step1button" type="button" class="button-1 btn btn-orange w-100 text-white rounded-5">Fortsæt</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
</div>
</section>

<section id="step2" class="d-none"> <!--Anden oprettelsesside-->
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <img class="justify-content-center" style="width: 100px;" src="images/logo_HeartlyHello.png" alt="HeartlyHello Logo" >
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 mb-4 justify-content-center">
            <div class="col-3 ">
                <div class="step-box bg-darklilla rounded-5">
                </div>
            </div>
            <div class="col-3">
                <div class="step-box bg-orange rounded-5">
                </div>
            </div>
            <div class="col-3">
                <div class="step-box bg-darklilla rounded-5">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <h5>Nu til det lidt mere personlige</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col  mt-2">
                <form action="/submit_form" method="post">
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <select class="form-control" id="personal" name="personal">
                                <option selected disabled >Hvad identificerer du dig som </option>
                                <option value="valg1">Binær (Mand)</option>
                                <option value="valg2">Binær (Kvinde)</option>
                                <option value="valg3">Dobbeltkønnet</option>
                                <option value="valg4">Non-Binær</option>
                                <option value="valg5">Transkønnet</option>
                                <option value="valg6">Interkøn</option>
                                <option value="valg7">Akønnet</option>
                                <option value="valg8">Queer</option>
                            </select>
                            <div class="input-group-prepend d-flex justify-content-center align-items-center">
                                <span class="input-group-text">
                                    <i class="fas fa-caret-down fa-xl"></i>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="form-group mt-5 text-center">
                        <label for="birthday"><h5>Din Fødselsdag</h5></label>
                        <input type="date" class="form-control" id="birthday" name="birthday">
                    </div>
                    <div class="form-group mt-5">
                        <div class="text-center">
                            <label for="lookingFor"><h5>Jeg søger</h5></label><br>
                        </div>
                        <div class="form-check form-control ">
                            <input type="checkbox" class="form-check-input" id="lookingFor1" name="lookingFor1">
                            <label class="form-check-label" for="lookingFor1"> Tætte venskaber</label>
                        </div>
                        <div class="form-check form-control mt-2">
                            <input type="checkbox" class="form-check-input" id="lookingFor2" name="lookingFor2">
                            <label class="form-check-label" for="lookingFor2"> Dybe forbindelser</label>
                        </div>
                        <div class="form-check form-control mt-2">
                            <input type="checkbox" class="form-check-input" id="lookingFor3" name="lookingFor3">
                            <label class="form-check-label" for="lookingFor3"> Én at drikke kaffe med</label>
                        </div>
                        <div class="form-check form-control mt-2">
                            <input type="checkbox" class="form-check-input" id="lookingFor4" name="lookingFor4">
                            <label class="form-check-label" for="lookingFor4"> Kærligheden</label>
                        </div>
                        <div class="form-check form-control mt-2">
                            <input type="checkbox" class="form-check-input" id="lookingFor5" name="lookingFor5">
                            <label class="form-check-label" for="lookingFor5"> Et forum til samtaler</label>
                        </div>
                    </div>
                <div class="container">
                        <div class="row">
                            <div class="col text-center mt-5">
                                <button id="step2button" type="button" class="button-1 btn btn-orange w-100 text-white rounded-5">Fortsæt</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<section id="step3" class="d-none"> <!--Tredje oprettelsesside-->
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <img class="justify-content-center" style="width: 100px;" src="images/logo_HeartlyHello.png" alt="HeartlyHello Logo" >
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 mb-4 justify-content-center">
            <div class="col-3 ">
                <div class="step-box bg-darklilla rounded-5">
                </div>
            </div>
            <div class="col-3">
                <div class="step-box bg-darklilla rounded-5">
                </div>
            </div>
            <div class="col-3">
                <div class="step-box bg-orange rounded-5">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <h5>Du er næsten færdig.<br>
                    Vi vil bare lige lære dig lidt bedre at kende.</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <img class="justify-content-center" style="width: 160px;" src="images/Personer_Person6.png" alt="Grafisk illustation af person" >
            </div>
        </div>
    </div>

    <form>
        <div class="form-group">
            <div class="col text-center mt-3">
                <h5>Vælg dine interesser</h5>
            </div>
            <div class="pill-checkbox mt-3">
                <input type="checkbox" id="interest1" name="interest1" class="hidden-checkbox">
                <label for="interest1" class="pill">Fiskeri</label>
                <input type="checkbox" id="interest2" name="interest2" class="hidden-checkbox">
                <label for="interest2" class="pill">Gaming</label>
                <input type="checkbox" id="interest3" name="interest3" class="hidden-checkbox">
                <label for="interest3" class="pill">Sport</label>
                <input type="checkbox" id="interest4" name="interest4" class="hidden-checkbox">
                <label for="interest4" class="pill">Kreativitet</label>
                <input type="checkbox" id="interest5" name="interest5" class="hidden-checkbox">
                <label for="interest5" class="pill">Madlavning</label>
                <input type="checkbox" id="interest6" name="interest6" class="hidden-checkbox">
                <label for="interest6" class="pill">Rejse</label>
                <input type="checkbox" id="interest7" name="interest7" class="hidden-checkbox">
                <label for="interest7" class="pill">Bøger</label>
                <input type="checkbox" id="interest8" name="interest8" class="hidden-checkbox">
                <label for="interest8" class="pill">Fitness</label>
                <input type="checkbox" id="interest9" name="interest9" class="hidden-checkbox">
                <label for="interest9" class="pill">Kæledyr</label>
                <input type="checkbox" id="interest10" name="interest10" class="hidden-checkbox">
                <label for="interest10" class="pill">Indretning</label>
                <input type="checkbox" id="interest11" name="interest11" class="hidden-checkbox">
                <label for="interest11" class="pill">Bylivet</label>
            </div>
        </div>
    </form>

    <div class="container">
                <div class="row">
                    <div class="col text-center mt-5">
                        <button id="step3button" type="button" class="button-1 btn btn-orange w-100 text-white rounded-5">Fortsæt</button>
                    </div>
                </div>
            </div>
        </form>

            </div>
        </div>
    </div>
</section>



<script src="https://kit.fontawesome.com/645a3a1c42.js" crossorigin="anonymous"></script> <!--Fontawesome ikoner-->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> <!-- Forbinder til Bootstrap -->
<script src="js/opretbruger.js"></script> <!-- Forbinder javascriptet til siden - Opret bruger  -->


</body>
</html>

