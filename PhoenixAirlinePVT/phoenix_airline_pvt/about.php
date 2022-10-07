 <style type="text/css">


   @font-face {
     font-family: Exo;
     src: url(./fonts/Exo2.0-Medium.otf);
   }
   .main{
     width: 100%;
     height: 500px;
     display: flex;
     justify-content: center;
     align-items: center;
     background-color: #0c5db9;
   }
   .profile-card{
     position: relative;
     font-family: sans-serif;
     width: 220px;
     height: 220px;
     background: #fff;
     padding: 30px;
     border-radius: 50%;
     box-shadow: 0 0 22px #3336;
     transition: .6s;
     margin: 0 25px;
   }
   .profile-card:hover{
     border-radius: 10px;
     height: 260px;
   }
   .profile-card .img{
     position: relative;
     width: 100%;
     height: 100%;
     transition: .6s;
     z-index: 99;
   }
   .profile-card:hover .img{
     transform: translateY(-60px);
   }
   .img img{
     width: 100%;
     border-radius: 50%;
     box-shadow: 0 0 22px #3336;
     transition: .6s;
   }
   .profile-card:hover img{
     border-radius: 10px;
   }
   .caption{
     text-align: center;
     transform: translateY(-80px);
     opacity: 0;
     transition: .6s;
   }
   .profile-card:hover .caption{
     opacity: 1;
   }
   .caption h3{
     font-size: 21px;
     font-family: sans-serif;
   }
   .caption p{
     font-size: 15px;
     color: #0c52a1;
     font-family: sans-serif;
     margin: 2px 0 9px 0;
   }
   .caption .social-links a{
     color: #333;
     margin-right: 15px;
     font-size: 21px;
     transition: .6s;
   }
   .social-links a:hover{
     color: #0c52a1;
   }
 </style>

 <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">OUR TEAM</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>
<div class="main">
        <div class="profile-card">
            <div class="img">
                <img src="assets/img/1.png">
            </div>
            <div class="caption">
                <h3>Chathumal Deshan</h3>
                <p>Travel Counsellor & Director</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="assets/img/2.jpeg">
            </div>
            <div class="caption">
                <h3>Kaushika Sathsarani</h3>
                <p>CEO & Travel Counsellor</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="assets/img/3.jpeg">
            </div>
            <div class="caption">
                <h3>Gishan Sachinthaka</h3>
                <p>Reservations Sales Agent</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
