<link rel="stylesheet" type="text/css" href="../../CSS/search-res.css">


<div class="hekhek">
    <table id="tab1">
        <tr id="rowgrp1">
            <th>Music ID</th>
            <th>Song Name</th>
            <th>Artist</th>
            <th>Album</th>
            <th>Release Date</th>
            <th>Duration</th>
            <th>Genre</th>
            <th>Language</th>
        </tr>

<?php
        include 'sqldb_ASADO.php';

        if(isset($_POST["search"]))
        {
            $valSearch = $_POST["textInp"];

            $sql = "SELECT * 
                    FROM DISCOGRAPHY
                    WHERE CONCAT(`MusicID`, `SongName`, `Artist`, `Album`, `ReleaseDate`, `Duration`, `Genre`, `Language`)
                    LIKE '%".$valSearch."%';";

            $res = mysqli_query($conn, $sql);
            //$resChe = mysqli_num_rows($res);

            echo showRes($res);
        }
        else
        {
            $sql = "SELECT * 
                    FROM DISCOGRAPHY;";

            $res = mysqli_query($conn, $sql);

            echo showRes($res);

        }

       /* if ($resChe > 0)
        {*/
            function showRes($r)
            {
                while ($row = mysqli_fetch_assoc($r))
                {
                    echo "<tr><td>" . $row['MusicID'] . "</td><td>"
                    . $row['SongName'] . "</td><td>"
                    . $row['Artist'] . "</td><td>"
                    . $row['Album'] . "</td><td>"
                    . $row['ReleaseDate'] . "</td><td>"
                    . $row['Duration'] . "</td><td>"
                    . $row['Genre'] . "</td><td>"
                    . $row['Language'] . "</td></tr>";
                }
        
                echo "</table>";

            }
        //}
        /*
        else
        {
            echo "0 result(s).";
        }*/

?>


    </table>
</div>