<style>
	.logo {
  margin: 10px 50px;
  float: left;
  color: #fff;
  font-size: 35px;
  text-transform: capitalize;
}
.logo::after {
  position: fixed;
  top: 50%;
  left: 50%;
}

.topic{
  margin: 10px;
  font-size: 24px;
  font-weight: bold;
  text-align:center ;
  color: white;

}
.col-md-2{
    position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}
</style>

<nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
  				<img src="assets/img/logo.png" style="width:150px; height: 50px; "/>
  			</div>
  		</div>
      <div class="topic">
        <large><b>Phoenix airline Flight Booking</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>