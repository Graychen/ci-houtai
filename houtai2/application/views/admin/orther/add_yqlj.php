<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>skin/css/base.css">
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
</head>

<body>
<!--  快速转换位置按钮  -->
<!--  内容列表   -->
<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px" >
  <tr bgcolor="#E7E7E7">
    <td height="24" colspan="5" background="<?php echo base_url()?>skin/images/tbg.gif" bgcolor="#E7E7E7">&nbsp;友情连接&nbsp;</td>
  </tr>
  <tr align="center" bgcolor="#FAFAF1" height="22">
    <td width="6%">位置</td>
    <td width="20%" align="center">名称</td>
    <td width="23%" align="center">LOGO</td>
    <td width="29%" align="center">地址</td>
    <td width="22%" align="center">操作</td>
  </tr>
  <?php if(!empty($res)){ 
  foreach($res as $key) {
  ?>
  <?php echo form_open('admin_login/yqlj/change_yqlj');?>
  <input type="hidden" name="id" value="<?php echo $key->id;?>" />
  <tr align='center' bgcolor="#FFFFFF" onmousemove="javascript:this.bgColor='#FCFDEE';" onmouseout="javascript:this.bgColor='#FFFFFF';" height="22" >
  
    <td align="center"><input name="weizhi" type="text" id="textfield" size="5" value="<?php echo $key->weizhi;?>" /></td>
    <td align="center"><input type="text" name="name" id="textfield3"  value="<?php echo $key->name;?>" /></td>
    <td align="center"><input type="text" name="logo" id="textfield7"  value="<?php echo $key->logo;?>"/></td>
    <td align="center"><input name="url" type="text" id="textfield5" size="40"  value="<?php echo $key->url;?>" /></td>
    <td align="left"><input type="submit" name="button" id="button" value="修改" /> 
      <?php echo anchor('admin_login/yqlj/del_yqlj/'.$key->id,"删除");?></td>
  </tr>
  </form>
  <?php }}?>
  <tr align='center' bgcolor="#FFFFFF" onmousemove="javascript:this.bgColor='#FCFDEE';" onmouseout="javascript:this.bgColor='#FFFFFF';" height="22" >
    <td colspan="5" align="center">&nbsp;</td>
  </tr>
  <?php echo form_open('admin_login/yqlj/add_yqlj');?>
  <tr align='center' bgcolor="#FFFFFF" onmousemove="javascript:this.bgColor='#FCFDEE';" onmouseout="javascript:this.bgColor='#FFFFFF';" height="22" >
    <td align="center"><input name="weizhi" type="text" id="textfield2" size="5" /></td>
    <td align="center"><input type="text" name="name" id="textfield4" /></td>
    <td align="center"><input type="text" name="logo" id="textfield8" /></td>
    <td align="center"><input name="url" type="text" id="textfield6" size="40" /></td>
    <td align="left"><input type="submit" name="button2" id="button2" value="添加" /></td>
  </tr>
  </form>
  <tr bgcolor="#FAFAF1">
    <td height="28" colspan="5">&nbsp;</td>
  </tr>
  <tr align="right" bgcolor="#EEF4EA">
    <td height="36" colspan="5" align="center"><!--翻页代码 --></td>
  </tr>
</table>

<!--  搜索表单  -->

</body>
</html>

