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
						User Details <small><a href="/users">[Back to List]</a></small>
					</div>
					<div class="panel-body">
						<div class="col-md-12">
							<table  class="table" >
								<tr>
									<td><label for="" class="col-md-12">Action</label></td>
									<td class="col-md-8">
									<!-- Edit Button -->
									<a href="/users/{{ $user->id }}/edit"><button type="submit" class="btn btn-primary">
									<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
									</button></a>
									
                                	</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Employee ID</label></td>
									<td>{{$user->id}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Name</label></td>
									<td>{{$user->name}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">E-mail</label></td>
									<td>{{$user->email}}</td>
								</tr>
								
								<tr>
									<td><label for="" class="col-md-12">Contact No.</label></td>
									<td>{{$user->contactNo}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Branch</label></td>
									<td>{{$user->branch}}</td>
								</tr>
								<tr>
									<td><label for="" class="col-md-12">Position</label></td>
									<td>{{$user->isAdmin}}</td>
								</tr>
							</table>
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->

	</div>	<!--/.main-->
@endsection