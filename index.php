<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Student Result Analysis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!-- Custom CSS -->
    <link href="static/css/style.css" rel='stylesheet' type='text/css' />
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
     <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<style>
    
.container{
  max-width: 1000px;
  overflow: hidden;
  padding: 80px 0;
}
.container .main-card{
  display: flex;
  justify-content: space-evenly;
  width: 200%;
  transition: 1s;
}

.container .main-card .cards{
  width: calc(100% / 2 - 10px);
  display: flex;
  flex-wrap: wrap;
  margin: 0 20px;
  justify-content: space-between;
}
.main-card .cards .card{
  width: calc(100% / 3 - 10px);
  background: #fff;
  border-radius: 12px;
  padding: 30px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.4s ease;
}
.main-card .cards .card:hover{
  transform: translateY(-15px);
}
.cards .card .content{
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.cards .card .content .img{
  height: 180px;
  width: 180px;
  border-radius: 50%;
 /* background: #FF676D;*/
  margin-bottom: 14px;
}
.card .content .img img{
  height: 100%;
  width: 100%; 
}
.card .content .name{
  font-size: 20px;
  font-weight: 500;
   color: black;
}
 .container .button{
  width: 100%;
  display: flex;
  justify-content: center;
  margin: 20px;
}
.button label{
  height: 15px;
  width: 15px;
  border-radius: 20px;
  background: #fff;
  margin: 0 4px;
  cursor: pointer;
  transition: all 0.5s ease;
}

@media (max-width: 768px) {
  .main-card .cards .card{
    margin: 20px 0 10px 0;
    width: calc(100% / 2 - 10px);
  }
}
@media (max-width: 600px) {
  .main-card .cards .card{
    width: 100%;
  }
}
</style>
<body>

<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/0.jpg" height="700px" width="500px" class="d-block w-100" alt="image not found">
    </div>
    <div class="carousel-item">
      <img src="image/2.jpg" height="700px" width="500px" class="d-block w-100" alt="image not found">
    </div>
    <div class="carousel-item">
      <img src="image/3.jpg" height="700px" width="500px" class="d-block w-100" alt="image not found">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br>
<center><h1>About us</h1></center>
      <div class="row" >
          <div class="col-lg-4 ms-auto"><p style="font-size: 18px ; color: black;" >Student Result Analysis  is a web based  project and by using this system we can manage Student result online. With this system we not only manage student result but also we can manage subject data, student data and classes data. The main purpose of developing this Student Result Analysis  is to reduce the manual errors and convert result system into computerized system.</p></div>
          <div class="col-lg-4 me-auto"><p style="font-size: 18px ; color:black;" >An Online Student Result Analysis  is a very well organized and appropriate system to utilize. This  Student Result Analysis is not only for student user but also assist the management which proceed with a large amount of pain to publish the student results in usual conditions. This is very secure and easier</p></div>
      </div>
 <div class="container">
    <div class="main-card">
      <div class="cards">
        <div class="card">
         <div class="content">
           <div class="img">
            <img src="image/admin.png">
           </div>
           <div class="details">
             <div class="name">Admin login</div> 
             <div></div>
             <div class="card-footer">
        <a href="adminlogin.php" class="btn btn-primary btn btn-outline-danger">click here</a>
      </div>
           </div>
   
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="image/student.webp" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Student login</div>
       
             <div></div>
             <div class="card-footer">
        <a href="student.php" class="btn btn-primary btn btn-outline-danger">click here</a>
      </div>
           </div>  
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="image/calculator.png" alt="image not found">
           </div>
           <div class="details">
             <div class="name">Calculator</div>
       
             <div></div>
             <div class="card-footer">
                <a href="sgpa.html" class="btn btn-primary btn btn-outline-danger">click here</a>
              </div>
           </div>
         </div>
        </div>
      </div>
      <div class="cards">
      </div>
    </div>
<br> <br>

</div>
  <!-- Footer-->
        <footer class="footer ">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 ">
                        <h4 class="text-uppercase mb-4">Location</h4>
                       <a href="https://goo.gl/maps/EzMH4M5BXdvyUo8x6"><p class="lead mb-0">
                            Moodbidri-MITE</a>
                            <br />
                            Mangalore
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4" >Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/MITEedu/"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/miteedu/"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/company/miteedu/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://mite.ac.in/"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About us</h4>
                        <p class="lead mb-0">
                            It is a free to use and developed by<br>
                            <a href="aboutus.html">3students</a>
                           
                        </p>
                    </div>
                </div>
            </div>
        </footer>
  </body>
</html>
