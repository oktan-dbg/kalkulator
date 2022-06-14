<?php 
    session_start();

	include("connection.php");
	include("functions.php");
?>
<head>
    <link rel="stylesheet" type="text/css" href="styl3.css"/>
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
</head>
<body>
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
                        }/*else if(document.getElementById("wplaty_select").value=="reszta"){
                            var wpl_rozdzialy = document.getElementsByClassName("wpl_rozdzialy_"+rok);
                            for(var i = 0; i < wpl_rozdzialy.length; i++){
                                id=wpl_rozdzialy[i].id;
                                console.log(id);
                                console.log(document.getElementById(id).cells.item(1).innerHTML);
                                if(document.getElementById(id).cells.item(4).innerHTML="")
                                {
                                    wpl_rozdzialy[i].style.display = "table-row"; 
                                    //wpl_rozdzialy[i].classList.add("uzyto_wplaty");
                                }else{
                                    wpl_rozdzialy[i].style.display = "none";
                                }
                            }
                        }*/
                        console.log("wpl_dzial_"+rok);
                            
                        
                    }
            </script>
	<select id="wplaty_select"  onchange="zmiana_wplyw()">
                <option value="dzial">dzial</option>
                <option value="reszta">reszta</option>
            </select>
            <table class="table" id="tabela_wplaty">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nazwa</th>
                        <th scope="col">Należy do</th>
                        <th scope="col">Plan</th>
                        <th scope="col">Rok</th>
                    </tr>
                </thead>
                <tbody>
                    <?
                        $conn = mysqli_connect("localhost", "dapjrknbde_aplikacja","Cyi4-n2[uWE!-+4R", "dapjrknbde_aplikacja");
                        if($conn-> connect_error){
                            die("Connection failed: ".$conn-> connect_error);
                        }

                        $sql= "SELECT wpl_kolumny.id,plan,@zmienna:=nalezy_do_dzial_id, (SELECT nazwa FROM wpl_dzialy WHERE @zmienna=id) AS nazwa_nalezy,nalezy_do_dzial_id, wpl_dzialy.nazwa AS nazwa_dzialy,rok,typ_id FROM dapjrknbde_aplikacja.wpl_kolumny,dapjrknbde_aplikacja.wpl_typy, dapjrknbde_aplikacja.wpl_dzialy WHERE gmina_id=1 AND wpl_dzialy.id=dzial_id AND wpl_dzialy.id_typ= wpl_typy.id;";
                        $result = $conn-> query($sql);
                

                        if ($result-> num_rows > 0){
                    
                            while ($row = mysqli_fetch_row($result)) {
                            echo <<<CMT
                                <tr id="$row[0]" style="width: 100%; border: 2px solid black; display: none;" class="wpl_rozdzialy_$row[6]">
                                    <td style="border: 2px solid black;">$row[5]</td><td style="border: 2px solid black;">$row[3]</td><td style="border: 2px solid black;">$row[1]</td><td style="border: 2px solid black;">$row[6]</td><td style="display: none;">$row[7]</td>
                                </tr>
                            CMT;
                            }   
                        }
                            
                        else{
                            echo "0 result";
                        }
                        $conn-> close();
                    ?>
                </tbody>
            </table>
            
</body>