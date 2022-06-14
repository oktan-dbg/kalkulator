var poswiata = 0.38;
var ppomoc = 0.22;
var pkomunalna = 0.09;
var ptransport = 0.08;
var padministracja = 0.07;
var pmieszkaniowa = 0.04;
var ppozostale = 0.12;

function pomnoz() {

    var textview = document.getElementById('textview').value;

    var woswiata21 = textview * document.getElementById('inp_1_21').value/100;
    document.getElementById('oswiata_21').value = Math.round(woswiata21) + "zł";
    var woswiata20 = textview * document.getElementById('inp_1_20').value/100;
    document.getElementById('oswiata_20').value = Math.round(woswiata20) + "zł";
    var woswiata19 = textview * document.getElementById('inp_1_19').value/100;
    document.getElementById('oswiata_19').value = Math.round(woswiata19) + "zł";
    var woswiata18 = textview * document.getElementById('inp_1_18').value/100;
    document.getElementById('oswiata_18').value = Math.round(woswiata18) + "zł";


    var wpomoc21 = textview * document.getElementById('inp_2_21').value/100;
    document.getElementById('pomoc_21').value = Math.round(wpomoc21) + "zł";
    var wpomoc20 = textview * document.getElementById('inp_2_20').value/100;
    document.getElementById('pomoc_20').value = Math.round(wpomoc20) + "zł";
    var wpomoc19 = textview * document.getElementById('inp_2_19').value/100;
    document.getElementById('pomoc_19').value = Math.round(wpomoc19) + "zł";
    var wpomoc18 = textview * document.getElementById('inp_2_18').value/100;
    document.getElementById('pomoc_18').value = Math.round(wpomoc18) + "zł";


    var wkomunalna21 = textview * document.getElementById('inp_3_21').value/100;
    document.getElementById('komunalna_21').value = Math.round(wkomunalna21) + "zł";
    var wkomunalna20 = textview * document.getElementById('inp_3_20').value/100;
    document.getElementById('komunalna_20').value = Math.round(wkomunalna20) + "zł";
    var wkomunalna19 = textview * document.getElementById('inp_3_19').value/100;
    document.getElementById('komunalna_19').value = Math.round(wkomunalna19) + "zł";
    var wkomunalna18 = textview * document.getElementById('inp_3_18').value/100;
    document.getElementById('komunalna_18').value = Math.round(wkomunalna18) + "zł";


    var wtransport21 = textview * document.getElementById('inp_4_21').value/100;
    document.getElementById('transport_21').value = Math.round(wtransport21) + "zł";
    var wtransport20 = textview * document.getElementById('inp_4_20').value/100;
    document.getElementById('transport_20').value = Math.round(wtransport20) + "zł";
    var wtransport19 = textview * document.getElementById('inp_4_19').value/100;
    document.getElementById('transport_19').value = Math.round(wtransport19) + "zł";
    var wtransport18 = textview * document.getElementById('inp_4_18').value/100;
    document.getElementById('transport_18').value = Math.round(wtransport18) + "zł";

    var wadministracja21 = textview * document.getElementById('inp_5_21').value/100;
    document.getElementById('administracja_21').value = Math.round(wadministracja21) + "zł";
    var wadministracja20 = textview * document.getElementById('inp_5_20').value/100;
    document.getElementById('administracja_20').value = Math.round(wadministracja20) + "zł";
    var wadministracja19 = textview * document.getElementById('inp_5_19').value/100;
    document.getElementById('administracja_19').value = Math.round(wadministracja19) + "zł";
    var wadministracja18 = textview * document.getElementById('inp_5_18').value/100;
    document.getElementById('administracja_18').value = Math.round(wadministracja18) + "zł";


    var wmieszkaniowa21 = textview * document.getElementById('inp_6_21').value/100;
    document.getElementById('mieszkaniowa_21').value = Math.round(wmieszkaniowa21) + "zł";
    var wmieszkaniowa20 = textview * document.getElementById('inp_6_20').value/100;
    document.getElementById('mieszkaniowa_20').value = Math.round(wmieszkaniowa20) + "zł";
    var wmieszkaniowa19 = textview * document.getElementById('inp_6_19').value/100;
    document.getElementById('mieszkaniowa_19').value = Math.round(wmieszkaniowa19) + "zł";
    var wmieszkaniowa18 = textview * document.getElementById('inp_6_18').value/100;
    document.getElementById('mieszkaniowa_18').value = Math.round(wmieszkaniowa18) + "zł";

    var wpozostale21 = textview * document.getElementById('inp_7_21').value/100;
    document.getElementById('pozostale_21').value = Math.round(wpozostale21) + "zł";
    var wpozostale20 = textview * document.getElementById('inp_7_20').value/100;
    document.getElementById('pozostale_20').value = Math.round(wpozostale20) + "zł";
    var wpozostale19 = textview * document.getElementById('inp_7_19').value/100;
    document.getElementById('pozostale_19').value = Math.round(wpozostale19) + "zł";
    var wpozostale18 = textview * document.getElementById('inp_7_18').value/100;
    document.getElementById('pozostale_18').value = Math.round(wpozostale18) + "zł";


}
/*============Funkcja Dodawania Liczby*/

function insert(num) {

    document.getElementById('textview').value = document.getElementById('textview').value + num;
    pomnoz()

}

/*============Funkcja Czyszcząca*/

function clean() {

    document.getElementById('textview').value = "";
    document.getElementById('mieszkaniowa_21').value=" ";
    document.getElementById('mieszkaniowa_20').value=" ";
    document.getElementById('mieszkaniowa_19').value=" ";
    document.getElementById('mieszkaniowa_18').value=" ";
    document.getElementById('pozostale_21').value=" ";
    document.getElementById('pozostale_20').value=" ";
    document.getElementById('pozostale_19').value=" ";
    document.getElementById('pozostale_18').value=" ";
    document.getElementById('administracja_21').value=" ";
    document.getElementById('administracja_20').value=" ";
    document.getElementById('administracja_19').value=" ";
    document.getElementById('administracja_18').value=" ";
    document.getElementById('komunalna_21').value=" ";
    document.getElementById('komunalna_20').value=" ";
    document.getElementById('komunalna_19').value=" ";
    document.getElementById('komunalna_18').value=" ";
    document.getElementById('transport_21').value=" ";
    document.getElementById('transport_20').value=" ";
    document.getElementById('transport_19').value=" ";
    document.getElementById('transport_18').value=" ";
    document.getElementById('pomoc_21').value=" ";
    document.getElementById('pomoc_20').value=" ";
    document.getElementById('pomoc_19').value=" ";
    document.getElementById('pomoc_18').value=" ";
    document.getElementById('oswiata_21').value=" ";
    document.getElementById('oswiata_20').value=" ";
    document.getElementById('oswiata_19').value=" ";
    document.getElementById('oswiata_18').value=" ";
    document.getElementById('suma_kalkulator').value=" ";

}
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