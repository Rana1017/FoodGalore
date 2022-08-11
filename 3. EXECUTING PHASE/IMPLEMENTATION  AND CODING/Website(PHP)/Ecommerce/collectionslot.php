<!DOCTYPE html>
<html lang="en">






<?php
date_default_timezone_set('Asia/Kathmandu');
$date = date("Y-m-d");
//$date = date("2021-07-01");
//echo $date;
$day = date("D",strtotime($date));

switch($day) {

case "Sun":
$a= strtotime($date."+ 3 days");
$b= strtotime($date."+ 4 days");
$c= strtotime($date."+ 5 days");
break;

case "Mon":
$a= strtotime($date."+ 2 days");
$b= strtotime($date."+ 3 days");
$c= strtotime($date."+ 4 days");
break;

case "Tue":
$a= strtotime($date."+ 1 days");
$b= strtotime($date."+ 2 days");
$c= strtotime($date."+ 3 days");
break;

case "Wed":
$a= strtotime($date."+ 1 days");
$b= strtotime($date."+ 2 days");
$c= strtotime($date."+ 7 days");
break;

case "Thu":
$a= strtotime($date."+ 1 days");
$b= strtotime($date."+ 6 days");
$c= strtotime($date."+ 7 days");
break;

case "Fri":
$a= strtotime($date."+ 5 days");
$b= strtotime($date."+ 6 days");
$c= strtotime($date."+ 7 days");
break;

case "Sat":
$a= strtotime($date."+ 4 days");
$b= strtotime($date."+ 5 days");
$c= strtotime($date."+ 6 days");
break;

}



$x1 =date("l-m-d-Y", $a);
$y2 = date("l-m-d-Y", $b);
$z3 =date("l-m-d-Y", $c);





?>




<form method="POST" action="collectionslothandler.php">
    <div class="card text-center">
        <div class="card-header">
            Select a collection slot as per convenience
        </div>
        <div class="card-body">

            <p class="card-text">

                <select class="form-control" aria-label="Default select example" name="day">
                    <option selected>Collection Day</option>
                    <option value=<?php echo $x1?>><?php echo $x1?></option>
                    <option value=<?php echo $y2?>><?php echo $y2?></option>
                    <option value=<?php echo $z3?>><?php echo $z3?></option>
                </select>
                <select class="form-control" aria-label="Default select example" name="slot">
                    <option selected>Collection Slot</option>
                    <option value="10-13"><?php echo "10-13"?></option>
                    <option value="13-16"><?php echo "13-16"?></option>
                    <option value="16-19"><?php echo "16-19"?></option>
                </select>

                <input type="submit" value="SELECT" class="btn btn-primary m-tb-5">
            </p>

        </div>


</form>


</td>
</tr>
</table>