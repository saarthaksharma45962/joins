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
        
            <div class="container my-3" >
                <form method="POST">
                    
                    <button type="submit" name="left" id="left">LEFT JOIN</button>
                    <button type="submit" name="right" id="right">RIGHT JOIN</button>
                    <button type="submit" name="inner" id="inner">INNER JOIN</button>
                  

                </form>
            </div>
        </section>
        <?php
            if(isset($_POST['left'])){   
                ?>
                <div class="container my-3">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope ="col">Physics</th>
                            <th scope ="col">Chemistry</th>
                            <th scope ="col">Mathematics</th>
                                        
                        </tr>

                    </thead>
                    <tbody>
                        <?php    include"dbconn.php";             
#------------------------------------------------LEFT JOIN------------------------------------------------------------------
                            $query="select* from student_details LEFT JOIN student_marks on student_details.Sid= student_marks.Sid";
                            $result = mysqli_query($conn,$query);
                            while($row= mysqli_fetch_assoc($result)){
                        
                            ?>
                            <tr>
                                <td><?php echo $row['Sid']; ?></td>
                                <td><?php echo $row['Sname']; ?></td>
                                <td><?php echo $row['Saddress']; ?></td>
                                <td><?php echo $row['Physics']; ?></td>
                                <td><?php echo $row['Chemistry']; ?></td>
                                <td><?php echo $row['Maths']; ?></td>
                            </tr>
                        
                        <?php
                            }
                    ?>
                        </tbody>




                    
                    
                    
                    </table>
                <?php
                }
                ?>

                </div>

                <?php
            if(isset($_POST['right'])){   
                ?>
                <div class="container my-3">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope ="col">Physics</th>
                            <th scope ="col">Chemistry</th>
                            <th scope ="col">Mathematics</th>
                                        
                        </tr>

                    </thead>
                    <tbody>
                        <?php    include"dbconn.php";             
#------------------------------------------------RIGHT JOIN------------------------------------------------------------------
                            $query="select* from student_details RIGHT JOIN student_marks on student_details.Sid= student_marks.Sid";
                            $result = mysqli_query($conn,$query);
                            while($row= mysqli_fetch_assoc($result)){
                        
                            ?>
                            <tr>
                                <td><?php echo $row['Sid']; ?></td>
                                <td><?php echo $row['Sname']; ?></td>
                                <td><?php echo $row['Saddress']; ?></td>
                                <td><?php echo $row['Physics']; ?></td>
                                <td><?php echo $row['Chemistry']; ?></td>
                                <td><?php echo $row['Maths']; ?></td>
                            </tr>
                        
                        <?php
                            }
                    ?>
                        </tbody>




                    
                    
                    
                    </table>
                <?php
                }
                ?>

                </div>

                <?php
            if(isset($_POST['inner'])){   
                ?>
                <div class="container my-3">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope ="col">Physics</th>
                            <th scope ="col">Chemistry</th>
                            <th scope ="col">Mathematics</th>
                                        
                        </tr>

                    </thead>
                    <tbody>
                        <?php    include"dbconn.php";             
#------------------------------------------------INNER JOIN------------------------------------------------------------------
                            $query="select* from student_details INNER JOIN student_marks on student_details.Sid= student_marks.Sid";
                            $result = mysqli_query($conn,$query);
                            while($row= mysqli_fetch_assoc($result)){
                        
                            ?>
                            <tr>
                                <td><?php echo $row['Sid']; ?></td>
                                <td><?php echo $row['Sname']; ?></td>
                                <td><?php echo $row['Saddress']; ?></td>
                                <td><?php echo $row['Physics']; ?></td>
                                <td><?php echo $row['Chemistry']; ?></td>
                                <td><?php echo $row['Maths']; ?></td>
                            </tr>
                        
                        <?php
                            }
                        ?>
                        </tbody>




                    
                    
                    
                    </table>
                <?php
                }
                ?>

                </div>
             
        
        
        
    
    
    
    </body>

</html>

