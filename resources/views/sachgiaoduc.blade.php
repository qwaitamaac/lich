<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sách giáo dục</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"  />
</head>

<body>
<div id="wapper-header">
	@include('header')
<div class="clr"></div>
</div><!-- -->
<div class="breadcrumb">
	<div class="bread-title"> Sách giáo khoa</div>
    <div class="duongdan">
    	<ul>
        	<li><a href="trangchu">Trang chủ</a></li>
            <li>></li>
            <li><span class="dd"> Sách giáo khoa</span></li>
        </ul>
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
            @foreach($new_sanpham as $new)
            <div class="danhmuc1">
            	<div class="a">
                	<a href="#"><img src="images/{{ $new->img}}" width="85" height="90"/></a>
                </div>
                <div class="b">
            	<h2><a href="chitiet&{{$new->id}}">{{ $new->tensp}}</a></h2>
                <p class="c">{{ $new->gia }}.000 Đ</p>
                </div>
            </div>
            @endforeach
        </div>
        </div>
		<div class="content_right">
        <h3> Sách giáo khoa</h3>
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
        @foreach($sachgiaokhoa as $sach)
			<div class="sanpham">
            	<div class="hinhanh"><img src="images/{{ $sach->img}}" width="255"/></div>
                <div class="infor">
                	<div class="tensp"><a href="chitietsach&{{$sach->id}}">{{ $sach->tensp}}</a></div>
                    <div class="masp">Mã sản phẩm: {{ $sach->masp}}</div>
                    <div class="tinhtrang">Tình trạng:{{ $sach->tinhtrang }}</div>
                    <div class="luocmua"><img src="images/buy.png" width="14" height="14"/> {{ $sach->luocmua}} 
                    	 <span class="luocxem"><img src="images/view.png" width="14" height="14"/> {{ $sach->luocxem}}</span></div>
                    <div class="gia">{{ $sach->gia }}.000 Đ</div>
                    <div class="muahang"><img src="images/shopping-cart-black-shape.png" />
                    	<span class="muahang"><img src="images/search.png" /></span>
                    </div>
                </div>
            </div>
 			@endforeach
        </div>
    	    
    </div>
    <div class="clr"></div>
 </div>  
<div id="wapper-footer">
@include('footer')
       </div>
</body>
</html>
