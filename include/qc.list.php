<style>
    th{
        width:22.5%;    
    }

    td{
       border-right:1px solid rgb(208, 208, 208); 
    }
    
     .even
    {
          background-color: rgb(238, 238, 238);
    }
</style>

<?php
include '../include/window.action.inc.php';

echo "<center>";
echo "<div>";

        $rec_limit = 10;
        
        $sql = "SELECT count(`SR_NO,N,1`) FROM `appl_status` where `FINAL_STATUS,N,1` = '8' OR `FINAL_STATUS,N,1` = '11';";
        
        $row1 = mysqli_query($conn, $sql);
        if(!$row1)
        {
            echo  "could not get data".mysqli_error($conn);
        }
        $row = mysqli_fetch_array($rowl, MYSQL_NUM );
        
        $rec_count = $row[0];

                if( isset($_GET{'page'} ) )
                {
                   $page = $_GET{'page'} + 1;
                   $offset = $rec_limit * $page ;
                }
                else
                {
                   $page = 0;
                   $offset = 0;
                }
                $left_rec = $rec_count - ($page * $rec_limit);
                $sql = "SELECT ap.`FORM_ID,C,18`,ui.`UserName`,u.`UserName` from appl_status ap
                inner join `system_user_info` ui on ui.`UserID`=ap.`ASSIGN_TO_L1,C,30`
                inner join `system_user_info` u on u.`UserID`=ap.`ASSIGN_TO_L2,C,30` WHERE ap.`FINAL_STATUS,N,1` = '8' OR `FINAL_STATUS,N,1` = '11'
                LIMIT $offset, $rec_limit ;";
                $get = mysqli_query($conn, $sql);
                
                if(!$get)
                {
                    echo "Not Get Data".mysqli_error($get);
                }
                
                echo "<table class='table2'>";
                echo '<tr class="even">';
                echo '<th>FORMID</th>';
                echo '<th>Level1 Operator</th>';
                echo '<th>Level2 Operator</th>';
                echo '<th>QC Operation</th>';
                echo '</tr>';
                while($row = mysqli_fetch_array($get))
                {
                       
                echo '<tr>';
                echo '<form method="POST">'; 
                echo '<td>'.$row[0].'</td>';
                echo '<td>'.$row[1].'</td>';
                echo '<td>'.$row[2].'</td>';
                echo "<td>
                <input type='hidden' name='qc_hidden' class='buttons' value='$row[0]'>   
                <button type='submit' name='qc_entry' value=''
                style='border:none; background-color: rgb(145, 170, 186);width:74px;padding:6px;border-radius:4px;cursor:pointer;color:white;'>Process</button></td>";     
                echo '</form>';  
                echo '</tr>';
                
             
                }
            echo '</table>';

                if( $page > 0 )
                {
                   $last = $page - 2;
                   echo "<a href=\"$_PHP_SELF?page=$last\"><< Previous</a> |";
                   echo "<a href=\"$_PHP_SELF?page=$page\">Next >></a>";
                }
                else if( $page == 0 )
                {
                   echo "<a href=\"$_PHP_SELF?page=$page\">Next >></a>";
                }
                else if( $left_rec < $rec_limit )
                {
                   $last = $page - 2;
                   echo "<a href=\"$_PHP_SELF?page=$last\"><< Previous</a>";
                }

            echo "</div>";

?>