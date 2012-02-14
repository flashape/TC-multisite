/**
 *
 * Copyright (C) 2011 by lunereaper <![[dawid.kraczkowski[at]gmail[dot]com]]>
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 **/
var JS = {
    VERSION: '2.2.1'
};

/**
 * JS.Class base library
 * easly create and extend your JS.Classes
 * @sample
 * Simple class & object
 * <code>
 * var TestClass = JS.Class(<class definition>);
 * <class definition> is an object with class properties & methods
 * var testObject = new TestClass();
 * </code>
 * Constructor sample
 * <code>
 * var ConstructedClass = JS.Class({
 * 	construct : function(param) {
 * 		this.a = param;
 *  }
 * });
 * var t = new ConstructedClass(12);
 * t.a; // this will return 12
 * </code>
 * 
 * Class static
 * <code>
 * var ClassStatics = JS.Class({
 * 	statics: {
 * 		TEST = 'cst.TEST';
 *  },
 *  a : function() {
 *  	ClassStatics.TEST;//return 'cst.TEST'
 *  	this.TEST;//return undefined
 *  }
 * });
 * ClassStatics.TEST;//return 'cst.TEST'
 * </code>
 * 
 * Extending class
 * <code>
 * var ExtendedClass = TestClass.extend(<class definition>);
 * var extObject = new ExtendedClass();
 * extObject instanceof ExtendedClass; //return true
 * extObject instanceof TestClass; //return true
 * </code>
 * 
 * Calling parent overriden method
 * <code>
 * 
 * </code>
 * 
 * @version 2.0.2
 * 
 */
JS.Class = function (classDefinition) {

    /**
     * Creates base constructor for JS.Class
     */
    function getClassBase() {
        
        return function () {
            //apply constructor pattern
            if (typeof this['construct'] === 'function' && preventJSClassConstructorCall === false) {
                this.construct.apply(this, arguments);
            }
        };
    }

    /**
     * Extends class definition
     */
    function createClassDefinition (classDefinition) {
        
        //rewrite properties
        for (prop in classDefinition) {
            if (prop === 'statics') {
                for (sprop in classDefinition.statics) {
                    this.constructor[sprop] = classDefinition.statics[sprop];
                }
            } else {
                //provide parent calls if method is overrwritten
                if (typeof this.constructor.prototype[prop] == 'function') {
                    var parentMethod = this.constructor.prototype[prop];
                    var scope = this;
                    delete this.constructor.prototype[prop];
                    (this.constructor.prototype['parent'] = this.constructor.prototype['parent'] || {})[prop] = parentMethod;
                    this.constructor.prototype[prop] = classDefinition[prop];
                } else {
                    this.constructor.prototype[prop] = classDefinition[prop];
                }
            }
        }
    }

    var preventJSClassConstructorCall = true;
    //create class constructor & class definition
    this.constructor = getClassBase();
    preventJSClassConstructorCall = false;
    
    createClassDefinition.call(this, classDefinition);
    
    /**
     * provide extend option in JS.Class
     */
    this.constructor.extend = function (classDefinition) {

        preventJSClassConstructorCall = true;
        //create class constructor & extend class by parent
        this.constructor = getClassBase();
       
        this.constructor.prototype = new new this().constructor;
        preventJSClassConstructorCall = false;
        
        //create class definition
        createClassDefinition.call(this, classDefinition);

        //provide infinity extend scope
        this.constructor.extend = function(classDefinition) {
            
            //option for preventing calling parent constructor
            var parentConstructor;
            
            //create infinity extend scope
            var infinityExtendScope = this;  

            preventJSClassConstructorCall = true;
            //create class constructor & extend it
            this.constructor = getClassBase();

            this.constructor.prototype = new this();
            
            if (parentConstructor !== undefined) {
                this.constructor.prototype['construct'] = parentConstructor;
            }
            preventJSClassConstructorCall = false;
            
            //add class body
            createClassDefinition.call(this, classDefinition);

            //infinity extend!
            this.constructor.extend = function (classDefinition) {
                return infinityExtendScope.extend.apply(this, [classDefinition]);
            };
            
            return this.constructor;
        };

        return this.constructor;
    };
    return this.constructor;
};