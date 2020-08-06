<?php include 'properties.php';?>
<?php
         
        
        
         echo "Hello world!";
         echo $_POST['email'];
            
         $to = $_POST['email'];
         $subject = "Request Confirmation";
 
       
         $message = '<html><body>';
         $message .= '<h1 style="color:#0065b3;">Fitness Hub Pvt(LTD) has accepted your request!</h1>';
         $message .= '<p style="color:   #000000;font-size:18px;">Happy to announce you as a FitnessHub Member!Here are the Credentials to your account:</p>';
         $message .= '<table>
         <tr>
             <th>Username</th>
             <th>Password</th>
         </tr>
         <tr>
             <td>"' .$_POST['email'] . '"</td>
              <td>dd123*</td>
          </tr>       
     </table><br/>';
         $message .= '<button style="color:#ffff;background:  #008CBA;border: none; padding: 15px 32px; font-size: 14px;display: inline-block;border-radius: 4px;">VIew Invitation</button>';
         $message .= '</body></html>';
 
     // Always set content-type when sending HTML email
     $headers = "MIME-Version: 1.0" . "\r\n";
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
     // More headers
     $headers .= 'From: <webmaster@example.com>' . "\r\n";
     $headers .= 'Cc: myboss@example.com' . "\r\n";
 
     mail($to,$subject,$message,$headers);

     $sql = "INSERT INTO Member  (id,fname, plan, email, mobile,username )
         SELECT id,fname, plan, email, mobile,email
        FROM Requests WHERE email= '".$_POST["email"]."' ";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
           
              echo "success";
              
             
          } else {
            echo "Error:" . $sql . "<br>" . $conn->error; 
          }
          $sql = "DELETE FROM Requests WHERE email= '".$_POST["email"]."' ";

        if ($conn->query($sql) === TRUE) {
             echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();
        header("location: index.php");    
    
       
          
         ?>
 