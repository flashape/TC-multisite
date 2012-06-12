/*
 * Seahorse jQuery plugin v1.2
 * http://seahorsejs.sourceforge.net
 *
 * Copyright 2010, José Facundo Maldonado
 * This file is licensed under the LGPL Version 3 license
 * http://www.gnu.org/licenses/lgpl.html
 *
 * Date: 12 July 2010
 */

/*
  Group: About Seahorse jQuery plugin

	  The Seahorse jQuery plugin is a plugin to integrate the Seahorse library with the jQuery framework.
  
      This plugin is licensed under the LGPL Version 3 license.
       
      That means you can use Seahorse to develop commercial or open source projects, but, in both cases, you must publish, under a licence compatible with LGPL v3, any changes you make to the library.
*/

/*
  Group: Functions
*/

/*
Function: seaBehavior()
	Gives to a group of inputs a behavior.

	The behavior type if defined by the 'type' parameter. The valid values for 'type' are: _text_,
	_alphabetical_, _alphanumeric_, _number_, _integer_, _date_, _time_, _ipAddress_, _http_, _ftp_,
	and _email_.

Parameters:
	type - The type of behavior to asign.
	validationOptions - A JSON element with the validation options.
	responseOptions - A JSON element with the response options.
*/

jQuery.fn.seaBehavior = function(type, validationOptions, responseOptions)
	{
	type = (typeof type == "string")? type.toLowerCase() : type.toString().toLowerCase();

	if(!validationOptions) validationOptions = new Object();
	if(!responseOptions) responseOptions = new Object();

	return this.each( function()
		{
		var element = this;
		if(type == 'text') {Seahorse.text(element, validationOptions, responseOptions);} else
		if(type == 'alphabetical') {Seahorse.alphabetical(element, validationOptions, responseOptions);} else
		if(type == 'alphanumeric') {Seahorse.alphanumeric(element, validationOptions, responseOptions);} else
		if(type == 'numeric') {Seahorse.numeric(element, validationOptions, responseOptions);} else
		if(type == 'number') {Seahorse.number(element, validationOptions, responseOptions);} else
		if(type == 'integer') {Seahorse.integer(element, validationOptions, responseOptions);} else
		if(type == 'date') {Seahorse.date(element, validationOptions, responseOptions);} else
		if(type == 'time') {Seahorse.time(element, validationOptions, responseOptions);} else
		if(type == 'ipaddress') {Seahorse.ipAddress(element, validationOptions, responseOptions);} else
		if(type == 'http') {Seahorse.http(element, validationOptions, responseOptions);} else
		if(type == 'ftp') {Seahorse.ftp(element, validationOptions, responseOptions);} else
		if(type == 'email') {Seahorse.email(element, validationOptions, responseOptions);}
		//else if(type == 'form') {Seahorse.form(element, validationOptions, responseOptions);}
		});
	};

/*
Function: seaForm()
	Gives to a group of forms a behavior.

Parameters:
	responseFunction - The function called if one of more inputs of the form are invalid.
	errorMessage - The message to be displayed if one of more inputs of the form are invalid.
*/

jQuery.fn.seaForm = function(responseFunction, errorMessage)
	{
	return this.each( function()
		{
		var element = this;
		Seahorse.form(element, responseFunction, errorMessage);
		});
	};

/*
Function: seaValidate()
	Checks if all the selected elements, that have a Seahorse behavior, have valid values.

returns:
	_true_ if all the elements has valid values and _false_ in the oposite case.
*/

jQuery.fn.seaValidate = function()
	{
	var valid = true;
	this.each( function()
		{
		var element = this;
		if(element.seahorse && ! element.seahorse.validate()) valid = false;
		});
	return valid;
	};

/*
Function: seaVerify()
	Call the function verify() of all the selected elements that have a Seahorse's behavior.
*/

jQuery.fn.seaVerify = function()
	{
	return this.each( function()
		{
		var element = this;
		if(element.seahorse) element.seahorse.verify();
		});
	};
