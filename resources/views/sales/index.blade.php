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


				<div class="panel-body tabs">
					<ul class="nav nav-tabs">
						<li  class="active"><a href="/sales" >All</a></li>
						<li><a href="/daily" >Daily</a></li>
						<!--<li><a href="/weekly" >Weekly</a></li>-->
						<li><a href="/monthly" >Monthly</a></li>
					</ul>

					<div class="panel-body">
						
						<div class="tab-content">
							<div class="col-md-12">
								<div class="col-md-9"> 		
						    		<a href="/sales/pdf"><button class="btn btn-success">Download PDF</button></a>
							    	<!--<a href="/sales/downloadExcel"><button class="btn btn-success">Download Excel xlsx</button></a>-->
							    </div>

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

										@foreach($transactions as $transaction)
											<tr>
												<td>{{$transaction->date}}</td>
												<td id="principalLoan"><i>{{$transaction->principalLoan}}</i></td>
												<td>{{$transaction->penalty}}</td>
												<td id="tubos">{{$transaction->tubos}}</td>
												<td>{{  $transaction->getTotalAttribute()  }}</td>
											</tr>
										@endforeach
										<tr>
									

											<td><b>Total:</b></td>
											<td><b><i>{{  $transaction->sum('principalLoan')  }}</i></b></td>
											<td id="totalRenew"><b>{{  $transaction->sum('penalty')  }}</b></td>
											<td id="totalTubos"><b>{{  $transaction->sum('tubos')  }}</b></td>
											<td id="overallTotal"><b>{{  $transaction->getOverAllTotalAttribute()  }}</b></td>


										</tr>
										
								</table>

								<?php echo $transactions->render(); ?>
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