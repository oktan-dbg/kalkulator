<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" media="print" href="style.css"/>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        
    </style>
    <script language="JavaScript">

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


        
        /*============Funkcja Mnożąca Budżet*/
        
        function pomnoz_budzet() {

            var boswiata = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_1_21').value) / 100));
            document.getElementById('oswiata_budzet_21').value = boswiata;
            var boswiata = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_1_20').value) / 100));
            document.getElementById('oswiata_budzet_20').value = boswiata;
            var boswiata = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_1_19').value) / 100));
            document.getElementById('oswiata_budzet_19').value = boswiata;
            var boswiata = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_1_18').value) / 100));
            document.getElementById('oswiata_budzet_18').value = boswiata;

            var bpomoc = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_2_21').value) / 100));
            document.getElementById('pomoc_budzet_21').value = bpomoc;
            var bpomoc = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_2_20').value) / 100));
            document.getElementById('pomoc_budzet_20').value = bpomoc;
            var bpomoc = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_2_19').value) / 100));
            document.getElementById('pomoc_budzet_19').value = bpomoc;
            var bpomoc = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_2_18').value) / 100));
            document.getElementById('pomoc_budzet_18').value = bpomoc;

            var bkomunalna = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_3_21').value) / 100));
            document.getElementById('komunalna_budzet_21').value = bkomunalna;
            var bkomunalna = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_3_20').value) / 100));
            document.getElementById('komunalna_budzet_20').value = bkomunalna;
            var bkomunalna = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_3_19').value) / 100));
            document.getElementById('komunalna_budzet_19').value = bkomunalna;
            var bkomunalna = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_3_18').value) / 100));
            document.getElementById('komunalna_budzet_18').value = bkomunalna;

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
            var badministracja = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_5_20').value) / 100));
            document.getElementById('administracja_budzet_20').value = badministracja;
            var badministracja = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_5_19').value) / 100));
            document.getElementById('administracja_budzet_19').value = badministracja;
            var badministracja = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_5_18').value) / 100));
            document.getElementById('administracja_budzet_18').value = badministracja;

            var bmieszkaniowa = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_6_21').value) / 100));
            document.getElementById('mieszkaniowa_budzet_21').value = bmieszkaniowa;
            var bmieszkaniowa = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_6_20').value) / 100));
            document.getElementById('mieszkaniowa_budzet_20').value = bmieszkaniowa;
            var bmieszkaniowa = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_6_19').value) / 100));
            document.getElementById('mieszkaniowa_budzet_19').value = bmieszkaniowa;
            var bmieszkaniowa = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_6_18').value) / 100));
            document.getElementById('mieszkaniowa_budzet_18').value = bmieszkaniowa;

            var bpozostale = ((document.getElementById('budzet_input_21').value) * ((document.getElementById('inp_7_21').value) / 100));
            document.getElementById('pozostale_budzet_21').value = bpozostale;
            var bpozostale = ((document.getElementById('budzet_input_20').value) * ((document.getElementById('inp_7_20').value) / 100));
            document.getElementById('pozostale_budzet_20').value = bpozostale;
            var bpozostale = ((document.getElementById('budzet_input_19').value) * ((document.getElementById('inp_7_19').value) / 100));
            document.getElementById('pozostale_budzet_19').value = bpozostale;
            var bpozostale = ((document.getElementById('budzet_input_18').value) * ((document.getElementById('inp_7_18').value) / 100));
            document.getElementById('pozostale_budzet_18').value = bpozostale;


        }

        /*============Funkcja Mnożąca*/

        function pomnoz() {

            var textview = document.getElementById('textview').value;
            
            var woswiata = textview * ((document.getElementById('inp_1_21').value) / 100); 
            document.getElementById('oswiata_21').value = woswiata;
            var woswiata = textview * ((document.getElementById('inp_1_20').value) / 100); 
            document.getElementById('oswiata_20').value = woswiata;
            var woswiata = textview * ((document.getElementById('inp_1_19').value) / 100); 
            document.getElementById('oswiata_19').value = woswiata;
            var woswiata = textview * ((document.getElementById('inp_1_18').value) / 100); 
            document.getElementById('oswiata_18').value = woswiata;


            var wpomoc = textview * ((document.getElementById('inp_2_21').value) / 100);
            document.getElementById('pomoc_21').value = wpomoc;
            var wpomoc = textview * ((document.getElementById('inp_2_20').value) / 100);
            document.getElementById('pomoc_20').value = wpomoc;
            var wpomoc = textview * ((document.getElementById('inp_2_19').value) / 100);
            document.getElementById('pomoc_19').value = wpomoc;
            var wpomoc = textview * ((document.getElementById('inp_2_18').value) / 100);
            document.getElementById('pomoc_18').value = wpomoc;


            var wkomunalna = textview * ((document.getElementById('inp_3_21').value) / 100);
            document.getElementById('komunalna_21').value = wkomunalna;
            var wkomunalna = textview * ((document.getElementById('inp_3_20').value) / 100);
            document.getElementById('komunalna_20').value = wkomunalna;
            var wkomunalna = textview * ((document.getElementById('inp_3_19').value) / 100);
            document.getElementById('komunalna_19').value = wkomunalna;
            var wkomunalna = textview * ((document.getElementById('inp_3_18').value) / 100);
            document.getElementById('komunalna_18').value = wkomunalna;


            var wtransport = textview * ((document.getElementById('inp_4_21').value) / 100);
            document.getElementById('transport_21').value = wtransport;
            var wtransport = textview * ((document.getElementById('inp_4_20').value) / 100);
            document.getElementById('transport_20').value = wtransport;
            var wtransport = textview * ((document.getElementById('inp_4_19').value) / 100);
            document.getElementById('transport_19').value = wtransport;
            var wtransport = textview * ((document.getElementById('inp_4_18').value) / 100);
            document.getElementById('transport_18').value = wtransport;

            var wadministracja = textview * ((document.getElementById('inp_5_21').value) / 100);
            document.getElementById('administracja_21').value = wadministracja;
            var wadministracja = textview * ((document.getElementById('inp_5_20').value) / 100);
            document.getElementById('administracja_20').value = wadministracja;
            var wadministracja = textview * ((document.getElementById('inp_5_19').value) / 100);
            document.getElementById('administracja_19').value = wadministracja;
            var wadministracja = textview * ((document.getElementById('inp_5_18').value) / 100);
            document.getElementById('administracja_18').value = wadministracja;

            var wmieszkaniowa = textview * ((document.getElementById('inp_6_21').value) / 100);
            document.getElementById('mieszkaniowa_21').value = wmieszkaniowa;
            var wmieszkaniowa = textview * ((document.getElementById('inp_6_20').value) / 100);
            document.getElementById('mieszkaniowa_20').value = wmieszkaniowa;
            var wmieszkaniowa = textview * ((document.getElementById('inp_6_19').value) / 100);
            document.getElementById('mieszkaniowa_19').value = wmieszkaniowa;
            var wmieszkaniowa = textview * ((document.getElementById('inp_6_18').value) / 100);
            document.getElementById('mieszkaniowa_18').value = wmieszkaniowa;

            var wpozostale = textview * ((document.getElementById('inp_7_21').value) / 100);
            document.getElementById('pozostale_21').value = wpozostale;
            var wpozostale = textview * ((document.getElementById('inp_7_20').value) / 100);
            document.getElementById('pozostale_20').value = wpozostale;
            var wpozostale = textview * ((document.getElementById('inp_7_19').value) / 100);
            document.getElementById('pozostale_19').value = wpozostale;
            var wpozostale = textview * ((document.getElementById('inp_7_18').value) / 100);
            document.getElementById('pozostale_18').value = wpozostale;


        }

        /*============Pętla*/

        setInterval(function () {

            var selectedValue = document.getElementById("rok").value;
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
            


            showhide()
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

                width: 1400,
                height: 600,

                legend: {
                    position: 'top',
                    maxLines: 1
                },
                chart: {
                    title: 'Wykres zmian procentowych',
                    subtitle: '2018-2021'
                },
                bar: {
                    groupWidth: '75%'
                },
                height: 700,
                axes: {
                    x: {
                        0: { side: 'top' }
                    }
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            // Wait for the chart to finish drawing before calling the getImageURI() method.
            google.visualization.events.addListener(chart, 'ready', function () {
                curve_chart.innerHTML = '<img src="' + chart.getImageURI() + '">';
              console.log(curve_chart.innerHTML);
            });

            chart.draw(data, options);
        }

        /*============Funkcja Google Charts wielowartosciowy*/

        google.charts.load('current', {'packages':['corechart']});
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

                width: 1400,
                height: 600,

                legend: {
                    position: 'top',
                    maxLines: 3
                },
                vAxis: {
                    minValue: 0
                },

                bar: {
                    groupWidth: '75%'
                },
                chart: {
                    title: 'Porównanie oprocentowania',
                    subtitle: 'Oświata, Pomoc społeczna, Komunalna, Transport, Administracja, Mieszkaniowa i Pozostałe: 2018-2021'
                }
            };

         var chart = new google.visualization.AreaChart(document.getElementById('chart4_div'));

        // Wait for the chart to finish drawing before calling the getImageURI() method.
            google.visualization.events.addListener(chart, 'ready', function () {
              chart4_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
            console.log(chart4_div.innerHTML);
            });

         chart.draw(data, options);
        }

        /*============Funkcja Google Charts

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

                width: 1400,
                height: 600,
                isStacked: true,

                legend: {
                    position: 'top',
                    maxLines: 3
                },
                vAxis: {
                    minValue: 0,
                    ticks: [0, 0.25, 0.50, 0.75, 1]
                },

                bar: {
                    groupWidth: '75%'
                },
                chart: {
                    title: 'Porównanie oprocentowania',
                    subtitle: 'Oświata, Pomoc społeczna, Komunalna, Transport, Administracja, Mieszkaniowa i Pozostałe: 2018-2021'
                }
            };

            var chart_div = document.getElementById('chart_div');
            var chart = new google.charts.Bar(chart_div);

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        */

        /*============Funkcja Google Charts kolumna z wyboru

        google.charts.load("current", {packages:["imagebarchart"]});
        google.charts.setOnLoadCallback(drawChart3);
        function drawChart3() {
            var data = google.visualization.arrayToDataTable([
                ['Rok', 'Oświata', 'Pomoc społeczna', 'Komunalna', 'Transport', 'Administracja', 'Mieszkaniowa', 'Pozostałe'],
                ['2018', proc_1_18, proc_2_18, proc_3_18, proc_4_18, proc_5_18, proc_6_18, proc_7_18],
                ['2019', proc_1_19, proc_2_19, proc_3_19, proc_4_19, proc_5_19, proc_6_19, proc_7_19],
                ['2020', proc_1_20, proc_2_20, proc_3_20, proc_4_20, proc_5_20, proc_6_20, proc_7_20],
                ['2021', proc_1_21, proc_2_21, proc_3_21, proc_4_21, proc_5_21, proc_6_21, proc_7_21]
            ]);

            var chart = new google.visualization.ImageBarChart(document.getElementById('chart2_div'));

            

            chart.draw(data, {width: 1400, height: 600, isStacked: true, position: 'top', maxLines}});
        }
        */

        /*============Funkcja Google Charts koło 2018 z wyboru*/

        google.charts.load('current', {'packages':['corechart']});
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
                legend: {
                    position: 'top',
                    maxLines: 1
                },
                chart: {
                    title: 'Wykres zmian procentowych',
                    subtitle: '2018'
                },
                bar: {
                    groupWidth: '75%'
                },
                width: 700,
                height: 700,
                axes: {
                    x: {
                        0: { side: 'top' }
                    }
                }
            };

           var chart = new google.visualization.PieChart(document.getElementById('piechart'));

           // Wait for the chart to finish drawing before calling the getImageURI() method.
           google.visualization.events.addListener(chart, 'ready', function () {
             piechart.innerHTML = '<img src="' + chart.getImageURI() + '">';
             console.log(piechart.innerHTML);
           });

           chart.draw(data, options);
        }

        /*============Funkcja Google Charts koło 2019 z wyboru*/

        google.charts.load('current', {'packages':['corechart']});
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
                legend: {
                    position: 'top',
                    maxLines: 1
                },
                chart: {
                    title: 'Wykres zmian procentowych',
                    subtitle: '2019'
                },
                bar: {
                    groupWidth: '75%'
                },
                width: 700,
                height: 700,
                axes: {
                    x: {
                        0: { side: 'top' }
                    }
                }
            };

           var chart = new google.visualization.PieChart(document.getElementById('piechart_19'));

           // Wait for the chart to finish drawing before calling the getImageURI() method.
           google.visualization.events.addListener(chart, 'ready', function () {
             piechart_19.innerHTML = '<img src="' + chart.getImageURI() + '">';
             console.log(piechart_19.innerHTML);
           });

           chart.draw(data, options);
        }

        /*============Funkcja Google Charts koło 2020 z wyboru*/

        google.charts.load('current', {'packages':['corechart']});
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
                legend: {
                    position: 'top',
                    maxLines: 1
                },
                chart: {
                    title: 'Wykres zmian procentowych',
                    subtitle: '2020'
                },
                bar: {
                    groupWidth: '75%'
                },
                width: 700,
                height: 700,
                axes: {
                    x: {
                        0: { side: 'top' }
                    }
                }
            };

           var chart = new google.visualization.PieChart(document.getElementById('piechart_20'));

           // Wait for the chart to finish drawing before calling the getImageURI() method.
           google.visualization.events.addListener(chart, 'ready', function () {
             piechart_20.innerHTML = '<img src="' + chart.getImageURI() + '">';
             console.log(piechart_20.innerHTML);
           });

           chart.draw(data, options);
        }

        /*============Funkcja Google Charts koło 2021 z wyboru*/

        google.charts.load('current', {'packages':['corechart']});
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
                legend: {
                    position: 'top',
                    maxLines: 1
                },
                chart: {
                    title: 'Wykres zmian procentowych',
                    subtitle: '2020'
                },
                bar: {
                    groupWidth: '75%'
                },
                width: 700,
                height: 700,
                axes: {
                    x: {
                        0: { side: 'top' }
                    }
                }
            };

           var chart = new google.visualization.PieChart(document.getElementById('piechart_21'));

           // Wait for the chart to finish drawing before calling the getImageURI() method.
           google.visualization.events.addListener(chart, 'ready', function () {
             piechart_21.innerHTML = '<img src="' + chart.getImageURI() + '">';
             console.log(piechart_21.innerHTML);
           });

           chart.draw(data, options);
        }


    </script>

