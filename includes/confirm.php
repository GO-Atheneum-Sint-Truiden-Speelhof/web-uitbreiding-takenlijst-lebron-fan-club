   <div class="jumbotron">
    <h1 class="display-4">Jouw gegevens</h1>
    </div>
    <div class="row">
        <div class="col-md-12 invoer">
   <?php
        include("scripts/function.php");
        SaveToDb();
        echo '<p>NaamMaker '.$_POST["naammaker"].'</p>';
        echo '<p>NaamTaak '.$_POST["naamtaak"].'</p>';
        echo '<p>Beschrijving '.$_POST["beschrijving"].'</p>';
        echo '<p>Status '.$_POST["status"].'</p>';
        echo '<p>Deadline '.$_POST["deadline"].'</p>';
        ?>
    </div>   
</div>
       