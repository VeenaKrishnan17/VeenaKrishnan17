<html>
    <head>
        <title>Transfer Money</title>
        <link rel="icon" href="https://www.pngfind.com/pngs/m/16-162850_png-file-svg-saving-bank-icon-png-transparent.png" >
        <link rel="stylesheet" href="index.css" >
        <link rel="stylesheet" type="text/css" href="table.css">
        <link rel="stylesheet" type="text/css" href="style.css">  
    </head>
    <body>
    <?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>

        <!-- header starts -->
        <div class="header_container">
            <div class="header_logo"> TSF Bank </div>.0
            <div class="nav">
                <div class="nav-items" onclick="document.location='index.php'">Home</div>
                <div class="nav-items" onclick="document.location='viewusers.php'">View users</div>
                <div class="nav-items">Transfer Money</div>
                <div class="nav-items" onclick="document.location='transactionhistory.php'">History</div>
            </div>
        </div>
        <!-- header ends -->
        <!-- body starts -->
        <div class="banner">
           <div class="overlay1">
           <form method="post" name="tcredit" class="tabletext" ><br>
               <div style="margin-top:15px;" class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
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
                                    <td><a href="selectusers.php?id=<?php echo $rows['id']; ?>"> <button type="button" class="btn" style="background-color : #24bace;">Transact</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </form>
           </div>
        </div>
        
                    

        <!-- body ends -->
        <!-- footer starts -->
        <div class="footer">
            Designed by VEENA K, Web Development Intern at The Sparks Foundation !!

        </div>
        <!-- footer ends -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>