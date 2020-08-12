function submitContact() {
    $('#message-sent').addClass('d-none');

    let firstName = $('#firstName').val();
    let lastName = $('#lastName').val();
    let email = $('#email').val();
    let gender;
    let address = $('#address').val();
    let city = $('#city').val();
    let zip = $('#zip').val();
    let country = $('#country').val();
    let message = $('#message').val();
    let termsCond = $('#termsCond').prop('checked');

    if($('input[name="gender"]:checked').val()) {
        gender = $('input[name="gender"]:checked').val();
    } else {
        gender = "";
    }

    //send for validation
    $.ajax({
        url: 'validateContact.php',
        type: 'post',
        async: true,
        data: {
            "func": "valiContact",
            "firstName": firstName,
            "lastName": lastName,
            "email": email,
            "gender": gender,
            "address": address,
            "city": city,
            "zip": zip,
            "country": country,
            "message": message,
            "termsCond": termsCond
        },
        beforeSend: function()
        {
        }
    }).done(function (feedback)
    {
        let feedbackSplit = feedback.split(' , ');
        let fullName = firstName + ' ' + lastName;

        if(feedback == "email sent"){
            //email has been sent
            $('#full-name').html(fullName + ', ');
            $('#message-sent').removeClass('d-none');
            reset();
            resetWarnings();
        } else {
            resetWarnings();
            for (let el of feedbackSplit) {
                if (el != "" && el != "termsCond" && el != "gender") {
                    let jqEl = ('#' + el);
                    $(jqEl).addClass('border-danger');
                } else if (el == "termsCond") {
                    $('#termsCond-warning').removeClass('d-none');
                } else if (el == "gender") {
                    $('#gender-warning').removeClass('d-none');
                }
                $('#entries-warning').removeClass('d-none');
            }
        }
        console.log(feedback);
    });
}

function reset() {
    //reset everything
    $('#entries-warning').addClass('d-none');
    $('#firstName').val('');
    $('#lastName').val('');
    $('#email').val('');
    $('#address').val('');
    $('#city').val('');
    $('#zip').val('');
    $('#message').val('');
    $('#country').val('');
    $('#termsCond').prop('checked', false);
    $('input[name="gender"]:checked').prop('checked', false);
}

function resetWarnings() {
    $('#firstName').removeClass('border-danger');
    $('#lastName').removeClass('border-danger');
    $('#email').removeClass('border-danger');
    $('#address').removeClass('border-danger');
    $('#city').removeClass('border-danger');
    $('#zip').removeClass('border-danger');
    $('#message').removeClass('border-danger');
    $('#country').removeClass('border-danger');
    $('#gender-warning').addClass('d-none');
    $('#termsCond-warning').addClass('d-none');
}

