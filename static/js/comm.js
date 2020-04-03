function ajaxReq(options) {
    if(!options.url) {
        return;
    }
    $.ajax({
        url : options.url,
        method:'POST',
        data:options.data||{},
        dataType:'json',
        header:{
            'Content-Type':options.isJSON||'application/x-www-form-urlencoded; charset=UTF-8'
        },
        success:function(res) {
            //登录成功
            options.succFun && options.succFun(res);
        },
        error:function(res) {
            options.errorFun && options.errorFun(res);
        }
    });
}

function listEdit(id, link) {
    
    if(typeof moduleURL == 'undefined') {
        alert('未设置moduleURL');
        return;
    }
    ajaxReq({
        url:moduleURL+'/'+(link||'info'),
        data:{ edit_id:id },
        succFun:function(res) {
            if(res.code == '000') {
                if(listEditCallback) {
                    renderData(res);
                    listEditCallback(res);
                } else {
                    location.reload();
                }
            } else {
                alert(res.msg);
            }
        },
    });
}



function listDel(id , link) {
    
    if(typeof moduleURL == 'undefined') {
        alert('未设置moduleURL');
        return;
    }
    ajaxReq({
        url:moduleURL+'/'+(link||'del'),
        data:{ del_id:id },
        succFun:function(res) {
            if(res.code == '000') {
                if(typeof listDelCallback !== 'undefined') {
                    listDelCallback(res);
                } else {
                    location.reload();
                }
            } else {
                alert(res.msg);
            }
        },
    });
}

function clearForm() {
    if(typeof formData !== 'undefined') {
        formData = {};
    }

    if($('#editForm').length > 0) {
        $('#editForm').find('[field]').each(function() {
            if(this.tagName == 'INPUT' && this.type == 'text') {
                //输入框
                this.value = '';
            } if(this.tagName == 'INPUT' && this.type == 'hidden') {
                //输入框
                this.value = '0';
            }  else if(this.tagName == 'INPUT' && this.type == 'checkbox') {
                //复选框
                this.checked = false;
            } else if(this.tagName == 'INPUT' && this.type == 'radio') {
                //单选框
                if($(this).attr('default')) {
                    this.checked = true;
                } else {
                    this.checked = false;
                }
            } else if(this.tagName == 'TEXTAREA') {
                this.value = '';
            } else if(this.tagName == 'SELECT') {
                if($(this).attr('default')) {
                    this.value = $(this).attr('default');
                }
            }
        });
    }
}

function fetchPostData() {
    var postData = {};
    if($('#editForm').length > 0) {
        $('#editForm').find('[field]').each(function() {
            var fieldName = $(this).attr('field');
            if(this.tagName == 'INPUT' && this.type == 'text') {
                //输入框
                postData[fieldName] = this.value;
            } if(this.tagName == 'INPUT' && this.type == 'hidden') {
                //输入框
                postData[fieldName] = this.value;
            } else if(this.tagName == 'INPUT' && this.type == 'checkbox') {
                //复选框
                if(this.checked) {
                    if(!postData[fieldName]) {
                        postData[fieldName] = this.value;
                    } else {
                        postData[fieldName] += ','+this.value;
                    }
                }
            } else if(this.tagName == 'INPUT' && this.type == 'radio') {
                //单选框
                if(this.checked) {
                    if(!postData[fieldName]) {
                        postData[fieldName] = this.value;
                    }
                }
            } else if(this.tagName == 'TEXTAREA') {
                postData[fieldName] = this.value;
            } else if(this.tagName == 'SELECT') {
                postData[fieldName] = this.value;
            }
        });
    }

    return postData;
}

function renderData(res) {
    var postData = res.row;
    if($('#editForm').length > 0) {
        $('#editForm').find('[field]').each(function() {
            var fieldName = $(this).attr('field');
            if(this.tagName == 'INPUT' && this.type == 'text') {
                //输入框
                this.value = postData[fieldName];
            } if(this.tagName == 'INPUT' && this.type == 'hidden') {
                //输入框
                this.value = postData[fieldName];
            } else if(this.tagName == 'INPUT' && this.type == 'checkbox') {
                //复选框
                if((','+postData[fieldName]+',').indexOf(','+this.value+',')) {
                    this.checked = true;
                } else {
                    this.checked = false;
                }
            } else if(this.tagName == 'INPUT' && this.type == 'radio') {
                //单选框
                if(postData[fieldName] == this.value) {
                    this.checked = true;
                } else {
                    this.checked = false;
                }
            } else if(this.tagName == 'TEXTAREA') {
                this.value = postData[fieldName];
            } else if(this.tagName == 'SELECT') {
                this.value = postData[fieldName];
            }
        });
    }

    return postData;
}

function formSave(link) {

    if($('#editForm').length == 0) {
        alert('找不到表单对象');
        return;
    }
    
    if(typeof formValid !== 'undefined') {
        if(!formValid()) {
            return;
        }
    }

    if(typeof moduleURL == 'undefined') {
        alert('未设置moduleURL');
        return;
    }

    var postData = fetchPostData();
    ajaxReq({
        url:moduleURL+'/'+(link||'save'),
        data: postData,
        succFun:function(res) {
            if(res.code == '000') {
                if(typeof saveCallback !== 'undefined') {
                    saveCallback(res);
                } else {
                    location.reload();
                }
            } else {
                alert(res.msg);
            }
        },
    });


}