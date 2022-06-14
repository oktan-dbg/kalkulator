$(window).resize(function(){
  drawChart();
});
function zmiana_roku(){
    var rok="0";       
    var zmiana_budzetu = document.getElementsByClassName("budzet");
    for(var i = 0; i < zmiana_budzetu.length; i++){
        zmiana_budzetu[i].style.display = "none";
    }
    rok=document.getElementById("rok_budzet").value;
    document.getElementById("budzet_"+rok).style.display="block";
    var uzyto_rozdzialy = document.getElementsByClassName("uzyto_rozdzialy");
    for(var i = 0; i < uzyto_rozdzialy.length; i++){
        uzyto_rozdzialy[i].style.display = "none"; 
        uzyto_rozdzialy[i].classList.remove("uzyto_rozdzialy");
    }
    var uzyto_podrozdzialy = document.getElementsByClassName("uzyto_podrozdzialy");
    for(var i = 0; i < uzyto_podrozdzialy.length; i++){
        uzyto_podrozdzialy[i].style.display = "none"; 
        uzyto_podrozdzialy[i].classList.remove("uzyto_podrozdzialy");
    }
    czyszczenie();
    zmiana_wplyw();
}
function all_year_checker(){
    if(document.getElementById("cbx_2021_ogolny").checked)
    {
        document.getElementById("cbx_2021_oswiata").checked = true;
        document.getElementById("cbx_2021_komunalna").checked = true;
        document.getElementById("cbx_2021_pomoc").checked = true;
        document.getElementById("cbx_2021_transport").checked = true;
        document.getElementById("cbx_2021_administracja").checked = true;
        document.getElementById("cbx_2021_mieszkaniowa").checked = true;
        document.getElementById("cbx_2021_pozostale").checked = true;
        document.getElementById("cbx_2021_budzet").checked = true;
        checker();

    }else if(document.getElementById("cbx_2021_ogolny").checked==false){

        document.getElementById("cbx_2021_oswiata").checked = false;
        document.getElementById("cbx_2021_komunalna").checked = false;
        document.getElementById("cbx_2021_pomoc").checked = false;
        document.getElementById("cbx_2021_transport").checked = false;
        document.getElementById("cbx_2021_administracja").checked = false;
        document.getElementById("cbx_2021_mieszkaniowa").checked = false;
        document.getElementById("cbx_2021_pozostale").checked = false;
        document.getElementById("cbx_2021_budzet").checked = false;
        checker();
    }
    if(document.getElementById("cbx_2020_ogolny").checked)
    {
        document.getElementById("cbx_2020_oswiata").checked = true;
        document.getElementById("cbx_2020_komunalna").checked = true;
        document.getElementById("cbx_2020_pomoc").checked = true;
        document.getElementById("cbx_2020_transport").checked = true;
        document.getElementById("cbx_2020_administracja").checked = true;
        document.getElementById("cbx_2020_mieszkaniowa").checked = true;
        document.getElementById("cbx_2020_pozostale").checked = true;
        document.getElementById("cbx_2020_budzet").checked = true;
        checker();

    }else if(document.getElementById("cbx_2020_ogolny").checked==false){

        document.getElementById("cbx_2020_oswiata").checked = false;
        document.getElementById("cbx_2020_komunalna").checked = false;
        document.getElementById("cbx_2020_pomoc").checked = false;
        document.getElementById("cbx_2020_transport").checked = false;
        document.getElementById("cbx_2020_administracja").checked = false;
        document.getElementById("cbx_2020_mieszkaniowa").checked = false;
        document.getElementById("cbx_2020_pozostale").checked = false;       
        document.getElementById("cbx_2020_budzet").checked = false;
        checker();
    }
    if(document.getElementById("cbx_2019_ogolny").checked)
    {
        document.getElementById("cbx_2019_oswiata").checked = true;
        document.getElementById("cbx_2019_komunalna").checked = true;
        document.getElementById("cbx_2019_pomoc").checked = true;
        document.getElementById("cbx_2019_transport").checked = true;
        document.getElementById("cbx_2019_administracja").checked = true;
        document.getElementById("cbx_2019_mieszkaniowa").checked = true;
        document.getElementById("cbx_2019_pozostale").checked = true;
        document.getElementById("cbx_2019_budzet").checked = true;
        checker();

    }else if(document.getElementById("cbx_2019_ogolny").checked==false){

        document.getElementById("cbx_2019_oswiata").checked = false;
        document.getElementById("cbx_2019_komunalna").checked = false;
        document.getElementById("cbx_2019_pomoc").checked = false;
        document.getElementById("cbx_2019_transport").checked = false;
        document.getElementById("cbx_2019_administracja").checked = false;
        document.getElementById("cbx_2019_mieszkaniowa").checked = false;
        document.getElementById("cbx_2019_pozostale").checked = false;
        document.getElementById("cbx_2019_budzet").checked = false;
        checker();
    }
    if(document.getElementById("cbx_2018_ogolny").checked)
    {
        document.getElementById("cbx_2018_oswiata").checked = true;
        document.getElementById("cbx_2018_komunalna").checked = true;
        document.getElementById("cbx_2018_pomoc").checked = true;
        document.getElementById("cbx_2018_transport").checked = true;
        document.getElementById("cbx_2018_administracja").checked = true;
        document.getElementById("cbx_2018_mieszkaniowa").checked = true;
        document.getElementById("cbx_2018_pozostale").checked = true;
        document.getElementById("cbx_2018_budzet").checked = true;
        checker();

    }else if(document.getElementById("cbx_2018_ogolny").checked==false){

        document.getElementById("cbx_2018_oswiata").checked = false;
        document.getElementById("cbx_2018_komunalna").checked = false;
        document.getElementById("cbx_2018_pomoc").checked = false;
        document.getElementById("cbx_2018_transport").checked = false;
        document.getElementById("cbx_2018_administracja").checked = false;
        document.getElementById("cbx_2018_mieszkaniowa").checked = false;
        document.getElementById("cbx_2018_pozostale").checked = false;
        document.getElementById("cbx_2018_budzet").checked = false;
        checker();
    }
}

