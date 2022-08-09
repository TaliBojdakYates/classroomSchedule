<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="styles.css">

  <!-- font family  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">

  <title></title>
  <style type="text/css">
   
    .submitRed {
      background: #cc0000;
      color:  white;
    }

    .submitRed:hover {
      background: #ff9900;
    }

  </style>
</head>
<body id="mainPage">
  <?php include("templates/header.php");?>
  
  <section >
    
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class=" text-light text-center fw-bold " style="position: absolute;top: 35%; left: 50%;transform: translate(-50%, -50%); z-index: 1; font-size:4vw; font-family: 'Roboto Slab', serif; ">DISCOVER A CLASSROOM TO STUDY IN</div>
<div class="carousel-item">
        <div class="contanier-item">
          <img src="images/pritzkerBuilding.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-light">
            <h5>Robert A. Pritzker Science Center</h5>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="images/crownHall.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-light">
          <h5>S.R. Crown Hall</h5>
        </div>
      </div>
      
     <div class="carousel-item active">
        <img src="images/kaplanBuilding.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-light">
          <h5>Ed Kaplan Family Institute for Innovation and Tech Entrepreneurship</h5>
        </div>
      </div>
    </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section>
    <div class=" bg-light">
      <p class="pt-2 text-center fw-bold my-0">Enter a building and a room number of the class you want to study in. </p>
      <p class="text-center fw-bold pb-2">The classes being held in that room will be displayed and all other times can be used for studying</p>
    </div>
  </section>

  <section class="py-4" >
    <div class="row justify-content-center ">

      <div class="col-md-3 text-center">
            <h1 style="color: #cc0000;">Improvement </h1>
            <p class="text-center">Instead of sticking to one study location, simply alternating the room where a person studies improves retention</p>
            <p class="text-center">-The New York Times</p>
      </div>

      <div class="col-md-3 text-center">
            <h1 style="color: #cc0000;">Variety </h1>
            <p >Choose between the six classroom types that Illinois Tech offers to study in</p>
         <!--  <div class="d-inline-flex justify-content-center" style="border-bottom-radius: 10px;">
            <a style="text-decoration: none; color:#cc0000; " href="https://ots.iit.edu/streaming-classrooms">
              <i class="bi bi-info-circle "></i>
              More Info
            </a>    
          </div> -->
      </div>
      <div class="col-md-3 text-center">
        <h1 style="color: #cc0000;">Benefits</h1>
        <p> By discussing each other’s points of view and listening to their fellow students’ contributions, they experienced an enhanced academic learning</p>
        <p>-National Library of Medicine</p>
      </div>
    </div>
  </section>
  <section class="py-5 bg-light"> 
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <h4>21st Century Higher Education</h4>
          <p>Illinois Tech is committed to advancing technology that makes the world a better place for all. We do this by empowering students from diverse backgrounds—the innovators and leaders of the future—with an extraordinary technical education and guaranteed hands-on experiences that enable them to achieve career success and create change.</p>
        </div>
        <div class="col-lg-7 ">
          <img class="img-fluid" src="images/iit.jpg">
        </div>
      </div> 
  </section>    

  <?php  include("templates/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>