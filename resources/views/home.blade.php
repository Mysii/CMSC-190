@extends('layouts.app')

@extends('layouts.sidenav')

@section('content')
   
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 

        <div class="row">
            &nbsp;
        </div>          
        
        <div class="col-md-12"> 
            <div class="panel panel-default">
                <div class="panel-heading">
                    Home
                </div>


                <div class="panel-body">
                   <h1 align="center">Welcome to J & M Pawnshop!</h1>

                   <div class="row">
                        &nbsp;
                    </div> 

                   <div class="col-md-6 col-md-offset-3">
                       <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}

                            <div class="input-group">
                                <input type="text" class="form-control" name="q" placeholder="Search..." autofocus>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        &nbsp;
                    </div> 

                    <div class="row">
                        &nbsp;
                    </div>

                     <div class="row">
                        <div class="col-lg-3" align="center">
                          <a href="/users">
                           
                               <h2>Admin and Staff</h2>
                            
                          </a>
                        </div><!-- /.col-lg-4 -->

                        <div class="col-lg-3" align="center">
                          <a href="/transactions">
                            
                               <h2>Transactions</h2>
                            
                          </a>
                        </div><!-- /.col-lg-4 -->

                        <div class="col-lg-3" align="center">
                          <a href="/inventory">
                           
                               <h2>Inventory</h2>
                            
                          </a>
                        </div><!-- /.col-lg-4 -->

                        <div class="col-lg-3" align="center">
                          <a href="/sales">
                            
                               <h2>Sales</h2>
                            
                          </a>
                        </div><!-- /.col-lg-4 -->
                      </div><!-- /.row -->
                </div>

                
                        
            </div><!--/.panel-->
        </div><!--/.col-->

        
    </div>  <!--/.main-->
@endsection
