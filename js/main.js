

/*============Zmienne Procentowe*/

var liczba;

var zmienna = 8;

var budzet_zmienna = 0;

var prc_1 = 0;
var prc_2 = 0;
var prc_3 = 0;
var prc_4 = 0;
var prc_5 = 0;
var prc_6 = 0;
var prc_7 = 0;

var budzet_zmienna_lok_21 = 0;

var proc_1_21 = 0;
var proc_3_21 = 0;
var proc_2_21 = 0;
var proc_4_21 = 0;
var proc_5_21 = 0;
var proc_6_21 = 0;
var proc_7_21 = 0;


var budzet_zmienna_lok_20 = 0;

var proc_1_20 = 0;
var proc_2_20 = 0;
var proc_3_20 = 0;
var proc_4_20 = 0;
var proc_5_20 = 0;
var proc_6_20 = 0;
var proc_7_20 = 0;

var budzet_zmienna_lok_19 = 0;

var proc_1_19 = 0;
var proc_2_19 = 0;
var proc_3_19 = 0;
var proc_4_19 = 0;
var proc_5_19 = 0;
var proc_6_19 = 0;
var proc_7_19 = 0;

var budzet_zmienna_lok_18 = 0;

var proc_1_18 = 0;
var proc_2_18 = 0;
var proc_3_18 = 0;
var proc_4_18 = 0;
var proc_5_18 = 0;
var proc_6_18 = 0;
var proc_7_18 = 0;

console.log("połączono")

/*============Funkcja Mnożąca Budżet*/

function pomnoz_budzet() {

    var boswiata = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_1_21').value) / 100));
    document.getElementById('oswiata_budzet_21').value = boswiata;
    boswiata.toFixed(2);
    var boswiata = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_1_20').value) / 100));
    document.getElementById('oswiata_budzet_20').value = boswiata;
    boswiata.toFixed(2);
    var boswiata = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_1_19').value) / 100));
    document.getElementById('oswiata_budzet_19').value = boswiata;
    boswiata.toFixed(2);
    var boswiata = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_1_18').value) / 100));
    document.getElementById('oswiata_budzet_18').value = boswiata;
    boswiata.toFixed(2);

    var bpomoc = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_2_21').value) / 100));
    document.getElementById('pomoc_budzet_21').value = bpomoc;
    bpomoc.toFixed(2);
    var bpomoc = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_2_20').value) / 100));
    document.getElementById('pomoc_budzet_20').value = bpomoc;
    bpomoc.toFixed(2);
    var bpomoc = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_2_19').value) / 100));
    document.getElementById('pomoc_budzet_19').value = bpomoc;
    bpomoc.toFixed(2);
    var bpomoc = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_2_18').value) / 100));
    document.getElementById('pomoc_budzet_18').value = bpomoc;
    bpomoc.toFixed(2);

    var bkomunalna = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_3_21').value) / 100));
    document.getElementById('komunalna_budzet_21').value = bkomunalna;
    bkomunalna.toFixed(2);
    var bkomunalna = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_3_20').value) / 100));
    document.getElementById('komunalna_budzet_20').value = bkomunalna;
    bkomunalna.toFixed(2);
    var bkomunalna = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_3_19').value) / 100));
    document.getElementById('komunalna_budzet_19').value = bkomunalna;
    bkomunalna.toFixed(2);
    var bkomunalna = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_3_18').value) / 100));
    document.getElementById('komunalna_budzet_18').value = bkomunalna;
    bkomunalna.toFixed(2);

    var btransport = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_4_21').value) / 100));
    document.getElementById('transport_budzet_21').value = btransport;
    var btransport = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_4_20').value) / 100));
    document.getElementById('transport_budzet_20').value = btransport;
    var btransport = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_4_19').value) / 100));
    document.getElementById('transport_budzet_19').value = btransport;
    var btransport = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_4_18').value) / 100));
    document.getElementById('transport_budzet_18').value = btransport;

    var badministracja = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_5_21').value) / 100));
    document.getElementById('administracja_budzet_21').value = badministracja;
    badministracja.toFixed(2);
    var badministracja = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_5_20').value) / 100));
    document.getElementById('administracja_budzet_20').value = badministracja;
    badministracja.toFixed(2);
    var badministracja = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_5_19').value) / 100));
    document.getElementById('administracja_budzet_19').value = badministracja;
    badministracja.toFixed(2);
    var badministracja = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_5_18').value) / 100));
    document.getElementById('administracja_budzet_18').value = badministracja;
    badministracja.toFixed(2);

    var bmieszkaniowa = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_6_21').value) / 100));
    document.getElementById('mieszkaniowa_budzet_21').value = bmieszkaniowa;
    bmieszkaniowa.toFixed(2);
    var bmieszkaniowa = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_6_20').value) / 100));
    document.getElementById('mieszkaniowa_budzet_20').value = bmieszkaniowa;
    bmieszkaniowa.toFixed(2);
    var bmieszkaniowa = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_6_19').value) / 100));
    document.getElementById('mieszkaniowa_budzet_19').value = bmieszkaniowa;
    bmieszkaniowa.toFixed(2);
    var bmieszkaniowa = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_6_18').value) / 100));
    document.getElementById('mieszkaniowa_budzet_18').value = bmieszkaniowa;
    bmieszkaniowa.toFixed(2);

    var bpozostale = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_7_21').value) / 100));
    document.getElementById('pozostale_budzet_21').value = bpozostale;
    bpozostale.toFixed(2);
    var bpozostale = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_7_20').value) / 100));
    document.getElementById('pozostale_budzet_20').value = bpozostale;
    bpozostale.toFixed(2);
    var bpozostale = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_7_19').value) / 100));
    document.getElementById('pozostale_budzet_19').value = bpozostale;
    bpozostale.toFixed(2);
    var bpozostale = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_7_18').value) / 100));
    document.getElementById('pozostale_budzet_18').value = bpozostale;
    bpozostale.toFixed(2);

}

/*============Funkcja Mnożąca*/

