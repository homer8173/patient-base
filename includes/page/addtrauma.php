<div class="row">
    <h1>Ajouter un traumatisme</h1>
    <div class="col-md-8">
        <form action="addtrauma/" class="form-horizontal" role="form" method="POST">
            <input type="hidden" name="id_image" value="<?= $_POST['id_image'] ?>" />
            <h2>Désignation</h2>             
            <div class="form-group">
                <label for="title" class="col-sm-4 control-label">Titre</label>
                <div class="col-sm-8">
                    <input type="text" name="title" class="form-control" id="title" placeholder="ex: Genoux gauche de face" value="<?= (isset($_POST['title']))?$_POST['title']:""?>">
                </div>
            </div>  
            <h2>Seuils</h2>             
            <div class="form-group">
                <label for="min" class="col-sm-4 control-label">Minimum</label>
                <div class="col-sm-8">
                    <input type="number" name="min" class="form-control" id="min" placeholder="ex:0" value="<?= (isset($_POST['min']))?$_POST['min']:"0"?>">
                </div>  
            </div>
            <div class="form-group">
                <label for="max" class="col-sm-4 control-label">Maximum</label>
                <div class="col-sm-8">
                    <input type="number" name="max" class="form-control" id="max" placeholder="ex:90" value="<?= (isset($_POST['max']))?$_POST['max']:"90"?>">
                </div>
            </div>  
            <div class="form-group">
                <label for="units" class="col-sm-4 control-label">Unité</label>
                <div class="col-sm-8">
                    <input type="text" name="units" class="form-control" id="units" placeholder="ex:° ou deg" value="<?= (isset($_POST['units']))?$_POST['units']:"°"?>">
                </div>
            </div>  
            <div class="form-group">
                <label for="unit_title" class="col-sm-4 control-label">Titre d'unité</label>
                <div class="col-sm-8">
                    <input type="text" name="unit_title" class="form-control" id="unit_title" placeholder="ex:Angle en degrés" value="<?= (isset($_POST['unit_title']))?$_POST['unit_title']:"Angle en degrés"?>">
                </div>
            </div>  
            <h2>Représentation</h2>                
            <div class="form-group">
                <label for="x" class="col-sm-4 control-label">Position horizontale</label>
                <div class="col-sm-8">
                    <input type="range" name="x" class="form-control" id="x" placeholder="x" value="<?= (isset($_POST['x']))?$_POST['x']:"50"?>" max="100" min="0" step="1">
                </div>
            </div>
            <div class="form-group">
                <label for="y" class="col-sm-4 control-label">Position verticale</label>
                <div class="col-sm-8">
                    <input type="range" name="y" class="form-control" id="y" placeholder="y" value="<?= (isset($_POST['y']))?$_POST['y']:"50"?>" max="100" min="0" step="1">
                </div>
            </div>
            <div class="form-group">
                <label for="size" class="col-sm-4 control-label">Taille</label>
                <div class="col-sm-8">
                    <input type="range" name="size" class="form-control" id="size" placeholder="size" value="<?= (isset($_POST['size']))?$_POST['size']:"100"?>" max="400" min="50" step="25">
                </div>
            </div>
            <div class="form-group">
                <label for="rotation" class="col-sm-4 control-label">Rotation</label>
                <div class="col-sm-8">
                    <input type="range" name="rotation" class="form-control" id="rotation" placeholder="rotation" value="<?= (isset($_POST['rotation']))?$_POST['rotation']:"0"?>" max="360" min="0" step="5">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" name="submit_addtrauma" value="1" class="btn btn-success btn-lg">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <div class='img-container' >
            <img src="images/<?= (isset($_POST['id_image']))?$i[$_POST['id_image']]['filename']:"" ?>" class="img-responsive" title='<?= (isset($_POST['id_image']))?$i[$_POST['id_image']]['title']:"" ?>'/>

            <a href="<?= $page ?>/#" style="left: <?= (isset($_POST['x']))?$_POST['x']:"50"?>%;top: <?= (isset($_POST['y']))?$_POST['y']:"50"?>%;transform: scale(<?= (isset($_POST['size']))?$_POST['size']*0.05/100:"0.05"?>) rotate(<?= (isset($_POST['rotation']))?$_POST['rotation']:"0"?>deg) translateZ(0px)" class="trauma-link"></a>
        </div>
    </div>
</div>
<br class="clearfix" />
