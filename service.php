<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php');    ?>
<link rel="stylesheet" href="assets/css/form.css">
<style>

body {
  font-family: 'Open Sans', arial, sans-serif;
  background: #faecd4;
  font-size: 14px;
}
.projcard-container {
  margin: 50px 0;
}

/* Actual Code: */
.projcard-container,
.projcard-container * {
  box-sizing: border-box;
}
.projcard-container {
  margin-left: auto;
  margin-right: auto;
  width: 1000px;
}
.projcard {
  position: relative;
  width: 100%;
  height: 300px;
  margin-bottom: 40px;
  border-radius: 10px;
  background-color: #fff;
  border: 2px solid #ddd;
  font-size: 18px;
  overflow: hidden;
  cursor: pointer;
  box-shadow: 0 4px 21px -12px rgba(0, 0, 0, .66);
  transition: box-shadow 0.2s ease, transform 0.2s ease;
}
.projcard:hover {
  box-shadow: 0 34px 32px -33px rgba(0, 0, 0, .18);
  transform: translate(0px, -3px);
}
.projcard::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-image: linear-gradient(-70deg, #424242, transparent 50%);
  opacity: 0.07;
}
.projcard:nth-child(2n)::before {
  background-image: linear-gradient(-250deg, #424242, transparent 50%);
}
.projcard-innerbox {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}
.projcard-img {
  position: absolute;
  height: 300px;
  width: 400px;
  top: 0;
  left: 0;
  transition: transform 0.2s ease;
}
.projcard:nth-child(2n) .projcard-img {
  left: initial;
  right: 0;
}
.projcard:hover .projcard-img {
  transform: scale(1.05) rotate(1deg);
}
.projcard:hover .projcard-bar {
  width: 70px;
}
.projcard-textbox {
  position: absolute;
  top: 7%;
  bottom: 7%;
  left: 430px;
  width: calc(100% - 470px);
  font-size: 17px;
}
.projcard:nth-child(2n) .projcard-textbox {
  left: initial;
  right: 430px;
}
.projcard-textbox::before,
.projcard-textbox::after {
  content: "";
  position: absolute;
  display: block;
  background: #ff0000bb;
  background: #fff;
  top: -20%;
  left: -55px;
  height: 140%;
  width: 60px;
  transform: rotate(8deg);
}
.projcard:nth-child(2n) .projcard-textbox::before {
  display: none;
}
.projcard-textbox::after {
  display: none;
  left: initial;
  right: -55px;
}
.projcard:nth-child(2n) .projcard-textbox::after {
  display: block;
}
.projcard-textbox * {
  position: relative;
}
.projcard-title {
  font-family: 'Voces', 'Open Sans', arial, sans-serif;
  font-size: 24px;
}
.projcard-subtitle {
  font-family: 'Voces', 'Open Sans', arial, sans-serif;
  color: #888;
}
.projcard-bar {
  left: -2px;
  width: 50px;
  height: 5px;
  margin: 10px 0;
  border-radius: 5px;
  background-color: #424242;
  transition: width 0.2s ease;
}
.projcard-description {
  z-index: 10;
  font-size: 15px;
  color: #424242;
  height: 125px;
  overflow: hidden;
  text-overflow: ellipsis;
}

.footer-w3l {
		margin: 50px 0 15px 0;
	}

.footer-w3l p {
  font-size: 14px;
  text-align: center;
  color: #000;
  line-height: 27px;
}

.footer-w3l p a {
  color: #000;
}

.footer-w3l p a:hover {
  text-decoration: underline;
}

.footer {
  margin-top: 100px;
  background-color: #615c5c;
  width: 100vw;
  height: 400px;
  position: relative;
}

.footer .row {
  display: flex;
  justify-content: space-between;
}

.footer .title {
  font-size: 3.6rem;
  font-weight: 600;
  color: #fff;
  margin-left: 50px;
  margin-top: 36px;
}

.footer .icon-group {
  display: flex;
  margin-right: 75px;
  margin-top: 50px;
  gap: 30px;
}

.footer .desc {
		color: #9d9fa3;
		font-size: 11px;
		margin-top: 16px;
		line-height: 1.2;
    text-align: center;
	}

</style>

<main>
<?php

?>


<h1 style="color: black; font-size: 50px; text-align: center;padding-top: 50px;"><b>Our Services</b></h1>

<div class="projcard-container">

  <div class="projcard projcard-blue">
    <div class="projcard-innerbox">
      <img class="projcard-img" src="assets/images/chonChoNgoi.jpg" />
      <div class="projcard-textbox">
        <div class="projcard-title">Chọn trước chỗ ngồi</div>
        <div class="projcard-subtitle">
          Nhanh chóng, thuận tiện, dễ thao tác
        </div>
        <div class="projcard-bar"></div>
        <div class="projcard-description">Bạn mong muốn có một vị trí ngồi phù hợp với nhu cầu, hãng hàng không chúng tôi cho phép bạn chọn trước chỗ ngồi để quý khách có thể cảm thấy hài lòng nhất với chỗ ngồi của mình. Với thao tác dễ dang, đơn giản, bạn đã có ngay một chỗ ngồi ưng ý.</div>
      </div>
    </div>
  </div>
  
  
  <div class="projcard projcard-red">
    <div class="projcard-innerbox">
      <img class="projcard-img" src="assets/images/TravelCARE.jpg" />
      <div class="projcard-textbox">
        <div class="projcard-title">Bảo hiểm du lịch TravelCARE</div>
        <div class="projcard-subtitle">Giúp chuyến đi của bạn an toàn, vui chơi an tâm</div>
        <div class="projcard-bar"></div>
        <div class="projcard-description">
          Gói bảo hiểm TravelCARE đảm bảo cho chuyến đi của bạn ở mức an toàn tuyệt đối và luôn giúp khách hàng an tâm. Sự tin tưởng của quý khách tạo nên chất lượng của chúng tôi, vì chúng tôi đặt sự an toàn của bạn là trên hết. An tâm, du lịch, an toàn.
        </div>
      </div>
    </div>
  </div>

  <div class="projcard projcard-blue">
    <div class="projcard-innerbox">
      <img class="projcard-img" src="assets/images/HoTramHotel.jpg" />
      <div class="projcard-textbox">
        <div class="projcard-title">Đặt khách sạn</div>
        <div class="projcard-subtitle">
          Giúp cho bạn có một nơi nghĩ dưỡng thật tốt
        </div>
        <div class="projcard-bar"></div>
        <div class="projcard-description">Dịch vụ này được hãng đảm bảo khách sạn mà bạn mong muốn đặt sẽ có thế giúp bạn có ngay một suất tại đấy, vì chúng tôi là hãng hàng không được quan tâm bậc nhất tại Việt Nam nên có nhiều khách sạn liên kết dịch vụ. Đảm bảo giúp bạn không lo nghĩ gì vấn đề nơi nghĩ dưỡng của minh.</div>
      </div>
    </div>
  </div>

  <div class="projcard projcard-red">
    <div class="projcard-innerbox">
      <img class="projcard-img" src="assets/images/gheThuongGia.jpg" />
      <div class="projcard-textbox">
        <div class="projcard-title">Hạng thương gia</div>
        <div class="projcard-subtitle">Chỗ ngồi trên chuyến bay thoải mái và dịch vụ ưu tiên</div>
        <div class="projcard-bar"></div>
        <div class="projcard-description">
          Chúng tôi sẽ luôn cung cấp cho bạn một môi trường chuyên nghiệp, sang trọng cùng với sự ưu tiên về dịch vụ chăm sóc sẽ giúp bạn có một chuyến bay không cần phải lo nghĩ. Ghế hạng thương gia chúng tôi được nhập khẩu từ Italia với chất liệu sẽ giúp bạn có chuyến đi thoải mái.       
        </div>
      </div>
    </div>
  </div>
  
  <div class="projcard projcard-blue">
    <div class="projcard-innerbox">
      <img class="projcard-img" src="assets/images/ThueXe.jpg" />
      <div class="projcard-textbox">
        <div class="projcard-title">Thuê xe tự lái</div>
        <div class="projcard-subtitle">
          Cung cấp xe cho bạn thuận tiện di chuyển
        </div>
        <div class="projcard-bar"></div>
        <div class="projcard-description">Cùng với đội ngũ chuyên nghiệp và các phương tiện hiện đại, chúng tôi cung cấp cho bạn dịch vụ Thuê xe tự lái. Với mong muốn bạn có thể thuận tiện di chuyển khi vừa đáp máy bay của hãng chúng tôi. Giúp cho bạn có một chuyến di du lịch tiện lợi và dễ dàng hơn.</div>
      </div>
    </div>
  </div>

</div>




<script>
  
</script>
<footer class="footer">
	<div class="row">
		<h1 class="title">Team06 Airlines</h1>
		<div class="icon-group">
			<img src="./assets/images/visa-pay-logo.svg" alt="" class="icon" />
			<img src="./assets/images/american-express-logo.svg" alt="" class="icon" />
			<img src="./assets/images/master-card-logo.svg" alt="" class="icon" />
			<img src="./assets/images/paypal-logo.svg" alt="" class="icon" />
		</div>
	</div>
	<div class="end">
		<p class="desc">
			© 2023 - Developed by Team06<br /><br />Đại học Tôn Đức Thắng - Lập Trình
			Web và Ứng Dụng<br /><br />Giấy chứng nhận đăng ký doanh nghiệp, mã
			số doanh nghiệp: 0100107518, đăng ký lần đầu ngày 30/6/2010, đăng ký
			thay đổi lần thứ 9 ngày 12/01/2022, cấp bởi Sở KHĐT thành phố Hồ Chí
			Minh.
		</p>
	</div>
</footer>
<?php subview('footer.php'); ?> 
</main>


