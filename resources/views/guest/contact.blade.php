@extends('layouts.app')

@section('content')

</br></br></br>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading" align="center">Contact Information</div>
                    
                    @if(Auth::check())
                      
                    @endif
                    

            </div>
        </div>
    </div>
</div>

@endsection