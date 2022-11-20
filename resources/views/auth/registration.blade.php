<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "sdp";

$conn= mysqli_connect($db_server,$db_user,$db_pass,$db_name);

if(!$conn){
  die("Connection Failed!: ".mysqli_connect_error());
}
$country = "SELECT * FROM divisions  ORDER BY name";
$county_qry = mysqli_query($conn, $country);
$county_qry1 = mysqli_query($conn, $country);
 ?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>New Add</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>


<form action="{{route('register-user')}}" method="post">
@csrf
@if(Session::has('success'))
<div class="alert alert-success">{{Session::get('success')}}</div>
@endif

<div class="container mt-5">



            <h3>Personal Information</h3> <br>
            <div class="row g-3">
              <div class="col-md-6">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" name="user_fullName" required>
              </div>


              <div class="col-md-6">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" name="user_userName" required>
              </div>
              <div class="col-md-6">
                  <label for="email" class="form-label">Email address</label>
                  <input type="text" class="form-control" name="user_email" required>
              </div>

              <div class="col-md-6">
              <label for="username" class="form-label">Gender</label>
                    <select class="form-select"  name="user_gender" required>
                        
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

              <div class="col-md-6">
                  <label for="name" class="form-label">Date of Birth</label>
                  <input type="date" class="form-control" name="user_dob" required>
              </div>
              <div class="col-md-6">
                  <label for="username" class="form-label">Education Qualification</label>
                  <input type="text" class="form-control" name="user_qualification" required>
              </div>
              <div class="col-md-6">
                  <label for="email" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" name="user_phone" pattern="[0]{1}[1]{1}[0-9]{3}[0-9]{6}" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="user_password" placeholder="Password"  required>
              </div>
                <div class="col-md-6">
                <label for="name" class="form-label">Division</label>
                    <select class="form-select" id="country" name="user_div" required>
                        <option selected disabled>Select Division</option>
                        <?php while ($row = mysqli_fetch_assoc($county_qry)) : ?>
                            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?> </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="col-md-6">
                <label for="name" class="form-label">District</label>
                    <select class="form-select" id="state" name="user_dis" >
                        
                    </select>
                </div>
                <div class="col-md-6">
                <label for="name" class="form-label">Upazila</label >
                    <select class="form-select" id="city" name="user_upa">
                        
                    </select>
                </div>
                
                <div class="col-md-6">
                <label for="email" class="form-label">Full Address</label>
                <input type="text" class="form-control" name="user_fullAddress" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Work Experience</label>
              <input type="text" class="form-control" name="user_workexp" required>
          </div>
          
          




                <div class="row g-3">
                <h3>Job Information</h3> <br>
                <div class="row g-3">
      <div class="col-md-6">
          <label for="name" class="form-label">PIN Number</label>
          <input type="text" class="form-control" name="user_pin" required>
      </div>
      <div class="col-md-6">
          <label for="username" class="form-label">Role/Designation</label>
          <input type="text" class="form-control" name="user_designation" required>
      </div>
      <div class="col-md-6">
          <label for="email" class="form-label">Employment Type</label>
          <input type="text" class="form-control" name="user_empType" required>
      </div>
      <div class="col-md-6">
          <label for="gender" class="form-label">Joining Date</label>
          <input type="date" class="form-control" name="user_joinDate" required>
      </div>
            </div>

            <div class="row g-3">

            <h3>Branch Information</h3> <br>
