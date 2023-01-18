<div class="card" style="width: 18rem;"></div>
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
<?php
echo $numero;
    if ($numero == 1){
?>
    <h5 class="card-title">Persona nro 1</h5>
    <p class="card-text"><?php echo $nombre?></p>
    <a href="#" class="btn btn-primary"><?php echo $edad?></a>
<?php    
    } elseif($numero == 2){
?>
    <h5 class="card-title">Persona nro 2</h5>
    <p class="card-text"><?php echo $nombre?></p>
    <a href="#" class="btn btn-danger"><?php echo $cumpleanios?></a>
<?php
    }
  ?>
  </div>
</div>