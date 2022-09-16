<!DOCTYPE html>1
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Care</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}

form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Quicksand';
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h1{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #1479ff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

.reg{
    font-size: 16px;
    text-decoration: underline;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
    padding: 10px;
    cursor: pointer;
}
</style>
</head>
<body>
    <form name="myform" action="<?php echo e(url('dataentrylogin')); ?>" method="post">
     <?php echo csrf_field(); ?>
        <h1>LOGIN</h1>
        <label for="username">Username</label>
        <input type="text" name="email" placeholder="username or email" class="inputtxt" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password" class="inputtxt" id="Password">      
        <input type="submit" value="login"> 
                
    </form>
</body>
</html><?php /**PATH D:\New folder\htdocs\minafiiinaal\resources\views/dataentry/login.blade.php ENDPATH**/ ?>