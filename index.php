<?php
include_once __DIR__ . "./Moduls/Movie.php";
include __DIR__ . "./partials/header.php";

$dataBaseMovies = [
    [
        "title" => "Le ali della libertà",
        "description" => "Maine, 1947: Andy Dufresne, vice-direttore di una banca di Portland, viene condannato a due ergastoli per l'uccisione della moglie e del suo amante campione di golf, benché egli proclami la sua innocenza. Viene imprigionato nel carcere di Shawshank, dove le guardie e il corrotto direttore Samuel Norton impongono la loro legge fatta di violenze gratuite e omicidi impuniti, di nascosto dallo Stato.",
        "img" => "./img/Le_ali_della_libertà_1994_film_blu-ray.png",
        "year" => "1994",
        "gen" => ["drammatico"],
    ],
    [
        "title" => "Il silenzio deli innocenti",
        "description" => "La comparsa di un folle e sadico serial killer che uccide e scuoia delle giovani ragazze motiva Jack Crawford, dirigente dell'FBI, a cercare l'aiuto del dottor Hannibal Lecter, ex psichiatra e criminologo, detenuto da oltre otto anni nel manicomio criminale di Baltimora, diretto dal dottor Chilton, con l'accusa di aver ucciso alcuni suoi pazienti e di averne divorato i corpi (Hannibal the Cannibal). Si ritiene infatti che Lecter possa sapere molte cose sull'assassino, soprannominato \"Buffalo Bill\", ma poiché il dottor Lecter rifiuta ogni collaborazione, Crawford decide di assegnare alla promettente recluta Clarice Starling l'incarico di risolvere il caso sperando che la giovane donna riesca a persuadere il folle psichiatra.",
        "img" => "./img/Il_silenzio_degli_innocenti.jpg",
        "year" => "1991",
        "gen" => [
            "thriller",
            "drammatico",
            "poliziesco",
            "giallo",
        ],
    ],
    [
        "title" => "La leggenda del pianista sull'oceano",
        "description" => "Inghilterra, secondo dopoguerra. Il trombettista Max Tooney entra in un negozio di dischi e strumenti musicali poco prima dell'orario di chiusura e si accorda con l'anziano proprietario per vendere per pochi spiccioli la sua vecchia tromba di marca Conn; prima di separarsene, chiede ed ottiene il permesso di suonarla per l'ultima volta. Il negoziante, sentendo la melodia suonata da Max, la riconosce come quella di un brano, eseguito al pianoforte, registrato su una vecchia matrice discografica da lui ritrovata, brano da cui è affascinato ma di cui non riesce ad identificare l'autore; si fa quindi raccontare da Max la storia di quel pianista, che Max definisce il suo più grande segreto, dicendo che in realtà è come se quel musicista non fosse mai esistito. Il brano è l'unico mai inciso da quello che fu il migliore amico di Max, Danny Boodman T.D. Lemon Novecento.",
        "img" => "./img/La_leggenda_del_pianista_sull'oceano_018.jpg",
        "year" => "1998",
        "gen" => [
            "drammatico",
            "musicale",
        ],
    ],
    [
        "title" => "Per un pugno di dollari",
        "description" => "Messico, seconda metà dell'Ottocento. Joe, pistolero americano solitario e squattrinato, giunge a cavallo di un mulo nel tetro villaggio messicano di confine di San Miguel. Il primo abitante ad incontrarlo è il campanaro Juan De Dios, che intuita la sua professione gli rivela che in quel paese potrà arricchirsi, ma se riuscirà a non farsi uccidere.",
        "img" => "./img/Pugno_di_dollari_head_titles.png",
        "year" => "1964",
        "gen" => ["westrn"],
    ],
    [
        "title" => "C'era una volta il West",
        "description" => "Sweetwater, un pezzo di terra vicino a Flagstone (un'immaginaria città del West), contiene l'unica fonte d'acqua della regione ed è al centro di un conflitto: il terreno è stato acquistato da Brett McBain, il quale prevedeva che la ferrovia transcontinentale in costruzione sarebbe dovuta passare attraverso quella zona per avere l'acqua necessaria alle locomotive a vapore. Quando il magnate delle ferrovie Morton, invalido, ne ne viene a conoscenza, manda il suo sicario Frank a intimidire il proprietario del terreno per andarsene, ma l'uomo invece uccide McBain e i suoi tre figli, lasciando delle prove per incriminare il bandito Cheyenne. Sembra che la terra non abbia più alcun proprietario, fino a che un'ex prostituta arriva da New Orleans, rivelando di essere Jill McBain, la nuova moglie di Brett e proprietaria del terreno.",
        "img" => "./img/Armonica_e_Frank.png",
        "year" => "1968",
        "gen" => [
            "western",
            "avventura"
        ],
    ],
    [
        "title" => "Il Signore degli Anelli - La Compagnia dell'Anello",
        "description" => "Nella Seconda Era, Sauron, l'Oscuro Signore di Mordor, donò 19 anelli alle razze della Terra di Mezzo: tre ai re degli elfi, sette ai re dei nani e nove ai re degli uomini; tutti loro, però, furono ingannati dall'Oscuro Signore, il quale forgiò l'Unico Anello, in grado di controllare tutti gli altri. Nella battaglia contro Sauron, Isildur, figlio del re degli uomini Elendil, tagliò a Sauron il dito al quale era infilato l'Anello, ottenendo così la vittoria. Egli, preso l'Anello, si lasciò corrompere dal suo potere e ignorò il consiglio dell'elfo Elrond di gettarlo tra le fiamme del vulcano Monte Fato, per sconfiggere definitivamente il nemico. Questa scelta gli costò la vita, portò alla rovina la razza degli uomini e alla perdita dell'Unico Anello il quale, in seguito, pervenne alla creatura Gollum, anche lui consumato dal suo potere. L'Anello, infine, abbandonò Gollum e fu raccolto dall'hobbit Bilbo Baggins.",
        "img" => "./img/Il_Signore_degli_Anelli_060.jpg",
        "year" => "2001",
        "gen" => [
            "fantastico",
            "avventura",
            "azione",
            "epico",
            "drammatico"
        ],
    ]
];

