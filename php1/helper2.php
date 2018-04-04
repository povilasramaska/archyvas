<div class="container">
<h1>Uzpildyk forma, papildyk zodyna</h1>
 <form method="get" action="naujas.php">

 <h2>jusu zodis
     <?php
      echo $word;
 ?></h2>
 <div class="form-group">
     <input type="text" name="nword" placeholder="Enter word">
 </div>
 <input type="hidden" name="word" value=" <?php echo $word ?> ">
 <input type="hidden" name="kalba" value=" <?php echo $kalba ?>"

 <button type="submit">Submit</button>
 </form>
</div>
