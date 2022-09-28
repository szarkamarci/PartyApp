# Szoftverfejlesztési módszertanok
## PartyApp



## Tartalom



1. **Tartalom**

2. **Követelmények**

    1. Funkcionális követelmények

    2. Jogi követelmények

3. **Fejlesztői dokumentáció**

    1. Feladat 

    2. Környezet 

    3. Tervezés 

    4. Megvalósítás menete 

    5. Tesztelés

    6. Fejlesztési lehetőségek

    7. Verzió kezelés

4. **Szerzők** 

# Követelmények

#### Funkcionális követelmények:

## 1. A rendszer céljai és nem céljai:

Céljai:

A PartyApp egy olyan web alapú alkalmazás amely lehetővé teszi felhasználói számára , hogy szórakozási lehetőségeiket mind kereső, mind szervező oldalról egyszerű módon kiteljesíthessék. A szervezők számára egy új lehetőség arra, hogy eseményeiket egy új platformon népszerűsíthessék és visszajelzést kapjanak az eseményük érdeklődési köréről. A "tagok" számára könnyed válogatást nyújt a közelgő látogatható rendezvényekről, érdeklődésük szerint.

Két számmal való műveletek elvégzése.

Nem célja:

A hirdetett események, illetve szervezők bármilyen minősítése és reklámozása

Például:

Szórakozóhely, esemény személyes nem tetszés alapján való nyilvános leértékelése

## 2. Jelenlegi helyzet leírása:

A való életben egyszerűbb lehetne a szórakozni vágyó fiatalok számára, vagy a szórakozást biztosító helyek rendezvényszervezői számára egy egyszerű módszer arra, hogy időben, nem a pillanat hevében döntsenek arról ,hová szeretnének menni szórakozni. Napjainkban a számítógép és mobiltelefon használata belekerült a napi rutinunkba, így egyszerűen, az app használatával a felhasználóknak lehetőséget nyújt az app mind szórakozási, mind létrehozási vágyaik teljesítésére. 

## 3. Vágyálom rendszer leírása: 

Egy weboldal létrehozása, először Desktopra fókuszálva, a későbbiekben mobilon is jól megjeleníthetően. Használata hasonló lesz több népszerű mobilos társkereső app használatához, "jobbra ha tetszik, balra ha nem".

## 4. Követelménylista:

Az app használatához elegendő kattintani, mint "tag", eseményfeltöltéshez viszont a billentyűzet használata is elegendő. A támogatott böngészők Chrome, Firefox, Safari

## 5. Tesztelés:

Automatikus: a teszteket számítógép értékeli ki, és egyértelmű visszajelzést ad a sikerről. 
Előny:
Könnyen megismételhető
Akár nagyon sok tesztesetet is végig tud nézni
Tesztelés közben (ideális esetben) nem hibázik 
Hátrány:
Teszteseteket pontosan meg kell fogalmazni
Nem minden esetben alkalmazható

A teszteket a TamperMonkey nevű böngészőbővítmény segítségével létrehozott botokkal hajtjuk végre.
## 6. Igényelt üzleti folyamatok:

A PartyApp megkönnyíti a keresést és a válogatást egyaránt a rendszerezetlen események között, az app erre nyújt megoldást, rendszerezi a felhasználói számára a kiszemelt lehetőségeket.

## 7. Használati esetek:

Hétköznapokban, böngészés, véletlenszerű böngésző, későbbiekben telefonhasználat során, unaloműzés céljából.

## 8. Képernyő tervek:

![](login.png)

## 9. Fogalomtár:

frontend:

-A front-end (néha frontend vagy front end formában is írják) a programoknak, weboldalaknak az a része, amelyik a felhasználóval közvetlenül kapcsolatban van. Feladata az adatok megjelenése, befogadása a felhasználó (vagy ritkábban egy másik rendszer) felől.

Weboldal esetén a front-end fejlesztő foglalkozik például a HTML, a CSS vagy egyes JavaScript kódokkal.

