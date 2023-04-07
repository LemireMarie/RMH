<?php require ("./header.php"); ?>
    
    <main>

    <h1>Ventes flash et promotions</h1>
        <div class="container">
            <?php
                $ventFlash = new PDO('mysql:host=localhost;dbname=rmh;charset=utf8','root','');
                if (!empty($ventFlash)) {
                
                    $req = "SELECT * FROM products ";
                    $exe = $ventFlash->query($req);
                    if ($exe != false){
                        $results = $exe->fetchAll(PDO::FETCH_ASSOC);
                            foreach($results as $row){
                            ?>
                                <div class="card">
                                    <img src="<?= $row['img'] ?>" alt="illustration de <?= $row['productName']; ?>">
                                    
                                    <p class="info"><?= $row['price']; ?>€&nbsp;-&nbsp;Vente flash</p>
                                    <p class="product"><?= $row['productName']; ?></p>
                                    <p class="product"><?= $row['skinType']; ?></p>
                                    <p class="product"><?= $row['productType']; ?></p>
                                    <p class="charac"><?= $row['characteristics']; ?></p>
                                </div>
                            <?php                       
                            }      
                    }
                    else {
                        echo "error had happened!";
                    }
                }
                else {
                    echo "échec de la connexion à la BDD";
                }
                ?>
       </div>
</main>
    <?php require ("./footer.php"); ?>