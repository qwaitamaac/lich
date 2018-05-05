<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Công ty phát hành báo trí trung ương</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"  />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>"/>

</head>

<body>
<div id="wapper-header">
	<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="clr"></div>
</div><!-- -->
<div id="content">
	<div id="wapper">
	
    	<div class="box">
        	<div class="boxsever">
            	<div class="box1"><span class="iconbox"><img src="images/ico-service-1.png" /></span></div>
                <div class="box2">VẬN CHUYỂN TOÀN QUỐC</div>
                <div class="box3">Với 13.021 điểm phục vụ trên toàn quốc</div>
            </div>
            <div class="boxsever">
            	<div class="box1"><span class="iconbox"><img src="images/ico-service-2.png" /></span></div>
                <div class="box2">HỖ TRỢ 24/7</div>
                <div class="box3">Luôn hỗ trợ bạn mọi lúc mọi nơi</div>
            </div>
            <div class="boxsever">
            	<div class="box1"><span class="iconbox"><img src="images/ico-service-3.png" /></span></div>
                <div class="box2">HOÀN TIỀN 100%</div>
                <div class="box3">Nếu sản phẩm không đảm bảo chất lượng</div>
            </div>
       	</div>
        <div class="sanphammoi">
        	<div class="box-title"> Sản phẩm mới<p><img src="images/decoration.png" /></p></div>
            
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
            <div class="clr"></div>
        </div>
        </div>
        <div class="sanphamnoibat">
        <div id="wapper">
        	<div class="box-title">SẢN PHẨM NỔI BẬT<p><img src="images/decoration.png" /></p></div>
		
			<?php $__currentLoopData = $sanphamnoibat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noibat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="sanpham">
            	<div class="hinhanh"><img src="images/<?php echo e($noibat->img); ?>" width="255"/></div>
                <div class="infor">
                	<div class="tensp"><a href="chitiet&<?php echo e($noibat->id); ?>"><?php echo e($noibat->tensp); ?></a></div>
                    <div class="masp">Mã sản phẩm: <?php echo e($noibat->masp); ?></div>
                    <div class="tinhtrang">Tình trạng:<?php echo e($noibat->tinhtrang); ?></div>
                    <div class="luocmua"><img src="images/buy.png" width="14" height="14"/> <?php echo e($noibat->luocmua); ?> 
                    	 <span class="luocxem"><img src="images/view.png" width="14" height="14"/> <?php echo e($noibat->luocxem); ?></span></div>
                    <div class="gia"><?php echo e($noibat->gia); ?>.000 Đ</div>
                    <div class="muahang"><img src="images/shopping-cart-black-shape.png" />
                    	<span class="muahang"><img src="images/search.png" /></span>
                    </div>
                </div>
            </div>
 			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="clr"></div>
        </div>
        </div>
        <div id="wapper">
        <div class="lichlienket">
        	<div class="box-title">LỊCH LIÊN KẾT - VNPOST<p><img src="images/decoration.png" /></p></div>
            
           <?php $__currentLoopData = $lichlienket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lichlk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="sanpham">
            	<div class="hinhanh"><img src="images/<?php echo e($lichlk->img); ?>" width="255"/></div>
                <div class="infor">
                	<div class="tensp"><a href="chitiet&<?php echo e($lichlk->id); ?>"><?php echo e($lichlk->tensp); ?></a></div>
                    <div class="masp">Mã sản phẩm: <?php echo e($lichlk->masp); ?></div>
                    <div class="tinhtrang">Tình trạng:<?php echo e($lichlk->tinhtrang); ?></div>
                    <div class="luocmua"><img src="images/buy.png" width="14" height="14"/> <?php echo e($lichlk->luocmua); ?> 
                    	 <span class="luocxem"><img src="images/view.png" width="14" height="14"/> <?php echo e($lichlk->luocxem); ?></span></div>
                    <div class="gia"><?php echo e($lichlk->gia); ?>.000 Đ</div>
                    <div class="muahang"><img src="images/shopping-cart-black-shape.png" />
                    	<span class="muahang"><img src="images/search.png" /></span>
                    </div>
                </div>
            </div>
 			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="clr"></div>
        </div>
        </div>
            <div class="khachhang">
                <div class="box-title">KHÁCH HÀNG TIÊU BIỂU<p><img src="images/decoration.png" /></p></div>
             <div>
           <div class="hinh " style="opacity: 1;display: block;">
           <div class="anhinh">
           <div class="hinhlogo" >
              <div class="nen"><div class="wrap-brand"><img src="images/brand1.png" style=" width: 168px; "></div></div>
              <div class="nen"><div class="wrap-brand"><img src="images/brand2.png" style=" width: 168px; "></div></div>    
			<div class="nen"><div class="wrap-brand"><img src="images/brand3.png" style=" width: 168px; "></div></div>    
            <div class="nen"><div class="wrap-brand"><img src="images/brand4.png" style=" width: 168px; "></div></div>    
            <div class="nen"><div class="wrap-brand"><img src="images/brand5.png" style=" width: 168px; "></div></div>    
            <div class="nen"><div class="wrap-brand"><img src="images/brand6.png" style=" width: 168px; "></div></div>    
            <div class="nen"><div class="wrap-brand"><img src="images/brand7.png" style=" width: 168px; "></div></div>    
            <div class="nen"><div class="wrap-brand"><img src="images/brand8.png" style=" width: 168px; "></div></div>    	
           </div>
           </div>
           </div>
           
         <div class="clr"></div>
    </div>     
    </div>
    
</div><!-- -->
<div id="wapper-footer">
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       </div>
</body>
</html>
