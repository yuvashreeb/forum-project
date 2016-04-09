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