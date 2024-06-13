<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hitelkalkulátor by Máté</title>
    <link rel="stylesheet" href="css/index.css" />
  </head>
  <body>
   
    <div class="demo-page">
      <div class="demo-page-navigation">
        <nav>
          <ul>
            <li>
              <a href="#kezdolap">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"-
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-sliders"
                ><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Kezdőlap</a
              >
            </li>
            
            <li>
              <a href="#konverter">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                Számológép</a
              >
            </li>
            <li>
              <a href="#github">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-github"
                >
                  <path
                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
                  />
                </svg>
                Github</a
              >
            </li>
          </ul>
        </nav>
      </div>
      <main class="demo-page-content">
        <section>
          <div class="href-target" id="kezdolap"></div>
          <h1 class="package-name">Hitelkalkulátor<span style="font-size: 12px;">by Máté</span></h1>
          
          <p>
            Ez egy egyszerű hitelkalkulátor oldal, mely segít kiszámoni a hitellel kapcsolatban felmerülő kérdéseket, mint pl. havi törlesztőrészlet, kamatozás utáni tartozás, stb. 
            <!-- <br>Az oldal megfelelő működéséhez szükséges, hogy a böngészőben engedélyezve legyenek (<span style="font-style: italic;">alapértelmezetten engedélyezettek is</span>) a JavaScriptek, mivel egy ilyen script gondoskodik, hogy a PHP végpontra eljuttassa az kiszámolandó adatokat, majd az eredményket megjelenítse a felhasználónak. -->
          </p>
          
          <strong>Funciók:</strong>
          <ul>
            <li>Havi törlesztés kiszámolása</li>
            <li>Kamatozás utáni összeg kiszámítása</li>
            <li>Adatok táblázatba rendezése, hómapokra lebontva</li>
            <li>Éves kamat, törlesztés időtartalma, kezdeti tartozás megadása</li>
          </ul>
        </section>
        <section>
            
          <div class="href-target" id="konverter"></div>
          <h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
            Számológép
          </h1>
          <div class="nice-form-group">
            <label>Kezdeti tartozás:</label>
            <input type="number" id="ktart" placeholder="pl. 10000" />
          </div>
          <div class="nice-form-group">
            <label>Éves kamat:</label>
            <input type="number" id="ekamat" placeholder="pl. 10%" />
          </div>
          <div class="nice-form-group">
            <label>Törlesztés időtartama (hónap):</label>
            <input type="number" id="torl" placeholder="pl. 15" />
          </div>
          
          <details>
              <summary style="text-align: right;">
                <button class="toggle-code" id="calcstart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                    Számolás!
                </button>
            </summary>
        </details>
        
        <script src="js/script.js"></script>
        </section>

        <!-- eredmeny -->
        <section>
            
          <div class="href-target" id="konverter"></div>
          <h1>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline><polyline points="7.5 19.79 7.5 14.6 3 12"></polyline><polyline points="21 12 16.5 14.6 16.5 19.79"></polyline><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
            Számolás eredménye<span style="font-size: 12px"> (havi kamatozás)</span>:
          </h1>
          <p style="margin-bottom: 0px;">Havi törlesztés: <span id="havi"></span><br>Összes kamat: <span id="osszkamat"></span><br>Összesen kamattal: <span id="osszfizetendo"></span></p>
          <p style="margin-bottom: 8px;" id="jelentesek">Oszlopok jelentésért katt ide</p>
          <script>
            document.getElementById('jelentesek').addEventListener('click', function() {
                alert("oszlop név: magyarázat\n\nHónap: hanyadik hónap\n\nFennmaradó tartozás: a havi törlesztő befizetése után mennyi tartozás maradt még\n\nBefizetve: az adott hónapban a törlesztés\n\nEddig befizetett: az adott hónapban a törlesztőrészlet befizetése után mennyit törlesztettünk a hitelből");
            });
          </script>
          <link rel="stylesheet" href="css/main.css">
          <table id="etabla" style="width: 100%;">
            <thead>
                <tr style="border: 1px solid black; ">
                    <th>Hónap</th>
                    <th>Fennmaradó tartozás</th>
                    <th>Befizetve</th>
                    <th>Eddig befizetett</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
          
        
        
        
        </section>
        
        <section>
          <div class="href-target" id="github"></div>
          <h1>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-github"
            >
              <path
                d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
              />
            </svg>
            Github
          </h1>
          <p>
            Ha valamilyen hibát találnál, vagy valami tipped lenne, akkor
            ne hezitálj, és nyiss egy pull requestet.
          </p>

          <a
            href="https://github.com/Mate5000/hitelszamito/"
            class="to-repo"
            target="_blank"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="feather feather-external-link"
            >
              <path
                d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"
              />
              <polyline points="15 3 21 3 21 9" />
              <line x1="10" y1="14" x2="21" y2="3" />
            </svg>
            Github repóm
          </a>
        </section>

        <footer>Készítette: <span style="font-weight: 600;">Kósa Máté</span></footer>
      </main>
    </div>
  </body>
</html>