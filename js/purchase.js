function validatePurchase()
{
    x = 0;
    if(document.pdetails.cNumber.value == "" || document.pdetails.cvv.value == "")
    {
        alert("Please enter all the details");
        x =1;
    }

    if(isNaN(document.pdetails.cNumber.value) || isNaN(document.pdetails.cvv.value))
    {
        alert("Please enter valid details");
        x = 1;
    }

    if(x == 1)
    {
        return false;
    }
    else
    {
        return true;
    }
}