// Denne Javascript fil bliver brugt til oprettelse af bruger (flowet)

// Her har vi en funktion der gør at når du klikker på step1-knappen, går den videre til step 2 osv.
// KNAP > EVENTET > NÅR DU KLIKKER > FUNKTION > STEP1 TOOGLER CLASSEN D-NONE
step1button.addEventListener('click', function () {
    step1.classList.toggle("d-none");
    step2.classList.toggle("d-none");
});

step2button.addEventListener('click', function () {
    step2.classList.toggle("d-none");
    step3.classList.toggle("d-none");
});

// KNAP > EVENTET > NÅR DU KLIKKER > FUNKTION > SIGER BROWSER GÅ TIL (LINK)
// step3button.addEventListener('click', function () {
//     window.location.href = "oprettelseslut.php";
// });