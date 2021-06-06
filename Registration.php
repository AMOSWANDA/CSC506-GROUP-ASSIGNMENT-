<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="sty.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
        <form method="POST" action="add_user.php"> 
                <div class="form-group">
                    <label for="name">First Name</label>
                    <input type="name" name="fname" class="form-control"placeholder="First Name">
      
                  </div>
                  <div class="form-group">
                    <label for="name">Last Name</label>
                    <input type="name" name="lname" class="form-control"placeholder="Last Name">
      
                  </div>
      
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" class="form-control"placeholder="john12@gmail.com">
                      <div class="form-group">
                    <label for="name">username</label>
                    <input type="name" name="username" class="form-control"placeholder="username">
      
                  </div>
              </div>
              <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="password" name="password" class="form-control"placeholder="New Password">
      
                </div>
                 
                <div class="form-group">
                  <label for="Phone Number">Phone Number</label>
                  <input type="text" name="phone_number" class="form-control"placeholder="+234">
      
                </div>
      
                <div class="form-group">
                  <label for="Address">Address</label>
                  <input type="text" name="address" class="form-control"placeholder="Enter address">
      
                </div>
            
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
            </form>
        </div>
    </body>
</html>