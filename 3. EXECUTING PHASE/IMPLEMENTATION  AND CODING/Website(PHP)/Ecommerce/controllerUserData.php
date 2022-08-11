<?php
session_start();
require "connect.php";
$email = "";
$name = "";
$errors = array();
// IF CUSTOMER SIGNUP
if (isset($_POST['signup-customer']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $date = date("m/d/Y", strtotime($date));
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if ($password !== $repassword)
    {
        $errors['password'] = "Password do not matched!";
    }
    else
    {
        if (strlen($password) <= 8)
        {
            $errors['password'] = "Your Password Must Contain At Least 8 Characters";
        }
        elseif (!preg_match('#[0-9]+#', $password))
        {
            $errors['password'] = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif (!preg_match('#[A-Z]+#', $password))
        {
            $errors['password'] = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif (!preg_match('#[a-z]+#', $password))
        {
            $errors['password'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
        elseif (!preg_match('@[^\w]@', $password))
        {
            $errors['password'] = "Your Password Must Contain At Least 1 Special Character!";
        }
    }
    $email_check = "SELECT * FROM AMANSHRESTHA.USERS WHERE user_email = '$email'";
    $email_exist = false;
    $result = oci_parse($conn, $email_check);
    oci_execute($result);
    $min = 3;
    $max = 10;
    if ($result)
    {
        while ($checkuser = oci_fetch_assoc($result))
        {
            $email_exist = true;
        }
    }
    if ($email_exist)
    {
        $errors['email'] = "Email that you have entered is already exist!.;";
    }
    if (strlen($name) < $min)
    {
        $errors['name'] = "Full Name cannot be less than {$min} characters. ";
    }
    if (strlen($phoneno) < $min)
    {
        $errors['phoneno'] = "Phoneno cannot be less than {$min} or more than {$max} characters. ";
    }
    if (strlen($phoneno) > $max)
    {
        $errors['phoneno'] = "Phoneno cannot be less than {$min} or more than {$max} characters. ";
    }
    if (count($errors) === 0)
    {
        $encpass = md5($password);
        $code = rand(999999, 111111);
        $status = "notverified";
        $user_type = "Customer";
        $insert_data = "INSERT INTO AMANSHRESTHA.USERS (USER_NAME, USER_EMAIL,USER_GENDER,DOB,USER_ADDRESS,USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS,USER_TYPE)
                        values('$name', '$email','$gender', TO_DATE('$date', 'MM/DD/YYYY'), '$address','$phoneno', '$encpass', '$code', '$status','$user_type')";
        $data_check = oci_parse($conn, $insert_data);
        oci_execute($data_check);
        if ($data_check)
        {
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: amanshresthaaaaa@gmail.com";
            if (mail($email, $subject, $message, $sender))
            {
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            }
            else
            {
                $errors['otp-error'] = "Failed while sending code!";
            }
        }
        else
        {
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
}
//IF TRADER SIGNUP
if (isset($_POST['signup-trader']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $date = date("m/d/Y", strtotime($date));
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if ($password !== $repassword)
    {
        $errors['password'] = "Password do not matched!";
    }
    else
    {
        if (strlen($password) <= 8)
        {
            $errors['password'] = "Your Password Must Contain At Least 8 Characters";
        }
        elseif (!preg_match('#[0-9]+#', $password))
        {
            $errors['password'] = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif (!preg_match('#[A-Z]+#', $password))
        {
            $errors['password'] = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif (!preg_match('#[a-z]+#', $password))
        {
            $errors['password'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
        elseif (!preg_match('@[^\w]@', $password))
        {
            $errors['password'] = "Your Password Must Contain At Least 1 Special Character!";
        }
    }
    $email_check = "SELECT * FROM AMANSHRESTHA.USERS WHERE user_email = '$email'";
    $result = oci_parse($conn, $email_check);
    $email_exist = false;
    oci_execute($result);
    $min = 3;
    $max = 10;
    if ($result)
    {
        while ($checkuser = oci_fetch_assoc($result))
        {
            $email_exist = true;
        }
    }
    if ($email_exist)
    {
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if (strlen($name) < $min)
    {
        $errors['name'] = "Full Name cannot be less than {$min} characters. ";
    }
    if (strlen($phoneno) < $min)
    {
        $errors['phoneno'] = "Phoneno cannot be less than {$min} or more than {$max} characters. ";
    }
    if (count($errors) === 0)
    {
        $encpass = md5($password);
        $code = rand(999999, 111111);
        $status = "notverified";
        $user_type = "Trader";
        $insert_data = "INSERT INTO AMANSHRESTHA.USERS (USER_NAME, USER_EMAIL,USER_GENDER,DOB,USER_ADDRESS,USER_PHONENO, USER_PASSWORD, CODE, USER_STATUS,USER_TYPE)
                        values('$name', '$email','$gender', TO_DATE('$date', 'MM/DD/YYYY'), '$address','$phoneno', '$encpass', '$code', '$status','$user_type')";
        $data_check = oci_parse($conn, $insert_data);
        oci_execute($data_check);
        if ($data_check)
        {
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: amanshresthaaaaa@gmail.com";
            if (mail($email, $subject, $message, $sender))
            {
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: trader-otp.php');
                exit();
            }
            else
            {
                $errors['otp-error'] = "Failed while sending code!";
            }
        }
        else
        {
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
}
//When User login
if (isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $userid = '';
    $status = '';
    $userexist = '';
    $check_email = "SELECT * FROM AMANSHRESTHA.USERS WHERE user_email = '$email' AND USER_TYPE = 'Customer' ";
    $result = oci_parse($conn, $check_email);
    oci_execute($result);
    if ($result)
    {
        while ($checkuser = oci_fetch_assoc($result))
        {
            $userexist = true;
            $userid = $checkuser['USER_ID'];
            $fetch_pass = $checkuser['USER_PASSWORD'];
            $status = $checkuser['USER_STATUS'];
            $user_type = $checkuser['USER_TYPE'];
        }
        if ($userexist)
        {
            if ($password == $fetch_pass)
            {
                $_SESSION['email'] = $email;
                if ($status == 'verified')
                {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['userid'] = $userid;
                    $_SESSION['usertype'] = $user_type;
                    header('location:index.php');
                }
                else
                {
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }
            else
            {
                $errors['email'] = "Incorrect email or password!";
            }
        }
        else
        {
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }
}
//WHEN TRADER LOGIN
if (isset($_POST['traderlogin']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $userid = '';
    $status = '';
    $userexist = '';
    $check_email = "SELECT * FROM AMANSHRESTHA.USERS WHERE user_email = '$email' AND USER_TYPE = 'Trader' ";
    $result = oci_parse($conn, $check_email);
    oci_execute($result);
    if ($result)
    {
        while ($checkuser = oci_fetch_assoc($result))
        {
            $userexist = true;
            $userid = $checkuser['USER_ID'];
            $fetch_pass = $checkuser['USER_PASSWORD'];
            $status = $checkuser['USER_STATUS'];
            $user_type = $checkuser['USER_TYPE'];
        }
        if ($userexist)
        {
            if ($password == $fetch_pass)
            {
                $_SESSION['email'] = $email;
                $_SESSION['trader_id'] =$userid;
                if ($status == 'verified')
                {
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['userid'] = $userid;
                    $_SESSION['usertype'] = $user_type;
                    header('location:admin/traderindex.php');
                }
                else
                {
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: trader-otp.php');
                }
            }
            else
            {
                $errors['email'] = "Incorrect email or password!";
            }
        }
        else
        {
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }
}
// WHEN USER CLICK VERIFICATION CODE SUBMIT BUTTON
if (isset($_POST['check']))
{
    $otp_code = $_POST['otp'];
    $check_code = "SELECT * FROM AMANSHRESTHA.USERS WHERE code = $otp_code";
    $result = oci_parse($conn, $check_code);
    oci_execute($result);
    $fetch_code = 0;
    if ($result)
    {
        while ($checkuser = oci_fetch_assoc($result))
        {
            $fetch_code = $checkuser['CODE'];
            $email = $checkuser['USER_EMAIL'];
        }
    }
    if ($fetch_code > 0)
    {
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE AMANSHRESTHA.USERS SET code = $code, user_status = '$status' WHERE code = $fetch_code";
        $update_res = oci_parse($conn, $update_otp);
        oci_execute($update_res);
        if ($update_res)
        {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location: login-user.php');
            exit();
        }
        else
        {
            $errors['otp-error'] = "Failed while updating code!";
        }
    }
    else
    {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}
if (isset($_POST['tradercheck']))
{
    $otp_code = $_POST['otp'];
    $check_code = "SELECT * FROM AMANSHRESTHA.USERS WHERE code = $otp_code";
    $result = oci_parse($conn, $check_code);
    oci_execute($result);
    $fetch_code = 0;
    if ($result)
    {
        while ($checkuser = oci_fetch_assoc($result))
        {
            $fetch_code = $checkuser['CODE'];
            $email = $checkuser['USER_EMAIL'];
        }
    }
    if ($fetch_code > 0)
    {
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE AMANSHRESTHA.USERS SET code = $code, user_status = '$status' WHERE code = $fetch_code";
        $update_res = oci_parse($conn, $update_otp);
        oci_execute($update_res);
        if ($update_res)
        {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location: login-trader.php');
            exit();
        }
        else
        {
            $errors['otp-error'] = "Failed while updating code!";
        }
    }
    else
    {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}
// If user forget password
if (isset($_POST['check-email']))
{
    $email = $_POST['email'];
    $check_email = "SELECT * FROM AMANSHRESTHA.USERS WHERE user_email='$email'";
    $result = oci_parse($conn, $check_email);
    oci_execute($result);
    $email_exist = false;
    if ($result)
    {
        while ($checkuser = oci_fetch_assoc($result))
        {
            $email_exist = true;
        }
    }
    if ($email_exist)
    {
        $code = rand(999999, 111111);
        $insert_code = "UPDATE AMANSHRESTHA.USERS SET code = $code WHERE user_email = '$email'";
        $run_query = oci_parse($conn, $insert_code);
        oci_execute($run_query);
        if ($run_query)
        {
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From: amanshresthaaaaa@gmail.com";
            if (mail($email, $subject, $message, $sender))
            {
                $info = "We've sent a passwrod reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            }
            else
            {
                $errors['otp-error'] = "Failed while sending code!";
            }
        }
        else
        {
            $errors['db-error'] = "Something went wrong!";
        }
    }
    else
    {
        $errors['email'] = "This email address does not exist!";
    }
}
// If user reset their password
if (isset($_POST['check-reset-otp']))
{
    $_SESSION['info'] = "";
    $email = $_SESSION['email'];
    $otp_code = $_POST['otp'];
    $check_code = "SELECT * FROM AMANSHRESTHA.USERS WHERE code = $otp_code AND USER_EMAIL = '$email'";
    $result = oci_parse($conn, $check_code);
    oci_execute($result);
    $email_exist = false;
    if ($result)
    {
        while ($checkuser = oci_fetch_assoc($result))
        {
            $email_exist = true;
        }
    }
    if ($email_exist)
    {
        $email = $checkuser['USER_EMAIL'];
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: newpassword.php');
    }
    else
    {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}
//If user change their password
if (isset($_POST['change-password']))
{
    $_SESSION['info'] = "";
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    if ($password !== $repassword)
    {
        $errors['password'] = "Confirm password not matched!";
    }
    else
    {
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = md5($password);
        $update_pass = "UPDATE AMANSHRESTHA.USERS SET CODE = '$code', USER_PASSWORD = '$encpass' WHERE USER_EMAIL = '$email'";
        $result = oci_parse($conn, $update_pass);
        oci_execute($result);
        if ($result)
        {
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        }
        else
        {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}
//if login now button click
if (isset($_POST['login-now']))
{
    header('Location: login-user.php');
}
//If trader create shop
if (isset($_POST['submit-trader-shop']))
{
    $count = 0;
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $sql = "SELECT * FROM AMANSHRESTHA.USERS WHERE USER_EMAIL = '$email' AND USER_PASSWORD ='$password'";
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    $shop = $_POST['shop-name'];
    $file = $_POST['file'];
    $email_exist = false;
    if ($result)
    {
        while ($user = oci_fetch_assoc($result))
        {
            $email_exist = true;
            $trader_id = $user['USER_ID'];
        }
    }
    $sql = "SELECT * FROM AMANSHRESTHA.SHOP WHERE USER_ID = $trader_id";
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    while ($user = oci_fetch_assoc($result))
    {
        $count++;
    }
    if ($count > 1)
    {
        $errors['shop'] = "You can't Make more than 2 shops.";
    }
    else
    {
        $sql = "INSERT into AMANSHRESTHA.shop (SHOP_NAME,USER_ID,SHOP_IMAGE) VALUES ('$shop','$trader_id','$file')";
        $data_check = oci_parse($conn, $sql);
        oci_execute($data_check);
        header('location: tradershowshop.php');
    }
}
//if user click profile update
if (isset($_POST['update-profile']))
{
    $newid = $_POST['form_id'];
    $newname = $_POST['name'];
    $newemail = $_POST['email'];
    $newaddress = $_POST['address'];
    $newphone = $_POST['phoneno'];
    $email_check = "SELECT * FROM AMANSHRESTHA.USERS WHERE user_email = '$newemail'";
    $result = oci_parse($conn, $email_check);
    oci_execute($result);
    $email_exist = false;
    $min = 3;
    $max = 10;
    if ($result)
    {
        while ($checkuser = oci_fetch_assoc($result))
        {
            if ($checkuser['USER_EMAIL'] !== $_SESSION['email']) $email_exist = true;
        }
    }
    if ($email_exist)
    {
        $errors['email'] = "Email that you have entered is already exist!.;";
    }
    if (strlen($newname) < $min)
    {
        $errors['name'] = "Full Name cannot be less than {$min} characters. ";
    }
    if (strlen($newphone) < $min)
    {
        $errors['phoneno'] = "Phoneno cannot be less than {$min} or more than {$max} characters. ";
    }
    if (strlen($newphone) > $max)
    {
        $errors['phoneno'] = "Phoneno cannot be less than {$min} or more than {$max} characters. ";
    }
    if (count($errors) === 0)
    {
        $update_profile = "UPDATE AMANSHRESTHA.USERS SET USER_NAME='$newname',USER_EMAIL='$newemail',USER_ADDRESS='$newaddress',USER_PHONENO='$newphone' WHERE USER_ID=$newid";
        $run_query = oci_parse($conn, $update_profile);
        oci_execute($run_query);
        if ($run_query)
        {
            header('location: profile.php');
        }
            // if ($run_query)
        // {
        //     $subject = "Profile Update Confirmation";
        //     $message = "Your profile has been updated";
        //     $sender = "From: amanshresthaaaaa@gmail.com";
        //     if (mail($email, $subject, $message, $sender))
        //     {
        //         $info = "We've sent a password reset otp to your email - $email";
        //         $_SESSION['info'] = $info;
        //         $_SESSION['email'] = $email;
        //         header('location: profile.php');
        //         exit();
        //     }
        //     else
        //     {
        //         $errors['otp-error'] = "Failed while sending code!";
        //     }
        // }
    }
}
//SUBMIT PRODIUCT
if (isset($_POST['productsubmit']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $description = $_POST['description'];
    $shop = $_POST['shop'];
    $allergy = $_POST['allergy'];
    $stock = $_POST['productstock'];
    $min = $_POST['min'];
    $max = $_POST['max'];
    $file = $_POST['file'];
    $sql = "INSERT INTO AMANSHRESTHA.PRODUCTS(PRODUCT_NAME,PRODUCT_PRICE,PRODUCT_PICTURE,PRODUCT_DESCRIPTION,SHOP_ID,PRODUCT_STOCK,MIN_ORDER,MAX_ORDER,ALLERGY,DISCOUNT)
    VALUES('$name',$price,'$file','$description',$shop,$stock,$min,$max,'$allergy',$discount)";
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    header('location: tradershowproduct.php');
}
// when trader update their Product
if (isset($_POST['updateproduct']))
{
    $newid = $_POST['form_id'];
    $newname = $_POST['name'];
    $newprice = $_POST['price'];
    $newdis = $_POST['discount'];
    $newdesc = $_POST['description'];
    $newallergy = $_POST['allergy'];
    $newshop = $_POST['shop'];
    $newstock = $_POST['productstock'];
    $newmin = $_POST['min'];
    $newmax = $_POST['max'];
    $file = $_POST['file'];
    $sql = "UPDATE AMANSHRESTHA.PRODUCTS set PRODUCT_NAME='$newname',ALLERGY = '$newallergy' , PRODUCT_PRICE='$newprice', DISCOUNT = '$newdis',
PRODUCT_DESCRIPTION ='$newdesc',SHOP_ID='$newshop',PRODUCT_PICTURE='$file', PRODUCT_STOCK = '$newstock' ,MIN_ORDER ='$newmin' ,MAX_ORDER='$newmax' where PRODUCT_ID='$newid'";
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    if ($result)
    {
        header('location: tradershowproduct.php');
    }
    else
    {
        header('location:traderindex.php');
    }
}
//If Admin Login
if (isset($_POST['login']))
{
    $userid = '';
    $fetch_pass = '';
    $status = '';
    $userexist = '';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check_email = "SELECT * FROM AMANSHRESTHA.USERS WHERE user_email = '$email' AND USER_TYPE = 'Admin' ";
    $result = oci_parse($conn, $check_email);
    oci_execute($result);
    if ($result)
    {
        while ($checkuser = oci_fetch_assoc($result))
        {
            $userexist = true;
            $userid = $checkuser['USER_ID'];
            $fetch_pass = $checkuser['USER_PASSWORD'];
            $status = $checkuser['USER_STATUS'];
            $user_type = $checkuser['USER_TYPE'];
        }
        if ($userexist)
        {
            if ($password == $fetch_pass)
            {
                $_SESSION['email'] = $email;
                if ($status == 'verified')
                {
                    $_SESSION['email'] = $email;
                    $_SESSION['usertype'] = $user_type;
                    $_SESSION['password'] = $password;
                    header('location:index.php');
                }
                else
                {
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }
            else
            {
                $errors['email'] = "Incorrect email or password!";
            }
        }
    }
    else
    {
        $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
    }
}
//SHOP UPDATE
if (isset($_POST['update-shop']))
{
    $newid = $_POST['form_id'];
    $newname = $_POST['shop-name'];
    $file = $_POST['file'];
    $sql = "UPDATE AMANSHRESTHA.SHOP set SHOP_NAME='$newname',SHOP_IMAGE='$file' where SHOP_ID='$newid'";
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    if ($result)
    {
        header('location: tradershowshop.php');
    }
    else
    {
        header('location:traderindex.php');
    }
}
//ADD ADMIN SHOP
if (isset($_POST['adminupdateshop']))
{
    $newid = $_POST['form_id'];
    $newname = $_POST['shop-name'];
    $file = $_POST['file'];
    $sql = "UPDATE AMANSHRESTHA.SHOP set SHOP_NAME='$newname',SHOP_IMAGE='$file' where SHOP_ID='$newid'";
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    if ($result)
    {
        header('location: adminshowshop.php');
    }
    else
    {
        header('location:adminindex.php');
    }
}
//Add ADMIN SHOP
if (isset($_POST['addadminshop']))
{
    $count = 0;
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $sql = "SELECT * FROM AMANSHRESTHA.USERS WHERE USER_EMAIL = '$email' AND USER_PASSWORD ='$password'";
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    $shop = $_POST['shop-name'];
    $target = "uploads/";
    $file_path = $target . basename($_FILES['file']['name']);
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_store = "uploads/" . $file_name;
    move_uploaded_file($file_tmp, $file_store);
    $email_exist = false;
    if ($result)
    {
        while ($user = oci_fetch_assoc($result))
        {
            $email_exist = true;
            $trader_id = $user['USER_ID'];
        }
    }
    $sql = "SELECT * FROM AMANSHRESTHA.SHOP WHERE USER_ID = $trader_id";
    $result = oci_parse($conn, $sql);
    oci_execute($result);
    while ($user = oci_fetch_assoc($result))
    {
        $count++;
    }
    if ($count > 1)
    {
        $errors['shop'] = "You can't Make more than 2 shops.";
    }
    else
    {
        $sql = "INSERT into AMANSHRESTHA.shop (SHOP_NAME,USER_ID,SHOP_IMAGE) VALUES ('$shop','$trader_id','$file_path')";
        $data_check = oci_parse($conn, $sql);
        oci_execute($data_check);
        header('location: adminshowshop.php');
    }
}
?>