function InvalidFirstName(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter First Name');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidLastName(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter Last Nme');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidEmail(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter Email Id');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidPassword(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter Password');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidConfirmPassword(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter Confirm Password');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function InvalidMobileNumber(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter MobileNumber');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidAddress(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter Address');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidCity(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter City');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidState(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter State');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidCountry(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter Country');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}
function InvalidZipCode(textbox) {

    if (textbox.value == '') {
        textbox.setCustomValidity('Please Enter ZipCode');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

$(document).ready(function () {
    $("#FirstName").blur(function () {
        var FirstName = $("#FirstName").val();
        if (FirstName === "")
        {
            $("#FirstNameError").html("enter Firstname");
        } else if ($.isNumeric(FirstName))
        {
            $("#FirstNameError").html("enter only characters");
        } else
        {
            $("#FirstNameError").html("");
        }

    });
    $("#LastName").blur(function () {
        var LastName = $("#LastName").val();
        if (LastName === "")
        {
            $("#LastNameError").html("enter Lastname");
        } else if ($.isNumeric(LastName))
        {
            $("#LastNameError").html("enter only characters");
        } else
        {
            $("#LastNameError").html("");
        }

    });
    $("#MobileNumber").blur(function () {
        var Number = $("#MobileNumber").val();
        if (Number === "")
        {
            $("#MobileNumberError").html("enter mobile number");
        } else if (!$.isNumeric(Number))
        {
            $("#MobileNumberError").html("enter only numbers");
        } else if (Number.length < 10)
        {
            $("#MobileNumberError").html("enter 10 digits");
        } else
        {
            $("#MobileNumberError").html("");
        }

    });
    $("#Password").blur(function () {

        var ValidatePassword = $("#Password").val();
        if (ValidatePassword.length < 8)
        {
            $("#PasswordError").html("Password should be atleast 8 characters and one captial letter");
        } else {
            $("#PasswordError").html("");
        }

    });
    $("#ConfirmPassword").blur(function ()
    {
        var ValidateconfirmPassword = $("#ConfirmPassword").val();
        if (ValidateconfirmPassword != $("#Password").val())
        {
            $("#ConfirmPasswordError").html("Confirm Password Should be same as above Password")
        } else {
            $("#ConfirmPasswordError").html("");
        }
    });
    $("#NewPassword").blur(function () {

        var ValidatePassword = $("#NewPassword").val();
        if (ValidatePassword.length < 8)
        {
            $("#NewpasswordError").html("Password should be atleast 8 characters and one captial letter");
        } else {
            $("#NewpasswordError").html("");
        }

    });
    $("#NewConfirmPassword").on("keyup",function ()
    {
        var ValidateconfirmPassword = $("#NewConfirmPassword").val();
        if (ValidateconfirmPassword != $("#NewPassword").val())
        {
            $("#NewConfirmPasswordError").html("Confirm Password Should be same as above Password")
        } else {
            $("#NewConfirmPasswordError").html("");
        }
    });
    $("#City").blur(function () {
        var City = $("#City").val();
        if (City === "")
        {
            $("#CityError").html("enter ur city");
        } else if (($.isNumeric(City)))
        {
            $("#CityError").html("enter only characters");
        } else {
            $("#CityError").html("");
        }
    });
    $("#State").blur(function () {
        var State = $("#State").val();
        if (State === "")
        {
            $("#StateError").html("enter ur state");
        } else if (($.isNumeric(State)))
        {
            $("#StateError").html("enter only characters");
        } else {
            $("#StateError").html("");
        }
    });
    $("#ZipCode").blur(function () {
        var Zip = $("#ZipCode").val();
        if (Zip.length !== 6)
        {
            $('#ZipError').html("please enter 6digit zipcode");
            error = 1;

        } else if (!($.isNumeric(Zip)))
        {
            $("#ZipError").html("enter only numbers");
        } else {
            $("#ZipError").html("");
        }
    });
    $("#Country").blur(function () {
        var Country = $("#Country").val();
        if (Country === "")
        {
            $("#CountryError").html("enter ur country");
        } else if (($.isNumeric(Country)))
        {
            $("#CountryError").html("enter only characters");
        } else {
            $("#CountryError").html("");
        }
    });
});