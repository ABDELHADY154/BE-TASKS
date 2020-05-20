<!DOCTYPE HTML>
<html>

<head>
    <title>form</title>
    <?php
    $errors = [];
    $output = [];
    $name = $password = $rpass = $color = $dob = $date = $week = $email = $student = $upload =
        $hidden = $month = $num1 = $num2 = $gender = $satsfaction = $search = $time = $url = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $rpass = $_POST["retype-password"];
        $color = $_POST["color"];
        $dob = $_POST["date"];
        $date = $_POST["date-time"];
        $week = $_POST["week"];
        $email = $_POST["email"];
        $student = $_POST["checkbox"];
        $upload = $_POST["avatar"];
        $hidden = $_POST["hidden"];
        $month = $_POST["month"];
        $num1 = $_POST["mobile"];
        $num2 = $_POST["phone"];
        $gender = $_POST["gender"];
        $satsfaction = $_POST["range"];
        $search = $_POST["search"];
        $search = $_POST["search"];
        $time = $_POST["time"];
        $url = $_POST["url"];
        $form = $_POST['form'];
    }
    // name 
    if (!empty($form) && empty($name)) {
        $errors[] = 'PLZ enter you name';
    } elseif (!empty($form) && !empty($name)) {
        if (!preg_match("/^[a-zA-Z-'\s]+$/", $name)) {
            $errors[] = 'PLZ enter a valid name ';
        }
    }
    // password
    if (!empty($form) && empty($password) && empty($rpass)) {
        $errors[] = 'PLZ enter a password and retype it';
    } elseif (!empty($form) && !empty($password) && !empty($rpass)) {
        if ($password !== $rpass) {
            $errors[] = 'passwords mismatch';
        }
        if (!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/", $password)) {
            $errors[] = 'PLZ use letters and numbers and 
                uppercase and symbols in password ';
        }
    }
    // color
    if (!empty($form) && empty($color)) {
        $errors[] = 'PLZ choose a color';
    }
    // dob
    if (!empty($form) && empty($dob)) {
        $errors[] = 'PLZ select ur date of birth';
    }
    // date and time
    if (!empty($form) && empty($date)) {
        $errors[] = 'PLZ select today date and time';
    }
    // week
    if (!empty($form) && empty($week)) {
        $errors[] = 'PLZ select the current week';
    }
    // time
    if (!empty($form) && empty($time)) {
        $errors[] = 'PLZ select the current time';
    }
    // month
    if (!empty($form) && empty($month)) {
        $errors[] = 'PLZ select the current month';
    }
    // email
    if (!empty($form) && empty($email)) {
        $errors[] = 'PLZ enter your email';
    }
    // image
    if (!empty($form) && empty($upload)) {
        $errors[] = 'PLZ upload your picture';
    } elseif (!empty($form) && !empty($upload)) {
        if (!preg_match("/\.(jpg|png|jpeg)$/", $upload)) {
            $errors[] = 'PLZ make sure that the image uploaded is jpg or png or jpeg ';
        }
    }

    // number
    if (!empty($form) && empty($num1)) {
        $errors[] = 'PLZ enter your phone number';
    } elseif (!empty($form) && !empty($num1)) {
        if (!preg_match("/^[0-9]*$/", $num1)) {
            $errors[] = 'PLZ enter a valid number ';
        }
    }
    // gender
    if (!empty($form) && empty($gender)) {
        $errors[] = 'PLZ Gender is required';
    }
    // search
    if (!empty($form) && empty($search)) {
        $errors[] = 'PLZ write what are u looking for';
    } elseif (!empty($form) && !empty($search)) {
        if (!preg_match("/^[a-zA-Z-'\s]+$/", $search)) {
            $errors[] = 'PLZ enter in the search box letters only  ';
        }
    }
    // url
    if (!empty($form) && empty($url)) {
        $errors[] = 'PLZ enter ur linkedin url';
    } elseif (!empty($form) && !empty($url)) {
        if (!preg_match("|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i", $url)) {
            $errors[] = 'PLZ enter a valid url  ';
        }
    }

    // output

    if (!empty($form) && count($errors) === 0) {
        $output[] = 'Hi ' . $name . ' you are welcomed';
        $output[] = 'your password is ' . $password;
        $output[] = 'your favourite color code is ' . $color;
        $output[] = 'your Date of birth is ' . $dob;
        $output[] = 'Today date and time is ' . $date;
        $output[] = 'the time you choose is ' . $time;
        $output[] = 'the week you choose is ' . $week;
        $output[] = 'the month you choose is ' . $month;
        $output[] = 'Your email is  ' . $email;
        if ($student) {
            $output[] = 'you are a  ' . $student;
        }
        $output[] = 'your phone number ' . $num1;
        $output[] = 'your tel number is ' . $num2;
        $output[] = 'your gender is ' . $gender;
        $output[] = 'your level of satisfaction is ' . $satsfaction;
        $output[] = 'your looking for ' . $search;
        $output[] = 'your linkedin url is  ' . $url;
        $output[] = '' . $hidden;
    }
    ?>

