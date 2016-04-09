function InvalidFirstName(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter First Name');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidLastName(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter Last Nme');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidEmail(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter Email Id');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidPassword(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter Password');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidConfirmPassword(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter Confirm Password');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidMobileNumber(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter MobileNumber');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

$(document).ready(function () {
    $("#FirstName").blur(function () {
        var first = $("#FirstName").val();
        if (first === "")
        {
            $("#firstname_error").html("enter Firstname");
        } else if ($.isNumeric(first))
        {
            $("#firstname_error").html("enter only characters");
        } else
        {
            $("#firstname_error").html("");
        }

    });
    $("#LastName").blur(function () {
        var first = $("#LastName").val();
        if (first === "")
        {
            $("#lastname_error").html("enter Lastname");
        } else if ($.isNumeric(first))
        {
            $("#lastname_error").html("enter only characters");
        } else
        {
            $("#lastname_error").html("");
        }

    });
    $("#MobileNumber").blur(function () {
        var first = $("#MobileNumber").val();
        if (first === "")
        {
            $("#MobileNumber_error").html("enter mobile number");
        } else if (!$.isNumeric(first))
        {
            $("#MobileNumber_error").html("enter only numbers");
        } else if (first.length < 10)
        {
            $("#MobileNumber_error").html("enter 10 digits");
        } else
        {
            $("#MobileNumber_error").html("");
        }

    });
    $("#City").blur(function () {
        var last = $("#City").val();
        if (last === "")
        {
            $("#city_error").html("enter ur city");
        } else if (($.isNumeric(last)))
        {
            $("#city_error").html("enter only characters");
        } else {
            $("#city_error").html("");
        }
    });
    $("#State").blur(function () {
        var last = $("#State").val();
        if (last === "")
        {
            $("#state_error").html("enter ur state");
        } else if (($.isNumeric(last)))
        {
            $("#state_error").html("enter only characters");
        } else {
            $("#state_error").html("");
        }
    });
    $("#ZipCode").blur(function () {
        var last = $("#ZipCode").val();
        if (last === "")
        {
            $("#zip_error").html("enter ur zipcode");
        }
        if (last.length !== 6)
        {
            $('#zip_error').html("please enter a valid zipcode");
            error = 1;

        } else if (!($.isNumeric(last)))
        {
            $("#zip_error").html("enter only numbers");
        } else {
            $("#zip_error").html("");
        }
    });
    $("#Country").blur(function () {
        var last = $("#Country").val();
        if (last === "")
        {
            $("#countryerror").html("enter ur country");
        } else if (($.isNumeric(last)))
        {
            $("#countryerror").html("enter only characters");
        } else {
            $("#countryerror").html("");
        }
    });
});