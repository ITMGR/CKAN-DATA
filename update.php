<?php 

$output = shell_exec('git config remote.origin.url https://ITMGR:Trmoewm081722743@github.com/ITMGR/CKAN-DATA.git');
   
    echo "Llgin:<pre>$output</pre>";
$output = shell_exec('git config --global user.email stefan.cerny@gmail.com');
    $output = shell_exec('git add *');
    flush();
    echo "Add:<pre>$output</pre>";
     //$output = shell_exec('git commit -m "'.$_POST["txt"].'" ');
    $output = shell_exec('git commit -m "Backup - '.date("Y-m-d H:i:s").'" ');
    echo "Commit:<pre>$output</pre>";
flush();
$output = shell_exec('git push ');
    echo "push:<pre>$output</pre>";
    flush();
    /*
if($_GET['action']=='add'){

}
if($_GET['action']=='commit'){


}
*/
 ?>