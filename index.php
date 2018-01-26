<!DOCTYPE html>
<html>
<head>
	<title>Flight Booking</title>
	<!-- Responsive Hape -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Travel Packages Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- END -->

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- Default-JavaScript-File -->
	 <script type="text/javascript" src="js/jquery.min.js"></script>

	<!-- Web-Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
</head>
<body>

	<h1>Indonesian Air Flight Booking</h1>

	<div class="container">

		<div class="tab">

			<div id="flight" style="display: block; width: 100%; margin: 0px;">
				<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#flight').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion
							width: 'auto', //auto or any width like 600px
							fit: true,   // 100% fit in a container
							closed: 'accordion', // Start closed if in accordion view
							activate: function(event) { // Callback function if tab is switched
								var $tab = $(this);
								var $info = $('#tabInfo');
								var $name = $('span', $info);
								$name.text($tab.text());
								$info.show();
							}
						});

						$('#verticalTab').easyResponsiveTabs({
							type: 'vertical',
							width: 'auto',
							fit: true
						});
					});
				</script>

				<div class="tabs">

					<div class="tab-left">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item"><i class="fa fa-plane" aria-hidden="true"></i>Flights</li>
						</ul>
					</div>

					<div class="tab-right">
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content">
								<div class="w3l-sign-in">
									<form action="#" method="post" class="agile_form">
										<input type="text" placeholder="Your Name" name="name" class="name agileits" required="" id="nama" />
										<input placeholder="Depart" class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" id="berangkat" />
										<input placeholder="Return" class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" id="sampai" />
										<div class="list_agileits_w3layouts">
											<div class="section_class_agileits sec-left" id="from">
											  <select>
												<option value="0">From</option>
												<option value="1">city1</option>
												<option value="2">city2</option>
												<option value="3">city3</option>
												<option value="4">city4</option>
											  </select>
											</div>
											<div class="section_class_agileits sec-left" id="to">
											  <select>
												<option value="0">To</option>
												<option value="1">city1</option>
												<option value="2">city2</option>
												<option value="3">city3</option>
												<option value="4">city4</option>
											  </select>
											</div>
											<div class="section_class_agileits sec-right"  id="kelas">
											  <select>
												<option value="0">Select class</option>
												<option value="1">Any</option>
												<option value="3">Economy Class</option>
												<option value="2"> Business Class</option>
												<option value="1">First Class</option>
											  </select>
											</div>	
											<div class="clear"></div>
										</div>	
										<div class="list_agileits_w3layouts">
											<div class="section_class_agileits sec-left" id="penumpang">
											 <select>
												<option value="0">Adults</option>
												<option value="1">0</option>
												<option value="2">1</option>
												<option value="3"> 2</option>
												<option value="4">3 or 3+</option>
											 </select>
											</div>	
											<div class="section_class_agileits sec-right" id="child">
											  <select>
												<option value="0">Children</option>
												<option value="1">0</option>
												<option value="2">1</option>
												<option value="3"> 2</option>
												<option value="4">3 or 3+</option>
											 </select>
											</div>
											<div class="clear"></div>
										</div>				
										<div class="submit">
										  <input type="submit" value="search">
										</div>   
									</form>	
								</div>
							</div>

						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		
	</div>
	<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3,#datepicker4,#datepicker5,#datepicker6,#datepicker7" ).datepicker();
				});
		</script>

</body>
</html>