<?php
//echo("11");
if(isset($_FILES['userfile']))
{
	//pre_r($_FILES) ;
	$filename = $_FILES['userfile']['name'] ;
	$extention = explode('.',$filename) ;
	$actualextention = strtolower(end($extention));
	$rename = 'code' ;
	$newname = $rename.'.'.$actualextention ;
	move_uploaded_file($_FILES['userfile']['tmp_name'] , 'uploads/'.$newname) ;
}
function pre_r($array)
{
	echo '<pre>' ;
	print_r($array) ;
	echo '<\pre>' ;
}






if(file_exists ( "uploads/"."code.hex") )
{
	echo("file exist");
    $numbers=30;
    $lines = file("uploads/"."code.hex");
	echo(isset($_GET["Block"]));
	echo($lines);
    if(isset($_GET["Block"]))
    {
		echo("file block");
        //echo "\n";
        $b=(int)$_GET["Block"];
        for($i = $numbers*($b);$i<count($lines)&&$i<$numbers*($b+1);$i++)
        {
        echo $lines[$i];
        }
        if((int)(count($lines)/$numbers)==$b)
        {
            //unlink("/var/www/uploads/a.hex");
        }
    }

    else
    {
	    echo (int)(count($lines)/$numbers)+1;
    }
}





if ( isset ($_POST['status']) )
{
	//echo("status = 2 ");
	$myfile = fopen("status.txt" , "w");
	if ($_POST['status'] == 'on')
	{
		//echo("status = 1 ");
		fwrite($myfile , '1');
		header("Location: index1.html");
	}
	else
	{
		//echo("status = 3 ");
		fwrite($myfile , '0');
		//header("Location: index1.html");
	}
	fclose($myfile);
}
?>
