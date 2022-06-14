<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" media="print" href="style.css"/>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="main.js"></script>

</head>

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
        
        if($rok=='2021'){
            if($prc_7_21<0){
                echo '<script type="text/javascript">';
                echo ' alert("Reszta nie może być mniejsza od zera!!!!")';
                echo '</script>';
            }else{
                $query = "UPDATE `procenty`
                SET prc_1='$prc_1_21', prc_2='$prc_2_21', prc_3='$prc_3_21', prc_4='$prc_4_21', prc_5='$prc_5_21', prc_6='$prc_6_21', prc_7='$prc_7_21', budzet_zmienna='$budzet_zmienna_21'    
                WHERE miejscowosc='Kosakowo' AND rok='2021'";
    
                mysqli_query($con, $query);
            }

        }elseif ($rok=='2020') {

            if($prc_7_20<0){
                echo '<script type="text/javascript">';
                echo ' alert("Reszta nie może być mniejsza od zera!!!!")';
                echo '</script>';
            }else{
                $query2 = "UPDATE `procenty`
                SET prc_1='$prc_1_20', prc_2='$prc_2_20', prc_3='$prc_3_20', prc_4='$prc_4_20', prc_5='$prc_5_20', prc_6='$prc_6_20', prc_7='$prc_7_20', budzet_zmienna='$budzet_zmienna_20'    
                WHERE miejscowosc='Kosakowo' AND rok='2020'";
    
                mysqli_query($con, $query2);   
            }
            
        }elseif ($rok=='2019') {

            if($prc_7_19<0){
                echo '<script type="text/javascript">';
                echo ' alert("Reszta nie może być mniejsza od zera!!!!")';
                echo '</script>';
            }else{
                $query3 = "UPDATE `procenty`
                SET prc_1='$prc_1_19', prc_2='$prc_2_19', prc_3='$prc_3_19', prc_4='$prc_4_19', prc_5='$prc_5_19', prc_6='$prc_6_19', prc_7='$prc_7_19', budzet_zmienna='$budzet_zmienna_19'    
                WHERE miejscowosc='Kosakowo' AND rok='2019'";
    
                mysqli_query($con, $query3);   
            }
            
        }elseif ($rok=='2018') {

            if($prc_7_18<0){
                echo '<script type="text/javascript">';
                echo ' alert("Reszta nie może mniejsza od zera!!!!")';
                echo '</script>';
            }else{
                $query4 = "UPDATE `procenty`
                SET prc_1='$prc_1_18', prc_2='$prc_2_18', prc_3='$prc_3_18', prc_4='$prc_4_18', prc_5='$prc_5_18', prc_6='$prc_6_18', prc_7='$prc_7_18', budzet_zmienna='$budzet_zmienna_18'    
                WHERE miejscowosc='Kosakowo' AND rok='2018'";
    
                mysqli_query($con, $query4);   
            }
            
        }
        
    
    }
    else
    {
        
    }

	
?>

