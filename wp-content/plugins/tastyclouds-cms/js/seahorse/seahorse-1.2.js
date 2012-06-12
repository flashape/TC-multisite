/*
 * Seahorse JavaScript Library v1.2
 * http://seahorsejs.sourceforge.net
 *
 * Copyright 2010, José Facundo Maldonado
 * This file is licensed under the LGPL Version 3 license
 * http://www.gnu.org/licenses/lgpl.html
 *
 * Date: 12 July 2010
 */

/*
  Group: About Seahorse

  About: Introduction

      Seahorse is an open source JavaScript library created for simplify the use of forms, particularly the form validation.

      It provides functions to validate, parse and serialize data and to add real-time validation to inputs.

      Seahorse can be used alone or it can be used with jQuery, using the plugin designed for that purpose.

  About: License

      This library is licensed under the LGPL Version 3 license.

      That means you can use Seahorse to develop commercial or open source projects, but, in both cases, you must publish, under a licence compatible with LGPL v3, any changes you make to the library.


  Group: Validation behaviors

	  One of the main features of this library are the functions to assign validation behaviors to the inputs.

	  An input with a validation behavior can avoid the input of invalid characters or perform diferent actions (like add a CSS class to a element or invoke a JavaScript function) when a user inserts valid or invalid data.

	  The validation behaviors functions receives as parameter the id of the element to be validated, a JSON element with the validation options and a JSON element with the response options.

  About: Validation options

	  The validation options are parameters that restrict the values, or the format, that the data of an input can have to be considered valid.

	  The variables that can be defined in the JSON element of validation options are

	    notEmpty - A boolean indicating if the field can be left in blank.
		minLength - The minimum length of a text input (by default, 0).
		maxLength - The maximun length of a text input (by default, infinity).
		minValue - The minimum value of a input (by default, minus infinity for numbers and _null_ for dates and times).
		maxValue - The maximun value of a input (by default, infinity for numbers and _null_ for dates and times).
		format - The format of a input (by default 'yyyy-mm-dd' for dates and 'hh:mm:ss' for times).
		autofill - A boolean indicating if the incomplete fields of dates or times must be completed with the actual date or time.
		version - The version of an IP address input (by default, 4).
		requiredCharacters - A string or a array of unicode values representing the group of characters that a text input must have to be considered valid.
		forbiddenCharacters - A string or a array of unicode values representing the group of characters that a text input must not have to be considered valid.
		allowedCharacters - A string or a array of unicode values representing the group of characters that a text input can have and be considered valid, no matter the restrictions of his type.
		asciiCharacters - A boolean indicating if a text input must have only ASCII characters (by default 'false').
		decimalCharacter - The character used as decimal character in a numeric input (by default '.').
		groupingCharacter - The character used as grouping character in a numeric input (by default ',').
		aditionalValidation - A user's defined function that test if a field has a valid value. This function is called only if the field has been validated by the standard Seahorse's validation function.

	  This variables are optionals and they are not used by all the functions, each function uses only a few variables, for example, for restrict the lenght, text() uses _minLength_ and _maxLength_ while number() uses _minValue_ and _maxValue_.

  About: Response options

	  The response options are parameters that determines the courses of actions when an user enter a valid or invalid input.

	  The variables that can be defined in the JSON element of response options are

		errorClass - The class added to the input if the data entered is invalid.
		okClass - The class added to the input if the data entered is valid.
		targetErrorClass - The class added to a given element if the data entered is invalid.
		targetOkClass - The class added to a given element if the data entered is valid.
		targetId - The id of the element to which add the classes 'targetErrorClass' or 'targetOkClass'.
		hiddenElementId - The id of the element to hide or show, depending if the data entered is valid or invalid.
		callbackFunction - A function to invoke after that the input was validated. The function must receive two parameters: 'element' (the object that represents the input) and 'valid' (a boolean indicating if the data entered is valid or not).
		forbidEntrance - A boolean indicating if the entrance of invalid characters must be forbidden (by default, 'true').
		autoparse - A boolean indicating if the data in the fields must be parsed in order to eliminate unnecessary characters.
		errorMessage - A message explaining why the value of the input is invalid.

	  This variables are optionals and can be specified for all the validation functions.
*/

/* Title: Functions */

