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
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						Add Transaction <small><a href="/transactions">[Back to Records]</a></small>
					</div>

					<div class="panel-body">
						<form class="form-horizontal" id="transactionForm" role="form" method="POST" action="/transactions">
							{{ csrf_field() }}

							<div class="form-group{{ $errors->has('transactionType') ? ' has-error' : '' }}">
								<label for="transactionType" class="col-md-4 control-label">Transaction Type</label>

								<div class="col-md-6">
									<select id="transactionType" type="" class="form-control" name="transactionType" value="{{ old('transactionType') }}" required autofocus>
										<option>Sanla</option>
										<option>Tubos</option>
										<option>Renew</option>
									</select>

									@if ($errors->has('transactionType'))
									<span class="help-block">
										<strong>{{ $errors->first('transactionType') }}</strong>
									</span>
									@endif
								</div>
							</div>


							<div class="form-group{{ $errors->has('branch') ? ' has-error' : '' }}">
								<label for="branch" class="col-md-4 control-label">Branch</label>

								<div class="col-md-6">
									<select id="branch" type="" class="form-control" name="branch" value="{{ old('branch') }}" required autofocus>
										<!-- Muntinlupa Branches -->
										<option>Muntinlupa</option>
										<option>Starmall Alabang</option>
										<option>Liana's</option>
										<!-- Taguig Branches -->
										<option>Lower Bicutan</option>
										<option>Upper Bicutan</option>
										<option>Hagonoy</option>
										<option>Signal</option>
										<option>Taguig Bayan</option>
										<!-- Makati Branches -->
										<option>Guadalupe</option>
										<!-- Pasig Branches -->
										<option>Pasig 1</option>
										<option>Pasig 2</option>
										<option>Pasig 3</option>
										<option>Pasig 4</option>
										<option>Rosario</option>
										<!-- Antipolo Branches -->
										<option>Antipolo 1</option>
										<option>Antipolo 2</option>
										<option>Antipolo 3</option>
										<option>Cogeo Jaybee</option>
										<option>Cogeo Kris</option>
										<!-- Other Branches -->
										<option>Masinag</option>
										<option>Angono</option>
										<option>Binangonan</option>
										<option>Tanay 1</option>
										<option>Tanay 2</option>
									</select>

									@if ($errors->has('branch'))
									<span class="help-block">
										<strong>{{ $errors->first('branch') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							<div class="form-group{{ $errors->has('transactionCode') ? ' has-error' : '' }}">
								<label for="transactionCode" class="col-md-4 control-label">Transaction Code</label>
								
								<div class="col-md-6">
									<input id="transactionCode" type="text" class="form-control" name="transactionCode" value="{{ old('transactionCode') }}" required autofocus>

									@if ($errors->has('transactionCode'))
									<span class="help-block">
										<strong>{{ $errors->first('transactionCode') }}</strong>
									</span>
									@endif
								</div>
							</div>
							
							
							<div class="form-group{{ $errors->has('clientName') ? ' has-error' : '' }}">
								<label for="clientName" class="col-md-4 control-label">Client Name</label>
								
								<div class="col-md-6">
									<input id="clientName" type="text" class="form-control" name="clientName" value="{{ old('clientName') }}" required autofocus>

									@if ($errors->has('clientName'))
									<span class="help-block">
										<strong>{{ $errors->first('clientName') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('unit') ? ' has-error' : '' }}">
								<label for="unit" class="col-md-4 control-label">Unit</label>
								
								<div class="col-md-6">
									<input id="unit" type="text" class="form-control" name="unit" value="{{ old('unit') }}" required autofocus>

									@if ($errors->has('unit'))
									<span class="help-block">
										<strong>{{ $errors->first('unit') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('serialNo') ? ' has-error' : '' }}">
								<label for="serialNo" class="col-md-4 control-label">Serial No.</label>
								
								<div class="col-md-6">
									<input id="serialNo" type="text" class="form-control" name="serialNo" value="{{ old('serialNo') }}" required autofocus>

									@if ($errors->has('serialNo'))
									<span class="help-block">
										<strong>{{ $errors->first('serialNo') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('principalLoan') ? ' has-error' : '' }}">
								<label for="principalLoan" class="col-md-4 control-label">Principal Loan</label>
								
								<div class="col-md-6">
									<input onChange="calculateTubos()" id="principalLoan" type="number" class="form-control" name="principalLoan" value="{{ old('principalLoan') }}" required autofocus>

									@if ($errors->has('principalLoan'))
									<span class="help-block">
										<strong>{{ $errors->first('principalLoan') }}</strong>
									</span>
									@endif

									
								</div>
							</div>

							<div class="form-group{{ $errors->has('tubos') ? ' has-error' : '' }}">
								<label for="tubos" class="col-md-4 control-label">Tubos</label>
								
								<div class="col-md-6">
									<input id="tubos" type="number" class="form-control" name="tubos" value=""  autofocus>

									@if ($errors->has('tubos'))
									<span class="help-block">
										<strong>{{ $errors->first('tubos') }}</strong>
									</span>
									@endif

								</div>
							</div>

							<div class="form-group{{ $errors->has('penalty') ? ' has-error' : '' }}">
								<label for="penalty" class="col-md-4 control-label">Penalty</label>
								
								<div class="col-md-6">
									<input id="penalty" type="number" class="form-control" name="penalty" value="{{ old('penalty') }}"  autofocus>

									@if ($errors->has('penalty'))
									<span class="help-block">
										<strong>{{ $errors->first('penalty') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
								<label for="date" class="col-md-4 control-label">Date</label>
								
								<div class="col-md-6">
									<input onChange="calculateDueDate()" id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required autofocus>

									@if ($errors->has('date'))
									<span class="help-block">
										<strong>{{ $errors->first('date') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('dueDate') ? ' has-error' : '' }}">
								<label for="dueDate" class="col-md-4 control-label">Due Date</label>
								
								<div class="col-md-6">
									<input id="dueDate" type="text" class="form-control" name="dueDate" value="{{ old('dueDate') }}"  autofocus>

									@if ($errors->has('dueDate'))
									<span class="help-block">
										<strong>{{ $errors->first('dueDate') }}</strong>
									</span>
									@endif
								</div>
							</div>

							<div class="form-group{{ $errors->has('staffAssigned') ? ' has-error' : '' }}">
								<label for="staffAssigned" class="col-md-4 control-label">Staff Assigned</label>
								
								<div class="col-md-6">
									<input id="staffAssigned" type="text" class="form-control" name="staffAssigned" value="{{ old('staffAssigned') }}" required autofocus>

									@if ($errors->has('staffAssigned'))
									<span class="help-block">
										<strong>{{ $errors->first('staffAssigned') }}</strong>
									</span>
									@endif
								</div>
							</div>

						
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<input type="submit" class="btn btn-primary pull-right">
								</div>
							</div>
						</form>
					</div>
						
				</div><!--/.panel-->
			</div>
		</div><!--/.col-->

	</div>	<!--/.main-->

@endsection