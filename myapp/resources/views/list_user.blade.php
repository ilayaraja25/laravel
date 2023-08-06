<html lang="en">
<head>
	<title>Display Record</title>
	<style>
	table,td, th{
		border:1px solid black;
		border-collapse :collapse;
		padding :8px;
		margin: auto;
		background-color:lightblue;

	}
	 th{
		background-color:lightskyblue;
	}


	</style>
</head>
<body>


             <table>
			 <tr>
                <th> Id</th>
			       <th> Name</th>
					<th>Address</th>
					<th>Department</th>
					<th>Phone_Number</th>
					<th>Gender</th>
					<th>Blood_group</th>
					 <th>Action</th>
					 <th>Delete</th>
					</tr>




	@foreach($staffs as $staff)


		<tr>
            <td>{{$staff->id}}</td>
		<td>{{$staff->Name}}</td>
		<td>{{$staff->Address}}</td>
	    <td>{{$staff->Department}}</td>
		<td>{{$staff->Phone_Number}}</td>
		<td>{{$staff->Gender}}</td>
		<td>{{$staff->Blood_group}}</td>
        <td><a href ="edit/{{$staff->id}}">Edit</a></td>
        <td><a href ="delete/{{$staff->id}}">Delete</a></td>
			</tr>
        @endforeach

			  </table>







</body>
</html>
