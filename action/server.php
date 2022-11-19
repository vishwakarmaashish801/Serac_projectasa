<?php  include 'config.php';

session_start();

$record_per_page = 15;  

$page = ''; 

if(isset($_POST["page"]))  {  
      $page = $_POST["page"];  
} else  {  
      $page = 1;  
}  

$start_from = ($page - 1)*$record_per_page;  
echo "current page ".$start_from;

?>

        <div class="container mt-5">
            <table border=1|1>
                <thead>
                    <tr class="theader">
                        <td class="sr_no">Q.No.</td>
                        <td class="question">Question</td>
                        <td class="option" colspan="2">Option</td>
                    </tr>
                </thead>

                <form id="quesForm" action="action/backend.php" method="POST">
                    <div class="mb-3">

                        <?php 
                                
					     // question table inside databaseb 
                        //  $query = "SELECT * FROM questions";
                    
                            $query = "select * from questions ORDER BY sr_no ASC LIMIT $start_from, $record_per_page";
                            $queryquestion = mysqli_query($link,$query);
							// print_r($queryquestion);
                        
                           while($row = mysqli_fetch_assoc($queryquestion)){
                            
                        ?>

                        <tr>
                            <td> <?php echo $row['sr_no']; ?></td>
                            <td> <?php echo $row['question']; ?></td>

                            <!-- Optin From Answer list -->

                            <td class="text-center">
                                <input class="question-answer--option" type="radio"
                                    name="choice-<?php echo $row['sr_no'] ?>"
                                    value="<?php echo $row['option1'] ?>">&nbspYES
                                <input id="op3" class="question-answer--option" type="radio"
                                    name="choice-<?php echo $row['sr_no'] ?>"
                                    value="<?php echo $row['option2'] ?>">&nbspNO
                                <input type="hidden" name="domain-<?php echo $row['sr_no'] ?>" value="<?php echo $row['domain'] ?>">
                            </td>
                            
                        </tr>
                        <?php
                               
                          }
                          ?>

            </table>
             <?php 
                    $page_query = "SELECT * FROM questions";  
                    $page_result = mysqli_query($link, $page_query);  
                    $total_records = mysqli_num_rows($page_result);  
                    

                    $total_pages = ceil($total_records/$record_per_page); 
                    $total_records = mysqli_num_rows($page_result);  

                    $total_pages = ceil($total_records/$record_per_page);  
                    echo "total Pages".$total_pages;
                    echo "<br>";
                    echo "Current Pages".$start_from;
                    echo "<br>";


                for($i=1; $i<=$total_pages; $i++)  


                {  
                         if($i==$page){
                        $activeClass= "active";
                       }else{
                         $activeClass= " ";
                       }
                    ?>
                    
                     <!-- <button type="submit" class="btn btn-primary" name = >  <?php echo $i;?></button> -->
                     <!-- <span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;'><?php echo $i;?> </span> -->
                     
                     <button type="button" class="btn btn-outline-primary btn-sm page" id='<?php echo $i ?>'  >Page <?php echo $i;?> </button>
            <?php 
            }  
            ?>
         
            <?php echo "<br>"; ?>
            <!-- <button type="submit" class="btn btn-primary submitter">Submit</button> -->
    
         
