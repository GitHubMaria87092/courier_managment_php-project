<?php
include ('config.php');

$sql = "SELECT * FROM category";
$res = mysqli_query($con, $sql);
$c = mysqli_num_rows($res);

$output = "<div class='table-responsive'><table class='table table-hover'><tr>
            <th width='40%'>Name</th>
          </tr>";

if($c > 0) {
    while($row = mysqli_fetch_array($res)) {
        $output .= "<tr>
                    <td contenteditable class='name' data-id1='".$row['name']."'>".$row['name']."</td>
                    </tr>";
    }
} else {
    $output .= "<tr><td colspan='4'>No data found</td></tr>";
}

$output .= "</table></div>";
echo $output;
?>