function pomnoz() {

    var textview = document.getElementById('textview').value;

    var woswiata = textview * ((document.getElementById('inp_1_21').value) / 100);
    document.getElementById('oswiata_21').value = woswiata;
    woswiata.toFixed(2);
    var woswiata = textview * ((document.getElementById('inp_1_20').value) / 100);
    document.getElementById('oswiata_20').value = woswiata;
    woswiata.toFixed(2);
    var woswiata = textview * ((document.getElementById('inp_1_19').value) / 100);
    document.getElementById('oswiata_19').value = woswiata;
    woswiata.toFixed(2);
    var woswiata = textview * ((document.getElementById('inp_1_18').value) / 100);
    document.getElementById('oswiata_18').value = woswiata;
    woswiata.toFixed(2);


    var wpomoc = textview * ((document.getElementById('inp_2_21').value) / 100);
    document.getElementById('pomoc_21').value = wpomoc;
    wpomoc.toFixed(2);
    var wpomoc = textview * ((document.getElementById('inp_2_20').value) / 100);
    document.getElementById('pomoc_20').value = wpomoc;
    wpomoc.toFixed(2);
    var wpomoc = textview * ((document.getElementById('inp_2_19').value) / 100);
    document.getElementById('pomoc_19').value = wpomoc;
    wpomoc.toFixed(2);
    var wpomoc = textview * ((document.getElementById('inp_2_18').value) / 100);
    document.getElementById('pomoc_18').value = wpomoc;
    wpomoc.toFixed(2);


    var wkomunalna = textview * ((document.getElementById('inp_3_21').value) / 100);
    document.getElementById('komunalna_21').value = wkomunalna;
    wkomunalna.toFixed(2);
    var wkomunalna = textview * ((document.getElementById('inp_3_20').value) / 100);
    document.getElementById('komunalna_20').value = wkomunalna;
    wkomunalna.toFixed(2);
    var wkomunalna = textview * ((document.getElementById('inp_3_19').value) / 100);
    document.getElementById('komunalna_19').value = wkomunalna;
    wkomunalna.toFixed(2);
    var wkomunalna = textview * ((document.getElementById('inp_3_18').value) / 100);
    document.getElementById('komunalna_18').value = wkomunalna;
    wkomunalna.toFixed(2);


    var wtransport = textview * ((document.getElementById('inp_4_21').value) / 100);
    document.getElementById('transport_21').value = wtransport;
    wtransport.toFixed(2);
    var wtransport = textview * ((document.getElementById('inp_4_20').value) / 100);
    document.getElementById('transport_20').value = wtransport;
    wtransport.toFixed(2);
    var wtransport = textview * ((document.getElementById('inp_4_19').value) / 100);
    document.getElementById('transport_19').value = wtransport;
    wtransport.toFixed(2);
    var wtransport = textview * ((document.getElementById('inp_4_18').value) / 100);
    document.getElementById('transport_18').value = wtransport;
    wtransport.toFixed(2);

    var wadministracja = textview * ((document.getElementById('inp_5_21').value) / 100);
    document.getElementById('administracja_21').value = wadministracja;
    wadministracja.toFixed(2);
    var wadministracja = textview * ((document.getElementById('inp_5_20').value) / 100);
    document.getElementById('administracja_20').value = wadministracja;
    wadministracja.toFixed(2);
    var wadministracja = textview * ((document.getElementById('inp_5_19').value) / 100);
    document.getElementById('administracja_19').value = wadministracja;
    wadministracja.toFixed(2);
    var wadministracja = textview * ((document.getElementById('inp_5_18').value) / 100);
    document.getElementById('administracja_18').value = wadministracja;
    wadministracja.toFixed(2);

    var wmieszkaniowa = textview * ((document.getElementById('inp_6_21').value) / 100);
    document.getElementById('mieszkaniowa_21').value = wmieszkaniowa;
    wmieszkaniowa.toFixed(2);
    var wmieszkaniowa = textview * ((document.getElementById('inp_6_20').value) / 100);
    document.getElementById('mieszkaniowa_20').value = wmieszkaniowa;
    wmieszkaniowa.toFixed(2);
    var wmieszkaniowa = textview * ((document.getElementById('inp_6_19').value) / 100);
    document.getElementById('mieszkaniowa_19').value = wmieszkaniowa;
    wmieszkaniowa.toFixed(2);
    var wmieszkaniowa = textview * ((document.getElementById('inp_6_18').value) / 100);
    document.getElementById('mieszkaniowa_18').value = wmieszkaniowa;
    wmieszkaniowa.toFixed(2);

    var wpozostale = textview * ((document.getElementById('inp_7_21').value) / 100);
    document.getElementById('pozostale_21').value = wpozostale;
    wpozostale.toFixed(2);
    var wpozostale = textview * ((document.getElementById('inp_7_20').value) / 100);
    document.getElementById('pozostale_20').value = wpozostale;
    wpozostale.toFixed(2);
    var wpozostale = textview * ((document.getElementById('inp_7_19').value) / 100);
    document.getElementById('pozostale_19').value = wpozostale;
    wpozostale.toFixed(2);
    var wpozostale = textview * ((document.getElementById('inp_7_18').value) / 100);
    document.getElementById('pozostale_18').value = wpozostale;
    wpozostale.toFixed(2);


}

/*============Pętla*/

