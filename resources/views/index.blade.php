<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Công ty phát hành báo trí trung ương</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"  />
<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>

</head>

<body>
<div id="wapper-header">
	@include('header')
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
            
            @foreach($new_sanpham as $new)
			<div class="sanpham">
            	<div class="hinhanh"><img src="images/{{ $new->img}}" width="255"/></div>
                <div class="infor">
                	<div class="tensp"><a href="chitiet&{{$new->id}}">{{ $new->tensp}}</a></div>
                    <div class="masp">Mã sản phẩm: {{ $new->masp}}</div>
                    <div class="tinhtrang">Tình trạng:{{ $new->tinhtrang }}</div>
                    <div class="luocmua"><img src="images/buy.png" width="14" height="14"/> {{ $new->luocmua}} 
                    	 <span class="luocxem"><img src="images/view.png" width="14" height="14"/> {{ $new->luocxem}}</span></div>
                    <div class="gia">{{ $new->gia }}.000 Đ</div>
                    <div class="muahang"><img src="images/shopping-cart-black-shape.png" />
                    	<span class="muahang"><img src="images/search.png" /></span>
                    </div>
                </div>
            </div>
 			@endforeach
            <div class="clr"></div>
        </div>
        </div>
        <div class="sanphamnoibat">
        <div id="wapper">
        	<div class="box-title">SẢN PHẨM NỔI BẬT<p><img src="images/decoration.png" /></p></div>
		
			@foreach($sanphamnoibat as $noibat)
			<div class="sanpham">
            	<div class="hinhanh"><img src="images/{{ $noibat->img}}" width="255"/></div>
                <div class="infor">
                	<div class="tensp"><a href="chitiet&{{$noibat->id}}">{{ $noibat->tensp}}</a></div>
                    <div class="masp">Mã sản phẩm: {{ $noibat->masp}}</div>
                    <div class="tinhtrang">Tình trạng:{{ $noibat->tinhtrang }}</div>
                    <div class="luocmua"><img src="images/buy.png" width="14" height="14"/> {{ $noibat->luocmua}} 
                    	 <span class="luocxem"><img src="images/view.png" width="14" height="14"/> {{ $noibat->luocxem}}</span></div>
                    <div class="gia">{{ $noibat->gia }}.000 Đ</div>
                    <div class="muahang"><img src="images/shopping-cart-black-shape.png" />
                    	<span class="muahang"><img src="images/search.png" /></span>
                    </div>
                </div>
            </div>
 			@endforeach
            <div class="clr"></div>
        </div>
        </div>
        <div id="wapper">
        <div class="lichlienket">
        	<div class="box-title">LỊCH LIÊN KẾT - VNPOST<p><img src="images/decoration.png" /></p></div>
            
           @foreach($lichlienket as $lichlk)
			<div class="sanpham">
            	<div class="hinhanh"><img src="images/{{ $lichlk->img}}" width="255"/></div>
                <div class="infor">
                	<div class="tensp"><a href="chitiet&{{$lichlk->id}}">{{ $lichlk->tensp}}</a></div>
                    <div class="masp">Mã sản phẩm: {{ $lichlk->masp}}</div>
                    <div class="tinhtrang">Tình trạng:{{ $lichlk->tinhtrang }}</div>
                    <div class="luocmua"><img src="images/buy.png" width="14" height="14"/> {{ $lichlk->luocmua}} 
                    	 <span class="luocxem"><img src="images/view.png" width="14" height="14"/> {{ $lichlk->luocxem}}</span></div>
                    <div class="gia">{{ $lichlk->gia }}.000 Đ</div>
                    <div class="muahang"><img src="images/shopping-cart-black-shape.png" />
                    	<span class="muahang"><img src="images/search.png" /></span>
                    </div>
                </div>
            </div>
 			@endforeach
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
@include('footer')
       </div>
</body>
</html>