<div class="row g-3">

            <div class="col-md-6">
              <label for="username" class="form-label">Branch Name</label>
                    <select class="form-select multiple-select"  name="user_branchName[]" required multiple>
                        
            <?php
          $query1="SELECT * FROM branch ORDER BY branch_name";
          $get_data1= mysqli_query($conn,$query1);
          if(mysqli_num_rows($get_data1)>0)
          {
            foreach($get_data1 as $roww){
              ?>
                <option value="<?php echo $roww['branch_name'];?>"><?php echo $roww['branch_name']?></option>
              <?php
            }           
          }
      ?>
      </select>
        </div>

        <div class="col-md-6">
      <label for="username" class="form-label">Region</label>
      <input type="text" class="form-control" name="user_region" required>
  </div>
  
  <div class="col-md-6">
      <label for="username" class="form-label">RM Name</label>
      <input type="text" class="form-control" name="user_rm" required>
  </div>
  <div class="col-md-6">
      <label for="email" class="form-label">DM Name</label>
      <input type="text" class="form-control" name="user_dm" required>
  </div>
  <div class="col-md-6">
      <label for="gender" class="form-label">AM Name</label>
      <input type="text" class="form-control" name="user_am" required>
  </div>
            </div>



            <div class="row g-3">
            <h3>Project Information</h3> <br>




  
  <div class="col-md-6">
              <label for="username" class="form-label">Project Name</label>
                    <select class="form-select multiple-select"  name="user_projectName[]" required multiple>
                        
                        <?php
          $query="SELECT * FROM project ORDER BY project_name";
          $get_data= mysqli_query($conn,$query);
          if(mysqli_num_rows($get_data)>0)
          {
            foreach($get_data as $row){
              ?>
                <option value="<?php echo $row['project_name'];?>"><?php echo $row['project_name']?></option>
              <?php
            }           
          }
      ?>
                    </select>
                </div>

                <div class="col-md-6">
                <label for="name" class="form-label">Division</label>
                    <select class="form-select" id="country1" name="user_pdiv" required>
                        <option selected disabled>Select Division</option>
                        <?php while ($row1 = mysqli_fetch_assoc($county_qry1)) : ?>
                            <option value="<?php echo $row1['id']; ?>"> <?php echo $row1['name']; ?> </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="col-md-6">
                <label for="name" class="form-label">District</label>
                    <select class="form-select" id="state1" name="user_pdis" >
                        
                    </select>
                </div>
                <div class="col-md-6">
                <label for="name" class="form-label">Upazila</label>
                    <select class="form-select" id="city1" name="user_pupa" >
                        
                    </select>
                </div>
                </div>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">I have added all data correctly. </label>
                </div>
                <div class="container mt-5">
                <button type="submit" class="btn btn-primary mb-md-5 ">Submit</button>
                <a class="btn btn-primary mb-md-5 ml-3" role="button" href="login">Login</a>
                </div>
                
        </div>

</form>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
     <script>
        $(".multiple-select").select2({
  //maximumSelectionLength: 2
});
     </script>
</body>

</html>


<script>
    // County State

    $('#country').on('change', function() {
        var country_id = this.value;
        // console.log(country_id);
        $.ajax({
            url: 'ajax/state.php',
            type: "POST",
            data: {
                country_data: country_id
            },
            success: function(result) {
                $('#state').html(result);
                // console.log(result);
            }
        })
    });
    // state city
    $('#state').on('change', function() {
        var state_id = this.value;
        // console.log(country_id);
        $.ajax({
            url: 'ajax/city.php',
            type: "POST",
            data: {
                state_data: state_id
            },
            success: function(data) {
                $('#city').html(data);
                // console.log(data);
            }
        })
    });



        // County State

        $('#country1').on('change', function() {
        var country_id = this.value;
        // console.log(country_id);
        $.ajax({
            url: 'ajax/state1.php',
            type: "POST",
            data: {
                country_data: country_id
            },
            success: function(result1) {
                $('#state1').html(result1);
                // console.log(result);
            }
        })
    });
    // state city
    $('#state1').on('change', function() {
        var state_id = this.value;
        // console.log(country_id);
        $.ajax({
            url: 'ajax/city1.php',
            type: "POST",
            data: {
                state_data: state_id
            },
            success: function(data1) {
                $('#city1').html(data1);
                // console.log(data);
            }
        })
    });
</script>

