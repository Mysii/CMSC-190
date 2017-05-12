<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 $beforedt = $dt->subWeek();
					<table  class="table">
						<thead>
							<tr>
								<th>Branch</th>
								<th>Transaction Code</th>
								<th>Transaction Type</th>
								<th>Client Name</th>
								<th>Contact No.</th>
								<th>Unit</th>
								<th>Serial No.</th>
								<th>Principal Loan</th>
								<th>"Tubos"</th>
								<th>Penalty</th>
								<th>Date</th>
								<th>Due Date</th>
								<th>Staff Assigned</th>
								</tr>
							</thead>

							@foreach($transactions as $transaction)
								<tr>
									
									<td>{{$transaction->branch}}</td>
									<td>{{$transaction->transactionCode}}</td>
									<td>{{$transaction->transactionType}}</td>
									<td>{{$transaction->clientName}}</td>
									<td>{{$transaction->contactNo}}</td>
									<td>{{$transaction->unit}}</td>
									<td>{{$transaction->serialNo}}</td>
									<td>{{$transaction->principalLoan}}</td>
									<td>{{$transaction->tubos}}</td>
									<td>{{$transaction->penalty}}</td>
									<td>{{$transaction->date}}</td>
									<td>{{$transaction->dueDate}}</td>
									<td>{{$transaction->staffAssigned}}</td>
								</tr>
							@endforeach
							
					</table>
</body>
</html>