<?php 
    session_start();

	include("connection.php");
	include("functions.php");
    
    if(isset($_POST['przycisk']))
    {
    
        //2021
        $prc_1_21=$_POST['inp_1_21'];
        $prc_2_21=$_POST['inp_2_21']; 
        $prc_3_21=$_POST['inp_3_21'];
        $prc_4_21=$_POST['inp_4_21'];
        $prc_5_21=$_POST['inp_5_21']; 
        $prc_6_21=$_POST['inp_6_21'];
        $prc_7_21=((($prc_1_21)+($prc_2_21)+($prc_3_21)+($prc_4_21)+($prc_5_21)+($prc_6_21))-100)*-1;
        $budzet_zmienna_21=$_POST['budzet_21'];
        //2020
        $prc_1_20=$_POST['inp_1_20'];
        $prc_2_20=$_POST['inp_2_20']; 
        $prc_3_20=$_POST['inp_3_20'];
        $prc_4_20=$_POST['inp_4_20'];
        $prc_5_20=$_POST['inp_5_20']; 
        $prc_6_20=$_POST['inp_6_20'];
        $prc_7_20=((($prc_1_20)+($prc_2_20)+($prc_3_20)+($prc_4_20)+($prc_5_20)+($prc_6_20))-100)*-1;
        $budzet_zmienna_20=$_POST['budzet_20'];
        //2019
        $prc_1_19=$_POST['inp_1_19'];
        $prc_2_19=$_POST['inp_2_19']; 
        $prc_3_19=$_POST['inp_3_19'];
        $prc_4_19=$_POST['inp_4_19'];
        $prc_5_19=$_POST['inp_5_19']; 
        $prc_6_19=$_POST['inp_6_19'];
        $prc_7_19=((($prc_1_19)+($prc_2_19)+($prc_3_19)+($prc_4_19)+($prc_5_19)+($prc_6_19))-100)*-1;
        $budzet_zmienna_19=$_POST['budzet_19'];
        //2018
        $prc_1_18=$_POST['inp_1_18'];
        $prc_2_18=$_POST['inp_2_18']; 
        $prc_3_18=$_POST['inp_3_18'];
        $prc_4_18=$_POST['inp_4_18'];
        $prc_5_18=$_POST['inp_5_18']; 
        $prc_6_18=$_POST['inp_6_18'];
        $prc_7_18=((($prc_1_18)+($prc_2_18)+($prc_3_18)+($prc_4_18)+($prc_5_18)+($prc_6_18))-100)*-1;
        $budzet_zmienna_18=$_POST['budzet_18'];
        //rok
        $rok=$_POST['rok'];
        
    
        $query = "UPDATE `procenty`
        SET prc_1='$prc_1_21', prc_2='$prc_2_21', prc_3='$prc_3_21', prc_4='$prc_4_21', prc_5='$prc_5_21', prc_6='$prc_6_21', prc_7='$prc_7_21', budzet_zmienna='$budzet_zmienna_21'    
        WHERE miejscowosc='Kosakowo' AND rok='2021'";
    
        mysqli_query($con, $query);

        $query2 = "UPDATE `procenty`
        SET prc_1='$prc_1_20', prc_2='$prc_2_20', prc_3='$prc_3_20', prc_4='$prc_4_20', prc_5='$prc_5_20', prc_6='$prc_6_20', prc_7='$prc_7_20', budzet_zmienna='$budzet_zmienna_20'    
        WHERE miejscowosc='Kosakowo' AND rok='2020'";
    
        mysqli_query($con, $query2);   
            
        $query3 = "UPDATE `procenty`
        SET prc_1='$prc_1_19', prc_2='$prc_2_19', prc_3='$prc_3_19', prc_4='$prc_4_19', prc_5='$prc_5_19', prc_6='$prc_6_19', prc_7='$prc_7_19', budzet_zmienna='$budzet_zmienna_19'    
        WHERE miejscowosc='Kosakowo' AND rok='2019'";
    
        mysqli_query($con, $query3);   
            
        $query4 = "UPDATE `procenty`
        SET prc_1='$prc_1_18', prc_2='$prc_2_18', prc_3='$prc_3_18', prc_4='$prc_4_18', prc_5='$prc_5_18', prc_6='$prc_6_18', prc_7='$prc_7_18', budzet_zmienna='$budzet_zmienna_18'    
        WHERE miejscowosc='Kosakowo' AND rok='2018'";
    
        mysqli_query($con, $query4);   
            
            
        
        
    
    }
    else
    {
        
    }

	
?>

