<?php
?>
<html>
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
    <style>
        body {
            font-family: Georgia;
            margin: 0;
        }

        .banner {
            background-color: #005B4F;
            color: white;
            text-align: center;
            font-size: 50%;
            height: 20px;
        }

        main {
            background-color: #E1E2E1;
            height: 400px;
            padding: 20px;
            overflow: scroll;
        }

        .imgbox {
            width: 20%;
            float: left;
        }

        .opis {
            display: inline;
            clear: both;
        }

        footer .one,
        footer .two {
            background-color: #005B4F;
            color: white;
            text-align: center;
            width: 50%;
            height: 20px;
            float: left;
        }

        img {
            padding: 20px;
            border-radius: 100%;
        }

        h2 {
            text-align: center;
            background-color: #00897B;
        }

        a {
            color: white;
        }

        h1 {
            margin: 0;
        }
        #tablica{
            width: 3em;
            border: 2px solid black;
            position: relative;
            align: left;
        }
        #tablice{
            width: 50em;
        }
    </style>
    <body>
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
                    <?php
                        $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                        $sql = "SELECT dzial_id,nazwa, plan,((plan/(SELECT SUM(plan) FROM dapjrknbde_aplikacja.wyd_kolumny WHERE typ_id=0 AND gmina_id=1 AND rok=2021)) *100) AS Percentage FROM dapjrknbde_aplikacja.wyd_kolumny, dapjrknbde_aplikacja.wyd_dzialy WHERE typ_id=0 AND gmina_id=1 AND rok=2021 AND wyd_dzialy.id=dzial_id GROUP BY dzial_id;";
                        $result = mysqli_query($conn, $sql);
                        //$procent = ($row[1]/row[0])*100;
                    
                        while ($row = mysqli_fetch_row($result)) {
                        echo <<<CMT
                            <table class='tablica'>
                                <tr>
                                    <th>$row[1]</th>
                                </tr> 
                                <tr>
                                    <td>Procent: <input type="text" value="$row[3]">%</td>
                                </tr> 
                                <tr>
                                    <td>Cena: <input type="text" value="$row[2]">zł</td>
                                </tr>    
                                                                
                            </table>
                                
                            CMT;
                        }
                    
                        mysqli_close($conn);
                    ?>
              </form>  
            </div>
    </body>
</html>