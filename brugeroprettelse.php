<?php
require "settings/init.php";
// Init filen hjælper med at forbinde til databsen

// Her tjekker vi om der er noget data i POST (Method=post i oprettelsesformularen). Hvis der er noget, skal den køre denne 'if'.
if(!empty($_POST["data"])){
    $data = $_POST["data"];

// Opdeler mellem elementer (fx interesse | interesse ).
    $delimeter = "|";

// Denne section opbygger en streng til databasen med de valgte elementer, opdelt med delimeteren (hvad brugeren søger).
    $seeking = "";
    if(isset($data["lookingFor1"])){
        $seeking = "Tætte venskaber";
    }
    if(isset($data["lookingFor2"])){
        if (empty($seeking))
        {
            $seeking = "Dybe forbindelser";
        }
        else
        {
            $seeking = $seeking . $delimeter . "Dybe forbindelser";
        }
    }
    if(isset($data["lookingFor3"])){
        if (empty($seeking))
        {
            $seeking = "Én at drikke kaffe med";
        }
        else
        {
            $seeking = $seeking . $delimeter . "Én at drikke kaffe med";
        }
    }
    if(isset($data["lookingFor4"])){
        if (empty($seeking))
        {
            $seeking = "Kærligheden";
        }
        else
        {
            $seeking = $seeking . $delimeter . "Kærligheden";
        }
    }
    if(isset($data["lookingFor5"])){
        if (empty($seeking))
        {
            $seeking = "Et forum til samtaler";
        }
        else
        {
            $seeking = $seeking . $delimeter . "Et forum til samtaler";
        }
    }

// Denne section opbygger en streng til databasen med de valgte elementer, opdelt med delimeteren ( deres interesser).
    $interests = "";
    if(isset($data["interest1"])){
        $interests = "Fiskeri";
    }
    if(isset($data["interest2"])){
        if (empty($interests))
        {
            $interests = "Gaming";
        }
        else
        {
            $interests = $interests . $delimeter . "Gaming";
        }
    }
    if(isset($data["interest3"])){
        if (empty($interests))
        {
            $interests = "Sport";
        }
        else
        {
            $interests = $interests . $delimeter . "Sport";
        }
    }
    if(isset($data["interest4"])){
        if (empty($interests))
        {
            $interests = "Kreativitet";
        }
        else
        {
            $interests = $interests . $delimeter . "Kreativitet";
        }
    }
    if(isset($data["interest5"])){
        if (empty($interests))
        {
            $interests = "Madlavning";
        }
        else
        {
            $interests = $interests . $delimeter . "Madlavning";
        }
    }
    if(isset($data["interest6"])){
        if (empty($interests))
        {
            $interests = "Rejse";
        }
        else
        {
            $interests = $interests . $delimeter . "Rejse";
        }
    }
    if(isset($data["interest7"])){
        if (empty($interests))
        {
            $interests = "Bøger";
        }
        else
        {
            $interests = $interests . $delimeter . "Bøger";
        }
    }
    if(isset($data["interest8"])){
        if (empty($interests))
        {
            $interests = "Fitness";
        }
        else
        {
            $interests = $interests . $delimeter . "Fitness";
        }
    }
    if(isset($data["interest9"])){
        if (empty($interests))
        {
            $interests = "Kæledyr";
        }
        else
        {
            $interests = $interests . $delimeter . "Kæledyr";
        }
    }
    if(isset($data["interest10"])){
        if (empty($interests))
        {
            $interests = "Indretning";
        }
        else
        {
            $interests = $interests . $delimeter . "Indretning";
        }
    }
    if(isset($data["interest11"])){
        if (empty($interests))
        {
            $interests = "Bylivet";
        }
        else
        {
            $interests = $interests . $delimeter . "Bylivet";
        }
    }

// Dette sender vi til databasen. Navene i databasen vs. navnene i koden. Så de hænger sammen.
    $sql = "INSERT INTO brugere (
                       Name,
                       Phone,
                       Mail,
                       Gender,
                       Birthday,
                       Seeking,
                       Interests
                       )
VALUES(
       :Name,
       :Phone,
       :Mail,
       :Gender,
       :Birthday,
       :Seeking,
       :Interests)
       ";

// Her binder vi værdierne brugerne har indtastet med de navne vi har givet dem.
    $bind = [":Name" => $data["name"],
        ":Phone" => $data["phone"],
        ":Mail" => $data["email"],
        ":Gender" => $data["personal"],
        ":Birthday" => $data["birthday"],
        ":Seeking" => $seeking,
        ":Interests" => $interests
    ];

 // Her sender vi det til databasen.
    $db->sql($sql, $bind, false);

// Når oprettelsen af er slut, fortæller vi browseren, hvor vi skal gå hen. 
    header("Location: oprettelseslut.php");
    exit;
}
?>

<!--PHP fil til HEAD information -->
<?php include "includes/head.php"
?>

<body>

