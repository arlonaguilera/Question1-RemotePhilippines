<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<form method="post">
		<div id="main-container">
			<div id="content">
				<table style="margin:auto;margin-top:20px;">
					<tr>
						<td>
							<div style="margin-left:60px;font-weight:bold;">
								<label>
									QUESTION-1
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div style="">
								<label>
									Input String:
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="str" style="width:200px;height:25px;text-align:center;" placeholder="a-z" required></input>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" value="SUBMIT" style="width:200px;height:25px;cursor:pointer;font-size:12px;"></input>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</form>
	</body>	
</html>

<?php 
if(isset($_POST["submit"]))
{
	function findRepeatFirstN2($s)  
	{  
    $p = -1;  
    for ($i = 0; $i < strlen($s); $i++) 
    {  
        for ($j = ($i + 1);  
             $j < strlen($s); $j++)  
        {  
            if ($s[$i] == $s[$j])  
            {  
                $p = $i;  
                break;  
            }  
        }  
        if ($p != -1)  
            break;  
    }  
  
    return $p;  
	}  
  
	$str = $_POST['str'];  
	$pos = findRepeatFirstN2($str);  
	  
	if ($pos == -1)  
		echo "<script>alert('String Value Accepted.');window.location=window.location</script>";
	else
		echo "<script>alert('String Value Not-Accepted!');window.location=window.location</script>";
  
}  
?> 