var Seahorse = {

	// The function _replace() replaces, in the string 'cad', all the ocurrences of the string 'seg' for the string 'reem'.
	// This function assumes that the three parameters are not nulls.
	_replace : function(cad, seg, reem)
		{
		var res = "";
		var t = seg.substring(0,1);
		var c;
		for(var i=0; i<cad.length; i++)
			{
			c = cad.substring(i, i+1);
			if( c == t && i + seg.length <= cad.length && cad.substring(i, i + seg.length) == seg )
				{
				i = i + seg.length -1;
				res = res + reem;
				}
			else
				{res = res + c;}
			}
		return res;
		},

	// The function _groupContainsChar() checks if a string or an array of Unicodes values contains a char.
	// This function assumes that the two parameters are not nulls.
	_groupContainsChar : function(group, c)
		{
		var keynum, charkey ;

		if(typeof c == "string")
			{
			keynum = c.charCodeAt(0);
			charkey = c;
			}
		else
			{
			keynum = c;
			charkey = String.fromCharCode(keynum);
			}

		if(typeof group == "string")
			{return group.indexOf(charkey) >= 0;}
		else
			{
			for(var i=0; i<group.length; i++)
				{if( group[i] == keynum) return true;}
			return false;
			}
		},

	// The function _groupContainsGroup() checks if a string or an array of Unicodes values contains all the chars or values of another string or array of Unicodes values.
	// This function assumes that the two parameters are not nulls.
	_groupContainsGroup : function(group1, group2)
		{
		for(var i=0; i<group2.length; i++)
			{
			var res = (typeof group2 == "string")? Seahorse._groupContainsChar(group1, group2.substring(i,i+1)) : Seahorse._groupContainsChar(group1, group2[i]);
			if(!res) return false;
			}

		return true;
		},

	// The function _getCharsGroupFromString() search in 'cad' the first 'm' ocurrences of consecutives characters contained in 'searchedChars'.
	// This function assumes that the three parameters are not nulls.
	_getCharsGroupFromString : function( cad, searchedChars, m )
		{
		var i, array = new Array(m);
		for(i=0; i<m; i++) array[i] = "";

		var j = 0;
		var prev = false;
		var first = true;

		for(i=0; i<cad.length; i++)
			{
			var c = cad.substring(i, i+1);
			if( searchedChars.indexOf(c) >= 0 )
				{
				if(!prev && !first) j++;
				if(j < m) array[j] = array[j] + c;
				prev = true;
				first = false;
				}
			else
				{prev = false;}
			}

		return array;
		},

	// The function _hasClass() checks if a class is contained in the class attribute of a DOM element.
	// This function assumes that the two parameters are not nulls.
	_hasClass : function(element, className)
		{
		if( element.className )
			{
			var classes = element.className.split(' ');
			className = className.toLowerCase();

			for( var i=0; i<classes.length; i++ )
				{
				if ( classes[i].toLowerCase() == className )
					{return true;}
				}
			}
		return false;
		},

	// The function _addClass() adds a class to the class attribute of a DOM element.
	// This function assumes that the two parameters are not nulls.
	_addClass : function(element, className)
		{
		if( element.className )
			{
			if( ! Seahorse._hasClass(element, className) )
				{element.className += " " + className;}
			}
		  else
			{
			element.className = "" + className;
			}
		},

	// The function _removeClass() removes a class from the class attribute of a DOM element.
	// This function assumes that the two parameters are not nulls.
	_removeClass : function(element, className)
		{
		if( element.className )
			{
			var classes = element.className.split(' ');
			className = className.toLowerCase();
			element.className = "";

			for( var i=0; i<classes.length; i++ )
				{
				if ( classes[i].toLowerCase() != className )
					{element.className += " " + classes[i];}
				}
			}
		},

// -------------------------------------------------------------------------------------------------- //
// -------------------------------------------------------------------------------------------------- //
// -------------------------------------------------------------------------------------------------- //

	// Defaults values for the validation options parameters.
	_validationOptionsDefault : {
		minLength : 0,
		maxLength : Infinity,
		minValue : null,
		maxValue : null,
		format : null,
		version : 4,
		requiredCharacters : "",
		forbiddenCharacters : "",
		allowedCharacters : "",
		decimalCharacter : '.',
		groupingCharacter : ',',
		autofill : true,
		notEmpty : false,
		asciiCharacters : false,
		aditionalValidation : null
		},

	// Defaults values for the response options parameters.
	_responseOptionsDefault : {
		errorClass : null,
		okClass : null,
		targetErrorClass : null,
		targetOkClass : null,
		targetId : null,
		hiddenElementId : null,
		callbackFunction : null,
		forbidEntrance : true,
		autoparse : false,
		errorMessage : ""
		},

	// Common initialization of the response options for an element with a seahorse's behavior.
	_basicInitialization : function( element, validationOptions, responseOptions )
		{
		if(element.seahorse) Seahorse.removeBehavior(element);
		element.seahorse = new Object();
		element.seahorse.options = new Object();
		var opts = element.seahorse.options;

		if(!responseOptions) responseOptions = new Object();
		opts.errorClass = (responseOptions.errorClass)? responseOptions.errorClass : Seahorse._responseOptionsDefault.errorClass;
		opts.okClass = (responseOptions.okClass)? responseOptions.okClass : Seahorse._responseOptionsDefault.okClass;
		opts.targetErrorClass = (responseOptions.targetErrorClass)? responseOptions.targetErrorClass : Seahorse._responseOptionsDefault.targetErrorClass;
		opts.targetOkClass = (responseOptions.targetOkClass)? responseOptions.targetOkClass : Seahorse._responseOptionsDefault.targetOkClass;
		opts.targetId = (responseOptions.targetId)? responseOptions.targetId : Seahorse._responseOptionsDefault.targetId;
		opts.hiddenElementId = (responseOptions.hiddenElementId)? responseOptions.hiddenElementId : Seahorse._responseOptionsDefault.hiddenElementId;
		opts.callbackFunction = (responseOptions.callbackFunction)? responseOptions.callbackFunction : Seahorse._responseOptionsDefault.callbackFunction;
		opts.forbidEntrance = (responseOptions.forbidEntrance != null)? responseOptions.forbidEntrance : Seahorse._responseOptionsDefault.forbidEntrance;
		opts.autoparse = (responseOptions.autoparse != null)? responseOptions.autoparse : Seahorse._responseOptionsDefault.autoparse;
		opts.errorMessage = (responseOptions.errorMessage)? responseOptions.errorMessage : Seahorse._responseOptionsDefault.errorMessage;

		if(!validationOptions) validationOptions = new Object();
		opts.notEmpty = (validationOptions.notEmpty != null)? validationOptions.notEmpty : Seahorse._validationOptionsDefault.notEmpty;
		opts.aditionalValidation = (validationOptions.aditionalValidation)? validationOptions.aditionalValidation : Seahorse._validationOptionsDefault.aditionalValidation;

		element.seahorse_onblur = element.onblur;
		element.seahorse_onkeyup = element.onkeyup;
		element.seahorse_onkeypress = element.onkeypress;
		element.onblur = Seahorse._eventhandler.blur;
		element.onkeyup = Seahorse._eventhandler.keyUp;
		
		element.seahorse.verify = function() {return Seahorse._eventhandler.verify(element);};
		},

	// Common initialization for an element with an integer behavior.
	_integerInitialization : function( element, validationOptions, responseOptions )
		{
		Seahorse._basicInitialization(element, validationOptions, responseOptions);
		if(!validationOptions) validationOptions = new Object();
		var opts = element.seahorse.options;

		if( validationOptions.minValue != 0 && (! validationOptions.minValue || isNaN(validationOptions.minValue)) ) opts.minValue = -Infinity; else opts.minValue = validationOptions.minValue;
		if( validationOptions.maxValue != 0 && (! validationOptions.maxValue || isNaN(validationOptions.maxValue)) ) opts.maxValue =  Infinity; else opts.maxValue = validationOptions.maxValue;

		opts.groupingCharacter = (validationOptions.groupingCharacter)? validationOptions.groupingCharacter : Seahorse._validationOptionsDefault.groupingCharacter;
		opts.decimalCharacter = null;

		element.onkeypress = Seahorse._eventhandler.numberKeyPress;
		},

	// Common initialization for an element with an number behavior.
	_numberInitialization : function( element, validationOptions, responseOptions )
		{
		Seahorse._integerInitialization(element, validationOptions, responseOptions);
		var opts = element.seahorse.options;

		opts.decimalCharacter = (validationOptions.decimalCharacter)? validationOptions.decimalCharacter : Seahorse._validationOptionsDefault.decimalCharacter;
		if(opts.decimalCharacter == opts.groupingCharacter)
			{
			if(opts.decimalCharacter == Seahorse._validationOptionsDefault.decimalCharacter)
				opts.groupingCharacter = Seahorse._validationOptionsDefault.groupingCharacter;
			else
				opts.decimalCharacter = Seahorse._validationOptionsDefault.decimalCharacter;
			}
		},

	// Common initialization for an element with a date behavior.
	_dateInitialization : function( element, validationOptions, responseOptions )
		{
		Seahorse._basicInitialization(element, validationOptions, responseOptions);
		if(!validationOptions) validationOptions = new Object();
		var opts = element.seahorse.options;

		opts.autofill = (validationOptions.autofill != null)? validationOptions.autofill : Seahorse._validationOptionsDefault.autofill;

		if( validationOptions.format && Seahorse.isDateFormat(validationOptions.format) ) opts.format = validationOptions.format; else opts.format = 'yyyy-mm-dd';
		if( validationOptions.minValue && Seahorse.isDate(validationOptions.minValue, opts.format, opts.autofill) ) opts.minValue = validationOptions.minValue; else opts.minValue = null;
		if( validationOptions.maxValue && Seahorse.isDate(validationOptions.maxValue, opts.format, opts.autofill) ) opts.maxValue = validationOptions.maxValue; else opts.maxValue = null;

		element.seahorse.validCharacter = function(c)
			{return opts.format.indexOf(c) >= 0 || Seahorse._isNumericChar(c.charCodeAt(0));};

		element.onkeypress = Seahorse._eventhandler.keyPress;
		},

	// Common initialization for an element with a time behavior.
	_timeInitialization : function( element, validationOptions, responseOptions )
		{
		Seahorse._basicInitialization(element, validationOptions, responseOptions);
		if(!validationOptions) validationOptions = new Object();
		var opts = element.seahorse.options;

		opts.autofill = (validationOptions.autofill != null)? validationOptions.autofill : Seahorse._validationOptionsDefault.autofill;

		if( validationOptions.format && Seahorse.isTimeFormat(validationOptions.format) ) opts.format = validationOptions.format; else opts.format = 'hh:mm:ss';
		if( validationOptions.minValue && Seahorse.isTime(validationOptions.minValue, opts.format, opts.autofill) ) opts.minValue = validationOptions.minValue; else opts.minValue = null;
		if( validationOptions.maxValue && Seahorse.isTime(validationOptions.maxValue, opts.format, opts.autofill) ) opts.maxValue = validationOptions.maxValue; else opts.maxValue = null;

		element.seahorse.validCharacter = function(c)
			{return opts.format.indexOf(c) >= 0 || Seahorse._isNumericChar(c.charCodeAt(0));};

		element.onkeypress = Seahorse._eventhandler.keyPress;
		},

	// Common initialization for an element with a time behavior.
	_ipAddressInitialization : function( element, validationOptions, responseOptions )
		{
		Seahorse._basicInitialization(element, validationOptions, responseOptions);
		if(!validationOptions) validationOptions = new Object();
		var opts = element.seahorse.options;

		if( parseInt(validationOptions.version,10) == 6 ) opts.version = 6; else opts.version = 4;

		element.seahorse.validCharacter = function(c)
			{
			var allowedCharacters = (opts.version == 4)? "0123456789." : "0123456789:";
			return allowedCharacters.indexOf(c) >= 0;
			};

		element.onkeypress = Seahorse._eventhandler.keyPress;
		},

	// Common initialization for an element with a text behavior.
	_textInitialization : function( element, validationOptions, responseOptions )
		{
		Seahorse._basicInitialization(element, validationOptions, responseOptions);
		if(!validationOptions) validationOptions = new Object();
		var opts = element.seahorse.options;

		opts.asciiCharacters = (validationOptions.asciiCharacters != null)? validationOptions.asciiCharacters : Seahorse._validationOptionsDefault.asciiCharacters;

		if( ! validationOptions.minLength || isNaN(validationOptions.minLength) ) opts.minLength = 0; else opts.minLength = validationOptions.minLength;
		if( ! validationOptions.maxLength || isNaN(validationOptions.maxLength) ) opts.maxLength = Infinity; else opts.maxLength = validationOptions.maxLength;

		opts.requiredCharacters = (validationOptions.requiredCharacters)? validationOptions.requiredCharacters : Seahorse._validationOptionsDefault.requiredCharacters;
		opts.forbiddenCharacters = (validationOptions.forbiddenCharacters)? validationOptions.forbiddenCharacters : Seahorse._validationOptionsDefault.forbiddenCharacters;
		opts.allowedCharacters = (validationOptions.allowedCharacters)? validationOptions.allowedCharacters : Seahorse._validationOptionsDefault.allowedCharacters;

		element.seahorse.parse = function()
			{
			var t = 0, k = 0;
			var res = "";
			while(t<element.value.length && k<opts.maxLength)
				{
				var ct = element.value.substring(t,t+1);
				if( element.seahorse.validCharacter(ct) )
					{
					res = res + ct;
					k++;
					}
				t++;
				}
			return res;
			}

		element.seahorse.validate = function()
			{
			if(element.value == null || element.value.length == 0) return (! opts.notEmpty);
			if(element.value.length < opts.minLength || element.value.length > opts.maxLength) return false;

			for(var i=0; i<element.value.length; i++)
				{
				var c = element.value.substring(i,i+1);
				if( ! element.seahorse.validCharacter(c) ) return false;
				}

			if(opts.requiredCharacters != null)
				if(! Seahorse._groupContainsGroup(element.value, opts.requiredCharacters) )
					return false;

			if(opts.aditionalValidation) return opts.aditionalValidation(element);
			return true;
			}

		element.onkeypress = Seahorse._eventhandler.keyPress;
		},

// -------------------------------------------------------------------------------------------------- //
// -------------------------------------------------------------------------------------------------- //
// -------------------------------------------------------------------------------------------------- //

	/* Group: Validation behaviors */

	/*
	Function: text()
		Gives to an element a text input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_, _aditionalValidation_, _minLength_, _maxLength_, _asciiCharacters_, _allowedCharacters_, _requiredCharacters_ and _forbiddenCharacters_).
		responseOptions - A JSON element with the response options.
	*/
	text : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._textInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.validCharacter = function(c)
				{
				if( opts.allowedCharacters != null && Seahorse._groupContainsChar(opts.allowedCharacters, c) ) return true;
				if( opts.forbiddenCharacters != null && Seahorse._groupContainsChar(opts.forbiddenCharacters, c) ) return false;
				if( opts.asciiCharacters && ! Seahorse._isAscii(c.charCodeAt(0)) ) return false;
				return true;
				};
			}
		},

	/*
	Function: alphabetical()
		Gives to an element an alphabetical input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_, _aditionalValidation_, _minLength_, _maxLength_, _asciiCharacters_, _allowedCharacters_, _requiredCharacters_ and _forbiddenCharacters_).
		responseOptions - A JSON element with the response options.
	*/
	alphabetical : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._textInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.validCharacter = function(c)
				{
				if( opts.allowedCharacters != null && Seahorse._groupContainsChar(opts.allowedCharacters, c) ) return true;
				if( opts.forbiddenCharacters != null && Seahorse._groupContainsChar(opts.forbiddenCharacters, c) ) return false;
				if( opts.asciiCharacters )
					return Seahorse._isAsciiAlphabeticalChar(c.charCodeAt(0));
				  else
					return Seahorse._isAlphabeticalChar(c.charCodeAt(0));
				};
			}
		},

	/*
	Function: alphanumeric()
		Gives to an element an alphanumeric input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_, _aditionalValidation_, _minLength_, _maxLength_, _asciiCharacters_, _allowedCharacters_, _requiredCharacters_ and _forbiddenCharacters_).
		responseOptions - A JSON element with the response options.
	*/
	alphanumeric : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._textInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.validCharacter = function(c)
				{
				if( opts.allowedCharacters != null && Seahorse._groupContainsChar(opts.allowedCharacters, c) ) return true;
				if( opts.forbiddenCharacters != null && Seahorse._groupContainsChar(opts.forbiddenCharacters, c) ) return false;
				if( opts.asciiCharacters )
					return Seahorse._isAsciiAlphanumericChar(c.charCodeAt(0));
				  else
					return Seahorse._isAlphanumericChar(c.charCodeAt(0));
				};
			}
		},

	/*
	Function: numeric()
		Gives to an element a numeric input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_, _aditionalValidation_, _minLength_, _maxLength_, _asciiCharacters_, _allowedCharacters_, _requiredCharacters_ and _forbiddenCharacters_).
		responseOptions - A JSON element with the response options.
	*/
	numeric : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._textInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.validCharacter = function(c)
				{
				if( opts.allowedCharacters != null && Seahorse._groupContainsChar(opts.allowedCharacters, c) ) return true;
				if( opts.forbiddenCharacters != null && Seahorse._groupContainsChar(opts.forbiddenCharacters, c) ) return false;
				return Seahorse._isNumericChar(c.charCodeAt(0));
				};
			}
		},

	/*
	Function: number()
		Gives to an element a float input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_, _aditionalValidation_, _minValue_, _maxValue_, _groupingCharacter_ and _decimalCharacter_).
		responseOptions - A JSON element with the response options.
	*/
	number : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._numberInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.parse = function()
				{return Seahorse.parseNumber(element.value, opts.decimalCharacter, opts.groupingCharacter);};

			element.seahorse.validate = function()
				{
				if(element.value == null || element.value.length == 0) return (! opts.notEmpty);
				var valor = Seahorse.parseNumber(element.value, opts.decimalCharacter, opts.groupingCharacter);
				var valid = Seahorse.isNumber(element.value, opts.decimalCharacter, opts.groupingCharacter) &&
							valor >= opts.minValue && valor <= opts.maxValue;

				if(valid && opts.aditionalValidation) return opts.aditionalValidation(element);
				return valid;
				};
			}
		},

	/*
	Function: integer()
		Gives to an element an integer input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_, _aditionalValidation_, _minValue_, _maxValue_ and _groupingCharacter_).
		responseOptions - A JSON element with the response options.
	*/
	integer : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._integerInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.parse = function()
				{return Seahorse.parseInteger(element.value, opts.groupingCharacter);};

			element.seahorse.validate = function()
				{
				if(element.value == null || element.value.length == 0) return (! opts.notEmpty);
				var valor = Seahorse.parseInteger(element.value, opts.groupingCharacter);
				var valid = Seahorse.isInteger(element.value, opts.groupingCharacter) &&
							valor >= opts.minValue && valor <= opts.maxValue;
				if(valid && opts.aditionalValidation) return opts.aditionalValidation(element);
				return valid;
				};
			}
		},

	/*
	Function: date()
		Gives to an element a date input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_, _aditionalValidation_, _minValue_, _maxValue_, _autofill_ and _format_).
		responseOptions - A JSON element with the response options.
	*/
	date : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._dateInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.parse = function()
				{return Seahorse.parseDate(element.value, opts.format, opts.autofill);};

			element.seahorse.validate = function()
				{
				if(element.value == null || element.value.length == 0) return (! opts.notEmpty);
				var valor = Seahorse.parseDate(element.value, opts.format, opts.autofill);
				var cmpMin = Seahorse.compareDate(valor, opts.minValue, opts.format);
				var cmpMax = Seahorse.compareDate(valor, opts.maxValue, opts.format);
				var valid = Seahorse.isDate(element.value, opts.format, opts.autofill) &&
							(cmpMin == null || cmpMin >= 0) && (cmpMax == null || cmpMax <= 0);
				if(valid && opts.aditionalValidation) return opts.aditionalValidation(element);
				return valid;
				};
			}
		},

	/*
	Function: time()
		Gives to an element a time input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_, _aditionalValidation_, _minValue_, _maxValue_, _autofill_ and _format_).
		responseOptions - A JSON element with the response options.
	*/
	time : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._timeInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.parse = function()
				{return Seahorse.parseTime(element.value, opts.format, opts.autofill);};

			element.seahorse.validate = function()
				{
				if(element.value == null || element.value.length == 0) return (! opts.notEmpty);
				var valor = Seahorse.parseTime(element.value, opts.format, opts.autofill);
				var cmpMin = Seahorse.compareTime(valor, opts.minValue, opts.format);
				var cmpMax = Seahorse.compareTime(valor, opts.maxValue, opts.format);
				var valid = Seahorse.isTime(element.value, opts.format, opts.autofill) &&
							(cmpMin == null || cmpMin >= 0) && (cmpMax == null || cmpMax <= 0);
				if(valid && opts.aditionalValidation) return opts.aditionalValidation(element);
				return valid;
				};
			}
		},

	/*
	Function: ipAddress()
		Gives to an element an IP address input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_, _aditionalValidation_ and _version_).
		responseOptions - A JSON element with the response options.
	*/
	ipAddress : function( element, validationOptions, responseOptions )
		{ 
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._ipAddressInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.parse = function()
				{return element.value;};

			element.seahorse.validate = function()
				{
				if(element.value == null || element.value.length == 0) return (! opts.notEmpty);
				var valid;
				if(opts.version == 4)
					valid = Seahorse.isIPv4(element.value);
				else
					valid = Seahorse.isIPv6(element.value);
				if(valid && opts.aditionalValidation) return opts.aditionalValidation(element);
				return valid;
				};
			}
		},

	/*
	Function: email()
		Gives to an element an e-mail address input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_ and _aditionalValidation_).
		responseOptions - A JSON element with the response options.
	*/
	email : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._basicInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.parse = function()
				{return element.value;};

			element.seahorse.validate = function()
				{
				if(element.value == null || element.value.length == 0) return (! opts.notEmpty);
				var valid = Seahorse.isEmail(element.value);
				if(valid && opts.aditionalValidation) return opts.aditionalValidation(element);
				return valid;
				};
			}
		},

	/*
	Function: http()
		Gives to an element a HTTP address input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_ and _aditionalValidation_).
		responseOptions - A JSON element with the response options.
	*/
	http : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._basicInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.parse = function()
				{return element.value;};

			element.seahorse.validate = function()
				{
				if(element.value == null || element.value.length == 0) return (! opts.notEmpty);
				var valid = Seahorse.isHttp(element.value);
				if(valid && opts.aditionalValidation) return opts.aditionalValidation(element);
				return valid;
				};
			}
		},

	/*
	Function: ftp()
		Gives to an element a FTP address input behavior.

	Parameters:
		element - The element id or the element object.
		validationOptions - A JSON element with the validation options (_notEmpty_ and _aditionalValidation_).
		responseOptions - A JSON element with the response options.
	*/
	ftp : function( element, validationOptions, responseOptions )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element )
			{
			Seahorse._basicInitialization(element, validationOptions, responseOptions);
			var opts = element.seahorse.options;

			element.seahorse.parse = function()
				{return element.value;};

			element.seahorse.validate = function()
				{
				if(element.value == null || element.value.length == 0) return (! opts.notEmpty);
				var valid = Seahorse.isFtp(element.value);
				if(valid && opts.aditionalValidation) return opts.aditionalValidation(element);
				return valid;
				};
			}
		},

	/*
	Function: form()
		Gives to an element a form behavior.

		That means that it modifies the submit method of the form in order to validate all the inputs before submit.

		The 'responseFunction' parameter is the function called when the form is submited but
		one or more inputs, of the form, has invalid values. This function must receive two parameters:
		a string with the error messages of the form and the inputs and an array with all the input
		elements that have invalid values.

	Parameters:
		form - The form id or the form object.
		responseFunction - The function called if one of more inputs of the form are invalid.
		errorMessage - The message to be displayed if one of more inputs of the form are invalid.
	*/
	form : function( form, responseFunction, errorMessage )
		{
		if(typeof form == "string") form = document.getElementById(form);
		if( form && form.elements )
			{
			form.seahorse = new Object();
			form.seahorse.errorMessage = errorMessage;
			form.seahorse.responseFunction = responseFunction;
			form.seahorse_submit = form.onsubmit;

			form.onsubmit = function()
				{
				var msj = form.seahorse.errorMessage + "\n";
				var array = new Array();
				var element, k = 0;

				for(var i=0; i<form.elements.length; i++)
					{
					element = form.elements[i];
					if(element.seahorse && ! element.seahorse.verify())
						{
						if(element.seahorse.options.errorMessage.length > 0) msj += "\n" + element.seahorse.options.errorMessage;
						array[k] = element;
						k++;
						}
					}

				if(k == 0)
					{
					if(form.seahorse_submit)
						return form.seahorse_submit();
					else
						return true;
					}
				else
					{
					if(form.seahorse.responseFunction) form.seahorse.responseFunction(msj, array);
					if(form.seahorse_submit) form.seahorse_submit();
					return false;
					}
				}
			}
		},

	/*
	Function: removeBehavior()
		Removes, from a element, any behavior asigned by a function of the Seahorse's library.

	Parameters:
		element - The element id or the element object.
	*/
	removeBehavior : function( element )
		{
		if(typeof element == "string") element = document.getElementById(element);
		if( element && element.seahorse )
			{
			element.seahorse = null;

			element.onblur = (element.seahorse_onblur)? element.seahorse_onblur : null ;
			element.onkeyup = (element.seahorse_onkeyup)? element.seahorse_onkeyup : null ;
			element.onkeypress = (element.seahorse_onkeypress)? element.seahorse_onkeypress : null ;
			}
		},

