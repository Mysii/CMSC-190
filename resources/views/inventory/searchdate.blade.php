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
                    Inventory <small><a href=""></a></small>
                </div>
                <div class="panel-body">
                    
                    <div class="col-md-6">      
                        <a href="/inventory/pdf"><button class="btn btn-success">Download PDF</button></a>
                        <a href="/inventory/downloadExcel"><button class="btn btn-success">Download Excel xlsx</button></a>
                    </div>

                    <div class="col-md-3"> 
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}

                            <div class="input-group">
                                <input type="text" class="form-control" name="q" placeholder="Search..."> 
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"> 
                        <form action="/searchdate" method="POST" role="search">
                            {{ csrf_field() }}

                            <div class="input-group">
                                <input type="date" class="form-control" name="d" placeholder="Search..."> 
                                <span class="input-group-btn">
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
                        <li class="active"><a href="/inventory" >All</a></li>
                        <li><a href="/remata" >Remata</a></li>
                        <li><a href="/mareremata" >Mareremata</a></li>
                    </ul>

                    <div class="panel-body">
                        
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1"> 

                            @if(isset($details))
                            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                                <table  class="table">
                                    <thead>
                                        <tr>
                                            <th class="col-md-2">Action</th>
                                            <th>Branch</th>
                                            <th>Transaction Code</th>
                                            <th>Transaction Type</th>
                                            <th>Client Name</th>
                                            <!--
                                            <th>Unit</th>
                                            <th>Serial No.</th>
                                            <th>Principal Loan</th>
                                            <th>"Tubos"</th>
                                            <th>Penalty</th>
                                            -->
                                            <th>Date</th>
                                        
                                            <th>Due Date</th>
                                            <th>Staff Assigned</th>
                                        </tr>
                                        </thead>

                                        @foreach($transactions as $transaction)
                                            <tr>
                                                <td>
                                                <!-- View Button -->
                                                <a href="/transactions/{{ $transaction->id }}"><button type="submit" class="btn btn-info">
                                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                                </button></a>
                                                <!-- Edit Button -->
                                                <a href="/transactions/{{ $transaction->id }}/edit"><button type="submit" class="btn btn-primary">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                </button></a>
                                                <!-- Delete Button -->
                                                <form class="form-horizontal pull-right" role="form" style="margin-right:15%" method="POST" action="/transactions/{{ $transaction->id }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                    </button>
                                                </form>
                                                </td>
                                                <td>{{$transaction->branch}}</td>
                                                <td>{{$transaction->transactionCode}}</td>
                                                <td>{{$transaction->transactionType}}</td>
                                                <td>{{$transaction->clientName}}</td>
                                                <!--
                                                <td>{{$transaction->unit}}</td>
                                                <td>{{$transaction->serialNo}}</td>
                                                <td>{{$transaction->principalLoan}}</td>
                                                <td>{{$transaction->tubos}}</td>
                                                <td>{{$transaction->penalty}}</td>
                                                -->
                                                <td>{{$transaction->date}}</td>
                                                <td>{{$transaction->dueDate}}</td>
                                                <td>{{$transaction->staffAssigned}}</td>
                                            </tr>
                                        @endforeach
                                        
                                </table>

                                @elseif(isset($message))
                                <p>{{ $message }}</p>
                                @endif
                                
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

            

    </div>  <!--/.main-->

@endsection