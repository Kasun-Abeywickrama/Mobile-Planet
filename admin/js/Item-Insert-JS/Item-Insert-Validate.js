function validateItemInsert()
{
	var x = 0;
	if(document.itemInsert.itemName.value == "")
	{
		alert("Please enter the item name");
		x = 1;
	}
	
	if(document.itemInsert.itemType.selectedIndex == 0)
	{
		alert("Please select an item type");
		x = 1;	
	}

    if(document.itemInsert.itemBrand.selectedIndex == 0)
	{
		alert("Please select an item Brand");
		x = 1;	
	}
	
	if(document.itemInsert.itemDescription.value.length < 50)
	{
		alert("Please enter a description with more than 50 words");
		x = 1;
	}

	if(document.itemInsert.itemBuyingPrice.value == "")
	{
		alert("Please enter a buying price");
		x = 1;
	}

	if(document.itemInsert.itemSellingPrice.value == "")
	{
		alert("Please enter a selling price");
		x = 1;
	}
	
	if(isNaN(document.itemInsert.itemSellingPrice.value))
	{
		alert("Please enter a valid selling price");
		x = 1;
	}
	
	if(isNaN(document.itemInsert.itemBuyingPrice.value))
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
	
	// JavaScript Document