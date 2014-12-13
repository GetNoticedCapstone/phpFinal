<?php include 'view/header.php';
/*This index.php which is in the root of the project is the signal access point 
  for any users accessing our app.  the a href links are directing traffic 
  to the controller which maintaines all of the logic and determines what the 
  next step should be. 
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="trans_box center-block text-center img-responsive centerAll">
                <h1 class="logo">Fantasy Football Now</h1>
                <p class='slogin'>All the stats, updates, news and advise you need to become a
                    fantasy football legend.</p>       
                
                <a class="btn-lg btn-success btn" href="player_info_manager">Around the League</a>
                <a class="btn-lg btn-success btn" href="about_manager">About FFN.com</a>    
            </div>
        </div>
    </div>
</div>
<?php include 'view/footer.php'; 