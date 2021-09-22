
<?php

require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {

    redirect("index.php");
}

include 'headerlogged.php';

?>

<body>
<head>
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <br><br><br><br><br>
<div class="form-wrapper2">
    <div class="row justify-content-center" >
        <h3 align="center">Tabela useri</h3> </div>
         </div>
    <?php $sql2 = "SELECT * FROM users ";
    $result2 = mysqli_query($db,$sql2);
    ?>
    <div class="grid-x">
        <div class="cell small-2"></div>
        <div class="cell small-8">
        <table class="table">
            <thead>
            <tr>
                <th width="14%">Id</th>
                <th width="14%">nume</th>
                <th width="14%">username</th>
                <th width="14%">password</th>
                <th width="14%">type</th>
                <th width="30%">Action</th>
            </tr>

            </thead>
            <?php
            while ($row = $result2->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['nume']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td >

                        <a href="f3.php?editc=<?php echo $row['Id'];  ?>" class="btn btn-info">SELECT</a>
                        <button class="button" data-toggle="exampleModal9">EDIT</button>
                        <a href="process001.php?deletec=<?php echo $row['Id']; ?>" class="btn btn-danger" title="Click here to delete">DELETE</a>

                    </td>

                </tr>

            <?php endwhile; ?>
        </table>

        </div>
    </div>
</div>


<div class="reveal" id="exampleModal9" data-reveal data-overlay="false">
<div class="form-wrapper2">

    <h2>Introduceti o noua comanda</h2>
    <form action="process.php" method="POST">
        <div class="form-item">
            <input type="hidden" name="Id"  value="<?php echo end(explode('=',$_SERVER['REQUEST_URI']));?>"> </input>
            <label>email</label>
            <input type="text" name="nume" placeholder ="Introduceti email"></input>
        </div>

        <div class="form-item">
            <label>username</label>
            <input type="text" name="username" placeholder="Introduceti numele" ></input>
        </div>

        <div class="form-item">
            <label>password</label>
            <input type="password" name="password" placeholder="Introduceti parola" ></input>
        </div>

        <div class="form-item">
            <label>type</label>
            <input type="text" name="type"  placeholder="Introduceti tipul de utilizator" ></input>
        </div>



        <div class="button-panel">
                <input type="submit" class="button" title="update_c" name="update_c" value="Update"></input>

        </div>
    </form>

</div>
<button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


    <br><br>
<div class="form-wrapper2">
    <div class="row justify-content-center" >

        <h3 align="center">Comenzi clienti</h3> </div>
    <?php $sql2 = "SELECT * FROM drepturi ";
    $result2 = mysqli_query($db,$sql2);
    ?>
    <div class="grid-x">
        <div class="cell small-2"></div>
        <div class="cell small-8">
        <table class="table table-striped table-dark" border=1 cellpadding=2>
            <thead>
            <tr>
                <th width="23%">Id</th>
                <th width="23%">IdPage</th>
                <th width="24%">IdUser</th>
                <th width="30%">Action</th>
            </tr>

            </thead>
            <?php
            while ($row = $result2->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['IdPage']; ?></td>
                    <td><?php echo $row['IdUser']; ?></td>
                    <td >
                        <a href="f3.php?editc=<?php echo $row['Id'];  ?>" class="btn btn-info">SELECT</a>
                        <button class="button" data-toggle="exampleModal8">EDIT</button>
                        <a href="process002.php?deletec=<?php echo $row['Id']; ?>" class="btn btn-danger" title="Click here to delete">DELETE</a>
                    </td>

                </tr>

            <?php endwhile; ?>
        </table>

        </div>
    </div>
</div>
<div class="reveal" id="exampleModal8" data-reveal data-overlay="false">
<div class="form-wrapper2">

    <h2>Introduceti o noua comanda</h2>
    <form action="process1.php" method="POST">
        <div class="form-item">
            <input type="hidden" name="Id"  value="<?php echo end(explode('=',$_SERVER['REQUEST_URI']));?>">
            <label>IdPage</label>
            <input type="text" name="IdPage" placeholder ="Introduceti id-ul paginii"></input>
        </div>

        <div class="form-item">
            <label>IdUser</label>
            <input type="text" name="IdUser" placeholder="Introduceti id-ul userului" ></input>
        </div>

        <div class="button-panel">
            <input type="submit" class="button" title="update_c" name="update_c" value="Update"></input>

        </div>
    </form>

</div>
<button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

    <br><br>


<div class="form-wrapper2">
    <div class="row justify-content-center" >

        <h3 align="center">New Features Table</h3> </div>
    <?php $sql2 = "SELECT * FROM features ";
    $result2 = mysqli_query($db,$sql2);
    ?>
    <div class="grid-x" >
        <div class="cell small-2"></div>
        <div class="cell small-8">
        <table class="table table-striped table-dark" border=1 cellpadding=2>
            <thead>
            <tr>
                <th width="14%">Id</th>
                <th width="14%">Thing1</th>
                <th width="14%">Thing2</th>
                <th width="14%">Thing3</th>
                <th width="14%">Thing4</th>
                <th width="30%">Action</th>
            </tr>

            </thead>
            <?php
            while ($row = $result2->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Thing1']; ?></td>
                    <td><?php echo $row['Thing2']; ?></td>
                    <td><?php echo $row['Thing3']; ?></td>
                    <td><?php echo $row['Thing4']; ?></td>
                    <td >
                        <a href="f3.php?editc=<?php echo $row['Id'];  ?>" class="btn btn-info">SELECT</a>
                        <button class="button" data-toggle="exampleModal7">EDIT</button>
                        <a href="process003.php?deletec=<?php echo $row['Id']; ?>" class="btn btn-danger" title="Click here to delete">DELETE</a>
                    </td>

                </tr>

            <?php endwhile; ?>
        </table>

        </div>
    </div>
</div>
<div class="reveal" id="exampleModal7" data-reveal data-overlay="false">
<div class="form-wrapper2">

    <h2>Introduceti o noua comanda</h2>
    <form action="process2.php" method="POST">
        <div class="form-item">
            <input type="hidden" name="Id"  value="<?php echo end(explode('=',$_SERVER['REQUEST_URI']));?>">
            <label>Thing1</label>
            <input type="text" name="Thing1" placeholder ="Introduceti field1"></input>
        </div>

        <div class="form-item">
            <label>Thing2</label>
            <input type="text" name="Thing2" placeholder="Introduceti field2" ></input>
        </div>

        <div class="form-item">
            <label>Thing3</label>
            <input type="text" name="Thing3" placeholder="Introduceti field3" ></input>
        </div>

        <div class="form-item">
            <label>Thing4</label>
            <input type="text" name="Thing4" placeholder="Introduceti field4" ></input>
        </div>

        <div class="button-panel">
            <input type="submit" class="button" title="update_c" name="update_c" value="Update"></input>

        </div>
    </form>

</div>
<button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



</body>
<?php include 'footer.php'; ?>
</html>
