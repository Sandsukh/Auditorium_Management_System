<!DOCTYPE html>
<html lang="en">
</head>
<body>
<?php
include('header.php');
?>
    


<!-- home section starts  -->

<section class="home" id="home">

    

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
		<?php 
					$qry4=mysqli_query($con,"SELECT * FROM tbl_event ORDER BY rand()");
				
					while($nm=mysqli_fetch_array($qry4))
					{
					?>
					<div class="swiper-slide"><a href="about.php?id=<?php echo $nm['event_id'];?>"><img src="<?php echo $nm['image'];?>" alt=""></a></div>
					<?php
					}
					?>
            
        </div>
    </div>
	
	<div class="content1">
        <h3>Welcome to<span> Dharmaloka Hall </span></h3>
        <a href="#footer" class="btn">Contact Us</a>
    </div>

</section>

<!-- home section ends -->

<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fa fa-film"></i>
            <h3>Event management services</h3>
            <p>Services to help organize and manage events held at Dharmaloka Hall. This includes assistance with planning, logistics, and technical support.</p>
        </div>

        <div class="box">
            <i class="fa fa-users"></i>
            <h3>Lecture facilities</h3>
            <p>Spacious and modern lecture facility with state-of-the-art audiovisual equipment to support academic lectures, conferences, and seminars</p>
        </div>

        <div class="box">
            <i class="fas fa-music"></i>
            <h3>Entertainment</h3>
            <p>Offers top-notch entertainment services for hosting cultural events, concerts, and performances.</p>
        </div>

        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Catering services</h3>
            <p> Offers catering services for events held on its premises, including coffee breaks, lunches, and dinners.</p>
        </div>

        <div class="box">
            <i class="fa fa-car"></i>
            <h3>Parking facilities</h3>
            <p>Has a dedicated parking area for the convenience of visitors attending events.</p>
        </div>

        <div class="box">
            <i class="fa fa-wheelchair"></i>
            <h3>Accessibility features</h3>
            <p> Hall is designed to be accessible to people with disabilities, with features such as wheelchair ramps, accessible restrooms, and designated parking spaces.</p>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"><span>about</span> us </h1>

<div class="row">

    <div class="image">
        <img src="images/aboutus-img.jpg" alt="">
    </div>

    <div class="content1">
        <h3>Dhramaloka Hall, Your Destination for Memorable Events</h3>
        <p>Dharmaloka Hall is a hall located at the University of Kelaniya in Sri Lanka. It is named after the Buddhist scholar monk, Ven. Walpola Rahula Thero, who was a former professor at the university</p>
        <p>The hall is a popular venue for academic and cultural events, and is frequently used for conferences, seminars, and theater functions. It is known for its spacious interior, modern facilities, and state-of-the-art audiovisual equipment, making it a favorite among organizers of events at the university</p>
        <a href="#footer" class="btn">Contact Us</a>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="images/G-1.jpg" alt="">
            <h3 class="title">Photos and Events</h3>
            <div class="icons">
                <a class="fas fa-heart"></a>
                <a class="fas fa-share"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/G-2.jpg" alt="">
            <h3 class="title">Photos and Events</h3>
            <div class="icons">
                <a class="fas fa-heart"></a>
                <a class="fas fa-share"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/G-3.jpg" alt="">
            <h3 class="title">Photos and Events</h3>
            <div class="icons">
                <a class="fas fa-heart"></a>
                <a class="fas fa-share"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/G-4.jpg" alt="">
            <h3 class="title">Photos and Events</h3>
            <div class="icons">
                <a class="fas fa-heart"></a>
                <a class="fas fa-share"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/G-5.jpg" alt="">
            <h3 class="title">Photos and Events</h3>
            <div class="icons">
                <a class="fas fa-heart"></a>
                <a class="fas fa-share"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/G-6.jpg" alt="">
            <h3 class="title">Photos and Events</h3>
            <div class="icons">
                <a class="fas fa-heart"></a>
                <a class="fas fa-share"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/G-7.jpg" alt="">
            <h3 class="title">Photos and Events</h3>
            <div class="icons">
               <a class="fas fa-heart"></a>
                <a class="fas fa-share"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/G-8.jpg" alt="">
            <h3 class="title">Photos and Events</h3>
            <div class="icons">
                <a class="fas fa-heart"></a>
                <a class="fas fa-share"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/G-9.jpg" alt="">
            <h3 class="title">Photos and Events</h3>
            <div class="icons">
                <a class="fas fa-heart"></a>
                <a class="fas fa-share"></a>
                <a class="fas fa-eye"></a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->


<!-- review section starts  -->

<section class="reivew" id="review"> 
    
    <h1 class="heading"><span>Reviews</span></h1>

    <div class="review-slider swiper-container">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/user.jpg" alt="">
                    <div class="user-info">
                        <h3>Sachin Jayasekara</h3>
                        
                    </div>
                </div>
                <p>This is the old convocation hall of the University of Kelaniya. Now it becomes an auditorium for all the big theater functions of students. The hall is fully Air Conditioned and seating capacity is around 1000. The stage is huge and well maintained.</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/user.jpg" alt="">
                    <div class="user-info">
                        <h3>Chirantha Jananath</h3>
                        
                    </div>
                </div>
                <p>Dharmaloka Hall is the main bigger hall in the university. All kind of main celebrations are currently happening at this hall without convocations. It is fully air conditioned(AC) hall and it is located in the faculty of Science university of Kelaniya</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/user.jpg" alt="">
                    <div class="user-info">
                        <h3>View Lanka</h3>
                        
                    </div>
                </div>
                <p>This place is the hart of the university. It is located at side of the main ground. Very easy to find. The hall has large capacity. And it has a big stage area. Sound system is perfect. All the time this place is busy due to functions. Staff are very helpful. You cannot enter without permission.</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/user.jpg" alt="">
                    <div class="user-info">
                        <h3>Dilantha</h3>
                        
                    </div>
                </div>
                <p>Main Hall of the University of kelaniya</p>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->



<!-- theme toggler  -->

<div class="theme-toggler">

    <div class="toggle-btn">
    </div>

</div>
<!-- footer  -->
<?php include('footer.php');?>
 

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>