setInterval(function () {

    pomnoz()
    pomnoz_budzet()

    proc_1_21 = parseInt(document.getElementById('inp_1_21').value);
    proc_2_21 = parseInt(document.getElementById('inp_2_21').value);
    proc_3_21 = parseInt(document.getElementById('inp_3_21').value);
    proc_4_21 = parseInt(document.getElementById('inp_4_21').value);
    proc_5_21 = parseInt(document.getElementById('inp_5_21').value);
    proc_6_21 = parseInt(document.getElementById('inp_6_21').value);
    proc_7_21 = parseInt(document.getElementById('inp_7_21').value);

    proc_1_20 = parseInt(document.getElementById('inp_1_20').value);
    proc_2_20 = parseInt(document.getElementById('inp_2_20').value);
    proc_3_20 = parseInt(document.getElementById('inp_3_20').value);
    proc_4_20 = parseInt(document.getElementById('inp_4_20').value);
    proc_5_20 = parseInt(document.getElementById('inp_5_20').value);
    proc_6_20 = parseInt(document.getElementById('inp_6_20').value);
    proc_7_20 = parseInt(document.getElementById('inp_7_20').value);

    proc_1_19 = parseInt(document.getElementById('inp_1_19').value);
    proc_2_19 = parseInt(document.getElementById('inp_2_19').value);
    proc_3_19 = parseInt(document.getElementById('inp_3_19').value);
    proc_4_19 = parseInt(document.getElementById('inp_4_19').value);
    proc_5_19 = parseInt(document.getElementById('inp_5_19').value);
    proc_6_19 = parseInt(document.getElementById('inp_6_19').value);
    proc_7_19 = parseInt(document.getElementById('inp_7_19').value);

    proc_1_18 = parseInt(document.getElementById('inp_1_18').value);
    proc_2_18 = parseInt(document.getElementById('inp_2_18').value);
    proc_3_18 = parseInt(document.getElementById('inp_3_18').value);
    proc_4_18 = parseInt(document.getElementById('inp_4_18').value);
    proc_5_18 = parseInt(document.getElementById('inp_5_18').value);
    proc_6_18 = parseInt(document.getElementById('inp_6_18').value);
    proc_7_18 = parseInt(document.getElementById('inp_7_18').value);


    if (zmienna == 0) {

        document.getElementById("wybor").selectedIndex = 0;

    } else if (zmienna == 1) {

        document.getElementById("wybor").selectedIndex = 1;

    } else if (zmienna == 2) {

        document.getElementById("wybor").selectedIndex = 2;

    } else if (zmienna == 3) {

        document.getElementById("wybor").selectedIndex = 3;

    } else if (zmienna == 4) {

        document.getElementById("wybor").selectedIndex = 4;

    } else if (zmienna == 5) {

        document.getElementById("wybor").selectedIndex = 5;

    } else if (zmienna == 6) {

        document.getElementById("wybor").selectedIndex = 6;

    } else if (zmienna == 7) {

        document.getElementById("wybor").selectedIndex = 7;

    }
    console.log("dziala dziala dziala...")


}, 1);

/*============Funkcja Dodawania Liczby*/

function insert(num) {

    document.getElementById('textview').value = document.getElementById('textview').value + num;
    pomnoz()

}

/*============Funkcja Czyszcząca*/

function clean() {

    document.getElementById('textview').value = "";

}

/*============Funkcja Zapisująca


function zapisz() {

    var selectedValue = document.getElementById("rok").value;



    console.log("saving is working!!!");
    if (document.getElementById("oprocentowanie").checked == true) {

        drawChart()

    } else {

    }
    drawChart_2()


}
*/


/*============Funkcja Cofająca*/

function back() {

    var exp = document.form.textview.value;
    document.getElementById('textview').value = exp.substring(0, exp.length - 1)

}



/*============Funkcja Dodająca*/

function dodaj() {

    if (zmienna == 8) {

        zmienna = 1;
        console.log(zmienna);

    } else {

        zmienna++;
        console.log(zmienna);

    }

}

/*============Funkcja Odejmująca*/

function odejmij() {

    if (zmienna == 1) {

        zmienna = 8;
        console.log(zmienna);

    } else {

        zmienna--;
        console.log(zmienna);

    }

}

/*============showhide_kolumny*/

function showhide_kolumny() {

    var selectedValue_kolumny = document.getElementById("lista_wykresow").value;

    if (selectedValue_kolumny == "liniowy") {

        document.getElementById("curve_chart").style.display = 'block'
        document.getElementById("chart2_div").style.display = 'none'
        document.getElementById("piechart").style.display = 'none'
        document.getElementById("piechart_19").style.display = 'none'
        document.getElementById("piechart_20").style.display = 'none'
        document.getElementById("piechart_21").style.display = 'none'
        document.getElementById("chart4_div").style.display = 'none'
        document.getElementById("google_data").style.display = 'none'
        drawChart_2();

    } else if (selectedValue_kolumny == "kolumnowy") {

        document.getElementById("curve_chart").style.display = 'none'
        document.getElementById("chart2_div").style.display = 'block'
        document.getElementById("piechart").style.display = 'none'
        document.getElementById("piechart_19").style.display = 'none'
        document.getElementById("piechart_20").style.display = 'none'
        document.getElementById("piechart_21").style.display = 'none'
        document.getElementById("chart4_div").style.display = 'none'
        document.getElementById("google_data").style.display = 'none'
        drawChart3();

    } else if (selectedValue_kolumny == "kolowy") {

        document.getElementById("curve_chart").style.display = 'none'
        document.getElementById("chart2_div").style.display = 'none'
        document.getElementById("piechart").style.display = 'block'
        document.getElementById("piechart_19").style.display = 'block'
        document.getElementById("piechart_20").style.display = 'block'
        document.getElementById("piechart_21").style.display = 'block'
        document.getElementById("chart4_div").style.display = 'none'
        document.getElementById("google_data").style.display = 'none'
        drawChart_2018();
        drawChart_2019();
        drawChart_2020();
        drawChart_2021();

    } else if (selectedValue_kolumny == "wielo") {

        document.getElementById("curve_chart").style.display = 'none'
        document.getElementById("chart2_div").style.display = 'none'
        document.getElementById("piechart").style.display = 'none'
        document.getElementById("piechart_19").style.display = 'none'
        document.getElementById("piechart_20").style.display = 'none'
        document.getElementById("piechart_21").style.display = 'none'
        document.getElementById("chart4_div").style.display = 'block'
        document.getElementById("google_data").style.display = 'none'
        drawChart4();
        
    }else if (selectedValue_kolumny == "GoogleData") {

        document.getElementById("curve_chart").style.display = 'none'
        document.getElementById("chart2_div").style.display = 'none'
        document.getElementById("piechart").style.display = 'none'
        document.getElementById("piechart_19").style.display = 'none'
        document.getElementById("piechart_20").style.display = 'none'
        document.getElementById("piechart_21").style.display = 'none'
        document.getElementById("chart4_div").style.display = 'none'
        document.getElementById("google_data").style.display = 'block'
        
    }
}
/*=============CheckBoxChecker*/

