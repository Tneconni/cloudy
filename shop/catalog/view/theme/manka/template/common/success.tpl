<?php echo $header; ?>
<style>

    body{
        background-color:#fff;
    }

</style>
<link
      href="catalog/view/theme/manka/stylesheet/manka/reminders_online.css"
      rel="stylesheet"
      type="text/css" />

<div id="logo">

    <?php echo $navigation;?>

    <!-- 提交成功-->
    <div class="tick" style="height:90px">
        <img src="image/submit_2.jpg" width="42" height="45" /> <span style="font-weight: bold; color: #313131;">订单提交成功，请您尽快付款！</span>
    </div>

    <div style="clear:both;"></div>
    <div class="goodgass_1" style="margin-right:0px; padding-top:0">
        <p style="padding-left:0">( 请您在<span style="color: #F33">72小时</span>内完成支付，否则订单将被取消 )</p>
    </div>

    <!--订单显示-->
    <div class="dingdan" style="margin-top:0">
        <table width="747" border="0" cellspacing="0">
            <tr>
                <td width="187" height="38" align="center" style="border:1px solid #CCC; border-bottom:0px ; border-right:0px;">订单号</td>
                <td width="174"  align="center"style="border:1px solid #CCC; border-bottom:0px; border-right:0px;">支付方式</td>
                <td width="177"  align="center"style="border:1px solid #CCC; border-bottom:0px; border-right:0px;">金额</td>
                <td width="201"  align="center"style="border:1px solid #CCC; border-bottom:0px; " 	>状态</td>
            </tr>
            <tr>
            <?php if( isset( $order )){ ?>

                <td height="55"
                    align="center"
                    style="border:1px solid #CCC; border-bottom:2px solid #fbcfad; border-right:0px; ">
                    <?php echo $order['order_id'];?>
                </td>
                <td   align="center"style="border:1px solid #CCC; border-bottom:2px solid #fbcfad; border-right:0px;"><?php echo $order['payment_method'];?></td>
                <td   align="center"style="border:1px solid #CCC; border-bottom:2px solid #fbcfad; border-right:0px;"><?php echo $order['total'];?></td>
                <td  align="center" style="border:1px solid #CCC; border-bottom:2px solid #fbcfad; font-size: 14px; color: #f37020;">
                    <a href="<?php echo $order['order_check_link'];?>">
                        <?php echo $order['order_status'];?>
                    </a>
                </td>

            <?php }else{ ?>

                <td height="55"  align="center" colspan="4"
                    style="border:1px solid #CCC; border-bottom:2px solid #fbcfad; ">
                        抱歉, 未查询到您的订单
                    </td>

            <?php }?>

            </tr>
        </table>
    </div>
    <!-- 确认按钮-->

    <div class="youju">

        <a href="<?php echo $order['order_check_link'];?>">
            <img src="image/submit_3.jpg"
                 width="102" height="30"
                 class="submit_button"
                 style="cursor:pointer"/>
        </a>

    </div>
</div>
