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
<!--
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->

		<div class="row">
            &nbsp;
        </div>
		
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Transaction Details <small><a href="/transactions">[Back to Records]</a></small>
					</div>
					<div class="panel-body">
						<div class="col-md-12">
							<table  class="table" >
								<tr>
									<td><label for="" class="col-md-12">Action</label></td>
									<td class="col-md-8">
									<!-- Edit Button -->
									<a href="/transactions/{{ $transaction->id }}/edit"><button type="submit" class="btn btn-primary">
									<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
									</button></a>
                                	</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Branch</label></td>
									<td>{{$transaction->branch}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Transaction Code</label></td>
									<td>{{$transaction->transactionCode}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Transaction Type</label></td>
									<td>{{$transaction->transactionType}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Client Name</label></td>
									<td>{{$transaction->clientName}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Contact No.</label></td>
									<td>{{$transaction->contactNo}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Unit</label></td>
									<td>{{$transaction->unit}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Serial No.</label></td>
									<td>{{$transaction->serialNo}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Principal Loan</label></td>
									<td>{{$transaction->principalLoan}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Tubos</label></td>
									<td>{{$transaction->tubos}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Penalty</label></td>
									<td>{{$transaction->penalty}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Date</label></td>
									<td>{{$transaction->date}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Due Date</label></td>
									<td>{{$transaction->dueDate}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Staff Assigned</label></td>
									<td>{{$transaction->staffAssigned}}</td>
								</tr>
							</table>
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->

	</div>	<!--/.main-->
@endsection