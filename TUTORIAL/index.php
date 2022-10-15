<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initia-scale= 1.0">
    <title> Registration Form</title>
</head>
<h1>Blood Donation Camp</h1>
<body bgcolor="FBB917">
    <div>
        <h2>Registration Form</h2>
          <form action='connect.pnp' method="POST">
            <Label for = "user">Name:</Label><br>
            <input type= "text" name='name' id = "name" required/> <br> <br>

            <lebel for = "email">Email:</lebel><br>
            <input type='email' name ='email' id = 'email' required/> <br> <br>

            <label for = "phone">Phone:</label> <br>
            <input type = 'phone' name ='phone' id = 'phone' required/> <br> <br>
            
            <label for="bgroup">Blood Group:</label> <br>
            <input type='text' name='bgroup' id="bgroup" required/> <br> <br>

            <input type = "submit" name = "submit" id = "submit"/>

          </form>

    </div>
    
</body>
</html>