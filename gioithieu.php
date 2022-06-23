
<?php 
    $title = 'Trang Giới Thiệu';
    require_once('layoutss/header.php')
 ?>
  <div>
  
   <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->


  <!-- Left and right controls -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.contact-info {
font-size: 18px;
line-height: 1.4;
}
    #info .img-boder {
    width: 150px;   
    height: 200px;
    border: 4px solid #dca0a0;
    border-radius: 20px;
    /* border-style: 2px; */
    }
.face-img {
    width: 150px;
    height: 150px;
    border-radius: 120px;
    border: 4px solid #dca0a0;

}

#info .img-info1 {
    margin-left: 80px;
    margin-top: 80px;



}

#info .img-info2 {
    margin-top: 460px;
    margin-right: 35px;
    margin-left: -151px;
}

    
#info .float-left.img-info3 {
    margin-top: 119px;
}

#info .img-info4 {
    margin-left: -153px;
    margin-top: 430px;
}

#info .img-info5 {
    margin-top: 272px;
    margin-left: 35px;
}

.text-info {
    position: relative;

}
.contain-info {
    position: absolute;
    right: 110px;
    padding-top: 60px; 

}

.contain-info .icon-info {
    position: absolute;
    background-color: #f7f0f2;
    width: 320px;
    height: 345px;
    top: 400px;
    left: 60px;
    border: 4px solid #dca0a0;
    border-radius: 20px;
}

.contain-info .icon-info > p {
    position: relative;
    left: 23px;
    top: -20px;
    margin-top: 25px;
    font-family: Brush Script MT;
    font-size: 20px;

}
.icon-info i {
    margin-right: 10px;
    font-size: 15px;
}

.info-heading {
    text-transform: uppercase;
    font-size: 30px;
    font-weight: 400;
    letter-spacing: 4px;
    color: #bab79d;
}

.info-sub-heading {
    text-align: center; 

    font-size: 15px;
    margin-top: 10px;
    font-style: italic; /*chữ nghiên*/
    opacity: 0.6; 
}

.info-face {
    position: absolute;
    right: 50px;
    margin-top: 40px;
    margin-right: 100px;
    text-align: center;
    

    
}
#info {
    background: url('./assce/img/brg/2683138.jpg') top center / cover no-repeat;
    width: 100%;
    height: 800px;

    
}
.name-face{
    margin-top: 8px;
    text-transform: uppercase;
    font-weight: bold;

}
/* contain */
#content .member-img {
    margin-top: 15px;

    width: 230px;
    height : 300px;
    border-radius: 4px; /*bo góc ảnh */
    border: 2px solid #b8b600;
    
}

.contain-info {
    position: absolute;
    right: 110px;
    padding-top: 60px; 

}

.contain-info .icon-info {
    position: absolute;
    background-color: #f7f0f2;
    width: 320px;
    height: 345px;
    top: 420px;
    left: 60px;
    border: 4px solid #dca0a0;
    border-radius: 20px;
}

.contain-info .icon-info > p {
    position: relative;
    left: 23px;
    top: -5px;
    margin-top: 25px;
    font-family: Brush Script MT;
    font-size: 20px;

}

#content{
    background: url('./assce/img/brg/2683138.jpg') top center / cover no-repeat;
    

}

#content .content-section {
    width: 800px;
    padding: 64px 0 112px;
    margin-left: auto;
    margin-right: auto;

}
#content .content-section .section-heading {
    text-align: center;
    font-size: 30px;
    font-weight: 400;
    letter-spacing: 4px; /* khoảng cách của CHỮ */
}
#content .content-section .section-sub-heading {
    font-size: 15px;
    text-align: center;
    margin-top: 10px;
    font-style: italic; /*chữ nghiên*/
    opacity: 0.6; /* độ mờ của chữ từ 0 -> 1 */

}
#content .content-section .about-text {
    margin-top: 20px;
    text-align: justify; /* cho chữ thẳng đều */
    line-height: 1.6; /*khoảng cách của TỪ */
}

