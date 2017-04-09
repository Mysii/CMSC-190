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

                    <div class="row">
                        &nbsp;
                    </div>

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

                
                    @if(isset($details))
                    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
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
														    
										@foreach($search as $user)
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
												<form class="form-horizontal pull-right" role="form" style="margin-right: 15%" method="POST" action="/users/{{ $user->id }}">
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

                    @elseif(isset($message))
                    <p>{{ $message }}</p>
                    @endif

                    <?php echo $search->render(); ?>
                   
                </div>

                
                        
            </div><!--/.panel-->
        </div><!--/.col-->

            

    </div>  <!--/.main-->

@endsection