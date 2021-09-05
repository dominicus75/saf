![Imgur](https://imgur.com/HxTRt1E!)

# Full-stack fejlesztői feladat

## 1. Környezet, leírás

Az **Új Nyugat Gimnázium** úgy döntött, hogy egy új, felhő alapú adminisztrációs szoftvert valósít meg. A felvételi iroda szeretné összegyűjteni és ebben az új programban tárolni a diákok legfontosabb adatait. Ráadásul azt is nyilván kell tartaniuk, hogy a diákok melyik tanulócsoportba iratkoztak be.

### Minden egyes tanulóról az alábbi részletezettséggel szeretnénk tárolni az adatokat:
- név
- nem
- születési hely
- születési idő
- géplevélcím
- tanulócsoport (legfeljebb 4 fakultás diákonként)

### A tanulócsoportok tulajdonságai:
- a csoport neve
- a csoport vezetője (szöveges formában, vagyis nem referenciaként)
- tantárgy (szöveges formában)
- a tanulócsoprt (gondolom létrehozásának, nem egyértelmű a megfogalmazás) ideje
- beíratkozott diákok

## 2. A feladat

Hozz létre egy adminisztrációs rendszert, ahol az iskola tárolhatja a fent említett adatokat a diákokról és a tanulócsoportokról. Amíg ezen dolgozol, kéretik odafigyelni a következőkre:

- János a felvételi irodáról kért egy oldalakra bontható, szűrhető listát a tanulókról (alapértelmezés szerint 10 fő/oldal felbontásban, ahol rá tud keresni a diák nevére és egy jelölőnégyzet segítségével tanulócsoportot tud hozzárendelni). Ezen felül szeretnénk, ha megjelenne az is, hogy egy tanuló melyik csoportba jelentkezett.
- Mártának, János aszisztensének a következő műveleteket kell elvégeznie a jobb sorsra érdemes diákkal:
    - Új diák hozzáadása
    - Létező diák szerkesztése
    - Diák törlése (a hozzá kapcsolódó jelentkezésekkel együtt)
    - Diák hozzárendelése egy tanulócsoporthoz (kéretik figyelemmel lenni az iskola idevonatkozó politikájára, mely szerint egy diák legfeljebb 4 csoport tagja lehet egyidejűleg)
    - Diák eltávolítása egy tanulócsoportból.
- Minden diák értesítessék géplevél útján minden a profilját érintő változásról. Például, ha egy diák hozzá lett adva egy csoporthoz, kapjon egy e-mail-t erről. Levélküldésre az iskola a Sparkpost SMTP szerverét használja (http://sparkpost.com/), de ezt nem muszály implementálni a projektben.
- A srácok az irodában szeretnék megnézni a programot, mielőtt az elkészülne, ezért regisztrációs és belépési felületet még nem kell készíteni hozzá.
- A program kezelőfelületének elrendezésének a csatolt ábra és leírás alapján kellene elkészíteni.

## 3. Kezelőfelület és elrendezés

Jony Ive (*a névnek véletlenszerűnek kell lennie - ez gondolom valami szójáték vagy vicc, amit nem értek*), az iskola designer-e létrehozott egy egyszerű elrendezés-tervet. Az iskola hivatalnokaival való első találkozásig kizárólag a nyitóoldal frontend-jét kell elkészíteni, viszont a többi oldalon nem feltétlenül kell követni ezt az elrendezési tervet. 

![Imgur](https://imgur.com/E6i2w9c.png)

### Elvárások:
- forráskód (*gondolom github-ra felpakolva*)
- adatbázismentés, mintaadatokkal
- lépésről lépésre telepítési útmutató, pdf formátumban
