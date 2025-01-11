<?php
require_once 'VeturatDB.php';

$veturatDB = new VeturatDB();

$veturat = [
    [
        'horsepower' => '820 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale 320 km/h',
        'pershpejtimi' => '0-100 km/h:2.8 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => 'Rreth 12 per 100 km/h',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '1000000',
        'description' => 'Kategoria: Sportive.'

    ],
    [
        'emri' => 'Audi R8',
        'motorri' => '5.2L V10',
        'horsepower' => '620 kuaj fuqi',
        'shpejtesia' => 'Shpejtësia maksimale: 329 km/h',
        'pershpejtimi' => '0-100 km/h: Rreth 3.1 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => '13-14 litra për 100km',

        'komoditeti'=>'',
        'materialet_brenda'=>'',

        'price' => '180000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Lamborghini',
        'motorri' => '6.2L V10',
        'horsepower' => '900 kuaj fuqi',
        'shpejtesia' => 'Shpejtësia maksimale: 340 km/h',
        'pershpejtimi' => '0-100 km/h: Rreth 2.2 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => '14 litra për 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '1600000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Koenigsegg CcX',
        'motorri' => '5.0L V8 twin-turbocharged',
        'horsepower' => '1000 kuaj fuqi',
        'shpejtesia' => 'Shpejtësia maksimale: Mbi 447 km/h (një nga veturat më të shpejta në botë)',
        'pershpejtimi' => '0-100 km/h: Vetëm 2 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => '18-10 litra për 100 km',
        'komoditeti' => '',
        'materialet_brenda'=>'',
        'price' => '4900000',
        'description' => 'Kategoria: Sportive',
        
    ],
    [
        'emri' => 'Acura',
        'motorri' => '5.0L V8 ',
        'horsepower' => '730 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 335km/h',
        'pershpejtimi' => '0-100 km/h: Rreth 2.9 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 10-11 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '1100000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Ferrari',
        'motorri' => '6.6L V12 ',
        'horsepower' => ' 978 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 360km/h',
        'pershpejtimi' => ' 0-100 km/h: Rreth 2 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 14-16 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '1000000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Porsche 911',
        'motorri' => '4.2L V16 ',
        'horsepower' => ' 600 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 300km/h',
        'pershpejtimi' => ' 0-100 km/h: Rreth 3.5 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 10-11 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '900000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Buggati Chiron',
        'motorri' => '8.2L V14 ',
        'horsepower' => ' 999 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 399km/h',
        'pershpejtimi' => ' 0-100 km/h: Rreth 1.5 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 18-19 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '4000000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Pagani Zonda',
        'motorri' => ' 5.3L V12 Turbo(benzine,hybrid)',
        'horsepower' => ' 900+ kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 370km/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 3 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 15-17 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '600000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Ferrari 458 Italia',
        'motorri' => ' 4.5L V8 atmosferik',
        'horsepower' => ' 570 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 325km/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 3.4 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 12-13 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '650000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Ferrari F12 LaFerrari',
        'motorri' => ' 6.3L V12 atmosferik ',
        'horsepower' => ' 730 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 340/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 3.1 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 14-15 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '1000000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Ferrari 488',
        'motorri' => '  3.9L V8 turbocharged ',
        'horsepower' => ' 661 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 330/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 3.0 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 18 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '650000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Ferrari 430',
        'motorri' => '  4.3L V8 atmosferik',
        'horsepower' => ' 438 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 315/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 4.0 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 12 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '30000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Mc Laren',
        'motorri' => ' 3.8L V8 twin-turbocharged + motor elektrik',
        'horsepower' => ' 903 kuajfuqi (727 kuajfuqi nga motori V8 + 177 kuajfuqi nga motori elektrik)',
        'shpejtesia' => 'Shpejtesia maksimale: 350/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 2.8 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 19 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '151000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Mc Laren 540C',
        'motorri' => '3.8L V8 twin-turbocharged',
        'horsepower' => '540 kuajfuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 320/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 3.5 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 15 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '140000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Mc Laren 12C',
        'motorri' => ' 3.8L V8 twin-turbocharged',
        'horsepower' => '592 kuajfuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 333/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 3.1 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 16 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '170000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Mc Laren 570S',
        'motorri' => ' 3.8L V8 twin-turbocharged',
        'horsepower' => '562 kuajfuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 328/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 3.2 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 14 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '190000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Range Rover',
        'motorri' => ' 3.0L V6 deri në 5.0L V8 supercharged',
        'horsepower' => '575 kuajfuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 280/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 4.5 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 12 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '76000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Sport Porsche',
        'motorri' => ' 3.0L turbocharged boxer-6',
        'horsepower' => '640 kuajfuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 330/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 3.2 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 14 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '190000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Koenigseg White Agera',
        'motorri' => '5.0L V8 twin-turbo',
        'horsepower' => 'Deri ne 1,160 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: Mbi 400km/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 2.8 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 17 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '4900000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Koenigseg CcxR',
        'motorri' => '4.8L V8 twin-supercharged',
        'horsepower' => 'Deri ne 1,018 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 395km/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 3.1 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 16 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '4000000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'Koenigseg CcxR',
        'motorri' => '4.8L V8 twin-supercharged',
        'horsepower' => 'Deri ne 1,018 kuaj fuqi',
        'shpejtesia' => 'Shpejtesia maksimale: 395km/h',
        'pershpejtimi' => ' 0-100 km/h: Vetem 3.1 sekonda',
        'transmission' => 'Automatik',
        'konsuminaftes' => ' Rreth 16 litra per 100 km',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '4000000',
        'description' => 'Kategoria: Sportive'
    ],
    [
        'emri' => 'AMG GT',
        'motorri' => 'V8 Bi turbo',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Sediljet me masazh,ndriqim ambiental',
        'materialet_brenda'=>'Brendesia:perzirje e lekures me te mire dhe teknologjise me te avancuar,ekrani digjital',
        'price' => '170000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Mercedes CLA',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Ekranet e digjitalizurara,sediljet e rehatshme ',
        'materialet_brenda'=>'Kabina është e veshur me materiale premium, duke përfshirë lëkurë të butë dhe alumin të përpunuar,
         ndërsa sistemi MBUX me kontroll zanor e bën çdo udhëtim të lehtë dhe të këndshëm',
        'price' => '76000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Bugatti Veyron',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Veyron përmban detaje unike si ora analoge nga Parmigiani Fleurier e vendosur në kabinë, e cila mund të hiqet dhe përdoret si një aksesor i dorës.',
        'materialet_brenda'=>'Materialet e brendshme janë të përzgjedhura me kujdes, duke përfshirë lëkurën më të mirë nga rajone të veçanta të Evropës.',
        'price' => '5000000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Lamborghini Hurracan Coupe',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Ekranet digjitale janë të përshtatura për të ofruar të gjitha të dhënat e makinës në një mënyrë të qartë dhe intuitive.',
        'materialet_brenda'=>'Pronari mund të personalizojë çdo aspekt të makinës,
         duke përfshirë stitching-in e lëkurës dhe detajet e karbonit në kabinë.',
        'price' => '1900000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Lamborghini Aventador Blue',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Interieri përmban një kombinim unik të lëkurës dhe materialeve të avancuara teknologjikisht.',
        'materialet_brenda'=>'Sistemi i kontrollit të klimës, opsionet e personalizuara për ngjyrat dhe stitching, dhe ndjesia futuristike e kabinës e bëjnë atë një eksperiencë të rrallë.
         Një opsion veçanërisht luksoz është programi Ad Personam, ku klientët mund të krijojnë një Aventador unike..',
        'price' => '1400000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'BMW M7',
        'motorri' => 'TwinPower V8',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'brendësia është një përzierje e teknologjisë dhe artit.
         Sediljet e lëkurës Merino, me qepje artizanale dhe detaje të fibrës së karbonit, krijojnë një atmosferë unike.',
        'materialet_brenda'=>'Sistemi i audios Bowers & Wilkins e bën përvojën akoma më të mirë, duke ofruar luks në çdo detaj',
        'price' => '49000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Audi RS7',
        'motorri' => 'V8 Bi-Turbo',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Me linjat e saj të fuqishme dhe detajet sportive, kjo veturë është një kryevepër estetike.',
        'materialet_brenda'=>' Kabina është e pajisur me ekranet OLED, sedilje të veshura me lëkurë Nappa, dhe ndriçim ambiental të personalizueshëm.',
        'price' => '170000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Bentley',
        'motorri' => 'V12 ',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'kjo makinë është ndërtuar me materiale më të mira si dru i punuar me dorë dhe lëkurë premium.',
        'materialet_brenda'=>'Brendësia është e pajisur me sedilje të ngrohura dhe ventiluar, një sistem audio Naim që ofron përvojë akustike unike dhe një konsol qendror të personalizueshëm.',
        'price' => '300000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Tesla',
        'motorri' => ' ',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '0-100km/h: Me pak se 2 sekonda',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Tesla Model S Plaid përfaqëson luksin e së ardhmes me një performancë elektrike të paarritshme',
        'materialet_brenda'=>'Brendësia e saj minimaliste përfshin një ekran të madh qendror me teknologjinë më të fundit, sedilje të rehatshme me lëkurë vegane dhe një sistem audio të avancuar',
        'price' => '300000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Audi RSQ8',
        'motorri' => 'V8 Bi-Turbo ',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Audi RS Q8 është një SUV luksoz që ofron performancë dhe komoditet',
        'materialet_brenda'=>'Kabina është një hapësirë e rafinuar me lëkurë Valcona, qepje artizanale,
        dhe teknologji cutting-edge si ekrani MMI Touch Response dhe sistemin e audios Bang & Olufsen',
        'price' => '250000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Masserati',
        'motorri' => 'V8 Twin-Turbo ',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Maserati Levante Trofeo është një përfaqësues perfekt i elegancës italiane dhe performancës sportive',
        'materialet_brenda'=>'Kabina është e pajisur me lëkurë Pieno Fiore, detaje të fibrës së karbonit dhe një sistem audio Harman Kardon.',
        'price' => '176000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Audi A5',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Audi A5 përfaqëson një makinë coupe elegante dhe praktike, e cila shquhet për interierin e saj të qetë dhe të sofistikuar.',
        'materialet_brenda'=>'Materialet e përdorura, si lëkura e butë dhe alumini i pastër, krijojnë një ambient relaksues.
         Teknologjia përfshin një ekran të madh të ndjeshëm ndaj prekjeve, drita ambientale dhe opsione të avancuara për sistemin',
        'price' => '19000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'BMW M5',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'BMW M5 kombinon fuqinë ekstreme me luksin. Sediljet janë të mbështjella me lëkurë Merino, me ngrohje, ajrim dhe masazh.',
        'materialet_brenda'=>'Kabina është e pajisur me një ekran të madh për infotainment, një sistem audio premium Harman Kardon ose Bowers & Wilkins, dhe ndriçim ambiental.
        Cilësia e përpunimit të brendshëm është në nivel të lartë, ndërsa teknologjia e përparuar siguron rehati dhe luks në çdo udhëtim.',
        'price' => '100000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'BMW 3',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'BMW M3 ofron një përvojë të rafinuar sportive dhe luksoze. Interieri përmban lëkurë të klasit të lartë dhe elemente të karbonit.',
        'materialet_brenda'=>'Teknologjia përfshin një sistem infotainment me ekran të madh, ndriçim të personalizuar dhe një sistem audio me cilësi të lartë.
         Hapësira e kabinës është e menduar për të ofruar rehati për shoferin dhe pasagjerët, edhe në udhëtime të gjata.',
        'price' => '33000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Porsche Cayenne',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Porsche Cayenne është SUV-i që kombinon performancën me luksin.',
        'materialet_brenda'=>'Kabina është e mbështjellë me lëkurë të nivelit të lartë,
         dhe përfshin elemente si ekranet digjitale, dritat ambientale, dhe sistemet e ventilimit të sediljeve. Sistemi audio Bose ose Burmester e bën përvojën e udhëtimit më të këndshme.',
        'price' => '50000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Mercedes E class',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'E-Class është një makinë që kombinon luksin e përpunuar me funksionalitetin e përditshëm. Kabina përmban sedilje të mbështjella me lëkurë premium dhe detaje alumini ose druri.',
        'materialet_brenda'=>'Ndriçimi ambiental dhe një sistem infotainment MBUX me dy ekrane të mëdha e bëjnë përvojën e udhëtimit të avancuar dhe moderne.
        Për pasagjerët e pasmë, hapësira është e bollshme, ndërsa opsionet si masazhi dhe ventilimi për sediljet ofrojnë rehati luksoze. Sistemi audio Burmester, funksionet e parkimit të asistuar, dhe sistemi i përparuar i filtrimit të ajrit e rrisin ndjeshëm cilësinë e përvojës në kabinë.',
        'price' => '70000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Audi RS6',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'RS6 Avant është një përzierje perfekte mes performancës dhe luksit.',
        'materialet_brenda'=>'Kabina përfshin një ndërthurje lëkure premium Valcona dhe Alcantara, ekranet e mëdha për informacionin e shoferit dhe pasagjerëve,
        dhe një sistem audio Bang & Olufsen 3D',
        'price' => '100000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Lamborghini Urus',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Urus është SUV-i i parë i Lamborghini-t dhe një shembull i luksit ekstrem në këtë kategori.',
        'materialet_brenda'=>'Kabina është e pajisur me një ndërthurje të lëkurës Alcantara dhe karbonit, një sistem infotainment të dyfishtë, dhe opsione për masazh në sedilje.
        Me një program personalizimi të gjerë, çdo Urus mund të bëhet unik sipas dëshirave të klientit',
        'price' => '300000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Tesla Model X',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Tesla Model X kombinon luksin me teknologjinë e avancuar. Dyert "Falcon Wing" janë një shfaqje e sofistikimit inxhinierik dhe ofrojnë një akses të veçantë në kabinë.',
        'materialet_brenda'=>'Brendësia përmban lëkurë ekologjike dhe një dizajn minimaliste që përqendrohet në funksionalitet dhe rehati. Ekrani qendror 17 inç kontrollon të gjitha aspektet e makinës, nga klima te argëtimi.
        Një sistem i avancuar i filtrimit të ajrit "Bioweapon Defense Mode" siguron pastërtinë e ajrit brenda kabinës. Model X është gjithashtu një makinë miqësore për familjet luksoze, me hapësirë të mjaftueshme dhe ndihmës për drejtimin plotësisht elektrik',
        'price' => '100000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Tesla Model Y',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Tesla Model Y është një SUV kompakt me një dizajn minimalist dhe të sofistikuar.',
        'materialet_brenda'=>'Kabina përfshin lëkurë ekologjike, një ekran të madh qendror për të kontrolluar të gjitha funksionet, dhe një hapësirë të bollshme për udhëtarët.
Teknologjia e përparuar e autopilotit e bën atë të dallohet në luksin e tij teknologjik.',
        'price' => '700000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Tesla Model S',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Tesla Model S ka një dizajn minimalist dhe aerodinamik, me linja të pastra dhe moderne që e bëjnë atë të duket si një makinë e ardhshme.',
        'materialet_brenda'=>'Kabina është shumë e stilizuar dhe është një shembull i luksit modern. Përmban një ekran të madh qendror, që kontrollon shumë nga funksionet e makinës, duke përfshirë klimën',
        'price' => '89000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'BMW X6',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>' BMW X6 shquhet për luksin modern dhe detajet teknologjike.',
        'materialet_brenda'=>'Kabina është projektuar për rehati maksimale, me sedilje ergonomike që përfshijnë funksione ngrohjeje, ventilimi dhe masazhi.
        Sistemi i ndriçimit ambiental ka një gamë të gjerë ngjyrash që krijojnë një atmosferë të personalizuar për udhëtimin tuaj',
        'price' => '27000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Masserati Quattroporte',
        'motorri' => 'V8 Twin-Turbo',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Maserati Levante Trofeo është një përfaqësues perfekt i elegancës italiane dhe performancës sportive.',
        'materialet_brenda'=>'Kabina është e pajisur me lëkurë Pieno Fiore, detaje të fibrës së karbonit dhe një sistem audio Harman Kardon.',
        'price' => '176000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Merceds S-Class',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'S-Class është sinonim i luksit absolut në industrinë e makinave. Kabina është një përzierje e artizanatit të lartë dhe teknologjisë moderne.',
        'materialet_brenda'=>'Sediljet ofrojnë funksione masazhi, ngrohjeje, dhe ajrimi, ndërsa janë të mbuluara me lëkurë Nappa ose lëkurë ekskluzive Designo. Panelet e drurit të përpunuar me dorë dhe ndriçimi ambiental me 64 ngjyra krijojnë një atmosferë të qetë dhe elegante.
        Teknologjia përfshin një sistem infotainment MBUX me dy ekrane të mëdha OLED, një sistem audio Burmester 4D.',
        'price' => '120000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Porsche Cayman',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Porsche Cayman përfaqëson një makinë sportive të balancuar, ku luksi dhe performanca bashkëjetojnë në harmoni.',
        'materialet_brenda'=>'Kabina përfshin materialet më cilësore, si lëkura premium dhe panele alumini, duke dhënë një ndjesi ekskluzive.
       Sediljet janë ergonomike dhe të personalizueshme për rehati maksimale, ndërsa hapësira e brendshme është e fokusuar në shoferin.
        Teknologjia përfshin një sistem infotainment të avancuar Porsche Communication Management (PCM) me navigim, Apple CarPlay.',
        'price' => '70000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Masserati Gran Turismo',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Maserati GranTurismo përfaqëson elegancën italiane me një përzierje të performancës dhe luksit',
        'materialet_brenda'=>'Kabina është një shembull i përpunimit artizanal, ku çdo detaj është i punuar me dorë. Lëkura Poltrona Frau dhe druri i lëmuar ofrojnë një ndjesi të veçantë cilësie.
         Një sistem argëtimi me ekran me prekje, një sistem audio Harman Kardon ose Bowers & Wilkins, dhe funksionalitete të avancuara si navigimi satelitor e bëjnë këtë makinë një zgjidhje të përsosur për ata që kërkojnë luks dhe stil.',
        'price' => '180000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Range Rover Evoque',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Range Rover është një linjë luksoze SUV-sh nga prodhuesi britanik Land Rover, pjesë e Jaguar Land Rover.',
        'materialet_brenda'=>'Kjo seri dallohet për dizajnin elegant, performancën e fuqishme dhe aftësitë e shkëlqyera për terrene të vështira.
         Me materiale të cilësisë së lartë dhe teknologji moderne, Range Rover kombinon komoditetin dhe luksin me funksionalitetin praktik',
        'price' => '26000',
        'description' => 'Kategoria: Luksoze'
    ],
    [
        'emri' => 'Golf 6',
        'motorri' => '1.6',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => '4-5 litra ne 100km/h ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '8000',
        'description' => 'Kategoria: Ekonomike'
    ],
    [
        'emri' => 'Golf 6 R-line',
        'motorri' => '2.0 TDI',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => 'Shpenzime te ulta ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '10000',
        'description' => 'Kategoria: Ekonomike'
    ],
    [
        'emri' => 'Golf 7',
        'motorri' => '2.0',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => '4-5 litra ne 100km/h ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '12000',
        'description' => 'Kategoria: Ekonomike'
    ],
    [
        'emri' => 'Pasat CC ',
        'motorri' => '2.0',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => '4-6 litra ne 100km/h ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '15000',
        'description' => 'Kategoria: Ekonomike'
    ],
    [
        'emri' => 'Passat Caravan',
        'motorri' => '1.9',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => '4.5-5.5 litra ne 100km/h ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '18000',
        'description' => 'Kategoria: Ekonomike'
    ],
    [
        'emri' => 'Polo',
        'motorri' => '1.2',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => '4.4-5 litra ne 100km/h ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '7000',
        'description' => 'Kategoria: Ekonomike'
    ],
    [
        'emri' => 'BMW X7',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Veture me komoditet te larte me kapacitet deri ne 7 pasagjere',
        'materialet_brenda'=>'',
        'price' => '75000',
        'description' => 'Kategoria: Familjare'
    ],
    [
        'emri' => 'Tiguan',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => 'I ulet ',
        'komoditeti'=>'Veture me komoditet te larte me kapacitet deri ne 5 pasagjere,me stabilitet ne qdo terren',
        'materialet_brenda'=>'',
        'price' => '20000',
        'description' => 'Kategoria: Familjare'
    ],
    [
        'emri' => 'Seat Ibiza',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => 'Shume i ulet ',
        'komoditeti'=>'Kapacitet deri ne 5 pasagjere,kryesisht per familje te vogla me bagazh te bollshem',
        'materialet_brenda'=>'',
        'price' => '8000',
        'description' => 'Kategoria: Familjare'
    ],
    [
        'emri' => 'Golf 8',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' I ulet me mundsi hibride deri ne 50kilometra',
        'komoditeti'=>'Kapacitet deri ne 5 pasagjere,me hapesire te mjaftueshme dhe bagazh te bollshem, i pershtatshem per perdorim te perditshem familjar.',
        'materialet_brenda'=>'',
        'price' => '35000',
        'description' => 'Kategoria: Familjare'
    ],
    [
        'emri' => 'Seat Taraco',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Veture me komoditet te larte me kapacitet deri ne 7 pasagjere,hapsire te mjaftueshme per te gjithe familjen dhe po ashtu bagazh te bollshem.',
        'materialet_brenda'=>'',
        'price' => '39000',
        'description' => 'Kategoria: Familjare'
    ],
    [
        'emri' => 'Range Rover',
        'motorri' => '',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => '',
        'konsuminaftes' => ' ',
        'komoditeti'=>'Kapacitet deri ne 5 pasagjere,bagazh te madh,veture ideale per udhtime te gjata ose aventura familjare,sistemi terheqjes 4x4.',
        'materialet_brenda'=>'',
        'price' => '30000',
        'description' => 'Kategoria: Familjare'
    ],
    [
        'emri' => 'BMW E90',
        'motorri' => '2.0',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => 'Manual',
        'konsuminaftes' => ' ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '10000',
        'description' => 'Kategoria: OLD_Timer'
    ],
    [
        'emri' => 'Mercedes 190',
        'motorri' => '2.5 Dizel',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => 'Manual',
        'konsuminaftes' => ' ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '5000',
        'description' => 'Kategoria: OLD_Timer'
    ],
    [
        'emri' => 'Mercedes E180',
        'motorri' => '2.5 Dizel',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => 'Manual',
        'konsuminaftes' => ' ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '7000',
        'description' => 'Kategoria: OLD_Timer'
    ],
    [
        'emri' => 'Golf 2 GTI',
        'motorri' => '2.0 Benzin',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => 'Manual',
        'konsuminaftes' => ' ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '6000',
        'description' => 'Kategoria: OLD_Timer'
    ],
    [
        'emri' => 'Golf 2 ',
        'motorri' => '1.6 Benzin',
        'horsepower' => '',
        'shpejtesia' => '',
        'pershpejtimi' => '',
        'transmission' => 'Manual',
        'konsuminaftes' => ' ',
        'komoditeti'=>'',
        'materialet_brenda'=>'',
        'price' => '4000',
        'description' => 'Kategoria: OLD_Timer'
    ],

];

