<?php
error_reporting(0);
session_start();
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
$sql="SELECT * FROM user";
$data = $dbcon->query($sql);

?>
<?php
    include_once('inc/header.php');
?>
<section id="greetings">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="greetings-image">
                    <img src="images/arrest.jpg" alt="arrest">
                </div>
               <h2 class="text-center text-primary">Wellcome to International Crime agency...</h2>
            </div>
            <!-- end column -->

        </div>
        <!-- end row -->
    </div><!-- end container -->
</section>
<section id="criminals">
    <div class="container">
        <div class="row">
            <h3 class="well text-center text-info" style="margin: 5px 20px"> The most Wanted Criminals</h3>
            <?php
                while($row = $data->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div class="col-md-3">
                <div class="criminal">
                    <h4 class="name"><?php echo $row['fname'].' '. $row['lname']?></h4>
                    <div class="image">
                        <img src="images/<?php echo $row['picture']?>">
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <small class="text-center">&copy; Copyright: International Mafia Don- 2015.</small>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>