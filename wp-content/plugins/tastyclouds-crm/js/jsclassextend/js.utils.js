/**
 *
 * Copyright (C) 2010 by Dawid Kraczkowski <![[dawid.kraczkowski[at]gmail[dot]com]]>
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
JS.utils = {};

/**
 * JS.utils.is checks if given
 * variable exists
 * @parameter mixed v 
 * @package JS.utils
 */
JS.utils.is = function (v) {
    return v !== undefined && v !== null;
};

/**
 * JS.utils.map map through each array element
 * @param Array array - array for mapping
 * @param Function mappingFunction - mapping function
 * @return Array
 * @package JS.utils
 */
JS.utils.map = function (array, mappingFunction) {
    if (!(array instanceof Array)) {
        throw new JS.Error("JS.utils.map error- first parameter must be instance of Array");
    }
    var newArray = [];
    var result;
    for (var i = 0; i < array.length; i++) {
        result = mappingFunction.apply(array,[array[i]]);
        if (JS.utils.is(result)) {
            newArray.push(result);
        }
    }
    return newArray;
};