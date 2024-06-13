function hitelszamitas() {
    const ktart = document.getElementById('ktart').value;
    const ekamat = document.getElementById('ekamat').value;
    const torl = document.getElementById('torl').value;

    // apira POST kérés küldése
    fetch('api/core.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            ktart: ktart,
            ekamat: ekamat,
            torl: torl
        })
    })
    .then(response => response.json()) // api JSON válaszának feldolgozása
    .then(data => {
        document.getElementById('havi').innerText = data.havifizetendo;
        document.getElementById('osszfizetendo').innerText = data.osszfizetendo;
        document.getElementById('osszkamat').innerText = data.osszkamat;

        const etabla = document.getElementById('etabla').getElementsByTagName('tbody')[0];
        etabla.innerHTML = '';
        // táblázat feltöltése adatokkal
        data.adatok.forEach((honap, index) => {
            const row = etabla.insertRow();
            const cella1 = row.insertCell(0);
            const cella2 = row.insertCell(1);
            const cella3 = row.insertCell(2);
            const cella4 = row.insertCell(3);
            cella1.innerHTML = index + 1;
            cella2.innerHTML = honap.hatralevo;
            cella3.innerHTML = honap.havi;
            cella4.innerHTML = honap.eddigfiz;
        });
    });
}





// ez validálja, hogy érvényes-e a bemenet, majd meghívja a hitelszamitas fv-t 
document.getElementById('calcstart').addEventListener('click', function(event) {
    
    event.preventDefault();

    var ktart = document.getElementById('ktart').value;
    var ekamat = document.getElementById('ekamat').value;
    var torl = document.getElementById('torl').value;

    var kitoltve = ktart !== "" && ekamat !== "" && torl !== "";
    var szam = !isNaN(ktart) && !isNaN(ekamat) && !isNaN(torl);

    if (!kitoltve || !szam) {
        alert("Nincs minden mező/nem számmal van kitöltve.");
    } else {
        console.log("started");
        hitelszamitas();
    }
});