$veturatDB->shtoVeturat($veturat);


$veturatDB->perditesoVeturat('Aventador', [
    'price' => '1000000',
    'description' => 'Kategoria: Sportive'
]);

$veturatDB->perditesoVeturat('Koenigsegg CcX', [
    'shpejtesia' => 'Shpejtesia maksimale: Mbi 447km/h'
]);

$veturat = $veturatDB->merrVeturat();
foreach ($veturat as $vetura) {
    echo "<h2>" . htmlspecialchars($vetura['emri']) . "</h2>";
    echo "<p>" . htmlspecialchars($vetura['motorri']) . "</p>";
    echo "<p>" . htmlspecialchars($vetura['horsepower']) . " kuaj fuqi</p>";
    echo "<p>" . htmlspecialchars($vetura['shpejtesia']) . "</p>";
    echo "<p>" . htmlspecialchars($vetura['pershpejtimi']) . "</p>";
    echo "<p>" . htmlspecialchars($vetura['transmission']) . "</p>";
    echo "<p>Konsum: " . htmlspecialchars($vetura['konsuminaftes']) . "</p>";
    echo "<p>Price: €" . number_format($vetura['price'], 2) . "</p>";
    echo "<p>" . htmlspecialchars($vetura['description']) . "</p><br>";
}
//operacioni CRUD i lene ne komente per arsye qe nese e lajm pa komente nuk mund te shohim rezultatin siq duhet ne back end
//$teGjithaVeturat = $veturatDB->merrVeturat();
//print_r($teGjithaVeturat);

$vetura = $veturatDB->merrVetura('Aventador');
print_r($vetura);

// $veturatDB->fshiVetura('Aventador');

?>
