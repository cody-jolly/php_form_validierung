<?php
echo $_POST['func']();

function valiContact()
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $message = $_POST['message'];
    $termsCond = $_POST['termsCond'];

    $errors = array();

    require_once ("Validate.php");
    $vali = new Validate;

    if ($vali->validateName($firstName) == 0) {
        //firstName not valid
        array_push($errors,"firstName");
    }

    if ($vali->validateName($lastName) == 0) {
        //lastName not valid
        array_push($errors,"lastName");
    }

    if ($vali->validateEmail($email) == 0) {
        //email not valid
        array_push($errors,"email");
    }

    if ($vali->validateRadio($gender) == 0) {
        //gender not checked
        array_push($errors,"gender");
    }

    if ($vali->validateName($address) == 0) {
        //address not valid
        array_push($errors,"address");
    }

    if ($vali->validateName($city) == 0) {
        //city not valid
        array_push($errors,"city");
    }

    if ($vali->validateZip($zip) == 0) {
        //zip not valid
        array_push($errors,"zip");
    }

    if ($vali->validateSelect($country) == 0) {
        //country not valid
        array_push($errors,"country");
    }

    if ($vali->validateMessage($message) == 0) {
        //message not valid
        array_push($errors,"message");
    }

    if ($vali->validateCheckbox($termsCond) == 0) {
        //termsCond not valid
        array_push($errors, "termsCond");
    }

    if (!isset($errors[0])) {
        $fullName = $firstName . " " . $lastName;
        //send email to me from form
        $emailData = array("fullName"=>($fullName),
                              "email"=>$email,
                            "message"=>$message);
        require_once ("Email.php");
        $email = new Email($emailData);
        $email->sendEmailToMe();
        return "email sent";
    } else {
        foreach ($errors as $error) {
            echo $error . " , ";
        }
    }
}
