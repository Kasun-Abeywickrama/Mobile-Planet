function validateCompanyInfo()
{
    x=0;
    if(document.companyInfoUpdate.comAdd.value == "")
    {
        alert("The company address is required");
        x = 1;
    }

    if((document.companyInfoUpdate.comPhone.value.length != 9 && document.companyInfoUpdate.comPhone.value.length != 10) || isNaN(document.companyInfoUpdate.comPhone.value))
    {
        alert("Enter a valid telephone number");
        x = 1;
    }

    if(document.companyInfoUpdate.comOpen.value == "")
    {
        alert("The company opening times is required");
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