<?php include_once 'helpers/helper.php'; ?>
<?php subview('header.php');    ?>
<link rel="stylesheet" href="assets/css/form.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<style>

:root{
  --background-dark: #2d3548;
  --text-light: rgba(255,255,255,0.6);
  --text-lighter: rgba(255,255,255,0.9);
  --spacing-s: 8px;
  --spacing-m: 16px;
  --spacing-l: 24px;
  --spacing-xl: 32px;
  --spacing-xxl: 64px;
  --width-container: 1200px;
}


*{
  border: 0;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html{
  height: 100%;
  font-family: 'Montserrat', 'sans-serif';
  font-size: 14px;
}

body{
  height: 100%;
}

.hero-section{
  align-items: flex-start;
  background-image: linear-gradient(15deg, #0f4667 0%, #2a6973 150%);
  display: flex;
  min-height: 100%;
  justify-content: center;
  padding: var(--spacing-xxl) var(--spacing-l);
}

.card-grid{
  display: grid;
  grid-template-columns: repeat(1, 1fr);
  grid-column-gap: var(--spacing-l);
  grid-row-gap: var(--spacing-l);
  max-width: var(--width-container);
  width: 100%;
}

@media(min-width: 540px){
  .card-grid{
    grid-template-columns: repeat(2, 1fr); 
  }
}

@media(min-width: 960px){
  .card-grid{
    grid-template-columns: repeat(5, 1fr); 
  }
}

/* .card-grid{
  display: grid;
  grid-template-columns: repeat(5, 1fr); 
  grid-column-gap: var(--spacing-l);
  grid-row-gap: var(--spacing-l);
  max-width: var(--width-container);
  width: 100%;
} */
.card{
  list-style: none;
  position: relative;
  background-color: #2a6973;
}

.card:before{
  content: '';
  display: block;
  padding-bottom: 150%;
  width: 100%;
}

.card__background{
  background-size: cover;
  background-position: center;
  border-radius: var(--spacing-l);
  bottom: 0;
  filter: brightness(0.75) saturate(1.2) contrast(0.85);
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  transform-origin: center;
  trsnsform: scale(1) translateZ(0);
  transition: 
    filter 200ms linear,
    transform 200ms linear;
}

.card:hover .card__background{
  transform: scale(1.05) translateZ(0);
}

.card-grid:hover > .card:not(:hover) .card__background{
  filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
}

.card__content{
  left: 0;
  padding: var(--spacing-l);
  position: absolute;
  top: 0;
}

.card__category{
  color: var(--text-light);
  font-size: 1.2rem;
  margin-bottom: var(--spacing-s);
  text-transform: uppercase;
}

.card__heading{
  color: var(--text-lighter);
  font-size: 1.9rem;
  text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
  line-height: 1.4;
  word-spacing: 100vw;
}

@font-face {
  font-family: 'product sans';
  src: url('assets/css/Product Sans Bold.ttf');
  }
h1 {
  font-size: 30px !important;
  margin-bottom: 20px;  
  color: white;  
  font-family :'product sans' !important;
  text-align: center;
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
  height: 200px;
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
<h1 style = "color: black; padding-top:25px">MEMBERS OF OUR TEAM</h1>
<section class="hero-section">

  <div class="card-grid">
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(assets/images/ducphat.jpg)"></div>
      <div class="card__content">
        <p class="card__category">52100986</p>
        <h3 class="card__heading">Trần Đức Phát</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(assets/images/caominh.jpg)"></div>
      <div class="card__content">
        <p class="card__category">52100702</p>
        <h3 class="card__heading">Nguyễn Cao Minh</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(assets/images/baoduy.jpg)"></div>
      <div class="card__content">
        <p class="card__category">52100403</p>
        <h3 class="card__heading">Trần Bảo Duy</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(assets/images/anhkhoa.jpg)"></div>
      <div class="card__content">
        <p class="card__category">52100968</p>
        <h3 class="card__heading">Đỗ Anh Khoa</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(assets/images/tuankhoa.jpg)"></div>
      <div class="card__content">
        <p class="card__category">52100972</p>
        <h3 class="card__heading">Trần Tuấn Khoa</h3>
      </div>
    </a>
  <div>
</section>
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
