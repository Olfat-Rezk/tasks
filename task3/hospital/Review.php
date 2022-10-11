<?php
$title = "Review";
session_start();
// print_r($_SESSION);
//   $users= $_POST;
		if(isset($_POST)) {
			foreach ($_SESSION as $key=>$value) {
				
				switch($value){
					case 0:
						$quest = "bad";
						break;
					case 3:
						$quest = "Good";
						break;
					case 5:
						$quest ="very Good";
						break;
					case 10:
						$quest = "Exellent";
						break;		
					
				}
			 }
			
 		}
$result = $_SESSION['quest1']+$_SESSION['quest2']+$_SESSION['quest3']+$_SESSION['quest4']+$_SESSION['quest5'];
if ($result<=25) {
	# code...
	$message= "We will call you later on this phone ". $_SESSION['number'];
}else{
	$message='Thank you';

}

?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class='container'>
		
		<div class="col-12 text-center mt-5">
            <h1> Review</h1>
        </div>
        <div class="col-12 text-center mt-5">
           <form method="post">
           	<div class="form-group">
           		<table class="col-8 text-left mt-5">
           			<thead >
           				<tr>
           				<th>Questions</th>
           				<th>Review</th>
           				
           				</tr>
           			</thead>
           			<tbody>
						
           				<tr>
           					<td>Are you satisfied with the level of cleanliness?</td>
           					<td><input class="form-check-input" type="text" value="<?=$quest?>"  ></td>
           					
           				</tr>

                  <tr>
                    <td>Are you satisfied with  with the service price?</td>
                    <td><input class="form-check-input" type="text" value="<?=$quest?>"  ></td>
                  
                  </tr>

                  <tr>
                    <td>Are you satisfied with nursing service?</td>
                    <td><input class="form-check-input" type="text" value="<?=$quest?>"  ></td>
                    
                  </tr>
                  <tr>
                    <td>Are you satisfied with level of the doctors?</td>
                    <td><input class="form-check-input" type="text" value="<?=$quest?>"  ></td>
                   
                  </tr>

                  <tr>
                    <td>Are you satisfied with calmness of hospital?</td>
                    <td><input class="form-check-input" type="text" value="<?=$quest?>"  ></td>
                  
                  </tr>
				
           			</tbody>
           		</table>
           	</div>
                    
               
                  
                    
               
                    <input class="btn btn-primary" type="submit" name="result"value="Result">

                 <?php if (isset($_POST['result'])) {
                 	# code...
                 	header('location:Result.php');

                 }?>
                 
                </div>

           	




           </form>
        </div>
        
	</div>

	</div>

<footer class="w-100 bg-dark text-light text-center py-2" style="position: fixed;bottom:0;">
        All Rights Reserved 
</footer>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>