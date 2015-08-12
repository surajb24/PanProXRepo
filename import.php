<?php
	
	$conn = mysqli_connect('localhost', 'root', 'abacusdb', 'cld_pan');
		$flag = '0';
	
		$date = date("Y_d_m");
		$desired_dir = "d.data/".$date;
					
					if(is_dir("$desired_dir/")==false){
						mkdir("$desired_dir/", 0777);		// Create directory if it does not exist

					}
		$dir = "d.input/";
					  
		$dh  = opendir($dir);

		while (false !== ($filename = readdir($dh))) 
		{
			$files[] = $filename;
		}
					
		foreach($files as $key)
		{

			$file_name = basename($key);
				if($file_name !== '.' && $file_name !== '..' && $file_name !== '.ftpquota'
					&& $file_name !== '.img' && $file_name !== '.pic' && $file_name !== '.sig')
				{
					if(is_dir("$desired_dir/".$file_name)==false)
					{
						rename("d.input/".$file_name, "$desired_dir/".$file_name);
						$file_path = "$desired_dir/".$file_name;
						$year = date("Y");
						$month = date("M");
						$date1 = date('Y/m/d');
						$time = date('h:i:s a');
						$title = str_replace(".pdf","",$file_name);
						$query="INSERT INTO `doc_path` (`APP_PATH,C,100`) VALUES('$file_path'); ";
						if(mysqli_query($conn, $query))
						{
							$flag = '1';
							echo $key.'<br/>';
						}
						else
						{
							echo 'Error: '.mysqli_error($conn);
						}
					}
					else
					{
						echo 'File already exist!';
					}
				}
				
		}
	
	
	
	if($flag == '1')
	{
	
		echo 'Above PDF files have been successfully imported!<br/><br/>' ;
	
	}
	
	if($flag == '0')
	{
		
		echo 'Nothing to import! Input folder is empty!';
	
	}
	
?>