function checker_dwa()
{
    if (document.getElementById("oprocentowanie").checked == true) {

        document.getElementById("chart_div").style.display = 'block';
        document.getElementById("datastudio").style.top = '74px';
        drawChart()
        console.log("checkbox opt 1 is working!!!");
        

    }else{

        document.getElementById("chart_div").style.display = 'none';
        document.getElementById("datastudio").style.top = '362px';
        console.log("checkbox opt 2 is working!!!");
        
    }
}

/*============Checker*/

function checker() {

    var selectedValue_rok = document.getElementById("rok").value;
    var wybrany = document.getElementById("wybor").value;


    if (selectedValue_rok == "2021") {

        if (wybrany == "wszystko") {

            document.getElementById("oswiata_tabelka_21").style.display = 'block'
            document.getElementById("pomoc_tabelka_21").style.display = 'block'
            document.getElementById("komunalna_tabelka_21").style.display = 'block'
            document.getElementById("transport_tabelka_21").style.display = 'block'
            document.getElementById("administracja_tabelka_21").style.display = 'block'
            document.getElementById("mieszkaniowa_tabelka_21").style.display = 'block'
            document.getElementById("pozostale_tabelka_21").style.display = 'block'
            document.getElementById("tabelka").style.height = "20em";
            document.getElementById("2021").style.display = 'block'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'


        } else if (wybrany == "oswiata") {

            document.getElementById("oswiata_tabelka_21").style.display = 'block'
            document.getElementById("pomoc_tabelka_21").style.display = 'none'
            document.getElementById("komunalna_tabelka_21").style.display = 'none'
            document.getElementById("transport_tabelka_21").style.display = 'none'
            document.getElementById("administracja_tabelka_21").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_21").style.display = 'none'
            document.getElementById("pozostale_tabelka_21").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'block'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "pomoc") {

            document.getElementById("oswiata_tabelka_21").style.display = 'none'
            document.getElementById("pomoc_tabelka_21").style.display = 'block'
            document.getElementById("komunalna_tabelka_21").style.display = 'none'
            document.getElementById("transport_tabelka_21").style.display = 'none'
            document.getElementById("administracja_tabelka_21").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_21").style.display = 'none'
            document.getElementById("pozostale_tabelka_21").style.display = 'none'
            document.getElementById("tabelka").style.height = "9em";
            document.getElementById("2021").style.display = 'block'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "komunalna") {

            document.getElementById("oswiata_tabelka_21").style.display = 'none'
            document.getElementById("pomoc_tabelka_21").style.display = 'none'
            document.getElementById("komunalna_tabelka_21").style.display = 'block'
            document.getElementById("transport_tabelka_21").style.display = 'none'
            document.getElementById("administracja_tabelka_21").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_21").style.display = 'none'
            document.getElementById("pozostale_tabelka_21").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'block'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "transport") {

            document.getElementById("oswiata_tabelka_21").style.display = 'none'
            document.getElementById("pomoc_tabelka_21").style.display = 'none'
            document.getElementById("komunalna_tabelka_21").style.display = 'none'
            document.getElementById("transport_tabelka_21").style.display = 'block'
            document.getElementById("administracja_tabelka_21").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_21").style.display = 'none'
            document.getElementById("pozostale_tabelka_21").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'block'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "administracja") {

            document.getElementById("oswiata_tabelka_21").style.display = 'none'
            document.getElementById("pomoc_tabelka_21").style.display = 'none'
            document.getElementById("komunalna_tabelka_21").style.display = 'none'
            document.getElementById("transport_tabelka_21").style.display = 'none'
            document.getElementById("administracja_tabelka_21").style.display = 'block'
            document.getElementById("mieszkaniowa_tabelka_21").style.display = 'none'
            document.getElementById("pozostale_tabelka_21").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'block'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "mieszkaniowa") {

            document.getElementById("oswiata_tabelka_21").style.display = 'none'
            document.getElementById("pomoc_tabelka_21").style.display = 'none'
            document.getElementById("komunalna_tabelka_21").style.display = 'none'
            document.getElementById("transport_tabelka_21").style.display = 'none'
            document.getElementById("administracja_tabelka_21").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_21").style.display = 'block'
            document.getElementById("pozostale_tabelka_21").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'block'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "pozostale") {

            document.getElementById("oswiata_tabelka_21").style.display = 'none'
            document.getElementById("pomoc_tabelka_21").style.display = 'none'
            document.getElementById("komunalna_tabelka_21").style.display = 'none'
            document.getElementById("transport_tabelka_21").style.display = 'none'
            document.getElementById("administracja_tabelka_21").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_21").style.display = 'none'
            document.getElementById("pozostale_tabelka_21").style.display = 'block'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'block'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        }
    }
    if (selectedValue_rok == "2020") {

        if (wybrany == "wszystko") {

            document.getElementById("oswiata_tabelka_20").style.display = 'block'
            document.getElementById("pomoc_tabelka_20").style.display = 'block'
            document.getElementById("komunalna_tabelka_20").style.display = 'block'
            document.getElementById("transport_tabelka_20").style.display = 'block'
            document.getElementById("administracja_tabelka_20").style.display = 'block'
            document.getElementById("mieszkaniowa_tabelka_20").style.display = 'block'
            document.getElementById("pozostale_tabelka_20").style.display = 'block'
            document.getElementById("tabelka").style.height = "20em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'block'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'


        } else if (wybrany == "oswiata") {

            document.getElementById("oswiata_tabelka_20").style.display = 'block'
            document.getElementById("pomoc_tabelka_20").style.display = 'none'
            document.getElementById("komunalna_tabelka_20").style.display = 'none'
            document.getElementById("transport_tabelka_20").style.display = 'none'
            document.getElementById("administracja_tabelka_20").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_20").style.display = 'none'
            document.getElementById("pozostale_tabelka_20").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'block'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "pomoc") {

            document.getElementById("oswiata_tabelka_20").style.display = 'none'
            document.getElementById("pomoc_tabelka_20").style.display = 'block'
            document.getElementById("komunalna_tabelka_20").style.display = 'none'
            document.getElementById("transport_tabelka_20").style.display = 'none'
            document.getElementById("administracja_tabelka_20").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_20").style.display = 'none'
            document.getElementById("pozostale_tabelka_20").style.display = 'none'
            document.getElementById("tabelka").style.height = "9em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'block'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "komunalna") {

            document.getElementById("oswiata_tabelka_20").style.display = 'none'
            document.getElementById("pomoc_tabelka_20").style.display = 'none'
            document.getElementById("komunalna_tabelka_20").style.display = 'block'
            document.getElementById("transport_tabelka_20").style.display = 'none'
            document.getElementById("administracja_tabelka_20").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_20").style.display = 'none'
            document.getElementById("pozostale_tabelka_20").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'block'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "transport") {

            document.getElementById("oswiata_tabelka_20").style.display = 'none'
            document.getElementById("pomoc_tabelka_20").style.display = 'none'
            document.getElementById("komunalna_tabelka_20").style.display = 'none'
            document.getElementById("transport_tabelka_20").style.display = 'block'
            document.getElementById("administracja_tabelka_20").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_20").style.display = 'none'
            document.getElementById("pozostale_tabelka_20").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'block'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "administracja") {

            document.getElementById("oswiata_tabelka_20").style.display = 'none'
            document.getElementById("pomoc_tabelka_20").style.display = 'none'
            document.getElementById("komunalna_tabelka_20").style.display = 'none'
            document.getElementById("transport_tabelka_20").style.display = 'none'
            document.getElementById("administracja_tabelka_20").style.display = 'block'
            document.getElementById("mieszkaniowa_tabelka_20").style.display = 'none'
            document.getElementById("pozostale_tabelka_20").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'block'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "mieszkaniowa") {

            document.getElementById("oswiata_tabelka_20").style.display = 'none'
            document.getElementById("pomoc_tabelka_20").style.display = 'none'
            document.getElementById("komunalna_tabelka_20").style.display = 'none'
            document.getElementById("transport_tabelka_20").style.display = 'none'
            document.getElementById("administracja_tabelka_20").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_20").style.display = 'block'
            document.getElementById("pozostale_tabelka_20").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'block'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "pozostale") {

            document.getElementById("oswiata_tabelka_20").style.display = 'none'
            document.getElementById("pomoc_tabelka_20").style.display = 'none'
            document.getElementById("komunalna_tabelka_20").style.display = 'none'
            document.getElementById("transport_tabelka_20").style.display = 'none'
            document.getElementById("administracja_tabelka_20").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_20").style.display = 'none'
            document.getElementById("pozostale_tabelka_20").style.display = 'block'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'block'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'none'

        }
    }
    if (selectedValue_rok == "2019") {

        if (wybrany == "wszystko") {

            document.getElementById("oswiata_tabelka_19").style.display = 'block'
            document.getElementById("pomoc_tabelka_19").style.display = 'block'
            document.getElementById("komunalna_tabelka_19").style.display = 'block'
            document.getElementById("transport_tabelka_19").style.display = 'block'
            document.getElementById("administracja_tabelka_19").style.display = 'block'
            document.getElementById("mieszkaniowa_tabelka_19").style.display = 'block'
            document.getElementById("pozostale_tabelka_19").style.display = 'block'
            document.getElementById("tabelka").style.height = "20em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'block'
            document.getElementById("2018").style.display = 'none'


        } else if (wybrany == "oswiata") {

            document.getElementById("oswiata_tabelka_19").style.display = 'block'
            document.getElementById("pomoc_tabelka_19").style.display = 'none'
            document.getElementById("komunalna_tabelka_19").style.display = 'none'
            document.getElementById("transport_tabelka_19").style.display = 'none'
            document.getElementById("administracja_tabelka_19").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_19").style.display = 'none'
            document.getElementById("pozostale_tabelka_19").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'block'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "pomoc") {

            document.getElementById("oswiata_tabelka_19").style.display = 'none'
            document.getElementById("pomoc_tabelka_19").style.display = 'block'
            document.getElementById("komunalna_tabelka_19").style.display = 'none'
            document.getElementById("transport_tabelka_19").style.display = 'none'
            document.getElementById("administracja_tabelka_19").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_19").style.display = 'none'
            document.getElementById("pozostale_tabelka_19").style.display = 'none'
            document.getElementById("tabelka").style.height = "9em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'block'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "komunalna") {

            document.getElementById("oswiata_tabelka_19").style.display = 'none'
            document.getElementById("pomoc_tabelka_19").style.display = 'none'
            document.getElementById("komunalna_tabelka_19").style.display = 'block'
            document.getElementById("transport_tabelka_19").style.display = 'none'
            document.getElementById("administracja_tabelka_19").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_19").style.display = 'none'
            document.getElementById("pozostale_tabelka_19").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'block'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "transport") {

            document.getElementById("oswiata_tabelka_19").style.display = 'none'
            document.getElementById("pomoc_tabelka_19").style.display = 'none'
            document.getElementById("komunalna_tabelka_19").style.display = 'none'
            document.getElementById("transport_tabelka_19").style.display = 'block'
            document.getElementById("administracja_tabelka_19").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_19").style.display = 'none'
            document.getElementById("pozostale_tabelka_19").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'block'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "administracja") {

            document.getElementById("oswiata_tabelka_19").style.display = 'none'
            document.getElementById("pomoc_tabelka_19").style.display = 'none'
            document.getElementById("komunalna_tabelka_19").style.display = 'none'
            document.getElementById("transport_tabelka_19").style.display = 'none'
            document.getElementById("administracja_tabelka_19").style.display = 'block'
            document.getElementById("mieszkaniowa_tabelka_19").style.display = 'none'
            document.getElementById("pozostale_tabelka_19").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'block'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "mieszkaniowa") {

            document.getElementById("oswiata_tabelka_19").style.display = 'none'
            document.getElementById("pomoc_tabelka_19").style.display = 'none'
            document.getElementById("komunalna_tabelka_19").style.display = 'none'
            document.getElementById("transport_tabelka_19").style.display = 'none'
            document.getElementById("administracja_tabelka_19").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_19").style.display = 'block'
            document.getElementById("pozostale_tabelka_19").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'block'
            document.getElementById("2018").style.display = 'none'

        } else if (wybrany == "pozostale") {

            document.getElementById("oswiata_tabelka_19").style.display = 'none'
            document.getElementById("pomoc_tabelka_19").style.display = 'none'
            document.getElementById("komunalna_tabelka_19").style.display = 'none'
            document.getElementById("transport_tabelka_19").style.display = 'none'
            document.getElementById("administracja_tabelka_19").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_19").style.display = 'none'
            document.getElementById("pozostale_tabelka_19").style.display = 'block'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'block'
            document.getElementById("2018").style.display = 'none'

        }
    }
    if (selectedValue_rok == "2018") {

        if (wybrany == "wszystko") {

            document.getElementById("oswiata_tabelka_18").style.display = 'block'
            document.getElementById("pomoc_tabelka_18").style.display = 'block'
            document.getElementById("komunalna_tabelka_18").style.display = 'block'
            document.getElementById("transport_tabelka_18").style.display = 'block'
            document.getElementById("administracja_tabelka_18").style.display = 'block'
            document.getElementById("mieszkaniowa_tabelka_18").style.display = 'block'
            document.getElementById("pozostale_tabelka_18").style.display = 'block'
            document.getElementById("tabelka").style.height = "20em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'block'


        } else if (wybrany == "oswiata") {

            document.getElementById("oswiata_tabelka_18").style.display = 'block'
            document.getElementById("pomoc_tabelka_18").style.display = 'none'
            document.getElementById("komunalna_tabelka_18").style.display = 'none'
            document.getElementById("transport_tabelka_18").style.display = 'none'
            document.getElementById("administracja_tabelka_18").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_18").style.display = 'none'
            document.getElementById("pozostale_tabelka_18").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'block'

        } else if (wybrany == "pomoc") {

            document.getElementById("oswiata_tabelka_18").style.display = 'none'
            document.getElementById("pomoc_tabelka_18").style.display = 'block'
            document.getElementById("komunalna_tabelka_18").style.display = 'none'
            document.getElementById("transport_tabelka_18").style.display = 'none'
            document.getElementById("administracja_tabelka_18").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_18").style.display = 'none'
            document.getElementById("pozostale_tabelka_18").style.display = 'none'
            document.getElementById("tabelka").style.height = "9em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'block'

        } else if (wybrany == "komunalna") {

            document.getElementById("oswiata_tabelka_18").style.display = 'none'
            document.getElementById("pomoc_tabelka_18").style.display = 'none'
            document.getElementById("komunalna_tabelka_18").style.display = 'block'
            document.getElementById("transport_tabelka_18").style.display = 'none'
            document.getElementById("administracja_tabelka_18").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_18").style.display = 'none'
            document.getElementById("pozostale_tabelka_18").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'block'

        } else if (wybrany == "transport") {

            document.getElementById("oswiata_tabelka_18").style.display = 'none'
            document.getElementById("pomoc_tabelka_18").style.display = 'none'
            document.getElementById("komunalna_tabelka_18").style.display = 'none'
            document.getElementById("transport_tabelka_18").style.display = 'block'
            document.getElementById("administracja_tabelka_18").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_18").style.display = 'none'
            document.getElementById("pozostale_tabelka_18").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'block'

        } else if (wybrany == "administracja") {

            document.getElementById("oswiata_tabelka_18").style.display = 'none'
            document.getElementById("pomoc_tabelka_18").style.display = 'none'
            document.getElementById("komunalna_tabelka_18").style.display = 'none'
            document.getElementById("transport_tabelka_18").style.display = 'none'
            document.getElementById("administracja_tabelka_18").style.display = 'block'
            document.getElementById("mieszkaniowa_tabelka_18").style.display = 'none'
            document.getElementById("pozostale_tabelka_18").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'block'

        } else if (wybrany == "mieszkaniowa") {

            document.getElementById("oswiata_tabelka_18").style.display = 'none'
            document.getElementById("pomoc_tabelka_18").style.display = 'none'
            document.getElementById("komunalna_tabelka_18").style.display = 'none'
            document.getElementById("transport_tabelka_18").style.display = 'none'
            document.getElementById("administracja_tabelka_18").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_18").style.display = 'block'
            document.getElementById("pozostale_tabelka_18").style.display = 'none'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'block'

        } else if (wybrany == "pozostale") {

            document.getElementById("oswiata_tabelka_18").style.display = 'none'
            document.getElementById("pomoc_tabelka_18").style.display = 'none'
            document.getElementById("komunalna_tabelka_18").style.display = 'none'
            document.getElementById("transport_tabelka_18").style.display = 'none'
            document.getElementById("administracja_tabelka_18").style.display = 'none'
            document.getElementById("mieszkaniowa_tabelka_18").style.display = 'none'
            document.getElementById("pozostale_tabelka_18").style.display = 'block'
            document.getElementById("tabelka").style.height = "8.5em";
            document.getElementById("2021").style.display = 'none'
            document.getElementById("2020").style.display = 'none'
            document.getElementById("2019").style.display = 'none'
            document.getElementById("2018").style.display = 'block'

        }
    }
    

    console.log("checker is working!!!");

}

