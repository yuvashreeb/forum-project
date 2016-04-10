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
            $("#firstnameerror").html("enter Firstname");
        } else if ($.isNumeric(first))
        {
            $("#firstnameerror").html("enter only characters");
        } else
        {
            $("#firstnameerror").html("");
        }

    });
    $("#LastName").blur(function () {
        var first = $("#LastName").val();
        if (first === "")
        {
            $("#lastnameerror").html("enter Lastname");
        } else if ($.isNumeric(first))
        {
            $("#lastnameerror").html("enter only characters");
        } else
        {
            $("#lastnameerror").html("");
        }

    });
    $("#MobileNumber").blur(function () {
        var first = $("#MobileNumber").val();
        if (first === "")
        {
            $("#MobileNumbererror").html("enter mobile number");
        } else if (!$.isNumeric(first))
        {
            $("#MobileNumbererror").html("enter only numbers");
        } else if (first.length < 10)
        {
            $("#MobileNumbererror").html("enter 10 digits");
        } else
        {
            $("#MobileNumbererror").html("");
        }

    });
    $("#City").blur(function () {
        var last = $("#City").val();
        if (last === "")
        {
            $("#cityerror").html("enter ur city");
        } else if (($.isNumeric(last)))
        {
            $("#cityerror").html("enter only characters");
        } else {
            $("#cityerror").html("");
        }
    });
    $("#State").blur(function () {
        var last = $("#State").val();
        if (last === "")
        {
            $("#stateerror").html("enter ur state");
        } else if (($.isNumeric(last)))
        {
            $("#stateerror").html("enter only characters");
        } else {
            $("#stateerror").html("");
        }
    });
    $("#ZipCode").blur(function () {
        var last = $("#ZipCode").val();
        if (last === "")
        {
            $("#ziperror").html("enter ur zipcode");
        }
        if (last.length !== 6)
        {
            $('#ziperror').html("please enter a valid zipcode");
            error = 1;

        } else if (!($.isNumeric(last)))
        {
            $("#ziperror").html("enter only numbers");
        } else {
            $("#ziperror").html("");
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