</head>

<body onload="window.print();" style="background-color: white;">
    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>

    <!--============Wybor-->

    <table id="wybory" style="display: none">
        <tr>
            <td>Kategoria</td>
            <td>
                <select id="wybor" onchange="showhide()">

                    <option value="oswiata">Oświata</option>
                    <option value="pomoc">Pomoc Społeczna</option>
                    <option value="komunalna">Komunalna</option>
                    <option value="transport">Transport</option>
                    <option value="administracja">Administracja</option>
                    <option value="mieszkaniowa">Mieszkaniowa</option>
                    <option value="pozostale">Pozostałe</option>
                    <option value="wszystko" selected>Wszystko</option>

                </select>
            </td>
        </tr>
    </table>

    <!--============Tabelka-->

    <div id="tabelka" style="display: none;">
        
      <div id="2021">
        <?php
        $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
        if($conn-> connect_error){
            die("Connection failed: ".$conn-> connect_error);
        }

        $sql= "SELECT miejscowosc_21, prc_1_21, prc_2_21, prc_3_21, prc_4_21, prc_5_21, prc_6_21, prc_7_21, budzet_zmienna_21 from procenty_21 Where miejscowosc_21='Kosakowo'";
        $result = $conn-> query($sql);
        

        if ($result-> num_rows > 0){
            
            while ($row = $result-> fetch_assoc()) {
                echo 
                    "<table id='header'>
                        <tr>
                            <a style=' word-spacing: 1.8em; color: #fff;float: right;margin-right: 1em;'><strong></strong>
                            <strong>Procent</strong>
                            <strong>Budżet</strong>
                            <strong>Kwota</strong></a>
                        </tr>
                    </table>
                    <table id='oswiata_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Oświata</div>
                            </td>
                            <td><input readonly='readonly' type='number' id='inp_1_21' value=".$row['prc_1_21']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='oswiata_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='oswiata_21' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>
                    <table id='pomoc_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Pomoc społeczna</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_2_21' value=".$row['prc_2_21']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pomoc_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pomoc_21' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='komunalna_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Komunalna</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_3_21' value=".$row['prc_3_21']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='komunalna_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='komunalna_21' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='transport_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Transport</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_4_21' value=".$row['prc_4_21']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='transport_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='transport_21' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='administracja_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Administracja</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_5_21' value=".$row['prc_5_21']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='administracja_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='administracja_21' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='mieszkaniowa_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Mieszkaniowa</div>
                            </td>
                        <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_6_21' value=".$row['prc_6_21']."
                        name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                        <td>%</td>
                        <td><input type='text' size='10' id='mieszkaniowa_budzet_21' readonly='readonly' name='odp'><br></td>
                        <td><input type='text' size='10' id='mieszkaniowa_21' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='pozostale_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Pozostałe</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_7_21' name='prc'
                            value=".$row['prc_7_21']." min='0' max='100' step='0,01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pozostale_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pozostale_21' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='budzet_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Budżet Gminy:</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' value=".$row['budzet_zmienna_21']."
                            id='budzet_input_21' name='budzet' min='0' onchange='procent_checker()'></td>
                            <td>zł</td>
                        </tr>
                    </table>";
                
            }
        }
        
        else{
            echo "0 result";
        }
        $conn-> close();
        ?>
      </div>

      <div id="2020" style="display: none">
        <?php
        $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
        if($conn-> connect_error){
            die("Connection failed: ".$conn-> connect_error);
        }

        $sql= "SELECT miejscowosc_20, prc_1_20, prc_2_20, prc_3_20, prc_4_20, prc_5_20, prc_6_20, prc_7_20, budzet_zmienna_20 from procenty_20 Where miejscowosc_20='Kosakowo'";
        $result = $conn-> query($sql);
        

        if ($result-> num_rows > 0){
            
            while ($row = $result-> fetch_assoc()) {
                echo 
                    "<table id='header'>
                        <tr>
                            <a style=' word-spacing: 1.8em; color: #fff;float: right;margin-right: 1em;'><strong></strong>
                            <strong>Procent</strong>
                            <strong>Budżet</strong>
                            <strong>Kwota</strong></a>
                        </tr>
                    </table>
                    <table id='oswiata_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Oświata</div>
                            </td>
                            <td><input readonly='readonly' type='number' id='inp_1_20' value=".$row['prc_1_20']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='oswiata_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='oswiata_20' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>
                    <table id='pomoc_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Pomoc społeczna</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_2_20' value=".$row['prc_2_20']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pomoc_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pomoc_20' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='komunalna_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Komunalna</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_3_20' value=".$row['prc_3_20']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='komunalna_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='komunalna_20' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='transport_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Transport</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_4_20' value=".$row['prc_4_20']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='transport_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='transport_20' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='administracja_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Administracja</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_5_20' value=".$row['prc_5_20']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='administracja_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='administracja_20' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='mieszkaniowa_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Mieszkaniowa</div>
                            </td>
                        <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_6_20' value=".$row['prc_6_20']."
                        name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                        <td>%</td>
                        <td><input type='text' size='10' id='mieszkaniowa_budzet_20' readonly='readonly' name='odp'><br></td>
                        <td><input type='text' size='10' id='mieszkaniowa_20' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='pozostale_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Pozostałe</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_7_20' name='prc'
                            value=".$row['prc_7_20']." min='0' max='100' step='0,01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pozostale_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pozostale_20' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='budzet_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Budżet Gminy:</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' value=".$row['budzet_zmienna_20']."
                            id='budzet_input_20' name='budzet' min='0' onchange='procent_checker()'></td>
                            <td>zł</td>
                        </tr>
                    </table>";
                
            }
        }
        
        else{
            echo "0 result";
        }
        $conn-> close();
        ?>
      </div>

      <div id="2019" style="display: none">
        <?php
        $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
        if($conn-> connect_error){
            die("Connection failed: ".$conn-> connect_error);
        }

        $sql= "SELECT miejscowosc_19, prc_1_19, prc_2_19, prc_3_19, prc_4_19, prc_5_19, prc_6_19, prc_7_19, budzet_zmienna_19 from procenty_19 Where miejscowosc_19='Kosakowo'";
        $result = $conn-> query($sql);
        

        if ($result-> num_rows > 0){
            
            while ($row = $result-> fetch_assoc()) {
                echo 
                    "<table id='header'>
                        <tr>
                            <a style=' word-spacing: 1.8em; color: #fff;float: right;margin-right: 1em;'><strong></strong>
                            <strong>Procent</strong>
                            <strong>Budżet</strong>
                            <strong>Kwota</strong></a>
                        </tr>
                    </table>
                    <table id='oswiata_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Oświata</div>
                            </td>
                            <td><input readonly='readonly' type='number' id='inp_1_19' value=".$row['prc_1_19']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='oswiata_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='oswiata_19' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>
                    <table id='pomoc_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Pomoc społeczna</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_2_19' value=".$row['prc_2_19']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pomoc_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pomoc_19' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='komunalna_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Komunalna</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_3_19' value=".$row['prc_3_19']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='komunalna_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='komunalna_19' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='transport_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Transport</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_4_19' value=".$row['prc_4_19']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='transport_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='transport_19' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='administracja_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Administracja</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_5_19' value=".$row['prc_5_19']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='administracja_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='administracja_19' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='mieszkaniowa_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Mieszkaniowa</div>
                            </td>
                        <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_6_19' value=".$row['prc_6_19']."
                        name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                        <td>%</td>
                        <td><input type='text' size='10' id='mieszkaniowa_budzet_19' readonly='readonly' name='odp'><br></td>
                        <td><input type='text' size='10' id='mieszkaniowa_19' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='pozostale_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Pozostałe</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_7_19' name='prc'
                            value=".$row['prc_7_19']." min='0' max='100' step='0,01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pozostale_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pozostale_19' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='budzet_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Budżet Gminy:</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' value=".$row['budzet_zmienna_19']."
                            id='budzet_input_19' name='budzet' min='0' onchange='procent_checker()'></td>
                            <td>zł</td>
                        </tr>
                    </table>";
                
            }
        }
        
        else{
            echo "0 result";
        }
        $conn-> close();
        ?>
      </div>

      <div id="2018" style="display: none">
        <?php
        $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
        if($conn-> connect_error){
            die("Connection failed: ".$conn-> connect_error);
        }

        $sql= "SELECT miejscowosc_18, prc_1_18, prc_2_18, prc_3_18, prc_4_18, prc_5_18, prc_6_18, prc_7_18, budzet_zmienna_18 from procenty_18 Where miejscowosc_18='Kosakowo'";
        $result = $conn-> query($sql);
        

        if ($result-> num_rows > 0){
            
            while ($row = $result-> fetch_assoc()) {
                echo 
                    "<table id='header'>
                        <tr>
                            <a style=' word-spacing: 1.8em; color: #fff;float: right;margin-right: 1em;'><strong></strong>
                            <strong>Procent</strong>
                            <strong>Budżet</strong>
                            <strong>Kwota</strong></a>
                        </tr>
                    </table>
                    <table id='oswiata_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Oświata</div>
                            </td>
                            <td><input readonly='readonly' type='number' id='inp_1_18' value=".$row['prc_1_18']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='oswiata_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='oswiata_18' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>
                    <table id='pomoc_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Pomoc społeczna</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_2_18' value=".$row['prc_2_18']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pomoc_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pomoc_18' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='komunalna_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Komunalna</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_3_18' value=".$row['prc_3_18']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='komunalna_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='komunalna_18' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='transport_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Transport</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_4_18' value=".$row['prc_4_18']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='transport_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='transport_18' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='administracja_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Administracja</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_5_18' value=".$row['prc_5_18']."
                            name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='administracja_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='administracja_18' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='mieszkaniowa_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Mieszkaniowa</div>
                            </td>
                        <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_6_18' value=".$row['prc_6_18']."
                        name='prc' min='0' max='100' step='0.01' onchange='procent_checker()'></td>
                        <td>%</td>
                        <td><input type='text' size='10' id='mieszkaniowa_budzet_18' readonly='readonly' name='odp'><br></td>
                        <td><input type='text' size='10' id='mieszkaniowa_18' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='pozostale_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Pozostałe</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' id='inp_7_18' name='prc'
                            value=".$row['prc_7_18']." min='0' max='100' step='0,01' onchange='procent_checker()'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pozostale_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pozostale_18' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='budzet_tabelka'>
                        <tr>
                            <td>
                                <div class='tekst'>Budżet Gminy:</div>
                            </td>
                            <td><input style='pointer-events: none;' readonly='readonly' type='number' value=".$row['budzet_zmienna_18']."
                            id='budzet_input_18' name='budzet' min='0' onchange='procent_checker()'></td>
                            <td>zł</td>
                        </tr>
                    </table>";
                
            }
        }
        
        else{
            echo "0 result";
        }
        $conn-> close();
        ?>
      </div>

    </div>

    <!--============Zapisz i rok-->

    <table id="zapisz_tabelka" style="display: none;">

        <tr>
            <td>
                <select id="rok" onchange="checker()">

                    <option value='2021' selected>2021</option>
                    <option value='2020'>2020</option>
                    <option value='2019'>2019</option>
                    <option value='2018'>2018</option>

                </select>
            </td>
            <td><input type="image" id="prawo" onclick="odejmij()" src="left.png"></td>
            <td><input type="image" id="lewo" onclick="dodaj()" src="right.png"></td>
            <td><label for="oprocentowanie">Oprocentowania</label></td>
        </tr>

    </table>

    <!--============Kalkulator-->

    <div id="kalkulator" style="display: none;">

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
                <!--<td><input class ="button" type="button" value="<-" onclick="back()"></td>-->

            </tr>

        </table>

    </div>

    
    <!--============Google Charts i style Google Charts-->

    <div id="chart_div" class="chart" style="margin: 3em; "></div>

    <!--============Google charts liniowe-->

      <div id="curve_chart" class="chart" style="margin: 3em; "></div>

    <!--============Google charts kolumny z wyboru-->

    <div id="chart2_div" class="chart" style="margin: 3em; "></div>
    
    <!--============Google charts wielowartosciowy-->

    <div id="chart4_div"  class="chart" style="margin: 3em; "></div>
    

    <table style="margin: 3em;"> 
        <tr>
            <td><!--============Google charts koło 2018 z wyboru-->

                <div id="piechart" class="chart" style="margin: 3em;"></div>
            </td>
            <td>
                <!--============Google charts koło 2020 z wyboru-->

                <div id="piechart_20" class="chart" style="margin: 3em;"></div>
            
            </td>

        </tr>
    </table>
    
    <table>
        <t>
            <td>
                <!--============Google charts koło 2019 z wyboru-->

                <div id="piechart_19" class="chart" style="margin: 3em;"></div>
            </td>
            <td>
                <!--============Google charts koło 2021 z wyboru-->

                <div id="piechart_21" class="chart" style="margin: 3em;"></div>
            </td>
        </t>
    </table>
</body>