<head>
    <link rel="stylesheet" type="text/css" href="style2.css"/>
    <!--<link rel="stylesheet" media="print" href="style2.css"/>-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!--<link rel="stylesheet" href="checkbox.css">-->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--<script src="checkbox.css"></script>-->
    <script src="main2.js"></script>
    <script src="budzet_zdj.js"></script>
    <script src="kalkulator.js"></script>
    <script type="text/javascript" src="papaparse.min.js"></script>

</head>
<body>
    <header>
      <div class="container">
        <a href="JavaScript: location.reload(true);"><img src="KOSAKOWO_logo_dobre.jpg" alt="Logo Gmina Kosakowo"></a>

        <nav>
          <ul> 
            <li><a href="#kotwica_zmiana">Zmiana Procentów</a></li>
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
          <a name="kotwica_zmiana">Procenty</a>
          <div class="popup" id="popup-1">
              <div class="overlay"></div>
              <div class="content">
                  <div class="close-btn" onclick="togglePopup_oswiata()">&times;</div>
                  <h1>Oświata</h1>
                  <h2>Wybierz rok:</h2>
                  <input type="checkbox" id="cbx_2021_oswiata" onChange="checker()" style="display: none;" checked/>2021
                  <label for="cbx_2021_oswiata" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2020_oswiata" onChange="checker()" style="display: none;"/>2020
                  <label for="cbx_2020_oswiata" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2019_oswiata" onChange="checker()" style="display: none;"/>2019
                  <label for="cbx_2019_oswiata" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2018_oswiata" onChange="checker()" style="display: none;"/>2018
                  <label for="cbx_2018_oswiata" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
              </div>
          </div>  
          <div class="popup-2" id="popup-2">
              <div class="overlay-2"></div>
              <div class="content-2">
                  <div class="close-btn-2" onclick="togglePopup_pomoc()">&times;</div>
                  <h1>Pomoc Społeczna</h1>
                  <h2>Wybierz rok:</h2>
                  <input type="checkbox" id="cbx_2021_pomoc" onChange="checker()" style="display: none;" checked/>2021
                  <label for="cbx_2021_pomoc" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2020_pomoc" onChange="checker()" style="display: none;"/>2020
                  <label for="cbx_2020_pomoc" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2019_pomoc" onChange="checker()" style="display: none;"/>2019
                  <label for="cbx_2019_pomoc" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2018_pomoc" onChange="checker()" style="display: none;"/>2018
                  <label for="cbx_2018_pomoc" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
              </div>
          </div>
          <div class="popup-3" id="popup-3">
              <div class="overlay-3"></div>
              <div class="content-3">
                  <div class="close-btn-3" onclick="togglePopup_komunalna()">&times;</div>
                  <h1>Komunalna</h1>
                  <h2>Wybierz rok:</h2>
                  <input type="checkbox" id="cbx_2021_komunalna" onChange="checker()" style="display:none;" checked/>2021
                  <label for="cbx_2021_komunalna" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2020_komunalna" onChange="checker()" style="display:none;"/>2020
                  <label for="cbx_2020_komunalna" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2019_komunalna" onChange="checker()" style="display:none;"/>2019
                  <label for="cbx_2019_komunalna" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2018_komunalna" onChange="checker()" style="display:none;"/>2018
                  <label for="cbx_2018_komunalna" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
              </div>
          </div>
          <div class="popup-4" id="popup-4">
              <div class="overlay-4"></div>
              <div class="content-4">
                  <div class="close-btn-4" onclick="togglePopup_transport()">&times;</div>
                  <h1>Transport</h1>
                  <h2>Wybierz rok:</h2>
                  <input type="checkbox" id="cbx_2021_transport" onChange="checker()" style="display:none;" checked/>2021
                  <label for="cbx_2021_transport" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2020_transport" onChange="checker()" style="display:none;"/>2020
                  <label for="cbx_2020_transport" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2019_transport" onChange="checker()" style="display:none;"/>2019
                  <label for="cbx_2019_transport" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2018_transport" onChange="checker()" style="display:none;"/>2018
                  <label for="cbx_2018_transport" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
              </div>
          </div>
          <div class="popup-5" id="popup-5">
              <div class="overlay-5"></div>
              <div class="content-5">
                  <div class="close-btn-5" onclick="togglePopup_administracja()">&times;</div>
                  <h1>Administracja</h1>
                  <h2>Wybierz rok:</h2>
                  <input type="checkbox" id="cbx_2021_administracja" onChange="checker()" style="display:none;" checked/>2021
                  <label for="cbx_2021_administracja" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2020_administracja" onChange="checker()" style="display:none;"/>2020
                  <label for="cbx_2020_administracja" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2019_administracja" onChange="checker()" style="display:none;"/>2019
                  <label for="cbx_2019_administracja" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2018_administracja" onChange="checker()" style="display:none;"/>2018
                  <label for="cbx_2018_administracja" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
              </div>
          </div>
          <div class="popup-6" id="popup-6">
              <div class="overlay-6"></div>
              <div class="content-6">
                  <div class="close-btn-6" onclick="togglePopup_mieszkaniowa()">&times;</div>
                  <h1>Mieszkaniowa</h1>
                  <h2>Wybierz rok:</h2>
                  <input type="checkbox" id="cbx_2021_mieszkaniowa" onChange="checker()" style="display:none;" checked/>2021
                  <label for="cbx_2021_mieszkaniowa" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2020_mieszkaniowa" onChange="checker()" style="display:none;"/>2020
                  <label for="cbx_2020_mieszkaniowa" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2019_mieszkaniowa" onChange="checker()" style="display:none;"/>2019
                  <label for="cbx_2019_mieszkaniowa" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2018_mieszkaniowa" onChange="checker()" style="display:none;"/>2018
                  <label for="cbx_2018_mieszkaniowa" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
              </div>
          </div>
          <div class="popup-7" id="popup-7">
              <div class="overlay-7"></div>
              <div class="content-7">
                  <div class="close-btn-7" onclick="togglePopup_pozostale()">&times;</div>
                  <h1>Pozostałe</h1>
                  <h2>Wybierz rok:</h2>
                  <input type="checkbox" id="cbx_2021_pozostale" onChange="checker()" style="display:none;" checked/>2021
                  <label for="cbx_2021_pozostale" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2020_pozostale" onChange="checker()" style="display:none;"/>2020
                  <label for="cbx_2020_pozostale" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2019_pozostale" onChange="checker()" style="display:none;"/>2019
                  <label for="cbx_2019_pozostale" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2018_pozostale" onChange="checker()" style="display:none;"/>2018
                  <label for="cbx_2018_pozostale" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
              </div>
          </div>
          <div class="popup-8" id="popup-8">
              <div class="overlay-8"></div>
              <div class="content-8">
                  <div class="close-btn-8" onclick="togglePopup_budzet()">&times;</div>
                  <h1>Budżet Gminy</h1>
                  <h2>Wybierz rok:</h2>
                  <input type="checkbox" id="cbx_2021_budzet" onChange="checker()" style="display:none;" checked/>2021
                  <label for="cbx_2021_budzet" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2020_budzet" onChange="checker()" style="display:none;"/>2020
                  <label for="cbx_2020_budzet" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2019_budzet" onChange="checker()" style="display:none;"/>2019
                  <label for="cbx_2019_budzet" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
                  <input type="checkbox" id="cbx_2018_budzet" onChange="checker()" style="display:none;"/>2018
                  <label for="cbx_2018_budzet" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                        <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                        <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                  </label>
              </div>
          </div>
          <div class="tablice">
           <form method="POST" action=""> 
            <table> 
                            
                <tr>
                    <td onclick="togglePopup_oswiata()">
                        Oswiata
                    </td>                   
                </tr>
                <tr>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2021'";
                    $result = $conn-> query($sql);
                    $sql2= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2020'";
                    $result2 = $conn-> query($sql2);
                    $sql3= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2019'";
                    $result3 = $conn-> query($sql3);
                    $sql4= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2018'";
                    $result4 = $conn-> query($sql4);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                            echo"
                            <tr> 
                                <td id='inp_1_21_txt'>2021</td>
                                <td><input type='number' id='inp_1_21' value=".$row['prc_1']."
                                name='inp_1_21' min='0' max='100' step='0.01'></td>
                            </tr>
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result2-> num_rows > 0){
            
                        while ($row = $result2-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_1_20_txt'>2020</td>
                                <td><input type='number' id='inp_1_20' value=".$row['prc_1']."
                                name='inp_1_20' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result3-> num_rows > 0){
            
                        while ($row = $result3-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_1_19_txt'>2019</td>
                                <td><input type='number' id='inp_1_19' value=".$row['prc_1']."
                                name='inp_1_19' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result4-> num_rows > 0){
            
                        while ($row = $result4-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_1_18_txt'>2018</td>
                                <td><input type='number' id='inp_1_18' value=".$row['prc_1']."
                                name='inp_1_18' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                </tr>
            </table>
            <table>
                <tr>
                    <td onclick="togglePopup_pomoc()">Pomoc Społeczna</td>
                </tr>
                <tr>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2021'";
                    $result = $conn-> query($sql);
                    $sql2= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2020'";
                    $result2 = $conn-> query($sql2);
                    $sql3= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2019'";
                    $result3 = $conn-> query($sql3);
                    $sql4= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2018'";
                    $result4 = $conn-> query($sql4);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                            echo"
                            <tr> 
                                <td id='inp_2_21_txt'>2021</td>
                                <td><input type='number' id='inp_2_21' value=".$row['prc_2']."
                                name='inp_2_21' min='0' max='100' step='0.01'></td>
                            </tr>
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result2-> num_rows > 0){
            
                        while ($row = $result2-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_2_20_txt'>2020</td>
                                <td><input type='number' id='inp_2_20' value=".$row['prc_2']."
                                name='inp_2_20' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result3-> num_rows > 0){
            
                        while ($row = $result3-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_2_19_txt'>2019</td>
                                <td><input type='number' id='inp_2_19' value=".$row['prc_2']."
                                name='inp_2_19' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result4-> num_rows > 0){
            
                        while ($row = $result4-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_2_18_txt'>2018</td>
                                <td><input type='number' id='inp_2_18' value=".$row['prc_2']."
                                name='inp_2_18' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                </tr>
            </table>
            <table>
                <tr>
                    <td onclick="togglePopup_komunalna()">Komunalna</td>
                </tr>
                <tr>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2021'";
                    $result = $conn-> query($sql);
                    $sql2= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2020'";
                    $result2 = $conn-> query($sql2);
                    $sql3= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2019'";
                    $result3 = $conn-> query($sql3);
                    $sql4= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2018'";
                    $result4 = $conn-> query($sql4);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                            echo"
                            <tr> 
                                <td id='inp_3_21_txt'>2021</td>
                                <td><input type='number' id='inp_3_21' value=".$row['prc_3']."
                                name='inp_3_21' min='0' max='100' step='0.01'></td>
                            </tr>
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result2-> num_rows > 0){
            
                        while ($row = $result2-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_3_20_txt'>2020</td>
                                <td><input type='number' id='inp_3_20' value=".$row['prc_3']."
                                name='inp_3_20' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result3-> num_rows > 0){
            
                        while ($row = $result3-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_3_19_txt'>2019</td>
                                <td><input type='number' id='inp_3_19' value=".$row['prc_3']."
                                name='inp_3_19' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result4-> num_rows > 0){
            
                        while ($row = $result4-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_3_18_txt'>2018</td>
                                <td><input type='number' id='inp_3_18' value=".$row['prc_3']."
                                name='inp_3_18' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                </tr>
            </table>
            <table>
                <tr>
                    <td onclick="togglePopup_transport()">Transport</td>
                </tr>
                <tr>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2021'";
                    $result = $conn-> query($sql);
                    $sql2= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2020'";
                    $result2 = $conn-> query($sql2);
                    $sql3= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2019'";
                    $result3 = $conn-> query($sql3);
                    $sql4= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2018'";
                    $result4 = $conn-> query($sql4);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                            echo"
                            <tr> 
                                <td id='inp_4_21_txt'>2021</td>
                                <td><input type='number' id='inp_4_21' value=".$row['prc_4']."
                                name='inp_4_21' min='0' max='100' step='0.01'></td>
                            </tr>
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result2-> num_rows > 0){
            
                        while ($row = $result2-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_4_20_txt'>2020</td>
                                <td><input type='number' id='inp_4_20' value=".$row['prc_4']."
                                name='inp_4_20' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result3-> num_rows > 0){
            
                        while ($row = $result3-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_4_19_txt'>2019</td>
                                <td><input type='number' id='inp_4_19' value=".$row['prc_4']."
                                name='inp_4_19' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result4-> num_rows > 0){
            
                        while ($row = $result4-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_4_18_txt'>2018</td>
                                <td><input type='number' id='inp_4_18' value=".$row['prc_4']."
                                name='inp_4_18' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                </tr>
            </table>
            <table>
                <tr>
                    <td onclick="togglePopup_administracja()">Administracja</td>
                </tr>
                <tr>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2021'";
                    $result = $conn-> query($sql);
                    $sql2= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2020'";
                    $result2 = $conn-> query($sql2);
                    $sql3= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2019'";
                    $result3 = $conn-> query($sql3);
                    $sql4= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2018'";
                    $result4 = $conn-> query($sql4);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                            echo"
                            <tr> 
                                <td id='inp_5_21_txt'>2021</td>
                                <td><input type='number' id='inp_5_21' value=".$row['prc_5']."
                                name='inp_5_21' min='0' max='100' step='0.01'></td>
                            </tr>
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result2-> num_rows > 0){
            
                        while ($row = $result2-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_5_20_txt'>2020</td>
                                <td><input type='number' id='inp_5_20' value=".$row['prc_5']."
                                name='inp_5_20' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result3-> num_rows > 0){
            
                        while ($row = $result3-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_5_19_txt'>2019</td>
                                <td><input type='number' id='inp_5_19' value=".$row['prc_5']."
                                name='inp_5_19' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result4-> num_rows > 0){
            
                        while ($row = $result4-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_5_18_txt'>2018</td>
                                <td><input type='number' id='inp_5_18' value=".$row['prc_5']."
                                name='inp_5_18' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                </tr>
            </table>
            <table>
                <tr>
                    <td onclick="togglePopup_mieszkaniowa()">Mieszkaniowa</td>
                </tr>
                <tr>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2021'";
                    $result = $conn-> query($sql);
                    $sql2= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2020'";
                    $result2 = $conn-> query($sql2);
                    $sql3= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2019'";
                    $result3 = $conn-> query($sql3);
                    $sql4= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2018'";
                    $result4 = $conn-> query($sql4);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                            echo"
                            <tr> 
                                <td id='inp_6_21_txt'>2021</td>
                                <td><input type='number' id='inp_6_21' value=".$row['prc_6']."
                                name='inp_6_21' min='0' max='100' step='0.01'></td>
                            </tr>
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result2-> num_rows > 0){
            
                        while ($row = $result2-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_6_20_txt'>2020</td>
                                <td><input type='number' id='inp_6_20' value=".$row['prc_6']."
                                name='inp_6_20' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result3-> num_rows > 0){
            
                        while ($row = $result3-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_6_19_txt'>2019</td>
                                <td><input type='number' id='inp_6_19' value=".$row['prc_6']."
                                name='inp_6_19' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result4-> num_rows > 0){
            
                        while ($row = $result4-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_6_18_txt'>2018</td>
                                <td><input type='number' id='inp_6_18' value=".$row['prc_6']."
                                name='inp_6_18' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                </tr>
            </table>
            <table>
                <tr>
                    <td onclick="togglePopup_pozostale()">Pozostałe</td>
                </tr>
                <tr>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2021'";
                    $result = $conn-> query($sql);
                    $sql2= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2020'";
                    $result2 = $conn-> query($sql2);
                    $sql3= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2019'";
                    $result3 = $conn-> query($sql3);
                    $sql4= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2018'";
                    $result4 = $conn-> query($sql4);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                            echo"
                            <tr> 
                                <td id='inp_7_21_txt'>2021</td>
                                <td><input type='number' id='inp_7_21' value=".$row['prc_7']."
                                name='inp_7_21' min='0' max='100' step='0.01'></td>
                            </tr>
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result2-> num_rows > 0){
            
                        while ($row = $result2-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_7_20_txt'>2020</td>
                                <td><input type='number' id='inp_7_20' value=".$row['prc_7']."
                                name='inp_7_20' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result3-> num_rows > 0){
            
                        while ($row = $result3-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_7_19_txt'>2019</td>
                                <td><input type='number' id='inp_7_19' value=".$row['prc_7']."
                                name='inp_7_19' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result4-> num_rows > 0){
            
                        while ($row = $result4-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='inp_7_18_txt'>2018</td>
                                <td><input type='number' id='inp_7_18' value=".$row['prc_7']."
                                name='inp_7_18' min='0' max='100' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                </tr>
              
            </table>
            <table id="budzet_tabela">
                <tr>
                    <td onclick="togglePopup_budzet()">Budżet Gminy</td>
                </tr>
                <tr>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2021'";
                    $result = $conn-> query($sql);
                    $sql2= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2020'";
                    $result2 = $conn-> query($sql2);
                    $sql3= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2019'";
                    $result3 = $conn-> query($sql3);
                    $sql4= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2018'";
                    $result4 = $conn-> query($sql4);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                            echo"
                            <tr> 
                                <td id='budzet_21_txt'>2021</td>
                                <td><input type='number' id='budzet_21' value=".$row['budzet_zmienna']."
                                name='budzet_21' min='0' step='0.01'></td>
                            </tr>
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result2-> num_rows > 0){
            
                        while ($row = $result2-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='budzet_20_txt'>2020</td>
                                <td><input type='number' id='budzet_20' value=".$row['budzet_zmienna']."
                                name='budzet_20' min='0' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result3-> num_rows > 0){
            
                        while ($row = $result3-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='budzet_19_txt'>2019</td>
                                <td><input type='number' id='budzet_19' value=".$row['budzet_zmienna']."
                                name='budzet_19' min='0' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    if ($result4-> num_rows > 0){
            
                        while ($row = $result4-> fetch_assoc()) {
                            echo" 
                            <tr> 
                                <td id='budzet_18_txt'>2018</td>
                                <td><input type='number' id='budzet_18' value=".$row['budzet_zmienna']."
                                name='budzet_18' min='0' step='0.01'></td>
                            </tr>     
                                ";
                        }
                    }
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                </tr>
              
            </table>
            <ul class="lista">
                <li>Wybierz rok dla wszystkich tabel</li>
                <li>
                    <input style="display:none;" type="checkbox" id="cbx_2021_ogolny" onChange="all_year_checker()" checked/>
                    <label for="cbx_2021_ogolny" class="check">
                        <svg width="18px" height="18px" viewBox="0 0 18 18">
                            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                            <polyline points="1 9 7 14 15 4"></polyline>
                        </svg>
                    </label>
                    2021
                </li>
                <li><input type="checkbox" id="cbx_2020_ogolny" onChange="all_year_checker()" style="display:none;"/>
                    <label for="cbx_2020_ogolny" class="check">
                        <svg width="18px" height="18px" viewBox="0 0 18 18">
                            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                            <polyline points="1 9 7 14 15 4"></polyline>
                        </svg>
                    </label>
                    2020
                </li>
                <li><input type="checkbox" id="cbx_2019_ogolny" onChange="all_year_checker()" style="display:none;"/>
                    <label for="cbx_2019_ogolny" class="check">
                        <svg width="18px" height="18px" viewBox="0 0 18 18">
                            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                            <polyline points="1 9 7 14 15 4"></polyline>
                        </svg>
                    </label>
                    2019
                </li>
                <li><input type="checkbox" id="cbx_2018_ogolny" onChange="all_year_checker()" style="display:none;"/>
                    <label for="cbx_2018_ogolny" class="check">
                        <svg width="18px" height="18px" viewBox="0 0 18 18">
                            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                            <polyline points="1 9 7 14 15 4"></polyline>
                        </svg>
                    </label>
                    2018
                </li>
            </ul>
            <input type="submit" name="przycisk" id="przycisk" value="zatwierdź" style="background-color: lightgreen;">
           </form>
          </div>
            
        </div>
        <div class="zmiana_koloru_minusowa"></div>
        <div class="budzet_gminy">
            <div class="txt_budzet_napis">Budżet Gminy Kosakowo</div>
            <div class="wybor_roku">
                <a name="kotwica_budzet"><select id="rok_budzet" onchange="zmiana_roku_budzet()">

                    <option value="2021" selected>2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>

                </select></a>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2021'";
                    $result = $conn-> query($sql);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                          echo 
                            "
                            <div id='budzet_2021' class='budzet'><input type='number' id='budzet_gminy_21' value=".$row['budzet_zmienna']." min='0' step='0.01' readonly></div>
                            ";
                        }
                    }
                    
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2020'";
                    $result = $conn-> query($sql);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                          echo 
                            "
                            <div id='budzet_2020' class='budzet'><input type='number' id='budzet_gminy_20' value=".$row['budzet_zmienna']." min='0' step='0.01' readonly></div>
                            ";
                        }
                    }
                    
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2019'";
                    $result = $conn-> query($sql);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                          echo 
                            "
                            <div id='budzet_2019' class='budzet'><input type='number' id='budzet_gminy_19' value=".$row['budzet_zmienna']." min='0' step='0.01' readonly></div>
                            ";
                        }
                    }
                    
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
                <?php
                    $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                    if($conn-> connect_error){
                        die("Connection failed: ".$conn-> connect_error);
                    }

                    $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2018'";
                    $result = $conn-> query($sql);
        

                    if ($result-> num_rows > 0){
            
                        while ($row = $result-> fetch_assoc()) {
                          echo 
                            "
                            <div id='budzet_2018' class='budzet'><input type='number' id='budzet_gminy_18' value=".$row['budzet_zmienna']." min='0' step='0.01' readonly></div>
                            ";
                        }
                    }
                    
                    else{
                        echo "0 result";
                    }
                    $conn-> close();
                ?>
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
          <?php
            $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
            if($conn-> connect_error){
                die("Connection failed: ".$conn-> connect_error);
            }

            $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna FROM procenty WHERE miejscowosc='Kosakowo' AND rok='2021'";
            $result = $conn-> query($sql);
        

            if ($result-> num_rows > 0){
            
                while ($row = $result-> fetch_assoc()) {
                    echo 
                        "
          <div id='gospodarka_mieszkaniowa'>
                <div class='txt_nazwa_wydatku'><h1>Gospodarka Mieszkaniowa</h1></div>
                <div class='txt_suma_wydatku'><input id='budzet_mieszkaniowa' readonly></div>
                <div><strong><input id='inp_budz_mieszkaniowa' class='txt_procenty' value='".$row['prc_6']."%' min='0' max='100' step='0.01' readonly></strong></div>
          </div>
          <div id='pozostale_zadania'>
                <div class='txt_nazwa_wydatku'><h1>Pozostałe Zadania</h1></div>
                <div class='txt_suma_wydatku'><input id='budzet_pozostale' readonly></div>
                <div ><input id='inp_budz_pozostale' class='txt_procenty' value='".$row['prc_7']."%' min='0' max='100' step='0.01' readonly></div>
          </div>
          <div id='administracja_publiczna'>
                <div class='txt_nazwa_wydatku'><h1>Administracja Publiczna</h1></div>
                <div class='txt_suma_wydatku'><input id='budzet_administracja' readonly></div>
                <div><input id='inp_budz_administracja' class='txt_procenty' value='".$row['prc_5']."%' min='0' max='100' step='0.01' readonly></div>
          </div>
          <div id='gospodarka_komunalna'>
                <div class='txt_nazwa_wydatku'><h1>Gospodarka Komunalna i Ochrona Środowiska</h1></div>
                <div class='txt_suma_wydatku'><input id='budzet_komunalna' readonly></div>
                <div><input id='inp_budz_gospodarka' class='txt_procenty' value='".$row['prc_3']."%' min='0' max='100' step='0.01' readonly></div>
          </div>
          <div id='transport_lacznosc'>
                <div class='txt_nazwa_wydatku'><h1>Transport i Łączność</h1></div>
                <div class='txt_suma_wydatku'><input id='budzet_transport' readonly></div>
                <div><input id='inp_budz_transport' class='txt_procenty' value='".$row['prc_4']."%' min='0' max='100' step='0.01' readonly></div>
          </div>
          <div id='pomoc_spoleczna'>
                <div class='txt_nazwa_wydatku'><h1>Pomoc Społeczna</h1></div>
                <div class='txt_suma_wydatku'><input id='budzet_pomoc' readonly></div>
                <div><input id='inp_budz_pomoc' class='txt_procenty' value='".$row['prc_2']."%' min='0' max='100' step='0.01' readonly></div>
          </div>
          <div id='oswiata_wychowanie'>
                <div class='txt_nazwa_wydatku'><h1>Oświata i Wychowanie</h1></div>
                <div class='txt_suma_wydatku'><input id='budzet_oswiata' readonly></div>
                <div><input id='inp_budz_oswiata' class='txt_procenty' value='".$row['prc_1']."%' min='0' max='100' step='0.01' readonly></div>
          </div>
          
        </div>
        ";
            }
        }
        
        else{
            echo "0 result";
        }
        $conn-> close();
        ?>
        <div class="zmiana_koloru_dwa"></div>
        <div class="div_kalkulator">
            
            <div class="txt_kalkulator"><a name="kotwica_kalkulator">Miesięczny podatek zasilający budżet gminy:<input id="suma_kalkulator" readonly></a></div>
            
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
            <a name="kotwica_wykresy"><div id="google_data" style="margin: 4%;"><iframe id="datastudio" width="1400" height="1100" style="position: absolute; top: -35em;" src="https://datastudio.google.com/embed/reporting/0890557f-95bf-4628-949a-19fcd42e2d26/page/WCeaC" frameborder="5" allowfullscreen></iframe></div></a>
        </div>
        <div class="zmiana_koloru_cztery">
        </div>
        <div class="stopka">
            <div class="stopka_txt"><a style="text-decoration: none; color: black;" href="kosakowo2.php" target="_blank">Wyloguj</a></div>
        </div>
        <div class="csv_import">
                <button id="eksportuj" onClick="eksport()">wyeksportuj</button>
                <form id="eksport_form" method="POST"> 
                    
                    <!--<input type="button" onClick="eksport()" id="eksportuj" value="wyeksportuj">-->
                    <input type="file" id="csvFileInput" accept=".csv">
                    <input id="zmienna_txt" style="display: block;"></a>
                    <table id="csvRoot" style="display: block;">
                        
                    </table>
                </form>
                
                
                <script type="text/javascript">
                    class TableCsv {
                        constructor(root) {
                            this.root = root;
                        }

                        /**
                         * Usuwa zawartość tabeli zastępując ją nowymi danymi 
                         */
                        update(data, headerColumns = []) {
                            this.clear();
                            this.setHeader(headerColumns);
                            this.setBody(data);
                        }

                        /**
                         * usuwa wszystko z tabeli wraz z nagłówkami
                         */
                        clear() {
                            this.root.innerHTML = "";
                        }

                        /**
                         * ustawia nagłówki tabeli
                         */
                        setHeader(headerColumns) {
                            this.root.insertAdjacentHTML(
                            "afterbegin",
                            `
                                    <thead>
                                        <tr class='csv_table_tr'>
                                            ${headerColumns.map((text) => `<th class='csv_table_th'>${text}</th>`).join("")}
                                        </tr>
                                    </thead>
                                `
                            );
                        }

                        /**
                         * ustawia body tabeli
                         */
                        setBody(data) {
                            const rowsHtml = data.map((row) => {
                            return `
                                        <tr class='csv_table_tr'>
                                            ${row.map((text) => `<td class='csv_table_td'>${text}</td>`).join("")}
                                        </tr>
                                    `;
                            });

                            this.root.insertAdjacentHTML(
                            "beforeend",
                            `
                                    <tbody>
                                        ${rowsHtml.join("")}
                                    </tbody>
                                `
                            );
                        }
                        }

                        const tableRoot = document.querySelector("#csvRoot");
                        const csvFileInput = document.querySelector("#csvFileInput");
                        const tableCsv = new TableCsv(tableRoot);

                        csvFileInput.addEventListener("change", (e) => {
                        Papa.parse(csvFileInput.files[0], {
                            delimiter: ";",
                            skipEmptyLines: true,
                            complete: (results) => {
                            tableCsv.update(results.data.slice(1), results.data[0]);
                            }
                        });
                        });

                </script>
                
                <script type='text/javascript'>
                    function eksport(){
                            var tabela = document.querySelectorAll('#csvRoot');
                            var x = document.getElementById('csvRoot').rows[0].cells;
                            var dlugosc = document.getElementById('csvRoot').rows[0].cells.length; 
                            console.log(document.getElementById('csvRoot').rows[0].cells.item(0).innerHTML);
                            console.log(document.getElementById('csvRoot').rows[1].cells.item(0).innerHTML);
                            console.log(document.getElementById('csvRoot').rows[2].cells.item(0).innerHTML);
                            console.log(document.getElementById('csvRoot').rows[3].cells.item(0).innerHTML);
                            console.log(document.getElementById('csvRoot').rows[4].cells.item(0).innerHTML);
                            console.log(dlugosc);
                            console.log(document.getElementById('csvRoot').rows.length);
                            
                            var max_szerokosc = document.getElementById('csvRoot').rows.length;
                            var szerokosc=0;
                            var wers=3;
                            var wszystko='wszytsko jest równe: ';
                            console.log(document.getElementById('csvRoot').rows[4].cells.item(0).innerHTML);
                            if ( window.history.replaceState ) {
                                window.history.replaceState( null, null, window.location.href );
                            }
                            while(wers!=max_szerokosc)
                            {
                                if(document.getElementById('csvRoot').rows[wers].cells.item(0).innerHTML=="" || document.getElementById('csvRoot').rows[wers].cells.item(0).innerHTML==null || document.getElementById('csvRoot').rows[wers].cells.item(0).innerHTML==undefined || document.getElementById('csvRoot').rows[wers].cells.item(0).innerHTML=='' ||  document.getElementById('csvRoot').rows[wers].cells.item(0).innerHTML=="Wydatki ogółem:")
                                {
                                    wers++;
                                }else if(document.getElementById('csvRoot').rows[wers].cells.item(0).innerHTML=='Dział'){
                                    wers+=4;
                                }else{
                                    while(szerokosc!=dlugosc){
                                        if(document.getElementById('csvRoot').rows[wers].cells.item(szerokosc).innerHTML=="" || document.getElementById('csvRoot').rows[wers].cells.item(szerokosc).innerHTML==null || document.getElementById('csvRoot').rows[wers].cells.item(szerokosc).innerHTML==undefined || document.getElementById('csvRoot').rows[wers].cells.item(szerokosc).innerHTML=='')
                                        {
                                            szerokosc++;

                                        }else{
                                            if(szerokosc==0){
                                                document.getElementById('zmienna_txt').value=document.getElementById('csvRoot').rows[wers].cells.item(szerokosc).innerHTML;
                                                //var zmienna_js = document.getElementById('zmienna_txt').value;
                                                //zmiennna_js = document.getElementById('csvRoot').rows[wers].cells.item(szerokosc).innerHTML;
                                                console.log("dotąd doszliśmy");
                                                
                                                <?php
                                                    include('connection.php');
                                        
                                                    //$zmienna=$_POST['zmienna_txt'];
                                                    //echo $_POST['zmienna_txt'];
                                                    $sql= "INSERT INTO `wydatki_dzial` (id_rok,dzial) 
                                                    VALUES('1','cos');
                                                    ";
                                                    $result = $conn-> query($sql);
                                                    echo 'console.log(Jest równe:"json_encode($zmienna_js))';
                                                
                                                ?>
                                            }
											elementcsv = document.getElementById('csvRoot').rows[wers].cells.item(szerokosc).innerHTML;
											console.log(elementcsv);
                                            wszystko=wszystko+ elementcsv;
                                            szerokosc++;
                                        }
                                    }
                                    szerokosc=0;
                                    wers++;
                                }
                                
                                
                            }
                            console.log(wszystko);
                        }
                </script>                 
        </div>
    </main>

</body>