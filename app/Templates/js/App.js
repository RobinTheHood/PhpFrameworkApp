var App = (function() {

    var App = function ()
    {
        var object = new Class();
        var htmlStdMethods = new HtmlStdMethods();
        _setUp();
    }

    var _setUp = function(string)
    {
    }

    var publicMethod = function(string)
    {
    }

    App.prototype.publicMethod = publicMethod;
    return App;
})();

$(document).ready(function() {
    var app = new App();
})
