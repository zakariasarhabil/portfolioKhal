


  <?php   require_once "database.php";
  $db = Database::connect();
  $sql = "SELECT * FROM `projets` ORDER BY id  DESC LIMIT 4";
  $stmt = $db->query($sql);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  Database::disconnect();
   ?>


<div class="row">
                <?php foreach ($rows as $row) : ?>
                    <div class="col-6">
                        <!-- Card Narrower -->
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <form action="edit.php" method="GET">
                            

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">

                                <!-- Label -->
                                
                                <!-- Title -->
                                <h4  class="font-weight-bold card-title"> <?= $row['nomprojet'] ?></h4>

                                <input type="hidden" name="projet" value="<?= $row['id'] ?>">
                                <!-- Text -->
                                
                                <!-- Button -->

                                
                                    <button type="submit" class="btn btn-outline-primary waves-effect"><i class="" aria-hidden="true"></i>edit</button>

                                

                            </div>
                            </form>



                        </div>
                    </div>
                    <?php endforeach; ?>
                  
                </div>
                        