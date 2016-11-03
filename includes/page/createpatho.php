<div class="row"><h1>Créer des pathologies</h1>
    <h2 class="alert alert-danger text-center">Ajoutez des pathologies en cliquant sur les images !</h2><?php
    global $db;

    foreach ($i as $key => $value) {
        //var_dump($value);
        echo "<div class='col-md-12'>
        <h2>" . $value['title'] . "</h2>
            <div class='img-container' >
                <img src='images/" . $value['filename'] . "' class='track-click img-responsive' title='" . $value['title'] . "' target-img='" . $key . "' />";

        $db->Query("SELECT * FROM traumas WHERE id_image=$key");

        while (!$db->EndOfSeek()) {
            $row = $db->Row();
            echo "<a href='edittrauma/$row->id_trauma/' title='Editer $row->title' class='trauma-link' style='top:$row->y%;left:$row->x%;transform: scale(" . ($row->size * 0.05 / 100) . ") rotate({$row->rotation}deg) translateZ(0px);'></a>";
        }
        echo "</div></div>";
    }
    ?>
    <form id="add_trauma" action="addtrauma/" method="POST">
        <input type="hidden" name="id_image" id="id_image" value=""/>
        <input type="hidden" name="x" id="x" value=""/>
        <input type="hidden" name="y" id="y" value=""/>
    </form>
</div>