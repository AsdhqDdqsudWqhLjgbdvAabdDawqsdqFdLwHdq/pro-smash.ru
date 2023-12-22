<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <meta property="og:type" content="website"/>	
    <meta property="og:site_name" content="pro-smash.ru/"/>	
    <meta name="apple-mobile-web-app-title" content="pro-smash.ru/">
    <meta property="og:title" content="pro-smash.ru/"/>	
    <meta property="og:url" content="https://pro-smash.ru/"/>
    <meta name="theme-color" content="#262d39"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://unpkg.com/scrollreveal"></script>
    </head>
<body>
  <div class="wrapper">
    <div class="profile-card js-profile-card">
      <div class="profile-card__img">
        <img src="assets/img/avatar.gif" alt="smash avatar" />
      </div>

      <div class="profile-card__cnt js-profile-cnt">
        <div class="profile-card__name">Daniel Smash</div>
        <div class="profile-card__txt">Hello! My name Daniel, this is my 
    website.</div>
        <div class="profile-card-loc">Minsk, Belarus</div>
     
        <div class="profile-card-social">
          <a href="https://vk.com/ipadevz" target="_blank" class="profile-card-social__item theme" target="_blank">
            <i class="fab fa-vk"></i>
          </a>
          <a href="https://discordapp.com/users/1170331368295768068" target="_blank" class="profile-card-social__item theme" target="_blank">
            <i class="fab fa-discord"></i>
          </a>
          <a href="https://t.me/ipadevz" target="_blank" class="profile-card-social__item theme" target="_blank">
            <i class="fab fa-telegram"></i>
          </a>
        </div>
        <div class="profile-card-ctr">
          <a href="mailto:support@pro-smash.ru" target="_blank" target="_blank"><button class="profile-card__button button--orange"><i class="message fas fa-envelope"></i> Mail</button></a>
        </div>
      </div>
    </div>
  </div>
</body>
<style>
@import url("https://fonts.googleapis.com/css?family=Quicksand:400,500,700&subset=latin-ext");

:root {
  --theme: #fff;
  --sub__title: #232323;
}

@media (prefers-color-scheme: dark) {
  :root {
  --theme: #303030;
  --sub__title: #fff;
  }
}

html {
  position: relative;
  overflow-x: hidden !important;
  -moz-user-select: none;
  -o-user-select:none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Quicksand', sans-serif;
  color: var(--sub__title);
  background-image: linear-gradient(-20deg, #ff2846 0%, #6944ff 100%);
  display: flex;
  background-image: linear-gradient(-20deg, #ff2846 0%, #6944ff 100%);
}

a,
a:hover {
  text-decoration: none;
}

.icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: currentColor;
  fill: currentColor;
}

.wrapper {
  width: 100%;
  width: 100%;
  height: auto;
  min-height: 100vh;
  padding: 50px 20px;
  padding-top: 100px;
  background-image: linear-gradient(-20deg, #ff2846 0%, #6944ff 100%);
  display: flex;
  background-image: linear-gradient(-20deg, #ff2846 0%, #6944ff 100%);
}

@media screen and (max-width: 768px) {
  .wrapper {
    height: auto;
    min-height: 100vh;
    padding-top: 100px;
  }
}

.profile-card {
  width: 100%;
  min-height: 460px;
  margin: auto;
  box-shadow: 0px 8px 60px -10px rgba(13, 28, 39, 0.6);
  background: var(--theme);
  border-radius: 12px;
  max-width: 700px;
  position: relative;
}

.profile-card.active .profile-card__cnt {
  filter: blur(6px);
}

.profile-card.active .profile-card-message,
.profile-card.active .profile-card__overlay {
  opacity: 1;
  pointer-events: auto;
  transition-delay: .1s;
}

.profile-card.active .profile-card-form {
  transform: none;
  transition-delay: .1s;
}

.profile-card__img {
  width: 150px;
  height: 150px;
  margin-left: auto;
  margin-right: auto;
  transform: translateY(-50%);
  border-radius: 50%;
  overflow: hidden;
  position: relative;
  z-index: 4;
  box-shadow: 0px 5px 50px 0px #6c44fc, 0px 0px 0px 7px rgba(107, 74, 255, 0.5);
}

@media screen and (max-width: 576px) {
  .profile-card__img {
    width: 120px;
    height: 120px;
  }
}

.profile-card__img img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
}

.profile-card__cnt {
  margin-top: -35px;
  text-align: center;
  padding: 0 20px;
  padding-bottom: 40px;
  transition: all .3s;
}

.profile-card__name {
  font-weight: 700;
  font-size: 30px;
  color: #6944ff;
  margin-bottom: 15px;
}

.profile-card__txt {
  font-size: 18px;
  font-weight: 500;
  color: var(--txt);
  margin-bottom: 15px;
}

.profile-card__txt strong {
  font-weight: 700;
}

.profile-card-loc {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  font-weight: 600;
}

.profile-card-social {
  margin-top: 25px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.profile-card-social__item {
  display: inline-flex;
  width: 55px;
  height: 55px;
  margin: 15px;
  border-radius: 50%;
  align-items: center;
  justify-content: center;
  color: #fff;
  background: #405de6;
  box-shadow: 0px 7px 30px rgba(43, 98, 169, 0.5);
  position: relative;
  font-size: 21px;
  flex-shrink: 0;
  transition: all .3s;
}

@media screen and (max-width: 768px) {
  .profile-card-social__item {
    width: 50px;
    height: 50px;
    margin: 10px;
  }
}

@media screen and (min-width: 768px) {
  .profile-card-social__item:hover {
    transform: scale(1.2);
  }
}

.profile-card-social__item.theme {
  background: #5c4e4d;
  box-shadow: 0px 4px 30px rgba(43, 98, 169, 0.5);
}

.profile-card-social .icon-font {
  display: inline-flex;
}

.profile-card-ctr {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 40px;
}

@media screen and (max-width: 576px) {
  .profile-card-ctr {
    flex-wrap: wrap;
  }
}

.profile-card__button {
  background: none;
  border: none;
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  font-size: 19px;
  margin: 15px 35px;
  padding: 15px 40px;
  min-width: 201px;
  border-radius: 50px;
  min-height: 55px;
  color: #fff;
  cursor: pointer;
  backface-visibility: hidden;
  transition: all .3s;
}

@media screen and (max-width: 768px) {
  .profile-card__button {
    min-width: 170px;
    margin: 15px 25px;
  }
}

@media screen and (max-width: 576px) {
  .profile-card__button {
    min-width: inherit;
    margin: 0;
    margin-bottom: 16px;
    width: 100%;
    max-width: 300px;
  }

  .profile-card__button:last-child {
    margin-bottom: 0;
  }
}

.profile-card__button:focus {
  outline: none !important;
}

@media screen and (min-width: 768px) {
  .profile-card__button:hover {
    transform: translateY(-5px);
  }
}

.profile-card__button:first-child {
  margin-left: 0;
}

.profile-card__button:last-child {
  margin-right: 0;
}


.profile-card__button.button--orange {
  background: linear-gradient(45deg, #d5135a, #f05924);
  box-shadow: 0px 4px 30px rgba(223, 45, 70, 0.35);
}

.profile-card__button.button--orange:hover {
  box-shadow: 0px 7px 30px rgba(223, 45, 70, 0.75);
}

.profile-card__button.button--gray {
  box-shadow: none;
  background: #dcdcdc;
  color: #142029;
}

@media screen and (max-width: 768px) {
  .profile-card-form {
    max-width: 90%;
    height: auto;
  }
}
</style>
</html>