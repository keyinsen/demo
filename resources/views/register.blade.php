<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>功能列表，点击就会请求后台，并发送求。数据统一由后台自动组装</title>
</head>
<style type="text/css">


</style>

<body>
<div>
                <form id="postForm" action="{{$url}}" method="post">
                  <input type="text" name="reqData"  value="{{$reqData}}"/><br>
                </form>
</div>
<script type="text/javascript">
    window.onload = function () {
//        document.getElementById("postForm").submit();
    }
</script>
</body>
</html>