<?php
    ob_start();
    session_start();

        $username    = $_POST['username'];
        $password    = $_POST['password'];
        
         $enkrip=md5($password);
    
    //$fullname    = $_POST['fullname'];
    $_SESSION['username'] = $username;
    //$_SESSION['fullname'] = $fullname; 
         $con=mysqli_connect("localhost","root","","pnmvc");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql = "select * from user
            where username='$username'";
    echo $sql;      
            /*
            $sql = "select a.username,a.password,b.fullname,b.shortname,
            b.type,b.divisi,b.email,b.photo,b.c,b.r,b.u,b.d
            from user a
            left join tb_user b ON (a.username=b.username)
            where a.username='$username'";
            */
    $qry = mysqli_query($con,$sql);
    $num = mysqli_num_rows($qry);
    $row = mysqli_fetch_array($qry,MYSQLI_ASSOC);

    // echo $row['password'];
    // echo $num;
   if ($enkrip !=$row['password']) {
    ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai !');
            document.location='../';
        </script>
    <?php
    }
    else {
        $_SESSION['login']=1;
        header("Location: home?par=home");
    }
    mysqli_close($con); //Tutup koneksi engine MySQL
       
?>