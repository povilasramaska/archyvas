<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <title>FILMAI</title>
    <link rel="stylesheet" href="povil.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">

 </script>

</head>
<body>
    <div class="vip" id="vip">
        <input  name="search" id="search_film">
        <div class="rezultatai" id="rezultatai" ></div>
</div>
    <section class="sek">
        <h1>FILMU KOLEKCIJA</h1>
        <a href="naujoforma.php">Prideti filma</a>
        <h2>FILMAI</h2>
        <table class="standard-table">
            <thead>
                <tr>
                    <th>
                        Eil.Nr.
                    </th>
                    <th>
                         <a  href="index.php?s_id=1">Pavadinimas <span class="<?php if ($sort=="pavadinimas"){echo bb;}else{ echo pp;}?>">/></span> </a>
                    </th>
                    <th>
                     <a  href="index.php?s_id=2">Metai <span class="<?php if ($sort=="metai"){echo bb;}else{ echo pp;}?>">/></span> </a>
                    </th>
                    <th>Trukme</th>
                    <th>Kokybe</th>
                    <th>Foto</th>
                    <th>Video</th>
                    <th>Aprasymas</th>
                    <th>Koreguok</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($filmai as $filmas): ?>
                    <tr>
                        <td><?php echo $filmas['id']; ?></td>
                        <td><?php echo $filmas['pavadinimas']; ?></td>
                        <td><?php echo $filmas['metai']; ?></td>
                        <td><?php echo $filmas['trukme']; ?></td>
                        <td><?php echo $filmas['kokybe']; ?></td>
                        <td>
                            <img class="imga" src="<?php echo $filmas['foto']; ?>" alt="NERA">
                        </td>
                        <td>
                            <iframe width="200" height="115" src="<?php echo $filmas['video'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


                        </td>
                        <td><?php echo $filmas['aprasymas']; ?><a href="apie.php?pavadinimas=<?php echo $filmas['pavadinimas']?>"><p>Placiau</p></a></td>
                        <td>
                            <a  href="redaguok.php?r_id=<?= $filmas['id'] ?>">Redagoti filma</a><br>
                            <a  href="istrink.php?t_id=<?= $filmas['id'] ?>">Istrinti filma</a><br>
                            <a  href="komentarai.php?k_id=<?= $filmas['id'] ?>">Komentarai</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>
    <br><br>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
          <?php for($i=1;$i<=$pageCount;$i++): ?>
        <li class="page-item"><a class="page-link" href="index.php?psl=<?php echo $i?>&s_id=<?php echo $sort?>"><?php echo $i ?></a></li>
    <?php endfor; ?>
      </ul>
    </nav>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$('#search_film').on('keyup',function(e){
    var search=$(this).val();
    $.ajax({
        type: "POST",
        url:"search.php",
        data:{pavadinima:search},
        dataType:'json',
        success: function(data){

            $( "#rezultatai" ).empty();
            for(let i = 0,s=data.length; i<s; i++){

                // let duomenys=data[i].pavadinimas;

                $("#rezultatai").append("<p><a href='apie.php?pavadinimas=Baisusis pirmadienis'>"+data[i].pavadinimas+"</a></p>");
            }
        },
        error: function(data){
            console.log('error',data);
        },
    }
    )
})

</script>

</body>
</html>
