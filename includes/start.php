<?php include("scripts/function.php"); ?>
<div class="jumbotron">
    <h1 class="display-4">Taak pagina</h1>
</div>
<div class="edit">
    <?php 
        if(isset($_GET["actie"]) && !strcmp($_GET["actie"],"edit")){
            if(isset($_GET["id"]) && !empty($_GET["id"])){
                $result = getTaak($_GET["id"]);
            
            ?>
            <form method="post" action="includes/edit.php">
                <input type="hidden" name="id" value="<?php echo $result["ID"];?>">
            <table class="table table-sm table-bordered table-striped">
        <thead>
            <tr>
                <th></th>
                <th>Naam Maker</th>
                <th>Taak Naam</th>
                <th>Beschrijving Taak</th>
                <th>Taak Status</th>
                <th>Deadline</th>
                <th>Aanpassen</th>
                <th>Verwijderen</th>
            </tr> 
        </thead>
        <tbody>
            <tr>
                <td><button type="submit" value="<?php echo $result["ID"]?>">Save</button></td>
                <td><input name="maker" type="text" value="<?php echo $result["NaamMaker"];?>"></td>
                <td><input  name="task" type="text" value="<?php echo $result["NaamTaak"];?>"></td>
                <td><input name="desc"  type="text" value="<?php echo $result["Beschrijving"];?>"></td>
                <td><input name="status"  type="text" value="<?php echo $result["Status"];?>"></td>
                <td><input name="deadline"  type="date" value="<?php echo $result["Deadline"];?>"></td>
        </tr>
        </tbody>
        </table>
        </form> 
        
<?php
            }
        }
    ?>
</div>
<div class="left">
<div class="table-responsive-lg">
    <table class="table table-sm table-bordered table-striped">
        <thead>
            <tr>
                <th></th>
                <th>Naam Maker</th>
                <th>Taak Naam</th>
                <th>Beschrijving Taak</th>
                <th>Taak Status</th>
                <th>Deadline</th>
                <th>Aanpassen</th>
                <th>Verwijderen</th>
            </tr> 
        </thead>
        <tbody>
            <?php   
             geefInsch();
            ?>        
        </tbody>
    </table>
    </div>
</div>