<form method="post" action="brugeroprettelse.php">
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
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputName" placeholder="Indtast dit navn" name="data[name]">
                        </div>
                        <div class="form-group mt-4">
                            <input type="tel" class="form-control" id="inputPhone" placeholder="Indtast dit telefonnummer" name="data[phone]">
                        </div>
                        <div class="form-group mt-4">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Indtast din email" name="data[email]">
                        </div>
                        <div class="form-check mt-4">

                            <input type="checkbox" class="form-check-input" id="policyCheckbox" name="data[policy]" required>
                            <label class="form-check-label" for="policyCheckbox">
                                Når du opretter en profil, accepterer
                                du vores <b>vilkår</b>. Læs om, hvordan vi
                                indsamler, bruger og deler dine data
                                i vores <b>politik om beskyttelse af
                                    personoplysninger</b> samt om,
                                hvordan vi bruger <b>cookies</b> og
                                lignende teknologi i vores <b>politik
                                    om cookies.</b></label>
                            <div class="invalid-feedback">Du skal acceptere betingelserne for at kunne fortsætte.</div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col text-center mt-5">
                                    <button id="step1button" type="button" class="button-1 btn btn-orange w-100 text-white rounded-5">Fortsæt</button>
                                </div>
                            </div>
                        </div>
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
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <select class="form-control" id="personal" name="data[personal]">
                                    <option selected disabled >Hvad identificerer du dig som</option>
                                    <option value="Binær (Mand)">Binær (Mand)</option>
                                    <option value="Binær (Kvinde)">Binær (Kvinde)</option>
                                    <option value="Dobbeltkønnet">Dobbeltkønnet</option>
                                    <option value="Non-Binær">Non-Binær</option>
                                    <option value="Transkønnet">Transkønnet</option>
                                    <option value="Interkøn">Interkøn</option>
                                    <option value="Akønnet">Akønnet</option>
                                    <option value="Queer">Queer</option>
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
                            <input type="date" class="form-control" id="birthday" name="data[birthday]">
                        </div>
                        <div class="form-group mt-5">
                            <div class="text-center">
                                <label for="lookingFor"><h5>Jeg søger</h5></label><br>
                            </div>
                            <div class="form-check form-control ">
                                <input type="checkbox" class="form-check-input" id="lookingFor1" name="data[lookingFor1]">
                                <label class="form-check-label" for="lookingFor1"> Tætte venskaber</label>
                            </div>
                            <div class="form-check form-control mt-2">
                                <input type="checkbox" class="form-check-input" id="lookingFor2" name="data[lookingFor2]">
                                <label class="form-check-label" for="lookingFor2"> Dybe forbindelser</label>
                            </div>
                            <div class="form-check form-control mt-2">
                                <input type="checkbox" class="form-check-input" id="lookingFor3" name="data[lookingFor3]">
                                <label class="form-check-label" for="lookingFor3"> Én at drikke kaffe med</label>
                            </div>
                            <div class="form-check form-control mt-2">
                                <input type="checkbox" class="form-check-input" id="lookingFor4" name="data[lookingFor4]">
                                <label class="form-check-label" for="lookingFor4"> Kærligheden</label>
                            </div>
                            <div class="form-check form-control mt-2">
                                <input type="checkbox" class="form-check-input" id="lookingFor5" name="data[lookingFor5]">
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

            <div class="form-group">
                <div class="col text-center mt-3">
                    <h5>Vælg dine interesser</h5>
                </div>
                <div class="pill-checkbox mt-3">
                    <input type="checkbox" id="interest1" name="data[interest1]" class="hidden-checkbox">
                    <label for="interest1" class="pill">Fiskeri</label>
                    <input type="checkbox" id="interest2" name="data[interest2]" class="hidden-checkbox">
                    <label for="interest2" class="pill">Gaming</label>
                    <input type="checkbox" id="interest3" name="data[interest3]" class="hidden-checkbox">
                    <label for="interest3" class="pill">Sport</label>
                    <input type="checkbox" id="interest4" name="data[interest4]" class="hidden-checkbox">
                    <label for="interest4" class="pill">Kreativitet</label>
                    <input type="checkbox" id="interest5" name="data[interest5]" class="hidden-checkbox">
                    <label for="interest5" class="pill">Madlavning</label>
                    <input type="checkbox" id="interest6" name="data[interest6]" class="hidden-checkbox">
                    <label for="interest6" class="pill">Rejse</label>
                    <input type="checkbox" id="interest7" name="data[interest7]" class="hidden-checkbox">
                    <label for="interest7" class="pill">Bøger</label>
                    <input type="checkbox" id="interest8" name="data[interest8]" class="hidden-checkbox">
                    <label for="interest8" class="pill">Fitness</label>
                    <input type="checkbox" id="interest9" name="data[interest9]" class="hidden-checkbox">
                    <label for="interest9" class="pill">Kæledyr</label>
                    <input type="checkbox" id="interest10" name="data[interest10]" class="hidden-checkbox">
                    <label for="interest10" class="pill">Indretning</label>
                    <input type="checkbox" id="interest11" name="data[interest11]" class="hidden-checkbox">
                    <label for="interest11" class="pill">Bylivet</label>
                </div>
            </div>

        <div class="container">
            <div class="row">
                <div class="col text-center mt-5">
                    <button id="step3button" type="submit" class="button-1 btn btn-orange w-100 text-white rounded-5">Fortsæt</button>
                </div>
            </div>
        </div>
</form>

</div>
</div>
</div>
</section>
</form>




<?php include "includes/scripts.php"
?>

<script src="js/opretbruger.js"></script> <!-- Forbinder javascriptet til siden - Opret bruger  -->

</body>
</html>

