<?php
if (isset($patient)) {
    $db->Query("SELECT * FROM users WHERE iduser='$patient'");
    while (!$db->EndOfSeek())
        $pi = $db->Row();
    ?>
    <div class="row">
        <h1><a href="account/<?= $patient ?>/"><?= $pi->username ?></a> <small>(Patient)</small></h1>
        <?php $db->Query("SELECT * FROM user_traumas WHERE id_user='$patient'"); ?>
        <div class="col-md-8"><h2>Liste des pathologies <sup class="badge"><?= ($db->RowCount() == "") ? "0" : $db->RowCount() ?></sup></h2>
            <div  class="list-group">
                <?php
                while (!$db->EndOfSeek()) {
                    $ut = $db->Row();
                    echo "                <a class='list-group-item' href='addhisto/$patient/$ut->id_ut/'><i class='fa fa-plus-square'></i> $ut->title <small>($ut->origine)</small></a>";
                }
                ?>
            </div>
            <div ><a href="addpatho/<?= $patient ?>/" class="btn btn-success btn-lg"><i class="fa fa-plus-square"></i> Ajouter une pathologie</a></div>
        </div>
        <div class="col-md-4"><h2>Infographie <small>(démo)</small></h2>
            <img src="images/corps001.jpg" class="img-thumbnail"/>
        </div>
    </div>
    <div class="row">
        <?php $db->Query("SELECT * FROM user_histos WHERE id_user='$patient'"); ?>
        <div class="col-md-6"><h2>Historique des rapports <sup class="badge"><?= ($db->RowCount() == "") ? "0" : $db->RowCount() ?></sup></h2>
            <p>&nbsp;</p>
            <div  class="list-group">
                <?php
                while (!$db->EndOfSeek()) {
                    $uh = $db->Row();
                    echo "                <a class='list-group-item' href='patientviewinfo/$uh->id_histo/'> ".($uh->dday)." <small>($uh->private_info)</small></a>";
                }
                ?>
            </div>
        </div>
        <div class="col-md-6"><h2>Diagrame <small>(démo)</small></h2>
            <div id="chart_div" class="img-thumbnail" style="width: 100%; height: 500px;"></div>
            <script type="text/javascript" src="https://www.google.com/jsapi"></script>
            <script type="text/javascript">
                google.load("visualization", "1", {packages: ["corechart"]});
                google.setOnLoadCallback(drawChart);
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Mois', 'Angle genoux fermé', 'Angle genoux ouvert'],
                        ['Jan', 25, 5],
                        ['Fev', 45, 7],
                        ['Mar', 49, 2],
                        ['Avr', 55, 1]
                    ]);

                    var options = {
                        title: 'Rétablissement du genou',
                        curveType: 'function',
                        'pointSize': "5"
                    };

                    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

                    chart.draw(data, options);
                }
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-right">
            <p>&nbsp;</p>
            <a href="delpatient/3/" class="btn btn-danger">Supprimer ce patient</a>
        </div>
    </div>
    <?php
} else {
    $error[] = "Patient non précisé";
}