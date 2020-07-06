<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form method="post" action="{{route('company')}}">
		{{ csrf_field() }}		
		<label>Company ID NO</label>
		<input type="number" name="id">
		<input type="submit" name="">
		
	</form>
	
	
	@if (!$status)
		<p>no data found</p>
		<form method="post">
		<label>Company registration Number</label> 
		<input type="" name="" >
<br>
		<label>Name of Organisation</label> 
		<input type="" name="">
<br>
		<label>Contact Number</label> 
		<input type="" name="">
<br>
		<label>Address Line 1</label> 
		<input type="" name="">
<br>
		<label>Address Line 2</label> 
		<input type="" name="">
<br>
		<label>City</label> 
		<input type="" name="">
<br>
		<label>Postal Code</label> 
		<input type="" name="">
<br>
		<label>Logo of clinic</label> 
		<input type="" name="">
<br>
		<label>Add Director Details</label> 
		<input type="" name="">

	</form>
	@else
	<form method="post">
		<label>Company registration Number</label> 
		<input type="" name="" value="{{$data['company_number']}}">
<br>
		<label>Name of Organisation</label> 
		<input type="" name="" value="{{$data['company_name']}}">
<br>
		<label>Contact Number</label> 
		<input type="" name="" >
<br>
		<label>Address Line 1</label> 
		<input type="" name="" value="{{$data['registered_office_address']['address_line_1']}}">
<br>
		<label>Address Line 2</label> 
		<input type="" name="" value="{{$data['registered_office_address']['address_line_2']}}">
<br>
		<label>City</label> 
		<input type="" name="" value="{{$data['registered_office_address']['locality']}}">
<br>
		<label>Postal Code</label> 
		<input type="" name="" value="{{$data['registered_office_address']['postal_code']}}">
<br>
		<label>Logo of clinic</label> 
		<input type="" name="">
<br>		
		<label>Add Director Details</label> <br>
		@foreach($directors['items'] as $row)
			@if($row['officer_role']=='director')
				
				<input type="" name="" value="{{$row['name']}}"><br>
			@endif
		@endforeach
	</form>

	
			
		
	
	@endif
	
	
	
</body>
</html>