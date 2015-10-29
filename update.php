<?php 
    $output = shell_exec('git add *');
    echo "Add:<pre>$output</pre>";
     //$output = shell_exec('git commit -m "'.$_POST["txt"].'" ');
    $output = shell_exec('git commit -m "XXXX" ');
    echo "Commit:<pre>$output</pre>";
if($_GET['action']=='add'){

}
if($_GET['action']=='commit'){


}
 ?>