// -------------------------------------------------------------------------------------------------- //
// -------------------------------------------------------------------------------------------------- //
// -------------------------------------------------------------------------------------------------- //

	/* Group: Validation functions */

	// ++++++++++++++++++++ Characters ++++++++++++++++++++//

	// _isAscii() receives the decimal code of a character and checks if the code corresponds to a ASCII character.
	_isAscii : function( c )
		{
		return (c >= 0 && c <= 127);		// u0000 - u007F (ascii characters)
		},

	// _isAsciiSpecialKey() receives the decimal code of a character and checks if the code correspond to a ASCII special key.
	_isAsciiSpecialKey : function ( c )
		{
		return (c >= 0 && c <= 31) || c == 127;
		},

	// _isAsciiAlphabeticalChar() receives the decimal code of a character and checks if the code is the code of a ASCII letter.
	_isAsciiAlphabeticalChar : function( c )
		{
		return  (c >= 65 && c <= 90) ||		// u0041 - u005A (upper case letters)
				(c >= 97 && c <= 122) ;		// u0061 - u007A (lower case letters)
		},

	// _isAsciiAlphanumericChar() receives the decimal code of a character and checks if the code is the code of a ASCII letter or number.
	_isAsciiAlphanumericChar : function( c )
		{
		return  (c >= 65 && c <= 90) ||		// u0041 - u005A (upper case letters)
				(c >= 97 && c <= 122) ||	// u0061 - u007A (lower case letters)
				(c >= 48 && c <= 57) ;		// u0030 - u0039 (numbers)
		},

	// _isNumericChar() receives the decimal code of a character and checks if the code is the code of a number.
	_isNumericChar : function( c )
		{
		return  (c >= 48 && c <= 57);		// u0030 - u0039 (numbers)
		},

	// _isAlphabeticalChar() receives the decimal code of a character and checks if the code is the code of a Unicode letter.
	_isAlphabeticalChar : function( c )
		{
		return  (c >= 65 && c <= 90) ||			// u0041 - u005A (upper case letters)
				(c >= 97 && c <= 122) ||		// u0061 - u007A (lower case letters)
				(c >= 170 && c <= 535) ||		// u00AA - u00DF | u00E0 - u00FF | u0100 - u017E | u017F - u0217
				(c >= 592 && c <= 680) ||		// u0250 - u02A8
				(c >= 7680 && c <= 7835) ||		// u1E00 - u1E9B
				(c >= 7840 && c <= 7929) ||		// u1EA0 - u1EF9
				(c >= 64257 && c <= 64258) ;	// uFB01 - uFB02
		},

	// _isAlphanumericChar() receives the decimal code of a character and checks if the code is the code of a Unicode letter or number.
	_isAlphanumericChar : function( c )
		{
		return  (c >= 65 && c <= 90) ||			// u0041 - u005A (upper case letters)
				(c >= 97 && c <= 122) ||		// u0061 - u007A (lower case letters)
				(c >= 170 && c <= 535) ||		// u00AA - u00DF | u00E0 - u00FF | u0100 - u017E | u017F - u0217
				(c >= 592 && c <= 680) ||		// u0250 - u02A8
				(c >= 7680 && c <= 7835) ||		// u1E00 - u1E9B
				(c >= 7840 && c <= 7929) ||		// u1EA0 - u1EF9
				(c >= 64257 && c <= 64258) ||	// uFB01 - uFB02
				(c >= 48 && c <= 57) ;	 		// u0030 - u0039 (numbers)
		},

	// ++++++++++++++++++++ Strings ++++++++++++++++++++//

	/*
	Function: isNumber()
		Checks if a string represents a number.

	Parameters:
		cad - A string.
		ds - The character used as digital separator.
		gs - The character used as grouping separator.

	Returns:
		_true_ if the string represents a number and _false_ in the opposite case.
	*/
	isNumber : function( cad, ds, gs )
		{
		if(cad == null || cad.length == 0) {return false;}

		if( gs != null && gs.length > 0) cad = Seahorse._replace(cad, gs, '');
		if( ds != null && ds.length > 0) cad = Seahorse._replace(cad, ds, '.');

		return ! isNaN(cad);
		},

	/*
	Function: isInteger()
		Checks if a string represents an integer.

	Parameters:
		cad - A string.
		gs - The character used as grouping separator.

	Returns:
		_true_ if the string represents an integer and _false_ in the opposite case.
	*/
	isInteger : function( cad, gs )
		{
		if(cad == null || cad.length == 0) {return false;}

		if(gs != null && gs.length > 0) cad = Seahorse._replace(cad, gs, '');
		var regExp = /^(\+|-)?[0-9]*$/;

		return regExp.test(cad);
		},

	/*
	Function: isNumeric()
		Checks if a string contains only numbers.

	Parameters:
		cad - A string.

	Returns:
		_true_ if the string contains only numbers and _false_ in the opposite case.
	*/
	isNumeric : function( cad )
		{
		if(cad == null || cad.length == 0) {return false;}

		var regExp = /^[0-9]*$/;
		return regExp.test(cad);
		},

	/*
	Function: isAlphabetical()
		Checks if a string contains only alphabetical characters (including accents and another not Ascii characters).

	Parameters:
		cad - A string.

	Returns:
		_true_ if the string contains only alphabetical characters and _false_ in the opposite case.
	*/
	isAlphabetical : function( cad )
		{
		if(cad == null || cad.length == 0) {return false;}

		var c;
		for(var i=0; i<cad.length; i++)
			{
			c = cad.charCodeAt(i);
			if( ! Seahorse._isAlphabeticalChar(c) ) {return false;}
			}
		return true;
		},

	/*
	Function: isAlphanumeric()
		Checks if a string contains only alphanumeric characters.

	Parameters:
		cad - A string.

	Returns:
		_true_ if the string contains only alphanumeric characters and _false_ in the opposite case.
	*/
	isAlphanumeric : function( cad )
		{
		if(cad == null || cad.length == 0) {return false;}

		var c;
		for(var i=0; i<cad.length; i++)
			{
			c = cad.charCodeAt(i);
			if( ! Seahorse._isAlphanumericChar(c) ) {return false;}
			}

		return true;
		},

	/*
	Function: isAlphabeticalAscii()
		Checks if a string contains only alphabetical ASCII characters.

	Parameters:
		cad - A string.

	Returns:
		_true_ if the string contains only alphabetical ASCII characters and _false_ in the opposite case.
	*/
	isAlphabeticalAscii : function( cad )
		{
		if(cad == null || cad.length == 0) {return false;}

		var regExp = /^[a-zA-Z]*$/;
		return regExp.test(cad);
		},

	/*
	Function: isAlphanumericAscii()
		Checks if a string contains only alphanumeric ASCII characters.

	Parameters:
		cad - A string.

	Returns:
		_true_ if the string contains only alphanumeric ASCII characters and _false_ in the opposite case.
	*/
	isAlphanumericAscii : function( cad )
		{
		if(cad == null || cad.length == 0) {return false;}

		var regExp = /^[0-9a-zA-Z]*$/;
		return regExp.test(cad);
		},

	/*
	Function: isAsciiText()
		Checks if a string contains only ASCII characters.

	Parameters:
		cad - A string.

	Returns:
		_true_ if the string contains only ASCII characters and _false_ in the opposite case.
	*/
	isAsciiText : function( cad )
		{
		if(cad == null || cad.length == 0) {return false;}

		var c;
		for(var i=0; i<cad.length; i++)
			{
			c = cad.charCodeAt(i);
			if( ! Seahorse._isAscii(c) ) {return false;}
			}

		return true;
		},

	/*
	Function: isIPv4()
		Checks if a string represents an IP version 4 address.

	Parameters:
		ip - A string.

	Returns:
		_true_ if the string represents an IP version 4 address and _false_ in the opposite case.
	*/
	isIPv4 : function( ip )
		{
		return Seahorse.parseIPv4(ip) != null;
		},

	/*
	Function: isIPv6()
		Checks if a string represents an IP version 6 address.

	Parameters:
		ip - A string.

	Returns:
		_true_ if the string represents an IP version 6 address and _false_ in the opposite case.
	*/
	isIPv6 : function( ip )
		{
		if(ip == null || ip.length == 0) {return false;}

		var regExp = /^(([0-9a-fA-F]{0,4})\:([0-9a-fA-F]{0,4})\:([0-9a-fA-F]{0,4})\:([0-9a-fA-F]{0,4})\:([0-9a-fA-F]{0,4})\:([0-9a-fA-F]{0,4})\:([0-9a-fA-F]{0,4})\:([0-9a-fA-F]{0,4}))$/;
		return regExp.test(ip);
		},

	/*
	Function: isEmail()
		Checks if a string represents an e-mail address.

	Parameters:
		mail - A string.

	Returns:
		_true_ if the string represents an e-mail address and _false_ in the opposite case.
	*/
	isEmail : function( mail )
		{
		if(mail == null || mail.length == 0) {return false;}

		var regExp = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$/;
		return regExp.test(mail);
		},

	/*
	Function: isHttp()
		Checks if a string represents a HTTP address.

	Parameters:
		http - A string.

	Returns:
		_true_ if the string represents a HTTP address and _false_ in the opposite case.
	*/
	isHttp : function( http )
		{
		if(http == null || http.length == 0) {return false;}

		var regExp = /^((http(s?))\:\/\/)([0-9a-zA-Z\-]+\.)+[a-zA-Z]{2,6}(\:[0-9]+)?(\/\S*)?$/;
		return regExp.test(http);
		},

	/*
	Function: isFtp()
		Checks if a string represents a FTP address.

	Parameters:
		ftp - A string.

	Returns:
		_true_ if the string represents a FTP address and _false_ in the opposite case.
	*/
	isFtp : function( ftp )
		{
		if(ftp == null || ftp.length == 0) {return false;}

		var regExp = /^((ftp)\:\/\/)([0-9a-zA-Z\-]+\.)+[a-zA-Z]{2,6}(\:[0-9]+)?(\/\S*)?$/;
		return regExp.test(ftp);
		},

	/*
	Function: isMonth()
		Checks if a string represents a month.
		This function considers that a month is a number that must be between 1 and 12 (while the class Date considers a month like a number between 0 and 11).

	Parameters:
		mes - A string.

	Returns:
		_true_ if the string represents a month and _false_ in the opposite case.
	*/
	isMonth : function( mes )
		{
		return Seahorse.isInteger(mes) && parseInt(mes, 10) > 0 && parseInt(mes, 10) <=12;
		},

	/*
	Function: isDay()
		Checks if a string represents a day of a particular month.
		This function considers that a month is a number that must be between 1 and 12 (while the class Date considers a month like a number between 0 and 11).

	Parameters:
		dia - A string that represents a day.
		mes - A string that represents a month.
		anio - A string that represents a year.

	Returns:
		_true_ if 'dia' represents a day of the month 'mes' and _false_ in the opposite case or if 'mes' it's not a month.
	*/
	isDay : function(dia, mes, anio)
		{
		if(!mes) mes = 12;
		if(!anio) anio = 400;

		if( ! Seahorse.isMonth(mes) || isNaN(anio) ) return false;
		if( ! Seahorse.isInteger(dia, null) || parseInt(dia, 10) <= 0 ) return false;

		var diasXmes = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
		var esBisiesto = (anio % 400 == 0) || (anio % 4 == 0 && anio % 100 != 0);
		if( esBisiesto ) diasXmes[1] = 29;

		if(parseInt(dia, 10) > diasXmes[parseInt(mes, 10) -1] ) return false;
		return true;
		},

	/*
	Function: isDate()
		Checks if string represents a date.

	Parameters:
		cad - A string that represents a date.
		format - A string that represents a date format.
		fill - A boolean that indicates if the empty fields have to be completed with the actual date.

	Returns:
		_true_ if the string represents a date and _false_ in the oposite case.
	*/
	isDate : function( cad, format, fill )
		{
		if(cad == null || cad.length == 0) {return false;}
		return Seahorse.parseDate(cad, format, fill) != null;
		},

	/*
	Function: isTime()
		Checks if string represents an instant of time.

	Parameters:
		cad - A string that represents an instant of time.
		format - A string that represents a time format.
		fill - A boolean that indicates if the empty fields have to be completed with the actual time.

	Returns:
		_true_ if the string represents an instant of time and _false_ in the oposite case.
	*/
	isTime : function( cad, format, fill )
		{
		if(cad == null || cad.length == 0) {return false;}
		return Seahorse.parseTime(cad, format, fill) != null;
		},

	/*
	Function: isDateFormat()
		Checks if string is a valid date format.

	Parameters:
		cad - A string that represents a date format.

	Returns:
		_true_ if the string is a valid date format and _false_ in the oposite case.
	*/
	isDateFormat : function( format )
		{
		if(format == null || format.length == 0) return false;

		var formatArray = Seahorse._getCharsGroupFromString(format.toLowerCase(), "dmy", 3);
		var day = false;
		var month = false;
		var year = false;

		for(var i=0; i<3; i++)
			{
			if(!day)   day = formatArray[i] == 'd' || formatArray[i] == 'dd';
			if(!month) month = formatArray[i] == 'm' || formatArray[i] == 'mm';
			if(!year)  year = formatArray[i] == 'yy' || formatArray[i] == 'yyyy';
			}

		return day || month || year;
		},

	/*
	Function: isTimeFormat()
		Checks if string is a valid time format.

	Parameters:
		cad - A string that represents a time format.

	Returns:
		_true_ if the string is a valid time format and _false_ in the oposite case.
	*/
	isTimeFormat : function( format )
		{
		if(format == null || format.length == 0) return false;

		var formatArray = Seahorse._getCharsGroupFromString(format.toLowerCase(), "hms", 3);
		var sec = false;
		var min = false;
		var hour = false;

		for(var i=0; i<3; i++)
			{
			if(!sec)   sec = formatArray[i] == 's' || formatArray[i] == 'ss';
			if(!min)   min = formatArray[i] == 'm' || formatArray[i] == 'mm';
			if(!hour)  hour = formatArray[i] == 'h' || formatArray[i] == 'hh';
			}

		return sec || min || hour;
		},

	/*
	Function: validateForm()
		Checks if all the elements of a form have valid values.

	Parameters:
		idForm - The id of the form to be validated.

	Returns:
		_true_ if all the elements of the form have valid values.
		_false_ if one or more elements of the form have invalid values.
	*/
	validateForm : function( idForm )
		{
		var form = document.getElementById(idForm);

		if(form && form.elements)
			{
			for(var i=0; i<form.elements.length; i++)
				{
				var element = form.elements[i];
				if(element.seahorse && ! element.seahorse.validate())
					{return false;}
				}
			return true;
			}

		return false;
		},

	/*
	Function: passFilter()
		Acording to the value of 'contains', checks if all the characters of 'cad' are contained in 'filter' or if neither of the characters are contained.

	Parameters:
		cad - A string to filter.
		filter - A string used as filter.
		contains - A boolean indicating the mode of operation.

	Returns:
		_true_ if all the characters of 'cad' are contained in 'filter' and _false_ in the oposite case.
		_true_ if neither of the characters of 'cad' are contained in 'filter' and _false_ in the oposite case.
	*/
	passFilter : function(cad, filter, contains)
		{
		return cad == Seahorse.filterString(cad, filter, contains);
		},

