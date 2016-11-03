<div class="row"><h1>Choissir une pathologie</h1>
    <p>Cliquez sur les zones vertes</p>
    <?php
global $db;

foreach ($i as $key => $value) {
    //var_dump($value);
    echo "<div class='col-md-12'>
        <h2>" . $value['title'] . "</h2>
            <div class='img-container' >
                <img src='images/" . $value['filename'] . "' class='img-responsive' title='" . $value['title'] . "' target-img='" . $key . "' />";

    $db->Query("SELECT * FROM traumas WHERE id_image=$key");

    while (!$db->EndOfSeek()) {
        $row = $db->Row();
        echo "<a href='addpathol/$patient/$row->id_trauma/' title='Ajouter $row->title' class='trauma-link' style='top:$row->y%;left:$row->x%;transform: scale(".($row->size*0.05/100).") rotate({$row->rotation}deg) translateZ(0px);'></a>";
    }
    echo "</div></div>";
}
?>
</div>

