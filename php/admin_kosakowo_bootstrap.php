<?php 
    session_start();
	include("connection.php");
	include("functions.php");
?>
<!doctype html>
<html lang="pl">
  <head>
    <!--<link rel="stylesheet" type="text/css" href="styl3.css"/>-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="main3.js"></script>
    <script src="kalkulator2.js"></script>
    <script type="text/javascript" src="papaparse.min.js"></script>
    <!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>--> 
    <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Wymagane tagi -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
	src="https://code.jquery.com/jquery-3.6.0.slim.js"
	integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
	crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet"> 
    <!-- Style -->
	<link rel="stylesheet" type="text/css" href="./style/main.css"/>
    <!-- Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Main  -->
    <script src="main3.js"></script>
    <!-- Kalkulator js -->
    <script src="kalkulator2.js"></script>
    <!-- Pop upy -->
    <script type="text/javascript" src="papaparse.min.js"></script>
    <!-- Wykres Kołowy -->
    <script src="https://cdn.syncfusion.com/ej2/dist/ej2.min.js" type="text/javascript"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- dodawnie komeatarzy dla testu-->
    <!-- nowy komentarz-->
    <title>Budżet Gminy Kosakowo</title>
  </head>
  <style type="text/css">
    .txt_kalkulator select {
        outline: none;
        border: none;
        background: transparent;
        font-size: 2rem;
        color: #fff;
    }
    .txt_kalkulator select :hover{
        background: rgba(255, 255, 255, 0.1);
    }
    .txt_kalkulator select option{
        background: lightskyblue;
    }
    .budzet_gminy{
        border: none;
        width: auto;
        background: rgba(0,0,0,0.0);
        font-size: 4vw;
        margin-right: 3vmin;
        margin-top: 5vmin;
        color: white;
        float:right;
        text-align: right;
    }
    #budzet_gminy_div {
        background-color: lightskyblue;
        color: white;
        height: 62vmin;
    }
    #budzet_gminy_div select {
        margin-top: -3vmin; 
        outline: none;
        border: none;
        text-align: left;
        float: right;
        background: transparent;
        font-size: 8vmin;
        color: white;
    }
    #budzet_gminy_div select :hover{
        background: rgba(255, 255, 255, 0.1);
    }
    #budzet_gminy_div select option{
        background: lightskyblue;
    }
    #tablica_wydatki{
        margin-left: 4vmin;
    }
    #columnchart_values{
        height: 100vmin;
        margin-top: 8vmin;
        margin-bottom: 12vmin;
        margin-left: auto;
        margin-right: auto;
    }
    .txt_wydatki {
        text-align: center;
        font-size: 3rem;
        color: black;
        margin-bottom: 5vmin;
    }
    .txt_kalkulator{
        color: white;
        font-size: 3vmin;
        padding: 3vmin;
        margin-bottom: 4vmin;
    }
    #kalkulator{
        color: white;
        height: 83vmin;
        width: 46vmin;
        border-radius: 8vmin;
        text-align: center;
        margin-left: 2vmin;
        margin-right: 5vmin;
        float: left;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5vmin);
        border-top: 0.5vmin solid rgba(255, 255, 255, 0.5);
        border-left: 0.5vmin solid rgba(255, 255, 255, 0.5);
    }
    .div_kalkulator{
        float: left;
        width: 100%;
        background: lightskyblue;
    }
    .div_kalkulator img{
        width: 4vmin;
        height: 4vmin;
        margin: 2vmin;
        float: right;
        margin-top: 2vmin;
        margin-bottom: 2vmin;
        margin-right: 3vmin;
    }
    .img_wydatki{
        margin-top: 2vmin;
        width: 95%;
        margin-left: 3vmin;
    }
  </style>
  <body>
    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="JavaScript: location.reload(true);"><img src="KOSAKOWO_logo_dobre.jpg" alt="Logo Gmina Kosakowo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active px-5" aria-current="page" href="#kotwica_budzet">Budżet Gminy</a>
                            <a class="nav-link active px-5" aria-current="page" href="#kotwica_wydatki">Wydatki Gminy</a>
                            <a class="nav-link active px-5" aria-current="page" href="#kotwica_kalkulator">Kalkulator</a>
                            <a class="nav-link active px-5" aria-current="page" href="#kotwica_wykresy">Wykresy</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
       
    </header>
    <main>
        <section class="section-1 p-0">
                <div class="bg-image">
                  <div class="content text-left">
                    <h1>Gmina Kosakowo</h1>
                  </div>
                </div>
        </section>
        <section class="section-2 p-0">
            <div class="zmiana_koloru_jeden"></div>
        </section>
        <section class="section-3 p-0" >
            <div id="budzet_gminy_div">
                <div class="txt_budzet_napis">Budżet Gminy Kosakowo</div>
                <div class="wybor_roku">
                    <a name="kotwica_budzet">
                        <select id="rok_budzet" onchange="zmiana_roku()">
                        <?php
                            $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                            if($conn-> connect_error){
                                die("Connection failed: ".$conn-> connect_error);
                            }

                            $sql= "SELECT DISTINCT wyd_kolumny.rok FROM `wyd_dzialy`,`wyd_kolumny`,`wyd_gminy` WHERE wyd_gminy.id=1;";
                            $result = $conn-> query($sql);
                

                            if ($result-> num_rows > 0){
                    
                                while ($row = mysqli_fetch_row($result)) {
                                echo <<<CMT
                                    <option value='$row[0]'>$row[0]</option>
                                CMT;
                                }   
                            }
                            
                            else{
                                echo "0 result";
                            }
                            $conn-> close();
                        ?>
                        </select>
                    </a>
                </div><br><br><br>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT rok,SUM(plan) AS suma FROM `wpl_dzialy`,`wpl_kolumny`,`wyd_gminy` WHERE id_typ=0 AND wyd_gminy.id=1 GROUP BY rok";
                    $result = $conn-> query($sql);
            

                    if ($result-> num_rows > 0){
                
                        while ($row = mysqli_fetch_row($result)) {
                        echo <<<CMT
                            <div id='budzet_$row[0]' style="display:block;" class='budzet'><input type='text' id='budzet_gminy_$row[0]' class='budzet_gminy' value="$row[1]" min='0' step='0.01' readonly></div>
                        CMT;
                        }   
                    }
                        
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                <script type="text/javascript">
                    const price = 1470000.15;
                    let dollarUSLocale = Intl.NumberFormat('en-US',{
                        maximumSignificantDigits: 2,
                    });
                    console.log("US Locale output: " + dollarUSLocale.format(price));
                    document.getElementById("budzet_gminy_2020").value=dollarUSLocale.format(parseInt(document.getElementById("budzet_gminy_2020").value));
                    document.getElementById("budzet_gminy_2021").value=dollarUSLocale.format(parseInt(document.getElementById("budzet_gminy_2021").value));
                    document.getElementById("budzet_gminy_2022").value=dollarUSLocale.format(parseInt(document.getElementById("budzet_gminy_2022").value));
                </script>
            </div>
        </section>
        <section class="section-3 p-0">
            <div class="zmiana_koloru_dwa"></div>
        </section>
        <section class="section-4 p-0">
            <div class="wydatki_gminy d-flex justify-content-between">
                <section class="section-9 p-0">
                    <div class="txt_wydatki"><a name="kotwica_wydatki"><h2>Wydatki z Budżetu Gminy</h2></a></div>
                    <div id="Div_zdj_rozdzialy">
                        <div id="tablica_wydatki_div">
                            <table id="tablica_wydatki">    
                            <tr>
                                <td><div class="szkolnictwo_wyzsze"><input type="image" src="szkolnictwo_wyzsze_i_nauka.png" id="szkolnictwo_zdj" onClick="sprawdzanie_zdj(this.alt)" alt="Szkolnictwo wyższe i nauka" style="display: block;">
                                    <div class="szkolnictwo_wyzsze_plus">
                                        <h3>Szkolnictwo wyższe i nauka</h3>
                                        <i></i>
                                    </div>
                                    </div>
                                </td>
                                <td><div class="urzedy_naczelnych"><input type="image" src="urzedy_naczelnych_organow.png" id="urzedy_naczelnych_zdj" alt="Urzędy naczelnych organów władzy państwowej, kontroli i ochrony prawa oraz sądownictwa" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="urzedy_naczelnych_plus">
                                            <h3>Urzędy naczelnych organów</h3>
                                            <i></i>
                                        </div>    
                                    </div>
                                </td>
                                <td><div class="lesnictwo"><input type="image" src="lesnictwo.png" id="lesnictwo_zdj" alt="Rybołówstwo i rybactwo" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="lesnictwo_plus">
                                            <h3>Rybołówstwo i rybactwo</h3>
                                            <i></i>
                                        </div>
                                    </div>  
                                </td>
                                <td><div class="rolnictwo"><input type="image" src="rolnictwo_i_lowiectwo.png" alt="Rolnictwo i łowiectwo" id="rolnictwo_zdj" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="rolnictwo_plus">
                                            <h3>Rolnictwo i Łowiectwo</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>

                                <td><div class="wymiar_sprawiedliwosci"><input type="image" src="wymiar_sprawiedliwosci.png" id="wymiar_sprawiedliwosci_zdj" alt="Urzędy naczelnych organów władzy państwowej, kontroli i ochrony prawa oraz sądownictwa" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="wymiar_sprawiedliwosci_plus">
                                            <h3>Wymiar Sprawiedliwości</h3>
                                            <i></i>
                                    </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="gospodarka_mieszkaniowa"><input type="image" src="gospodarka_mieszkaniowa.png" alt="Gospodarka mieszkaniowa" onClick="sprawdzanie_zdj(this.alt)" id="mieszkaniowa_zdj">
                                        <div class="gospodarka_mieszkaniowa_plus">
                                            <h3>Gospodarka Mieszkaniowa</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="pozostale_zadania"><input type="image" src="pozostale_zadania.png" alt="Pozostałe zadania w zakresie polityki społecznej" onClick="sprawdzanie_zdj(this.alt)" id="pozostale_zdj">
                                        <div class="pozostale_zadania_plus">
                                            <h3>Pozostałe zadania</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="administracja_publiczna"><input type="image" src="administracja_publiczna.png" alt="Administracja publiczna" onClick="sprawdzanie_zdj(this.alt)" id="publiczna_zdj">
                                        <div class="administracja_publiczna_plus">
                                            <h3>Administracja publiczna</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="bezpieczenstwo_i_straz"><input id="bezpieczenstwo_i_straz_zdj" type="image" src="bezpieczenstwo_publiczne_straz_pozarna.png" alt="Bezpieczeństwo publiczne i ochrona przeciwpożarowa" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="bezpieczenstwo_i_straz_plus">
                                            <h3>Bezpieczeństwo publiczne i straż pożarna</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="dzialalnosc_uslugowa"><input type="image" id="dzialalnosc_uslugowa_zdj" src="dzialalnosc_uslugowa.png" alt="Działalność usługowa" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="dzialalnosc_uslugowa_plus">
                                            <h3>Działalność usługowa</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="komunalna"><input type="image" src="gospodarka_komunalna_i_ochrona_srodowiska.png" alt="Gospodarka komunalna i ochrona środowiska" onClick="sprawdzanie_zdj(this.alt)" id="gospodarka_zdj">
                                        <div class="komunalna_plus">
                                            <h3>Gospodarka komunalna i ochrona środowiska</h3>
                                            <i></i>
                                        </div>
                                    </div>  
                                </td>
                                <td><div class="transport"><input type="image" src="transport_i_lacznosc.png" alt="Transport i łączność" onClick="sprawdzanie_zdj(this.alt)" id="transport_zdj">
                                        <div class="transport_plus">
                                            <h3>Transport i łączność</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="pomoc_spoleczna"><input type="image" src="pomoc_spoleczna.png" alt="Pomoc społeczna" onClick="sprawdzanie_zdj(this.alt)" id="pomoc_zdj">
                                        <div class="pomoc_spoleczna_plus">
                                            <h3>Pomoc Społeczna</h3>
                                            <i></i>
                                        </div>
                                    </div>  
                                </td>
                                <td><div class="edukacja_opieka_wychowawcza"><input type="image" id="edukacja_opieka_wychowawcza_zdj" src="edukacja_opieka_wychowawcza.png" alt="Edukacyjna opieka wychowawcza" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                            <div class="edukacja_opieka_wychowawcza_plus">
                                                <h3>Edukacja, opieka wychowawcza</h3>
                                                <i></i>
                                            </div>
                                    </div>
                                </td>
                                <td><div class="obsluga_dlugu_publicznego"><input type="image" id="obsluga_dlugu_publicznego_zdj" src="obsluga_dlugu_publicznego.png" alt="Obsługa długu publicznego" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="obsluga_dlugu_publicznego_plus">
                                            <h3>Obsługa długu publicznego</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="oswiata_wychowanie"><input type="image" src="oswiata_i_wychowanie.png" alt="Oświata i wychowanie" onClick="sprawdzanie_zdj(this.alt)" id="oswiata_zdj">
                                        <div class="oswiata_wychowanie_plus">
                                            <h3>Oświata i wychowanie</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="kultura_fizyczna"><input type="image" src="kultura_fizyczna.png" alt="Kultura fizyczna" style="display: block;" id="kultura_fizyczna_zdj" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="kultura_fizyczna_plus">
                                            <h3>Kultura Fizyczna</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="kultura_i_dziedzictwo"><input type="image" id="kultura_i_dziedzictwo_zdj" src="kultura_i_ochrona_dziedzistwa_narodowego.png" alt="Kultura i ochrona dziedzictwa narodowego" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="kultura_i_dziedzictwo_plus">
                                            <h3>Kultura i Ochrona dziedzictwa narodowego</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="rozne_rozliczenia"><input type="image" src="rozne_rozliczenia.png" id="rozne_rozliczenia_zdj" alt="Różne rozliczenia" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="rozne_rozliczenia_plus">
                                            <h3>Różne Rozliczenia</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="rodzina_"><input id="rodzina_zdj" type="image" src="rodzina.png" alt="Rodzina" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="rodzina_plus">
                                            <h3>Rodzina</h3>
                                            <i></i>
                                        </div>
                                </td>
                            </tr>
                            <tr>
                                <td><div class="ochrona_zdrowia"><input type="image" id="ochrona_zdrowia_zdj" src="ochrona_zdrowia.png" alt="Ochrona zdrowia" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="ochrona_zdrowia_plus">
                                            <h3>Ochrona zdrowia</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="turystyka_"><input id="turystyka_zdj" type="image" src="turystyka.png" alt="Turystyka" style="display: block;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="turystyka_plus">
                                            <h3>Turystyka</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                                <td><div class="energia"><input type="image" id="energia_zdj" src="energia_energetyczna_gaz_i_woda.png" alt="Energia energetyczna, gaz i woda" style="display: none;" onClick="sprawdzanie_zdj(this.alt)">
                                        <div class="energia_plus">
                                            <h3>Energia energetyczna, gaz i woda</h3>
                                            <i></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </table>
                        </div>
                            <h2>Działy</h2> 
                            <?php
                                $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");

                                $sql= "SELECT @zmienna_rok:=rok,rok,wyd_kolumny.id,dzial_id,nazwa, plan,((plan/(SELECT SUM(plan) FROM dapjrknbde_aplikacja.wyd_kolumny WHERE typ_id=0 AND gmina_id=1 AND rok=@zmienna_rok)) *100) AS Percentage FROM dapjrknbde_aplikacja.wyd_kolumny, dapjrknbde_aplikacja.wyd_dzialy WHERE typ_id=0 AND gmina_id=1 AND wyd_dzialy.id=dzial_id;";
                                                                
                                $result = mysqli_query($conn, $sql);
                                                                        

                                if ($result-> num_rows > 0){
                                                                            
                                    while ($row = mysqli_fetch_row($result)) {
                                    echo <<<CMT
                                        <table id='$row[4]_$row[1]' class="$row[4]_$row[1] rozdzialy table" style="display: none;">
                                            <tr>
                                                <th scope="col" colspan="3">$row[4]</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td style="display: none;">$row[3]</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">Procent:</th>
                                                <td>$row[6]</td>
                                                <td>%</td>
                                            </tr> 
                                            <tr>
                                                <th scope="row">Kwota:</th><td>$row[5]</td><td>zł</td>
                                            </tr> 
                                            <tr>
                                                <td style="display: none;">$row[1]</td>
                                            </tr>   
                                                                                                                            
                                        </table>
                                    CMT;
                                    }        
                                }
                                                                        
                                mysqli_close($conn);                          
                            ?>
                            <script type="text/javascript">
                                document.getElementById("budzet_2021").style.display="none";
                                document.getElementById("budzet_2022").style.display="none";
                            </script>
                            <h2>Rozdziały</h2>
                            <table class="podrozdzialy table">
                                <?php
                                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");

                                    $sql= "SELECT wyd_kolumny.id,plan,@zmienna:=nalezy_do_dzial_id, (SELECT nazwa FROM wyd_dzialy WHERE @zmienna=id) AS nazwa_nalezy,nalezy_do_dzial_id, wyd_dzialy.nazwa AS nazwa_dzialy,rok FROM dapjrknbde_aplikacja.wyd_kolumny,dapjrknbde_aplikacja.wyd_typy, dapjrknbde_aplikacja.wyd_dzialy WHERE gmina_id=1 AND wyd_dzialy.id=dzial_id AND wyd_dzialy.id_typ= wyd_typy.id AND typ_id=1";
                                                                    
                                    $result = mysqli_query($conn, $sql);


                                    if ($result-> num_rows > 0){
                                                                                
                                        while ($row = mysqli_fetch_row($result)) {
                                         echo <<<CMT
                                            <tr style="display: none;" id="table_$row[0]_$row[6]" class="$row[2]_$row[6]">
                                                <th scope="row" class="tekst">$row[5]</th><td>$row[1]</td>
                                            </tr>
                                        CMT;
                                        }        
                                    }
                                                                            
                                    mysqli_close($conn);                          
                                ?>
                            </table>
                    </div>
                </section>
            </div>
            <div id="columnchart_values"></div> 
            <script type="text/javascript">
                    function czyszczenie_wplaty(){
                        var uzyto = document.getElementsByClassName("uzyto_wplaty");
                        for(var i = 0; i < uzyto.length; i++){
                            uzyto[i].style.display = "none";
                            uzyto[i].classList.remove("uzyto_wplaty");
                        }
                        var uzyto = document.getElementsByClassName("uzyto_wplaty");
                        for(var i = 0; i < uzyto.length; i++){
                            uzyto[i].style.display = "none";
                            uzyto[i].classList.remove("uzyto_wplaty");
                        }
                        var uzyto = document.getElementsByClassName("uzyto_wplaty");
                        for(var i = 0; i < uzyto.length; i++){
                            uzyto[i].style.display = "none";
                            uzyto[i].classList.remove("uzyto_wplaty");
                        }
                        var uzyto = document.getElementsByClassName("uzyto_wplaty");
                        for(var i = 0; i < uzyto.length; i++){
                            uzyto[i].style.display = "none";
                            uzyto[i].classList.remove("uzyto_wplaty");
                        }
                    }
                    function zmiana_wplyw(){
                        rok=+document.getElementById("rok_budzet").value;
                        var id;
                        if(document.getElementById("wplaty_select").value=="dzial")
                        {
                            //czyszczenie_wplaty();
                            var wpl_rozdzialy = document.getElementsByClassName("wpl_rozdzialy_"+rok);
                            for(var i = 0; i < wpl_rozdzialy.length; i++){
                                id=wpl_rozdzialy[i].id;
                                console.log(id);
                                console.log(document.getElementById(id).cells.item(1).innerHTML);
                                if(document.getElementById(id).cells.item(1).innerHTML==" " || document.getElementById(id).cells.item(1).innerHTML=="" || document.getElementById(id).cells.item(1).innerHTML==null)
                                {
                                    wpl_rozdzialy[i].style.display = "table-row"; 
                                    //wpl_rozdzialy[i].classList.add("uzyto_wplaty");
                                }else{
                                    wpl_rozdzialy[i].style.display = "none";
                                }
                            }
                        }else if(document.getElementById("wplaty_select").value=="reszta")
                        {
                            //czyszczenie_wplaty();
                            var wpl_rozdzialy = document.getElementsByClassName("wpl_rozdzialy_"+rok);
                            for(var i = 0; i < wpl_rozdzialy.length; i++){
                                id=wpl_rozdzialy[i].id;
                                console.log(id);
                                console.log(document.getElementById(id).cells.item(1).innerHTML);
                                if(document.getElementById(id).cells.item(1).innerHTML!=" " && document.getElementById(id).cells.item(1).innerHTML!="" && document.getElementById(id).cells.item(1).innerHTML!=null)
                                {
                                    wpl_rozdzialy[i].style.display = "table-row"; 
                                    //wpl_rozdzialy[i].classList.add("uzyto_wplaty");
                                }else{
                                    wpl_rozdzialy[i].style.display = "none";
                                }
                            }
                        }
                        console.log("wpl_dzial_"+rok);            
                    }
            </script>
            <div id="container" style="width: 100%; border-bottom: 25vmin;"></div>
            <input style="width: 19vmin; display: none;" onclick=" window.open('tabela.php','_blank')" type="button" value="Tabela Budżetu">
        </section>
            <!-- Wykres Kolumnowy -->
            <script type="text/javascript">
                google.charts.load("current", {packages:['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() 
                {
                    if(nazwa_tabela.length==1){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])]
                        ]);    
                    }else if(nazwa_tabela.length==2){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])]
                        ]);
                    }else if(nazwa_tabela.length==3){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])],
                            [nazwa_tabela[2], parseInt(liczba_tabela[2])]
                        ]); 
                    }else if(nazwa_tabela.length==4){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])],
                            [nazwa_tabela[2], parseInt(liczba_tabela[2])],
                            [nazwa_tabela[3], parseInt(liczba_tabela[3])]
                        ]); 

                    }else if(nazwa_tabela.length==5){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])],
                            [nazwa_tabela[2], parseInt(liczba_tabela[2])],
                            [nazwa_tabela[3], parseInt(liczba_tabela[3])],
                            [nazwa_tabela[4], parseInt(liczba_tabela[4])]
                        ]);
                    }else if(nazwa_tabela.length==6){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])],
                            [nazwa_tabela[2], parseInt(liczba_tabela[2])],
                            [nazwa_tabela[3], parseInt(liczba_tabela[3])],
                            [nazwa_tabela[4], parseInt(liczba_tabela[4])],
                            [nazwa_tabela[5], parseInt(liczba_tabela[5])]
                        ]); 
                    }else if(nazwa_tabela.length==7){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])],
                            [nazwa_tabela[2], parseInt(liczba_tabela[2])],
                            [nazwa_tabela[3], parseInt(liczba_tabela[3])],
                            [nazwa_tabela[4], parseInt(liczba_tabela[4])],
                            [nazwa_tabela[5], parseInt(liczba_tabela[5])],
                            [nazwa_tabela[6], parseInt(liczba_tabela[6])]
                        ]); 
                    }else if(nazwa_tabela.length==8){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])],
                            [nazwa_tabela[2], parseInt(liczba_tabela[2])],
                            [nazwa_tabela[3], parseInt(liczba_tabela[3])],
                            [nazwa_tabela[4], parseInt(liczba_tabela[4])],
                            [nazwa_tabela[5], parseInt(liczba_tabela[5])],
                            [nazwa_tabela[6], parseInt(liczba_tabela[6])],
                            [nazwa_tabela[7], parseInt(liczba_tabela[7])]
                        ]); 
                    }else if(nazwa_tabela.length==9){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])],
                            [nazwa_tabela[2], parseInt(liczba_tabela[2])],
                            [nazwa_tabela[3], parseInt(liczba_tabela[3])],
                            [nazwa_tabela[4], parseInt(liczba_tabela[4])],
                            [nazwa_tabela[5], parseInt(liczba_tabela[5])],
                            [nazwa_tabela[6], parseInt(liczba_tabela[6])],
                            [nazwa_tabela[7], parseInt(liczba_tabela[7])],
                            [nazwa_tabela[8], parseInt(liczba_tabela[8])]
                        ]); 
                    }else if(nazwa_tabela.length==10){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])],
                            [nazwa_tabela[2], parseInt(liczba_tabela[2])],
                            [nazwa_tabela[3], parseInt(liczba_tabela[3])],
                            [nazwa_tabela[4], parseInt(liczba_tabela[4])],
                            [nazwa_tabela[5], parseInt(liczba_tabela[5])],
                            [nazwa_tabela[6], parseInt(liczba_tabela[6])],
                            [nazwa_tabela[7], parseInt(liczba_tabela[7])],
                            [nazwa_tabela[8], parseInt(liczba_tabela[8])],
                            [nazwa_tabela[9], parseInt(liczba_tabela[9])]
                        ]); 
                    }else if(nazwa_tabela.length==11){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])],
                            [nazwa_tabela[2], parseInt(liczba_tabela[2])],
                            [nazwa_tabela[3], parseInt(liczba_tabela[3])],
                            [nazwa_tabela[4], parseInt(liczba_tabela[4])],
                            [nazwa_tabela[5], parseInt(liczba_tabela[5])],
                            [nazwa_tabela[6], parseInt(liczba_tabela[6])],
                            [nazwa_tabela[7], parseInt(liczba_tabela[7])],
                            [nazwa_tabela[8], parseInt(liczba_tabela[8])],
                            [nazwa_tabela[9], parseInt(liczba_tabela[9])],
                            [nazwa_tabela[10], parseInt(liczba_tabela[10])]
                        ]); 
                    }else if(nazwa_tabela.length==12){
                        var data = google.visualization.arrayToDataTable([
                            ["Nazwa", "Wartość"],
                            [nazwa_tabela[0], parseInt(liczba_tabela[0])],
                            [nazwa_tabela[1], parseInt(liczba_tabela[1])],
                            [nazwa_tabela[2], parseInt(liczba_tabela[2])],
                            [nazwa_tabela[3], parseInt(liczba_tabela[3])],
                            [nazwa_tabela[4], parseInt(liczba_tabela[4])],
                            [nazwa_tabela[5], parseInt(liczba_tabela[5])],
                            [nazwa_tabela[6], parseInt(liczba_tabela[6])],
                            [nazwa_tabela[7], parseInt(liczba_tabela[7])],
                            [nazwa_tabela[8], parseInt(liczba_tabela[8])],
                            [nazwa_tabela[9], parseInt(liczba_tabela[9])],
                            [nazwa_tabela[10], parseInt(liczba_tabela[10])],
                            [nazwa_tabela[11], parseInt(liczba_tabela[11])]
                        ]); 
                    }
                
                

                

                var view = new google.visualization.DataView(data);

                var options = {
                    title: "Rozdziały",
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };
                var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                chart.draw(data, options);
                }
            </script>

            <!-- -->
            <script type="text/javascript">
                const nazwa_tabela=[];
                const liczba_tabela=[];
                var z=0;
                function czyszczenie(){
                    var uzyto_podrozdzialy = document.getElementsByClassName("uzyto_podrozdzialy");
                    for(var i = 0; i < uzyto_podrozdzialy.length; i++){
                        uzyto_podrozdzialy[i].style.display = "none"; 
                        uzyto_podrozdzialy[i].classList.remove("uzyto_podrozdzialy");
                    }
                    var uzyto_podrozdzialy = document.getElementsByClassName("uzyto_podrozdzialy");
                    for(var i = 0; i < uzyto_podrozdzialy.length; i++){
                        uzyto_podrozdzialy[i].style.display = "none"; 
                        uzyto_podrozdzialy[i].classList.remove("uzyto_podrozdzialy");
                    }
                    var uzyto_podrozdzialy = document.getElementsByClassName("uzyto_podrozdzialy");
                    for(var i = 0; i < uzyto_podrozdzialy.length; i++){
                        uzyto_podrozdzialy[i].style.display = "none"; 
                        uzyto_podrozdzialy[i].classList.remove("uzyto_podrozdzialy");
                    }
                }
                function sprawdzanie_zdj(alternatywny_tekst){
                    nazwa_tabela.splice(0,nazwa_tabela.length);
                    liczba_tabela.splice(0,liczba_tabela.length);
                    z=0;
                    var rok="0";
                    rok="_"+document.getElementById("rok_budzet").value;
                    var zmienna_id;
                    var uzyto_rozdzialy = document.getElementsByClassName("uzyto_rozdzialy");
                    for(var i = 0; i < uzyto_rozdzialy.length; i++){
                        uzyto_rozdzialy[i].style.display = "none";
                        uzyto_rozdzialy[i].classList.remove("uzyto_rozdzialy");
                    }
                    var rozdzialy = document.getElementsByClassName(alternatywny_tekst+rok); //divsToHide is an array
                    for(var i = 0; i < rozdzialy.length; i++){
                        if(rozdzialy[i].style.display=="none"){
                            rozdzialy[i].style.display = "block";
                            rozdzialy[i].classList.add("uzyto_rozdzialy");
                            rozdzialy[i].classList.add("tabela_zdjecia");
                        }else if(rozdzialy[i].style.display=="block"){
                            rozdzialy[i].style.display = "none";
                            rozdzialy[i].classList.add("uzyto_rozdzialy");
                            rozdzialy[i].classList.add("tabela_zdjecia");
                        }
                        zmienna_id=rozdzialy[i].id;
                        console.log(rozdzialy[i].id);
                    }
                    czyszczenie();
                    console.log(zmienna_id);  
                    console.log(document.getElementsByClassName(document.getElementById(zmienna_id).rows[1].cells.item(0).innerHTML));
                    var podrozdzialy = document.getElementsByClassName(document.getElementById(zmienna_id).rows[1].cells.item(0).innerHTML+rok); //divsToHide is an array
                    for(var i = 0; i < podrozdzialy.length; i++){
                        if(podrozdzialy[i].style.display=="none"){
                            podrozdzialy[i].style.display = "table-row";
                        }else if(podrozdzialy[i].style.display=="block"){
                            podrozdzialy[i].style.display = "none";
                        }
                        nazwa_tabela[z]=podrozdzialy[i].cells.item(0).innerHTML;
                        liczba_tabela[z]=podrozdzialy[i].cells.item(1).innerHTML;
                        z++;
                        podrozdzialy[i].classList.add("uzyto_podrozdzialy");
                    }
                    console.log(rok);
                    console.log(nazwa_tabela);
                    console.log(liczba_tabela);
                    drawChart();
                }
            </script>
            <!-- Wykres Kołowy -->
            <script type="text/javascript">
                const nazwy = [];
                const wartosci = [];
                rok=+document.getElementById("rok_budzet").value;
                var chart = document.getElementsByTagName('table');
                var i=0;
                for( i = 0; i < chart.length; i++){
                    if(chart[i].rows[4].cells.item(0).innerHTML==rok)
                    {
                        nazwy.push(chart[i].rows[0].cells.item(0).innerHTML); 
                        wartosci.push(parseInt(chart[i].rows[3].cells.item(1).innerHTML));
                    }    
                }
                console.log(wartosci);
                console.log(nazwy);
                var pie = new ej.charts.AccumulationChart({
                    tooltip: { enable: true, header: 'Budżet', format: '${point.x}:<b> ${point.y}<b>' },
                    //Initializing Series
                    series: [
                        {
                            
                            dataSource: [
                                //{ 'x': 'Chrome', y: 37 }, { 'x': 'UC Browser', y: 17 },
                                {'x': nazwy[0], y: parseInt(wartosci[0])},
                                {'x': nazwy[1], y: parseInt(wartosci[1])},
                                {'x': nazwy[2], y: parseInt(wartosci[2])},
                                {'x': nazwy[3], y: parseInt(wartosci[3])},
                                {'x': nazwy[4], y: parseInt(wartosci[4])},
                                {'x': nazwy[5], y: parseInt(wartosci[5])},
                                {'x': nazwy[6], y: parseInt(wartosci[6])},
                                {'x': nazwy[7], y: parseInt(wartosci[7])},
                                {'x': nazwy[8], y: parseInt(wartosci[8])},
                                {'x': nazwy[9], y: parseInt(wartosci[9])},
                                {'x': nazwy[10], y: parseInt(wartosci[10])},
                                {'x': nazwy[11], y: parseInt(wartosci[11])},
                                {'x': nazwy[12], y: parseInt(wartosci[12])},
                                {'x': nazwy[13], y: parseInt(wartosci[13])},
                                {'x': nazwy[14], y: parseInt(wartosci[14])},
                                {'x': nazwy[15], y: parseInt(wartosci[15])},
                                {'x': nazwy[16], y: parseInt(wartosci[16])},
                                {'x': nazwy[17], y: parseInt(wartosci[17])},
                                {'x': nazwy[18], y: parseInt(wartosci[18])},
                                {'x': nazwy[19], y: parseInt(wartosci[19])},
                                {'x': nazwy[20], y: parseInt(wartosci[20])},
                                {'x': nazwy[21], y: parseInt(wartosci[21])},
                            ],
                            dataLabel: {
                                visible: false,
                                position: 'Outside',
                                format: '${point.y}'
                            },
                            xName: 'x',
                            yName: 'y'
                        }
                    ],
              });
              pie.appendTo('#container');
              $(window).resize(function(){
                pie.appendTo('#container');
              });
            </script>
        <section class="section-5 p-0">
            <div class="zmiana_koloru_trzy"></div>
        </section>
        <section class="section-6 p-0">
            <div class="div_kalkulator">
                <div class="txt_kalkulator"><a name="kotwica_kalkulator">Miesięczny podatek zasilający budżet gminy:<input id="suma_kalkulator" value="0zł" readonly></a>
                <select id="kalkulator_wydatki" onchange="zmiana_roku_kalkulator()">
                    <?php
                        $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                        if($conn-> connect_error){
                            die("Connection failed: ".$conn-> connect_error);
                        }

                        $sql= "SELECT DISTINCT wyd_kolumny.rok FROM `wyd_dzialy`,`wyd_kolumny`,`wyd_gminy` WHERE wyd_gminy.id=1;";
                        $result = $conn-> query($sql);
                

                        if ($result-> num_rows > 0){
                    
                            while ($row = mysqli_fetch_row($result)) {
                            echo <<<CMT
                                <option value='$row[0]'>$row[0]</option>
                            CMT;
                            }   
                        }
                            
                        else{
                            echo "0 result";
                        }
                        $conn-> close();
                    ?>
                </select>
                </div>
                <div id="kalkulator">
                
                

                  <form name="formularz">

                    <p>Kalkulator</p>

                    <input onkeyup="pomnoz()" type="text" size="10" id="textview" name="textview"><br>

                  </form>


                  <table id="przyciski_kalkulator">
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
                    <table id="desktop_table">
                        <tr>
                            <td><img src="szkolnictwo_wyzsze_i_nauka_biale.png" alt="szkolnictwo wyzsze i nauka" style="display: block;"></td>
                            <td class="kalkulator_txt">Szkolnictwo: 
                                <input type="text" class="input_txt" id="szkolnictwo" value="0zł">
                            </td>
                            <td><img src="urzedy_naczelnych_organow_biale.png" alt="Urzędy naczelnych organów" style="display: block;"></td>
                            <td class="kalkulator_txt">Urzędy: 
                                <input type="text" class="input_txt" id="urzedy_naczelnych" value="0zł">
                            </td>
                            <td><img src="lesnictwo_biale.png" alt="Rybołówstwo i rybactwo" style="display: block;"></td>
                            <td class="kalkulator_txt">Leśnictwo: 
                                <input type="text" class="input_txt" id="lescnictwo" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="rolnictwo_i_lowiectwo_biale.png" alt="Rolnictwo i Łowiestwo" style="display: block;"></td>
                            <td class="kalkulator_txt">Rolnictwo: 
                                <input type="text" class="input_txt" id="rolnictwo" value="0zł">
                            </td>
                            <td><img src="wymiar_sprawiedliwosci_biale.png" alt="Wymiar sprawiedliwosci" style="display: block;"></td>
                            <td class="kalkulator_txt">Wymiar Sprawiedliwości: 
                                <input type="text" class="input_txt" id="sprawiedliwosci" value="0zł">
                            </td>
                            <td><img src="gospodarka_mieszkaniowa_biale.png" alt="Gospodarka mieszkaniowa"></td>
                            <td class="kalkulator_txt">Mieszkaniowa: 
                                <input type="text" class="input_txt" id="mieszkaniowa" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="pozostale_zadania_biale.png" alt="Pozostałe zadania"></td>
                            <td class="kalkulator_txt">Pozostałe: 
                                <input type="text" class="input_txt" id="pozostale" value="0zł">
                            </td>
                            <td><img src="administracja_publiczna_biale.png" alt="Administracja publiczna"></td>
                            <td class="kalkulator_txt">Administracja: 
                                <input type="text" class="input_txt" id="administracja" value="0zł">
                            </td>
                            <td><img src="bezpieczenstwo_publiczne_straz_pozarna_biale.png" alt="Bezpieczeństwo publiczne i straż pożarna" style="display: block;"></td>
                            <td class="kalkulator_txt">Bezpieczeństwo: 
                                <input type="text" class="input_txt" id="bezpieczenstwo" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="dzialalnosc_uslugowa_biale.png" alt="Działalność Usługowa" style="display: block;"></td>
                            <td class="kalkulator_txt">Usługowa: 
                                <input type="text" class="input_txt" id="uslugowa" value="0zł">
                            </td>
                            <td><img src="gospodarka_komunalna_i_ochrona_srodowiska_biale.png" alt="Gospodarka komunalna i ochrona środowiska"></td>
                            <td class="kalkulator_txt">Komunalna: 
                                <input type="text" class="input_txt" id="komunalna" value="0zł">
                            </td>
                            <td><img src="transport_i_lacznosc_biale.png" alt="Transport i łączność"></td>
                            <td class="kalkulator_txt">Transport: 
                                <input type="text" class="input_txt" id="transport" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="pomoc_spoleczna_biale.png" alt="Pomoc Społeczna"></td>
                            <td class="kalkulator_txt">Pomoc: 
                                <input type="text" class="input_txt" id="pomoc" value="0zł">
                            </td>
                            <td><img src="edukacja_opieka_wychowawcza_biale.png" alt="Edukacja i opieka Wychowawcza" style="display: block;"></td>
                            <td class="kalkulator_txt">Edukacja: 
                                <input type="text" class="input_txt" id="edukacja" value="0zł">
                            </td>
                            <td><img src="obsluga_dlugu_publicznego_biale.png" alt="Obsługa długu publicznego" style="display: block;"></td>
                            <td class="kalkulator_txt">Obsługa Długu: 
                                <input type="text" class="input_txt" id="obsluga_dlugu" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="oswiata_i_wychowanie_biale.png" alt="Oświata i wychowanie"></td>
                            <td class="kalkulator_txt">Oświata: 
                                <input type="text" class="input_txt" id="oswiata" value="0zł">
                            </td>
                            <td><img src="kultura_fizyczna_biale.png" alt="Kultura Fizyczna" style="display: block;"></td>
                            <td class="kalkulator_txt">Kultura Fizyczna: 
                                <input type="text" class="input_txt" id="kultura_fizyczna" value="0zł">
                            </td>
                            <td><img src="kultura_i_ochrona_dziedzistwa_narodowego_biale.png" alt="Kultura i ochrona dziedzictwa Narodowego" style="display: block;"></td>
                            <td class="kalkulator_txt">Kultura: 
                                <input type="text" class="input_txt" id="kultura" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="rozne_rozliczenia_biale.png" alt="Różne Rozliczenia" style="display: block;"></td>
                            <td class="kalkulator_txt">Rozliczenia: 
                                <input type="text" class="input_txt" id="rozne_rozliczenia" value="0zł">
                            </td>
                            <td><img src="rodzina_biale.png" alt="Rodzina" style="display: block;"></td>
                            <td class="kalkulator_txt">Rodzina: 
                                <input type="text" class="input_txt" id="rodzina" value="0zł">
                            </td>
                            <td><img src="ochrona_zdrowia_biale.png" alt="Ochrona zdrowia" style="display: block;"></td>
                            <td class="kalkulator_txt">Ochrona Zdrowia: 
                                <input type="text" class="input_txt" id="ochrona_zdrowia" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="turystyka_biale.png" alt="Turystyka" style="display: block;"></td>
                            <td class="kalkulator_txt">Turystyka: 
                                <input type="text" class="input_txt" id="turystyka" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="energia_energetyczna_gaz_i_woda_biale.png" alt="Energia energetyczna, gaz i woda" style="display: none;"></td>
                            <td class="kalkulator_txt" style="display: none;">Energia: 
                                <input type="text" class="input_txt" id="energia" style="display: none;" value="0zł">
                            </td>
                        </tr>
                    </table>

                    <table id="mobile_table" style="display: none;">
                        <tr>
                            <td><img src="szkolnictwo_wyzsze_i_nauka_biale.png" alt="szkolnictwo wyzsze i nauka" style="display: block;"></td>
                            <td class="kalkulator_txt">Szkolnictwo: 
                                <input type="text" class="input_txt" id="szkolnictwo_mobilne" value="0zł">
                            </td>
                            <td><img src="urzedy_naczelnych_organow_biale.png" alt="Urzędy naczelnych organów" style="display: block;"></td>
                            <td class="kalkulator_txt">Urzędy: 
                                <input type="text" class="input_txt" id="urzedy_naczelnych_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="lesnictwo_biale.png" alt="Rybołówstwo i rybactwo" style="display: block;"></td>
                            <td class="kalkulator_txt">Leśnictwo: 
                                <input type="text" class="input_txt" id="lescnictwo_mobilne" value="0zł">
                            </td>
                            <td><img src="rolnictwo_i_lowiectwo_biale.png" alt="Rolnictwo i Łowiestwo" style="display: block;"></td>
                            <td class="kalkulator_txt">Rolnictwo: 
                                <input type="text" class="input_txt" id="rolnictwo_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="wymiar_sprawiedliwosci_biale.png" alt="Wymiar sprawiedliwosci" style="display: block;"></td>
                            <td class="kalkulator_txt">Wymiar Sprawiedliwości: 
                                <input type="text" class="input_txt" id="sprawiedliwosci_mobilne" value="0zł">
                            </td>
                            <td><img src="gospodarka_mieszkaniowa_biale.png" alt="Gospodarka mieszkaniowa"></td>
                            <td class="kalkulator_txt">Mieszkaniowa: 
                                <input type="text" class="input_txt" id="mieszkaniowa_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="administracja_publiczna_biale.png" alt="Administracja publiczna"></td>
                            <td class="kalkulator_txt">Administracja: 
                                <input type="text" class="input_txt" id="administracja_mobilne" value="0zł">
                            </td>
                            <td><img src="bezpieczenstwo_publiczne_straz_pozarna_biale.png" alt="Bezpieczeństwo publiczne i straż pożarna" style="display: block;"></td>
                            <td class="kalkulator_txt">Bezpieczeństwo: 
                                <input type="text" class="input_txt" id="bezpieczenstwo_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="pozostale_zadania_biale.png" alt="Pozostałe zadania"></td>
                            <td class="kalkulator_txt">Pozostałe: 
                                <input type="text" class="input_txt" id="pozostale_mobilne" value="0zł">
                            </td>
                            <td><img src="dzialalnosc_uslugowa_biale.png" alt="Działalność Usługowa" style="display: block;"></td>
                            <td class="kalkulator_txt">Usługowa: 
                                <input type="text" class="input_txt" id="uslugowa_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="gospodarka_komunalna_i_ochrona_srodowiska_biale.png" alt="Gospodarka komunalna i ochrona środowiska"></td>
                            <td class="kalkulator_txt">Komunalna: 
                                <input type="text" class="input_txt" id="komunalna_mobilne" value="0zł">
                            </td>
                            <td><img src="transport_i_lacznosc_biale.png" alt="Transport i łączność"></td>
                            <td class="kalkulator_txt">Transport: 
                                <input type="text" class="input_txt" id="transport_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="edukacja_opieka_wychowawcza_biale.png" alt="Edukacja i opieka Wychowawcza" style="display: block;"></td>
                            <td class="kalkulator_txt">Edukacja: 
                                <input type="text" class="input_txt" id="edukacja_mobilne" value="0zł">
                            </td>
                            <td><img src="obsluga_dlugu_publicznego_biale.png" alt="Obsługa długu publicznego" style="display: block;"></td>
                            <td class="kalkulator_txt">Obsługa Długu: 
                                <input type="text" class="input_txt" id="obsluga_dlugu_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="pomoc_spoleczna_biale.png" alt="Pomoc Społeczna"></td>
                            <td class="kalkulator_txt">Pomoc: 
                                <input type="text" class="input_txt" id="pomoc_mobilne" value="0zł">
                            </td>
                            <td><img src="oswiata_i_wychowanie_biale.png" alt="Oświata i wychowanie"></td>
                            <td class="kalkulator_txt">Oświata: 
                                <input type="text" class="input_txt" id="oswiata_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="kultura_fizyczna_biale.png" alt="Kultura Fizyczna" style="display: block;"></td>
                            <td class="kalkulator_txt">Kultura Fizyczna: 
                                <input type="text" class="input_txt" id="kultura_fizyczna_mobilne" value="0zł">
                            </td>
                            <td><img src="kultura_i_ochrona_dziedzistwa_narodowego_biale.png" alt="Kultura i ochrona dziedzictwa Narodowego" style="display: block;"></td>
                            <td class="kalkulator_txt">Kultura: 
                                <input type="text" class="input_txt" id="kultura_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="rodzina_biale.png" alt="Rodzina" style="display: block;"></td>
                            <td class="kalkulator_txt">Rodzina: 
                                <input type="text" class="input_txt" id="rodzina_mobilne" value="0zł">
                            </td>
                            <td><img src="ochrona_zdrowia_biale.png" alt="Ochrona zdrowia" style="display: block;"></td>
                            <td class="kalkulator_txt">Ochrona Zdrowia: 
                                <input type="text" class="input_txt" id="ochrona_zdrowia_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="rozne_rozliczenia_biale.png" alt="Różne Rozliczenia" style="display: block;"></td>
                            <td class="kalkulator_txt">Rozliczenia: 
                                <input type="text" class="input_txt" id="rozne_rozliczenia_mobilne" value="0zł">
                            </td>
                            <td><img src="turystyka_biale.png" alt="Turystyka" style="display: block;"></td>
                            <td class="kalkulator_txt">Turystyka: 
                                <input type="text" class="input_txt" id="turystyka_mobilne" value="0zł">
                            </td>
                        </tr>
                        <tr>
                            <td><img src="energia_energetyczna_gaz_i_woda_biale.png" alt="Energia energetyczna, gaz i woda" style="display: none;"></td>
                            <td class="kalkulator_txt" style="display: none;">Energia: 
                                <input type="text" class="input_txt" id="energia_mobilne" style="display: none;">
                            </td>
                        </tr>
                    </table>           
                </div>
            </div>
        </section>
        <section class="section-7 p-0">
            <div class="zmiana_koloru_cztery"></div>
            <div class="wykresy">
                <a name="kotwica_wykresy"><div id="google_data"><iframe class="responsive-iframe" id="datastudio" src="https://datastudio.google.com/embed/reporting/1becf60a-f006-464e-9323-b65fc490b52f/page/p_o2yeqgkurc" frameborder="5" allowfullscreen></iframe></div></a>
            </div>
            <div class="zmiana_koloru_piec"></div>
        </section>
        <section class="section-8 p-0">
            <div class="stopka">
                <div class="stopka_txt"><a style="text-decoration: none; color: black;" href="kosakowo2.php" target="_blank">Wyloguj</a></div>
            </div>
        </section>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <script>

        /* Storing user's device details in a variable*/
        let details = navigator.userAgent;
  
        /* Creating a regular expression 
        containing some mobile devices keywords 
        to search it in details string*/
        let regexp = /android|iphone|kindle|ipad/i;
  
        /* Using test() method to search regexp in details
        it returns boolean value*/
        let isMobileDevice = regexp.test(details);
  
        if (isMobileDevice) {
            document.getElementById("tablica_wydatki_div").style.marginLeft  = "auto";
            document.getElementById("tablica_wydatki_div").style.marginRight = "auto";
            document.getElementById("columnchart_values").style.marginLeft = "auto";
            document.getElementById("columnchart_values").style.marginRight = "auto";
            document.getElementById("mobile_table").style.display = "block";
            document.getElementById("desktop_table").style.display = "none";
            document.getElementById("budzet_gminy_2020").style.display = "block";
            document.getElementById("rok_budzet");
            document.getElementById('rok_budzet').getElementsByTagName('option')[0].selected = 'selected'
            console.log("You are using a Mobile Device");
        } else {
            document.getElementById("Div_zdj_rozdzialy").classList.add("d-inline-flex");
            document.getElementById("Div_zdj_rozdzialy").classList.add("p-2");
            document.getElementById("columnchart_values").style.marginLeft = "auto";
            document.getElementById("columnchart_values").style.marginRight = "auto";
            document.getElementById("mobile_table").style.display = "none";
            document.getElementById("desktop_table").style.display = "block";
            document.getElementById("budzet_gminy_2020").style.display = "block";
            document.getElementById("rodzina_zdj").click();
            document.getElementById('rok_budzet').getElementsByTagName('option')[0].selected = 'selected'
            console.log("You are using Desktop");
        }
        console.log(document.getElementById('Urzędy naczelnych organów władzy państwowej, kontroli i ochrony prawa oraz sądownictwa_2022').rows[2].cells.item(1).innerHTML);
    </script>
</html>

