<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>GRIP BANK</title>
        
        <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:Century Gothic;
    
}
main{
    min-height: 100vh;
    background: #F4A9A8;
    background-size:cover;
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-position:center;

    display: flex;
    align-items: center;
    justify-content: center;
    
}

.glass{
    background: #D2F5E3;
    min-height:85vh;
    width:70%;
    background: linear-gradient(
        to right bottom,
        rgba(255,255,255,0.7),
        rgba(255,255,255,0.3)
    );
    border-radius: 2rem;
    z-index: 2;
    backdrop-filter: blur(4rem);
    
}


.title{
    position: fixed;
    margin: top 65px;
    padding:0px;
    width:100%;
    height: 70px;
    color: #F0134D; /*#fff95b;*/
    text-shadow: 1px 1px 2px black, 0 0 75px #FA163F, 0 0 5px #FA697C;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 70px;
    text-align: center;
    animation: animate 2s backwards;
}
@keyframes animate{
    0%{
    opacity: 0;
     }
50%{
    opacity: 0.7;
}
100%{
    opacity: 0;
}
}
form { 
    position: fixed;
    width:60%;
    padding:0%;
    top: 53%;
    left: 50%;
    font-size: 35px;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    color:#000000;
    
}
button{
    width:30%;
    background:#FF577F;
    border: 10px;
    border-radius:50px;
    color: black;
    text-align: center;
    font-size: 40px; 
    padding: 10px 24px;
    box-shadow: 0 12px 16px 0 #F7DAD9, 0 17px 50px 0 #FCA3CC;
    align:center;
}
select{
    width:100%;
    font-size:20px;
}
.abc{
    background:#F9C0C0;
    opacity: 0.9;
}
.fheadleft
        {
            justify-content:space-around;
            font-family: 'Capriola', sans-serif;
            padding-left: 70px;
            padding-top: 12px;
            align:left;
        }
        .fheadright
        {
            justify-content:space-around;
            font-family: 'Capriola', sans-serif;
            padding-left: 800px;
            font-size: 25px;
            text-decoration: none;
            align:right;
        }
        </style>
    </head>
    <body>
        <header>
        <div class="abc">
        <div class="fheadleft">
        <font size="20px"><strong>GRIP</strong></font><font size="5px">BANK</font>
        <span class="fheadright">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.php" style="text-decoration: none; color:black">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="account.php" style="text-decoration: none; color:black;">Accounts</a></span>
    </div></div>
            <main>
                <section class='glass'>
                    <div class="title">
                        <h2>Transaction</h2>
                        </div><br><br>
                        <form action="insert.php" method="post">
                            <br>
                            <br>
                        <label >Sender:</label><br>
                        <select name="Sender"><br>
                        <option disabled selected></option>
                        <?php
                           include "db.php";  // Using database connection file here
                              $records = mysqli_query($conn, "SELECT * FROM transfer");  // Use select query here 

                                    while($data = mysqli_fetch_array($records))
                                {
                                echo "<option value='". $data['Name'] ."'>" .$data['Name'] ."</option>";  // displaying data in option menu
                                }	 
                        ?>
                        </select>
                        <br>
                        <br>
                        <label >Receiver:</label><br>
                        <select name="Receiver" >
                        <option disabled selected></option>
                        <?php
                           include "db.php";  // Using database connection file here
                              $records = mysqli_query($conn, "SELECT * FROM transfer");  // Use select query here 

                                    while($data = mysqli_fetch_array($records))
                                {
                                echo "<option value='". $data['Name'] ."'>" .$data['Name'] ."</option>";  // displaying data in option menu
                                }	 
                         ?>
                        <br>
                        </select><br>
                        <br>
                        <label for="Balance">Amount:</label><br>
                        <input type="integer" id="Balance" name="Balance" width="100%"><br>
                        <br>
                        <button  type="submit" name="submit" >Send</button><br>
                        </form>
                </section>
            </main>
        </header>
    </body>
</html>