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
				<div class="panel panel-default chat">
					<div class="panel-heading" id="accordion"><svg class="glyph stroked two-messages"><use xlink:href="#stroked-two-messages"></use></svg>Send SMS</div>

					<form class="form-horizontal input-md" id="" role="form" method="POST" action="/sent">
							{{ csrf_field() }}

					
					
					<div class="panel-footer">
						<div class="input-group col-md-6">
							<select id="mobile" type="text" class="form-control input-md" name="mobile" required autofocus>
									<option>Choose recipient</option>
									@foreach($transactions as $transaction)
										<option>{{$transaction->name}} - {{$transaction->contactNo}}</option>
								
									@endforeach	
									</select>
						</div>


						<div class="panel-body">
							
						</div>

						<div class="input-group">
							<input id="message" name="message" type="text" class="form-control input-md" placeholder="Type your message here..." />
							<span class="input-group-btn">
								<button class="btn btn-success btn-md" id="btn-chat">Send</button>
							</span>
						</div>
					</div>

					<!--

							<div class="input-group">
								<label for="mobileNo" class="col-md-4 control-label">Contact No.</label>

								<div class="col-md-6">
									<select id="mobileNo" type="text" class="form-control" name="mobileNo" required autofocus>
										@foreach($transactions as $transaction)
											<option>{{$transaction->contactNo}}</option>
										@endforeach
										
										
									</select>
								</div>
							</div>

						-->	

					</form>

					
				</div>





			
		</div><!--/.col-->

			

	</div>	<!--/.main-->

@endsection