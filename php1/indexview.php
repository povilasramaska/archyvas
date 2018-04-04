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
           <?php if($kalba == null&&$word== null):?>
           <h2>i kuria kalba versime</h2>
            <form method="get" action="index.php">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1" name="kalba">
                  <option value="EN">Anglu</option>
                  <option value="LT">Lietuviu</option>
                </select>
                </div>
            <h2>ivesk zodi</h2>
            <div class="form-group">
                <input type="text" name="word" placeholder="Enter word">
            </div>
            <button type="submit">Submit</button>
            </form>
        <?php else: ?>
            <?php if(($isverstas=="tokio nera")||($isverstas=="tokio zodzio nera")): ?>
                <?php echo $isverstas ?>
            <?php include "helper2.php"; ?>
            <a href="index.php">atgal</a>
                   <?php else: ?>
                     <h2>isverstas zodis <?php echo $isverstas;?></h2>
                     <a href="index.php">atgal</a>
                   <?php endif; ?>
            <?php endif; ?>
       </div>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   </body>

</html>