function checker(){
    
    if(document.getElementById('cbx_2021_oswiata').checked)
    {
        document.getElementById("inp_1_21").style.display = 'block'
        document.getElementById("inp_1_21_txt").style.display = 'block'
        if(document.getElementById('cbx_2021_oswiata').checked && document.getElementById('cbx_2021_pomoc').checked && document.getElementById('cbx_2021_komunalna').checked && document.getElementById('cbx_2021_transport').checked
        && document.getElementById('cbx_2021_administracja').checked && document.getElementById('cbx_2021_mieszkaniowa').checked && document.getElementById('cbx_2021_pozostale').checked && document.getElementById('cbx_2021_budzet').checked)
        {
            document.getElementById("cbx_2021_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2021_ogolny").checked= false;
        }

    }else 
    {
        document.getElementById("inp_1_21").style.display = 'none'
        document.getElementById("inp_1_21_txt").style.display = 'none'
    } 
    if(document.getElementById('cbx_2020_oswiata').checked)
    {
        document.getElementById("inp_1_20").style.display = 'block'
        document.getElementById("inp_1_20_txt").style.display = 'block'
        if(document.getElementById('cbx_2020_oswiata').checked && document.getElementById('cbx_2020_pomoc').checked && document.getElementById('cbx_2020_komunalna').checked && document.getElementById('cbx_2020_transport').checked
        && document.getElementById('cbx_2020_administracja').checked && document.getElementById('cbx_2020_mieszkaniowa').checked && document.getElementById('cbx_2020_pozostale').checked && document.getElementById('cbx_2020_budzet').checked)
        {
            document.getElementById("cbx_2020_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2020_ogolny").checked= false;
        }

    }else
    {
        document.getElementById("inp_1_20").style.display = 'none'
        document.getElementById("inp_1_20_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2019_oswiata').checked)
    {
        document.getElementById("inp_1_19").style.display = 'block'
        document.getElementById("inp_1_19_txt").style.display = 'block'
        if(document.getElementById('cbx_2019_oswiata').checked && document.getElementById('cbx_2019_pomoc').checked && document.getElementById('cbx_2019_komunalna').checked && document.getElementById('cbx_2019_transport').checked
        && document.getElementById('cbx_2019_administracja').checked && document.getElementById('cbx_2019_mieszkaniowa').checked && document.getElementById('cbx_2019_pozostale').checked && document.getElementById('cbx_2019_budzet').checked)
        {
            document.getElementById("cbx_2019_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2019_ogolny").checked= false;
        }

    }else
    {
        document.getElementById("inp_1_19").style.display = 'none'
        document.getElementById("inp_1_19_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2018_oswiata').checked)
    {
        document.getElementById("inp_1_18").style.display = 'block'
        document.getElementById("inp_1_18_txt").style.display = 'block'
        if(document.getElementById('cbx_2018_oswiata').checked && document.getElementById('cbx_2018_pomoc').checked && document.getElementById('cbx_2018_komunalna').checked && document.getElementById('cbx_2018_transport').checked
        && document.getElementById('cbx_2018_administracja').checked && document.getElementById('cbx_2018_mieszkaniowa').checked && document.getElementById('cbx_2018_pozostale').checked && document.getElementById('cbx_2018_budzet').checked)
        {
            document.getElementById("cbx_2018_ogolny").checked= true;
        }else{
            document.getElementById("cbx_2018_ogolny").checked= false;
        }

    }else
    {
        document.getElementById("inp_1_18").style.display = 'none'
        document.getElementById("inp_1_18_txt").style.display = 'none'
    }


    if(document.getElementById('cbx_2021_komunalna').checked)
    {
        document.getElementById("inp_3_21").style.display = 'block'
        document.getElementById("inp_3_21_txt").style.display = 'block'
        if(document.getElementById('cbx_2021_oswiata').checked && document.getElementById('cbx_2021_pomoc').checked && document.getElementById('cbx_2021_komunalna').checked && document.getElementById('cbx_2021_transport').checked
        && document.getElementById('cbx_2021_administracja').checked && document.getElementById('cbx_2021_mieszkaniowa').checked && document.getElementById('cbx_2021_pozostale').checked && document.getElementById('cbx_2021_budzet').checked)
        {
            document.getElementById("cbx_2021_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2021_ogolny").checked= false;
        }
    }else 
    {
        document.getElementById("inp_3_21").style.display = 'none'
        document.getElementById("inp_3_21_txt").style.display = 'none'
    } 
    if(document.getElementById('cbx_2020_komunalna').checked)
    {
        document.getElementById("inp_3_20").style.display = 'block'
        document.getElementById("inp_3_20_txt").style.display = 'block'
        if(document.getElementById('cbx_2020_oswiata').checked && document.getElementById('cbx_2020_pomoc').checked && document.getElementById('cbx_2020_komunalna').checked && document.getElementById('cbx_2020_transport').checked
        && document.getElementById('cbx_2020_administracja').checked && document.getElementById('cbx_2020_mieszkaniowa').checked && document.getElementById('cbx_2020_pozostale').checked && document.getElementById('cbx_2020_budzet').checked)
        {
            document.getElementById("cbx_2020_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2020_ogolny").checked= false;
        }

    }else
    {
        document.getElementById("inp_3_20").style.display = 'none'
        document.getElementById("inp_3_20_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2019_komunalna').checked)
    {
        document.getElementById("inp_3_19").style.display = 'block'
        document.getElementById("inp_3_19_txt").style.display = 'block'
        if(document.getElementById('cbx_2019_oswiata').checked && document.getElementById('cbx_2019_pomoc').checked && document.getElementById('cbx_2019_komunalna').checked && document.getElementById('cbx_2019_transport').checked
        && document.getElementById('cbx_2019_administracja').checked && document.getElementById('cbx_2019_mieszkaniowa').checked && document.getElementById('cbx_2019_pozostale').checked && document.getElementById('cbx_2019_budzet').checked)
        {
            document.getElementById("cbx_2019_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2019_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_3_19").style.display = 'none'
        document.getElementById("inp_3_19_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2018_komunalna').checked)
    {
        document.getElementById("inp_3_18").style.display = 'block'
        document.getElementById("inp_3_18_txt").style.display = 'block'
        if(document.getElementById('cbx_2018_oswiata').checked && document.getElementById('cbx_2018_pomoc').checked && document.getElementById('cbx_2018_komunalna').checked && document.getElementById('cbx_2018_transport').checked
        && document.getElementById('cbx_2018_administracja').checked && document.getElementById('cbx_2018_mieszkaniowa').checked && document.getElementById('cbx_2018_pozostale').checked && document.getElementById('cbx_2018_budzet').checked)
        {
            document.getElementById("cbx_2018_ogolny").checked= true;
        }else{
            document.getElementById("cbx_2018_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_3_18").style.display = 'none'
        document.getElementById("inp_3_18_txt").style.display = 'none'
    }


    if(document.getElementById('cbx_2021_pomoc').checked)
    {
        document.getElementById("inp_2_21").style.display = 'block'
        document.getElementById("inp_2_21_txt").style.display = 'block'
        if(document.getElementById('cbx_2021_oswiata').checked && document.getElementById('cbx_2021_pomoc').checked && document.getElementById('cbx_2021_komunalna').checked && document.getElementById('cbx_2021_transport').checked
        && document.getElementById('cbx_2021_administracja').checked && document.getElementById('cbx_2021_mieszkaniowa').checked && document.getElementById('cbx_2021_pozostale').checked && document.getElementById('cbx_2021_budzet').checked)
        {
            document.getElementById("cbx_2021_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2021_ogolny").checked= false;
        }
    }else 
    {
        document.getElementById("inp_2_21").style.display = 'none'
        document.getElementById("inp_2_21_txt").style.display = 'none'
    } 
    if(document.getElementById('cbx_2020_pomoc').checked)
    {
        document.getElementById("inp_2_20").style.display = 'block'
        document.getElementById("inp_2_20_txt").style.display = 'block'
        if(document.getElementById('cbx_2020_oswiata').checked && document.getElementById('cbx_2020_pomoc').checked && document.getElementById('cbx_2020_komunalna').checked && document.getElementById('cbx_2020_transport').checked
        && document.getElementById('cbx_2020_administracja').checked && document.getElementById('cbx_2020_mieszkaniowa').checked && document.getElementById('cbx_2020_pozostale').checked && document.getElementById('cbx_2020_budzet').checked)
        {
            document.getElementById("cbx_2020_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2020_ogolny").checked= false;
        }

    }else
    {
        document.getElementById("inp_2_20").style.display = 'none'
        document.getElementById("inp_2_20_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2019_pomoc').checked)
    {
        document.getElementById("inp_2_19").style.display = 'block'
        document.getElementById("inp_2_19_txt").style.display = 'block'
        if(document.getElementById('cbx_2019_oswiata').checked && document.getElementById('cbx_2019_pomoc').checked && document.getElementById('cbx_2019_komunalna').checked && document.getElementById('cbx_2019_transport').checked
        && document.getElementById('cbx_2019_administracja').checked && document.getElementById('cbx_2019_mieszkaniowa').checked && document.getElementById('cbx_2019_pozostale').checked && document.getElementById('cbx_2019_budzet').checked)
        {
            document.getElementById("cbx_2019_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2019_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_2_19").style.display = 'none'
        document.getElementById("inp_2_19_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2018_pomoc').checked)
    {
        document.getElementById("inp_2_18").style.display = 'block'
        document.getElementById("inp_2_18_txt").style.display = 'block'
        if(document.getElementById('cbx_2018_oswiata').checked && document.getElementById('cbx_2018_pomoc').checked && document.getElementById('cbx_2018_komunalna').checked && document.getElementById('cbx_2018_transport').checked
        && document.getElementById('cbx_2018_administracja').checked && document.getElementById('cbx_2018_mieszkaniowa').checked && document.getElementById('cbx_2018_pozostale').checked && document.getElementById('cbx_2018_budzet').checked)
        {
            document.getElementById("cbx_2018_ogolny").checked= true;
        }else{
            document.getElementById("cbx_2018_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_2_18").style.display = 'none'
        document.getElementById("inp_2_18_txt").style.display = 'none'
    }


    if(document.getElementById('cbx_2021_transport').checked)
    {
        document.getElementById("inp_4_21").style.display = 'block'
        document.getElementById("inp_4_21_txt").style.display = 'block'
        if(document.getElementById('cbx_2021_oswiata').checked && document.getElementById('cbx_2021_pomoc').checked && document.getElementById('cbx_2021_komunalna').checked && document.getElementById('cbx_2021_transport').checked
        && document.getElementById('cbx_2021_administracja').checked && document.getElementById('cbx_2021_mieszkaniowa').checked && document.getElementById('cbx_2021_pozostale').checked && document.getElementById('cbx_2021_budzet').checked)
        {
            document.getElementById("cbx_2021_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2021_ogolny").checked= false;
        }
    }else 
    {
        document.getElementById("inp_4_21").style.display = 'none'
        document.getElementById("inp_4_21_txt").style.display = 'none'
    } 
    if(document.getElementById('cbx_2020_transport').checked)
    {
        document.getElementById("inp_4_20").style.display = 'block'
        document.getElementById("inp_4_20_txt").style.display = 'block'
        if(document.getElementById('cbx_2020_oswiata').checked && document.getElementById('cbx_2020_pomoc').checked && document.getElementById('cbx_2020_komunalna').checked && document.getElementById('cbx_2020_transport').checked
        && document.getElementById('cbx_2020_administracja').checked && document.getElementById('cbx_2020_mieszkaniowa').checked && document.getElementById('cbx_2020_pozostale').checked && document.getElementById('cbx_2020_budzet').checked)
        {
            document.getElementById("cbx_2020_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2020_ogolny").checked= false;
        }

    }else
    {
        document.getElementById("inp_4_20").style.display = 'none'
        document.getElementById("inp_4_20_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2019_transport').checked)
    {
        document.getElementById("inp_4_19").style.display = 'block'
        document.getElementById("inp_4_19_txt").style.display = 'block'
        if(document.getElementById('cbx_2019_oswiata').checked && document.getElementById('cbx_2019_pomoc').checked && document.getElementById('cbx_2019_komunalna').checked && document.getElementById('cbx_2019_transport').checked
        && document.getElementById('cbx_2019_administracja').checked && document.getElementById('cbx_2019_mieszkaniowa').checked && document.getElementById('cbx_2019_pozostale').checked && document.getElementById('cbx_2019_budzet').checked)
        {
            document.getElementById("cbx_2019_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2019_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_4_19").style.display = 'none'
        document.getElementById("inp_4_19_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2018_transport').checked)
    {
        document.getElementById("inp_4_18").style.display = 'block'
        document.getElementById("inp_4_18_txt").style.display = 'block'
        if(document.getElementById('cbx_2018_oswiata').checked && document.getElementById('cbx_2018_pomoc').checked && document.getElementById('cbx_2018_komunalna').checked && document.getElementById('cbx_2018_transport').checked
        && document.getElementById('cbx_2018_administracja').checked && document.getElementById('cbx_2018_mieszkaniowa').checked && document.getElementById('cbx_2018_pozostale').checked && document.getElementById('cbx_2018_budzet').checked)
        {
            document.getElementById("cbx_2018_ogolny").checked= true;
        }else{
            document.getElementById("cbx_2018_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_4_18").style.display = 'none'
        document.getElementById("inp_4_18_txt").style.display = 'none'
    }


    if(document.getElementById('cbx_2021_administracja').checked)
    {
        document.getElementById("inp_5_21").style.display = 'block'
        document.getElementById("inp_5_21_txt").style.display = 'block'
        if(document.getElementById('cbx_2021_oswiata').checked && document.getElementById('cbx_2021_pomoc').checked && document.getElementById('cbx_2021_komunalna').checked && document.getElementById('cbx_2021_transport').checked
        && document.getElementById('cbx_2021_administracja').checked && document.getElementById('cbx_2021_mieszkaniowa').checked && document.getElementById('cbx_2021_pozostale').checked && document.getElementById('cbx_2021_budzet').checked)
        {
            document.getElementById("cbx_2021_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2021_ogolny").checked= false;
        }
    }else 
    {
        document.getElementById("inp_5_21").style.display = 'none'
        document.getElementById("inp_5_21_txt").style.display = 'none'
    } 
    if(document.getElementById('cbx_2020_administracja').checked)
    {
        document.getElementById("inp_5_20").style.display = 'block'
        document.getElementById("inp_5_20_txt").style.display = 'block'
        if(document.getElementById('cbx_2020_oswiata').checked && document.getElementById('cbx_2020_pomoc').checked && document.getElementById('cbx_2020_komunalna').checked && document.getElementById('cbx_2020_transport').checked
        && document.getElementById('cbx_2020_administracja').checked && document.getElementById('cbx_2020_mieszkaniowa').checked && document.getElementById('cbx_2020_pozostale').checked && document.getElementById('cbx_2020_budzet').checked)
        {
            document.getElementById("cbx_2020_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2020_ogolny").checked= false;
        }

    }else
    {
        document.getElementById("inp_5_20").style.display = 'none'
        document.getElementById("inp_5_20_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2019_administracja').checked)
    {
        document.getElementById("inp_5_19").style.display = 'block'
        document.getElementById("inp_5_19_txt").style.display = 'block'
        if(document.getElementById('cbx_2019_oswiata').checked && document.getElementById('cbx_2019_pomoc').checked && document.getElementById('cbx_2019_komunalna').checked && document.getElementById('cbx_2019_transport').checked
        && document.getElementById('cbx_2019_administracja').checked && document.getElementById('cbx_2019_mieszkaniowa').checked && document.getElementById('cbx_2019_pozostale').checked && document.getElementById('cbx_2019_budzet').checked)
        {
            document.getElementById("cbx_2019_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2019_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_5_19").style.display = 'none'
        document.getElementById("inp_5_19_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2018_administracja').checked)
    {
        document.getElementById("inp_5_18").style.display = 'block'
        document.getElementById("inp_5_18_txt").style.display = 'block'
        if(document.getElementById('cbx_2018_oswiata').checked && document.getElementById('cbx_2018_pomoc').checked && document.getElementById('cbx_2018_komunalna').checked && document.getElementById('cbx_2018_transport').checked
        && document.getElementById('cbx_2018_administracja').checked && document.getElementById('cbx_2018_mieszkaniowa').checked && document.getElementById('cbx_2018_pozostale').checked && document.getElementById('cbx_2018_budzet').checked)
        {
            document.getElementById("cbx_2018_ogolny").checked= true;
        }else{
            document.getElementById("cbx_2018_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_5_18").style.display = 'none'
        document.getElementById("inp_5_18_txt").style.display = 'none'
    }


    if(document.getElementById('cbx_2021_mieszkaniowa').checked)
    {
        document.getElementById("inp_6_21").style.display = 'block'
        document.getElementById("inp_6_21_txt").style.display = 'block'
        if(document.getElementById('cbx_2021_oswiata').checked && document.getElementById('cbx_2021_pomoc').checked && document.getElementById('cbx_2021_komunalna').checked && document.getElementById('cbx_2021_transport').checked
        && document.getElementById('cbx_2021_administracja').checked && document.getElementById('cbx_2021_mieszkaniowa').checked && document.getElementById('cbx_2021_pozostale').checked && document.getElementById('cbx_2021_budzet').checked)
        {
            document.getElementById("cbx_2021_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2021_ogolny").checked= false;
        }
    }else 
    {
        document.getElementById("inp_6_21").style.display = 'none'
        document.getElementById("inp_6_21_txt").style.display = 'none'
    } 
    if(document.getElementById('cbx_2020_mieszkaniowa').checked)
    {
        document.getElementById("inp_6_20").style.display = 'block'
        document.getElementById("inp_6_20_txt").style.display = 'block'
        if(document.getElementById('cbx_2020_oswiata').checked && document.getElementById('cbx_2020_pomoc').checked && document.getElementById('cbx_2020_komunalna').checked && document.getElementById('cbx_2020_transport').checked
        && document.getElementById('cbx_2020_administracja').checked && document.getElementById('cbx_2020_mieszkaniowa').checked && document.getElementById('cbx_2020_pozostale').checked && document.getElementById('cbx_2020_budzet').checked)
        {
            document.getElementById("cbx_2020_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2020_ogolny").checked= false;
        }

    }else
    {
        document.getElementById("inp_6_20").style.display = 'none'
        document.getElementById("inp_6_20_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2019_mieszkaniowa').checked)
    {
        document.getElementById("inp_6_19").style.display = 'block'
        document.getElementById("inp_6_19_txt").style.display = 'block'
        if(document.getElementById('cbx_2019_oswiata').checked && document.getElementById('cbx_2019_pomoc').checked && document.getElementById('cbx_2019_komunalna').checked && document.getElementById('cbx_2019_transport').checked
        && document.getElementById('cbx_2019_administracja').checked && document.getElementById('cbx_2019_mieszkaniowa').checked && document.getElementById('cbx_2019_pozostale').checked && document.getElementById('cbx_2019_budzet').checked)
        {
            document.getElementById("cbx_2019_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2019_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_6_19").style.display = 'none'
        document.getElementById("inp_6_19_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2018_mieszkaniowa').checked)
    {
        document.getElementById("inp_6_18").style.display = 'block'
        document.getElementById("inp_6_18_txt").style.display = 'block'
        if(document.getElementById('cbx_2018_oswiata').checked && document.getElementById('cbx_2018_pomoc').checked && document.getElementById('cbx_2018_komunalna').checked && document.getElementById('cbx_2018_transport').checked
        && document.getElementById('cbx_2018_administracja').checked && document.getElementById('cbx_2018_mieszkaniowa').checked && document.getElementById('cbx_2018_pozostale').checked && document.getElementById('cbx_2018_budzet').checked)
        {
            document.getElementById("cbx_2018_ogolny").checked= true;
        }else{
            document.getElementById("cbx_2018_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_6_18").style.display = 'none'
        document.getElementById("inp_6_18_txt").style.display = 'none'
    }


    if(document.getElementById('cbx_2021_pozostale').checked)
    {
        document.getElementById("inp_7_21").style.display = 'block'
        document.getElementById("inp_7_21_txt").style.display = 'block'
        if(document.getElementById('cbx_2021_oswiata').checked && document.getElementById('cbx_2021_pomoc').checked && document.getElementById('cbx_2021_komunalna').checked && document.getElementById('cbx_2021_transport').checked
        && document.getElementById('cbx_2021_administracja').checked && document.getElementById('cbx_2021_mieszkaniowa').checked && document.getElementById('cbx_2021_pozostale').checked && document.getElementById('cbx_2021_budzet').checked)
        {
            document.getElementById("cbx_2021_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2021_ogolny").checked= false;
        }
    }else 
    {
        document.getElementById("inp_7_21").style.display = 'none'
        document.getElementById("inp_7_21_txt").style.display = 'none'
    } 
    if(document.getElementById('cbx_2020_pozostale').checked)
    {
        document.getElementById("inp_7_20").style.display = 'block'
        document.getElementById("inp_7_20_txt").style.display = 'block'
        if(document.getElementById('cbx_2020_oswiata').checked && document.getElementById('cbx_2020_pomoc').checked && document.getElementById('cbx_2020_komunalna').checked && document.getElementById('cbx_2020_transport').checked
        && document.getElementById('cbx_2020_administracja').checked && document.getElementById('cbx_2020_mieszkaniowa').checked && document.getElementById('cbx_2020_pozostale').checked && document.getElementById('cbx_2020_budzet').checked)
        {
            document.getElementById("cbx_2020_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2020_ogolny").checked= false;
        }

    }else
    {
        document.getElementById("inp_7_20").style.display = 'none'
        document.getElementById("inp_7_20_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2019_pozostale').checked)
    {
        document.getElementById("inp_7_19").style.display = 'block'
        document.getElementById("inp_7_19_txt").style.display = 'block'
        if(document.getElementById('cbx_2019_oswiata').checked && document.getElementById('cbx_2019_pomoc').checked && document.getElementById('cbx_2019_komunalna').checked && document.getElementById('cbx_2019_transport').checked
        && document.getElementById('cbx_2019_administracja').checked && document.getElementById('cbx_2019_mieszkaniowa').checked && document.getElementById('cbx_2019_pozostale').checked && document.getElementById('cbx_2019_budzet').checked)
        {
            document.getElementById("cbx_2019_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2019_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_7_19").style.display = 'none'
        document.getElementById("inp_7_19_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2018_pozostale').checked)
    {
        document.getElementById("inp_7_18").style.display = 'block'
        document.getElementById("inp_7_18_txt").style.display = 'block'
        if(document.getElementById('cbx_2018_oswiata').checked && document.getElementById('cbx_2018_pomoc').checked && document.getElementById('cbx_2018_komunalna').checked && document.getElementById('cbx_2018_transport').checked
        && document.getElementById('cbx_2018_administracja').checked && document.getElementById('cbx_2018_mieszkaniowa').checked && document.getElementById('cbx_2018_pozostale').checked && document.getElementById('cbx_2018_budzet').checked)
        {
            document.getElementById("cbx_2018_ogolny").checked= true;
        }else{
            document.getElementById("cbx_2018_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("inp_7_18").style.display = 'none'
        document.getElementById("inp_7_18_txt").style.display = 'none'
    }


    if(document.getElementById('cbx_2021_budzet').checked)
    {
        document.getElementById("budzet_21").style.display = 'block'
        document.getElementById("budzet_21_txt").style.display = 'block'
        if(document.getElementById('cbx_2021_oswiata').checked && document.getElementById('cbx_2021_pomoc').checked && document.getElementById('cbx_2021_komunalna').checked && document.getElementById('cbx_2021_transport').checked
        && document.getElementById('cbx_2021_administracja').checked && document.getElementById('cbx_2021_mieszkaniowa').checked && document.getElementById('cbx_2021_pozostale').checked && document.getElementById('cbx_2021_budzet').checked)
        {
            document.getElementById("cbx_2021_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2021_ogolny").checked= false;
        }
    }else 
    {
        document.getElementById("budzet_21").style.display = 'none'
        document.getElementById("budzet_21_txt").style.display = 'none'
    } 
    if(document.getElementById('cbx_2020_budzet').checked)
    {
        document.getElementById("budzet_20").style.display = 'block'
        document.getElementById("budzet_20_txt").style.display = 'block'
        if(document.getElementById('cbx_2020_oswiata').checked && document.getElementById('cbx_2020_pomoc').checked && document.getElementById('cbx_2020_komunalna').checked && document.getElementById('cbx_2020_transport').checked
        && document.getElementById('cbx_2020_administracja').checked && document.getElementById('cbx_2020_mieszkaniowa').checked && document.getElementById('cbx_2020_pozostale').checked && document.getElementById('cbx_2020_budzet').checked)
        {
            document.getElementById("cbx_2020_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2020_ogolny").checked= false;
        }

    }else
    {
        document.getElementById("budzet_20").style.display = 'none'
        document.getElementById("budzet_20_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2019_budzet').checked)
    {
        document.getElementById("budzet_19").style.display = 'block'
        document.getElementById("budzet_19_txt").style.display = 'block'
        if(document.getElementById('cbx_2019_oswiata').checked && document.getElementById('cbx_2019_pomoc').checked && document.getElementById('cbx_2019_komunalna').checked && document.getElementById('cbx_2019_transport').checked
        && document.getElementById('cbx_2019_administracja').checked && document.getElementById('cbx_2019_mieszkaniowa').checked && document.getElementById('cbx_2019_pozostale').checked && document.getElementById('cbx_2019_budzet').checked)
        {
            document.getElementById("cbx_2019_ogolny").checked= true;

        }else{
            document.getElementById("cbx_2019_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("budzet_19").style.display = 'none'
        document.getElementById("budzet_19_txt").style.display = 'none'
    }
    if(document.getElementById('cbx_2018_budzet').checked)
    {
        document.getElementById("budzet_18").style.display = 'block'
        document.getElementById("budzet_18_txt").style.display = 'block'
        if(document.getElementById('cbx_2018_oswiata').checked && document.getElementById('cbx_2018_pomoc').checked && document.getElementById('cbx_2018_komunalna').checked && document.getElementById('cbx_2018_transport').checked
        && document.getElementById('cbx_2018_administracja').checked && document.getElementById('cbx_2018_mieszkaniowa').checked && document.getElementById('cbx_2018_pozostale').checked && document.getElementById('cbx_2018_budzet').checked)
        {
            document.getElementById("cbx_2018_ogolny").checked= true;
        }else{
            document.getElementById("cbx_2018_ogolny").checked= false;
        }
    }else
    {
        document.getElementById("budzet_18").style.display = 'none'
        document.getElementById("budzet_18_txt").style.display = 'none'
    }
}
function togglePopup_oswiata(){
    document.getElementById("popup-1").classList.toggle("active");
}
function togglePopup_pomoc(){
    document.getElementById("popup-2").classList.toggle("active");
}
function togglePopup_komunalna(){
    document.getElementById("popup-3").classList.toggle("active");
}
function togglePopup_transport(){
    document.getElementById("popup-4").classList.toggle("active");
}
function togglePopup_administracja(){
    document.getElementById("popup-5").classList.toggle("active");
}
function togglePopup_mieszkaniowa(){
    document.getElementById("popup-6").classList.toggle("active");
}
function togglePopup_pozostale(){
    document.getElementById("popup-7").classList.toggle("active");
}
function togglePopup_budzet(){
    document.getElementById("popup-8").classList.toggle("active");
}

function zmiana_roku_budzet(){

    var rok_budzet = document.getElementById("rok_budzet").value;
    if(rok_budzet == "2021"){

        document.getElementById("budzet_2021").style.display = 'block'
        document.getElementById("budzet_2020").style.display = 'none'
        document.getElementById("budzet_2019").style.display = 'none'
        document.getElementById("budzet_2018").style.display = 'none'

    }else if(rok_budzet == "2020"){

        document.getElementById("budzet_2021").style.display = 'none'
        document.getElementById("budzet_2020").style.display = 'block'
        document.getElementById("budzet_2019").style.display = 'none'
        document.getElementById("budzet_2018").style.display = 'none'

    }else if(rok_budzet == "2019"){

        document.getElementById("budzet_2021").style.display = 'none'
        document.getElementById("budzet_2020").style.display = 'none'
        document.getElementById("budzet_2019").style.display = 'block'
        document.getElementById("budzet_2018").style.display = 'none'

    }else if(rok_budzet == "2018"){

        document.getElementById("budzet_2021").style.display = 'none'
        document.getElementById("budzet_2020").style.display = 'none'
        document.getElementById("budzet_2019").style.display = 'none'
        document.getElementById("budzet_2018").style.display = 'block'

    }
}
