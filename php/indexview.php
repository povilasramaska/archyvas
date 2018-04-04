<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <!--jQuery links-->
       <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
       <!--bootstrap links-->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
       <title>Document</title>
   </head>
   <body>
       <div class="container">
           <?php if($name == null):?>
           <h2>Ivesk varda</h2>
           <form method="GET">
               <div class="form-group">
                   <input type="text" name="name" placeholder="Enter Name">
                   <input type="text" name="surname" placeholder="Enter Surname">
               </div>
               <button type="submit">Submit</button>
           </form>
       <?php else: ?>
           <h2>Labas, <?php echo $newName.' '.changeName($_GET['surname']); ?></h2>
           <a href="index.php" class="btn btn-primary">Atgal</a>
       <?php endif;?>
       </div>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   </body>

</html>
