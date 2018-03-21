<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>英语四六级成绩统计系统</title>
    <style>
        .form{
            background: rgba(255,255,255,0.4);
            margin-top: 8%;
        }
        input[type=text]{border:0;border-bottom:#000000 1px solid;background: rgba(255,255,255,0.4);}
        input[type=password]{border:0;border-bottom:#000000 1px solid;background: rgba(255,255,255,0.4);}
    </style>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<body style="background-image: url(./images/500017331_banner1.jpg);background-position: center center;background-repeat: no-repeat;
 background-size: cover;">
<form class="col-sm-offset-4 col-sm-4 col-sm-offset-4 form form-horizontal" role="form" method="post" action="cetinsert.php">
    <div class="form-group">
        <div class="col-sm-12 text-center  text-warning h2">大学英语四六级成绩统计系统</div></div>
    <div class="form-group">
        <label for="snumber" class="control-label col-sm-2">班级</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="class" name="class" placeholder="请输入班级名称，例如:15金融1班" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="snumber" class="control-label col-sm-2">学号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="snumber" name="snumber" placeholder="请输入学号" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="control-label col-sm-2">姓名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="请输入姓名" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="control-label col-sm-2">级别</label>
        <div class="col-sm-10">
            <select class="form-control" id="jibie" name="jibie" style="background: rgba(255,255,255,0.4);">
                <option value="四级">四级</option>
                <option value="六级">六级</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="control-label col-sm-2">分数</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="score" name="score" placeholder="请输入分数，只需输入数字" autocomplete="off"
                   onkeyup="value=value.replace(/[^(\d)]/g,'')">
        </div>
    </div>
    <button type="submit" class="btn-sm btn-success center-block" id="login" name="login">提交</button>
    <div class="form-group">
        <div class="col-sm-12 text-center  text-danger h4">提醒：请仔细检查信息，点击级别下拉箭头选择正确的考试级别</div></div>
</form>
</body>
<script src="js/jquery.min.js"></script><script src="js/bootstrap.min.js"></script>
</html>