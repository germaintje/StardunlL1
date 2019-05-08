<?php
class utility {
    
public function createTable($result){
    $tableheader = false;
    $html = "";
    $html .= "<table>";

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        if($tableheader == false) {
            $html .= "<tr>";
            foreach($row as $key=>$value) {
                $html .= "<th> $key</th>";
            }
            $html .= "<th colspan='3'>Actions</th></tr>";
            $tableheader = true;
        }
        $html .= "<tr>";
        foreach ($row as $key => $value) {
            if($key == "product_price"){
                $html .= "<td>" . str_replace('.', ',', $value) . "</td>";
            } else {
                $html .= "<td>$value</td>";
            }

        }
        $html .= "
        <td>" . "<a class='actions' href='#'> Read</a>
        <td>" . "<a class='actions' href='#'> Update</a>
        <td>" . "<a class='actions' href='#'> Delete</a></td></tr>";
    }
    $html .= "</table>";
    return $html;
 }
}





