<?php
$pagetitle = "Contact";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrapCSS/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrapJS/bootstrap.min.js"></script>
    <title><?=$pagetitle?></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="card-body col-10 offset-1">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="alert-danger d-none" id="entries-warning">
                                        <h4 class="text-danger text-center">Please complete your entries!</h4>
                                    </div>
                                    <div class="alert-success d-none" id="message-sent">
                                        <h4 class="text-success text-center">Message sent <span id="full-name"></span>we will contact you shortly.</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                                </div>
                                <div class="form-group col-6">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-6 justify-content-center">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" type="radio" id="male" value="male">
                                        <label class="form-check-label" for="other">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" type="radio" id="female" value="female">
                                        <label class="form-check-label" for="other">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gender" type="radio" id="other" value="other">
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                    <span class="d-none text-danger" id="gender-warning">Please choose a gender.</span>
                                </div>
                                <div class="form-group col-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" id="city" placeholder="City">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="zip">Zip Code</label>
                                    <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip Code">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="country">Country</label>
                                    <select name="country" id="country" class="form-control">
                                        <option value="">Choose your country...</option>
                                        <?php require_once ("countryList.php"); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-10 offset-1">
                                <label for="message">Message(max. 255 characters)</label>
                                <textarea class="form-control" name="message" id="message" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="termsCond" id="termsCond">
                                    <label class="form-check-label" for="termsCond">
                                        I agree to the terms and conditions.
                                    </label>
                                    <span class="d-none text-danger" id="termsCond-warning">Please agree to the terms and conditions.</span>
                                </div>
                            </div>
                            <button onclick="submitContact()" class="btn btn-block btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/contactController.js"></script>
</body>
</html>


