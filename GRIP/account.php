<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
     body{
         background:linear-gradient(to right top,#AEE1E1,#AEE1E1);
         opacity: 1;
     }
    .container{
        background:#46B5D1;
        top:20%;
        bottom:40px;
        opacity: 100%;
        font-size:20px;

     }
      button{
        background-color: #14FFEC;
        transition: 1.5s;
        width:90%;
    }
      button:hover{
        background-color: white;/*#616C6F*/;
        color: black;
      }
      .abc{
        background:red;
    }
      .fheadleft
        {
            justify-content:space-around;
            font-family: 'Capriola', sans-serif;
            padding-left: 70px;
            padding-top: 12px;
            
        }
        .fheadright
        {
            justify-content:space-around;
            font-family: 'Capriola', sans-serif;
            padding-left: 800px;
            font-size: 25px;
            text-decoration: none;
        }
    </style>
</head>

<body>
<?php
    include 'db.php';
    $sql = "SELECT * FROM transfer";
    $result = mysqli_query($conn,$sql);
?>
<div class:"abc">
<div class="fheadleft">
        <font size="20px"><strong>GRIP</strong></font><font size="5px">BANK</font>
        <span class="fheadright">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.php" style="text-decoration: none; color:black">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="history.php" style="text-decoration: none; color:black;">History</a></span>
    </div></div>
<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">ID</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">Email ID</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['ID'] ?></td>
                        <td class="py-2"><?php echo $rows['Name']?></td>
                        <td class="py-2"><?php echo $rows['Email ID']?></td>
                        <td class="py-2"><?php echo $rows['Balance']?></td>
                        <td><a href="transcat2.php?id= <?php echo $rows['ID'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>

</html>