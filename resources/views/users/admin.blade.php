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
					User Records <small><a href="/users/create">[Add New User]</a></small>
				</div>

				<div class="panel-body">

							<div class="col-md-3 col-md-offset-9"> 
								<form action="/searchusers" method="POST" role="search">
								    {{ csrf_field() }}

								    <div class="input-group">
								        <input type="text" class="form-control" name="q"
								            placeholder="Search..."> <span class="input-group-btn">
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
						<li><a href="/users" >All</a></li>
						<li class="active"><a href="/admin">Administrators</a></li>
						<li><a href="/staff">Staff</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab2">
							<div class="panel-body">
							

								<table  class="table" >
									<thead>
										<tr>
											<th class="col-md-2">Action</th>
											<th>Employee ID</th>
											<th>Name</th>
											<th>Email</th>
											<th>Contact No.</th>
											<th>Branch</th>
											<th>Position</th>
										</tr>
														    
										@foreach($uadmin as $user)
											<tr>
												<td>
												<!-- View Button -->
												<a href="/users/{{ $user->id }}"><button type="submit" class="btn btn-info">
												<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
												</button></a>
												<!-- Edit Button -->
												<a href="/users/{{ $user->id }}/edit"><button type="submit" class="btn btn-primary">
												<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
												</button></a>
												<!-- Delete Button -->
												<form class="form-horizontal pull-right" role="form" style="margin-right: 10%" method="POST" action="/users/{{ $user->id }}">
													{{ csrf_field() }}
													{{ method_field('DELETE') }}

													<button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
													<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
													</button>
												</form>
												</td>
												<td>{{$user->id}}</td>
												<td>{{$user->name}}</td>
												<td>{{$user->email}}</td>
												<td>{{$user->contactNo}}</td>
												<td>{{$user->branch}}</td>
												<td>{{$user->isAdmin}}</td>
											</tr>
										@endforeach
															
									</thead>
								</table>
								<?php echo $uadmin->render(); ?>
							</div>
						</div>
					</div>
				</div>	
				</div>		
			</div><!--/.panel-->
		</div><!--/.col-->

			

	</div>	<!--/.main-->

@endsection