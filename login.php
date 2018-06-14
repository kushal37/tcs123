<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style>
input[type=text], input[type=password] {
    width: 100%;
    padding: 5px 5px;
    
    border: 1px solid #ccc;
    }
input[type=password] {
margin-bottom: 10px;
}


button {
    background-color: rgb(78,219,78);
    opacity: 0.8;
    color: black;
    font-weight: 650;
    padding: 14px 20px;
    
    border: none;
    width: 100%;
}
#hello{
  margin-bottom: -5%
}
.foot{
  position: relative;
  bottom: -0px;
}
button:hover {
    background-color: rgb(23,219,78);
     opacity: 0.9;
}

.imgcontainer {
    text-align: center;
    margin: 15px 0 1px 0;
    position: relative;
}

img.avatar {
    width: 15%;
    border-radius: 50%;
    height:50%;
}

.container1 {
    padding: 16px;
    

}
.modalinside{
  text-align:center;
  width: 40%;
}
.modal1 {

    display: block;
   position: relative;
    bottom: 0px;
    top: -30px;
    width: 100%;
  
    padding-top: 60px;

}

.modal-content {
    background-color: #fefefe;
    margin: auto 50% 10% 80%; 
    border: 1px solid #888;
    width: 40%; 
}
body{
    background-image: url(cover.jpg)
}

</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="hello.css"> -->
    <title>CONFEASY!</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-sm fixed-top">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#topNav"><span class="navbar-toggler-icon"></span></button>
          <div id="topNav" class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#block-part" class="nav-link">Book</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                <li class="nav-item active"><a  href="login.php" class="nav-link ">Sign in</a></li>
              </ul>
          </div>
      </nav>
    <section class="jumbotron">
      <div id="hello" class="container">
        <div class="display-4 text-center h1">
          CONFERENCE ROOM BOOKING
        </div>
      </div>

    </section>
    <section>
    <div  class="modal1">
                      
                   <div class="modalinside">
                   
                    <form class="modal-content" action="login_check.php" method="POST">
                             <div class="imgcontainer">
                            
                            <img src="images.png" alt="Avatar" class="avatar" >
                    </div>
                     
                    <div class="container1"><b>Employee Id</b></label>
                    <input type="text" placeholder="Enter Employee Id" name="id" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="pass" pattern=".{6,}" required>
        
                    <button type="submit">Login</button>
                    </div>
                  </form>
                  </div>

</div>
 </section>
 <section class="foot" >
     
    <footer id="footer" class="bg-dark text-light text-center ">
        <div class="container-fluid mb-4 p-4">
            <div class="bg-primary mx-auto w-50">Company Information (c)2018</div>
        </div>
    </footer>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
  </body>
</html>


