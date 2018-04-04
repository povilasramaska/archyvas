<?php
include "header.view.php";

 ?>
 <?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-info" role="alert">
       <?php echo $_SESSION['message']?>
    </div>
        <?php unset($_SESSION['message']); ?>
    <?php  endif;?>
<h2>Labas</h2>
<div class="col-md-6 col-md-offset-3">


<ul class="list-group">
  <li class="list-group-item active">Todo list</li>
  <?php if(empty($mas)) ?>
  <?php for ($i=$from;$i<=$till;$i++): ?><!--puslapiavimui-->

  <li class="list-group-item justify-content-between">
      <?php echo htmlspecialchars($mas[$i]['title']).''.'<br>'?>
      <?php echo $mas[$i]['description'].'<br>'?>
      <?php echo $mas[$i]['done'].'<br>' ?>
      <div class="">
    <a href="deleteTask.php?id=<?php echo $i ?>" class="btn btn-danger">Delete</a>
      <a href="atlikau.php?id=<?php echo $i ?>" class="btn btn-success">Atlikau</a>
      <a href="editTask.php?id=<?php echo $i ?>"class="btn btn-warning" name="delete" id="mygt<?php echo $i?>" onclick="keisksSpalva">Redaguoti</a>
      </div>
  </li>

<?php endfor ?>

</ul>
<br>
<a class="btn btn-primary float-right" href="view/addTask.view.php">Prideti</a>
<br><br>
<nav aria-label="Page navigation example">
  <ul class="pagination">
      <?php for($i=1;$i<=$pageCount;$i++): ?>
    <li class="page-item"><a class="page-link" href="index.php?psl=<?php echo $i?>"><?php echo $i ?></a></li>
<?php endfor; ?>
  </ul>
</nav>
</div>
<!-- <script src="mano.js"></script> -->

<?php
include "footer.view.php"

 ?>
