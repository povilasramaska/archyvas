<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Filmas</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>

    <body>
        <form class="" action="atnaujink.php?id=<?=$filmai['id']?>" method="post">


        <div class="form-group">
        <label for="pavadinimas">Pavadinimas</label>
        <input type="text" name="pavadinimas" value="<?=$filmai['pavadinimas'] ?>" class="form-control"  placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="aprasymas">Aprasymas</label>
        <textarea class="form-control" <?=$filmai['aprasymas'] ?> name="aprasymas" rows="3"><?=$filmai['aprasymas'] ?></textarea>
    </div>
    <div class="form-group">
        <label class="radio-inline">
            <input <?php if ($filmai['kokybe']=="zema")echo "checked ";?>type="radio" name="kokybe" value="zema">zema
        </label>
        <label class="radio-inline">
            <input <?php if ($filmai['kokybe']=="normali")echo "checked ";?>type="radio" name="kokybe" value="normali">normali
        </label>
        <label class="radio-inline">
            <input <?php if ($filmai['kokybe']=="auksta")echo "checked ";?>type="radio" name="kokybe" value="auksta">auksta
        </label>
    </div>
    <div class="form-group">
        <label for="metai">Metai</label>
        <select class="form-control" name="metai">
            <?php for($i = 2018; $i> 1970; $i--): ?>
            <option  <?php if ($filmai['metai']==$i)echo "selected ";?>value="<?=$i?>"><?=$i?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="video">Video</label>
        <input type="text" name="video" class="form-control" value="<?=$filmai['video'] ?>" >
    </div>
    <div class="form-group">
        <label for="trukme">Trukme</label>
        <input type="number" name="trukme" class="form-control"  value="<?=$filmai['trukme'] ?>">
    </div>
    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" class="form-control-file" name="foto" >
    </div>
    <button type="submit" class="btn btn-primary">Prideti</button>
    </form>
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">

 </script>
 <script
   src="http://code.jquery.com/jquery-3.3.1.js"
   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
   crossorigin="anonymous"></script>

    </body>
</html>
