<?php 

    $mysqli = new mysqli('localhost', 'root', '', 'result_analysis') or die(mysqli_error($mysqli));

    $result = $mysqli->query("SELECT * FROM studentsresults ORDER BY Total DESC;") or die($mysqli->error);

    

    $rows = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title>CLASS RANK</title>
</head>


<body class="adminpanel">
    <main class="d-flex flex-column justify-content-center align-items-center admin-panel-container">
        <h3 class="text-white admin-panel-title"><i class="fas fa-users"></i> CLASS RANK</h3>
        <?php $r=0; ?>
        <div class="container-fluid stu-res-table-container">
            <table class="table text-white admin-panel-table">
                <thead>
                    <tr >
                        
                        <th>Register No.</th>
                        <th>Name</th>
                        <th>18CS31</th>
                        <th>18CS32</th>
                        <th>18CS33</th>
                        <th>18CS34</th>
                        <th>18CS35</th>
                        <th>18CS36</th>
                        <th>18CSL37</th>
                        <th>18CSL38</th>
                        <th>18KXK39</th>
                        <th>Total</th>
                        <th>Result</th>
                        <th>Rank</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            
                            <td><?php echo $row['regno']; ?></td>
                            <td><?php echo $row['sname']; ?></td>
                            <td><?php echo $row['mark1']; ?></td>
                            <td><?php echo $row['mark2']; ?></td>
                            <td><?php echo $row['mark3']; ?></td>
                            <td><?php echo $row['mark4']; ?></td>
                            <td><?php echo $row['mark5']; ?></td>
                            <td><?php echo $row['mark6']; ?></td>
                            <td><?php echo $row['mark7']; ?></td>
                            <td><?php echo $row['mark8']; ?></td>
                            <td><?php echo $row['mark9']; ?></td>
                            <td><?php echo $row['Total']; ?></td>
                            
                            

                              <?php 
                                $srstatus1 = $row['srstatus1'];
                                $srstatus2 = $row['srstatus2'];
                                $srstatus3 = $row['srstatus3'];
                                $srstatus4 = $row['srstatus4'];
                                $srstatus5 = $row['srstatus5'];
                                $srstatus6 = $row['srstatus6'];
                                $srstatus7 = $row['srstatus7'];
                                $srstatus8 = $row['srstatus8'];
                                $srstatus9 = $row['srstatus9'];
                            ?>
                            <?php 
                                if($srstatus1=="P" && $srstatus2=="P" && $srstatus3=="P" && $srstatus4=="P" && $srstatus5=="P" && $srstatus6=="P" && $srstatus7=="P"  && $srstatus8=="P" && $srstatus9=="P"):
                            ?>
                            <td>
                                <?php echo "P"; ?>
                            </td>
                            <?php else: ?>
                            <td>
                                <?php echo "F"; ?>
                            </td>
                            <?php endif; ?>
                            <td><?php $r=$r+1;
                             echo $r; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        
        
       
  <a href="studentlogout.php" class="btn btn-warning student-logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a>
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['msg_type']; ?> alert-dismissible fade show ap-alert">
                <div>
                    <i class="fas <?php echo $_SESSION['msg_icon']; ?>"></i>
                    <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    ?>
                </div>
                <button class="btn btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
   
    </main>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>