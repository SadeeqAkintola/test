<!DOCTYPE html>
<html>
    <body>
        <?php
        $myScore = 90;

            switch(true) {
               case in_array($myScore, range(70,100)): 
                  echo "A! - Outstanding Score!!";
               break;

               case in_array($myScore, range(60,69)):
                  echo "B! - High Score";
               break;

               case in_array($myScore, range(50,59)): 
                  echo "C! - Average Score!!";
               break;

               case in_array($myScore, range(45,49)):
                  echo "D! - This is NOT Good!";
               break;

               case in_array($myScore, range(40,44)): 
                  echo "E! - Only God Save You!!";
               break;
                
               case in_array($myScore, range(0,39)): 
                  echo "F! - Terrible Score!! Please withdraw!!!";
               break;

               default:
                echo ("Please enter a valid score between 1 - 100");

            }


        ?>
     
    </body>
</html>