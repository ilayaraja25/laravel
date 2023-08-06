<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Details</title>
	 <style>
        body {
            font-family: Arial, sans-serif;
        }

        h4 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: lightblue;
        }

        form table {
            width: 100%;
        }

        form table td {
            padding: 10px;
            text-align: left;
        }

        form table td label {
            display: block;
        }

        form table td input[type="text"],
        form table td input[type="date"],
        form table td select,
        form table td textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form table td input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        form table td input[type="submit"],
        form table td a {
            margin-top: 10px;
            display: inline-block;
            padding: 8px 20px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form table td a {
            margin-left: 0px;
            background-color: #ccc;
        }

        form table td input[type="submit"]:hover,
        form table td a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h4>Staff Details</h4>

    <form method="post" action="update" >
    <table cellspacing="20">
<tr>
<td>Name</td>
<td><input type="text" name="Name" placeholder="Enter your name" ></td>
</tr>

<tr>
<td>
Address</td>
<td><textarea name="Address" rows="5" cols="40"placeholder="Enter your Address"></textarea></td>
</tr>
 <tr><td><label >Department</label></td>
 <td> <select name="Department" id="Department">
<option value="select">select</option>
<option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
<option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
<option value="ELECTRICAL AND ELECTRONICS">ELECTRICAL AND ELECTRONICS</option>
<option value="ROBOTICS">ROBOTICS</option></select></td></tr>
<tr><td>Phone Number</td><td><input type="number" name="Phone_Number" placeholder="Enter your number" ></td></tr>
<tr>
<td>Gender</td>
<td>
<input type="radio" name="Gender" value="female">Female
<input type="radio" name="Gender" value="male">Male
<input type="radio" name="Gender" value="other">Other</td></tr>
<tr>
  <td><label for="blood">Blood Group</label></td>
  <td>
 <select id="blood" name="Blood_group" onmouseover="showBloodGroups()">
    <option value="select">Select</option>
    <option value="O+ve">O+ve</option>
    <option value="O-ve">O-ve</option>
    <option value="other">Other</option>
    </select>
    </td>
    </tr>
<tr>
<td>  </td>
<tr>
    <td><input type="hidden" name="_token" value="<?=csrf_token()?>"> </td>
</tr>
<tr>
@csrf

<td><input type="submit">
<br></td></tr>

    </form>
	 <script>
        function showBloodGroups() {
            const bloodGroupSelect = document.getElementById('blood');
            bloodGroupSelect.size = bloodGroupSelect.options.length;
        }

        // Reset the size when the mouse leaves the field
        document.getElementById('blood').onmouseout = function() {
            this.size = 1;
        };
    </script>
</body>
</html>
