function checker()
{
	let email = document.getElementById('email').value;
	let pw = document.getElementById('pw').value;
	let item1 = document.getElementById('item1').value;
	let item2 = document.getElementById('item2').value;
	let item3 = document.getElementById('item3').value;

	email_regex = /\S+@\S+\.\S+/;

	if ( !(email_regex.test(email)) ){
		alert('Enter Valid Email Address');
		return false;
	}
	if ( !(pw) ){
		alert('Enter a passowrd');
		return false;
	}
	if( !(item1) ){
		alert('Enter a quantity of iPhones');
		return false;
	}
	if( !(item2) ){
		alert('Enter a quantity of iPads');
		return false;
	}
	if( !(item3) ){
		alert('Enter a quantity of Macbooks');
		return false;
	}
	if ((item1 + item2 + item3) == 0){
		alert('No Item Selected');
		return false;
	} 
}