/*============Funkcja Google Charts Liniowa*/


google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart_2);

function drawChart_2() {
    var data = google.visualization.arrayToDataTable([
        ['Rok', 'Oświata', 'Pomoc społeczna', 'Komunalna', 'Transport', 'Administracja', 'Mieszkaniowa', 'Pozostałe'],
        ['2018', proc_1_18, proc_2_18, proc_3_18, proc_4_18, proc_5_18, proc_6_18, proc_7_18],
        ['2019', proc_1_19, proc_2_19, proc_3_19, proc_4_19, proc_5_19, proc_6_19, proc_7_19],
        ['2020', proc_1_20, proc_2_20, proc_3_20, proc_4_20, proc_5_20, proc_6_20, proc_7_20],
        ['2021', proc_1_21, proc_2_21, proc_3_21, proc_4_21, proc_5_21, proc_6_21, proc_7_21]
    ]);

    var options = {
        series: [{
            color: '#fff'
        }, {
            color: '#fff'
        }],
        legend: {
            textStyle: { color: '#fff' },
            position: 'top',
            maxLines: 1
        },
        chart: {
            title: 'Wykres zmian procentowych',
            subtitle: '2018-2021'
        },
        backgroundColor: {
            fill: '#87cefa'

        },
        chartArea: {
            backgroundColor: '#87cefa'
        },
        hAxis: {
            textStyle: { color: '#fff' }
        },
        vAxis: {
            textStyle: { color: '#fff' }
        },
        bar: {
            groupWidth: '75%'
        },
        titleTextStyle: {
            color: '#fff'
        },
        width: liczba,
        height: 700,
        axes: {
            x: {
                0: { side: 'top' }
            }
        }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
}

/*============Funkcja Google Charts wielowartosciowy*/

google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart4);

