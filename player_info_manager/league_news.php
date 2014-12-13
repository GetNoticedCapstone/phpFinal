<?php include '../view/header_1.php'; ?>
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
                                        <th class="text-danger txtShadow">Week</th>
                                        <th class="text-danger txtShadow">Date</th>
                                        <th class="text-danger txtShadow">Game Time</th>
                                        <th class="text-danger txtShadow">Tv Station</th>
                                        <th class="text-danger txtShadow">Away Team</th>
                                        <th class="text-danger txtShadow">Home Team</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php foreach ($football_Info as $news) :
$row = '<tr>' . 
       '<td>' . $news['gameWeek']. '</td>' .
       '<td>' . $news['gameDate']. '</td>' .
       '<td>' . $news['gameTimeET']. '</td>' .
       '<td>' . $news['tvStation']. '</td>' .
       '<td>' . $news['awayTeam']. '</td>' .
       '<td>' . $news['homeTeam']. '</td>' .
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
        </div>
    </div>
</div>
<?php include '../view/footer_1.php'; 

