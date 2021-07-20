<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "","gripbank");

if(isset($_POST['submit'])){
    if(!empty($_POST['Sender']) && !empty($_POST['Receiver']) && !empty($_POST['Balance']))
    {
        $Sender=$_POST['Sender'];
        $Receiver=$_POST['Receiver'];
        $Balance=$_POST['Balance'];
        
        $sql = "SELECT * from transfer where Name='$Sender'";
        $query = mysqli_query($conn,$sql);
        $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the Balance is to be transferred.

        $sql = "SELECT * from transfer where Name='$Receiver'";
        $query = mysqli_query($conn,$sql);
        $sql2 = mysqli_fetch_array($query);
      

        // constraint to check input of negative value by user
        if (($Balance)<0)
        {
            echo '<script type="text/javascript">';
            echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
            echo '</script>';
        }

    
        // constraint to check insufficient balance.
        else if($Balance > $sql1['Balance']) 
        {
            
            echo '<script type="text/javascript">';
            echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
            echo '</script>';
        }
        

        // constraint to check zero values
        else if($Balance == 0){

            echo "<script type='text/javascript'>";
            echo "alert('Oops! Zero value cannot be transferred')";
            echo "</script>";
        }


        else {
            
            // deducting Balance from sender's account
            $newbalance =$sql1['Balance'] - $Balance;
            $sql = "UPDATE transfer set Balance=$newbalance where Name='$Sender'";
            mysqli_query($conn,$sql);
        

            // adding Balance to Receiver's account
            $newbalance = $sql2['Balance'] + $Balance;
            $sql = "UPDATE transfer set Balance=$newbalance where Name='$Receiver'";
            mysqli_query($conn,$sql);
            
            
            $query="INSERT INTO `history`(`Sender`, `Receiver`, `Balance`) VALUES ('$Sender','$Receiver','$Balance')";
            $query = mysqli_query($conn, $query);

            if($query){
                echo "<script> alert('Transaction Successful');
                                window.location='history.php';
                    </script>";
                
            }
            $newbalance= 0;
            $Balance =0;
            }
        
    }

    else{
        echo "All fields required";
    }    
}
?>