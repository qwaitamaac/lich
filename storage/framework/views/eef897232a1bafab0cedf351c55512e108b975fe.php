<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xuất bản phẩm</title>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/main.css')); ?>"/>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"  />
</head>

<body>
<div id="wapper-header">
	<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="clr"></div>
</div><!-- -->
<div class="breadcrumb">
	<div class="wapper">
	<div class="bread-title"> Xuất bản phẩm</div>
    <div class="duongdan">
    	<ul>
        	<li><a href="trangchu">Trang chủ</a></li>
            <li>></li>
            <li><span class="dd"> Xuất bản phẩm</span></li>
        </ul>
    </div>
    </div>
    <div class="clr"></div>    
</div>
<div id="wapper">
	<div id="content">
		<div class="content_left">
        <div class="danhmuc">
            	<ul>
               		<li class="sp">DANH MỤC SẢN PHẨM</li>
                    <li class="ngang1"></li>
                    <li class="ngang2"></li>
                    <li class="sp">BỘ LỌC</li>
                    <li class="ngang1"></li>
                    <li class="ngang2"></li>
                    <li class="sp">SẢN PHẨM KHÁC</li>
                    <li class="ngang1"></li>
                    
                 </ul>
            </div>
            <?php $__currentLoopData = $new_sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="danhmuc1">
            	<div class="a">
                	<a href="#"><img src="images/<?php echo e($new->img); ?>" width="85" height="90"/></a>
                </div>
                <div class="b">
            	<h2><a href="#"><?php echo e($new->tensp); ?></a></h2>
                <p class="c"><?php echo e($new->gia); ?> Đ</p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
		<div class="content_right">
        <h3> Xuất bản phẩm</h3>
        <div class="title">Tất cả các loại XBP như SGK, Vở học sinh...</div>
        <div class="toolbar">
        <div class="trai"><img src="images/grid.png"><span><img src="images/list.png"></span></div>
        <div class="phai">
                Sắp xếp: 
              <select name="sortBy" id="sortBy">
                <option value="default" selected="">Mặc định</option>
                <option value="alpha-asc">A → Z</option>
                <option value="alpha-desc">Z → A</option>
                <option value="price-asc">Giá tăng dần</option>
                <option value="price-desc">Giá giảm dần</option>
                <option value="created-desc">Hàng mới nhất</option>
                <option value="created-asc">Hàng cũ nhất</option>
              </select>
              </div>
        </div>
        <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $san): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="sanpham">
            	<div class="hinhanh"><img src="images/<?php echo e($san->img); ?>" width="255"/></div>
                <div class="infor">
                	<div class="tensp"><a href="#"><?php echo e($san->tensp); ?></a></div>
                    <div class="masp">Mã sản phẩm: <?php echo e($san->masp); ?></div>
                    <div class="tinhtrang">Tình trạng:<?php echo e($san->tinhtrang); ?></div>
                    <div class="luocmua"><img src="images/buy.png" width="14" height="14"/> <?php echo e($san->luocmua); ?> 
                    	 <span class="luocxem"><img src="images/view.png" width="14" height="14"/> <?php echo e($san->luocxem); ?></span></div>
                    <div class="gia"><?php echo e($san->gia); ?> Đ</div>
                    <div class="muahang"><img src="images/shopping-cart-black-shape.png" />
                    	<span class="muahang"><img src="images/search.png" /></span>
                    </div>
                </div>
            </div>
 		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    	    
    </div>
    <div class="clr"></div>
 </div>  
<div id="wapper-footer">
<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       </div>
</body>
</html>
