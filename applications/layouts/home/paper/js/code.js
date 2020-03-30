(function($) {
    var height = window.innerHeight-75;
    $('.code_wrap .code-item').css({ 'height':height+'px' });
    $('.code_wrap .code-edit').css({ 'height':(height-25)+'px'});

    var htmlCont = CodeMirror.fromTextArea(document.getElementById('html_content') , {
        lineNumbers: true
    });
    initCodeEvent(htmlCont , 'html');
    var cssCont = null;
    var jsCont = null;

    var tabs = $('.edit_tab .tab-item');
    var editors = $('.code_wrap .code-edit');
    tabs.on('click' , function() {
        var tabIndex = tabs.index($(this));
        tabs.removeClass('text-secondary').eq(tabIndex).addClass('text-secondary');
        editors.hide().eq(tabIndex).show();
        if(tabIndex == 1 && !cssCont) {
            cssCont = CodeMirror.fromTextArea(document.getElementById('css_content') , {
                lineNumbers: true
            });
            initCodeEvent(cssCont , 'css');
        } else if(tabIndex == 2 && !jsCont) {
            jsCont = CodeMirror.fromTextArea(document.getElementById('js_content') , {
                lineNumbers: true
            });
            initCodeEvent(jsCont , 'js');
        }
    });

    var editorCont = {};
    function initCodeEvent(editObj , editType) {
        editObj.on('change' , function(obj , tval) {
            editorCont[editType] = editObj.getValue();
            postCont();
        });
    }
    function postCont() {
        var tt = setTimeout(function() {
            runForm.html_content.value = (editorCont.html?Base64.encode(editorCont.html):'');
            runForm.css_content.value = (editorCont.css?Base64.encode(editorCont.css):'');
            runForm.js_content.value = (editorCont.js?Base64.encode(editorCont.js):'');
            clearTimeout(tt);
        } , 200);
    }

    $('#settingBtn').on('click' , function() {
        $('#modal-2')[0].checked = true;
    });

    $('#runBtn').on('click', function() {
        runForm.submit();
    });

    $('#saveSetting').on('click' , function() {
        runForm.js_type.value = $('#js_type').val();
        runForm.js_links = "";

        var js_links = [];
        $('input[name="js_checks[]"]').each(function() {
            if(this.checked) {
                js_links.push(this.value);
            }
        });
        if(js_links.length > 0) {
            runForm.js_links.value = Base64.encode(js_links.join());
        }
        $('#modal-2')[0].checked = false;
    });

    
})(jQuery);