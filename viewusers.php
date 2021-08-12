<html>
    <head>
    <title>View Users</title>
        <link rel="icon" href="https://www.pngfind.com/pngs/m/16-162850_png-file-svg-saving-bank-icon-png-transparent.png" >
        <link rel="stylesheet" href="index.css" >
        <link rel="stylesheet" type="text/css" href="table.css">
        <link rel="stylesheet" type="text/css" href="style.css">  
    </head>
    <body>         
        <!-- header starts -->
        <div class="header_container">
            <div class="header_logo"> TSF Bank </div>
            <div class="nav">
                <div class="nav-items" onclick="document.location='index.php'">Home</div>
                <div class="nav-items">View users</div>
                <div class="nav-items" onclick="document.location='transfermoney.php'">Transfer Money</div>
                <div class="nav-items" onclick="document.location='transactionhistory.php'">History</div>
            </div>
        </div>
        <!-- header ends -->
        <?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>
        <div class="banner">
        <div class="overlay1">
        <!-- table starts -->
        
        <div class="table-responsive-sm">
        <table style="margin-top:15px;" class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name'] ?></td>
                                    <td class="py-2"><?php echo $rows['email'] ?></td>
                                    <td class="py-2"><?php echo $rows['balance'] ?></td>

                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
        </div>
    </div>
</div>
  
    <!-- footer starts -->
       <div class="footer">
            Designed by VEENA K, Web Development Intern at The Sparks Foundation !!

        </div>
    <!-- footer ends -->
  
</body>

</html>