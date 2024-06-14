
# Hitelkalkulátor

Ez egy egyszerű hitelkalkulátor oldal, mely segít kiszámoni a hitellel kapcsolatban felmerülő kérdéseket, mint pl. havi törlesztőrészlet, kamatozás utáni tartozás, stb. 


## Funciók

- Havi törlesztés kiszámolása
- Kamatozás utáni összeg kiszámítása
- Adatok táblázatba rendezése, hómapokra lebontva
- Éves kamat, törlesztés időtartalma, kezdeti tartozás megadása



## Installation

Klónozd a repo-t a webservered mappájába, és kész is :)

    
## Demo

[math.kosamate.hu](https://math.kosamate.hu)

## Hitel Törlesztési API

Ez az API kiszámítja havi törlesztő részletet, a teljes visszafizetendő összeget és a teljes kamatot egy adott hitelösszeg, kamatláb és hitel futamidő alapján. Emellett részletes bontást nyújt a törlesztési ütemezésről havonta.

### Endpoint

`POST /api/core.php`

### Request

JSON formátumban küldje az alábbi paramétereket:

| Paraméter | Típus  | Leírás                            |
|-----------|--------|-----------------------------------|
| `ktart`   | Szám   | Kezdő hitelösszeg (főösszeg).      |
| `ekamat`  | Szám   | Éves kamatláb (százalékban).      |
| `torl`    | Szám   | Hitel futamidő (hónapokban).      |

**Példa:**

```json
{
  "ktart": 100000,
  "ekamat": 5.0,
  "torl": 24
}
```

### Response

A válasz egy JSON objektum, amely az alábbi információkat tartalmazza:

| Mező            | Típus   | Leírás                                  |
|-----------------|---------|-----------------------------------------|
| `havifizetendo` | Szám    | Havi törlesztő részlet.                 |
| `osszfizetendo` | Szám    | Teljes visszafizetendő összeg.          |
| `osszkamat`     | Szám    | Teljes fizetendő kamat.                 |
| `adatok`        | Tömb    | Havi részletezésű törlesztési adatok tömbje, amely minden hónapról tartalmazza az alábbi információkat: |
| - `honap`       | Szám    | A hónap sorszáma.                       |
| - `hatralevo`   | Szám    | Hátralévő egyenleg az adott hónap végén.|
| - `havi`        | Szám    | Havi törlesztőrészlet az adott hónapra. |
| - `eddigfiz`    | Szám    | Az addig befizetett összeg.             |

**Példa válasz:**

```json
{
  "havifizetendo": 4382.45,
  "osszfizetendo": 105178.80,
  "osszkamat": 5178.80,
  "adatok": [
    {
      "honap": 1,
      "hatralevo": 97617.55,
      "havi": 4382.45,
      "eddigfiz": 4382.45
    },
    {
      "honap": 2,
      "hatralevo": 95224.81,
      "havi": 4382.45,
      "eddigfiz": 8764.90
    },
    ...
  ]
}
```
