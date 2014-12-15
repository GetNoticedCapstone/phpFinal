<?php include '../view/header_1.php';?>

<div class="container centerAll">
    <div id="nflSchedule">
        <div class="trans_box_news center-block img-responsive ">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 class="text-center text-danger txtShadow">NFL 2014 Schedule</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form id="schedule" class="center-block" action="." method="post">
                        <div class="table-responsive">
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th class="text-danger txtShadow">Jersey</th>
                                        <th class="text-danger txtShadow">Name</th>
                                        <th class="text-danger txtShadow">Team</th>
                                        <th class="text-danger txtShadow">Position</th>
                                        <th class="text-danger txtShadow">Height</th>
                                        <th class="text-danger txtShadow">Weight</th>
                                        <th class="text-danger txtShadow">College</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php foreach ($football_Info as $player) :
$row = '<tr>' . 
       '<td>' . $player['jersey']. '</td>' .
       '<td>' . 
       '<span class="player" >' .
            $player['displayName']. 
       '</span>' .
       '</td>' .
       '<td>' . $player['team']. '</td>' .
       '<td>' . $player['position']. '</td>' .
       '<td>' . $player['height']. '</td>' .
       '<td>' . $player['weight']. '</td>' .
       '<td>' . $player['college']. '</td>' .
       '<tr>'
?>
<?php echo $row; ?> 
<?php endforeach; ?>
                                </tbody>
                                </table>
                        </div>
                    </form>
                </div>
            </div>            
            <div class="row">
                <div class="col-md-12">
                    <form action="." method="post">
                        <a class="btn-lg btn-danger btnNews center-block" href=".?action=home">home</a>
                    </form>
                </div>
            </div>
            <div class="videos"></div>
        </div>
    </div>
</div>
<?php include '../view/footer_1.php'; 