function drawChart4() {
    var data = google.visualization.arrayToDataTable([
        ['Rok', 'Oświata', 'Pomoc społeczna', 'Komunalna', 'Transport', 'Administracja', 'Mieszkaniowa', 'Pozostałe'],
        ['2018', proc_1_18, proc_2_18, proc_3_18, proc_4_18, proc_5_18, proc_6_18, proc_7_18],
        ['2019', proc_1_19, proc_2_19, proc_3_19, proc_4_19, proc_5_19, proc_6_19, proc_7_19],
        ['2020', proc_1_20, proc_2_20, proc_3_20, proc_4_20, proc_5_20, proc_6_20, proc_7_20],
        ['2021', proc_1_21, proc_2_21, proc_3_21, proc_4_21, proc_5_21, proc_6_21, proc_7_21]
    ]);

    var options = {

        height: 600,
        width: liczba,

        series: [{
            color: '#fff'
        }, {
            color: '#fff'
        }],
        legend: {
            textStyle: { color: '#fff' },
            position: 'top',
            maxLines: 3
        },

        backgroundColor: {
            fill: '#87cefa'

        },
        chartArea: {
            backgroundColor: '#87cefa'
        },

        hAxis: {
            textStyle: { color: '#fff' }
        },
        vAxis: {
            textStyle: { color: '#fff' },
            minValue: 0
        },

        bar: {
            groupWidth: '75%'
        },
        chart: {
            title: 'Porównanie oprocentowania',
            subtitle: 'Oświata, Pomoc społeczna, Komunalna, Transport, Administracja, Mieszkaniowa i Pozostałe: 2018-2021'
        },
        titleTextStyle: {
            color: '#fff'
        }
    };

    var chart = new google.visualization.AreaChart(document.getElementById('chart4_div'));
    chart.draw(data, options);
}

