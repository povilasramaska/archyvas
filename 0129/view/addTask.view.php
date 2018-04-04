<?php
include 'header.view.php';
 ?>

 <form action="../../addTask.php" method="post">
     <div class="form-group">
         <label for="title">Title</label>
         <input type="text" name="title" class="form-control"  placeholder="Enter Title">
     </div>
     <div class="form-group">
         <label for="description">Description</label>
         <textarea class="form-control"  rows="3" name="description"></textarea>
     </div>
     <div class="form-group">
         <label for="year">Year</label>
         <select class="form-control" name="year">
             <?php for($i = 2018; $i < 2025; $i++) :?>
             <option value="<?php echo $i ?>"><?php echo $i ?></option>
             <?php endfor; ?>
         </select>
     </div>
     <div class="form-group">
         <label for="month">Month</label>
         <select class="form-control" name="month">
             <?php for($i = 1; $i <= 12; $i++) :?>
                 <option value="<?php  echo $i ?>"><?php echo $i ?></option>
             <?php endfor; ?>
         </select>
     </div>
     <div class="form-group">
         <label for="day">Day</label>
         <select class="form-control" name="day">
             <?php for($i = 1; $i <= 31; $i++) :?>
                 <option value="<?php echo $i ?>"><?php echo $i ?></option>
             <?php endfor; ?>
         </select>
     </div>
     <div class="form-group">
    <label for="priority">Priority</label>
    <select class="form-control" id="priority" name="priority">
      <option value="low">low</option>
      <option value="normal">normal</option>
      <option value="hight">hight</option>
    </select>
  </div>
     <button type="submit" class="btn btn-primary">Submit</button>
 </form>


  <?php
include 'footer.view.php'
   ?>