#content .team {
    margin-top: 40px;
    /* overflow: hidden; */


}


#content .member-name {
    font-size: 20px;
    color: chocolate;
 
}

.row {
    margin-left: -8px;
    margin-right: -8px;
}

.col {
    float: left;
    padding-left: 8px;
    padding-right: 8px;
}
.text-align {
    text-align: center;
}
    </style>
</head>
<body>
    
    <div id="main" style="margin-top: 100px; padding-top: 50px">
    <div class="video" style="text-align: center;">
  
    <iframe width="1200" height="500" src="https://www.youtube.com/embed/HM0SK6FZFOM?controls=0&amp;start=1;autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-left:30px" ></iframe>
    </div>
    <div id="info">
            <div class="contain-info">
                <div class="text-info">
                    <h2 class="info-heading">personal information</h2>
                    <p class="info-sub-heading">Muốn biết gì thêm không??</p>
                </div> 
                <div class="info-face">
                    <img src="./assce/img/tour/logo.png" alt="Face" class="face-img">
                   <p class="name-face" >haikhanhshop.com</p>
                </div>

                <div class="icon-info">
                    <p><i class="ti-calendar"></i>22/06/2001</p>
                    <p><i class="ti-user"></i>Hải và Khánh đã tạo nên</p>
                    <p><i class="ti-mobile"></i>(07)9 406 306</p>
                    <p><i class="ti-email"></i>doanngochai@gmail.com.vn</p>
                    <p><i class="ti-home"></i>Đà Nẵng</p>
                    <p><i class="ti-link"></i>http://127.0.0.1:5500/#</p>

                </div>
                
            </div>
            <div class="img-list">
                <div class="float-left img-info1">
                    <img src="./assce/img/tour/1.jpg" alt="Name" class="img-boder">
                </div>

                <div class="float-left img-info2">
                    <img src="./assce/img/tour/2.jpg" alt="Name" class="img-boder">
                </div>

                <div class="float-left img-info3">
                    <img src="./assce/img/tour/3.jpg" alt="Name" class="img-boder">
                </div> 

                <div class="float-left img-info4">
                    <img src="./assce/img/tour/4.jpg" alt="Name" class="img-boder">
                </div>

                <div class="float-left img-info5">
                    <img src="./assce/img/tour/5.jpg" alt="Name" class="img-boder">
                </div>    


            </div>
        </div>

    </div>

    <div id="content">
            <!-- About section -->
            <div id="band" class="content-section">
                <h2 class="section-heading">PHOTOS SAMPLE</h2>
                <p class="section-sub-heading">Mang cả tâm tình trong từng sản phẩm</p>
                <p class="about-text">
                    Nỗi sợ vì mua phải giày kém chất lượng, giày fake, từ nay không còn lo lắng nữa vì đã có #HAIKHANHSHOP.COM: hàng chính hãng nhập trực tiếp từ US, fullbox, nguyên tem.

👑 HAIKHANHSHOP.COM ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng.!!!

Đến với "HAIKHANHSHOP.COM” quý khách hàng sẽ có những sản phẩm ưng ý nhất, chất lượng phục vụ tốt và giá thành tốt nhất, cùng những “ Chương Trình Khuyến Mãi Đặc Biệt”.</p>

                <div class=" row team">
                    <div class="col col-three text-align">
                        <p class="member-name">ChiPu</p>
                        <img src="./assce/img/tour/5.jpg" alt="Name" class="member-img">
                    </div>

                    <div class="col col-three text-align">
                        <p class="member-name">Thầy Giáo Ba</p>
                        <img src="./assce/img/tour/ba.jpg" alt="Name" class="member-img">
                    </div>

                    <div class="col col-three text-align">
                        <p class="member-name">Ngọc Trinh</p>
                        <img src="./assce/img/tour/7.jpg" alt="Name" class="member-img">
                    </div>

                    <div class="clear"></div>
                </div>
                
            </div>
    </div>        
</body>
</html>


  
  <?php 
    require_once('layoutss/footer.php')
   ?>
	
</body>
</html>