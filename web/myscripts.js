<script type="text/javascript">
		 function validation()
{
	var firstname = document.myform.firstname.value;
	var lastname = document.myform.lastname.value;
	var Email = document.myform.Email.value;
    var Username = document.myform.Username.value;
    var Password = document.myform.Password.value;
    var contact = document.myform.contact.value;

	 var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	 
    if (firstname == "" || firstname == "null")
    {
     alert("Firstname should not be empty");
      return false;
    }  
    if (lastname == "" || lastname == "null")
    {
     alert("Lastname should not be empty");
      return false;
    }  
     if (Email == "" || Email == "null")
    {
      alert("Email should not be empty");
      return false;
    }  
    if(!Email.match(mail))
    {
      alert("Please Enter valid  email");
      return false;
    }
     if (Username == "" || Username == "null")
    {
     alert("Username should not be empty");
      return false;
    }  
    if(!Password.match(reg_pass))
    {
      alert("Enter valid password, which contains Uppercase, lowercase and special characater");
      return false;
    }
  
    if(Password == "" || Password == null)
    {
      alert("password should not be empty");
      return false;
    }
     if(isNaN(contact))
    {
      alert("Enter valid contact number");
      return false;
    }
    if(contact == "" || contact == null)
    {
      alert("Please Enter valid  mobile number");
      return false;
    }
    if(contact.length!= 10)
    {
      alert("Enter valid phone number of length 10");
      return false;
    }
    return true;
}
	</script>