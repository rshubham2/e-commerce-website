<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*{
margin: 0;
padding: 0;
  font-family: 'Poppins', sans-serif;
}
body
{
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
flex-direction: column;
background: #23242a;
}
.box
{
position: relative;
width: 525px;
height: 705px;
background: #1c1c1c;
border-radius: 8px;
overflow: hidden;
}
.box::before
{
content: '';
z-index: 1;
position: absolute;
top: -50%;
left: -50%;
width: 530px;
height: 705px;
transform-origin: bottom right;
background: linear-gradient(0deg,transparent,#dedb10,#dedb10);
animation: animate 6s linear infinite;
}
.box::after
{
content: '';
z-index: 1;
position: absolute;
top: -50%;
left: -50%;
width: 530px;
height: 705px;
transform-origin: bottom right;
background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
animation: animate 6s linear infinite;
animation-delay: -3s;
}
@keyframes animate
{
0%
{
transform: rotate(0deg);
}
100%
{
transform: rotate(360deg);
}
}
.form
{
position: absolute;
inset: 2px;
background: #28292d;
z-index: 2;
display: flex;
flex-direction: column;
width: 520px;

padding: 30px;
	
	border-radius: 8px;
}
h1
{
color: #45f3ff;
font-weight: 525;
text-align: center;
letter-spacing: 0.1em;
}
p
{
    color: #45f3ff;
    font-weight: 100;

    letter-spacing: 0.1em;  
}
.inputBox
{
position: relative;
width: 300px;
margin-top: 35px;
}
.inputBox input
{
position: relative;
width: 100%;
padding: 20px 10px 10px;
background: transparent;
outline: none;
box-shadow: none;
border: none;
color: #23242a;
font-size: 1em;
letter-spacing: 0.05em;
transition: 0.5s;
z-index: 10;
}
.inputBox span
{
position: absolute;
left: 0;
padding: 20px 0px 10px;
pointer-events: none;
font-size: 1em;
color: #8f8f8f;
letter-spacing: 0.05em;
transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span
{
color: #45f3ff;
transform: translateX(0px) translateY(-34px);
font-size: 0.75em;
}
.inputBox i
{
position: absolute;
left: 0;
bottom: 0;
width: 100%;
height: 2px;
background: #45f3ff;
border-radius: 4px;
overflow: hidden;
transition: 0.5s;
pointer-events: none;
z-index: 9;
}
.inputBox input:valid ~ i,
.inputBox input:focus ~ i
{
height: 44px;
}
.links
{
display: flex;
justify-content: space-between;
color: grey;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
.links a
{
margin: 10px 0;
font-size: 0.75em;
color: #8f8f8f;
text-decoration: beige;
}
.links a:hover,
.links a:nth-child(2)
{
color: #45f3ff;
}
input[type="submit"]
{
border: none;
outline: none;
padding: 11px 25px;
background: #45f3ff;
cursor: pointer;
border-radius: 4px;
font-weight: 600;
width: 100px;
margin-top: 10px;
}
input[type="submit"]:active
{
opacity: 0.8;
}
    </style>
     
     <div class="box">
            <div class="form">
            <form action="signup-check.php" method="post">
            <div class="position-absolute translate-middle">
            <div class="d-flex">
     	<h1>SIGN UP</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          
          <?php if (isset($_GET['name'])) { ?>
            
                <input type="text" placeholder="Name" name="name" value="<?php echo $_GET['name']; ?>"><br>
               
          <?php }else{ ?>
            
                <input type="text" placeholder="Name" name="name"><br>
               
          <?php }?>
         

          
          <?php if (isset($_GET['uname'])) { ?>
           
                <input type="text" placeholder="User Name" name="uname" value="<?php echo $_GET['uname']; ?>"><br>
                
            </div>
          <?php }else{ ?>
           
                <input type="text" placeholder="User Name" name="uname"><br>
                
          <?php }?>


          
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>
                 
                 
                  <input type="password" 
                 name="re_password" 
                 placeholder="RePassword"><br>
                
                 <div class="links"><p>By creating an account you agree to our  <a href="#">Terms & Privacy</a></p></div>
     	
                 <div class="container signin">
             <div class="links"><p>Already have an account? <a href="index.php" class="ca">Login</a>.</p></div>
            </div>
         
             <input type="submit" value="Register">
            </div></div>
            </form>
          </div></div>
     
</body>
</html>