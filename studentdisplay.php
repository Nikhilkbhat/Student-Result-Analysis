<?php 

    session_start();

    if(!isset($_SESSION['regno'])) {
        header("location: index.php");
    }

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
    <title>Student Result</title>
</head>

<body class="studentdisplay">
    <!-- <main class="d-flex flex-column justify-content-center align-items-center student-display-container"> -->
            <main class="d-flex flex-column  align-items-center student-display-container">

        <!-- Student panel title -->
        <h3 class="text-white stu-pan-title">STUDENT RESULT PANEL</h3>

        <?php 
            
            $mysqli = new mysqli('localhost', 'root', '', 'result_analysis') or die(mysqli_error($mysqli));

            $regno = $_SESSION['regno'];

            $result = $mysqli->query("SELECT * FROM studentsresults WHERE regno = '$regno'") or die($mysqli->error);

        ?>

        
        <?php while($row = $result->fetch_array()): ?>
        <section class="text-white my-auto student-details-container">
            
                <div class="d-flex gap-5 stu-det-holder">
                    <label for="stu-regno" class="stu-det-label">Register Number</label>
                    <p class="stu-det" id="stu-regno"><?php echo $row['regno']; ?></p>
                </div>
                <div class="d-flex gap-5 stu-det-holder">
                    <label for="stu-name" class="stu-det-label">Name</label>
                    <p class="stu-det" id="stu-name"><?php echo $row['sname']; ?></p>
                </div>
                <div class="d-flex gap-5 stu-det-holder">
                    <label for="stu-dob" class="stu-det-label">Date of Birth</label>
                    <p class="stu-det" id="stu-dob">
                        <?php 
                            $originalDate = $row['sdob'];
                            $newDate = date("d-m-Y", strtotime($originalDate));
                            echo $newDate;
                        ?>
                    </p>
                </div>
        </section>

        <section class="text-white mb-auto student-marks-container">
            <table class="table text-white">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Subject Code</th>
                        <th>Marks</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>18CS31</td>
                        <td><?php echo $row['mark1']; ?></td>
                        <td><?php echo $row['srstatus1']; ?></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>18CS32</td>
                        <td><?php echo $row['mark2']; ?></td>
                        <td><?php echo $row['srstatus2']; ?></td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>18CS33</td>
                        <td><?php echo $row['mark3']; ?></td>
                        <td><?php echo $row['srstatus3']; ?></td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>18CS34</td>
                        <td><?php echo $row['mark4']; ?></td>
                        <td><?php echo $row['srstatus4']; ?></td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>18CS35</td>
                        <td><?php echo $row['mark5']; ?></td>
                        <td><?php echo $row['srstatus5']; ?></td>
                    </tr>
                       <tr>
                        <td>06</td>
                        <td>18CS36</td>
                        <td><?php echo $row['mark6']; ?></td>
                        <td><?php echo $row['srstatus6']; ?></td>
                    </tr>
                     <tr>
                        <td>07</td>
                        <td>18CSL37</td>
                        <td><?php echo $row['mark7']; ?></td>
                        <td><?php echo $row['srstatus7']; ?></td>
                    </tr>
                    <tr>
                        <td>08</td>
                        <td>18CSL58</td>
                        <td><?php echo $row['mark8']; ?></td>
                        <td><?php echo $row['srstatus8']; ?></td>
                    </tr>
                    <tr>
                        <td>09</td>
                        <td>18KXK39</td>
                        <td><?php echo $row['mark9']; ?></td>
                        <td><?php echo $row['srstatus9']; ?></td>
                    </tr>

                </tbody>
            </table>
            <table>
                <td></td>
                <td>TOTAL</td>
                <td></td>
                <td><?php echo $row['Total']; ?></td>
            </table>
        </section>
        <?php endwhile; ?>
        
        <button type="button" onclick="window.print();" class="btn btn-success print-btn" id="print-btn" style="position: absolute; top: 2%; right: 9%;">
            <i class="fal fa-print"></i>
            Print Result
        </button>
      

        <a href="display.php" class="btn btn-warning student-logout-btn"><i class="fas fa-users"></i> </i> Rank</a>
        
    </main>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
