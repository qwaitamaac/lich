<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xuất bản phẩm</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"  />
</head>

<body>
<div id="wapper-header">
	@include('header')
<div class="clr"></div>
</div><!-- -->

<div class="breadcrumb">
	<div class="wapper">
     @foreach($chitietsanpham as $chit)
	<div class="bread-title">{{$chit-> tensp}}</div>
    <div class="duongdan">
    	<ul>
        	<li><a href="trangchu">Trang chủ</a></li>
            <li>></li>
            <li><span class="dd">{{$chit-> tensp}}</span></li>
        </ul>
    </div>
   @endforeach
    </div>
    <div class="clr"></div>    
</div>
<div id="wapper">
	<div id="content">
    	<div class="wapper">
    	<div class="content_top">
    		<div class="trai">
            @foreach($chitietsanpham as $chit)
            	<div class="slide">
                	<p><img src="images/{{$chit-> img}}" style="width:70px; height:72px;"></p>
                    <p><img src=""</p>
                </div>
                <div class="hinhsp"><img src="images/{{$chit-> img}}"></div>
             @endforeach
            </div>
            <div class="phai">
            
            	<div class="thongtin">
                
                `	<div class="col-xs-12 col-md-7 prod-info">
                @foreach($chitietsanpham as $chit)
					<h2>{{$chit-> tensp}}</h2>
					<p class="product-sku">Mã sản phẩm: {{$chit-> masp}}</p>
					<p class="product-price"><span class="b-price">{{$chit-> gia}}.000₫</span> &nbsp;<span class="c-price">
						<del>
						
						</del></span></p>
					<p class="available">Tình trạng: <span class="color-featured">{{$chit-> tinhtrang}}</span></p>
                @endforeach	    
					<div class="desc">
						
						
					<form action="/cart/add" method="post" enctype="multipart/form-data" class="product-form">
						
						
						<input type="hidden" name="id" value="6426420">                
						
						<div class="quantity">
							<label for="">Số lượng</label>
							<input type="number" class="input-control" min="1" value="1">
						</div>
						<div class="action-btn">
							
							<button class="button">Cho vào giỏ hàng</button>
							
						</div>   
					<div class="abps-productdetail" ab-data-productid="3944599">
                     @foreach($chitietsanpham as $chit)
                    <div class="abps-purchases-block" title="Lượt mua">
                    <i><img src="images/buy.png" width="14" height="14"/> </i>
                    <span>Có <strong>{{$chit-> luocmua}}</strong> lượt mua sản phẩm</span>
                    </div>
                    <div class="abps-views-block" title="Lượt xem">
                    <i><img src="images/view.png" width="14" height="14"/> </i>
                    <span>Có <strong>{{$chit-> luocxem}}</strong> lượt xem sản phẩm</span>
                    </div>
                    </div></form>
					@endforeach	  
						<style>
							.fb-like,.fb-like >span{vertical-align: top!important;}
						</style>
						
						<script src="https://apis.google.com/js/platform.js" async defer gapi_processed="true">
							{lang: 'vi'}
						</script>
						<script>
							$("div.fb-like").attr('data-href',window.location.href)
						</script>

						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
				</div>
                </div> 
            </div>
            	
    	</div>
        </div>
        
        <div class="content_bottom">
		<div class="chitiet_right">
        <div class="danhmuc">
            	<ul>
                    <li class="sp">SẢN PHẨM KHÁC</li>
                    <li class="ngang1"></li>
                    
                 </ul>
            </div>
            @foreach($new_sanpham as $new)
            <div class="danhmuc1">
            	<div class="a">
                	<img src="images/{{ $new->img}}" width="85" height="90"/>
                </div>
                <div class="b">
            	<h2><a href="chitiet&{{$new->id}}">{{ $new->tensp}}</a></h2>
                <p class="c">{{ $new->gia }}.000 Đ</p>
                </div>
            </div>
            @endforeach
        </div>
        
		<div class="chitiet_left">
        <div class="tabs-container">
			<div id="tab1" class="tabs-content" style="">
				<div class="rte">
				<p><strong>Quy cách kỹ thuật:</strong></p>
                <p>- Kích thước: 25 x 35 cm</p>
                <p>- In 4 màu trên giấy couches 64msg</p>
                <p>- Bìa in bằng công nghệ mới metalize, dập vân nổi. Giấy ivory 230gsm.&nbsp;</p>
                <p align="center"><img src="images/logo.png"></p>
                <p align="center"><span style="color:#DAA520;"><strong>TỔNG CÔNG TY BƯU ĐIỆN VIỆT NAM</strong></span></p>
                <p align="center"><span style="color:#DAA520;"><strong>CÔNG TY PHÁT HÀNH BÁO CHÍ TRUNG ƯƠNG</strong></span></p>
				</div>
		</div>
						
						
						

						<script>
							$("div.fb-comments").attr('data-href',window.location.href)
						</script>

						
					</div>
        
        </div>  
    </div>
    </div>
    <div id="wapper">
        <div class="lichlienket">
        	<div class="box-title">SẢN PHẨM LIÊN QUAN<p><img src="images/decoration.png" /></p></div>
            
    	@foreach($sanpham as $san)
			<div class="sanpham">
            	<div class="hinhanh"><img src="images/{{ $san->img}}" width="255"/></div>
                <div class="infor">
                	<div class="tensp"><a href="chitiet&{{$san->id}}">{{ $san->tensp}}</a></div>
                    <div class="masp">Mã sản phẩm: {{ $san->masp}}</div>
                    <div class="tinhtrang">Tình trạng:{{ $san->tinhtrang }}</div>
                    <div class="luocmua"><img src="images/buy.png" width="14" height="14"/> {{ $san->luocmua}} 
                    	 <span class="luocxem"><img src="images/view.png" width="14" height="14"/> {{ $san->luocxem}}</span></div>
                    <div class="gia">{{ $san->gia }}.000 Đ</div>
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
