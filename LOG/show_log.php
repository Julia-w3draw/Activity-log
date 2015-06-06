<?php

echo'
<html>
    <head>        
    </head>
    <body id="main">
        <div id="content" >
            <table align="center" border=0 style=" background-color:#f8f8f8;  width:700px;  ">
                <tbody>
                    <tr>
                        <td align="center" style="background-color:#d8bfd8;"><strong>Date</strong></td>
                        <td align="center" style="background-color:#bfbfbf;"><strong>Client IP</strong></td>
                        <td align="center" style="background-color:#c4c3d0;"><strong>Platform width</strong></td>
                        <td align="center" style="background-color:#f5d5d5;"><strong>Platform height</strong></td>
                        <td align="center" style="background-color:#C1BCFF;"><strong>Screen width</strong></td>
                        <td align="center" style="background-color:#F2FFFD;"><strong>Screen height</strong></td>
                        <td align="center" style="background-color:#b9a281;"><strong>Hostname</strong></td>
                        <td align="center" style="background-color:#FFF5CC;"><strong>Platform</strong></td>
                        <!-- <td align="center" style="background-color:#FFB2B2;"><strong>Browser CodeName</strong></td> -->
                        <td align="center" style="background-color:#FFFFEB;"><strong>Browser name</strong></td>
                        <td align="center" style="background-color:#CCEBCC;"><strong>Browser App Version</strong></td>
                        <!-- <td align="center" style="background-color:#F0FFFF;"><strong>Browser Version</strong></td> -->
                        <td align="center" style="background-color:#989898;"><strong>Browser language</strong></td>
                    </tr>';
$cile = file_get_contents('log.txt'); 
$lines=explode("\n",$cile);
$lines_length=count($lines);
$colors=array("#d8bfd8","#bfbfbf","#c4c3d0","#f5d5d5","#C1BCFF","#F2FFFD","#b9a281","#FFF5CC","#FFFFEB","#CCEBCC","#989898");

for($a=0;$a<$lines_length-1;$a++){
    echo  "<tr>";
    $cells=explode("|",$lines[$a]);
    $cells_length=count($cells);
    for($c=0;$c<$cells_length;$c++){
        echo '<td align="center" style="background-color:';
        echo $colors[$c];            
        echo '">'.$cells[$c]."</td>";
    }
    echo "</tr>";
}                    
                    
                 echo'</tbody>
            </table>
    </div>
    </body>
</html>';

?>
