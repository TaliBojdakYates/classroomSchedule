<?php
  include ('config/db_connect.php');
  // the next line would allow the website to show the correct classes for the current day
  // $today = date("l");
  // The code is set to monday due to the mok data base
  $today = 'Monday';
 
  $errors = array('searchBuilding'=>'','searchRoom'=>'');
  $class_times = array();

  //Find All valid classrooms
  $everyRoom = $conn->prepare("SELECT * FROM all_rooms");

  $everyRoom->setFetchMode(PDO:: FETCH_ASSOC);
  $everyRoom -> execute();
  
  $everyRoom = $everyRoom->fetchAll();

  // Finding all buildings
  $allRooms = $conn->prepare("SELECT DISTINCT building_name FROM $today ORDER BY building_name ASC");

  $allRooms->setFetchMode(PDO:: FETCH_ASSOC);
  $allRooms -> execute();
  
  $allRooms = $allRooms->fetchAll();


  // Searching for building and room
  if(isset($_POST['submit'])){
    if(!isset($_POST['buildingSelection'])){
      $errors['searchBuilding'] = "Invalid Building";
    } 
    if(empty($_POST['searchRoom'])){
      $errors['searchRoom'] = "Invalid Room";
    }

    if ((empty($errors['searchBuilding'])) ||empty($errors['searchRoom'])){
      $building = $_POST['buildingSelection'];
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
        $searchArray = array($building=>$room);

        for($i=0;$i<count($everyRoom);$i++){
          $matchingArray = array($everyRoom[$i]['building_name'] =>$everyRoom[$i]['classroom_number']);
          if($searchArray  == $matchingArray){
            header("Location: emptyRoom.php");
          }
        }

        include("modal.php");
        
        
        // if(){
        //   session_start();
        //   $_SESSION['building'] = $building;
        //   $_SESSION['classes'] = $times;
        //   $_SESSION['rooms'] = $room;
        //   header("Locatin: emptyRoom.php");
        // }else{
        //   include("modal.php");
        // }
        
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
        <div class=' my-1 mx-lg-1'>
          <select class="form-select rounded-2" name="buildingSelection" aria-label="Building Search" style="border-color: #cc0000; ">
          <option selected>Search Building</option>
          <?php for($i=0; $i<count($allRooms);$i++) { ?>
          <?php  $value = $allRooms[$i]["building_name"];?>
          <option value= '<?php echo $value ?>'><?php echo $value;?></option>
          <?php   } ?>
        </select>
        </div>
      
        <div class=' rounded-2 my-1 mx-lg-1'> 
          <input class="form-control" type="search" name="searchRoom" placeholder="Search Room" aria-label="Search" style="border-color: #cc0000; ">
        </div>
       
        <input  class="btn submitRed d-lg-block d-none  my-1" type="submit" name="submit" value="Submit"></input>
        <div class="d-grid gap-2  my-1">
          <input  class="btn submitRed d-lg-none" type="submit" name="submit" value="Submit"></input>
        </div>
      </form>
      
    </div>
  </div>  
</nav>
