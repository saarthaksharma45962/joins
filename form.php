<html>
    <head>   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="main.css"/>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">WELCOME</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                
                </ul>
            </div>
        </nav>
    </head>


        <body> 
        <section>
    <form   method="POST">
        <div class="container my-3">
        <form  method= "post"  >
            <div class="form-group row">
            <div class="col-xs-4">
                <label for="id">ID</label>
                <input type="id" name="id" id="id" class="form-control" placeholder="" required />
            </div>
            </div>
            <div class="form-group row">
            <div class="col-xs-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" name = "name" id= "name" placeholder="Enter Name" required/>
            </div>
            </div> 
            <div class="form-group row">
            <div class="col-xs-4">
                <label for="address"> Address</label>
                <input type="text" class="form-control" name = "address" id= "address" placeholder="Enter Address" required/>
            </div>
            </div> 
        
        <button type="submit" name="Add" class="btn btn-default">Save</button>
    </form>
    
    </section>
        
        
        
        </body>




    </html>

    <?php 
        include"dbconn.php";

        if(isset($_POST['Add'])){

            $id = $_POST["id"];
            $name = $_POST["name"];
            $address = $_POST["address"];

            $insert = "insert into student_details(Sid,Sname,Saddress) values ('$id','$name','$address')";
            $in_query = mysqli_query($conn,$insert);

            if($in_query){


                echo"data saved successfully";
            }







        }
    
    
    
    
    
    
    
    
    
    
    
    ?>