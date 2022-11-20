<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<table class="table table-bordered ml-5">
 
 <tbody >

   <tr>
   <th scope="row">Full Name</th>
     <td>{{$data->user_fullName}}</td> 
   </tr>
   <tr>
   <th scope="row">Username</th>
     <td>{{$data->user_userName}}</td>
   </tr>
   <tr>
   <th scope="row">Email address</th>
     <td>{{$data->user_email}}</td>
   </tr>
   <tr>
   <th scope="row">Gender</th>
     <td>{{$data->user_gender}}</td>
   </tr>
   <tr>
   <th scope="row">Date of Birth</th>
     <td>{{$data->user_dob}}</td>
   </tr>
   <tr>
   <th scope="row">Education Qualification</th>
     <td>{{$data->user_qualification}}</td>
   </tr>
   <tr>
   <th scope="row">Phone Number</th>
     <td>{{$data->user_phone}}</td>
   </tr>
   <tr>
   <th scope="row">Division</th>
     <td>{{$data->user_div}}</td>
   </tr>
   <tr>
   <th scope="row">District</th>
     <td>{{$data->user_dis}}</td>
   </tr>
   <tr>
   <th scope="row">Upazila/Thana</th>
     <td>{{$data->user_upa}}</td>
   </tr>
   <tr>
   <th scope="row">Full Address</th>
     <td>{{$data->user_fullAddress}}</td>
   </tr>
   <tr>
   <th scope="row">Work Experience</th>
     <td>{{$data->user_workexp}}</td>
   </tr>
   <tr>
   <th scope="row">PIN Number</th>
     <td>{{$data->user_pin}}</td>
   </tr>
   <tr>
   <th scope="row">Role/Designation</th>
     <td>{{$data->user_designation}}</td>
   </tr>
   <tr>
   <th scope="row">Employment Type</th>
     <td>{{$data->user_empType}}</td>
   </tr>


   <tr>
   <th scope="row">Joining Date</th>
   <td>{{$data->user_joinDate}}</td>
   </tr>
   <tr>
   <th scope="row">Branch Name</th>
   <td></td>
   </tr>
   <tr>
   <th scope="row">Region</th>
   <td>{{$data->user_region}}</td>
   </tr>
   <tr>
   <th scope="row">RM Name</th>
   <td>{{$data->user_rm}}</td>
   </tr>
   <tr>
   <th scope="row">DM Name</th>
   <td>{{$data->user_dm}}</td>
   </tr>
   <tr>
   <th scope="row">AM Name</th>
   <td>{{$data->user_am}}</td>
   </tr>
   <tr>
   <th scope="row">Project Name</th>
   <td></td>
   </tr>
   <tr>
   <th scope="row">Division</th>
   <td>{{$data->user_pdiv}}</td>
   </tr>
   <tr>
   <th scope="row">District</th>
   <td>{{$data->user_pdis}}</td>
   </tr>
   <tr>
   <th scope="row">Upazila/Thana</th>
   <td>{{$data->user_pupa}}</td>
   </tr>


   
 </tbody>


         </table>
         
   <a class="btn btn-primary mb-md-5 ml-3" role="button" href="logout">Log Out</a>
   <a class="btn btn-primary mb-md-5" role="button" href="edit.php?id='.$abc['user_email'].'">Edit</a> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>