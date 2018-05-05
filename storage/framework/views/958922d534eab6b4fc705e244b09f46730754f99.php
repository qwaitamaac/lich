<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thông tin nội bộ</title>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>"/>
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon"  />
</head>

<body>
<div id="wapper-header">
	<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="clr"></div>
</div><!-- -->
<div class="breadcrumb">
	<div class="bread-title">Thông tin nội bộ</div>
    <div class="duongdan">
    	<ul>
        	<li><a href="trangchu">Trang chủ</a></li>
            <li>></li>
            <li><span class="dd">Thông tin nội bộ</span></li>
        </ul>
    </div>
    <div class="clr"></div>    
</div>
<div id="content">
	<div id="wapper">
	
    <div class="clr"></div>
    </div>     
    
</div><!-- -->
<div id="wapper-footer">
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       </div>
</body>
</html>