/*============Funkcja Google Charts*/

google.charts.load('current', { packages: ['bar'] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Rok', 'Oświata', 'Pomoc społeczna', 'Komunalna', 'Transport', 'Administracja', 'Mieszkaniowa', 'Pozostałe'],
        ['2018', proc_1_18, proc_2_18, proc_3_18, proc_4_18, proc_5_18, proc_6_18, proc_7_18],
        ['2019', proc_1_19, proc_2_19, proc_3_19, proc_4_19, proc_5_19, proc_6_19, proc_7_19],
        ['2020', proc_1_20, proc_2_20, proc_3_20, proc_4_20, proc_5_20, proc_6_20, proc_7_20],
        ['2021', proc_1_21, proc_2_21, proc_3_21, proc_4_21, proc_5_21, proc_6_21, proc_7_21]
    ]);

    var options = {

        isStacked: true,
        width: liczba,

        series: [{
            color: '#fff'
        }, {
            color: '#fff'
        }],
        legend: {
            textStyle: { color: '#fff' },
            position: 'top',
            maxLines: 3
        },

        backgroundColor: {
            fill: '#87cefa'

        },
        chartArea: {
            backgroundColor: '#87cefa'
        },

        hAxis: {
            textStyle: { color: '#fff' }
        },
        vAxis: {
            textStyle: { color: '#fff' },
            minValue: 0,
            ticks: [0, 0.25, 0.50, 0.75, 1]
        },

        bar: {
            groupWidth: '75%'
        },
        chart: {
            title: 'Porównanie oprocentowania',
            subtitle: 'Oświata, Pomoc społeczna, Komunalna, Transport, Administracja, Mieszkaniowa i Pozostałe: 2018-2021'
        },
        titleTextStyle: {
            color: '#fff'
        }
    };

    var container = document.getElementById('chart_div');
    var chart = new google.charts.Bar(container);

    google.visualization.events.addListener(chart, 'ready', function () {
        var labels = document.getElementsByTagName('text');
        for (var i = 0; i < labels.length; i++) {
            if (labels[i].innerHTML === options.chart.subtitle) {
                labels[i].style.fill = 'white';
                labels[i].style.fontFamily = 'Courier';
                labels[i].style.fontSize = "0.7em";
                break;
            }
        }
    });

    chart.draw(data, google.charts.Bar.convertOptions(options));
}

/*============Funkcja Google Charts kolumna z wyboru*/

google.charts.load('current', { packages: ['bar'] });
google.charts.setOnLoadCallback(drawChart3);
function drawChart3() {
    var data = google.visualization.arrayToDataTable([
        ['Rok', 'Oświata', 'Pomoc społeczna', 'Komunalna', 'Transport', 'Administracja', 'Mieszkaniowa', 'Pozostałe'],
        ['2018', proc_1_18, proc_2_18, proc_3_18, proc_4_18, proc_5_18, proc_6_18, proc_7_18],
        ['2019', proc_1_19, proc_2_19, proc_3_19, proc_4_19, proc_5_19, proc_6_19, proc_7_19],
        ['2020', proc_1_20, proc_2_20, proc_3_20, proc_4_20, proc_5_20, proc_6_20, proc_7_20],
        ['2021', proc_1_21, proc_2_21, proc_3_21, proc_4_21, proc_5_21, proc_6_21, proc_7_21]
    ]);

    var options = {

        height: 600,
        width: 1300,

        series: [{
            color: '#fff'
        }, {
            color: '#fff'
        }],
        legend: {
            textStyle: { color: '#fff' },
            position: 'top'
        },

        backgroundColor: {
            fill: '#87cefa'

        },
        chartArea: {
            backgroundColor: '#87cefa'
        },

        hAxis: {
            textStyle: { color: '#fff' }
        },
        vAxis: {
            textStyle: { color: '#fff' },
            minValue: 0,
            ticks: [0, 0.25, 0.50, 0.75, 1]
        },

        bar: {
            groupWidth: '75%'
        },
        chart: {
            title: 'Porównanie oprocentowania',
        },
        titleTextStyle: {
            color: '#fff'
        }
    };

    var container = document.getElementById('chart2_div');
    var chart = new google.charts.Bar(container);

    google.visualization.events.addListener(chart, 'ready', function () {
        var labels = document.getElementsByTagName('text');
        for (var i = 0; i < labels.length; i++) {
            if (labels[i].innerHTML === options.chart.subtitle) {
                labels[i].style.fill = 'white';
                labels[i].style.fontFamily = 'Courier';
                labels[i].style.fontSize = "0.7em";
                break;
            }
        }
    });

    chart.draw(data, google.charts.Bar.convertOptions(options));
}