// -------------------------------------------------------------------------------------------------- //
// -------------------------------------------------------------------------------------------------- //
// -------------------------------------------------------------------------------------------------- //

	/* Group: Parsing functions */

	/*
	Function: parseNumber()
		Parses a string and returns an number.

	Parameters:
		cad - A string.
 		ds - The character used as digital separator.
		gs - The character used as grouping separator.

	Returns:
		A number if the string is a number or NaN in the oposite case.
	*/
	parseNumber : function( cad, ds, gs )
		{
		if(cad != null && cad.length > 0)
			{
			if( gs != null && gs.length > 0) cad = Seahorse._replace(cad, gs, '');
			if( ds != null && ds.length > 0) cad = Seahorse._replace(cad, ds, '.');
			}

		return parseFloat(cad);
		},

	/*
	Function: parseInteger()
		Parses a string and returns a integer.

	Parameters:
		cad - A string.
		gs - The character used as grouping separator.

	Returns:
		An integer if the string is a number or NaN in the oposite case.
	*/
	parseInteger : function( cad, gs )
		{
		if(cad != null && cad.length != 0)
			if( gs != null && gs.length > 0) cad = Seahorse._replace(cad, gs, '');

		return parseInt(cad, 10);
		},

	/*
	Function: parseIPv4()
		Parses a string that represents an IPv4 address and returns a array with four numbers.

	Parameters:
		ip - A string.

	Returns:
		An array of four numbers if the string represents an IPv4 address or _null_ in the oposite case.
	*/
	parseIPv4 : function( ip )
		{
		var regExp = /^(([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3})\.([0-9]{1,3}))$/;
		if(regExp.test(ip))
			{
			var array = Seahorse._getCharsGroupFromString(ip, "0123456789", 4);
			for(var i=0; i<4; i++)
				{
				if( isNaN(array[i]) || array[i] > 255)
					return null;
				}
			return array;
			}
		return null;
		},

	/*
	Function: parseIPv6()
		Parses a string that represents an IPv6 address and returns a array with eight hexadecimal numbers.

	Parameters:
		ip - A string.

	Returns:
		An array of eight hexadecimal numbers if the string represents an IPv6 address or _null_ in the oposite case.
	*/
	parseIPv6 : function( ip )
		{
		if( ! Seahorse.isIPv6(ip) ) return null;

		var array = new Array(8);
		var pos1 = 0;
		var pos2 = ip.indexOf(':');

		for(var i=0; i<8; i++)
			{
			if(pos1 != pos2 + 1)
				{
				array[i] = ip.substring(pos1, pos2);
				while(array[i].length < 4) array[i] = '0'.concat(array[i]);
				array[i] = "0x".concat(array[i]);
				}
			  else
				{array[i] = "0x0000";}

			pos1 = pos2 + 1;
			if(i < 6) pos2 = ip.indexOf(':', pos1); else pos2 = ip.length;
			}

		return array;
		},

	/*
	Function: parseDate()
		Receives a string representing a date and transforms it according to the format passed as parameter.

	Parameters:
		cad - A string that represents a date.
		format - A string that represents a valid date format.
		fill - A boolean that indicates if the empty fields have to be completed with the actual date.

	Returns:
		A formated string that represents a date if 'cad' represents a date and 'format' is a valid date format or _null_ in the oposite case.
	*/
	parseDate : function( cad, format, fill )
		{
		if(cad == null || format == null || format.length == 0) return null;
		if(Seahorse.passFilter(cad, "0123456789", false)) return null;

		var formatArray = Seahorse._getCharsGroupFromString(format.toLowerCase(), "dmy", 3);
		var dateArray = Seahorse._getCharsGroupFromString(cad, "0123456789", 3);

		var date = new Date();
		var day, month, year;
		var res = format;

		for(var i=0; i<formatArray.length; i++)
			{
			var fai = formatArray[i];

			if(fai == 'd' || fai == 'dd')
				{
				day = dateArray[i];

				if(day == null || day.length == 0) {if(fill) day = date.getDate() + ""; else return null;}
				if(day.length > 2) return null;

				if(parseInt(day, 10) < 10 && day.length > 1 && fai == 'd') day = day.substring(1,2);
				if(day.length < 2 && fai == 'dd') day = '0' + day;

				res = Seahorse._replace(res, fai, day);
				}

			if(fai == 'm' || fai == 'mm')
				{
				month = dateArray[i];

				if(month == null || month.length == 0) {if(fill) month = (date.getMonth() + 1) + ""; else return null;}
				if(month.length > 2) return null;

				if(parseInt(month, 10) < 10 && month.length > 1 && fai == 'm') month = month.substring(1,2);
				if(month.length < 2 && fai == 'mm') month = '0' + month;

				res = Seahorse._replace(res, fai, month);
				}

			if(fai == 'yy' || fai == 'yyyy')
				{
				year = dateArray[i];

				if(year == null || year.length == 0)
					{
					if(fill)
						{
						year = date.getFullYear() + "";
						if(year.length > fai.length ) year = year.substring(year.length - fai.length, year.length);
						}
					else
						return null;
					}
				if(year.length > fai.length ) return null;

				if(year.length < fai.length)
					{
					if(fai == 'yy')
						{year = '0' + year;}
					else
						{
						// fai == 'yyyy'
						if(fill)
							{
							var fullYear = date.getFullYear().toString();
							year = fullYear.substring(0, fai.length - year.length) + year;
							}
						else
							{
							while(year.length < fai.length)
								{year = '0' + year;}
							}
						}
					}

				res = Seahorse._replace(res, fai, year);
				}
			}

		if(day)
			if( ! Seahorse.isDay(day, month, year) ) return null;
			else
			{if(month && parseInt(month,10) < 0 && parseInt(month,10) > 12) return null;}

		return res;
		},

	/*
	Function: parseTime()
		Receives a string representing an instant of time and transforms it according to the format passed as parameter.

	Parameters:
		cad - A string that represents an instant of time.
		format - A string that represents a valid time format.
		fill - A boolean that indicates if the empty fields have to be completed with the actual time.

	Returns:
		A formated string that represents an instant of time if 'cad' represents an instant of time and 'format' is a valid time format or _null_ in the oposite case.
	*/
	parseTime : function( cad, format, fill )
		{
		if(cad == null || format == null || format.length == 0) return null;
		if(Seahorse.passFilter(cad, "0123456789", false)) return null;

		var formatArray = Seahorse._getCharsGroupFromString(format.toLowerCase(), "hms", 3);
		var timeArray = Seahorse._getCharsGroupFromString(cad, "0123456789", 3);

		var date = new Date();
		var hour, minute, second;
		var res = format;

		for(var i=0; i<formatArray.length; i++)
			{
			var fai = formatArray[i];

			if(fai == 's' || fai == 'ss')
				{
				second = timeArray[i];

				if(second == null || second.length == 0) {if(fill) second = date.getSeconds() + ""; else return null;}
				if(isNaN(second) || parseInt(second, 10) < 0 || parseInt(second, 10) >= 60) return null;

				if(parseInt(second, 10) < 10 && second.length > 1 && fai == 's') second = second.substring(1,2);
				if(second.length < 2 && fai == 'ss') second = '0' + second;

				res = Seahorse._replace(res, fai, second);
				}

			if(fai == 'm' || fai == 'mm')
				{
				minute = timeArray[i];

				if(minute == null || minute.length == 0) {if(fill) minute = date.getMinutes() + ""; else return null;}
				if(isNaN(minute) || parseInt(minute, 10) < 0 || parseInt(minute, 10) >= 60) return null;

				if(parseInt(minute, 10) < 10 && minute.length > 1 && fai == 'm') minute = minute.substring(1,2);
				if(minute.length < 2 && fai == 'mm') minute = '0' + minute;

				res = Seahorse._replace(res, fai, minute);
				}

			if(fai == 'h' || fai == 'hh')
				{
				hour = timeArray[i];

				if(hour == null || hour.length == 0) {if(fill) hour = date.getHours() + ""; else return null;}
				if(isNaN(hour) || parseInt(hour, 10) < 0 || parseInt(hour, 10) >= 24) return null;

				if(parseInt(hour, 10) < 10 && hour.length > 1 && fai == 'h') hour = hour.substring(1,2);
				if(hour.length < 2 && fai == 'hh') hour = '0' +hour;

				res = Seahorse._replace(res, fai, hour);
				}
			}

		return res;
		},

	/*
	Function: filterString()
		Returns all the characters of 'cad' that are contained, or that aren't contained, in 'filter'.

	Parameters:
		cad - A string to filter.
		filter - A string used as filter.
		contains - A boolean indicating the mode of operation.

	Returns:
		All the characters of 'cad' that are contained in 'filter', if 'contains' is equal to _true_.
		All the characters of 'cad' that aren't contained in 'filter', if 'contains' is equal to _false_.
	*/
	filterString : function(cad, filter, contains)
		{
		if(contains != false) contains = true;
		if(cad == null || cad.length == 0) return cad;
		if(filter == null || filter.length == 0) {if(contains) return ''; else return cad;}

		var res = "";
		for(var i=0; i<cad.length; i++)
			{
			var c = cad.substring(i, i+1);
			if(contains && filter.indexOf(c) >= 0) res = res + c;
			if(!contains && filter.indexOf(c) < 0) res = res + c;
			}

		return res;
		},

