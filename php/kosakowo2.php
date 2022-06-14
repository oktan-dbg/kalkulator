<!DOCTYPE html>

<head>
    <!--<link rel="stylesheet" type="text/css" href="style2.css"/>
    <link rel="stylesheet" media="print" href="style2.css"/>-->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="main2.js"></script>
    <script src="budzet_zdj.js"></script>
    <script src="kalkulator.js"></script>

</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Work+Sans:400,600');
    body {
	    margin: 0;
	    background: lightskyblue;
	    font-family: 'Work Sans', sans-serif;
	    font-weight: 800;
    }

    .container {
	    width: 80%;
	    margin: 0 auto;
    }

    header {
        background: #fff;
    }
    header image{
        height: 5em;
    }

    header::after {
        content: '';
        display: table;
        clear: both;
    }

    .logo {
        float: left;
        padding: 10px 0;
    }

    nav {
        float: right;
    }

    nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    nav li {
        display: inline-block;
        margin-left: 70px;
        padding-top: 23px;

        position: relative;
    }

    nav a {
        color: #444;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 14px;
    }

    nav a:hover {
        color: lightskyblue;
    }

    nav a::before {
        content: '';
        display: block;
        height: 5px;
        background-color: lightskyblue;

        position: absolute;
        top: 0;
        width: 0%;

        transition: all ease-in-out 250ms;
    }

    nav a:hover::before {
        width: 100%;
    }
    main div img {
        width: 100%;
        height: 45em;
    }
    .zdjecie {
        position: relative;
        text-align: center;
        color: white;
    }
    .txt_zdjecie {
        position: absolute;
        top: 0.5em;
        left: 1em;
        font-size: 120px;
        text-align: left;
    }
    .budzet_gminy {
        background-color: lightskyblue;
        color: white;
        position: relative;
        height: 32em;
        border: none;
    }
    .txt_budzet_napis {
        position: absolute;
        left: 2em;
        top: 1.5em;
        height: 5em;
        width: 2em;
        font-size: 70px;
    }
    .wybor_roku {
        position: absolute;
        top: 1em;
        right: 1em;
        color: white;
    }
    .wybor_roku select {
        outline: none;
        border: none;
        text-align: left;
        float: left;
        background: transparent;
        font-size: 2rem;
        color: #fff;
    }
    .wybor_roku select :hover{
        background: rgba(255, 255, 255, 0.1);
    }
    .wybor_roku select option{
        background: lightskyblue;
    }
    .budzet {
        position: absolute;
        top: 2em;
        right: 0.1em;
        font-size: 6rem;
    }
    .wydatki_gminy {
        position: relative;
        background: white;
        height: 50em;
        border: none;
    }
    .txt_wydatki {
        position: absolute;
        left: 3.5em;
        text-align: center;
        font-size: 3rem;
        color: black;
    }
    .wydatki_gminy img{
        width: 5em;
        height: 4em;
        margin: 20px;
    }
    .wydatki_gminy input{
        width: 7em;
        height: 6em;
        margin: 20px;
    }
    .wydatki_gminy table{
        position: absolute;
        top: 17em;
        left: 4em;
    }
    .txt_nazwa_wydatku{
        position: absolute;
        color: black;
        font-size: 20px;
        right: 3em;
        top: 17em;
    }
    .txt_suma_wydatku{
        position: absolute;
        font-size: 30px;
        right: 2em;
        top: 15em;
    }
    .txt_procenty{
        position: absolute;
        font-size: 80px;
        right: 2em;
        top: 7em;
    }
    .zmiana_koloru{
        background: linear-gradient(to bottom, lightskyblue 0%,white  100%);
        height: 20em;
    }
    .zmiana_koloru_dwa{
        background: linear-gradient(to bottom, white 0%,lightskyblue  100%);
        height: 20em; 
    }
    .div_kalkulator{
        background: lightskyblue;
        height: 50em;
    }
    #kalkulator{

        color: #fff;
        height: 23em;
        width: 16em;
        border-radius: 18px;
        text-align: center;
        margin-left: 2em;
        float: left;
        margin-top: -2em;
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.20);
        backdrop-filter: blur(5px);
        border-top: 0.5px solid rgba(255, 255, 255, 0.5);
        border-left: 0.5px solid rgba(255, 255, 255, 0.5);  

    }

    #kalkulator table{

        margin: 1em;

    }

    #kalkulator p{

        font-size: 30px;

    }

    #kalkulator input[type="text"]{

        border: none;
        width: 6em;
        margin: 0 3px;
        outline: none;
        color: #fff;
        text-align: right;
        font-size: 30px;
        pointer-events: none;
        padding-left: 10px;
        background: transparent;
    }

    #kalkulator input[type="button"]{

        font-size: 30px;
        color: #fff;
        width: calc(7em / 3 - 1px);
        height: 1.5em;
        margin-left: -0.001em;
        background: transparent;
        outline: none;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;

    }

    #kalkulator input[type="button"]:hover{

        border-radius: 15px;	
        background: rgba(255, 255, 255, 0.1);

    }
    #kalkulator{
        position: absolute;
        left: 3em;
        top: 195em;
    }.div_kalkulator img{
        width: 4em;
        height: 4em;
        margin: 20px;
    }
    .img_wydatki{
        position: absolute;
        right: 3em;
        top: 194em; 
    }
    .zmiana_koloru_trzy{
        height: 30em;
        background: linear-gradient(to bottom, lightskyblue 0%,#0099ff  100%);
    }
    .wykresy{
        height: 30em;
        background: linear-gradient(to bottom, #0099ff 0%,#00cc00  100%);
    }
    .zmiana_koloru_cztery{
        height: 23em;
        background: linear-gradient(to bottom, #00cc00 0%,#ffff00  100%);
    }
    .stopka{
       
        height: 3em;
        background-color: white;
    }
    .stopka_txt{
        position: absolute;
        right: 1rem;
        margin: 1rem;
    }
    #google_data{
        position: absolute;
        top: 225em;
    }
    .txt_kalkulator{
        position: absolute;
        color: white;
        font-size: 3rem;
        left: 0.2em;
        margin: 3em;
        width: 28em;
    }
    /*Szkolnictwo wyższe */
    .szkolnictwo_wyzsze {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .szkolnictwo_wyzsze h3 {margin:12px 0;}

    .szkolnictwo_wyzsze .szkolnictwo_wyzsze_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .szkolnictwo_wyzsze:hover .szkolnictwo_wyzsze_plus {
        display:block;
    }

    .szkolnictwo_wyzsze .szkolnictwo_wyzsze_plus i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .szkolnictwo_wyzsze .szkolnictwo_wyzsze_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    /*Urzędy naczelnych organów */
    .urzedy_naczelnych {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .urzedy_naczelnych h3 {margin:12px 0;}

    .urzedy_naczelnych .urzedy_naczelnych_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .urzedy_naczelnych:hover .urzedy_naczelnych_plus {
        display:block;
    }

    .urzedy_naczelnych .urzedy_naczelnych_plus i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .urzedy_naczelnych .urzedy_naczelnych_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    /*Leśnictwo*/
    .lesnictwo {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .lesnictwo h3 {margin:12px 0;}

    .lesnictwo .lesnictwo_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .lesnictwo:hover .lesnictwo_plus {
        display:block;
    }

    .lesnictwo .lesnictwo_plus i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .lesnictwo .lesnictwo_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    /*Rolnictwo*/
    .rolnictwo {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .rolnictwo h3 {margin:12px 0;}

    .rolnictwo .rolnictwo_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .rolnictwo:hover .rolnictwo_plus {
        display:block;
    }

    .rolnictwo .rolnictwo_plus i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .rolnictwo .rolnictwo_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    /*Transport*/
    .transport {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .transport h3 {margin:12px 0;}

    .transport .transport_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .transport:hover .transport_plus {
        display:block;
    }

    .transport .transport_plus i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .transport .transport_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    /*Komunalna*/
    .komunalna {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .komunalna h3 {margin:12px 0;}

    .komunalna .komunalna_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .komunalna:hover .komunalna_plus {
        display:block;
    }

    .komunalna .komunalna_plus i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .komunalna .komunalna_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    /*Mieszkaniowa*/
    .gospodarka_mieszkaniowa {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .gospodarka_mieszkaniowa h3 {margin:12px 0;}

    .gospodarka_mieszkaniowa .gospodarka_mieszkaniowa_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .gospodarka_mieszkaniowa:hover .gospodarka_mieszkaniowa_plus {
        display:block;
    }

    .gospodarka_mieszkaniowa .gospodarka_mieszkaniowa_plus i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .gospodarka_mieszkaniowa .gospodarka_mieszkaniowa_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    /*Pozostałe*/
    .pozostale_zadania {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .pozostale_zadania h3 {margin:12px 0;}

    .pozostale_zadania .pozostale_zadania_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .pozostale_zadania:hover .pozostale_zadania_plus {
        display:block;
    }

    .pozostale_zadania .pozostale_zadania_plus i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .pozostale_zadania .pozostale_zadania_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    /*Administracja*/
    .administracja_publiczna {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .administracja_publiczna h3 {margin:12px 0;}

    .administracja_publiczna .administracja_publiczna_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .administracja_publiczna:hover .administracja_publiczna_plus {
        display:block;
    }

    .administracja_publiczna .administracja_publiczna_plus   i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .administracja_publiczna .administracja_publiczna_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    /*Pomoc Społeczna*/
    .pomoc_spoleczna {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .pomoc_spoleczna h3 {margin:12px 0;}

    .pomoc_spoleczna .pomoc_spoleczna_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .pomoc_spoleczna:hover .pomoc_spoleczna_plus {
        display:block;
    }

    .pomoc_spoleczna .pomoc_spoleczna_plus   i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .pomoc_spoleczna .pomoc_spoleczna_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    /*Oswiata Wychowanie*/
    .oswiata_wychowanie {
        display:inline-block;
        position:relative;
        border-bottom:1px dotted #666;
        text-align:left;
    }

    .oswiata_wychowanie h3 {margin:12px 0;}

    .oswiata_wychowanie .oswiata_wychowanie_plus {
        min-width:200px;
        max-width:400px;
        top:-20px;
        left:50%;
        transform:translate(-30%,-100%);
        padding:10px 20px;
        color:#ffffff;
        background-color:#009cdc;
        font-weight:normal;
        font-size:14px;
        border-radius:8px;
        position:absolute;
        z-index:99999999;
        box-sizing:border-box;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
        display:none;
    }

    .oswiata_wychowanie:hover .oswiata_wychowanie_plus {
        display:block;
    }

    .oswiata_wychowanie .oswiata_wychowanie_plus   i {
        position:absolute;
        top:100%;
        left:30%;
        margin-left:-15px;
        width:30px;
        height:15px;
        overflow:hidden;
    }

    .oswiata_wychowanie .oswiata_wychowanie_plus i::after {
        content:'';
        position:absolute;
        width:15px;
        height:15px;
        left:50%;
        transform:translate(-50%,-50%) rotate(45deg);
        background-color:#009cdc;
        box-shadow:0 1px 8px rgba(0,0,0,0.5);
    }
    #budzet_2021{
        display: block;
    }
    #budzet_2020,#budzet_2019,#budzet_2018{
        display: none;
    }
    #pozostale_zadania,#administracja_publiczna,#gospodarka_komunalna,#transport_lacznosc,#pomoc_spoleczna,#oswiata_wychowanie{
        display: none;
    }
    #gospodarka_mieszkaniowa{
        display: block;
    }
    .kalkulator_txt{
        color: white;
    }
    .input_txt{
        width: 2em;
    }
    #mieszkaniowa_20, #mieszkaniowa_19, #mieszkaniowa_18{
        display: none;
    }
    #pozostale_20, #pozostale_19, #pozostale_18{
        display: none;
    }
    #administracja_20, #administracja_19, #administracja_18{
        display: none;
    }
    #komunalna_20, #komunalna_19, #komunalna_18{
        display: none;
    }
    #transport_20, #transport_19, #transport_18{
        display: none;
    }
    #pomoc_20, #pomoc_19, #pomoc_18{
        display: none;
    }
    #oswiata_20, #oswiata_19, #oswiata_18{
        display: none;
    }
    .input_txt{
        width: 5em;
        text-align: right;
    }
    .img_wydatki {
        position: absolute;
        color: white;
    }
    .img_wydatki select {
        position: absolute;
        outline: none;
        border: none;
        text-align: left;
        float: right;
        right: 0.3em;
        top: -2em;
        background: transparent;
        font-size: 2rem;
        color: #fff;
    }
    .img_wydatki select :hover{
        background: rgba(255, 255, 255, 0.1);
    }
    .img_wydatki select option{
        background: lightskyblue;
    }
    .panel_administratora{
        position: absolute;
        top: 85em;
        background-color: white;
        height: 15em;
    }
</style>

<body>
    <header>
      <div class="container">
        <a href="JavaScript: location.reload(true);"><img src="KOSAKOWO_logo_dobre.jpg" alt="Logo Gmina Kosakowo"></a>

        <nav>
          <ul>
            <li><a href="#kotwica_budzet">Budżet Gminy</a></li>
            <li><a href="#kotwica_wydatki">Wydatki Gminy</a></li>
            <li><a href="#kotwica_kalkulator">Kalkulator</a></li>
            <li><a href="#kotwica_wykresy">Wykresy</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
        
        <div class="zdjecie">
            <img src="Mechelinki.jpg" alt="Zdjęcie Mechelinek">
            <div class="txt_zdjecie">Gmina<br>Kosakowo</div>
        </div>
        <div class="panel_administratora">

        </div>
        <div class="budzet_gminy">
            <div class="txt_budzet_napis">Budżet Gminy Kosakowo</div>
            <div class="wybor_roku">
                <a name="kotwica_budzet"><select id="rok_budzet" onchange="zmiana_roku_budzet()">

                    <option selected>2021</option>
                    <option>2020</option>
                    <option>2019</option>
                    <option>2018</option>

                </select></a>
                <div id="budzet_2021" class="budzet">Budżet: 5000zł</div>
                <div id="budzet_2020" class="budzet">Budżet: 4000zł</div>
                <div id="budzet_2019" class="budzet">Budżet: 3000zł</div>
                <div id="budzet_2018" class="budzet">Budżet: 2000zł</div>
            </div>
        </div>
        <div class="zmiana_koloru"></div>
        <div class="wydatki_gminy">
          <div class="txt_wydatki"><a name="kotwica_wydatki"><h1>Wydatki z Budżetu Gminy</h1></a></div>
          <table>
            <tr>
                <td><div class="szkolnictwo_wyzsze"><img src="szkolnictwo_wyzsze_i_nauka.png" id="szkolnictwo_zdj" onClick="wydatki_gmina()" alt="szkolnictwo wyzsze i nauka" style="display: none;">
                    <div class="szkolnictwo_wyzsze_plus">
                        <h3>Szkolnictwo wyższe i nauka</h3>
                        <i></i>
                    </div>
                </div></td>
                <td><div class="urzedy_naczelnych"><img src="urzedy_naczelnych_organow.png" id="urzedy_zdj" alt="Urzędy naczelnych organów" style="display: none;">
                        <div class="urzedy_naczelnych_plus">
                            <h3>Urzędy naczelnych organów</h3>
                            <i></i>
                        </div>    
                    </div>
                </td>
                <td><div class="lesnictwo"><img src="lesnictwo.png" alt="Leśnictwo" style="display: none;">
                        <div class="lesnictwo_plus">
                            <h3>Leśnictwo</h3>
                            <i></i>
                        </div>
                    </div>  
                </td>
                <td><div class="rolnictwo"><img src="rolnictwo_i_lowiectwo.png" alt="Rolnictwo i Łowiestwo" style="display: none;">
                        <div class="rolnictwo_plus">
                            <h3>Rolnictwo i Łowiectwo</h3>
                            <i></i>
                        </div>
                    </div>
                </td>

                <td><img src="wymiar_sprawiedliwosci.png" alt="Wymiar sprawiedliwosci" style="display: none;"></td>
            </tr>
            <tr>
                <td><div class="gospodarka_mieszkaniowa"><input type="image" src="gospodarka_mieszkaniowa.png" alt="Gospodarka mieszkaniowa" onClick="mieszkaniowa_zdj()" id="mieszkaniowa_zdj">
                        <div class="gospodarka_mieszkaniowa_plus">
                            <h3>Gospodarka Mieszkaniowa</h3>
                            <i></i>
                        </div>
                    </div>
                </td>
                <td><div class="pozostale_zadania"><input type="image" src="pozostale_zadania.png" alt="Pozostałe zadania" onClick="pozostale_zdj()" id="pozostale_zdj">
                        <div class="pozostale_zadania_plus">
                            <h3>Pozostałe zadania</h3>
                            <i></i>
                        </div>
                    </div>
                </td>
                <td><div class="administracja_publiczna"><input type="image" src="administracja_publiczna.png" alt="Administracja publiczna" onClick="publiczna_zdj()" id="publiczna_zdj">
                        <div class="administracja_publiczna_plus">
                            <h3>Administracja publiczna</h3>
                            <i></i>
                        </div>
                    </div>
                </td>
                <td><img src="bezpieczenstwo_publiczne_straz_pozarna.png" alt="Bezpieczeństwo publiczne i straż pożarna" style="display: none;"></td>
                <td><img src="dzialalnosc_uslugowa.png" alt="Działalność Usługowa" style="display: none;"></td>
            </tr>
            <tr>
                <td><div class="komunalna"><input type="image" src="gospodarka_komunalna_i_ochrona_srodowiska.png" alt="Gospodarka komunalna i ochrona środowiska" onClick="gospodarka_zdj()" id="gospodarka_zdj">
                        <div class="komunalna_plus">
                            <h3>Gospodarka komunalna i ochrona środowiska</h3>
                            <i></i>
                        </div>
                    </div>  
                </td>
                <td><div class="transport"><input type="image" src="transport_i_lacznosc.png" alt="Transport i łączność" onClick="transport_zdj()" id="transport_zdj">
                        <div class="transport_plus">
                            <h3>Transport i łączność</h3>
                            <i></i>
                        </div>
                    </div>
                </td>
                <td><div class="pomoc_spoleczna"><input type="image" src="pomoc_spoleczna.png" alt="Pomoc Społeczna" onClick="pomoc_zdj()" id="pomoc_zdj">
                        <div class="pomoc_spoleczna_plus">
                            <h3>Pomoc Społeczna</h3>
                            <i></i>
                        </div>
                    </div>  
                </td>
                <td><img src="edukacja_opieka_wychowawcza.png" alt="Edukacja i opieka Wychowawcza" style="display: none;"></td>
                <td></td>
            </tr>
            <tr>
                <td><div class="oswiata_wychowanie"><input type="image" src="oswiata_i_wychowanie.png" alt="Oświata i wychowanie" onClick="oswiata_zdj()" id="oswiata_zdj">
                        <div class="oswiata_wychowanie_plus">
                            <h3>Oświata i wychowanie</h3>
                            <i></i>
                        </div>
                    </div>
                </td>
                <td><img src="kultura_fizyczna.png" alt="Kultura Fizyczna" style="display: none;"></td>
                <td><img src="kultura_i_ochrona_dziedzistwa_narodowego.png" alt="Kultura i ochrona dziedzictwa Narodowego" style="display: none;"></td>
                <td><img src="rozne_rozliczenia.png" alt="Różne Rozliczenia" style="display: none;"></td>
                <td><img src="rodzina.png" alt="Rodzina" style="display: none;"></td>
            </tr>
            <tr>
                <td><img src="energia_energetyczna_gaz_i_woda.png" alt="Energia energetyczna, gaz i woda" style="display: none;"></td>
                <td><img src="ochrona_zdrowia.png" alt="Ochrona zdrowia" style="display: none;"></td>
                <td><img src="turystyka.png" alt="Turystyka" style="display: none;"></td>
                <td><img src="obsluga_dlugu_publicznego.png" alt="Obsługa długu publicznego" style="display: none;"></td>
            </tr>
          </table>
          <div id="gospodarka_mieszkaniowa">
                <div class="txt_nazwa_wydatku"><h1>Gospodarka Mieszkaniowa</h1></div>
                <div class="txt_suma_wydatku">35 534 535 PLN</div>
                <div class="txt_procenty">4%</div>
          </div>
          <div id="pozostale_zadania">
                <div class="txt_nazwa_wydatku"><h1>Pozostałe Zadania</h1></div>
                <div class="txt_suma_wydatku">35 534 535 PLN</div>
                <div class="txt_procenty">12%</div>
          </div>
          <div id="administracja_publiczna">
                <div class="txt_nazwa_wydatku"><h1>Administracja Publiczna</h1></div>
                <div class="txt_suma_wydatku">35 534 535 PLN</div>
                <div class="txt_procenty">7%</div>
          </div>
          <div id="gospodarka_komunalna">
                <div class="txt_nazwa_wydatku"><h1>Gospodarka Komunalna i Ochrona Środowiska</h1></div>
                <div class="txt_suma_wydatku">35 534 535 PLN</div>
                <div class="txt_procenty">9%</div>
          </div>
          <div id="transport_lacznosc">
                <div class="txt_nazwa_wydatku"><h1>Transport i Łączność</h1></div>
                <div class="txt_suma_wydatku">35 534 535 PLN</div>
                <div class="txt_procenty">8%</div>
          </div>
          <div id="pomoc_spoleczna">
                <div class="txt_nazwa_wydatku"><h1>Pomoc Społeczna</h1></div>
                <div class="txt_suma_wydatku">35 534 535 PLN</div>
                <div class="txt_procenty">22%</div>
          </div>
          <div id="oswiata_wychowanie">
                <div class="txt_nazwa_wydatku"><h1>Oświata i Wychowanie</h1></div>
                <div class="txt_suma_wydatku">35 534 535 PLN</div>
                <div class="txt_procenty">38%</div>
          </div>
          
        </div>
        <div class="zmiana_koloru_dwa"></div>
        <div class="div_kalkulator">
            
            <div class="txt_kalkulator"><a name="kotwica_kalkulator">Miesięczny podatek zasilający budżet gminy: 1435zł</a></div>
            
            <div id="kalkulator">
            
              

              <form name="formularz">

                <p>Kalkulator</p>

                <input onkeyup="pomnoz()" type="text" size="10" id="textview" name="textview"><br>

              </form>


              <table>



                <tr>

                    <td><input onkeyup="pomnoz()" class="button" type="button" value="7" onclick="insert(7)"></td>
                    <td><input onkeyup="pomnoz()" class="button" type="button" value="8" onclick="insert(8)"></td>
                    <td><input onkeyup="pomnoz()" class="button" type="button" value="9" onclick="insert(9)"></td>

                </tr>

                <tr>

                    <td><input onkeyup="pomnoz()" class="button" type="button" value="4" onclick="insert(4)"></td>
                    <td><input onkeyup="pomnoz()" class="button" type="button" value="5" onclick="insert(5)"></td>
                    <td><input onkeyup="pomnoz()" class="button" type="button" value="6" onclick="insert(6)"></td>

                </tr>

                <tr>

                    <td><input onkeyup="pomnoz()" class="button" type="button" value="1" onclick="insert(1)"></td>
                    <td><input onkeyup="pomnoz()" class="button" type="button" value="2" onclick="insert(2)"></td>
                    <td><input onkeyup="pomnoz()" class="button" type="button" value="3" onclick="insert(3)"></td>

                </tr>

                <tr>

                    <td colspan=0><input onkeyup="pomnoz()" class="button" type="button" value="0" onclick="insert(0)"></td>
                    <td><input class="button" type="button" value="C" onclick="clean()"></td>

                </tr>

              </table>
              

            </div>
            <div class="img_wydatki">
                <select id="kalkulator_wydatki" onchange="zmiana_roku_kalkulator()">

                    <option selected>2021</option>
                    <option>2020</option>
                    <option>2019</option>
                    <option>2018</option>
                </select>
                <table>
                    <tr>
                        <td><img src="szkolnictwo_wyzsze_i_nauka.png" alt="szkolnictwo wyzsze i nauka" style="display: none;"></td>
                        <td><img src="urzedy_naczelnych_organow.png" alt="Urzędy naczelnych organów" style="display: none;"></td>
                        <td><img src="lesnictwo.png" alt="Leśnictwo" style="display: none;"></td>
                        <td><img src="rolnictwo_i_lowiectwo.png" alt="Rolnictwo i Łowiestwo" style="display: none;"></td>
                        <td><img src="wymiar_sprawiedliwosci.png" alt="Wymiar sprawiedliwosci" style="display: none;"></td>
                    </tr>
                    <tr>
                        <td><img src="gospodarka_mieszkaniowa_biale.png" alt="Gospodarka mieszkaniowa"></td>
                        <td class="kalkulator_txt">Mieszkaniowa: 
                            <input type="text" class="input_txt" id="mieszkaniowa_21">
                            <input type="text" class="input_txt" id="mieszkaniowa_20">
                            <input type="text" class="input_txt" id="mieszkaniowa_19">
                            <input type="text" class="input_txt" id="mieszkaniowa_18">
                        </td>
                        <td><img src="pozostale_zadania_biale.png" alt="Pozostałe zadania"></td>
                        <td class="kalkulator_txt">Pozostałe: 
                            <input type="text" class="input_txt" id="pozostale_21">
                            <input type="text" class="input_txt" id="pozostale_20">
                            <input type="text" class="input_txt" id="pozostale_19">
                            <input type="text" class="input_txt" id="pozostale_18">
                        </td>
                        <td><img src="administracja_publiczna_biale.png" alt="Administracja publiczna"></td>
                        <td class="kalkulator_txt">Administracja: 
                            <input type="text" class="input_txt" id="administracja_21">
                            <input type="text" class="input_txt" id="administracja_20">
                            <input type="text" class="input_txt" id="administracja_19">
                            <input type="text" class="input_txt" id="administracja_18">
                        </td>
                        <td><img src="bezpieczenstwo_publiczne_straz_pozarna.png" alt="Bezpieczeństwo publiczne i straż pożarna" style="display: none;"></td>
                        <td><img src="dzialalnosc_uslugowa.png" alt="Działalność Usługowa" style="display: none;"></td>
                    </tr>
                    <tr>
                        <td><img src="gospodarka_komunalna_i_ochrona_srodowiska_biale.png" alt="Gospodarka komunalna i ochrona środowiska"></td>
                        <td class="kalkulator_txt">Komunalna: 
                            <input type="text" class="input_txt" id="komunalna_21">
                            <input type="text" class="input_txt" id="komunalna_20">
                            <input type="text" class="input_txt" id="komunalna_19">
                            <input type="text" class="input_txt" id="komunalna_18">
                        </td>
                        <td><img src="transport_i_lacznosc_biale.png" alt="Transport i łączność"></td>
                        <td class="kalkulator_txt">Transport: 
                            <input type="text" class="input_txt" id="transport_21">
                            <input type="text" class="input_txt" id="transport_20">
                            <input type="text" class="input_txt" id="transport_19">
                            <input type="text" class="input_txt" id="transport_18">
                        </td>
                        <td><img src="pomoc_spoleczna_biale.png" alt="Pomoc Społeczna"></td>
                        <td class="kalkulator_txt">Pomoc: 
                            <input type="text" class="input_txt" id="pomoc_21">
                            <input type="text" class="input_txt" id="pomoc_20">
                            <input type="text" class="input_txt" id="pomoc_19">
                            <input type="text" class="input_txt" id="pomoc_18">
                        </td>
                        <td><img src="edukacja_opieka_wychowawcza.png" alt="Edukacja i opieka Wychowawcza" style="display: none;"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><img src="oswiata_i_wychowanie_biale.png" alt="Oświata i wychowanie"></td>
                        <td class="kalkulator_txt">Oświata: 
                            <input type="text" class="input_txt" id="oswiata_21">
                            <input type="text" class="input_txt" id="oswiata_20">
                            <input type="text" class="input_txt" id="oswiata_19">
                            <input type="text" class="input_txt" id="oswiata_18">
                        </td>
                        <td><img src="kultura_fizyczna.png" alt="Kultura Fizyczna" style="display: none;"></td>
                        <td><img src="kultura_i_ochrona_dziedzistwa_narodowego.png" alt="Kultura i ochrona dziedzictwa Narodowego" style="display: none;"></td>
                        <td><img src="rozne_rozliczenia.png" alt="Różne Rozliczenia" style="display: none;"></td>
                        <td><img src="rodzina.png" alt="Rodzina" style="display: none;"></td>
                    </tr>
                    <tr>
                        <td><img src="energia_energetyczna_gaz_i_woda.png" alt="Energia energetyczna, gaz i woda" style="display: none;"></td>
                        <td><img src="ochrona_zdrowia.png" alt="Ochrona zdrowia" style="display: none;"></td>
                        <td><img src="turystyka.png" alt="Turystyka" style="display: none;"></td>
                        <td><img src="obsluga_dlugu_publicznego.png" alt="Obsługa długu publicznego" style="display: none;"></td>
                    </tr>
                </table>            
            </div>
        </div>
        <div class="zmiana_koloru_trzy">
        </div>
        <div class="wykresy">
            <a name="kotwica_wykresy"><div id="google_data" style="margin: 4%;"><iframe id="datastudio" width="1400" height="1100" style="position: relative; top: 76px;" src="https://datastudio.google.com/embed/reporting/0890557f-95bf-4628-949a-19fcd42e2d26/page/WCeaC" frameborder="5" allowfullscreen></iframe></div></a>
        </div>
        <div class="zmiana_koloru_cztery">
        </div>
        <div class="stopka">
            <div class="stopka_txt"><a href="login.php" target="_blank" style="text-decoration: none; color: black;">Panel Administratora</a></div>
        </div>
    </main>

</body>