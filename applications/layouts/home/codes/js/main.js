(function($) {

    function initClose() {
        var vTime = (new Date()).getTime();
        window.onunload = function() {
            var img = new Image();
            img.src = '/home/index/vlog?vurl='+location.pathname+'&vtime='+((new this.Date()).getTime()-vTime)
        }
    }

    initClose();

})(jQuery);