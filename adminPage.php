<?php
            session_start();
        ?>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <<div class="topnav">
            <p id="top-header"><i>BUKU SARJANA</i></p>
            <a href="loginForm.php" action="loginForm.php">Login</a>
            <a href="homeCRUD.php" action="homeCRUD.php">Home</a>
        </div>
        <h1>Hello Admin!</h1>
        <form action="search.php" method="get">
            cari buku disini :
            <input type="text" name="carinama">
            <input type="submit" value="Search">
        </form>
        <br>
        <a href="insertForm.html"><button>tambah data</button></a>
        <br><br>
        <table>
        <tr>
                <th> Code </th>
                <th> Title </th>
                <th> Writer </th>
                <th> Action </th>
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        ?>
                <tr>
                    <td><?php echo $row["id_buku"]; ?></td>
                    <td><?php echo $row["judul"]; ?></td>
                    <td><?php echo $row["pengarang"]; ?></td>
                    <td>
                        <a href="detailPage.php?id_buku=<?php echo $row["id_buku"];?>">
                        <button>Detail</button> </a>
                        <a href="editForm.php?id_buku=<?php echo $row["id_buku"];?>">
                        <button>Edit</button> </a>
                        <a href="delete.php?id_buku=<?php echo $row["id_buku"];?>">
                        <button>Hapus</button> </a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>           
        </table>
        <br>
        <br>
        <br>
        <?php
            if(isset($_SESSION["username"])){
                echo '<a href="sessionLogout.php></a>';
            }else{
                echo "";
            }
        ?>
        <br><br><br>
        <a href="print.php"><button>Print</button></a>
        <div class="fixed">
                <footer>
                    2022 &copy; BUKU SARJANA
                </footer>
        </div>
    </body>
</html>