(function($) {
    var height = window.innerHeight-75;
    $('.code_wrap .code-item').css({ 'height':height+'px' });
    $('.code_wrap .code-edit').css({ 'height':(height-25)+'px'});

    var htmlCont = CodeMirror.fromTextArea(document.getElementById('html_content') , {
        lineNumbers: true
    });
    var cssCont = CodeMirror.fromTextArea(document.getElementById('css_content') , {
        lineNumbers: true
    });
    var jsCont = CodeMirror.fromTextArea(document.getElementById('js_content') , {
        lineNumbers: true
    });
    
})(jQuery);