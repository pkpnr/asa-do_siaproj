<link rel="stylesheet" type="text/css" href="../../CSS/search-res.css">


<div class="hekhek">
    <table id="tab1">
        <tr id="rowgrp1">
            <th>Business Name</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Item Name</th>
            <th>Price/Rate</th>
            <th>Quantity/Availability</th>
        </tr>

<?php
        include 'sqldb_ASADO.php';


        if(isset($_POST["search"]))
        {
            $valSearch = $_POST["textInp"];

            if($valSearch === "")
            {
                $sql = "SELECT *
                FROM gen_Tb;";
        
                $res = mysqli_query($conn, $sql);

                echo showRes($res);
            }
            else
            {
                $sql = "SELECT *
                FROM gen_Tb
                WHERE CONCAT(`bsn_Nm`, `Address`, `Cont_Num`, `itemName`, `Price`)
                LIKE '%".$valSearch."%';";
        
                $res = mysqli_query($conn, $sql);

                echo showRes($res);
            }
        }
        
        else if(isset($_POST["az"]))
        {
            $valSearch = $_POST["textInp"];

            $sql = "SELECT *
                    FROM gen_Tb
                    WHERE CONCAT(`bsn_Nm`, `Address`, `Cont_Num`, `itemName`, `Price`)
                    LIKE '%".$valSearch."%'
                    ORDER BY bsn_Nm ASC;";

            $res = mysqli_query($conn, $sql);

            echo showRes($res);
        }
        else if(isset($_POST["za"]))
        {
            $valSearch = $_POST["textInp"];

            $sql = "SELECT *
                    FROM gen_Tb
                    WHERE CONCAT(`bsn_Nm`, `Address`, `Cont_Num`, `itemName`, `Price`)
                    LIKE '%".$valSearch."%'
                    ORDER BY bsn_Nm DESC;";

            $res = mysqli_query($conn, $sql);

            echo showRes($res);
        }
        else if(isset($_POST["quant"]))
        {
            $valSearch = $_POST["textInp"];

            $sql = "SELECT *
                    FROM byQuant
                    WHERE CONCAT(`bsn_Nm`, `Address`, `Cont_Num`, `itemName`, `Price`, `AvbQnt`)
                    LIKE '%".$valSearch."%';";

            $res = mysqli_query($conn, $sql);

            echo qnt_showRes($res);
        }
        else if(isset($_POST["servAvb"]))
        {
            $valSearch = $_POST["textInp"];

            $sql = "SELECT *
                    FROM byServAvb
                    WHERE CONCAT(`bsn_Nm`, `Address`, `Cont_Num`, `srv_Nm`, `SrvRate`, `IsAvailable`)
                    LIKE '%".$valSearch."%';";

            $res = mysqli_query($conn, $sql);

            echo ServAvb_showRes($res);
        } 
        else if(isset($_POST["PS"]))
        {
            $valSearch = $_POST["textInp"];

            $sql = "SELECT * 
                    FROM bsn_Estab
                    WHERE CONCAT(`bsn_Nm`, `Address`, `Cont_Num`) OR categ_Estab = 'Printing Services'
                    LIKE '%".$valSearch."%';";

            $res = mysqli_query($conn, $sql);

            echo categ_showRes($res);
        }
        else if(isset($_POST["fd&bvr"]))
        {
            $valSearch = $_POST["textInp"];

            $sql = "SELECT * 
                    FROM bsn_Estab
                    WHERE CONCAT(`bsn_Nm`, `Address`, `Cont_Num`) OR categ_Estab = 'Food and Beverage'
                    LIKE '%".$valSearch."%';";

            $res = mysqli_query($conn, $sql);

            echo categ_showRes($res);
        }
        else if(isset($_POST["BookS"]))
        {
            $valSearch = $_POST["textInp"];

            $sql = "SELECT * 
                    FROM bsn_Estab
                    WHERE CONCAT(`bsn_Nm`, `Address`, `Cont_Num`) OR categ_Estab = 'Stationery'
                    LIKE '%".$valSearch."%';";

            $res = mysqli_query($conn, $sql);

            echo categ_showRes($res);
        } 
        else
        {
            $sql = "SELECT *
                    FROM gen_Tb;";

            $res = mysqli_query($conn, $sql);

            echo showRes($res);

        }


        
            function showRes($r)
            {
                while ($row = mysqli_fetch_assoc($r))
                {
                    echo "<tr><td>" . $row['bsn_Nm'] . "</td><td>"
                    . $row['Address'] . "</td><td>"
                    . $row['Cont_Num'] . "</td><td>"
                    . $row['itemName'] . "</td><td>"
                    . $row['Price'] . "</td></tr>";
                }
        
                echo "</table>";

            }

            function qnt_showRes($r)
            {
                while ($row = mysqli_fetch_assoc($r))
                {
                    echo "<tr><td>" . $row['bsn_Nm'] . "</td><td>"
                    . $row['Address'] . "</td><td>"
                    . $row['Cont_Num'] . "</td><td>"
                    . $row['itemName'] . "</td><td>"
                    . $row['Price'] . "</td><td>"
                    . $row['AvbQnt'] . "</td></tr>";
                }
        
                echo "</table>";

            }

            function ServAvb_showRes($r)
            {
                while ($row = mysqli_fetch_assoc($r))
                {
                    echo "<tr><td>" . $row['bsn_Nm'] . "</td><td>"
                    . $row['Address'] . "</td><td>"
                    . $row['Cont_Num'] . "</td><td>"
                    . $row['srv_Nm'] . "</td><td>"
                    . $row['SrvRate'] . "</td><td>"
                    . $row['IsAvailable'] . "</td></tr>";
                }
        
                echo "</table>";

            }

            function categ_showRes($r)
            {
                while ($row = mysqli_fetch_assoc($r))
                {
                    echo "<tr><td>" . $row['bsn_Nm'] . "</td><td>"
                    . $row['Address'] . "</td><td>"
                    . $row['Cont_Num'] . "</td></tr>";
                }
        
                echo "</table>";

            }

            

