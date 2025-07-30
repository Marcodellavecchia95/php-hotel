 <?php $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-HOTEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
 <div class="container-fluid">
<h1>Hotels</h1>
  <form class="d-flex flex-column gap-3" action="">
    <div>
      <label  class="me-3" for="parking">Presenza parcheggio</label>
<input type="checkbox" id="parking" name="parking">

</div>
<div >
<label class="me-3" for="vote">Voto minimo:</label>
<input type="number" id="vote" name="vote" min=1 max=5>
</div>
<div>
<button class="btn btn-primary mb-3">Filtra</button>
</div>
</form>

<?php 

$parking_selected = false;
if (isset($_GET["parking"]) && $_GET["parking"] == "on"){
  $parking_selected = true;
 
}

if(isset($_GET["vote"])){
  $hotel_vote = $_GET["vote"];
}


?>
   
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">Vote</th>
      <th scope="col">distance_to_center</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($hotels as $hotel){
      if($parking_selected){
      if(!$hotel["parking"]){
       continue;
      }

      }
      if($hotel["vote"] < $hotel_vote ){
continue;
      }
      
      ?>
    <tr>
      
      <td><?php echo $hotel["name"]?></td>
      <td><?php echo $hotel["description"] ?></td>
      <td><?php echo  $hotel["parking"] ? "Presente" : "Assente"?></td>
      <td><?php echo $hotel["vote"]?></td>
      <td><?php echo $hotel["distance_to_center"]?></td>
      
    </tr>
  
    <?php }
    
    

    ?>
  </tbody>
</table>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>