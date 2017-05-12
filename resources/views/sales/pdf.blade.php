<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center">
		<b>J & M Pawnshop</b>
	</h1>
	<h3><b>Sales Records</b></h3>
					<table  class="table">
						<thead>
							<tr>
				 				<th>Date</th>
								<th>Sanla</th>
								<th>Renew</th>
								<th>Tubos</th>
								<th>Total Income</th>
							</tr>
						</thead>

							@foreach($transactions as $transaction)
							<tr>
								<td>{{$transaction->date}}</td>
										<td id="principalLoan"><i>{{$transaction->principalLoan}}</i></td>
										<td>{{$transaction->penalty}}</td>
										<td id="tubos">{{$transaction->tubos}}</td>
										<td>{{  $transaction->getTotalAttribute()  }}</td>
									</tr>
								@endforeach
								<tr>
									

									<td><b>Total:</b></td>
									<td><b><i>{{  $transaction->sum('principalLoan')  }}</i></b></td>
									<td id="totalRenew"><b>{{  $transaction->sum('penalty')  }}</b></td>
									<td id="totalTubos"><b>{{  $transaction->sum('tubos')  }}</b></td>
									<td id="overallTotal"><b>{{  $transaction->getOverAllTotalAttribute() }} </b></td>


							</tr>
										
						</table>
</body>
</html>