@extends('layouts.app')
@extends('layouts.sidenav')
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<!--
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!/.row-->

		<div class="row">
            &nbsp;
        </div>
		
		<div class="col-md-12"> 
			<div class="panel panel-default">
				<div class="panel-heading">
					Sales (Cash Flow) <small><a href=""></a></small>
				</div>
				<div class="panel-body">
					
			    	<div class="col-md-6"> 		
			    		<a href="/sales/pdf"><button class="btn btn-success">Download PDF</button></a>
				    	<a href="/sales/downloadExcel"><button class="btn btn-success">Download Excel xlsx</button></a>
				    </div>

				    <div class="col-md-3"> 
					    <form action="/search" method="POST" role="search">
							{{ csrf_field() }}

							<div class="input-group">
								<input type="text" class="form-control" name="q" placeholder="Search..."> 
								<span class="input-group-btn">
									<button type="submit" class="btn btn-default">
									    <span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
							</div>
						</form>
					</div>
					<div class="col-md-3"> 
					    <form action="/searchdate" method="POST" role="search">
							{{ csrf_field() }}

							<div class="input-group">
								<input type="date" class="form-control" name="d" placeholder="Search..."> 
								<span class="input-group-btn">
									<button type="submit" class="btn btn-default">
									    <span class="glyphicon glyphicon-search"></span>
									</button>
								</span>
							</div>
						</form>
					</div>
					
				    
				</div>

				<div class="panel-body tabs">
					<ul class="nav nav-tabs">
						<li><a href="/sales" >All</a></li>
						<li ><a href="/daily" >Daily</a></li>
						<li><a href="/weekly" >Weekly</a></li>
						<li  class="active"><a href="/monthly" >Monthly</a></li>
					</ul>

					<div class="panel-body">
						
						<div class="tab-content">
							<div class="col-md-3"> 
							    <form action="/monthly" method="POST" role="search">
									{{ csrf_field() }}

									<div class="input-group">
										<select id="d" mtype="number" class="form-control input-md" name="dm" required autofocus>
											<option></option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
								
										</select>
										<span class="input-group-btn">
											<button type="submit" class="btn btn-default">
											    <span class="glyphicon glyphicon-search"></span>
											</button>
										</span>
									</div>
								</form>
							</div>
							<div class="tab-pane fade in active" id="tab1">	
								<table  class="table">
									<thead>
										<tr>
											<th>Date</th>
											<th>Sanla</th>
											<th>Renew</th>
											<th>Tubos</th>
											<th>Total Income</th>
										</tr>
										</thead>

										@foreach($searchmonth as $transaction)
											<tr>
												<td>{{$transaction->date}}</td>
												<td id="principalLoan">{{$transaction->principalLoan}}</td>
												<td></td>
												<td id="tubos">{{$transaction->tubos}}</td>
												<td></td>
											</tr>
										@endforeach
										<tr>
											<td></td>
											<td id="totalSanla"></td>
											<td id="totalRenew"></td>
											<td id="totalTubos"></td>
											<td id="overallTotal"></td>
										</tr>
										
								</table>

								<?php echo $searchmonth->render(); ?>
							</div>
						</div>

						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab2">	
								
							</div>
						</div>
					</div>
				</div>

				
						
			</div><!--/.panel-->
		</div><!--/.col-->

			

	</div>	<!--/.main-->

@endsection