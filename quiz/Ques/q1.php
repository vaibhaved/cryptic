<?php 
    require '../core.inc.php';
    require '../sql.php';

    $er_no=$_SESSION['er_no'];
    if(!isset($_SESSION['er_no'])&& empty($_SESSION['er_no']))
    {
        header("location: ../index.php?err_messg=You are not logged in.");
    }
    else
    {
        $query4="SELECT * FROM blocked WHERE user='".$er_no."'";
        $Third_query=mysqli_query($con,$query4);
        $num_rows=mysqli_num_rows(mysqli_query($con,$query4));
        if($num_rows==0)
        {
            
            $query1="SELECT User_id,Score FROM users WHERE Er_No='".$er_no."'";
            $first_query=mysqli_query($con,$query1);
            $ro1=mysqli_fetch_assoc($first_query);
            $score=$ro1["Score"];
            $query="SELECT que_ans FROM question WHERE que_id='".$score."'";
            $resultQuery=mysqli_query($con,$query);
            $ro=mysqli_fetch_assoc($resultQuery);
            $que_ans=$ro["que_ans"];
        }
        else
        {
            die('You have been blocked from the play');
        }
    }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Question 1</title>
	<link rel="stylesheet" href="css/q1.css"> 
</head>

<body>
    <div class="switch">
		<input id="vaibhav" type="checkbox" name="toggle" onchange="redirectPage('guess')">
		<label for="toggle"><i></i></label>
		<span></span>
	</div>
    <script>
    	function redirectPage(x) {
    		var ans='<?php echo $que_ans?>';
	    	if(x.checked){
	    		setTimeout(function() {
	    		window.location.href=ans;
	    		},1000)
	    	}
    	}
    </script>
</body>
</html>
