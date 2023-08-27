function userInfoValidate()
{
    x = 0;

    if(document.updateUserInfo.newem.value == "")
    {
        alert("Email is required");
        x = 1;
    }

    if(document.updateUserInfo.newfnm.value == "")
    {
        alert("First Name is required");
        x = 1;
    }

    if(document.updateUserInfo.newlnm.value == "")
    {
        alert("Last Name is required");
        x = 1;
    }

    if(document.updateUserInfo.newpw.value == "")
    {
        alert("Password is required");
        x = 1;
    }

    if(document.updateUserInfo.newgen.selectedIndex == 0)
    {
        alert("Gender is required");
        x = 1;
    }

    if(document.updateUserInfo.newpho.value.length != 9 && document.updateUserInfo.newpho.value.length != 10)
    {
        alert("Enter a valid phone number");
        x = 1;
    }

    if(isNaN(document.updateUserInfo.newpho.value))
    {
        alert("Enter a valid phone number");
        x = 1;
    }

    if(document.updateUserInfo.newadd.value == "")
    {
        alert("Address is required");
        x = 1;
    }

    if(x==1)
    {
        return false;
    }
    else
    {
        return true;
    }
}