// -------------------------------------------------------------------------------------------------- //
// -------------------------------------------------------------------------------------------------- //
// -------------------------------------------------------------------------------------------------- //

	/* Group: Others */

	/*
	Function: compareDate()
		Compare two strings that represents dates.

	Parameters:
		date1 - The first date.
 		date2 - The second date.
		dateFormat - The date format of the two dates.

	Returns:
		A negative number if _date1_ < _date2_, a positive number if _date1_ > _date2_, zero if _date1_ = _date2_ or null in case of error.
	*/
	compareDate : function( date1, date2, dateFormat )
		{
		if(date1 == null || date2 == null || dateFormat == null || ! Seahorse.isDateFormat(dateFormat)) return null;

		dateFormat = dateFormat.toLowerCase();
		date1 = Seahorse.parseDate(date1, dateFormat, false);
		date2 = Seahorse.parseDate(date2, dateFormat, false);
		if(date1 == null || date2 == null) return null;

		var formatArray = Seahorse._getCharsGroupFromString(dateFormat, "dmy", 3);
		var date1Array = Seahorse._getCharsGroupFromString(date1, "0123456789", 3);
		var date2Array = Seahorse._getCharsGroupFromString(date2, "0123456789", 3);
		var date1number = 0;
		var date2number = 0;
		var i;

		for(i = 0; i<3; i++)
			{
			if(formatArray[i] == 'd' || formatArray[i] == 'dd')
				{
				date1number += parseInt(date1Array[i], 10);
				date2number += parseInt(date2Array[i], 10);
				}
			if(formatArray[i] == 'm' || formatArray[i] == 'mm')
				{
				date1number += parseInt(date1Array[i], 10) * 100;
				date2number += parseInt(date2Array[i], 10) * 100;
				}
			if(formatArray[i] == 'yy' || formatArray[i] == 'yyyy')
				{
				date1number += parseInt(date1Array[i], 10) * 10000;
				date2number += parseInt(date2Array[i], 10) * 10000;
				}
			}

		if(date1number > date2number) return 1;
		if(date1number < date2number) return -1;
		if(date1number == date2number) return 0;
		return null;
		},

	/*
	Function: compareTime()
		Compare two strings that represents times.

	Parameters:
		time1 - The first time.
 		time2 - The second time.
		timeFormat - The date format of the two times.

	Returns:
		A negative number if _time1_ < _time2_, a positive number if _time1_ > _time2_, zero if _time1_ = _time2_ or null in case of error.
	*/
	compareTime : function( time1, time2, timeFormat )
		{
		if(time1 == null || time2 == null || timeFormat == null || ! Seahorse.isTimeFormat(timeFormat)) return null;

		timeFormat = timeFormat.toLowerCase();
		time1 = Seahorse.parseTime(time1, timeFormat, false);
		time2 = Seahorse.parseTime(time2, timeFormat, false);
		if(time1 == null || time2 == null) return null;

		var formatArray = Seahorse._getCharsGroupFromString(timeFormat, "hms", 3);
		var time1Array = Seahorse._getCharsGroupFromString(time1, "0123456789", 3);
		var time2Array = Seahorse._getCharsGroupFromString(time2, "0123456789", 3);
		var time1number = 0;
		var time2number = 0;
		var i;

		for(i = 0; i<3; i++)
			{
			if(formatArray[i] == 's' || formatArray[i] == 'ss')
				{
				time1number += parseInt(time1Array[i], 10);
				time2number += parseInt(time2Array[i], 10);
				}
			if(formatArray[i] == 'm' || formatArray[i] == 'mm')
				{
				time1number += parseInt(time1Array[i], 10) * 100;
				time2number += parseInt(time2Array[i], 10) * 100;
				}
			if(formatArray[i] == 'h' || formatArray[i] == 'hh')
				{
				time1number += parseInt(time1Array[i], 10) * 10000;
				time2number += parseInt(time2Array[i], 10) * 10000;
				}
			}

		if(time1number > time2number) return 1;
		if(time1number < time2number) return -1;
		if(time1number == time2number) return 0;
		return null;
		},

	/*
	Function: serialize()
		Encode the elements of a form as a string.

	Parameters:
		form - The form id or the form object.
		codification - The notation to be used (JSON or URL)

	Returns:
		The form serialized.
	*/
	serialize : function( form, notation )
		{
		var checked, res = "";
		if(typeof form == "string") form = document.getElementById(form);
		if(form && form.elements)
			{
			notation = (notation && notation.toLowerCase() == "json")? "json" : "url";
			var element, name, first, type;

			for(var i=0; i<form.elements.length; i++)
				{
				element = form.elements[i];
				name = (element.name)? element.name : element.id;
				type = element.type.toLowerCase();
				checked = (element.checked)? true : false;

				if(name && type != 'file' && type != 'submit' && ((type != 'radio' && type != "checkbox") || checked ))
					{
					if(notation == "url")
						{
						if(i != 0) res += "&";

						if(element.multiple)
							{
							first = true;
							for (var j=0; j<element.options.length; j++)
								if (element.options[j].selected)
									{
									if(!first) res += "&"; else first = false;
									res += name + "=" + element.options[j].value;
									}
							if(first) res = res.substring(0, res.length-1);
							}
						else
							{res += name + "=" + element.value;}
						}
					else
						{
						if(i == 0) res += "{ ";
						if(i != 0) res += ", ";

						if(element.multiple)
							{
							res += name + ": [ ";
							first = true;
							for (var k=0; k<element.options.length; k++)
								if (element.options[k].selected)
									{
									if(!first) res += ", "; else first = false;
									res += "'" + element.options[k].value + "'";
									}
							res += " ]";
							}
						else
							{res += name + " : '" + element.value + "'";}
						}
					}
				} // end 'for'

			if(notation == "url") res = encodeURI(res); else res += " }";
			}
		return res;
		}
	};