<body onload="drawChart();">

    <!--============Wybor-->

    <table id="wybory">
        <tr>
            <td>Kategoria</td>
            <td>
                <select id="wybor" onchange="checker()">

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

    <div id="tabelka">
     <form method="POST" action="">
        
      <div id="2021">
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
                    <table id='header_21'>
                        <tr>
                            <a style=' word-spacing: 1.8em; color: #fff;float: right;margin-right: 1em;'><strong></strong>
                            <strong>Procent</strong>
                            <strong>Budżet</strong>
                            <strong>Kwota</strong></a>
                        </tr>
                    </table>
                    <table id='oswiata_tabelka_21'>
                        <tr>
                            <td>
                                <div class='tekst'>Oświata</div>
                            </td>
                            <td><input type='number' id='inp_1_21' value=".$row['prc_1']."
                            name='inp_1_21' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='oswiata_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='oswiata_21' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>
                    <table id='pomoc_tabelka_21'>
                        <tr>
                            <td>
                                <div class='tekst'>Pomoc społeczna</div>
                            </td>
                            <td><input type='number' id='inp_2_21' value=".$row['prc_2']."
                            name='inp_2_21' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pomoc_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pomoc_21' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='komunalna_tabelka_21'>
                        <tr>
                            <td>
                                <div class='tekst'>Komunalna</div>
                            </td>
                            <td><input  type='number' id='inp_3_21' value=".$row['prc_3']."
                            name='inp_3_21' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='komunalna_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='komunalna_21' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='transport_tabelka_21'>
                        <tr>
                            <td>
                                <div class='tekst'>Transport</div>
                            </td>
                            <td><input ' type='number' id='inp_4_21' value=".$row['prc_4']."
                            name='inp_4_21' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='transport_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='transport_21' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='administracja_tabelka_21'>
                        <tr>
                            <td>
                                <div class='tekst'>Administracja</div>
                            </td>
                            <td><input  type='number' id='inp_5_21' value=".$row['prc_5']."
                            name='inp_5_21' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='administracja_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='administracja_21' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='mieszkaniowa_tabelka_21'>
                        <tr>
                            <td>
                                <div class='tekst'>Mieszkaniowa</div>
                            </td>
                        <td><input type='number' id='inp_6_21' value=".$row['prc_6']."
                        name='inp_6_21' min='0' max='100' step='0.01' ></td>
                        <td>%</td>
                        <td><input type='text' size='10' id='mieszkaniowa_budzet_21' readonly='readonly' name='odp'><br></td>
                        <td><input type='text' size='10' id='mieszkaniowa_21' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='pozostale_tabelka_21'>
                        <tr>
                            <td>
                                <div class='tekst'>Pozostałe</div>
                            </td>
                            <td><input type='number' id='inp_7_21' name='inp_7_21'
                            value=".$row['prc_7']." min='0' max='100' step='0,01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pozostale_budzet_21' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pozostale_21' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='budzet_tabelka_21'>
                        <tr>
                            <td>
                                <div class='tekst'>Budżet Gminy:</div>
                            </td>
                            <td><input type='number' value=".$row['budzet_zmienna']."
                            id='budzet_input_21' name='budzet_21' min='0' ></td>
                            <td>zł</td>
                        </tr>
                    </table>
                ";
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

        $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna from procenty Where miejscowosc='Kosakowo' AND rok='2020'";
        $result = $conn-> query($sql);
        

        if ($result-> num_rows > 0){
            
            while ($row = $result-> fetch_assoc()) {
                echo 
                    "
                    <table id='header_20'>
                        <tr>
                            <a style=' word-spacing: 1.8em; color: #fff;float: right;margin-right: 1em;'><strong></strong>
                            <strong>Procent</strong>
                            <strong>Budżet</strong>
                            <strong>Kwota</strong></a>
                        </tr>
                    </table>
                    <table id='oswiata_tabelka_20'>
                        <tr>
                            <td>
                                <div class='tekst'>Oświata</div>
                            </td>
                            <td><input type='number' id='inp_1_20' value=".$row['prc_1']."
                            name='inp_1_20' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='oswiata_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='oswiata_20' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>
                    <table id='pomoc_tabelka_20'>
                        <tr>
                            <td>
                                <div class='tekst'>Pomoc społeczna</div>
                            </td>
                            <td><input type='number' id='inp_2_20' value=".$row['prc_2']."
                            name='inp_2_20' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pomoc_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pomoc_20' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='komunalna_tabelka_20'>
                        <tr>
                            <td>
                                <div class='tekst'>Komunalna</div>
                            </td>
                            <td><input type='number' id='inp_3_20' value=".$row['prc_3']."
                            name='inp_3_20' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='komunalna_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='komunalna_20' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='transport_tabelka_20'>
                        <tr>
                            <td>
                                <div class='tekst'>Transport</div>
                            </td>
                            <td><input type='number' id='inp_4_20' value=".$row['prc_4']."
                            name='inp_4_20' min='0' max='100' step='0.01'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='transport_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='transport_20' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='administracja_tabelka_20'>
                        <tr>
                            <td>
                                <div class='tekst'>Administracja</div>
                            </td>
                            <td><input type='number' id='inp_5_20' value=".$row['prc_5']."
                            name='inp_5_20' min='0' max='100' step='0.01'></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='administracja_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='administracja_20' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='mieszkaniowa_tabelka_20'>
                        <tr>
                            <td>
                                <div class='tekst'>Mieszkaniowa</div>
                            </td>
                        <td><input type='number' id='inp_6_20' value=".$row['prc_6']."
                        name='inp_6_20' min='0' max='100' step='0.01' ></td>
                        <td>%</td>
                        <td><input type='text' size='10' id='mieszkaniowa_budzet_20' readonly='readonly' name='odp'><br></td>
                        <td><input type='text' size='10' id='mieszkaniowa_20' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='pozostale_tabelka_20'>
                        <tr>
                            <td>
                                <div class='tekst'>Pozostałe</div>
                            </td>
                            <td><input type='number' id='inp_7_20' name='inp_7_20'
                            value=".$row['prc_7']." min='0' max='100' step='0,01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pozostale_budzet_20' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pozostale_20' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='budzet_tabelka_20'>
                        <tr>
                            <td>
                                <div class='tekst'>Budżet Gminy:</div>
                            </td>
                            <td><input type='number' value=".$row['budzet_zmienna']."
                            id='budzet_input_20' name='budzet_20' min='0'></td>
                            <td>zł</td>
                        </tr>
                    </table>
                ";
                
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

        $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna from procenty Where miejscowosc='Kosakowo' AND rok='2019'";
        $result = $conn-> query($sql);
        

        if ($result-> num_rows > 0){
            
            while ($row = $result-> fetch_assoc()) {
                echo 
                    "
                    <table id='header_19'>
                        <tr>
                            <a style=' word-spacing: 1.8em; color: #fff;float: right;margin-right: 1em;'><strong></strong>
                            <strong>Procent</strong>
                            <strong>Budżet</strong>
                            <strong>Kwota</strong></a>
                        </tr>
                    </table>
                    <table id='oswiata_tabelka_19'>
                        <tr>
                            <td>
                                <div class='tekst'>Oświata</div>
                            </td>
                            <td><input type='number' id='inp_1_19' value=".$row['prc_1']."
                            name='inp_1_19' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='oswiata_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='oswiata_19' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>
                    <table id='pomoc_tabelka_19'>
                        <tr>
                            <td>
                                <div class='tekst'>Pomoc społeczna</div>
                            </td>
                            <td><input type='number' id='inp_2_19' value=".$row['prc_2']."
                            name='inp_2_19' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pomoc_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pomoc_19' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='komunalna_tabelka_19'>
                        <tr>
                            <td>
                                <div class='tekst'>Komunalna</div>
                            </td>
                            <td><input type='number' id='inp_3_19' value=".$row['prc_3']."
                            name='inp_3_19' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='komunalna_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='komunalna_19' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='transport_tabelka_19'>
                        <tr>
                            <td>
                                <div class='tekst'>Transport</div>
                            </td>
                            <td><input type='number' id='inp_4_19' value=".$row['prc_4']."
                            name='inp_4_19' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='transport_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='transport_19' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='administracja_tabelka_19'>
                        <tr>
                            <td>
                                <div class='tekst'>Administracja</div>
                            </td>
                            <td><input type='number' id='inp_5_19' value=".$row['prc_5']."
                            name='inp_5_19' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='administracja_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='administracja_19' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='mieszkaniowa_tabelka_19'>
                        <tr>
                            <td>
                                <div class='tekst'>Mieszkaniowa</div>
                            </td>
                        <td><input type='number' id='inp_6_19' value=".$row['prc_6']."
                        name='inp_6_19' min='0' max='100' step='0.01' ></td>
                        <td>%</td>
                        <td><input type='text' size='10' id='mieszkaniowa_budzet_19' readonly='readonly' name='odp'><br></td>
                        <td><input type='text' size='10' id='mieszkaniowa_19' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='pozostale_tabelka_19'>
                        <tr>
                            <td>
                                <div class='tekst'>Pozostałe</div>
                            </td>
                            <td><input type='number' id='inp_7_19' name='inp_7_19'
                            value=".$row['prc_7']." min='0' max='100' step='0,01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pozostale_budzet_19' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pozostale_19' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='budzet_tabelka_19'>
                        <tr>
                            <td>
                                <div class='tekst'>Budżet Gminy:</div>
                            </td>
                            <td><input type='number' value=".$row['budzet_zmienna']."
                            id='budzet_input_19' name='budzet_19' min='0' ></td>
                            <td>zł</td>
                        </tr>
                    </table>   
                ";
                
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

        $sql= "SELECT miejscowosc, prc_1, prc_2, prc_3, prc_4, prc_5, prc_6, prc_7, budzet_zmienna from procenty Where miejscowosc='Kosakowo' AND rok='2018'";
        $result = $conn-> query($sql);
        

        if ($result-> num_rows > 0){
            
            while ($row = $result-> fetch_assoc()) {
                echo 
                    "
                    <table id='header_18'>
                        <tr>
                            <a style=' word-spacing: 1.8em; color: #fff;float: right;margin-right: 1em;'><strong></strong>
                            <strong>Procent</strong>
                            <strong>Budżet</strong>
                            <strong>Kwota</strong></a>
                        </tr>
                    </table>
                    <table id='oswiata_tabelka_18'>
                        <tr>
                            <td>
                                <div class='tekst'>Oświata</div>
                            </td>
                            <td><input type='number' id='inp_1_18' value=".$row['prc_1']."
                            name='inp_1_18' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='oswiata_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='oswiata_18' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>
                    <table id='pomoc_tabelka_18'>
                        <tr>
                            <td>
                                <div class='tekst'>Pomoc społeczna</div>
                            </td>
                            <td><input type='number' id='inp_2_18' value=".$row['prc_2']."
                            name='inp_2_18' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pomoc_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pomoc_18' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='komunalna_tabelka_18'>
                        <tr>
                            <td>
                                <div class='tekst'>Komunalna</div>
                            </td>
                            <td><input type='number' id='inp_3_18' value=".$row['prc_3']."
                            name='inp_3_18' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='komunalna_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='komunalna_18' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='transport_tabelka_18'>
                        <tr>
                            <td>
                                <div class='tekst'>Transport</div>
                            </td>
                            <td><input type='number' id='inp_4_18' value=".$row['prc_4']."
                            name='inp_4_18' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='transport_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='transport_18' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='administracja_tabelka_18'>
                        <tr>
                            <td>
                                <div class='tekst'>Administracja</div>
                            </td>
                            <td><input type='number' id='inp_5_18' value=".$row['prc_5']."
                            name='inp_5_18' min='0' max='100' step='0.01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='administracja_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='administracja_18' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='mieszkaniowa_tabelka_18'>
                        <tr>
                            <td>
                                <div class='tekst'>Mieszkaniowa</div>
                            </td>
                        <td><input type='number' id='inp_6_18' value=".$row['prc_6']."
                        name='inp_6_18' min='0' max='100' step='0.01' ></td>
                        <td>%</td>
                        <td><input type='text' size='10' id='mieszkaniowa_budzet_18' readonly='readonly' name='odp'><br></td>
                        <td><input type='text' size='10' id='mieszkaniowa_18' readonly='readonly' name='odp'><br></td>
                        </tr>
                    </table>

                    <table id='pozostale_tabelka_18'>
                        <tr>
                            <td>
                                <div class='tekst'>Pozostałe</div>
                            </td>
                            <td><input type='number' id='inp_7_18' name='inp_7_18'
                            value=".$row['prc_7']." min='0' max='100' step='0,01' ></td>
                            <td>%</td>
                            <td><input type='text' size='10' id='pozostale_budzet_18' readonly='readonly' name='odp'><br></td>
                            <td><input type='text' size='10' id='pozostale_18' readonly='readonly' name='odp'></td>
                        </tr>
                    </table>

                    <table id='budzet_tabelka_18'>
                        <tr>
                            <td>
                                <div class='tekst'>Budżet Gminy:</div>
                            </td>
                            <td><input type='number' value=".$row['budzet_zmienna']."
                            id='budzet_input_18' name='budzet_18' min='0' ></td>
                            <td>zł</td>
                        </tr>
                    </table>    
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

    <!--============Zapisz i rok-->
      <table id="zapisz_tabelka">

        <tr>
            <td>
                <select id='rok' onchange="checker()" name='rok'>

                    <option value='2021' name='2021' selected>2021</option>
                    <option value='2020' name='2020'>2020</option>
                    <option value='2019' name='2019'>2019</option>
                    <option value='2018' name='2018'>2018</option>

                </select>
            </td>
            <td><label >Oprocentowania</label></td>
            <td><input type="checkbox" id="oprocentowanie" name="oprocentowanie" onchange="checker_dwa()" checked></td>
            <td><input type="submit" name="przycisk" id="przycisk" value="" style="background-color: lightgreen;"></td>
        </tr>

      </table>
     </form>

    <!--============Kalkulator-->

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
                <!--<td><input class ="button" type="button" value="<-" onclick="back()"></td>-->

            </tr>

        </table>

    </div>

    <!--============Przycisk wyloguj-->

    <div id="wyloguj">
        <input type="button" onclick="location.href='calc_gmina.html';" value="wyloguj" style="width: 8em; height: 4em; font-size: 1.2rem; background: rgba(255, 255, 255, 0.1);
		border-radius: 15px; color: #fff; position: absolute; right: 0; top: 0; margin: 1em; border-color: red;" />
    </div>
    
    <!--============Google Charts i style Google Charts-->

    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <div id="chart_div" class="chart"
        style="float: right; margin-right: 2em;height: 36em; width: 45em; margin-top: 3em;"></div>

    <!--============Google charts liniowe-->

      <div id="curve_chart_dwa" style="display: none;"><div id="curve_chart" class="chart"
        style="/*margin-top: 27em; margin-left: 2em;*/ margin-bottom: 1em;margin-left: -2em; margin-top: 45em;"></div></div>

    <!--============Google charts kolumny z wyboru-->

    <div id="chart2_div_dwa" style="display: none;"><div id="chart2_div" class="chart"
        style="/*margin-top: 27em; margin-left: 2em;*/ margin-bottom: 1em;margin-left: 7em; margin-top: 45em;"></div></div>
    
    <!--============Google charts wielowartosciowy-->

    <div id="chart4_div_2" style="display: none;"><div id="chart4_div"  class="chart" style="/*margin-top: 27em; margin-left: 2em;*/ margin-bottom: 1em;margin-left: 7em; margin-top: 45em;"></div></div>
    
    <table> 
        <tr>
            <td><!--============Google charts koło 2018 z wyboru-->

                <div id="piechart" class="chart"
                    style="/*margin-top: 27em; margin-left: 2em;*/  margin-left: 4em; margin-bottom: 1em; display: none; margin-top:12em;"></div>
            </td>
            <td>
                <!--============Google charts koło 2020 z wyboru-->

                <div id="piechart_20" class="chart"
                    style="/*margin-top: 27em; margin-left: 2em;*/  margin-bottom: 1em; display: none; margin-top:12em;"></div>
            
            </td>

        </tr>
        <tr>
            <td>
                <!--============Google charts koło 2019 z wyboru-->

                <div id="piechart_19" class="chart"
                    style="/*margin-top: 27em; margin-left: 2em;*/  margin-left: 4em; margin-bottom: 1em; display: none;"></div>
            </td>
            <td id="piechart_21_dwa" style="display: none;">
                <!--============Google charts koło 2021 z wyboru-->

                <div id="piechart_21" class="chart"
                    style="/*margin-top: 27em; margin-left: 2em;*/ margin-bottom: 1em;"></div>
            </td>
        </tr>
    </table>
    <div id="google_data" style="margin: 9%; display: block;"><iframe id="datastudio" width="1250" height="950" style="position: relative; top: 76px;" src="https://datastudio.google.com/embed/reporting/0890557f-95bf-4628-949a-19fcd42e2d26/page/WCeaC" frameborder="5" allowfullscreen></iframe></div>


</body>
