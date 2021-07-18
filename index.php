<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Index</title>
    <link rel="stylesheet" href="style1.css" />

</head>
<body>
    <header>
<div class="charles">
    <ul class="nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="login.php">login</a></li>
        <li><a href="Registration.php">Sign Up</a></li>
        <li><a href="google.com">Contact us</a></li>
          
      
      <form class="com-mail">
          <input disabled="" type="text" class="form-control1 control3"  value="<%=rs.getString("name")%>" name="title"  >
          <textarea disabled="" rows="6" class="form-control1 control2"  id="disabledinput" name="message" > <%=rs.getString("post")%></textarea>
      </form>
    </ul>
</div>

    </header>
    
</body>
</html>
