<!-- footer section starts  -->

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>Location</h3>
            <a href="https://www.google.com/maps/place/Dharmaloka+Hall,+University+of+Kelaniya/@6.972978,79.9152401,15z/data=!4m6!3m5!1s0x3ae2581cc7ac9117:0xc40f87f93313d0e2!8m2!3d6.972978!4d79.9152401!16s%2Fg%2F11b5wl16gz"> <i class="fas fa-map-marker-alt"></i> Dharmaloka Hall,<br> Faculty of Science Pathway,<br> Peliyagoda 11300 </a>
            
		</div>
		
        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="#service"> <i class="fas fa-arrow-right"></i> Service </a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> About </a>
            <a href="#gallery"> <i class="fas fa-arrow-right"></i> Gallery </a>
            <a href="#review"> <i class="fas fa-arrow-right"></i> Reivew </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> Contact </a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a> <i class="fas fa-phone"></i> 011-2903903 </a>
            <a> <i class="fas fa-phone"></i> 011-2223333 </a>
            <a href="mailto:info@kln.ac.lk"> <i class="fas fa-envelope"></i> info@kln.ac.lk</a>
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="https://web.facebook.com/universityofkelaniyasl/?_rdc=1&_rdr"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="https://twitter.com/ukelaniya"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="https://www.instagram.com/ukelaniya/"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="https://lk.linkedin.com/company/university-of-kelaniya"> <i class="fab fa-linkedin"></i> Linkedin </a>
        </div>

    </div>

    <div class="credit"> Created by <span>Group 1</span> | all rights reserved </div>

</section>

<!-- footer section ends -->
</body>
</html>

<style>
.content {
	padding-bottom:0px !important;
}
#form111 {
                width:500px;
                margin:50px auto;
}
#search111{
                padding:8px 15px;
                background-color:#fff;
                border:0px solid #dbdbdb;
}
#button111 {
                position:relative;
                padding:6px 15px;
                left:-8px;
                border:2px solid #ca072b;
                background-color:#ca072b;
                color:#fafafa;
}
#button111:hover  {
                background-color:#b70929;
                color:white;
}

</style>

	<script src="js/auto-complete.js"></script>
	<link rel="stylesheet" href="css/auto-complete.css">
    <script>
        var demo1 = new autoComplete({
            selector: '#search111',
            minChars: 1,
            source: function(term, suggest){
                term = term.toLowerCase();
                <?php
						$qry2=mysqli_query($con,"select * from tbl_event");
						?>
               var string="";
                <?php $string="";
                while($ss=mysqli_fetch_array($qry2))
                {
                
                $string .="'".strtoupper($ss['event_name'])."'".",";
                //$string=implode(',',$string);
                
              
                }
                ?>
                //alert("<?php echo $string;?>");
              var choices=[<?php echo $string;?>];
                var suggestions = [];
                for (i=0;i<choices.length;i++)
                    if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                suggest(suggestions);
            }
        });
    </script>
