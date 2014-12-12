<?php include '../view/header_1.php'; ?>
<div class="container">

            <div class="trans_box_news center-block text-center img-responsive ">
                <h3>league news</h3>
                <div class="row">
                    <div class="col-md-12">
                        <form action="." method="post">
                            
                        <h2>Results</h2>
                      
                        <?php foreach ($football_Info as $news) :
                            $game = '<p>' . 'Week' . ' '. $news['gameWeek']. ' '. 
                                'Time'.$news['gameTimeET']. ' ' . 'Station: '.$news['tvStation'].
                                ' '.$news['awayTeam']. ' ' . ' vs'. ' '.$news['homeTeam']. '<p>';
                        ?>
                            
                        <?php echo $game; ?>
                           
                        <?php endforeach; ?>
                       
                       
                        </form>
                    </div>
                </div>
              
                <form action="." method="post" class="aligned">
                     <a class="btn-lg btn-success btn" href=".?action=home">home</a>
                </form>
            </div>
</div>
<?php include '../view/footer_1.php'; 

