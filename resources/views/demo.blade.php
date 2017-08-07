<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>功能列表，点击就会请求后台，并发送求。数据统一由后台自动组装</title>
</head>
<style type="text/css">
    table.gridtable {
        font-family: verdana,arial,sans-serifFF;
        font-size:11px;
        color:#333333;
        border-width: 1px;
        border-color: #666666;
        border-collapse: collapse;
        width:100%;
        height:100%;
    }
    table.gridtable th {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #dedede;
    }

    table.gridtable td {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #ffffff;
    }

    body{
        background:#CCFFCC;
        text-align:center;
    }

    div{
        width:900px;
        margin:0 auto;
        background:#fff;
        text-align:left;
    }

</style>
<script type="text/javascript">

    //取得对象
    function get(id){
        return document.getElementById(id);
    }
    //隐藏
    function hide(id){
        get(id).style.display = "none";
    }
    //显示
    function show(id){
        get(id).style.display = "block";
    }

    //三证合一切换
    function changeThreeCertUnit(that){
        if(that.value == 1){
            show('threeCertUnit_1');
            hide('threeCertUnit_0');
        }else{
            show('threeCertUnit_0');
            hide('threeCertUnit_1');
        }
    }

    //企业信息变更
    function changeCorpModifyType(that){
        if(that.value == 1){
            show('modifyType_1');
            hide('modifyType_2');
            hide('modifyType_3');
        }else if(that.value == 2){
            show('modifyType_2');
            hide('modifyType_1');
            hide('modifyType_3');
        }else if(that.value == 3){
            show('modifyType_3');
            hide('modifyType_1');
            hide('modifyType_2');
        }
    }

</script>