/*
 * Seahorse._eventhandler groups all the functions that handle events.
 */
Seahorse._eventhandler = {

	/*
	 * addEventListener() is a cross-browser version of the DOM function of the same name.
	 */
	addEventListener : function(element, type, listener, useCapture)
		{
		if(element.addEventListener)
			{element.addEventListener(type, listener, useCapture);}
		else if (element.attachEvent)
			{element.attachEvent("on" + type, listener);}
		else
			element["on" + type] = listener;
		},

	/*
	 * The function getKeyPress() gets the key pressed by the user.
	 * Its parameter is 'event' (an onKeyPress event).
	 * Returns the number of the key pressed. This number can be converted in a char by the function String.fromCharCode().
	 */
	getKeyPress : function( event )
		{
		var keynum;

		if(window.event) // IE
			{keynum = window.event.keyCode;}
		else
			if(event) // Chrome/Firefox/Opera
				{keynum = event.which;}

		return keynum;
		},

	/*
	 * The function verify() checks if a element has a valid value and execute the actions defined by the response options.
	 */
	verify : function( element )
		{
		if( element.seahorse )
			{
			var options = element.seahorse.options;
			var valid = element.seahorse.validate();
			var pvalue = element.seahorse.parse();

			if( options.autoparse || options.autofill)
				{
				if(element.value != null && element.value.toString().length > 0 &&
				   pvalue != null && pvalue.toString().length > 0)
						{element.value = pvalue.toString();}
				}

			if( options.okClass )
				{if(valid) Seahorse._addClass(element, options.okClass); else Seahorse._removeClass(element, options.okClass);}
			if( options.errorClass )
				{if(valid) Seahorse._removeClass(element, options.errorClass); else Seahorse._addClass(element, options.errorClass);}

			if( options.targetId )
				{
				var targetElement = document.getElementById(options.targetId);
				if( targetElement )
					{
					if( options.targetOkClass )
						{if(valid) Seahorse._addClass(targetElement, options.targetOkClass); else Seahorse._removeClass(targetElement, options.targetOkClass);}
					if( options.targetErrorClass )
						{if(valid) Seahorse._removeClass(targetElement, options.targetErrorClass); else Seahorse._addClass(targetElement, options.targetErrorClass);}
					}
				}

			if( options.hiddenElementId )
				{
				var hiddenElement = document.getElementById(options.hiddenElementId);
				if( hiddenElement )
					{
					if(valid)
						{hiddenElement.style.display = "none";}
					else
						{hiddenElement.style.display = "block";}
					}
				}

			if( options.callbackFunction )
				{options.callbackFunction(element, valid);}

			return valid;
			}

		return true;
		},
	/*
	 * The function onKeyUp() handle an onKeyUp event produced over a input.
	 */
	keyUp : function( event )
		{
		// Check if the element has the 'seahorse' attribute.
		if( this.seahorse )
			{
			var options = this.seahorse.options;
			var valid = this.seahorse.validate();

			if( options.okClass )
				{if(valid) Seahorse._addClass(this, options.okClass); else Seahorse._removeClass(this, options.okClass);}
			if( options.errorClass )
				{if(valid) Seahorse._removeClass(this, options.errorClass); else Seahorse._addClass(this, options.errorClass);}

			if( this.seahorse_onkeyup ) this.seahorse_onkeyup( event );
			}
		},

	/*
	 * The function blur() handle an onBlur event produced over a input.
	 */
	blur : function( event )
		{
		// Check if the element has the 'seahorse' attribute.
		if( this.seahorse )
			{
			Seahorse._eventhandler.verify(this);
			if( this.seahorse_onblur ) this.seahorse_onblur( event );
			}
		},

	/*
	 * The function numberKeyPress() handles an onKeyPress event produced over a numeric input.
	 */
    numberKeyPress: function( event )
		{
		var keynum = Seahorse._eventhandler.getKeyPress(event);
		var charkey = String.fromCharCode(keynum);

		// Checks if the key pressed is not a valid key, in order to forbid his entrance.
		var isValidKey = Seahorse._isNumericChar(keynum) || Seahorse._isAsciiSpecialKey(keynum) || charkey == '-' || charkey == '+' || charkey == this.seahorse.options.decimalCharacter || charkey == this.seahorse.options.groupingCharacter;
		if( ! isValidKey && this.seahorse.options.forbidEntrance )
			{
			if( this.seahorse_onkeypress ) this.seahorse_onkeypress( event );
			return false;
			}

		// Checks if the pressed key is a plus or minus sign, in order to put this character to the begining of the input.
		var number = this.value;
		if(number.length > 0 && (charkey == '-' || charkey == '+') )
			{
			var c = number.substring(0, 1);

			if (c == '-' || c == '+')
				{
				number = number.substring(1, number.length);
				if ( charkey != c ) number = charkey + number;
				this.value = number;
				}
			else
				{this.value = charkey + number;}

			if( this.seahorse_onkeypress ) this.seahorse_onkeypress( event );
			return false;
			}

		if( this.seahorse_onkeypress ) return this.seahorse_onkeypress( event );
		return true;
		},

	/*
	 * The function textKeyPress() handles an onKeyPress event produced over a text input.
	 */
    keyPress : function( event )
		{
		var keynum = Seahorse._eventhandler.getKeyPress(event);
		var charkey = String.fromCharCode(keynum);

		// Checks if the key pressed is not a valid key, in order to forbid his entrance.
		var hasRoom = (this.seahorse.options.maxLength)? this.value.length < this.seahorse.options.maxLength : true;
		var isValidKey = this.seahorse.validCharacter(charkey);
		if( (! hasRoom || ! isValidKey) && ! Seahorse._isAsciiSpecialKey(keynum) && this.seahorse.options.forbidEntrance )
			{
			if( this.seahorse_onkeypress ) this.seahorse_onkeypress( event );
			return false;
			}

		if( this.seahorse_onkeypress ) return this.seahorse_onkeypress( event );
		return true;
		}
	};
