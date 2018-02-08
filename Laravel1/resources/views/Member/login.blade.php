<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <meta charset="UTF-8">
    <title>現在財務管理系統</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_ok.css" rel="stylesheet">
</head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href={{ url('/') }}>首頁</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!--<ul class="nav navbar-nav">-->
                <!--    <li class="dropdown">-->
                <!--        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                <!--        <ul class="dropdown-menu">-->
                <!--            <li><a href={{ url('/loginpage') }}>會員登入</a></li>-->
                <!--            <li><a href="#">Another action</a></li>-->
                <!--            <li><a href="#">Something else here</a></li>-->
                <!--            <li role="separator" class="divider"></li>-->
                <!--            <li><a href="#">Separated link</a></li>-->
                <!--            <li role="separator" class="divider"></li>-->
                <!--            <li><a href="#">One more separated link</a></li>-->
                <!--        </ul>-->
                <!--    </li>-->
                <!--</ul>-->
                <!--<form class="navbar-form navbar-left">-->
                <!--    <div class="form-group">-->
                <!--        <input type="text" class="form-control" placeholder="Search">-->
                <!--    </div>-->
                <!--    <button type="submit" class="btn btn-default">Submit</button>-->
                <!--</form>-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href={{ url('/loginpage') }}>登入</a></li>
                    <li><a href={{ url('/registerpage') }}>註冊</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <form name="LoginBox" method="post" action="/logincheck">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
          <table width="300" border="1" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
            <tr>
              <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員登入</font></td>
            </tr>
            <tr>
              <td width="100" align="center" valign="baseline">會員帳號：</td>
              <td valign="baseline"><input type="text" name="loginName"></td>
            </tr>
            <tr>
              <td width="100" align="center" valign="baseline">會員密碼：</td>
              <td valign="baseline"><input type="password" name="loginPassword"/></td>
            </tr>
            <tr>
              <td colspan="2" align="center" bgcolor="#CCCCCC">
                <input type="submit" name="btn_Login" value="送出資料"/>
              </td>
            </tr>
          </table>
        </form>
        <div align="center">
            {{ isset($message)? $message : ''}}
            <br>
            {{ Session::get('memberName', '') }}
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
