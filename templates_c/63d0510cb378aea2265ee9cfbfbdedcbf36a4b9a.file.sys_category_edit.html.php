<?php /* Smarty version Smarty-3.1.18, created on 2015-07-27 16:47:26
         compiled from "application/views/sys_category_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:97484862155b5f01e279263-54207578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63d0510cb378aea2265ee9cfbfbdedcbf36a4b9a' => 
    array (
      0 => 'application/views/sys_category_edit.html',
      1 => 1426823789,
      2 => 'file',
    ),
    '614eaa753400c6c1d2f3dbb42bfd183d8d7a854f' => 
    array (
      0 => 'application/views/base_content.html',
      1 => 1426823787,
      2 => 'file',
    ),
    '9983591074296b35844f91ae042cd15f8192823d' => 
    array (
      0 => 'application/views/base.html',
      1 => 1426823787,
      2 => 'file',
    ),
    'da897c8015b5485b545e3646394617514390af41' => 
    array (
      0 => 'application/views/inc_form_result.html',
      1 => 1426823788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97484862155b5f01e279263-54207578',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b5f01e53aa32_94711595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b5f01e53aa32_94711595')) {function content_55b5f01e53aa32_94711595($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/www/www.china-7.net/application/libraries/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>后台管理系统</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/font-awesome/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->

    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/jquery-ui.custom.min.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/ace.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/ace-ie.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="<?php echo @constant('RES_PATH');?>
/assets/css/admin.css" />
    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="<?php echo @constant('RES_PATH');?>
/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="<?php echo @constant('RES_PATH');?>
/assets/js/html5shiv.js"></script>
    <script src="<?php echo @constant('RES_PATH');?>
/assets/js/respond.min.js"></script>
    <![endif]-->

















    

    

</head>

<body class="no-skin">




<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">


        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="index.php?c=main&m=welcome">主页</a>
            </li>


            
<li><a href="index.php?c=sys_category">栏目管理</a></li>
<li class="active">编辑</li>

        </ul><!-- /.breadcrumb -->

        <div class="nav-search" id="nav-search">
            <button class="btn btn-light btn-xs btn-app re" onclick="self.location.reload()">
                <i class="ace-icon fa fa-refresh bigger-120"></i>
            </button>
        </div><!-- /.nav-search -->
    </div>

    <div class="page-content">

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                




<script src="/resources/uploadify/jquery-1.8.3.min.js"></script>




<form class="form-horizontal" id="validation-form" method="post" role="form">
    <?php /*  Call merged included template "inc_form_result.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("inc_form_result.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '97484862155b5f01e279263-54207578');
content_55b5f01e39fae3_03394634($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "inc_form_result.html" */?>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="catname">栏目名称:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="catname" id="catname" class="col-xs-12 col-sm-6"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['catname'])===null||$tmp==='' ? '' : $tmp);?>
" />
            </div>
        </div>
    </div>


    <div class="space-2"></div>


    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="keyword">所属行业:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <select name="class_id" id="class_id" class="col-xs-12 col-sm-6">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['bigcat_list']->value,'selected'=>$_smarty_tpl->tpl_vars['entity']->value['class_id']),$_smarty_tpl);?>

                </select>
            </div>
        </div>
    </div>




    <div class="space-2"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="keyword">关键词:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="keyword" id="keyword" class="col-xs-12 col-sm-6"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['keyword'])===null||$tmp==='' ? '' : $tmp);?>
" />
            </div>
        </div>
    </div>

    <div class="space-2"></div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="weixinhao">微信号:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" name="weixinhao" id="weixinhao" class="col-xs-12 col-sm-6"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['weixinhao'])===null||$tmp==='' ? '' : $tmp);?>
" />
            </div>
        </div>
    </div>

    <div class="space-2"></div>
    <div class="form-group">
        <label class="control-label col-xs-1 col-sm-3 no-padding-right" for="logourl">LOGO:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">

                <input type="text" name="logourl" id="logourl" class="col-xs-12 col-sm-6"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['logourl'])===null||$tmp==='' ? '' : $tmp);?>
" />
                
            </div><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['logourl'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
    </div>



    <div class="hr hr-dotted"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="description">描述:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <textarea name="description" id="description" class="col-xs-12 col-sm-6"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['description'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
            </div>
        </div>
    </div>

    <div class="space-2"></div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="wxrz">wxrz:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <textarea name="wxrz" id="wxrz" class="col-xs-12 col-sm-6"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['wxrz'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
            </div>
        </div>
    </div>

    <div class="space-2"></div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="openid">openid</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input type="text" id="openid" name="openid" class="col-xs-12 col-sm-6"
                       value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['openid'])===null||$tmp==='' ? '' : $tmp);?>
" />
            </div>
        </div>
    </div>

    <div class="space-2"></div>
    <div class="form-group">
        <label class="control-label col-xs-1 col-sm-3 no-padding-right" for="2weima">二维码:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">

                <input type="text" name="2weima" id="2weima" class="col-xs-12 col-sm-6"
                        value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['2weima'])===null||$tmp==='' ? '' : $tmp);?>
