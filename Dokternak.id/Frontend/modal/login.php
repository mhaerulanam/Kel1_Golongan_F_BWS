<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokternak.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="../assets/css/style2.css"> -->
    <style>
body {
	font-family: 'Varela Round', sans-serif;
}
.modal_login {		
	color: #636363;
    width: 400px;
}
.modal_login .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal_login .modal-header {
	border-bottom: none;   
	position: relative;
	justify-content: center;
}
.modal_login h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal_login .form-control:focus {
	border-color: #e7f3f2;
}
.modal_login .form-control, .modal_login .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal_login .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal_login .modal_footer {
    height: 50px;
	background: #bdbdbd;
	border-color: #dee4e7;
	text-align: center;
	justify-content: center;
	margin: 0 -20px -20px;
	border-radius: 5px;
	font-size: 13px;
}
.modal_login .modal_footer a {
    padding: 15px;
	color: #291b10;
}		
.modal_login .avatar {
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #291b10;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal_login .avatar img {
	width: 100%;
}
.modal_login.modal-dialog {
	margin-top: 80px;
}
.modal_login .btn, .modal_login .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #291b10 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal_login .btn:hover, .modal_login .btn:focus {
	background: #291b10 !important;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>
</head>
<body>
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal_login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="assets/img/icon/Akun.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Login</h4>
				<!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
				<a href="index.php" class="close">&times;</a>
                <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
			</div>
			<div class="modal-body">
				<form action="../Frontend/modal/aksi_login.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username..." required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password..." required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="submit">Masuk</button>
					</div>
				</form>
			</div>
			<div class="modal_footer">
                <br>
				<a href="daftar.php"><span><b>Daftar</b></span></a>
			</div>
		</div>
	</div>
</div>

		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>   
</body>
</html>