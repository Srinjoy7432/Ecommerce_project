<?php

include 'payment.php';

error_reporting(0);

session_start();

if (isset($_POST['Submit'])) {
    $cc_card_no = $_POST['cc_card_no'];
	$cc_card_hldr = $_POST['cc_card_hldr'];
	$cc_exp_month = $_POST['cc_exp_month'];
	$cc_exp_year = $_POST['cc_exp_year'];
    $cc_cvv = md5($_POST['cc_cvv']);

    $sql="INSERT INTO credit (cc_card_no , cc_card_hldr , cc_exp_month , cc_exp_year , cc_cvv) 
          VALUES ('$cc_card_no','$cc_card_hldr','$cc_exp_month','$cc_exp_year','$cc_cvv')";

    if (mysqli_query($conn,$sql)) {
				echo "<script>alert('Credit Card Added  !!! Your Order is placed.');
                    window.location.href='index.php';
                      </script>";
                $cc_card_no = 0;
				$cc_card_hldr = "";
				$cc_exp_month = 0;
				$cc_exp_year = 0;
                $_POST['cc_cvv'] = 0;
			}
            else {
				echo "<script>alert('Sorry !!! Something Wrong Went.')</script>";
			}
		}

    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style_payment.css">

</head>
<body>

<div class="container">

<p class="login-text" style="font-size: 25px; font-weight: 800; color: purple" align="center"><br/>Enter your Credit Card Details:<br/><br/></p>


    <div class="card-container">

        <div class="front">
            <div class="image">
                <img src="image/chip.png" alt="">
                <img src="image/visa.png" alt="">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>card holder</span>
                    <div class="card-holder-name">full name</div>
                </div>
                <div class="box">
                    <span>expires</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="image/visa.png" alt="">
            </div>
        </div>

    </div>

    <form action="" method="POST">
        <div class="inputBox">
            <span>card number</span>
            <input type="number" maxlength="14" class="card-number-input" name="cc_card_no" required>
        </div>
        <div class="inputBox">
            <span>card holder</span>
            <input type="text" class="card-holder-input"  name="cc_card_hldr" required>
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>expiration mm</span>
                <select name="cc_exp_month" id="" class="month-input">
                    <option value="month" selected disabled >month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>expiration yy</span>
                <select name="cc_exp_year" id="" class="year-input">
                    <option value="year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="number" maxlength="3" class="cvv-input" name="cc_cvv" required>
            </div>
        </div>
        <input type="submit" class="submit-btn" name="Submit">
    </form>

</div>    
    





<script>

document.querySelector('.card-number-input').oninput = () =>{
    document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
}

document.querySelector('.card-holder-input').oninput = () =>{
    document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}

document.querySelector('.month-input').oninput = () =>{
    document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
}

document.querySelector('.year-input').oninput = () =>{
    document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
}

document.querySelector('.cvv-input').onmouseenter = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
}

document.querySelector('.cvv-input').onmouseleave = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
}

document.querySelector('.cvv-input').oninput = () =>{
    document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
}

</script>


</body>
</html>
    
    
