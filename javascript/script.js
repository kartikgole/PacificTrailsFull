function validate(){
	var fname = document.VReservations.fname;
	var lname = document.VReservations.lname;
    var mail = document.VReservations.email;
	var number = document.VReservations.phone.value;
    var comment = document.VReservations.comments;
	
	
    if (fname.value == "")
    {
        window.alert("Please enter your First name.");
        fname.focus();
        return false;
    }
    if (/\d/.test(fname.value))
    {
        window.alert("Name cannot contains numerals");
        fname.focus();
        return false;
    }
	if (lname.value == "")
    {
        window.alert("Please enter your Last name.");
        lname.focus();
        return false;
    }
    if (/\d/.test(lname.value))
    {
        window.alert("Name cannot contains numerals");
        lname.focus();
        return false;
    }
	if (number.toString().length !=10) {
		window.alert("Number doesn't have 10 digits");
        return false;
	}
    
    if (mail.value == "")
    {
        window.alert("Please enter a valid e-mail address.");
        mail.focus();
        return false;
    }
    if (mail.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        mail.focus();
        return false;
    }
    if (mail.value.indexOf(".", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        mail.focus();
        return false;
    }
    if (comment.value == "")
    {
        window.alert("Please provide a detailed description");
        comment.focus();
        return false;
    }
    return true;

}

function validateemail(){
    var mail = document.ereservation.email;
	if (mail.value == "")
    {
        window.alert("Please enter a valid e-mail address.");
        mail.focus();
        return false;
    }
    if (mail.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        mail.focus();
        return false;
    }
    if (mail.value.indexOf(".", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        mail.focus();
        return false;
    }
	return true;
}