/*============Funkcja Google Charts koło 2018 z wyboru*/

google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart_2018);

function drawChart_2018() {

    var data = google.visualization.arrayToDataTable([
        ['Kategoria', 'Procenty'],
        ['Oświata_2018', proc_1_18],
        ['Pomoc społeczna_2018', proc_2_18],
        ['Komunalna_2018', proc_3_18],
        ['Transport_2018', proc_4_18],
        ['Administracja_2018', proc_5_18],
        ['Mieszkaniowa_2018', proc_6_18],
        ['Pozostałe_2018', proc_7_18]
    ]);

    var options = {
        series: [{
            color: '#fff'
        }, {
            color: '#fff'
        }],
        legend: {
            textStyle: { color: '#fff' },
            position: 'top',
            maxLines: 1
        },
        chart: {
            title: 'Wykres zmian procentowych',
            subtitle: '2018'
        },
        backgroundColor: {
            fill: '#87cefa'

        },
        chartArea: {
            backgroundColor: '#87cefa'
        },
        hAxis: {
            textStyle: { color: '#fff' }
        },
        vAxis: {
            textStyle: { color: '#fff' }
        },
        bar: {
            groupWidth: '75%'
        },
        titleTextStyle: {
            color: '#fff'
        },
        width: 400,
        height: 300,
        axes: {
            x: {
                0: { side: 'top' }
            }
        }
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}

/*============Funkcja Google Charts koło 2019 z wyboru*/

google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart_2019);

function drawChart_2019() {

    var data = google.visualization.arrayToDataTable([
        ['Kategoria', 'Procenty'],
        ['Oświata_2019', proc_1_19],
        ['Pomoc społeczna_2019', proc_2_19],
        ['Komunalna_2019', proc_3_19],
        ['Transport_2019', proc_4_19],
        ['Administracja_2019', proc_5_19],
        ['Mieszkaniowa_2019', proc_6_19],
        ['Pozostałe_2019', proc_7_19]
    ]);

    var options = {
        series: [{
            color: '#fff'
        }, {
            color: '#fff'
        }],
        legend: {
            textStyle: { color: '#fff' },
            position: 'top',
            maxLines: 1
        },
        chart: {
            title: 'Wykres zmian procentowych',
            subtitle: '2019'
        },
        backgroundColor: {
            fill: '#87cefa'

        },
        chartArea: {
            backgroundColor: '#87cefa'
        },
        hAxis: {
            textStyle: { color: '#fff' }
        },
        vAxis: {
            textStyle: { color: '#fff' }
        },
        bar: {
            groupWidth: '75%'
        },
        titleTextStyle: {
            color: '#fff'
        },
        width: 400,
        height: 300,
        axes: {
            x: {
                0: { side: 'top' }
            }
        }
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_19'));

    chart.draw(data, options);
}

/*============Funkcja Google Charts koło 2020 z wyboru*/

google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart_2020);

function drawChart_2020() {

    var data = google.visualization.arrayToDataTable([
        ['Kategoria', 'Procenty'],
        ['Oświata_2020', proc_1_20],
        ['Pomoc społeczna_2020', proc_2_20],
        ['Komunalna_2020', proc_3_20],
        ['Transport_2020', proc_4_20],
        ['Administracja_2020', proc_5_20],
        ['Mieszkaniowa_2020', proc_6_20],
        ['Pozostałe_2020', proc_7_20]
    ]);

    var options = {
        series: [{
            color: '#fff'
        }, {
            color: '#fff'
        }],
        legend: {
            textStyle: { color: '#fff' },
            position: 'top',
            maxLines: 1
        },
        chart: {
            title: 'Wykres zmian procentowych',
            subtitle: '2020'
        },
        backgroundColor: {
            fill: '#87cefa'

        },
        chartArea: {
            backgroundColor: '#87cefa'
        },
        hAxis: {
            textStyle: { color: '#fff' }
        },
        vAxis: {
            textStyle: { color: '#fff' }
        },
        bar: {
            groupWidth: '75%'
        },
        titleTextStyle: {
            color: '#fff'
        },
        width: 400,
        height: 300,
        axes: {
            x: {
                0: { side: 'top' }
            }
        }
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_20'));

    chart.draw(data, options);
}

/*============Funkcja Google Charts koło 2021 z wyboru*/

google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart_2021);

function drawChart_2021() {

    var data = google.visualization.arrayToDataTable([
        ['Kategoria', 'Procenty'],
        ['Oświata_2021', proc_1_21],
        ['Pomoc społeczna_2021', proc_2_21],
        ['Komunalna_2021', proc_3_21],
        ['Transport_2021', proc_4_21],
        ['Administracja_2021', proc_5_21],
        ['Mieszkaniowa_2021', proc_6_21],
        ['Pozostałe_2021', proc_7_21]
    ]);

    var options = {
        series: [{
            color: '#fff'
        }, {
            color: '#fff'
        }],
        legend: {
            textStyle: { color: '#fff' },
            position: 'top',
            maxLines: 1
        },
        chart: {
            title: 'Wykres zmian procentowych',
            subtitle: '2020'
        },
        backgroundColor: {
            fill: '#87cefa'

        },
        chartArea: {
            backgroundColor: '#87cefa'
        },
        hAxis: {
            textStyle: { color: '#fff' }
        },
        vAxis: {
            textStyle: { color: '#fff' }
        },
        bar: {
            groupWidth: '75%'
        },
        titleTextStyle: {
            color: '#fff'
        },
        width: 400,
        height: 300,
        axes: {
            x: {
                0: { side: 'top' }
            }
        }
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart_21'));

    chart.draw(data, options);
}
