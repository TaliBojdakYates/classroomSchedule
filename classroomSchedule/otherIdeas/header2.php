<!-- This is the original header that contains two search bars instead of a dropdown selection -->

<?php
  include ('config/db_connect.php');
  $today = 'Monday';
 
  $errors = array('searchBuilding'=>'','searchRoom'=>'');
  $class_times = array();
 
  
  if(isset($_POST['submit'])){
    if(empty($_POST['searchBuilding'])){
      $errors['searchBuilding'] = "Invalid Building";
    } 
    if(empty($_POST['searchRoom'])){
      $errors['searchRoom'] = "Invalid Room";
    }

    if ((empty($errors['searchBuilding'])) ||empty($errors['searchRoom'])){
  
      $building = htmlspecialchars($_POST["searchBuilding"]);
      $room = htmlspecialchars($_POST["searchRoom"]);
      $search = $conn->prepare("SELECT * FROM $today WHERE building_name='$building' AND classroom_number='$room'");

      $search->setFetchMode(PDO:: FETCH_ASSOC);
      $search -> execute();

  
      $times = $search->fetchAll();
      
      if(!empty($times)){
        session_start();
        $_SESSION['building'] = $building;
        $_SESSION['classes'] = $times;
        $_SESSION['rooms'] = $room;


        header("Location: room.php");

      }else{
        include("modal.php");
      }    
    }
  }
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    <a class="navbar-brand display-1 text-dark" href="https://www.iit.edu/" >
          <img class="d-none d-sm-inline-block"src="images/logo.png" alt="" width="50" height="50" class="d-inline-block align-text-center">
          Illinois Institute of Technology
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/classroomSchedule/index.php">Home</a>
        </li>
      </ul>
      <form class="d-lg-inline-flex " method='post'>
        <div class='my-1'>
          <input class="form-control" type="search" name="searchBuilding" placeholder="Building Search " aria-label="Search">
        </div>

      
        <div class=' my-1 mx-lg-1'> 
          <input class="form-control" type="search" name="searchRoom" placeholder="Room Search" aria-label="Search">
        </div>
       
        <input  class="btn submitRed d-lg-block d-none  my-1" type="submit" name="submit" value="Submit"></input>
        <div class="d-grid gap-2  my-1">
          <input  class="btn submitRed d-lg-none" type="submit" name="submit" value="Submit"></input>
        </div>
      </form>


    </div>
  </div>  
</nav>