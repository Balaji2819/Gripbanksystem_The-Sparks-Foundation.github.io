<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>HOME</title>
        
        <style>
            body{
    margin: 0; padding: 0; box-sizing: border-box;
   
	background-image: url(b.jpg);
    background-size:cover;
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-position:center;
    opacity:1;
}

header{
    width:100%; height: 100vh;
     

    
}

nav{
    width:100%; height: 10vh; 
    color:white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-transform: uppercase;
    text-align: center;
    background:grey;
    
    
}

nav .logo{
    width: 100%;
    align-items: center;
    font-size:60px;
    text-shadow:1px 1px 2px white;
    color:#51E3D4;
}

main{
    width:100%;
    height:70vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
}
section{

 }


section h3{
    font-size: 50px; font: weight 200px;; letter-spacing: 3px;
    text-shadow: 1px 1px 2px black;
    color:#E71414;
}

section h1{
    margin: 30px 0 20px 0;
    font-size: 65px;
    font-weight: 700;
    text-shadow: 2px 1px 5px #FF5200;
    text-transform: uppercase;

}

section a{
    padding: 15px 30px;
    border-radius: 15px;
    outline: none;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
    letter-spacing: 1.5px;
}

section .btn1{
    background:#FF004D;
    color: #000;
    font-size:25px;
}

.btn1:hover{
     background:#17B794;
     color: white;
 }

section .btn2{
    background: #17B794;
    color: black;
    font-size:25px;
}

.btn2:hover{
    background:#FF004D;
    color: #000;
}

section .btn3{
    background:#FF004D;
    color: #000;
    font-size:25px;
}

.btn3:hover{
    background:#17B794;
    color:white;
}
.change_content {
        animation: animate 2s infinte linear;
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
        </style>
    </head>
    <body>
        <header>
            <nav>
              <div class="logo"><h1>&nbspGRIP BANK </h1></div>
            </nav>
            
             <main>
                 <br>
                <section>
                   <h3>Welcome to GRIP BANK!!</h3>
                   <br>
                   <br>
                   <h1>INTERNET BANKING- EASY AND SECURE<span class="change_content"> </span></h1>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <a href="transaction.php" class="btn1">TRANSACTION</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="account.php" class="btn2">CUSTOMER</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="history.php" class="btn3">HISTORY</a>
                </section>
             </main>
            
            
        </header>
        </body>
        <div class="foot"><footer>
<p>@2021 Copyright:- MADE By <a href="https://www.linkedin.com/in/balaji-yadav-280984209">BALAJI YADAV</a>: The SPARKS Foundation</p>
</footer></div>
<style> .foot{
    background: grey;
    opacity: 1;
    text-align: center;
    }
</style>

</html>