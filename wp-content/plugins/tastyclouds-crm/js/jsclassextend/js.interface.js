JS.Interface = function (iDefinition) {
   if (!iDefinition) {
       return;
   }
   var iFunction = function () {
       var iMethods = [];
       var iArguments = {};
       //create interface definition
       for (var methodName in iDefinition) {
           if (typeof iDefinition[methodName] == 'function' ) {
               if (JS.Interface.methodHasBody(iDefinition[methodName])) {
                   throw Error('Interface method declaration must be empty \n' + iDefinition[methodName]);
               }
               //get arguments
               iArguments[methodName] = JS.Interface.getMethodArguments(iDefinition[methodName]);     
               iMethods.push(methodName);
           }
       };
       this.getInterfaceBody = function () {
         return iArguments;  
       };
       this.getAbstractMethodArguments = function (methodName) {
           return iArguments[methodName];
       };
       this.getAbstractMethods = function () {
           return iMethods;
       }
   };
   iFunction.prototype = new JS.Interface;
   return iFunction;
};
JS.Interface.checkMethodDefinition = function (cDefinition, iDefinition, methodName) {
   methodName ? null : methodName = 'unknown';
   //class method arguments & interface method arguments
   var cArgs = JS.Interface.getMethodArguments(cDefinition);
   var iArgs = JS.Interface.getMethodArguments(iDefinition);
   if (cArgs.length !== iArgs.length) {
       throw new Error('<JS.Class> Error: number of arguments in method ' + methodName + ' does not match implementation');
   }
};
JS.Interface.getMethodArguments = function (method) {
    var arguments = method.toString().replace(/{[\w\W]*}/gi,'').replace(/\s/ig,'').match(/\(.*\)/ig)[0].replace(/[\(\)]/ig,'');
    if (arguments !== '') {
        arguments = arguments.split(',');
    } else {
        arguments = new Array();
    }
    return arguments;
};
JS.Interface.methodHasBody = function (method) {
    if (method.toString().replace(/\s/ig,'').match(/\{[\w\W]+\}/ig)) {
        return true;
    }
    return false;
};