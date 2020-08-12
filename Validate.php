<?php


class Validate
{
    public function validateName($userInput)
    {
        if(isset($userInput) && $userInput != "") {
            //name has been entered
            if(strlen($userInput) < 100) {
                //name is ok
                return 1;
            } else {
                //name is too long
                return 0;
            }
        } else {
            //name field is empty
            return 0;
        }
    }

    public function validateEmail($userInput)
    {
        if(isset($userInput) && $userInput != "") {
            //email has been entered
            if(!(filter_var($userInput, FILTER_VALIDATE_EMAIL) == false)) {
                //email is valid
                return 1;
            } else {
                //email not valid
                return 0;
            }
        } else {
            //email field is empty
            return 0;
        }
    }

    public function validateZip($userInput)
    {
        if(isset($userInput) && $userInput != "") {
            //zip has been entered
            if(strlen($userInput) > 3 && strlen($userInput) < 30) {
                //zip is ok
                return 1;
            } else {
                //zip is too long or too short
                return 0;
            }
        } else {
            //zip field is empty
            return 0;
        }
    }

    public function validateMessage($userInput)
    {
        if (isset($userInput) && $userInput != "") {
            //message has been entered
            if (strlen($userInput) < 255) {
                //message is ok
                return 1;
            } else {
                //message is too long
                return 0;
            }
        } else {
            //message field is empty
            return 0;
        }
    }

    public function validateCheckbox($checkbox)
    {
        if (isset($checkbox) && $checkbox!="" && $checkbox != null && $checkbox != "undefinded" && $checkbox != "false") {
            //checkbox has been checked
            return 1;
        } else {
            // checkbox has not been checked
            return 0;
        }
    }

    public function validateRadio($radio)
    {
        if (isset($radio) && $radio!="" && $radio != null) {
            //radio has been checked
            return 1;
        } else {
            //radio has not been checked
            return 0;
        }
    }

    public function validateSelect($select)
    {
        if ($select != "") {
            //select is set
            return 1;
        } else {
            //select has not been set
            return 0;
        }
    }
}