@extends('layouts.app')
@extends('layouts.sidenav')

@section('content')
		
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
							<li><a href="#tab2" data-toggle="tab">Sanla</a></li>
							<li><a href="#tab3" data-toggle="tab">Tubos</a></li>
							<li><a href="#tab4" data-toggle="tab">Renew</a></li>
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-body">
											<table  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
											    <thead>
											    <tr>
											        <th data-field="id" data-align="">Sales No</th>
											        <th data-field="name">Transaction Type</th>
											        <th data-field="name">Date</th>
											        <th data-field="name">Cash Beginning</th>
											        <th data-field="price">Sanla</th>
											        <th data-field="price">Tubos</th>
											        <th data-field="price">Renew</th>
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
											<table  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
											    <thead>
											    <tr>
											        <th data-field="id" data-align="">Sales No</th>
											        <th data-field="name">Date</th>
											        <th data-field="price">Sanla</th>
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
											<table  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
											    <thead>
											    <tr>
											        <th data-field="id" data-align="">Sales No</th>
											        <th data-field="name">Date</th>
											        <th data-field="price">Tubos</th>
											        <th data-field="price">Penalty</th>
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
											<table  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
											    <thead>
											    <tr>
											        <th data-field="id" data-align="">Sales No</th>
											        <th data-field="name">Date</th>
											        <th data-field="price">Renew</th>
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
@endsection