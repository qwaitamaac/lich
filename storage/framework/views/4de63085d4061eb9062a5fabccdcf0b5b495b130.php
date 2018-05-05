<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php $__currentLoopData = $new_sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="sanpham">
            	<div class="hinhanh"><img src="images/<?php echo e($new->img); ?>" width="255"/></div>
                <div class="infor">
                	<div class="tensp"><a href="chitiet&<?php echo e($new->id); ?>"><?php echo e($new->tensp); ?></a></div>
                    <div class="masp">Mã sản phẩm: <?php echo e($new->masp); ?></div>
                    <div class="tinhtrang">Tình trạng:<?php echo e($new->tinhtrang); ?></div>
                    <div class="luocmua"><img src="images/buy.png" width="14" height="14"/> <?php echo e($new->luocmua); ?> 
                    	 <span class="luocxem"><img src="images/view.png" width="14" height="14"/> <?php echo e($new->luocxem); ?></span></div>
                    <div class="gia"><?php echo e($new->gia); ?>.000 Đ</div>
                    <div class="muahang"><img src="images/shopping-cart-black-shape.png" />
                    	<span class="muahang"><img src="images/search.png" /></span>
                    </div>
                </div>
            </div>
 			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>