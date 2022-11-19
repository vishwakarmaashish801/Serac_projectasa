<?php 
session_start();?>


<html>
<head>
	<title>Serac Education</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   	 <!-- external main  -->
	    <link rel="stylesheet" type="text/css" href="styles/question.css">
		
</head>
<body>

	<header>
		<div class="container mt-4">
			<h3 class="text-center fw-bold">Serac Education </h3>
		</div>
	</header>

	<main>
	<div class="container mt-5 ">
            <table border=1|1>
                <thead>
                    <tr class="theader">
                        <td class="sr_no">SR.No.</td>
                        <td class="question">Domain</td>
						<!-- <td class="question">Total Score</td> -->
                        <td class="option" colspan="2">Your Score</td>

                    </tr>
                </thead>
                  <tr>
                  <tbody id="result">
				  <td class="text-center">1</td>
				  <td class="sr_no">Adjustment</td>
				  <td class="sr_no">13</td>
</tr>
                       
					</tbody>
                    


                       

            </table>


            <!-- <input type="" name="number" value="<?php echo $number; ?>">  -->
            <button type="submit" class="btn btn-primary mt-4 w-25" onClick="BtnClicked();">GET DATA </button>
            

        </div>
		<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
		<p>Your <strong>Score</strong> is <?php echo $_SESSION['key']; ?>  </p>
	</main>


	<footer>
			<div class="container">
				Copyright &copy; Serac Education
			</div>


	</footer>


	<script>  
		// $(document).ready(function(){
			
         function BtnClicked(){

		 $.ajax({
					url:'action/backend.php',
                    type:'GET', // define the type of HTTP verb we want to use (POST for our form)
                  // the url where we want to POST
                   // our data object
				dataType:"html",
                 // what type of data do we expect back from the server
                  success:function (response) {
					// $('#result').html(response);
					console.log(response);
					
					},
				error :function() {
					console.log("error");
					}

				  
                });
			
        		
			}

			BtnClicked();	


  
			$("button").click(function(){
  			$.get("action/backend.php", function(data,status){
    		alert("Data: " + data + "\nStatus: " + status);
  });
});
	
	</script>





</body>
</html>