<body>
<div>
    <h1 style="text-align: center;">说明：资金存管系统接口联调范例</h1>
    <div style="text-align: center;font-size:20px;"><a href="/newIndex">切换分类demo模块</a></div>
    <table class="gridtable">
        <tr>
            <th>功能模块</th>
            <th>测试用例</th>
        </tr>

        <tr>
            <td>手机端和PC端切换示例</td>
            <td>

                <form action="/changeModel" method="post" target="_blank">
                    值：<input type="text" name="isApp"  value=""/><br>
                    (充值和忘记密码跳转到APP时demo使用，必输输入1或者0，1代表APP,0代表PC)<br>
                    <input type="submit" value="手机端和PC端切换示例" />
                </form>
            </td>
        </tr>

        <!--
        <tr>
         <td>登录存管商户控台查询个人资金</td>
         <td>

         <form action="/merchantLogin" method="post" target="_blank">
                 商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                 用户名：<input type="text" name="userName"  value=""/>(必输)<br>
                 <input type="submit" value="登陆存管商户控台查询个人资金" />
         </form>
         </td>
       </tr>
       -->

        <!-- <tr>
          <td>数据迁移</td>
          <td>
              <form action="/migration" method="post" target="_blank">
                         商户号：<input type="text" name="merchantNo"  value="M2048297389"/>(必输)<br>
                 迁移类型：<select name="migrationType">
                          <option value="1">用户</option>
                          <option value="2">资金</option>
                          <option value="3">投资</option>
                          <option value="4">标的</option>
                      </select><br>
                 订单编号：<input type="text" name="orderNo" value="" />(必输)<br>
                 文件名称：<input type="text" name="fileName" value="" />(必输)<br>
                 总条数：<input type="text" name="totalCount" value="" /><br>
              <input type="submit" value="submit" />
              </form>
          </td>
        </tr> -->

        <tr>
            <td>个人注册test</td>
            <td>

                <form action="register" method="post" target="_blank">

                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    真实姓名：<input type="text" name="realName"  value="" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/>(必输)<br>
                    手机号：<input type="text" name="mobilePhone"  value=""/>(不填写后台会自动填充)<br>
                    身份证：<input type="text" name="identityCode"  value=""/>(不填写后台会自动填充)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="点击个人注册" />
                </form>
            </td>
        </tr>

        <tr>
            <td>个人注册(其他的信息不用填，自动生成)</td>
            <td>

                <form action="register" method="post" target="_blank">
                
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    真实姓名：<input type="text" name="realName"  value="" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"/>(必输)<br>
                    手机号：<input type="text" name="mobilePhone"  value=""/>(不填写后台会自动填充)<br>
                    身份证：<input type="text" name="identityCode"  value=""/>(不填写后台会自动填充)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="点击个人注册" />
                </form>
            </td>
        </tr>

        <tr>
            <td>企业开户</td>
            <td>
                <form action="/corp/register" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    企业名称：<input type="text" name="corpName" value="" />(必输)<br>
                    公司类型：<select name="corpType">
                        <option value="1">企业</option>
                        <option value="2">担保</option>
                    </select><br>
                    是否三证合一：<select name="threeCertUnit" onchange="changeThreeCertUnit(this)">
                        <option value="1">是</option>
                        <option value="0">否</option>
                    </select><br>
                    <div id="threeCertUnit_1" style="width: 99%;">
                        统一社会信用代码：<input type="text" name="creditCode" value="" />(不填写，后台默认填充)<br>
                    </div>
                    <div id="threeCertUnit_0" style="display: none;width: 99%;">
                        组织机构代码：<input type="text" name="orgCode" value="" />(不填写，后台默认填充)<br>
                        营业执照编号：<input type="text" name="licenceCode" value="" />(不填写，后台默认填充)<br>
                        税务登记号：<input type="text" name="taxRegCode" value="" />(不填写，后台默认填充)<br>
                    </div>
                    法人代表姓名：<input type="text" name="artificialRealName" value="" />(必输)<br>
                    法人代表身份证：<input type="text" name="artificialIdentityCode" value="" />(不填写，后台默认填充)<br>
                    联系手机号：<input type="text" name="mobilePhone" value="" />(必输)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        <tr>
            <td>绑定银行卡</td>
            <td>
                <form action="bindCard" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名：<input type="text" name="userName" value="" />(必输)<br>
                    账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>
        <!-- <tr>
          <td>确认绑定银行卡</td>
          <td>
              <form action="/confirmBindCard" method="post" target="_blank">
                  商户号：<input type="text" name="merchantNo" value="" />(必输)<br>
                  用户名<input type="text" name="userName" value="" />(必输)<br>
                  账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                  到账金额<input type="text" name="deductMoney" value="" />(必输)<br>
                  银行卡号<input type="text" name="bankAccountNo" value="" />(必输)<br>
                  <input type="submit" value="submit">
              </form>
          </td>
        </tr> -->
        <tr>
            <td>更换绑定银行卡申请接口</td>
            <td>
                <form action="/apply/bindCardChange" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名：<input type="text" name="userName" value="" />(必输)<br>
                    账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        <tr>
            <td>忘记密码</td>
            <td>
                <form action="/pwd/pwdReset" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名：<input type="text" name="userName" value="" />(必输)<br>
                    账户号<input type="text" name="accountNo" value="" />(必输)<br>
                    <input type="submit" value="submit">
                </form>
            </td>
        </tr>
        <tr>
            <td>授权</td>
            <td>
                <form action="/business/business" method="post"target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名<input type="text" name="userName" value="" />(必输)<br>
                    账户号<input type="text" name="accountNo" value="" />(必输)<br>
                    授权方式<select id="" name="BusinessType">
                        <option value="1" >授权</option>
                        <option value="2" >取消授权</option>
                    </select><br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="submit">
                </form>
            </td>
        </tr>
        <tr>
            <td>充值</td>
            <td>
                <form action="/recharge" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名<input type="text" name="userName" value="" />(必输)<br>
                    账户号<input type="text" name="accountNo" value="" />(必输)<br>
                    支付类型<select name="payType" size="1">
                        <option value="1">快捷充值</option>
                        <option value="3">网关充值</option>
                        <!--  <option value="2">代扣充值</option>
                      <option value="4">通联支付</option>-->
                        <option value="5">直连充值</option>
                    </select>(必输)<br>
                    金额<input type="text" name="amount" value="" />(必输)<br>
                    手续费  <input type="text" name="fee" value="" />(必输)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        <tr>
            <td>个人提现</td>
            <td>
                <form action="/account/withdraw" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名：<input type="text" name="userName" value="" />(必输)<br>
                    账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                    提现金额：<input type="text" name="amount" value="" />(必输)<br>
                    提现手续费：<input type="text" name="fee" value="" />(必输)<br>
                    手续费承担方：<select name="feeOwner">
                        <!-- <option value="0">平台</option> -->
                        <option value="1">个人</option>
                    </select> (必输)<br>
                    <!-- 提现类型：<select name="verifyType" size="1">
                                <option value="0">不审核</option>
                                <option value="1">审核</option>
                                </select>(必输)<br> -->
                    <input type="hidden" name="verifyType" value="0" />
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        <!-- <tr>
          <td>提现审核</td>
          <td>
          <form action="/account/withdrawVerify" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
              提现订单号：<input type="text" name="withdrawOrderNo" value="" />(必输)<br>
              确认类型：<select name="confirmType" size="1">
                          <option value="0">不通过</option>
                          <option value="1">通过</option>
                          </select>(必输)<br>
          <input type="submit" value="submit" />
          </form>
          </td>
        </tr> -->

        <!-- <tr>
            <td>商户转账</td>
          <td>
          <form action="/merchantTransfer" method="post" target="_blank">
                           商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
               入账的用户名：<input type="text" name="userName"  value=""/>(必输)<br>
               入账的账户号：<input type="text" name="accountNo"  value=""/>(必输)<br>
               转账金额：<input type="text" name="amount"  value=""/>(必输)<br>
               订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                  订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
              <input type="submit" value="submit" />
          </form>
          </td>
        </tr> -->

        <tr>
            <td>发标</td>
            <td>
                <form action="/createDirectBorrow" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    标的名称<input type="text" name="loanName" value="">(必输)<br>
                    标的金额<input type="text" name="amount" value="" />(必输)<br>
                    用户名<input type="text" name="userName" value="" />(必输)<br>
                    账户号<input type="text" name="accountNo" value="" />(必输)<br>
                    标的类型<select id="" name="loanType">
                        <option value="1" >普通标</option>
                        <option value="3">担保标</option>
                    </select>(必输)<br>
                    担保方用户名<input type="text" name="vouchUserName" value="" />(当担保标必输)<br>
                    担保方账户号<input type="text" name="vouchAccountNo" value="" />(当担保标必输)<br>
                    预计还款时间<input type="text" name="expectRepayTime" value="" />(必输)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="发标" />
                </form>
            </td>
        </tr>

        <tr>
            <td>投标</td>
            <td>
                <form action="/tender" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名<input type="text" name="userName" value="" />(必输)<br>
                    账户号<input type="text" name="accountNo" value="" />(必输)<br>
                    标的号<input type="text" name="loanTxNo" value="">(必输)<br>
                    金额<input type="text" name="amount" value="" />(必输)<br>
                    奖励金额 <input type="text" name="award" value="" />(必输)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="点击投标" />
                </form>
            </td>
        </tr>

        <tr>
            <td>自动投标</td>
            <td>
                <form action="/fastInvest" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名<input type="text" name="userName" value="" />(必输)<br>
                    账户号<input type="text" name="accountNo" value="" />(必输)<br>
                    标的号<input type="text" name="loanTxNo" value="">(必输)<br>
                    金额<input type="text" name="amount" value="" />(必输)<br>
                    奖励金额 <input type="text" name="award" value="" />(必输)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="自动投标" />
                </form>
            </td>
        </tr>

        <tr>
            <td>满标审核</td>
            <td>

                <form action="/verifyBorrow" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    借款人用户名<input type="text" name="userName" value="" />(必输)<br>
                    借款人账户号<input type="text" name="accountNo" value="" />(必输)<br>
                    商户标的号<input type="text" name="loanTxNo" value="" />(必输)<br>
                    借款管理费<input type="text" name="loanFee" value="" />(必输)<br>
                    发标订单号：<input type="text" name="loanOrderNo"  value=""/>(必输)<br>
                    发标订单日期：<input type="text" name="loanOrderDate"  value=""/>(必输)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="submit" />
                </form>

            </td>
        </tr>

        <tr>
            <td>撤标</td>
            <td>

                <form action="/borrow/cancel" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    商户标的号<input type="text" name="loanTxNo" value="" />(必输)<br>
                    发标订单号：<input type="text" name="loanOrderNo"  value=""/>(必输)<br>
                    发标订单日期：<input type="text" name="loanOrderDate"  value=""/>(必输)<br>
                    订单号<input type="text" name="orderNo" value="" />(不填写后台会自动填充)<br>
                    订单日期<input type="text" name="orderDate" value="" />(不填写后台会自动填充)<br>
                    <input type="submit" value="submit" />
                </form>

            </td>
        </tr>

        <tr>
            <td>手动还款</td>
            <td>
                <form action="/borrow/repay" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    还款用户名：<input type="text" name="userName" value="" />(必输)<br>
                    还款账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                    商户标的号<input type="text" name="loanTxNo" value="" />(必输)<br>
                    还款本金<input type="text" name="capital" value="" />(必输)<br>
                    还款利息<input type="text" name="interest" value="" />(必输)<br>
                    借款管理费<input type="text" name="loanFee" value="" />(必输)<br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        <tr>
            <td>自动还款</td>
            <td>
                <form action="/borrow/fastrepay" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    还款用户名：<input type="text" name="userName" value="" />(必输)<br>
                    还款账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                    商户标的号<input type="text" name="loanTxNo" value="" />(必输)<br>
                    还款本金<input type="text" name="capital" value="" />(必输)<br>
                    还款利息<input type="text" name="interest" value="" />(必输)<br>
                    借款管理费<input type="text" name="loanFee" value="" />(必输)<br>
                    订单号<input type="text" name="orderNo" value="" />(默认会自动生成)<br>
                    订单日期<input type="text" name="orderDate" value="" />(默认会自动生成)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        {{--<tr>--}}
            {{--<td>投资人回款</td>--}}
            {{--<td>--}}
                {{--<form action="/borrow/repay/back" method="post" target="_blank">--}}
                    {{--商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>--}}
                    {{--商户标的号<input type="text" name="loanTxNo" value="" />(必输)<br>--}}
                    {{--投资列表<textarea  rows="10" cols="50" name="investList">--}}
		    {{--{"investUserName":"","investAccountNo":"","capital":"","interest":"","rateInterest":"","interestFee":"","orderNo":"", "orderDate":"","investOrderNo":"", "investOrderDate":""},{"investUserName":"","investAccountNo":"","capital":"","interest":"","rateInterest":"","interestFee":"","orderNo":"", "orderDate":"","investOrderNo":"", "investOrderDate":""},{"investUserName":"","investAccountNo":"","capital":"","interest":"","rateInterest":"","interestFee":"","orderNo":"", "orderDate":"","investOrderNo":"", "investOrderDate":""}</textarea>--}}
                    {{--(每笔记录中的orderNo,orderDate 可以为空但是必须存在字段，后台默认自动生成)--}}
                    {{--<br>--}}
                    {{--<input type="submit" value="submit" />--}}
                {{--</form>--}}
            {{--</td>--}}
        {{--</tr>--}}

        <tr>
            <td>修改手机</td>
            <td>
                <form action="/phone" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名<input type="text" name="userName" value="" />(必输)<br>
                    账户号<input type="text" name="accountNo" value="" />(必输)<br>
                    新手机号<input type="text" name="newPhone" value="" />(必输)<br>
                    <select name="type">
                        <option value="1">原手机号可用</option>
                        <option value="2">原手机号不可用，人工申请</option>
                    </select>(必输)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>
        <!--  <tr>
           <td>手机号审核</td>
           <td>
               <form action="/phones" method="post" target="_blank">
                   商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                     用户名<input type="text" name="userName" value="" />(必输)<br>
                        账户号<input type="text" name="accountNo" value="" />(必输)<br>
                        新手机号<input type="text" name="newPhone" value="" />(必输)<br>
                        审核人<input type="text" name="verifyUser" value="" />(必输)<br>
                    审核状态：<select name="status">
                         <option value="1">通过</option>
                         <option value="0">不通过</option>
                 </select>(必输)<br>
                        协议号<input type="text" name="protocolNo" value="" />(必输)<br>
                 <br><input type="submit" value="submit" />
               </form>
           </td>
         </tr> -->

        <!--   债权模块只留下 债权投资模块   <tr>
           <td>发布债权</td>
           <td>
               <form action="/credit/create" method="post" target="_blank">
                           商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                   用户名：<input type="text" name="userName" value="" />(必输)<br>
                   账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                   标的号：<input type="text" name="loanTxNo" value="" />(必输)<br>
                  债权金额：<input type="text" name="amount" value="" />(必输)<br>
                  原投资订单号：<input type="text" name="investOrderNo" value="" />(必输)<br>
                  原投资订单日期：<input type="text" name="investOrderDate" value="" />(必输)<br>
               <input type="submit" value="submit" />
               </form>
           </td>
         </tr>  -->

        <tr>
            <td>债权认购</td>
            <td>
                <form action="/credit/invest" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    承接人存管用户名：<input type="text" name="userName" value="" />(必输)<br>
                    承接人存管账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                    标的号：<input type="text" name="loanTxNo" value="" />(必输)<br>
                    承接金额：<input type="text" name="amount" value="" />(必输)<br>
                    转让本金：<input type="text" name="creditAmount" value="" />(必输)<br>
                    转让手续费方式：
                    <select id="creditFeeType" name="creditFeeType">
                        <option value="1" selected>转让人支付</option>
                        <option value="2">承接人支付</option>
                    </select>(必输)<br>
                    转让手续费：<input type="text" name="creditFee" value="" />(必输)<br>
                    债权挂牌ID：<input type="text" name="creditNo" value="" />(必输,平台发布债权标的唯一标识)<br>
                    债权挂牌金额：<input type="text" name="creditNoAmount" value="" />(必输,平台发布债权标的唯一标识对应金额)<br>
                    已还款金额：<input type="text" name="repayedAmount" value="" />(必输)<br>
                    原投资订单号：<input type="text" name="investOrderNo" value="" />(必输)<br>
                    原投资订单日期：<input type="text" name="investOrderDate" value="" />(必输)<br>
                    最原始投资订单号：<input type="text" name="oriOrderNo" value="" />(必输,第一次转让时的原投资订单号)<br>
                    最原始订单日期：<input type="text" name="oriOrderDate" value="" />(必输)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        <!--  <tr>
          <td>审核债权</td>
          <td>
              <form action="/credit/verify" method="post" target="_blank">
                          商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                  用户名：<input type="text" name="userName" value="" />(必输)<br>
                  账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                  标的号：<input type="text" name="loanTxNo" value="" />(必输)<br>
                 债权订单号：<input type="text" name="orderNo" value="" />(必输)<br>
                 债权订单日期：<input type="text" name="orderDate" value="" />(必输)<br>
              <input type="submit" value="submit" />
              </form>
          </td>
        </tr>

        <tr>
          <td>撤销债权</td>
          <td>
              <form action="/credit/cancel" method="post">
                          商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                  用户名：<input type="text" name="userName" value="" />(必输)<br>
                  账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                  标的号：<input type="text" name="loanTxNo" value="" />(必输)<br>
                 债权订单号：<input type="text" name="orderNo" value="" />(必输)<br>
                 债权订单日期：<input type="text" name="orderDate" value="" />(必输)<br>
              <input type="submit" value="submit" />
              </form>
          </td>
        </tr>-->

        <tr>
            <td>用户账户查询接口</td>
            <td>
                <form action="/query/user" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名：<input type="text" name="userName" value="" />(必输)<br>
                    账户号：<input type="text" name="accountNo" value="" />(必输)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        <tr>
            <td>个人、企业、商户自由账户账号流水查询</td>
            <td>
                <form action="/fundflow" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名<input type="text" name="userName" value="" />(必输)<br>
                    账户号<input type="text" name="accountNo" value="" />(必输)<br>
                    订单时间<input type="text" name="queryOrderDate" value="" />(必输)<br>
                    <br><input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        <tr>
            <td>标的查询</td>
            <td>
                <form action="/query/borrow" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    商户标的号<input type="text" name="loanTxNo" value="" />(必输)<br>
                    <input type="submit" value="submit" />
                </form>

            </td>
        </tr>

        <tr>
            <td>标的账号流水查询</td>
            <td>
                <form action="/query/logLoanAccount" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    标的号： <input type="text" name="loanTxNo" value="" />(必输)<br>
                    标的账户号： <input type="text" name="loanAccNo" value="" />(必输)<br>
                    <br><input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        <!--   <tr>
            <td>债权查询</td>
            <td>
                <form action="/credit/query" method="post"  target="_blank">
                            商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    标的号：<input type="text" name="loanTxNo" value="" />(必输)<br>
                    投资订单号：<input type="text" name="investOrderNo" value="" />(必输)<br>
                     投资订单日期：<input type="text" name="investOrderDate" value="" />(必输)<br>
                <input type="submit" value="submit" />
                </form>
            </td>
          </tr> -->

        <tr>
            <td>订单查询</td>
            <td>
                <form action="/query/trade" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    订单号：<input type="text" name="orderNo" value="" />(必输)<br>
                    订单日期：<input type="text" name="orderDate" value="" />(必输)<br>
                    交易：<select name="queryType">
                        <option value="01">充值</option>
                        <option value="02">提现</option>
                        <option value="03">投资</option>
                        <option value="04">借款人还款</option>
                        <option value="05">投资人回款</option>
                        <option value="06">债权认购</option>
                        <option value="07">满标放款</option>
                    </select>(必输)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>
        <tr>
            <td>对账文件下载</td>
            <td>
                <form action="/query/downloadLogFiles" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/><br>
                    对账日期：<input type="text" name="queryDate" value="20170704" /><br>
                    对账类型：<select name="type">
                        <option value="recharge">充值</option>
                        <option value="withDraw">提现</option>
                        <option value="invest">投资</option>
                        <option value="loanFull">满标放款</option>
                        <option value="repayment">借款人还款</option>
                        <option value="loanBack">投资人回款</option>
                        <option value="creditInvest">债权认购</option>
                    </select><br>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>

        <tr>
            <td>企业信息变更</td>
            <td>
                <form action="/corp/modify" method="post" target="_blank">
                    商户号：<input type="text" name="merchantNo"  value=""/>(必输)<br>
                    用户名：<input type="text" name="userName" value="" />(必输)<br>
                    原企业名称：<input type="text" name="oldCorpName" value="" />(必填)<br>
                    变更类型：<select name="modifyType" onchange="changeCorpModifyType(this)">
                        <option value="1" selected="selected">企业名称</option>
                        <option value="2">法人代表</option>
                        <option value="3">联系人手机</option>
                    </select>(必输)<br>
                    <div id="modifyType_1" style="width: 99%;">
                        企业名称：<input type="text" name="corpName" value="" />(变更类型为企业名称时必填)<br>
                    </div>
                    <div id="modifyType_2" style="display: none;width: 99%;">
                        法人代表姓名：<input type="text" name="artificialRealName" value="" />(变更类型为法人代表时必填)<br>
                        法人代表身份证：<input type="text" name="artificialIdentityCode" value="" />(变更类型为法人代表时必填)<br>
                    </div>
                    <div id="modifyType_3" style="display: none;width: 99%;">
                        联系手机号：<input type="text" name="mobilePhone" value="" />(变更类型为联系人手机时必填)<br>
                    </div>
                    订单号：<input type="text" name="orderNo"  value=""/>(不填写后台会自动填充)<br>
                    订单日期：<input type="text" name="orderDate"  value=""/>(不填写后台会自动填充)<br>
                    <input type="submit" value="submit" />
                </form>
            </td>
        </tr>


    </table>
</div>
</body>
</html>