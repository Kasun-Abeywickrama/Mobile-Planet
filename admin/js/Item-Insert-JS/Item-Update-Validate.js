function validateItemUpdate()
{
	var x = 0;
	if(document.itemUpdate.itemName.value == "")
	{
		alert("Please enter the item name");
		x = 1;
	}
	
	if(document.itemUpdate.itemDescription.value.length < 50)
	{
		alert("Please enter a description with more than 50 words");
		x = 1;
	}

	if(document.itemUpdate.itemBuyingPrice.value == "")
	{
		alert("Please enter a buying price");
		x = 1;
	}

	if(document.itemUpdate.itemSellingPrice.value == "")
	{
		alert("Please enter a selling price");
		x = 1;
	}
	
	if(isNaN(document.itemUpdate.itemSellingPrice.value))
	{
		alert("Please enter a valid selling price");
		x = 1;
	}
	
	if(isNaN(document.itemUpdate.itemBuyingPrice.value))
	{
		alert("Please enter a valid buying price");
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