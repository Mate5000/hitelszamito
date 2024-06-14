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




function hitel2() {
    const havit2 = document.getElementById('havit2').value;
    const ekamat2 = document.getElementById('ekamat2').value;
    const torl2 = document.getElementById('torl2').value;

    fetch('api/subcore.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            havit2: havit2,
            ekamat2: ekamat2,
            torl2: torl2
        })
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('maxhitel').innerText = data.maxhitel;

        const etabla2 = document.getElementById('etabla2').getElementsByTagName('tbody')[0];
        etabla2.innerHTML = '';
        data.adatok2.forEach((honap, index) => {
            const row = etabla2.insertRow();
            const cell1 = row.insertCell(0);
            const cell2 = row.insertCell(1);
            const cell3 = row.insertCell(2);
            const cell4 = row.insertCell(3);
            const cell5 = row.insertCell(4);
            cell1.innerHTML = index + 1;
            cell2.innerHTML = honap.startegyenleg;
            cell3.innerHTML = honap.maradek;
            cell4.innerHTML = honap.havit2;
            cell5.innerHTML = honap.osszfiz;
        });
    });
}

document.addEventListener('DOMContentLoaded', function() {
    var calcButton = document.getElementById('calcstart2');
    calcButton.addEventListener('click', function() {
        var ktart = document.getElementById('havit2').value;
        var ekamat = document.getElementById('ekamat2').value;
        var torl = document.getElementById('torl2').value;

        var kitoltve = ktart !== "" && ekamat !== "" && torl !== "";
        var szam = !isNaN(ktart) && !isNaN(ekamat) && !isNaN(torl);

        if (!kitoltve || !szam) {
            alert("Nincs minden mező/nem számmal van kitöltve.");
        } else {
            console.log("started");
            hitel2();
        }
    });
});

