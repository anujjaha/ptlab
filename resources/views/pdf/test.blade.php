<center>
	<h2>Employee List</h2>
</center>
<table border="2">
	<thead>
		<tr>
			<td>TOKEN</td>
			<td>Aadhar No</td>
			<td>Name</td>
			<td>Mobile</td>
			<td>Designation</td>
			<td>Monthly Pay</td>
			<td>OT PAY</td>
			<td>Bank Name</td>
			<td>ACC</td>
		</tr>
	</thead>
	<tbody>
	@foreach($employees as $employee)
		<tr>
			<td>{!! $employee->emp_code !!}</td>
			<td>{!! $employee->aadhar_no !!}</td>
			<td>{!! $employee->first_name !!}</td>
			<td>{!! $employee->mobile !!}</td>
			<td>{!! $employee->designation !!}</td>
			<td>{!! $employee->monthly_payment !!}</td>
			<td>{!! $employee->ot_hours_extra !!}</td>
			<td>{!! $employee->bank_name !!}</td>
			<td>{!! $employee->acc_no !!}</td>
		</tr>
	@endforeach
	</tbody>
</table>