" />
                
            </div><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['2weima'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
    </div>

    <div class="space-2"></div>
    <div class="form-group" style="display:none">
        <label class="control-label col-xs-1 col-sm-3 no-padding-right" for="upload_img">栏目图片:</label>

        <div class="col-xs-12 col-sm-9">
            <div class="clearfix">
                <input id="upload_img" name="upload_img" type="file" value="" multiple="true">
            </div><img id="showcatimg" src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['entity']->value['catimg'])===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
    </div>


    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
                <i class="ace-icon fa fa-check bigger-110"></i>
                提交
            </button>

            &nbsp; &nbsp; &nbsp;
            <a class="btn" href="index.php?c=cms_contentMan">
                <i class="ace-icon fa fa-undo bigger-110"></i>
                返回
            </a>
        </div>
    </div>
    <input type="hidden" id="catimg" name="catimg" value="">
</form>
<div id="ue_content" style="display:none">
  <?php echo (($tmp = @stripslashes($_smarty_tpl->tpl_vars['entity']->value['content']))===null||$tmp==='' ? '' : $tmp);?>

</div>
<link rel="stylesheet" type="text/css" href="/resources/uploadify/uploadify.css">
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例

  $(document).ready(function(){

    /*var ue_content = $('#ue_content').html();
    var ue = UE.getEditor('content');
      ue.ready( function( editor ) {
       ue.setContent(ue_content);
      } );*/

     //上传图片
    // $("#upload_img").uploadify({
    //     'formData'     : {
    //       'timestamp' : '<?php echo $_smarty_tpl->tpl_vars['timestamp']->value;?>
',
    //       'token'     : '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
'
    //     },
    //     'multi':false,
    //     'swf'              : '/resources/uploadify/uploadify.swf',
    //     'uploader'         : '/resources/uploadify/uploadify.php',
    //     'onUploadComplete' : function(file) {
    //         $("#catimg").val('/upload/cms/'+file.name);
    //         $("#showcatimg").attr("src",'/upload/cms/'+file.name);
    //     }
    // });

  });

  function setCatname(obj){
    var selindex = obj.selectedIndex;
    var catname= obj.options[selindex].text;
    $("#catname").val(catname);
  }
   
</script>


                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.page-content -->
</div>


<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.2.1.0.min.js"></script>
<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.1.11.min.js"></script>
<![endif]-->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo @constant('RES_PATH');?>
/assets/js/jquery.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo @constant('RES_PATH');?>
/assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->



<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo @constant('RES_PATH');?>
/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery-ui.custom.min.js"></script>

<script src="<?php echo @constant('RES_PATH');?>
/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jqGrid/jquery.jqGrid.min.js"></script>

<!-- page specific plugin scripts -->
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.validate.min.js"></script>
<!--<script src="<?php echo @constant('RES_PATH');?>
/assets/js/jquery.nestable.min.js"></script>-->
<!-- ace scripts -->

<script src="<?php echo @constant('RES_PATH');?>
/assets/js/ace-elements.min.js"></script>
<script src="<?php echo @constant('RES_PATH');?>
/assets/js/ace.min.js"></script>

<script>
      $(function(){

          jQuery.validator.addMethod("username", function (value, element) {
              return this.optional(element) || /^[_a-zA-Z0-9]+$/.test(value);
          }, "账号只能包含数字，字母，下划线");
          $('#validation-form').validate({
              errorElement: 'div',
              errorClass: 'help-block',
              focusInvalid: false,
              rules: {
                  email: {
                      required: true,
                      email:true
                  },
                  password: {
                  <?php if ($_REQUEST['m']=='add') {?>required: true,<?php }?>
                      minlength: 6,
                      maxlength: 15
                  },

                  username: {
                      required: true,
                      minlength: 3,
                      maxlength: 15,
                      username: 'required'
                  }
                  ,

                  truename: {
                      required: true,
                      minlength: 2,
                      maxlength: 15
                  }
              },

              messages: {
                  email: {
                      required: "请输入邮箱",
                      email: "请输入正确邮箱格式"
                  },
                  password: {
                      required: "请输入密码",
                      minlength: "密码需要6-12个字符",
                      maxlength: "密码需要6-15个字符"
                  },
                  username: {
                      required: "请输入账号",
                      minlength: "账号需要3-15个字符",
                      maxlength: "账号需要3-15个字符"
                  },
                  truename: {
                      required: "请输入姓名",
                      minlength: "姓名需要2-15个字符",
                      maxlength: "姓名需要2-15个字符"
                  }
              },



              highlight: function (e) {
                  $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
              },

              success: function (e) {
                  $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                  $(e).remove();
              },

              errorPlacement: function (error, element) {
                  if(element.is(':checkbox') || element.is(':radio')) {
                      var controls = element.closest('div[class*="col-"]');
                      if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                      else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                  }
                  else if(element.is('.select2')) {
                      error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                  }
                  else if(element.is('.chosen-select')) {
                      error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                  }
                  else error.insertAfter(element.parent());
              }


          });
      });
</script>

<!-- <script type="text/javascript" src="/resources/uploadify/jquery.uploadify.min.js"></script> -->
</body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2015-07-27 16:47:26
         compiled from "application/views/inc_form_result.html" */ ?>
<?php if ($_valid && !is_callable('content_55b5f01e39fae3_03394634')) {function content_55b5f01e39fae3_03394634($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<div class="alert alert-danger">
    <strong>
        <i class="icon-remove"></i>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['do_result']->value)===null||$tmp==='' ? '' : $tmp);?>

    </strong>
</div>
<?php } elseif (isset($_smarty_tpl->tpl_vars['do_result']->value)) {?>
<div class="alert alert-block alert-success">
    <strong>
        <i class="icon-ok"></i>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['do_result']->value)===null||$tmp==='' ? '' : $tmp);?>

    </strong>
</div>
<?php }?>


<?php }} ?>
