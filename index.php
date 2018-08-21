<!DOCTYPE html>
<html>
<head>
    <title>FORM</title>
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Form</h1>
    </div>
    <div class="container">
        <form action="mail.php" method="post">
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPhone">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="exampleInputPhone" placeholder="08xxxxxxxxx" required>
            </div>
            <div class="form-group">
                <label for="exampleInputUserid">User ID</label>
                <input type="text" name="userid" class="form-control" id="exampleInputUserid" required>
            </div>
            <div class="form-group">
                <label for="exampleInputAddress">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleInputAddress" placeholder="email@gmail.com" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
     </div>
</body>
</html>
