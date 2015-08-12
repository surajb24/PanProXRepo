

<?php
include '../conn.inc.php';
function App_Type()
{
    global $conn;
    
    $sql = "select * from `application_type`;";
    if($result = mysqli_query($conn,$sql))
    {
        while($row=mysqli_fetch_array($result))
        {
                echo "<option value='".$row[1]."'>";
                echo $row[1];
                echo "</option>";
        }
    }else{
		echo '<script>';
			echo 'alert("Error");';
		echo '</script>';
		
            }
}

function App_Title()
{
    global $conn;
    $sql = "select * from `title`;";
    if($result = mysqli_query($conn,$sql))
    {
        while($row=mysqli_fetch_array($result))
        {
                echo "<option value='".$row[1]."'>";
                echo $row[1];
                echo "</option>";
        }
    }else{
		echo '<script>';
			echo 'alert("Error");';
		echo '</script>';
		
            }
}

function Gender()
{
    global $conn;    
    $sql = "select * from `sex`;";
    if($result = mysqli_query($conn,$sql))
    {
        while($row=mysqli_fetch_array($result))
        {
                echo "<option value='".$row[1]."'>";
                echo $row[1];
                echo "</option>";
        }
    }else{
		echo '<script>';
			echo 'alert("Error");';
		echo '</script>';
		
            }
}

function Address_Communication()
{
    global $conn;
    $sql = "select * from `addr_flag`;";
    if($result = mysqli_query($conn,$sql))
    {
        while($row=mysqli_fetch_array($result))
        {
                echo "<option value='".$row[1]."'>";
                echo $row[1];
                echo "</option>";
        }
    }else{
		echo '<script>';
			echo 'alert("Error");';
		echo '</script>';
		
            }
}


function Status_Applicant()
{
    global $conn;
    $sql = "select * from `status`;";
    if($result = mysqli_query($conn,$sql))
    {
        while($row=mysqli_fetch_array($result))
        {
                echo "<option value='".$row[1]."'>";
                echo $row[1];
                echo "</option>";
        }
    }else{
		echo '<script>';
			echo 'alert("Error");';
		echo '</script>';
		
            }
}

function Country()
{
    global $conn;
    
    $sql="select * from `country`;";
    if($result=mysqli_query($conn, $sql))
    {
        while($row= mysqli_fetch_array($result))
        {
            echo "<option value='".$row[1]."'>";
            echo $row[1];
            echo "</option>";
        }
    }
}

function Proof_Identity()
{
    global $conn;
    
    $sql="select * from `ident_doc`;";
    if($result=mysqli_query($conn, $sql))
    {
        while($row= mysqli_fetch_array($result))
        {
            echo "<option value='".$row[1]."'>";
            echo $row[1];
            echo "</option>";
        }
    }
}

function Proof_Address()
{
    global $conn;
    
    $sql="select * from `res_doc`;";
    if($result=mysqli_query($conn, $sql))
    {
        while($row= mysqli_fetch_array($result))
        {
            echo "<option value='".$row[1]."'>";
            echo $row[1];
            echo "</option>";
        }
    }
}

function DOB()
{
    global $conn;
    
    $sql="select * from `dob_doc`;";
    if($result=mysqli_query($conn, $sql))
    {
        while($row= mysqli_fetch_array($result))
        {
            echo "<option value='".$row[1]."'>";
            echo $row[1];
            echo "</option>";
        }
    }
}

function State()
{
    global $conn;
    
    $sql="select * from `state`;";
    if($result=mysqli_query($conn, $sql))
    {
        while($row= mysqli_fetch_array($result))
        {
            echo "<option value='".$row[1]."'>";
            echo $row[1];
            echo "</option>";
        }
    }
}

function Capacity()
{
        global $conn;
    
    $sql="select * from `capacity`;";
    if($result=mysqli_query($conn, $sql))
    {
        while($row= mysqli_fetch_array($result))
        {
            echo "<option value='".$row[1]."'>";
            echo $row[1];
            echo "</option>";
        }
    }
}

function Marital_Status()
{
        global $conn;
    
    $sql="select * from `marital_status`;";
    if($result=mysqli_query($conn, $sql))
    {
        while($row= mysqli_fetch_array($result))
        {
            echo "<option value='".$row[1]."'>";
            echo $row[1];
            echo "</option>";
        }
    }
}

function Citizenship_Status()
{
     global $conn;
    
    $sql="select * from `citizenship status`;";
    if($result=mysqli_query($conn, $sql))
    {
        while($row= mysqli_fetch_array($result))
        {
            echo "<option value='".$row[1]."'>";
            echo $row[1];
            echo "</option>";
        }
    }
}

function Occupation()
{
     global $conn;
    
    $sql="select * from `occupation`;";
    if($result=mysqli_query($conn, $sql))
    {
        while($row= mysqli_fetch_array($result))
        {
            echo "<option value='".$row[1]."'>";
            echo $row[1];
            echo "</option>";
        }
    }
}
 




?>
