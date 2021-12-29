<?php
    include('konekcija.php');

    if (isset($_POST['key'])) {

        if($_POST['key'] == 'ucitaj'){
    
            $start = $conn->real_escape_string($_POST['start']);
            $limit = $conn->real_escape_string($_POST['limit']);
            $sort = $conn->real_escape_string($_POST['sort']);
            $sql = $conn->query("SELECT mob_id, naziv, model, godina_proizvodnje, cena FROM telefoni ORDER BY $sort LIMIT $start, $limit");

            if ($sql->num_rows > 0) {
                $response = "";
                while($data = $sql->fetch_array()) {
    
                    $response .= '
                                <tr>
                                    <td id="telefon_'.$data["mob_id"].'">'.$data["mob_id"].'</td>
                                    <td>'.$data["naziv"].'</td>
                                    <td>'.$data["model"].'</td>
                                    <td>'.$data["godina_proizvodnje"].'</td>
                                    <td>'.$data["cena"].'</td>
                                    <td>
                                        <input type="button" onclick="izmeniPogledaj('.$data["mob_id"].', \'izmeni\')" value="Izmeni" class="btn btn-primary">
                                        <input type="button" onclick="izmeniPogledaj('.$data["mob_id"].', \'pogledaj\')" value="Pogledaj" class="btn btn-warning">
                                        <input type="button" onclick="izbrisi('.$data["mob_id"].')" value="Izbriši" class="btn btn-danger">
                                    </td>
                                </tr>
                            ';
                    }
                    exit($response);
                    } else
                        exit('reachedMax');	
        }
    
        mysqli_close($conn);
    }
?>