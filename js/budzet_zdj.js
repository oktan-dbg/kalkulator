setInterval(function () {
    pomnoz_budzet();
    if(parseInt(document.getElementById('textview').value)>0){
        zmiana_roku_kalkulator();
    }
    
}, 1);

function pomnoz_budzet() {

    if(document.getElementById("rok_budzet")=="2021")
    {
        var goswiata21 = parseInt(document.getElementById('budzet_gminy_21').value) * parseInt(document.getElementById('inp_1_21').value);
        document.getElementById('budzet_oswiata').value = Math.round(goswiata21)/100 + "zł";
        document.getElementById('inp_budz_oswiata').value = parseInt(document.getElementById('inp_1_21').value)+"%";

        var gpomoc21 = parseInt(document.getElementById('budzet_gminy_21').value) * parseInt(document.getElementById('inp_2_21').value);
        document.getElementById('budzet_pomoc').value = Math.round(gpomoc21)/100 + "zł";
        document.getElementById('inp_budz_pomoc').value = parseInt(document.getElementById('inp_2_21').value)+"%";

        var gkomunalna21 = parseInt(document.getElementById('budzet_gminy_21').value) * parseInt(document.getElementById('inp_3_21').value);
        document.getElementById('budzet_komunalna').value = Math.round(gkomunalna21)/100 + "zł";
        document.getElementById('inp_budz_gospodarka').value = parseInt(document.getElementById('inp_3_21').value)+"%";

        var gtransport21 = parseInt(document.getElementById('budzet_gminy_21').value) * parseInt(document.getElementById('inp_4_21').value);
        document.getElementById('budzet_transport').value = Math.round(gtransport21)/100 + "zł";
        document.getElementById('inp_budz_transport').value = parseInt(document.getElementById('inp_4_21').value)+"%";

        var gadministracja21 = parseInt(document.getElementById('budzet_gminy_21').value) * parseInt(document.getElementById('inp_5_21').value);
        document.getElementById('budzet_administracja').value = Math.round(gadministracja21)/100 + "zł";
        document.getElementById('inp_budz_administracja').value = parseInt(document.getElementById('inp_5_21').value)+"%";

        var gmieszkaniowa21 = parseInt(document.getElementById('budzet_gminy_21').value) * parseInt(document.getElementById('inp_6_21').value);
        document.getElementById('budzet_mieszkaniowa').value = Math.round(gmieszkaniowa21)/100 + "zł";
        document.getElementById('inp_budz_mieszkaniowa').value = parseInt(document.getElementById('inp_6_21').value)+"%";

        var gpozostale21 = parseInt(document.getElementById('budzet_gminy_21').value) * parseInt(document.getElementById('inp_7_21').value);
        document.getElementById('budzet_pozostale').value = Math.round(gpozostale21)/100 + "zł";
        document.getElementById('inp_budz_pozostale').value = parseInt(document.getElementById('inp_7_21').value)+"%";

    }else if(document.getElementById("rok_budzet").value=="2020")
    {
        var goswiata20 = parseInt(document.getElementById('budzet_gminy_20').value) * parseInt(document.getElementById('inp_1_20').value);
        document.getElementById('budzet_oswiata').value = Math.round(goswiata20)/100 + "zł";
        document.getElementById('inp_budz_oswiata').value = parseInt(document.getElementById('inp_1_20').value)+"%";

        var gpomoc20 = parseInt(document.getElementById('budzet_gminy_20').value) * parseInt(document.getElementById('inp_2_20').value);
        document.getElementById('budzet_pomoc').value = Math.round(gpomoc20)/100 + "zł";
        document.getElementById('inp_budz_pomoc').value = parseInt(document.getElementById('inp_2_20').value)+"%";

        var gkomunalna20 = parseInt(document.getElementById('budzet_gminy_20').value) * parseInt(document.getElementById('inp_3_20').value);
        document.getElementById('budzet_komunalna').value = Math.round(gkomunalna20)/100 + "zł";
        document.getElementById('inp_budz_gospodarka').value = parseInt(document.getElementById('inp_3_20').value)+"%";

        var gtransport20 = parseInt(document.getElementById('budzet_gminy_20').value) * parseInt(document.getElementById('inp_4_20').value);
        document.getElementById('budzet_transport').value = Math.round(gtransport20)/100 + "zł";
        document.getElementById('inp_budz_transport').value = parseInt(document.getElementById('inp_4_20').value)+"%";

        var gadministracja20 = parseInt(document.getElementById('budzet_gminy_20').value) * parseInt(document.getElementById('inp_5_20').value);
        document.getElementById('budzet_administracja').value = Math.round(gadministracja20)/100 + "zł";
        document.getElementById('inp_budz_administracja').value = parseInt(document.getElementById('inp_5_20').value)+"%";

        var gmieszkaniowa20 = parseInt(document.getElementById('budzet_gminy_20').value) * parseInt(document.getElementById('inp_6_20').value);
        document.getElementById('budzet_mieszkaniowa').value = Math.round(gmieszkaniowa20)/100 + "zł";
        document.getElementById('inp_budz_mieszkaniowa').value = parseInt(document.getElementById('inp_6_20').value)+"%";

        var gpozostale20 = parseInt(document.getElementById('budzet_gminy_20').value) * parseInt(document.getElementById('inp_7_20').value);
        document.getElementById('budzet_pozostale').value = Math.round(gpozostale20)/100 + "zł";
        document.getElementById('inp_budz_pozostale').value = parseInt(document.getElementById('inp_7_20').value)+"%";

    }else if(document.getElementById("rok_budzet").value=="2019")
    {
        var goswiata19 = parseInt(document.getElementById('budzet_gminy_19').value) * parseInt(document.getElementById('inp_1_19').value);
        document.getElementById('budzet_oswiata').value = Math.round(goswiata19)/100 + "zł";
        document.getElementById('inp_budz_oswiata').value = parseInt(document.getElementById('inp_1_19').value)+"%";

        var gpomoc19 = parseInt(document.getElementById('budzet_gminy_19').value) * parseInt(document.getElementById('inp_2_19').value);
        document.getElementById('budzet_pomoc').value = Math.round(gpomoc19)/100 + "zł";
        document.getElementById('inp_budz_pomoc').value = parseInt(document.getElementById('inp_2_19').value)+"%";

        var gkomunalna19 = parseInt(document.getElementById('budzet_gminy_19').value) * parseInt(document.getElementById('inp_3_19').value);
        document.getElementById('budzet_komunalna').value = Math.round(gkomunalna19)/100 + "zł";
        document.getElementById('inp_budz_gospodarka').value = parseInt(document.getElementById('inp_3_19').value)+"%";

        var gtransport19 = parseInt(document.getElementById('budzet_gminy_19').value) * parseInt(document.getElementById('inp_4_19').value);
        document.getElementById('budzet_transport').value = Math.round(gtransport19)/100 + "zł";
        document.getElementById('inp_budz_transport').value = parseInt(document.getElementById('inp_4_19').value)+"%";

        var gadministracja19 = parseInt(document.getElementById('budzet_gminy_19').value) * parseInt(document.getElementById('inp_5_19').value);
        document.getElementById('budzet_administracja').value = Math.round(gadministracja19)/100 + "zł";
        document.getElementById('inp_budz_administracja').value = parseInt(document.getElementById('inp_5_19').value)+"%";

        var gmieszkaniowa19 = parseInt(document.getElementById('budzet_gminy_19').value) * parseInt(document.getElementById('inp_6_19').value);
        document.getElementById('budzet_mieszkaniowa').value = Math.round(gmieszkaniowa19)/100 + "zł";
        document.getElementById('inp_budz_mieszkaniowa').value = parseInt(document.getElementById('inp_6_19').value)+"%";

        var gpozostale19 = parseInt(document.getElementById('budzet_gminy_19').value) * parseInt(document.getElementById('inp_7_19').value);
        document.getElementById('budzet_pozostale').value = Math.round(gpozostale19)/100 + "zł";
        document.getElementById('inp_budz_pozostale').value = parseInt(document.getElementById('inp_7_19').value)+"%";

    }else if(document.getElementById("rok_budzet").value=="2018")
    {
        var goswiata18 = parseInt(document.getElementById('budzet_gminy_18').value) * parseInt(document.getElementById('inp_1_18').value);
        document.getElementById('budzet_oswiata').value = Math.round(goswiata18)/100 + "zł";
        document.getElementById('inp_budz_oswiata').value = parseInt(document.getElementById('inp_1_18').value)+"%";

        var gpomoc18 = parseInt(document.getElementById('budzet_gminy_18').value) * parseInt(document.getElementById('inp_2_18').value);
        document.getElementById('budzet_pomoc').value = Math.round(gpomoc18)/100 + "zł";
        document.getElementById('inp_budz_pomoc').value = parseInt(document.getElementById('inp_2_18').value)+"%";

        var gkomunalna18 = parseInt(document.getElementById('budzet_gminy_18').value) * parseInt(document.getElementById('inp_3_18').value);
        document.getElementById('budzet_komunalna').value = Math.round(gkomunalna18)/100 + "zł";
        document.getElementById('inp_budz_gospodarka').value = parseInt(document.getElementById('inp_3_18').value)+"%";

        var gtransport18 = parseInt(document.getElementById('budzet_gminy_18').value) * parseInt(document.getElementById('inp_4_18').value);
        document.getElementById('budzet_transport').value = Math.round(gtransport18)/100 + "zł";
        document.getElementById('inp_budz_transport').value = parseInt(document.getElementById('inp_4_18').value)+"%";

        var gadministracja18 = parseInt(document.getElementById('budzet_gminy_18').value) * parseInt(document.getElementById('inp_5_18').value);
        document.getElementById('budzet_administracja').value = Math.round(gadministracja18)/100 + "zł";
        document.getElementById('inp_budz_administracja').value = parseInt(document.getElementById('inp_5_18').value)+"%";

        var gmieszkaniowa18 = parseInt(document.getElementById('budzet_gminy_18').value) * parseInt(document.getElementById('inp_6_18').value);
        document.getElementById('budzet_mieszkaniowa').value = Math.round(gmieszkaniowa18)/100 + "zł";
        document.getElementById('inp_budz_mieszkaniowa').value = parseInt(document.getElementById('inp_6_18').value)+"%";

        var gpozostale18 = parseInt(document.getElementById('budzet_gminy_18').value) * parseInt(document.getElementById('inp_7_18').value);
        document.getElementById('budzet_pozostale').value = Math.round(gpozostale18)/100 + "zł";
        document.getElementById('inp_budz_pozostale').value = parseInt(document.getElementById('inp_7_18').value)+"%";
    }

}
function mieszkaniowa_zdj(){

    document.getElementById("gospodarka_mieszkaniowa").style.display = 'block'
    document.getElementById("pozostale_zadania").style.display = 'none'
    document.getElementById("administracja_publiczna").style.display = 'none'
    document.getElementById("gospodarka_komunalna").style.display = 'none'
    document.getElementById("transport_lacznosc").style.display = 'none'
    document.getElementById("pomoc_spoleczna").style.display = 'none'
    document.getElementById("oswiata_wychowanie").style.display = 'none'
    pomnoz_budzet()

}
function pozostale_zdj(){

    document.getElementById("gospodarka_mieszkaniowa").style.display = 'none'
    document.getElementById("pozostale_zadania").style.display = 'block'
    document.getElementById("administracja_publiczna").style.display = 'none'
    document.getElementById("gospodarka_komunalna").style.display = 'none'
    document.getElementById("transport_lacznosc").style.display = 'none'
    document.getElementById("pomoc_spoleczna").style.display = 'none'
    document.getElementById("oswiata_wychowanie").style.display = 'none'
    pomnoz_budzet()

}
function publiczna_zdj(){

    document.getElementById("gospodarka_mieszkaniowa").style.display = 'none'
    document.getElementById("pozostale_zadania").style.display = 'none'
    document.getElementById("administracja_publiczna").style.display = 'block'
    document.getElementById("gospodarka_komunalna").style.display = 'none'
    document.getElementById("transport_lacznosc").style.display = 'none'
    document.getElementById("pomoc_spoleczna").style.display = 'none'
    document.getElementById("oswiata_wychowanie").style.display = 'none'
    pomnoz_budzet()

}
function gospodarka_zdj(){

    document.getElementById("gospodarka_mieszkaniowa").style.display = 'none'
    document.getElementById("pozostale_zadania").style.display = 'none'
    document.getElementById("administracja_publiczna").style.display = 'none'
    document.getElementById("gospodarka_komunalna").style.display = 'block'
    document.getElementById("transport_lacznosc").style.display = 'none'
    document.getElementById("pomoc_spoleczna").style.display = 'none'
    document.getElementById("oswiata_wychowanie").style.display = 'none'
    pomnoz_budzet()

}
function transport_zdj(){

    document.getElementById("gospodarka_mieszkaniowa").style.display = 'none'
    document.getElementById("pozostale_zadania").style.display = 'none'
    document.getElementById("administracja_publiczna").style.display = 'none'
    document.getElementById("gospodarka_komunalna").style.display = 'none'
    document.getElementById("transport_lacznosc").style.display = 'block'
    document.getElementById("pomoc_spoleczna").style.display = 'none'
    document.getElementById("oswiata_wychowanie").style.display = 'none'
    pomnoz_budzet()

}
function pomoc_zdj(){

    document.getElementById("gospodarka_mieszkaniowa").style.display = 'none'
    document.getElementById("pozostale_zadania").style.display = 'none'
    document.getElementById("administracja_publiczna").style.display = 'none'
    document.getElementById("gospodarka_komunalna").style.display = 'none'
    document.getElementById("transport_lacznosc").style.display = 'none'
    document.getElementById("pomoc_spoleczna").style.display = 'block'
    document.getElementById("oswiata_wychowanie").style.display = 'none'
    pomnoz_budzet()

}
function oswiata_zdj(){

    document.getElementById("gospodarka_mieszkaniowa").style.display = 'none'
    document.getElementById("pozostale_zadania").style.display = 'none'
    document.getElementById("administracja_publiczna").style.display = 'none'
    document.getElementById("gospodarka_komunalna").style.display = 'none'
    document.getElementById("transport_lacznosc").style.display = 'none'
    document.getElementById("pomoc_spoleczna").style.display = 'none'
    document.getElementById("oswiata_wychowanie").style.display = 'block'
    pomnoz_budzet()

}