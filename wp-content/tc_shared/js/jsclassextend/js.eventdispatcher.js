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
 * EventDispatcher class
 * 
 * @dependencies js.utils, js.error, js.class
 * @package JS
 */

/**
 * chceck dependencies
 */
if(JS.utils === undefined || JS.utils === null) {
    throw new Error('JS.utils is required');
}
if(!JS.utils.is(JS.Error)) {
    throw new Error('JS.Error is required');
}
if(!JS.utils.is(JS.Class)) {
    throw new JS.Error('JS.Class is required');
}

JS.EventDispatcher = JS.Class({
    /**
	 * Add event listener
	 * 
	 * @param mixed event event to listen to
	 * @param Function listener listening function
	 * @param Function context context for calling a listener
	 */
    addEventListener : function(event, listener, context) {
        var scope = this;
        if (event === undefined || listener === undefined) {
            throw new JS.Error("JS.EventDispatcher.addEventListener error - event or listener parameter not passed");
        }
        ((this.__listeners__ = this.__listeners__ || {})[event] = this.__listeners__[event] || []).push({
            event: event,
            listener: listener,
            callee: context || scope
        });
    },
    /**
	 * Remove event listener
	 * @param mixed event
	 * @param Function listener
	 */
    removeEventListener: function(event, listener) {
        //remove specified listener
        if (JS.utils.is(event) && JS.utils.is(listener) && this.__listeners__.hasOwnProperty(event)) {
            this.__listeners__[event] = JS.utils.map(this.__listeners__[event], function(element){
                if (element.listener === listener) {
                    return null;
                }
                return element;
            });
            if (!this.__listeners__[event].length) {
                delete this.__listeners__[event];
            }
        //remove all listeners
        } else if (JS.utils.is(event) && this.__listeners__.hasOwnProperty(event)) {
            delete this.__listeners__[event];
        //throw exception
        } else {
            throw new JS.Error("JS.EventDispatcher.removeEventListener error - event parameter is required");
        }
    },
    /**
	 * Check if object has listener for given event
	 * @param mixed event
	 * @param Function listener
	 */
    hasEventListener: function (event, listener) {
        if (JS.utils.is(event) && this.__listeners__.hasOwnProperty(event)) {
            if (JS.utils.is(listener))
            {
                if(JS.utils.map(this.__listeners__[event], function(element){
                    return element.listener === listener?element:null;
                }).length > 0) {
                    return true;
                }
                return false;
            }
            return true;
        }
        return false;
    },
    /**
	 * Dispatch an event
	 * @param mixed event
	 */
    dispatch: function (event) {
        if (JS.utils.is(event) && this.hasOwnProperty('__listeners__') && this.__listeners__.hasOwnProperty(event)) {
            for(var i = 0; i < this.__listeners__[event].length; i++) {
                var currentEvent = this.__listeners__[event][i];
                currentEvent.listener.apply(currentEvent.context, [currentEvent]);
                delete currentEvent;//remove reference
            }
        }
    }
});