?>


    </table>
</div>
<!--
<div class="hekhek2" id="noblepowers">
    <table id="tab1">
            <tr id="rowgrp1">
                <th>Business Name</th>
                <th>Address</th>
                <th>Contact Number</th>
            </tr> */

    
            /*include 'sqldb_ASADO.php';

            if(isset($_POST["fd&bvr"]))
            {
                $valSearch = $_POST["textInp"];

                $sql = "SELECT * 
                        FROM bsn_Estab
                        WHERE CONCAT(`bsn_Nm`, `Address`, `Cont_Num`) OR categ_Estab = 'Food and Beverage'
                        LIKE '%".$valSearch."%';";

                $res = mysqli_query($conn, $sql);

                echo categ_showRes($res);
            } 
            else if(isset($_POST["PS"]))
            {
                $valSearch = $_POST["textInp"];

                $sql = "SELECT * 
                        FROM bsn_Estab
                        WHERE CONCAT(`bsn_Nm`, `Address`, `Cont_Num`) OR categ_Estab = 'Printing Services'
                        LIKE '%".$valSearch."%';";

                $res = mysqli_query($conn, $sql);

                echo categ_showRes($res);
            } 
            else
            {
                $sql = "SELECT *
                        FROM gen_Tb;";

                $res = mysqli_query($conn, $sql);

                echo showRes($res);

            }


                function categ_showRes($r)
                {
                    while ($row = mysqli_fetch_assoc($r))
                    {
                        echo "<tr><td>" . $row['bsn_Nm'] . "</td><td>"
                        . $row['Address'] . "</td><td>"
                        . $row['Cont_Num'] . "</td></tr>";
                    }
            
                    echo "</table>";

                } */