</head>

<body>


    <?php
    if (count($errors)) :
    ?>
        <ul>
            <?php for ($i = 0; $i < count($errors); $i++) : ?>
                <li style="color: red"> <?= $errors[$i] ?> </li>
            <?php endfor; ?>
        </ul>
    <?php
    endif;
    ?>
    <h2>Sign up</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" value="<?php if (!empty($name)) {
                                            echo $name;
                                        } ?>" name="name"><br><br>
        password: <input type="password" value="<?php if (!empty($password)) {
                                                    echo $password;
                                                } ?>" name="password"><br><br>
        retype password:<input type="password" value="<?php if (!empty($rpass)) {
                                                            echo $rpass;
                                                        } ?>" name="retype-password"><br><br>
        choose your fav. color: <input type="color" name="color" value="<?php if (!empty($color)) {
                                                                            echo $color;
                                                                        } ?>"><br><br>
        DOB:<input type="date" name="date" value="<?php if (!empty($dob)) {
                                                        echo $dob;
                                                    } ?>"><br><br>
        today's date & time: <input type="datetime-local" name="date-time" value="<?php if (!empty($date)) {
                                                                                        echo $date;
                                                                                    } ?>"><br><br>
        time: <input type="time" name="time" value="<?php if (!empty($time)) {
                                                        echo $time;
                                                    } ?>"><br><br>
        week:<input type="week" name="week" value="<?php if (!empty($week)) {
                                                        echo $week;
                                                    } ?>"><br><br>
        insert month: <input type="month" name="month" value="<?php if (!empty($month)) {
                                                                    echo $month;
                                                                } ?>"><br><br>
        email:<input type="email" name="email" value="<?php if (!empty($email)) {
                                                            echo $email;
                                                        } ?>"><br><br>
        if student check: <input type="checkbox" name="checkbox" value="student"><br><br>
        upload your picture:<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" value="<?php if (!empty($upload)) {
                                                                                                                    echo $upload;
                                                                                                                } ?>"><br><br>
        phone number: <input type="number" name="mobile" value="<?php if (!empty($num1)) {
                                                                    echo $num1;
                                                                } ?>"><br><br>
        tel number: <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php if (!empty($num2)) {
                                                                                                                echo $num2;
                                                                                                            } ?>" required>ex: 000-000-0000<br><br>
        Gender: <br>
        Female<input type="radio" name="gender" value="female"><br>
        Male<input type="radio" name="gender" value="male"><br>
        satisfaction:0 <input type="range" name="range" min="0" max="11" value="<?php if (!empty($satsfaction)) {
                                                                                    echo $satsfaction;
                                                                                } ?>">11<br><br>
        what are u looking for in our company:<input type="search" name="search" aria-label="Search through site content" value="<?php if (!empty($search)) {
                                                                                                                                        echo $search;
                                                                                                                                    } ?>"> <input type="button" value="ok"><br><br>
        LINKEDIN URL:<input type="url" name="url" value="<?php if (!empty($url)) {
                                                                echo $url;
                                                            } ?>"><br><br>
        <input type="hidden" value="thanks for applying" name="hidden">
        <input type="reset" value="reset">
        <input type="submit" value="submit" name="form">


    </form>
    <?php
    if (count($output)) :
    ?>
        <ul>
            <img src="./img/<?= $upload; ?>" width="150px" height="150px"><br><br>
            <?php for ($i = 0; $i < count($output); $i++) : ?>
                <li style="color: blue"> <?= $output[$i] ?> </li>
            <?php endfor; ?>
        </ul>
    <?php
    endif;
    ?>

    <?php
    // print_r($errors);
    // echo '<br>';
    // print_r($output);
    // echo '<br>';
    // print_r($_POST);
    ?>

</body>

</html>