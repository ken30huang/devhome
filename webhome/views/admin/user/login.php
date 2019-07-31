<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>后台登录</title>

<link href="/static/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/static/plugins/bootstrap/css/datepicker3.css" rel="stylesheet">
<link href="/static/plugins/bootstrap/css/styles.css" rel="stylesheet">

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">后台登录</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="用户名" name="uname" id="uname" type="text" autofocus="" />
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="密码" name="password" id="upassword" type="password" value="" />
							</div>
							<a href="javascript:;" id="loginBtn" class="btn btn-primary">Login</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="/static/js/libs/jquery/jquery.min.js"></script>
	<script>
		(function ($) {
			$('#loginBtn').click(function() {

                var uname = $('#uname').val();
                var upassword = $('#upassword').val();

                if(!uname || !upassword) {
                    alert('请输入用户名或密码');
                    return;
                }

                $.ajax({
                    url:'/admin/user/login',
                    type:'POST',
                    data:{ uname:uname, upassword:upassword },
                    dataType:'json',
                    success:function(res) {
                        if(res.code !== '000') {
                            alert(res.msg);
                            return;
                        }
                        location.href = '/admin/article';
                    }
                });

            });
		})(window.jQuery);
	</script>	
</body>

</html>