// $movie1 = new Movie("Le ali della libertà", "Maine, 1947: Andy Dufresne, vice-direttore di una banca di Portland, viene condannato a due ergastoli per l'uccisione della moglie e del suo amante campione di golf, benché egli proclami la sua innocenza. Viene imprigionato nel carcere di Shawshank, dove le guardie e il corrotto direttore Samuel Norton impongono la loro legge fatta di violenze gratuite e omicidi impuniti, di nascosto dallo Stato.", "./img/Le_ali_della_libertà_1994_film_blu-ray.png", "1994", ["drammatico"]);
// $movie2 = new Movie("Il silenzio deli innocenti", "La comparsa di un folle e sadico serial killer che uccide e scuoia delle giovani ragazze motiva Jack Crawford, dirigente dell'FBI, a cercare l'aiuto del dottor Hannibal Lecter, ex psichiatra e criminologo, detenuto da oltre otto anni nel manicomio criminale di Baltimora, diretto dal dottor Chilton, con l'accusa di aver ucciso alcuni suoi pazienti e di averne divorato i corpi (Hannibal the Cannibal). Si ritiene infatti che Lecter possa sapere molte cose sull'assassino, soprannominato \"Buffalo Bill\", ma poiché il dottor Lecter rifiuta ogni collaborazione, Crawford decide di assegnare alla promettente recluta Clarice Starling l'incarico di risolvere il caso sperando che la giovane donna riesca a persuadere il folle psichiatra.", "./img/Il_silenzio_degli_innocenti.jpg", "1991", ["thriller", "drammatico", "poliziesco", "giallo"]);
// $movie3 = new Movie("La leggenda del pianista sull'oceano", "Inghilterra, secondo dopoguerra. Il trombettista Max Tooney entra in un negozio di dischi e strumenti musicali poco prima dell'orario di chiusura e si accorda con l'anziano proprietario per vendere per pochi spiccioli la sua vecchia tromba di marca Conn; prima di separarsene, chiede ed ottiene il permesso di suonarla per l'ultima volta. Il negoziante, sentendo la melodia suonata da Max, la riconosce come quella di un brano, eseguito al pianoforte, registrato su una vecchia matrice discografica da lui ritrovata, brano da cui è affascinato ma di cui non riesce ad identificare l'autore; si fa quindi raccontare da Max la storia di quel pianista, che Max definisce il suo più grande segreto, dicendo che in realtà è come se quel musicista non fosse mai esistito. Il brano è l'unico mai inciso da quello che fu il migliore amico di Max, Danny Boodman T.D. Lemon Novecento.", "./img/La_leggenda_del_pianista_sull'oceano_018.jpg", "1998", ["drammarico", "musicale"]);
// $movie4 = new Movie("Per un pugno di dollari", "Messico, seconda metà dell'Ottocento. Joe, pistolero americano solitario e squattrinato, giunge a cavallo di un mulo nel tetro villaggio messicano di confine di San Miguel. Il primo abitante ad incontrarlo è il campanaro Juan De Dios, che intuita la sua professione gli rivela che in quel paese potrà arricchirsi, ma se riuscirà a non farsi uccidere.", "./img/Pugno_di_dollari_head_titles.png", "1964", ["western"]);
// $movie5 = new Movie("C'era una volta il West", "Sweetwater, un pezzo di terra vicino a Flagstone (un'immaginaria città del West), contiene l'unica fonte d'acqua della regione ed è al centro di un conflitto: il terreno è stato acquistato da Brett McBain, il quale prevedeva che la ferrovia transcontinentale in costruzione sarebbe dovuta passare attraverso quella zona per avere l'acqua necessaria alle locomotive a vapore. Quando il magnate delle ferrovie Morton, invalido, ne ne viene a conoscenza, manda il suo sicario Frank a intimidire il proprietario del terreno per andarsene, ma l'uomo invece uccide McBain e i suoi tre figli, lasciando delle prove per incriminare il bandito Cheyenne. Sembra che la terra non abbia più alcun proprietario, fino a che un'ex prostituta arriva da New Orleans, rivelando di essere Jill McBain, la nuova moglie di Brett e proprietaria del terreno.", "./img/Armonica_e_Frank.png", "1968", ["western", "avventura"]);
// $movie6 = new Movie("Il Signore degli Anelli - La Compagnia dell'Anello", "Nella Seconda Era, Sauron, l'Oscuro Signore di Mordor, donò 19 anelli alle razze della Terra di Mezzo: tre ai re degli elfi, sette ai re dei nani e nove ai re degli uomini; tutti loro, però, furono ingannati dall'Oscuro Signore, il quale forgiò l'Unico Anello, in grado di controllare tutti gli altri. Nella battaglia contro Sauron, Isildur, figlio del re degli uomini Elendil, tagliò a Sauron il dito al quale era infilato l'Anello, ottenendo così la vittoria. Egli, preso l'Anello, si lasciò corrompere dal suo potere e ignorò il consiglio dell'elfo Elrond di gettarlo tra le fiamme del vulcano Monte Fato, per sconfiggere definitivamente il nemico. Questa scelta gli costò la vita, portò alla rovina la razza degli uomini e alla perdita dell'Unico Anello il quale, in seguito, pervenne alla creatura Gollum, anche lui consumato dal suo potere. L'Anello, infine, abbandonò Gollum e fu raccolto dall'hobbit Bilbo Baggins.", "./img/Il_Signore_degli_Anelli_060.jpg", "2001", ["fantastico", "avventura", "azione", "epico", "drammatico"]);

// var_dump($movie1);
// var_dump($movie2);
// var_dump($movie3);
// var_dump($movie4);
// var_dump($movie5);
// var_dump($movie6);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row row-cols-md-3 row-cols-sm-2">
            <?php
            foreach ($dataBaseMovies as $movie) {
                $print = new Movie($movie["title"], $movie["description"], $movie["img"], $movie["year"], $movie["gen"]);
            ?>
            <div class="col">
                <div class="card">
                    <img src="<?php echo $movie["img"] ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo $print->getTitle() ?>
                        </h4>
                        <p class="card-text">
                            <?php echo $print->getDescription() ?>
                        </p>
                        <p class="card-text">
                            <?php echo $print->getYear() ?>
                        </p>
                        <p class="card-text">
                            <!-- <?php echo $print->getGen() ?> -->
                        </p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>

<!-- <div id="app">

    <p>{{message}}</p>

</div> -->