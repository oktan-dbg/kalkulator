function pomnoz() {
    var sum=0;
    rok="_"+document.getElementById("kalkulator_wydatki").value;
    var textview = document.getElementById('textview').value;

    var wurzedy = textview * document.getElementById('Urzędy naczelnych organów władzy państwowej, kontroli i ochrony prawa oraz sądownictwa'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wurzedy);
    document.getElementById('urzedy_naczelnych').value = Math.round(wurzedy) + "zł";
    document.getElementById('urzedy_naczelnych_mobilne').value = Math.round(wurzedy) + "zł";

    var woszkolnictwo = textview * document.getElementById('Szkolnictwo wyższe i nauka'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(woszkolnictwo);
    document.getElementById('szkolnictwo').value = Math.round(woszkolnictwo) + "zł";
    document.getElementById('szkolnictwo_mobilne').value = Math.round(woszkolnictwo) + "zł";

    var wrybactwo = textview * document.getElementById('Rybołówstwo i rybactwo'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wrybactwo);
    document.getElementById('lescnictwo').value = Math.round(wrybactwo) + "zł";
    document.getElementById('lescnictwo_mobilne').value = Math.round(wrybactwo) + "zł";

    var wrolnictwo = textview * document.getElementById('Rolnictwo i łowiectwo'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wrolnictwo);
    document.getElementById('rolnictwo').value = Math.round(wrolnictwo) + "zł";
    document.getElementById('rolnictwo_mobilne').value = Math.round(wrolnictwo) + "zł";

    var wurzedy_naczelnych = textview * document.getElementById('Urzędy naczelnych organów władzy państwowej, kontroli i ochrony prawa oraz sądownictwa'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wurzedy_naczelnych);
    document.getElementById('sprawiedliwosci').value = Math.round(wurzedy_naczelnych) + "zł";
    document.getElementById('sprawiedliwosci_mobilne').value = Math.round(wurzedy_naczelnych) + "zł";

    var wmieszkaniowa = textview * document.getElementById('Gospodarka mieszkaniowa'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wmieszkaniowa);
    document.getElementById('mieszkaniowa').value = Math.round(wmieszkaniowa) + "zł";
    document.getElementById('mieszkaniowa_mobilne').value = Math.round(wmieszkaniowa) + "zł";

    var wpozostale = textview * document.getElementById('Pozostałe zadania w zakresie polityki społecznej'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wpozostale);
    document.getElementById('pozostale').value = Math.round(wpozostale) + "zł";
    document.getElementById('pozostale_mobilne').value = Math.round(wpozostale) + "zł";

    var wadministracja = textview * document.getElementById('Administracja publiczna'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wadministracja);
    document.getElementById('administracja').value = Math.round(wadministracja) + "zł";
    document.getElementById('administracja_mobilne').value = Math.round(wadministracja) + "zł";

    var wbezpieczenstwo = textview * document.getElementById('Bezpieczeństwo publiczne i ochrona przeciwpożarowa'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wbezpieczenstwo);
    document.getElementById('bezpieczenstwo').value = Math.round(wbezpieczenstwo) + "zł";
    document.getElementById('bezpieczenstwo_mobilne').value = Math.round(wbezpieczenstwo) + "zł";

    var wuslugowa = textview * document.getElementById('Działalność usługowa'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wuslugowa);
    document.getElementById('uslugowa').value = Math.round(wuslugowa) + "zł";
    document.getElementById('uslugowa_mobilne').value = Math.round(wuslugowa) + "zł";

    var wkomunalna = textview * document.getElementById('Gospodarka komunalna i ochrona środowiska'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wkomunalna);
    document.getElementById('komunalna').value = Math.round(wkomunalna) + "zł";
    document.getElementById('komunalna_mobilne').value = Math.round(wkomunalna) + "zł";

    var wtransport = textview * document.getElementById('Transport i łączność'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wtransport);
    document.getElementById('transport').value = Math.round(wtransport) + "zł";
    document.getElementById('transport_mobilne').value = Math.round(wtransport) + "zł";

    var wpomoc = textview * document.getElementById('Pomoc społeczna'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wpomoc);
    document.getElementById('pomoc').value = Math.round(wpomoc) + "zł";
    document.getElementById('pomoc_mobilne').value = Math.round(wpomoc) + "zł";

    var wedukacja = textview * document.getElementById('Edukacyjna opieka wychowawcza'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wedukacja);
    document.getElementById('edukacja').value = Math.round(wedukacja) + "zł";
    document.getElementById('edukacja_mobilne').value = Math.round(wedukacja) + "zł";

    var wdlug = textview * document.getElementById('Obsługa długu publicznego'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wdlug);
    document.getElementById('obsluga_dlugu').value = Math.round(wdlug) + "zł";
    document.getElementById('obsluga_dlugu_mobilne').value = Math.round(wdlug) + "zł";

    var woswiata = textview * document.getElementById('Oświata i wychowanie'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(woswiata);
    document.getElementById('oswiata').value = Math.round(woswiata) + "zł";
    document.getElementById('oswiata_mobilne').value = Math.round(woswiata) + "zł";

    var wkultura_fizyczna = textview * document.getElementById('Kultura fizyczna'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wkultura_fizyczna);
    document.getElementById('kultura_fizyczna').value = Math.round(wkultura_fizyczna) + "zł";
    document.getElementById('kultura_fizyczna_mobilne').value = Math.round(wkultura_fizyczna) + "zł";

    var wkultura = textview * document.getElementById('Kultura i ochrona dziedzictwa narodowego'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wkultura);
    document.getElementById('kultura').value = Math.round(wkultura) + "zł";
    document.getElementById('kultura_mobilne').value = Math.round(wkultura) + "zł";

    var wrozliczenia = textview * document.getElementById('Różne rozliczenia'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wrozliczenia);
    document.getElementById('rozne_rozliczenia').value = Math.round(wrozliczenia) + "zł";
    document.getElementById('rozne_rozliczenia_mobilne').value = Math.round(wrozliczenia) + "zł";

    var wrodzina = textview * document.getElementById('Rodzina'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wrodzina);
    document.getElementById('rodzina').value = Math.round(wrodzina) + "zł";
    document.getElementById('rodzina_mobilne').value = Math.round(wrodzina) + "zł";

    var wzdrowie = textview * document.getElementById('Ochrona zdrowia'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wzdrowie);
    document.getElementById('ochrona_zdrowia').value = Math.round(wzdrowie) + "zł";
    document.getElementById('ochrona_zdrowia_mobilne').value = Math.round(wzdrowie) + "zł";

    var wturystyka = textview * document.getElementById('Turystyka'+rok).rows[2].cells.item(1).innerHTML/100;
    sum+=Math.round(wturystyka);
    document.getElementById('turystyka').value = Math.round(wturystyka) + "zł";
    document.getElementById('turystyka_mobilne').value = Math.round(wturystyka) + "zł";

    document.getElementById('suma_kalkulator').value = Math.round(sum) + "zł";
}
/*============Funkcja Dodawania Liczby*/

function insert(num) {

    document.getElementById('textview').value = document.getElementById('textview').value + num;
    pomnoz();

}

/*============Funkcja Czyszcząca*/

function clean() {

    document.getElementById('textview').value = "";
    document.getElementById('urzedy_naczelnych').value = "";
    document.getElementById('szkolnictwo').value = "";
    document.getElementById('lescnictwo').value = "";
    document.getElementById('rolnictwo').value = "";
    document.getElementById('sprawiedliwosci').value = "";
    document.getElementById('mieszkaniowa').value = "";
    document.getElementById('pozostale').value="";
    document.getElementById('administracja').value="";
    document.getElementById('bezpieczenstwo').value="";
    document.getElementById('uslugowa').value="";
    document.getElementById('komunalna').value="";
    document.getElementById('transport').value="";
    document.getElementById('pomoc').value="";
    document.getElementById('edukacja').value="";
    document.getElementById('obsluga_dlugu').value="";
    document.getElementById('oswiata').value="";
    document.getElementById('kultura_fizyczna').value="";
    document.getElementById('kultura').value="";
    document.getElementById('rozne_rozliczenia').value="";
    document.getElementById('rodzina').value="";
    document.getElementById('ochrona_zdrowia').value="";
    document.getElementById('turystyka').value="";
    document.getElementById('suma_kalkulator').value="";
}
function zmiana_roku_kalkulator(){

    clean();
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