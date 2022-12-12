<?php
include_once __DIR__ . "./Moduls/Movie.php";
include __DIR__ . "./partials/header.php";

// $dataBaseMovies = [
//     [
//         "title" => "",
//         "description" => "",
//         "img" => "",
//         "year" => "",
//     ],
//     [
//         "title" => "",
//         "description" => "",
//         "img" => "",
//         "year" => "",
//     ],
//     [
//         "title" => "",
//         "description" => "",
//         "img" => "",
//         "year" => "",
//     ],
//     [
//         "title" => "",
//         "description" => "",
//         "img" => "",
//         "year" => "",
//     ],
//     [
//         "title" => "",
//         "description" => "",
//         "img" => "",
//         "year" => "",
//     ],
//     [
//         "title" => "",
//         "description" => "",
//         "img" => "",
//         "year" => "",
//     ]
// ];

$movie1 = new Movie("Le ali della libertà", "Maine, 1947: Andy Dufresne, vice-direttore di una banca di Portland, viene condannato a due ergastoli per l'uccisione della moglie e del suo amante campione di golf, benché egli proclami la sua innocenza. Viene imprigionato nel carcere di Shawshank, dove le guardie e il corrotto direttore Samuel Norton impongono la loro legge fatta di violenze gratuite e omicidi impuniti, di nascosto dallo Stato.", "./img/Le_ali_della_libertà_1994_film_blu-ray.png", "1994", ["drammatico"]);
$movie2 = new Movie("Il silenzio deli innocenti", "La comparsa di un folle e sadico serial killer che uccide e scuoia delle giovani ragazze motiva Jack Crawford, dirigente dell'FBI, a cercare l'aiuto del dottor Hannibal Lecter, ex psichiatra e criminologo, detenuto da oltre otto anni nel manicomio criminale di Baltimora, diretto dal dottor Chilton, con l'accusa di aver ucciso alcuni suoi pazienti e di averne divorato i corpi (Hannibal the Cannibal). Si ritiene infatti che Lecter possa sapere molte cose sull'assassino, soprannominato \"Buffalo Bill\", ma poiché il dottor Lecter rifiuta ogni collaborazione, Crawford decide di assegnare alla promettente recluta Clarice Starling l'incarico di risolvere il caso sperando che la giovane donna riesca a persuadere il folle psichiatra.", "./img/Il_silenzio_degli_innocenti.jpg", "1991", ["thriller", "drammatico", "poliziesco", "giallo"]);
$movie3 = new Movie("La leggenda del pianista sull'oceano", "Inghilterra, secondo dopoguerra. Il trombettista Max Tooney entra in un negozio di dischi e strumenti musicali poco prima dell'orario di chiusura e si accorda con l'anziano proprietario per vendere per pochi spiccioli la sua vecchia tromba di marca Conn; prima di separarsene, chiede ed ottiene il permesso di suonarla per l'ultima volta. Il negoziante, sentendo la melodia suonata da Max, la riconosce come quella di un brano, eseguito al pianoforte, registrato su una vecchia matrice discografica da lui ritrovata, brano da cui è affascinato ma di cui non riesce ad identificare l'autore; si fa quindi raccontare da Max la storia di quel pianista, che Max definisce il suo più grande segreto, dicendo che in realtà è come se quel musicista non fosse mai esistito. Il brano è l'unico mai inciso da quello che fu il migliore amico di Max, Danny Boodman T.D. Lemon Novecento.", "./img/La_leggenda_del_pianista_sull'oceano_018.jpg", "1998", ["drammarico", "musicale"]);

var_dump($movie1);
var_dump($movie2);
var_dump($movie3);
var_dump($movie4);
var_dump($movie5);
var_dump($movie6);
?>

<div id="app">

    <p>{{message}}</p>

</div>