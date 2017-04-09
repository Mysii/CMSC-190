<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sales and Inventory Management System</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Sales and Inventory Management System</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li ><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Home</a></li>
			<li><a href="adminstaff.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-male-user"></use></svg> Admin and Staff</a></li>
			<li><a href="transaction.html"><svg class="glyph stroked app window with content"><use xlink:href="#stroked-app-window-with-content"/></svg></use></svg> Transaction</a></li>
			<li><a href="inventory.html"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg> Inventory</a></li>
			<li class="active"><a href="sales.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Sales</a></li>
			<li><a href="sendnotif.html"><svg class="glyph stroked email"><use xlink:href="#stroked-email"/></svg> Send  Notification</a></li>

			<li role="presentation" class="divider"></li>
			<li><a href="about.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>About</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sales</h1>
			</div>
		</div><!--/.row-->
		
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">All</a></li>
							<li><a href="#tab2" data-toggle="tab">Pawn</a></li>
							<li><a href="#tab3" data-toggle="tab">Redeem</a></li>
							<li><a href="#tab4" data-toggle="tab">Renew</a></li>
							<li><a href="#tab5" data-toggle="tab">Penalty</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
								<h4>All</h4>
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body">
											<table data-toggle="table" data-url="" >
											    <thead>
											    <tr>
											        <th data-field="id" data-align="">Sales ID</th>
											        <th data-field="name">Transaction Type</th>
											        <th data-field="name">Date</th>
											        <th data-field="name">Cash Beginning</th>
											        <th data-field="price">Tubos</th>
											        <th data-field="name">Sales</th>
											        <th data-field="price">Sanla</th>
											        <th data-field="price">Expenses</th>
											        <th data-field="price">Cash End</th>
											    </tr>
											    </thead>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab2">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body">
											<table data-toggle="table" data-url="" >
											    <thead>
											    <tr>
											        <th data-field="id" data-align="">Sales ID</th>
											        <<th data-field="name">Transaction Type</th>
											        <th data-field="name">Date</th>
											        <th data-field="name">Cash Beginning</th>
											        <th data-field="price">Tubos</th>
											        <th data-field="name">Sales</th>
											        <th data-field="price">Sanla</th>
											        <th data-field="price">Expenses</th>
											        <th data-field="price">Cash End</th>
											    </tr>
											    </thead>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab3">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body">
											<table data-toggle="table" data-url="" >
											    <thead>
											    <tr>
											        <th data-field="id" data-align="">Sales ID</th>
											        <th data-field="name">Transaction Type</th>
											        <th data-field="name">Date</th>
											        <th data-field="name">Cash Beginning</th>
											        <th data-field="price">Tubos</th>
											        <th data-field="name">Sales</th>
											        <th data-field="price">Sanla</th>
											        <th data-field="price">Expenses</th>
											        <th data-field="price">Cash End</th>
											    </tr>
											    </thead>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab4">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body">
											<table data-toggle="table" data-url="tables/data2.json" >
											    <thead>
											    <tr>
											        <th data-field="id" data-align="right">Item ID</th>
											        <th data-field="name">Transaction Type</th>
											        <th data-field="name">Date</th>
											        <th data-field="name">Cash Beginning</th>
											        <th data-field="price">Tubos</th>
											        <th data-field="name">Sales</th>
											        <th data-field="price">Sanla</th>
											        <th data-field="price">Expenses</th>
											        <th data-field="price">Cash End</th>
											    </tr>
											    </thead>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab5">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body">
											<table data-toggle="table" data-url="tables/data2.json" >
											    <thead>
											    <tr>
											        <th data-field="id" data-align="right">Item ID</th>
											        <th data-field="name">Transaction Type</th>
											        <th data-field="name">Date</th>
											        <th data-field="name">Cash Beginning</th>
											        <th data-field="price">Tubos</th>
											        <th data-field="name">Sales</th>
											        <th data-field="price">Sanla</th>
											        <th data-field="price">Expenses</th>
											        <th data-field="price">Cash End</th>
											    </tr>
											    </thead>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
		
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/bootstrap-table.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