backend:

-A back-end (néha backend vagy back end formában is írják) a programoknak, weboldalaknak a hátsó, a felhasználó elől rejtett, a tényleges számításokat végző része. Feladata a front‑end (a felhasználóval kapcsolatban lévő rész) felől érkező adatok feldolgozása, és az eredményeknek a front‑end felé történő visszajuttatása.

Weboldal esetén a back-end fejlesztő foglalkozik például a PHP kódok és az adatbázis kezelésével.

adatbázis:

-Az adatbázis azonos minőségű (jellemzőjű), többnyire strukturált adatok összessége, amelyet egy azok tárolására, lekérdezésére és szerkesztésére alkalmas szoftvereszköz kezel.[1]

Az adatbázis fogalma nem keverendő össze az adatbázis-kezelővel, amely egy eszköz az adatbázis működtetésére, rendszerszintű és felhasználói folyamatainak szervezésére.

Az adatbázisok célja adatok megbízható, hosszú távon tartós (idegen szóval: perzisztens) tárolása és viszonylag gyors visszakereshetőségének biztosítása.

redundancia

-Redundancia az információelméletben az információ- vagy üzenetátvitelre használt csatornán maximálisan egyszerre átvihető bitek számának és az aktuális információ vagy üzenet bitjei számának a különbsége. Az adattömörítés egy lehetséges mód a nem kívánt redundancia csökkentésére, a különféle ellenőrzőösszegek pedig hibajavítás céljából növelik a redundanciát, ha az átvitel egy zajos csatornán folyik, ahol a zaj csökkenti az átviteli kapacitást.

## Fejlesztői dokumentáció

#### Feladat:

Az applikáció a szoftverfejlesztési módszertanok tárgy beadandó projekt munkájaként készül.

A PartyApp egy olyan web alapú alkalmazás amely lehetővé teszi felhasználói számára , hogy szórakozási lehetőségeiket mind kereső, mind szervező oldalról egyszerű módon kiteljesíthessék. Kezdeti fázisban fejlesztés megkönnyítése érdekében Desktop-os felületet támogatja, az alkalmazás későbbiekben viszont Mobil eszközökkel is kompatibilis lesz. A nagy projekt részeként a későbbiekben beolvadó login felület a tárgy követelményei alapján felosztott évi teendők mini projekt részét képezi. Az alkalmazás várható elkészülési ideje 2022. december.

#### Környezet:

Linux/Windows 10, Php, javascript, css, html, MySql

#### Tervezés:

A projektünket a Trello nevű alkalmazással terveztük, ami átláthatóságot, egyszerűséget biztosít és a csapatban dolgozást lényegesen megkönnyebbíti, valamint a személyre szabott feladatok jól elkülöníthetők, egyértelműen látszik minden csapattag haladása.

#### Megvalósítás menete:

A tervezési folyamatokat követően a fejlesztést verziókezelő segítségével megkezdjük.
 A fejlesztési folyamatokat több ágra osztjuk a fejlesztők között majd az egyes ágak elkészültével mergeljük azokat.
 A fejlesztés előrehaladtával folyamatosan teszteket futtatunk, melyek elősegíti az esetleges hibák felfedezését.
A frontend fejlesztéséhez php, javascript, html és css nyelven történik.
A backend fejlesztéséhez MySQL és php nyelveket használ a fejlesztőcsapat. Az adatbázis kapcsolásának táblájáról kép is található a dokumentációban. Az adatbázis fejlesztése során a fejlesztők a stabilitás mellett a redundancia csökkentést egyik fő céljukként tűzték ki az adatok gyorsabb elérésének érdekében.

#### Jelenlegi üzleti folyamatok:

A mai világban rengeteg szórakozási lehetőség van, de ezekről a közösségi médián tájékozódhatunk nagyrészt, nincsenek összegyűjtve, se fókuszba helyezve érdeklődési kör alapján.

