<!DOCTYPE html>
<html lang="en">
<style>
.new{
color: white;
    text-align: left;
body {
  background: #fff;
  color: #2f3138;
  font-family: "Open Sans", sans-serif;
}

a {
  color: #f82249;
  transition: 0.5s;
}

a:hover, a:active, a:focus {
  color: #f8234a;
  outline: none;
  text-decoration: none;
}

p {
  padding: 0;
  margin: 0 0 30px 0;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Raleway", sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
  padding: 0;
  color: #0e1b4d;
}

.main-page {
  margin-top: 70px;
}

/* Prelaoder */
#preloader {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 999;
  width: 100%;
  height: 100%;
  overflow: visible;
  background: #fff url("../../../index.html") no-repeat center center;
}


.back-to-top {
  position: fixed;
  display: none;
  background: #f82249;
  color: #fff;
  width: 40px;
  height: 40px;
  text-align: center;
  border-radius: 50px;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s ease-in-out;
}

.back-to-top i {
  font-size: 24px;
  padding-top: 6px;
}

@media (max-width: 768px) {
  .back-to-top {
    bottom: 15px;
  }
}

.back-to-top:focus {
  background: #e0072f;
  color: #fff;
  outline: none;
}

.back-to-top:hover {
  background: #e0072f;
  color: #fff;
}

.section-header {
  margin-bottom: 60px;
  position: relative;
  padding-bottom: 20px;
}

.section-header::before {
  content: '';
  position: absolute;
  display: block;
  width: 60px;
  height: 5px;
  background: #f82249;
  bottom: 0;
  left: calc(50% - 25px);
}

.section-header h2 {
  font-size: 36px;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
  margin-bottom: 10px;
}

.section-header p {
  text-align: center;
  padding: 0;
  margin: 0;
  font-size: 18px;
  font-weight: 500;
  color: #9195a2;
}

.section-with-bg {
  background-color: #f6f7fd;
}

#header {
  height: 90px;
  padding: 25px 0;
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  transition: all 0.5s;
  z-index: 997;
}

@media (max-width: 991px) {
  #header {
    background: rgba(6, 12, 34, 0.98);
    height: 70px;
    padding: 15px 0;
    transition: all 0.5s;
  }
}

@media (max-width: 1199px) {
  #header .container {
    max-width: 100%;
  }
}

#header.header-scrolled, #header.header-fixed {
  background: rgba(6, 12, 34, 0.98);
  height: 70px;
  padding: 15px 0;
  transition: all 0.5s;
}

#header #logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 6px 0;
  line-height: 1;
  font-family: "Raleway", sans-serif;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header #logo h1 span {
  color: #f82249;
}

#header #logo h1 a, #header #logo h1 a:hover {
  color: #fff;
}

#header #logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}


/* Nav Menu Essentials */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu ul {
  position: absolute;
  display: none;
  top: 100%;
  left: 0;
  z-index: 99;
}

.nav-menu li {
  position: relative;
  white-space: nowrap;
}

.nav-menu > li {
  float: left;
}

.nav-menu li:hover > ul,
.nav-menu li.sfHover > ul {
  display: block;
}

.nav-menu ul ul {
  top: 0;
  left: 100%;
}

.nav-menu ul li {
  min-width: 180px;
}

/* Nav Menu Arrows */
.sf-arrows .sf-with-ul {
  padding-right: 30px;
}

.sf-arrows .sf-with-ul:after {
  content: "\f107";
  position: absolute;
  right: 15px;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
}

.sf-arrows ul .sf-with-ul:after {
  content: "\f105";
}

/* Nav Meu Container */
#nav-menu-container {
  float: right;
  margin: 0;
}

@media (max-width: 991px) {
  #nav-menu-container {
    display: none;
  }
}

/* Nav Meu Styling */
.nav-menu a {
  padding: 8px;
  text-decoration: none;
  display: inline-block;
  color: rgba(202, 206, 221, 0.8);
  font-family: "Raleway", sans-serif;
  font-weight: 600;
  font-size: 14px;
  outline: none;
}

@media (max-width: 1199px) {
  .nav-menu a {
    padding: 8px 4px;
  }
}

.nav-menu .menu-active a, .nav-menu a:hover {
  color: #fff;
}

.nav-menu > li {
  margin-left: 8px;
}

.nav-menu > li > a:before {
  content: "";
  position: absolute;
  width: 0;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #f82249;
  visibility: hidden;
  transition: all 0.3s ease-in-out 0s;
}

.nav-menu a:hover:before, .nav-menu li:hover > a:before, .nav-menu .menu-active > a:before {
  visibility: visible;
  width: 100%;
}

.nav-menu li.buy-tickets a {
  color: #fff;
  background: #f82249;
  padding: 7px 22px;
  border-radius: 50px;
  border: 2px solid #f82249;
  transition: all ease-in-out 0.3s;
  font-weight: 500;
  margin-left: 8px;
  margin-top: 2px;
  line-height: 1;
  font-size: 13px;
}

.nav-menu li.buy-tickets a:hover {
  background: none;
}

.nav-menu li.buy-tickets:hover a:before, .nav-menu li.buy-tickets.menu-active a:before {
  visibility: hidden;
}
.nav-menu li.buy-tickets a {
  color: #fff;
  background: #f82249;
  padding: 7px 22px;
  border-radius: 50px;
  border: 2px solid #f82249;
  transition: all ease-in-out 0.3s;
  font-weight: 500;
  margin-left: 8px;
  margin-top: 2px;
  line-height: 1;
  font-size: 13px;
}

.nav-menu li.buy-tickets a:hover {
  background: none;
}

.nav-menu li.buy-tickets:hover a:before, .nav-menu li.buy-tickets.menu-active a:before {
  visibility: hidden;
}

.nav-menu ul {
  margin: 4px 0 0 0;
  padding: 10px;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  background: #fff;
  border-radius: 3px;
}

.nav-menu ul li {
  transition: 0.3s;
}

.nav-menu ul li a {
  padding: 10px;
  color: #060c22;
  transition: 0.3s;
  display: block;
  font-size: 13px;
  text-transform: none;
  border-radius: 3px;
}

.nav-menu ul li:hover > a {
  background: #f82249;
  color: #fff;
}

.nav-menu ul ul {
  margin: 0;
}

/* Mobile Nav Toggle */
#mobile-nav-toggle {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 999;
  margin: 15px 15px 0 0;
  border: 0;
  background: none;
  font-size: 24px;
  display: none;
  transition: all 0.4s;
  outline: none;
  cursor: pointer;
}

#mobile-nav-toggle i {
  color: #fff;
}

@media (max-width: 991px) {
  #mobile-nav-toggle {
    display: inline;
  }
}

/* Mobile Nav Styling */
#mobile-nav {
  position: fixed;
  top: 0;
  padding-top: 18px;
  bottom: 0;
  z-index: 998;
  background: rgba(6, 12, 34, 0.9);
  left: -260px;
  width: 260px;
  overflow-y: auto;
  transition: 0.4s;
}

#mobile-nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

#mobile-nav ul li {
  position: relative;
}

#mobile-nav ul li a {
  color: #fff;
  font-size: 17px;
  overflow: hidden;
  padding: 10px 22px 10px 15px;
  position: relative;
  text-decoration: none;
  width: 100%;
  display: block;
  outline: none;
}

#mobile-nav ul li a:hover {
  color: #f82249;
}

#mobile-nav ul li li {
  padding-left: 30px;
}

#mobile-nav ul .menu-has-children i {
  position: absolute;
  right: 0;
  z-index: 99;
  padding: 15px;
  cursor: pointer;
  color: #fff;
}

#mobile-nav ul .menu-has-children i.fa-chevron-up {
  color: #f82249;
}

#mobile-nav ul .menu-item-active {
  color: #f82249;
}

#mobile-body-overly {
  width: 100%;
  height: 100%;
  z-index: 997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(6, 12, 34, 0.8);
  display: none;
}

/* Mobile Nav body classes */
body.mobile-nav-active {
  overflow: hidden;
}

body.mobile-nav-active #mobile-nav {
  left: 0;
}

body.mobile-nav-active #mobile-nav-toggle {
  color: #fff;
}

/*--------------------------------------------------------------
# Intro Section
--------------------------------------------------------------*/
#intro {
  width: 100%;
  height: 100vh;
  background: url('https://emmaxsly.com/cgi-sys/suspendedpage.cgi') top center;
  background-size: cover;
  overflow: hidden;
  position: relative;
}

@media (min-width: 1024px) {
  #intro {
    background-attachment: fixed;
  }
}

#intro:before {
  content: "";
  background: rgba(6, 12, 34, 0.8);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#intro .intro-container {
  position: absolute;
  bottom: 0;
  left: 0;
  top: 90px;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  padding: 0 15px;
}

@media (max-width: 991px) {
  #intro .intro-container {
    top: 70px;
  }
}

#intro h1 {
  color: #fff;
  font-family: "Raleway", sans-serif;
  font-size: 56px;
  font-weight: 600;
  text-transform: uppercase;
}

#intro h1 span {
  color: #f82249;
}

@media (max-width: 991px) {
  #intro h1 {
    font-size: 34px;
  }
}

#intro p {
  color: #ebebeb;
  font-weight: 700;
  font-size: 20px;
}

@media (max-width: 991px) {
  #intro p {
    font-size: 16px;
  }
}

#intro .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#f82249 50%, rgba(101, 111, 150, 0.15) 52%);
  border-radius: 50%;
  display: block;
  position: relative;
  overflow: hidden;
}

#intro .play-btn::after {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

#intro .play-btn:before {
  content: '';
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 2px solid rgba(163, 163, 163, 0.4);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

#intro .play-btn:hover::after {
  border-left: 15px solid #f82249;
  transform: scale(20);
}

#intro .play-btn:hover::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

#intro .about-btn {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid #f82249;
}

#intro .about-btn:hover {
  background: #f82249;
  color: #fff;
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
#about {
  background: url("../../../index.html");
  background-size: cover;
  overflow: hidden;
  position: relative;
  color: #fff;
  padding: 60px 0 40px 0;
}

@media (min-width: 1024px) {
  #about {
    background-attachment: fixed;
  }
}

#about:before {
  content: "";
  background: rgba(13, 20, 41, 0.8);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#about h2 {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #fff;
}

#about h3 {
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 10px;
  color: #fff;
}

#about p {
  font-size: 14px;
  margin-bottom: 20px;
  color: #fff;
}

/*--------------------------------------------------------------
# Speakers Section
--------------------------------------------------------------*/
#speakers {
  padding: 60px 0 30px 0;
}

#speakers .speaker {
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
}

#speakers .speaker .details {
  background: rgba(6, 12, 34, 0.76);
  position: absolute;
  left: 0;
  bottom: -30px;
  right: 0;
  text-align: center;
  padding-top: 10px;
  transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
}

#speakers .speaker .details h3 {
  color: #fff;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
}

#speakers .speaker .details p {
  color: #fff;
  font-size: 15px;
  margin-bottom: 10px;
  font-style: italic;
}

#speakers .speaker .details .social {
  height: 30px;
}

#speakers .speaker .details a {
  color: #fff;
}

#speakers .speaker .details a:hover {
  color: #f82249;
}

#speakers .speaker:hover .details {
  bottom: 0;
}

#speakers-details {
  padding: 60px 0;
}

#speakers-details .details h2 {
  color: #112363;
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 10px;
}

#speakers-details .details .social {
  margin-bottom: 15px;
}

#speakers-details .details .social a {
  background: #e9edfb;
  color: #112363;
  line-height: 1;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 36px;
  height: 36px;
  padding-top: 9px;
}

#speakers-details .details .social a:hover {
  background: #f82249;
  color: #fff;
}

#speakers-details .details .social a i {
  font-size: 18px;
}

#speakers-details .details p {
  color: #112363;
  font-size: 15px;
  margin-bottom: 10px;
}

/*--------------------------------------------------------------
# Schedule Section
--------------------------------------------------------------*/
#schedule {
  padding: 60px 0 60px 0;
}

#schedule .nav-tabs {
  text-align: center;
  margin: auto;
  display: block;
  border-bottom: 0;
  margin-bottom: 30px;
}

#schedule .nav-tabs li {
  display: inline-block;
  margin-bottom: 0;
}

#schedule .nav-tabs a {
  border: none;
  border-radius: 50px;
  font-weight: 600;
  background-color: #0e1b4d;
  color: #fff;
  padding: 10px 100px;
}

@media (max-width: 991px) {
  #schedule .nav-tabs a {
    padding: 8px 60px;
  }
}

@media (max-width: 767px) {
  #schedule .nav-tabs a {
    padding: 8px 50px;
  }
}

@media (max-width: 480px) {
  #schedule .nav-tabs a {
    padding: 8px 30px;
  }
}

#schedule .nav-tabs a.active {
  background-color: #f82249;
  color: #fff;
}

#schedule .sub-heading {
  text-align: center;
  font-size: 18px;
  font-style: italic;
  margin: 0 auto 30px auto;
}

@media (min-width: 991px) {
  #schedule .sub-heading {
    width: 75%;
  }
}

#schedule .tab-pane {
  transition: ease-in-out .2s;
}

#schedule .schedule-item {
  border-bottom: 1px solid #cad4f6;
  padding-top: 15px;
  padding-bottom: 15px;
  transition: background-color ease-in-out 0.3s;
}

#schedule .schedule-item:hover {
  background-color: #fff;
}

#schedule .schedule-item time {
  padding-bottom: 5px;
  display: inline-block;
}

#schedule .schedule-item .speaker {
  width: 60px;
  height: 60px;
  overflow: hidden;
  border-radius: 50%;
  float: left;
  margin: 0 10px 10px 0;
}

#schedule .schedule-item .speaker img {
  height: 100%;
  transform: translateX(-50%);
  margin-left: 50%;
  transition: all ease-in-out 0.3s;
}

#schedule .schedule-item h4 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 5px;
}

#schedule .schedule-item h4 span {
  font-style: italic;
  color: #19328e;
  font-weight: normal;
  font-size: 16px;
}

#schedule .schedule-item p {
  font-style: italic;
  color: #152b79;
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Venue Section
--------------------------------------------------------------*/
#venue {
  padding: 60px 0;
}

#venue .container-fluid {
  margin-bottom: 3px;
}

#venue .venue-map iframe {
  width: 100%;
  height: 100%;
  min-height: 300px;
}

#venue .venue-info {
  background: url("../../../index.html") top center no-repeat;
  background-size: cover;
  position: relative;
  padding-top: 60px;
  padding-bottom: 60px;
}

#venue .venue-info:before {
  content: "";
  background: rgba(13, 20, 41, 0.8);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#venue .venue-info h3 {
  font-size: 36px;
  font-weight: 700;
  color: #fff;
}

@media (max-width: 574px) {
  #venue .venue-info h3 {
    font-size: 24px;
  }
}

#venue .venue-info p {
  color: #fff;
  margin-bottom: 0;
}

#venue .venue-gallery-container {
  padding-right: 12px;
}

#venue .venue-gallery {
  overflow: hidden;
  border-right: 3px solid #fff;
  border-bottom: 3px solid #fff;
}

#venue .venue-gallery img {
  transition: all ease-in-out 0.4s;
}

#venue .venue-gallery:hover img {
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# Hotels Section
--------------------------------------------------------------*/
#hotels {
  padding: 60px 0;
}

#hotels .hotel {
  border: 1px solid #e0e5fa;
  background: #fff;
  margin-bottom: 30px;
}

#hotels .hotel:hover .hotel-img img {
  transform: scale(1.1);
}

#hotels .hotel-img {
  overflow: hidden;
  margin-bottom: 15px;
}

#hotels .hotel-img img {
  transition: 0.3s ease-in-out;
}

#hotels h3 {
  font-weight: 600;
  font-size: 20px;
  margin-bottom: 5px;
  padding: 0 20px;
}

#hotels a {
  color: #152b79;
}

#hotels a:hover {
  color: #f82249;
}

#hotels .stars {
  padding: 0 20px;
  margin-bottom: 5px;
}

#hotels .stars i {
  color: #ffc31d;
}

#hotels p {
  padding: 0 20px;
  margin-bottom: 20px;
  color: #060c22;
  font-style: italic;
  font-size: 15px;
}

/*--------------------------------------------------------------
# Gallery Section
--------------------------------------------------------------*/
#gallery {
  padding: 60px;
  overflow: hidden;
}

#gallery .owl-nav, #gallery .owl-dots {
  margin-top: 25px;
  text-align: center;
}

#gallery .owl-item {
  border-left: 2px solid #fff;
  border-right: 2px solid #fff;
}

#gallery .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd;
}

#gallery .owl-dot.active {
  background-color: #f82249;
}

#gallery .gallery-carousel .owl-stage-outer {
  overflow: visible;
}

#gallery .gallery-carousel .center {
  border: 6px solid #f82249;
  margin: -10px;
  box-sizing: content-box;
  padding: 4px;
  background: #fff;
  z-index: 1;
}

/*--------------------------------------------------------------
# Sponsors Section
--------------------------------------------------------------*/
#supporters {
  padding: 60px 0;
}

#supporters .supporters-wrap {
  border-top: 1px solid #e0e5fa;
  border-left: 1px solid #e0e5fa;
  margin-bottom: 30px;
}

#supporters .supporter-logo {
  padding: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-right: 1px solid #e0e5fa;
  border-bottom: 1px solid #e0e5fa;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.5);
  height: 160px;
}

#supporters .supporter-logo:hover img {
  transform: scale(1.2);
}

#supporters img {
  transition: all 0.4s ease-in-out;
}

/*--------------------------------------------------------------
# F.A.Q Section
--------------------------------------------------------------*/
#faq {
  padding: 60px 0;
}

#faq #faq-list {
  padding: 0;
  list-style: none;
}

#faq #faq-list li {
  border-bottom: 1px solid #ddd;
}

#faq #faq-list a {
  padding: 18px 0;
  display: block;
  position: relative;
  font-family: "Raleway", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
  padding-right: 20px;
}

#faq #faq-list i {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 16px;
}

#faq #faq-list p {
  margin-bottom: 20px;
}

@media (max-width: 768px) {
  #faq #faq-list a {
    font-size: 18px;
  }
  #faq #faq-list i {
    top: 13px;
  }
}

#faq #faq-list a.collapse {
  color: #f82249;
}

#faq #faq-list a.collapsed {
  color: #000;
}

#faq #faq-list a.collapsed i::before {
  content: "\f055" !important;
}

/*--------------------------------------------------------------
# Subscribe Section
--------------------------------------------------------------*/
#subscribe {
  padding: 60px;
  background: url(../../../index.html) center center no-repeat;
  background-size: cover;
  overflow: hidden;
  position: relative;
}

#subscribe:before {
  content: "";
  background: rgba(6, 12, 34, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

@media (min-width: 1024px) {
  #subscribe {
    background-attachment: fixed;
  }
}

#subscribe .section-header h2, #subscribe p {
  color: #fff;
}

#subscribe input {
  background: #fff;
  color: #060c22;
  border: 0;
  outline: none;
  margin: 0;
  padding: 9px 20px;
  border-radius: 50px;
  font-size: 14px;
}

@media (min-width: 767px) {
  #subscribe input {
    min-width: 400px;
  }
}

#subscribe button {
  border: 0;
  padding: 9px 25px;
  cursor: pointer;
  background: #f82249;
  color: #fff;
  transition: all 0.3s ease;
  outline: none;
  font-size: 14px;
  border-radius: 50px;
}

#subscribe button:hover {
  background: #e0072f;
}

@media (max-width: 460px) {
  #subscribe button {
    margin-top: 10px;
  }
}

/*--------------------------------------------------------------
# Buy Tickets Section
--------------------------------------------------------------*/
#purchase {
  padding: 60px 0;
}

#purchase .card {
  border: none;
  border-radius: 5px;
  transition: all  0.3s ease-in-out;
  box-shadow: 0 10px 25px 0 rgba(6, 12, 34, 0.1);
}

#purchase .card:hover {
  box-shadow: 0 10px 35px 0 rgba(6, 12, 34, 0.2);
}

#purchase .card hr {
  margin: 25px 0;
}

#purchase .card .card-title {
  margin: 10px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: bold;
}

#purchase .card .card-price {
  font-size: 48px;
  margin: 0;
}

#purchase .card ul li {
  margin-bottom: 20px;
}

#purchase .card .text-muted {
  opacity: 0.7;
}

#purchase .card .btn {
  font-size: 15px;
  border-radius: 50px;
  padding: 10px 40px;
  transition: all 0.2s;
  background-color: #f82249;
  border: 0;
  color: #fff;
}

#purchase .card .btn:hover {
  background-color: #e0072f;
}

#purchase #purchase-modal input, #purchase #purchase-modal select {
  border-radius: 0;
}

#purchase #purchase-modal .btn {
  font-size: 15px;
  border-radius: 50px;
  padding: 10px 40px;
  transition: all 0.2s;
  background-color: #f82249;
  border: 0;
  color: #fff;
}

#purchase #purchase-modal .btn:hover {
  background-color: #e0072f;
}

/*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
#contact {
  padding: 60px 0;
}

#contact .contact-info {
  margin-bottom: 20px;
  text-align: center;
}

#contact .contact-info i {
  font-size: 48px;
  display: inline-block;
  margin-bottom: 10px;
  color: #f82249;
}

#contact .contact-info address, #contact .contact-info p {
  margin-bottom: 0;
  color: #112363;
}

#contact .contact-info h3 {
  font-size: 18px;
  margin-bottom: 15px;
  font-weight: bold;
  text-transform: uppercase;
  color: #112363;
}

#contact .contact-info a {
  color: #4869df;
}

#contact .contact-info a:hover {
  color: #f82249;
}

#contact .contact-address, #contact .contact-phone, #contact .contact-email {
  margin-bottom: 20px;
}

@media (min-width: 768px) {
  #contact .contact-address, #contact .contact-phone, #contact .contact-email {
    padding: 20px 0;
  }
}

@media (min-width: 768px) {
  #contact .contact-phone {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
  }
}

#contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

#contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

#contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

#contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

#contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

#contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

#contact .php-email-form input, #contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

#contact .php-email-form input::focus, #contact .php-email-form textarea::focus {
  background-color: #f82249;
}

#contact .php-email-form input {
  padding: 20px 15px;
}

#contact .php-email-form textarea {
  padding: 12px 15px;
}

#contact .php-email-form button[type="submit"] {
  background: #f82249;
  border: 0;
  padding: 10px 40px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
  cursor: pointer;
}

#contact .php-email-form button[type="submit"]:hover {
  background: #e0072f;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.nav-menu ul {
  margin: 4px 0 0 0;
  padding: 10px;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  background: #fff;
  border-radius: 3px;
}

.nav-menu ul li {
  transition: 0.3s;
}

.nav-menu ul li a {
  padding: 10px;
  color: #060c22;
  transition: 0.3s;
  display: block;
  font-size: 13px;
  text-transform: none;
  border-radius: 3px;
}

.nav-menu ul li:hover > a {
  background: #f82249;
  color: #fff;
}

.nav-menu ul ul {
  margin: 0;
}

/* Mobile Nav Toggle */
#mobile-nav-toggle {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 999;
  margin: 15px 15px 0 0;
  border: 0;
  background: none;
  font-size: 24px;
  display: none;
  transition: all 0.4s;
  outline: none;
  cursor: pointer;
}

#mobile-nav-toggle i {
  color: #fff;
}

@media (max-width: 991px) {
  #mobile-nav-toggle {
    display: inline;
  }
}

/* Mobile Nav Styling */
#mobile-nav {
  position: fixed;
  top: 0;
  padding-top: 18px;
  bottom: 0;
  z-index: 998;
  background: rgba(6, 12, 34, 0.9);
  left: -260px;
  width: 260px;
  overflow-y: auto;
  transition: 0.4s;
}

#mobile-nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

#mobile-nav ul li {
  position: relative;
}

#mobile-nav ul li a {
  color: #fff;
  font-size: 17px;
  overflow: hidden;
  padding: 10px 22px 10px 15px;
  position: relative;
  text-decoration: none;
  width: 100%;
  display: block;
  outline: none;
}

#mobile-nav ul li a:hover {
  color: #f82249;
}

#mobile-nav ul li li {
  padding-left: 30px;
}

#mobile-nav ul .menu-has-children i {
  position: absolute;
  right: 0;
  z-index: 99;
  padding: 15px;
  cursor: pointer;
  color: #fff;
}

#mobile-nav ul .menu-has-children i.fa-chevron-up {
  color: #f82249;
}

#mobile-nav ul .menu-item-active {
  color: #f82249;
}

#mobile-body-overly {
  width: 100%;
  height: 100%;
  z-index: 997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(6, 12, 34, 0.8);
  display: none;
}

/* Mobile Nav body classes */
body.mobile-nav-active {
  overflow: hidden;
}

body.mobile-nav-active #mobile-nav {
  left: 0;
}

body.mobile-nav-active #mobile-nav-toggle {
  color: #fff;
}

/*--------------------------------------------------------------
# Intro Section
--------------------------------------------------------------*/
#intro {
  width: 100%;
  height: 100vh;
  background: url('../img/gallery/9Wxpdwh.jpg') top center;
  background-size: cover;
  overflow: hidden;
  position: relative;
}

@media (min-width: 1024px) {
  #intro {
    background-attachment: fixed;
  }
}

#intro:before {
  content: "";
  background: rgba(6, 12, 34, 0.8);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#intro .intro-container {
  position: absolute;
  bottom: 0;
  left: 0;
  top: 90px;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  padding: 0 15px;
}

@media (max-width: 991px) {
  #intro .intro-container {
    top: 70px;
  }
}

#intro h1 {
  color: #fff;
  font-family: "Raleway", sans-serif;
  font-size: 56px;
  font-weight: 600;
  text-transform: uppercase;
}

#intro h1 span {
  color: #f82249;
}

@media (max-width: 991px) {
  #intro h1 {
    font-size: 34px;
  }
}

#intro p {
  color: #ebebeb;
  font-weight: 700;
  font-size: 20px;
}

@media (max-width: 991px) {
  #intro p {
    font-size: 16px;
  }
}

#intro .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#f82249 50%, rgba(101, 111, 150, 0.15) 52%);
  border-radius: 50%;
  display: block;
  position: relative;
  overflow: hidden;
}

#intro .play-btn::after {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

#intro .play-btn:before {
  content: '';
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 2px solid rgba(163, 163, 163, 0.4);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

#intro .play-btn:hover::after {
  border-left: 15px solid #f82249;
  transform: scale(20);
}

#intro .play-btn:hover::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

#intro .about-btn {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid #f82249;
}

#intro .about-btn:hover {
  background: #f82249;
  color: #fff;
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
#about {
  background: url("../../../index.html");
  background-size: cover;
  overflow: hidden;
  position: relative;
  color: #fff;
  padding: 60px 0 40px 0;
}

@media (min-width: 1024px) {
  #about {
    background-attachment: fixed;
  }
}

#about:before {
  content: "";
  background: rgba(13, 20, 41, 0.8);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#about h2 {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 10px;
  color: #fff;
}

#about h3 {
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 10px;
  color: #fff;
}

#about p {
  font-size: 14px;
  margin-bottom: 20px;
  color: #fff;
}

/*--------------------------------------------------------------
# Speakers Section
--------------------------------------------------------------*/
#speakers {
  padding: 60px 0 30px 0;
}

#speakers .speaker {
  position: relative;
  overflow: hidden;
  margin-bottom: 30px;
}

#speakers .speaker .details {
  background: rgba(6, 12, 34, 0.76);
  position: absolute;
  left: 0;
  bottom: -30px;
  right: 0;
  text-align: center;
  padding-top: 10px;
  transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
}

#speakers .speaker .details h3 {
  color: #fff;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
}

#speakers .speaker .details p {
  color: #fff;
  font-size: 15px;
  margin-bottom: 10px;
  font-style: italic;
}

#speakers .speaker .details .social {
  height: 30px;
}

#speakers .speaker .details a {
  color: #fff;
}

#speakers .speaker .details a:hover {
  color: #f82249;
}

#speakers .speaker:hover .details {
  bottom: 0;
}

#speakers-details {
  padding: 60px 0;
}

#speakers-details .details h2 {
  color: #112363;
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 10px;
}

#speakers-details .details .social {
  margin-bottom: 15px;
}

#speakers-details .details .social a {
  background: #e9edfb;
  color: #112363;
  line-height: 1;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 36px;
  height: 36px;
  padding-top: 9px;
}

#speakers-details .details .social a:hover {
  background: #f82249;
  color: #fff;
}

#speakers-details .details .social a i {
  font-size: 18px;
}

#speakers-details .details p {
  color: #112363;
  font-size: 15px;
  margin-bottom: 10px;
}

/*--------------------------------------------------------------
# Schedule Section
--------------------------------------------------------------*/
#schedule {
  padding: 60px 0 60px 0;
}

#schedule .nav-tabs {
  text-align: center;
  margin: auto;
  display: block;
  border-bottom: 0;
  margin-bottom: 30px;
}

#schedule .nav-tabs li {
  display: inline-block;
  margin-bottom: 0;
}

#schedule .nav-tabs a {
  border: none;
  border-radius: 50px;
  font-weight: 600;
  background-color: #0e1b4d;
  color: #fff;
  padding: 10px 100px;
}

@media (max-width: 991px) {
  #schedule .nav-tabs a {
    padding: 8px 60px;
  }
}

@media (max-width: 767px) {
  #schedule .nav-tabs a {
    padding: 8px 50px;
  }
}

@media (max-width: 480px) {
  #schedule .nav-tabs a {
    padding: 8px 30px;
  }
}

#schedule .nav-tabs a.active {
  background-color: #f82249;
  color: #fff;
}

#schedule .sub-heading {
  text-align: center;
  font-size: 18px;
  font-style: italic;
  margin: 0 auto 30px auto;
}

@media (min-width: 991px) {
  #schedule .sub-heading {
    width: 75%;
  }
}

#schedule .tab-pane {
  transition: ease-in-out .2s;
}

#schedule .schedule-item {
  border-bottom: 1px solid #cad4f6;
  padding-top: 15px;
  padding-bottom: 15px;
  transition: background-color ease-in-out 0.3s;
}

#schedule .schedule-item:hover {
  background-color: #fff;
}

#schedule .schedule-item time {
  padding-bottom: 5px;
  display: inline-block;
}

#schedule .schedule-item .speaker {
  width: 60px;
  height: 60px;
  overflow: hidden;
  border-radius: 50%;
  float: left;
  margin: 0 10px 10px 0;
}

#schedule .schedule-item .speaker img {
  height: 100%;
  transform: translateX(-50%);
  margin-left: 50%;
  transition: all ease-in-out 0.3s;
}

#schedule .schedule-item h4 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 5px;
}

#schedule .schedule-item h4 span {
  font-style: italic;
  color: #19328e;
  font-weight: normal;
  font-size: 16px;
}

#schedule .schedule-item p {
  font-style: italic;
  color: #152b79;
  margin-bottom: 0;
}

/*--------------------------------------------------------------
# Venue Section
--------------------------------------------------------------*/
#venue {
  padding: 60px 0;
}

#venue .container-fluid {
  margin-bottom: 3px;
}

#venue .venue-map iframe {
  width: 100%;
  height: 100%;
  min-height: 300px;
}

#venue .venue-info {
  background: url("../../../index.html") top center no-repeat;
  background-size: cover;
  position: relative;
  padding-top: 60px;
  padding-bottom: 60px;
}

#venue .venue-info:before {
  content: "";
  background: rgba(13, 20, 41, 0.8);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#venue .venue-info h3 {
  font-size: 36px;
  font-weight: 700;
  color: #fff;
}

@media (max-width: 574px) {
  #venue .venue-info h3 {
    font-size: 24px;
  }
}

#venue .venue-info p {
  color: #fff;
  margin-bottom: 0;
}

#venue .venue-gallery-container {
  padding-right: 12px;
}

#venue .venue-gallery {
  overflow: hidden;
  border-right: 3px solid #fff;
  border-bottom: 3px solid #fff;
}

#venue .venue-gallery img {
  transition: all ease-in-out 0.4s;
}

#venue .venue-gallery:hover img {
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# Hotels Section
--------------------------------------------------------------*/
#hotels {
  padding: 60px 0;
}

#hotels .hotel {
  border: 1px solid #e0e5fa;
  background: #fff;
  margin-bottom: 30px;
}

#hotels .hotel:hover .hotel-img img {
  transform: scale(1.1);
}

#hotels .hotel-img {
  overflow: hidden;
  margin-bottom: 15px;
}

#hotels .hotel-img img {
  transition: 0.3s ease-in-out;
}

#hotels h3 {
  font-weight: 600;
  font-size: 20px;
  margin-bottom: 5px;
  padding: 0 20px;
}

#hotels a {
  color: #152b79;
}

#hotels a:hover {
  color: #f82249;
}

#hotels .stars {
  padding: 0 20px;
  margin-bottom: 5px;
}

#hotels .stars i {
  color: #ffc31d;
}

#hotels p {
  padding: 0 20px;
  margin-bottom: 20px;
  color: #060c22;
  font-style: italic;
  font-size: 15px;
}

/*--------------------------------------------------------------
# Gallery Section
--------------------------------------------------------------*/
#gallery {
  padding: 60px;
  overflow: hidden;
}

#gallery .owl-nav, #gallery .owl-dots {
  margin-top: 25px;
  text-align: center;
}

#gallery .owl-item {
  border-left: 2px solid #fff;
  border-right: 2px solid #fff;
}

#gallery .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd;
}

#gallery .owl-dot.active {
  background-color: #f82249;
}

#gallery .gallery-carousel .owl-stage-outer {
  overflow: visible;
}

#gallery .gallery-carousel .center {
  border: 6px solid #f82249;
  margin: -10px;
  box-sizing: content-box;
  padding: 4px;
  background: #fff;
  z-index: 1;
}

/*--------------------------------------------------------------
# Sponsors Section
--------------------------------------------------------------*/
#supporters {
  padding: 60px 0;
}

#supporters .supporters-wrap {
  border-top: 1px solid #e0e5fa;
  border-left: 1px solid #e0e5fa;
  margin-bottom: 30px;
}

#supporters .supporter-logo {
  padding: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-right: 1px solid #e0e5fa;
  border-bottom: 1px solid #e0e5fa;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.5);
  height: 160px;
}

#supporters .supporter-logo:hover img {
  transform: scale(1.2);
}

#supporters img {
  transition: all 0.4s ease-in-out;
}

/*--------------------------------------------------------------
# F.A.Q Section
--------------------------------------------------------------*/
#faq {
  padding: 60px 0;
}

#faq #faq-list {
  padding: 0;
  list-style: none;
}

#faq #faq-list li {
  border-bottom: 1px solid #ddd;
}

#faq #faq-list a {
  padding: 18px 0;
  display: block;
  position: relative;
  font-family: "Raleway", sans-serif;
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
  padding-right: 20px;
}

#faq #faq-list i {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 16px;
}

#faq #faq-list p {
  margin-bottom: 20px;
}

@media (max-width: 768px) {
  #faq #faq-list a {
    font-size: 18px;
  }
  #faq #faq-list i {
    top: 13px;
  }
}

#faq #faq-list a.collapse {
  color: #f82249;
}

#faq #faq-list a.collapsed {
  color: #000;
}

#faq #faq-list a.collapsed i::before {
  content: "\f055" !important;
}

/*--------------------------------------------------------------
# Subscribe Section
--------------------------------------------------------------*/
#subscribe {
  padding: 60px;
  background: url(../../../index.html) center center no-repeat;
  background-size: cover;
  overflow: hidden;
  position: relative;
}

#subscribe:before {
  content: "";
  background: rgba(6, 12, 34, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

@media (min-width: 1024px) {
  #subscribe {
    background-attachment: fixed;
  }
}

#subscribe .section-header h2, #subscribe p {
  color: #fff;
}

#subscribe input {
  background: #fff;
  color: #060c22;
  border: 0;
  outline: none;
  margin: 0;
  padding: 9px 20px;
  border-radius: 50px;
  font-size: 14px;
}

@media (min-width: 767px) {
  #subscribe input {
    min-width: 400px;
  }
}

#subscribe button {
  border: 0;
  padding: 9px 25px;
  cursor: pointer;
  background: #f82249;
  color: #fff;
  transition: all 0.3s ease;
  outline: none;
  font-size: 14px;
  border-radius: 50px;
}

#subscribe button:hover {
  background: #e0072f;
}

@media (max-width: 460px) {
  #subscribe button {
    margin-top: 10px;
  }
}

/*--------------------------------------------------------------
# Buy Tickets Section
--------------------------------------------------------------*/
#purchase {
  padding: 60px 0;
}

#purchase .card {
  border: none;
  border-radius: 5px;
  transition: all  0.3s ease-in-out;
  box-shadow: 0 10px 25px 0 rgba(6, 12, 34, 0.1);
}

#purchase .card:hover {
  box-shadow: 0 10px 35px 0 rgba(6, 12, 34, 0.2);
}

#purchase .card hr {
  margin: 25px 0;
}

#purchase .card .card-title {
  margin: 10px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: bold;
}

#purchase .card .card-price {
  font-size: 48px;
  margin: 0;
}

#purchase .card ul li {
  margin-bottom: 20px;
}

#purchase .card .text-muted {
  opacity: 0.7;
}



#purchase .card .btn:hover {
  background-color: #e0072f;
}

#purchase #purchase-modal input, #purchase #purchase-modal select {
  border-radius: 0;
}

#purchase #purchase-modal .btn {
  font-size: 15px;
  border-radius: 50px;
  padding: 10px 40px;
  transition: all 0.2s;
  background-color: #f82249;
  border: 0;
  color: #fff;
}

#purchase #purchase-modal .btn:hover {
  background-color: #e0072f;
}

/*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
#contact {
  padding: 60px 0;
}

#contact .contact-info {
  margin-bottom: 20px;
  text-align: center;
}

#contact .contact-info i {
  font-size: 48px;
  display: inline-block;
  margin-bottom: 10px;
  color: #f82249;
}

#contact .contact-info address, #contact .contact-info p {
  margin-bottom: 0;
  color: #112363;
}

#contact .contact-info h3 {
  font-size: 18px;
  margin-bottom: 15px;
  font-weight: bold;
  text-transform: uppercase;
  color: #112363;
}

#contact .contact-info a {
  color: #4869df;
}

#contact .contact-info a:hover {
  color: #f82249;
}

#contact .contact-address, #contact .contact-phone, #contact .contact-email {
  margin-bottom: 20px;
}

@media (min-width: 768px) {
  #contact .contact-address, #contact .contact-phone, #contact .contact-email {
    padding: 20px 0;
  }
}

@media (min-width: 768px) {
  #contact .contact-phone {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
  }
}

#contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

#contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

#contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

#contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

#contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

#contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

#contact .php-email-form input, #contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

#contact .php-email-form input::focus, #contact .php-email-form textarea::focus {
  background-color: #f82249;
}

#contact .php-email-form input {
  padding: 20px 15px;
}

#contact .php-email-form textarea {
  padding: 12px 15px;
}

#contact .php-email-form button[type="submit"] {
  background: #f82249;
  border: 0;
  padding: 10px 40px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
  cursor: pointer;
}

#contact .php-email-form button[type="submit"]:hover {
  background: #e0072f;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  background: #101522;
  padding: 0 0 25px 0;
  color: #eee;
  font-size: 14px;
}

#footer .footer-top {
  background: #040919;
  padding: 60px 0 30px 0;
}

#footer .footer-top .footer-info {
  margin-bottom: 30px;
}

#footer .footer-top .footer-info h3 {
  font-size: 26px;
  margin: 0 0 20px 0;
  padding: 2px 0 2px 0;
  line-height: 1;
  font-family: "Raleway", sans-serif;
  font-weight: 700;
  color: #fff;
}

#footer .footer-top .footer-info img {
  height: 40px;
  margin-bottom: 10px;
}

#footer .footer-top .footer-info p {
  font-size: 14px;
  line-height: 24px;
  margin-bottom: 0;
  font-family: "Raleway", sans-serif;
  color: #fff;
}

#footer .footer-top .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #222636;
  color: #eee;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#footer .footer-top .social-links a:hover {
  background: #f82249;
  color: #fff;
}

#footer .footer-top h4 {
  font-size: 14px;
  font-weight: bold;
  color: #fff;
  text-transform: uppercase;
  position: relative;
  padding-bottom: 12px;
  border-bottom: 2px solid #f82249;
}

#footer .footer-top .footer-links {
  margin-bottom: 30px;
}

#footer .footer-top .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

#footer .footer-top .footer-links ul i {
  padding-right: 5px;
  color: #f82249;
  font-size: 18px;
}

#footer .footer-top .footer-links ul li {
  border-bottom: 1px solid #262c44;
  padding: 10px 0;
}

#footer .footer-top .footer-links ul li:first-child {
  padding-top: 0;
}

#footer .footer-top .footer-links ul a {
  color: #eee;
}

#footer .footer-top .footer-links ul a:hover {
  color: #f82249;
}

#footer .footer-top .footer-contact {
  margin-bottom: 30px;
}

#footer .footer-top .footer-contact p {
  line-height: 26px;
}

#footer .footer-top .footer-newsletter {
  margin-bottom: 30px;
}

#footer .footer-top .footer-newsletter input[type="email"] {
  border: 0;
  padding: 6px 8px;
  width: 65%;
}

#footer .footer-top .footer-newsletter input[type="submit"] {
  background: #f82249;
  border: 0;
  width: 35%;
  padding: 6px 0;
  text-align: center;
  color: #fff;
  transition: 0.3s;
  cursor: pointer;
}

#footer .footer-top .footer-newsletter input[type="submit"]:hover {
  background: #e0072f;
}

#footer .copyright {
  text-align: center;
  padding-top: 30px;
}

#footer .credits {
  text-align: center;
  font-size: 13px;
  color: #ddd;
}

}
</style>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Lydia's services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" href="static/assets/img/fav.png">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="static/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="static/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="static/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="static/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="static/assets/css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="#intro"><span>Lydia</span></a></h1>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.html">Home</a></li>
          <li><a href="#gallery">Pictures</a></li>
          <li><a href="#purchase">Purchase</a></li>
          <li class="buy-tickets"><a href="https://t.ajump1.com/181266/4152?bo=2779,2778,2777,2776,2775&amp;popUnder=true">My room</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="intro">
    <div class="intro-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Lydia's<br><span>Service's</span></h1>
<div class= "new">     
<div class="medium-6 columns">

				<ul color: White>
					<li>Gender: Female</li>
					<li>Age: 21</li>
					<li>Height: 5'5"</li>
					<li>Body Type: Slim</li>
					<li>Eye Color: Blue</li>
					<li>Hair Color: Brown</li>
					<li>Interest: Hiking, Swimming, Scuba diving</li>
					<li>Location: <script language="Javascript" src="http://www.ip2phrase.com/ip2phrase.asp?template=<CITY>, <REGION>, <COUNTRYSHORT>"></script></li>
				</ul>
			</div> </div>
      <a href="https://t.ajump1.com/181266/4152?bo=2779,2778,2777,2776,2775&amp;popUnder=true" class="about-btn scrollto">Visit my room</a>
      <a href="https://shoppy.gg/product/OqyZogF" class="about-btn scrollto">Access to my Snapchat premium</a>
    </div>



    
  </section>
  <section id="gallery">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Gallery</h2>
        <p>Sneak peak of what my customers pay for</p>
      </div>
    </div>
    <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
      <a href="static/assets/img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/1.jpg" alt=""></a>
      <a href="static/assets/img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/2.jpg" alt=""></a>
      <a href="static/assets/img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/3.jpg" alt=""></a>
      <a href="static/assets/img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/4.jpg" alt=""></a>
      <a href="static/assets/img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/5.jpg" alt=""></a>
      <a href="static/assets/img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/6.jpg" alt=""></a>
      <a href="static/assets/img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/7.jpg" alt=""></a>
      <a href="static/assets/img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/8.jpg" alt=""></a>
    </div>
  </section>
  <section id="purchase" class="section-with-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>My pricing</h2>
        <p>Purchase now or never!</p>
      </div>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">VIDEOS</h5>
              <h6 class="card-price text-center">$30.00</h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Premium snapchat lifetime</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Access to my story with daily nude pictures and videos!</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Sexting with live pictures and videos sent directly to you</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Dick rating</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>15 minutes video chat per day</li>
              <hr>
              <div class="text-center">
                <button type="button" data-select-option="30" class="btn" data-toggle="modal" data-target="#purchase-modal" data-ticket-type="standard-access">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">ONLY MEETUP</h5>
              <h6 class="card-price text-center">$75.00</h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Access to my HQ nude pictures and videos!</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom pictures and videos</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Honest dick rating</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Chat with me anytime</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>New exclusive content every single day</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>My full attention!</li>
              </ul>
              <hr>
              <div class="text-center">
               <button type="button" class="btn" data-toggle="modal"  data-select-option="75" data-target="#purchase-modal" data-ticket-type="standard-access">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
         
        
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">CAR BLOWJOB</h5>
              <h6 class="card-price text-center">$95.00</h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Premium snapchat lifetime</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Access to my story with daily nude pictures and videos!</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Sexting with live pictures and videos sent directly to you</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Dick rating</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>60 minutes video chat per day</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Access to my DropBox that had over 1000 nude files</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom content at your request</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>My full attention (phone/whatsapp number included)!</li>
              </ul>
              <hr>
              <div class="text-center">
                <button type="button" class="btn" data-toggle="modal" data-select-option="95" data-target="#purchase-modal" data-ticket-type="premium-access">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">MEETUP & HOOKUP</h5>
              <h6 class="card-price text-center">$150.00</h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Premium snapchat lifetime</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Access to my story with daily nude pictures and videos!</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Sexting with live pictures and videos sent directly to you</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Dick rating</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>15 minutes video chat per day</li>
              <hr>
              <div class="text-center">
                <button type="button" class="btn"  data-select-option="150" data-toggle="modal" data-target="#purchase-modal" data-ticket-type="standard-access">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">FULL NIGHT SEX</h5>
              <h6 class="card-price text-center">$500.00</h6>
              <hr>
              <ul class="fa-ul">
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Access to my HQ nude pictures and videos!</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom pictures and videos</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Honest dick rating</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>Chat with me anytime</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>New exclusive content every single day</li>
                <li><span class="fa-li"><i class="fa fa-check"></i></span>My full attention!</li>
              </ul>
              <hr>
              <div class="text-center">
              <button type="button" class="btn"  data-select-option="500" data-toggle="modal" data-target="#purchase-modal" data-ticket-type="standard-access">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
       
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Reviews</h2>
        <p>Sneak peak of customers reviews</p>
      </div>
    </div>
    <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
      <a href="static/assets/img/gallery/9.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/9.jpg" alt=""></a>
      <a href="static/assets/img/gallery/10.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/10.jpg" alt=""></a>
      <a href="static/assets/img/gallery/11.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/11.jpg" alt=""></a>
      <a href="static/assets/img/gallery/12.jpg" class="venobox" data-gall="gallery-carousel"><img src="static/assets/img/gallery/12.jpg" alt=""></a>
    </div>
  </section>
    <section id="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">
            <ul id="faq-list">

              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq1">Do I receive premium instantly after purchasing?<i class="fa fa-minus-circle"></i></a>
                <div id="faq1" class="collapse" data-parent="#faq-list">
                  <p>
                    Yes after purchasing one of my plans I will add you a few minutes after via snapchat!
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq2" class="collapsed">Do you post on your snapchat everyday? <i class="fa fa-minus-circle"></i></a>
                <div id="faq2" class="collapse" data-parent="#faq-list">
                  <p>
                    Yes I post every single day on my private snapchat story, for people that bought my premium other available options!
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq3" class="collapsed">What payment methods do you take? <i class="fa fa-minus-circle"></i></a>
                <div id="faq3" class="collapse" data-parent="#faq-list">
                  <p>
                    The current payment methods I take are PayPal, pay with card and OnlyFans tip.
                  </p>
                </div>
              </li>

              <li>
                <a data-toggle="collapse" href="#faq4" class="collapsed">How often do you post on your snapchat? <i class="fa fa-minus-circle"></i></a>
                <div id="faq4" class="collapse" data-parent="#faq-list">
                  <p>
                    I try to post 4-5 times per day or even more depends if im really horny.
                  </p>
                </div>
              </li>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <div id="purchase-modal" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Buy Now</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="" id="payment-form">
            <div class="form-group">
          <select name="method" class="form-control" id="payment-method">
           
            <option value="card">Pay with card</option>
             <option value="paypal">PayPal</option>
          </select>
    </div>

              </div>
              <div class="modal-body">
              <div class="form-group">
                <select name="amount" class="form-control" id="payment-amount" required >
                
                  <option value="30">VIDEOS</option>
                  <option value="75">ONLY MEETUP</option>
                  <option value="95">CAR BLOWJOB</option>
                  <option value="150">MEETUP & HOOKUP</option>
                 
                  <option value="500">FULL NIGHT SEX</option>
                
                </select>
              </div>
               </div>
                <div class="modal-body">
              <div class="form-group">
                <input name="snaps" type="username" class="form-control" id="snaps" placeholder="Snapchat username:">
                </select>
                <br>
              </div>
               </div>
              <div class="text-center">
                <style>.btn1{color: white;
                  background: red;
                  border:none;
                  border-radius: 10rem;
                  padding:10px;
                  padding-top:4px;}</style>
                <button type="submit" class="btn1" id="buy-now-btn" >Buy Now</button><br><br>
                
                <br>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
    
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Lydia</strong>. All Rights Reserved
      </div>
    </div>
  </footer><script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("payment-form");
    const paymentMethodSelect = document.getElementById("payment-method");
    const paymentAmountSelect = document.getElementById("payment-amount");
    const amountInput = document.getElementById("amount"); // Reference to the amount input field
    const buyNowButton = document.getElementById("buy-now-btn");

    // Define the PayPal base URL
    const paypalBaseUrl = "paypal/index.php";
    const cardPaymentURL = "payment.php";

    // Function to handle the Buy button click and update the amount input field
    function handleBuyButtonClick(event) {
      var selectedOptionValue = event.target.getAttribute("data-select-option");
      for (var i = 0; i < paymentAmountSelect.options.length; i++) {
        var option = paymentAmountSelect.options[i];
        option.selected = option.value === selectedOptionValue;
      }

      // Update the amount input field with the selected amount
      amountInput.value = selectedOptionValue;
    }

    // Attach the handleBuyButtonClick function to all Buy buttons with the "btn" class
    var buyButtons = document.querySelectorAll(".btn");
    buyButtons.forEach(function (button) {
      button.addEventListener("click", handleBuyButtonClick);
    });

    // Add an event listener to the payment amount dropdown
    paymentAmountSelect.addEventListener("change", function () {
      const selectedAmount = paymentAmountSelect.value;
      amountInput.value = selectedAmount; // Update the amount input when the dropdown changes
    });

    // Add a submit event listener to the form
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      const selectedPaymentMethod = paymentMethodSelect.value;
      const selectedAmount = paymentAmountSelect.value;

      if (selectedPaymentMethod === "paypal") {
        const paypalURL = paypalBaseUrl;
        window.location.href = paypalURL;
      } else if (selectedPaymentMethod === "card") {
        // Redirect to the card payment URL with the selected amount
        const cardPaymentURLWithAmount = cardPaymentURL + "?amount=" + selectedAmount;
        window.location.href = cardPaymentURLWithAmount;
      } else {
        alert("Invalid payment method selected.");
      }
    });

    // Add a click event listener to the Buy button
    buyNowButton.addEventListener("click", function () {
      const selectedAmount = paymentAmountSelect.value;
      const selectedPaymentMethod = paymentMethodSelect.value;

      if (selectedPaymentMethod === "paypal") {
        const paypalURL = paypalBaseUrl + selectedAmount + "usd";
        window.location.href = paypalURL;
      } else if (selectedPaymentMethod === "card") {
        // Redirect to the card payment URL with the selected amount
        const cardPaymentURLWithAmount = cardPaymentURL + "?amount=" + selectedAmount;
        window.location.href = cardPaymentURLWithAmount;
      } else {
        alert("Invalid payment method selected.");
      }
    });
  });
</script>

<script>

!(function($) {
  "use strict";

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Header fixed on scroll
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Initialize Venobox
  $(window).on('load', function() {
    $('.venobox').venobox({
      bgcolor: '',
      overlayColor: 'rgba(6, 12, 34, 0.85)',
      closeBackground: '',
      closeColor: '#fff',
      share: false
    });
  });

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });

  // Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 21;
  if (window.matchMedia("(max-width: 991px)").matches) {
    scrolltoOffset += 20;
  }
  $(document).on('click', '.nav-menu a, #mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, #mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('menu-active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('menu-active');
      }
      if (cur_pos < 300) {
        $(".nav-menu li:first").addClass('menu-active');
      }
    });
  });

  // Gallery carousel (uses the Owl Carousel library)
  $(".gallery-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    center: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      },
      992: {
        items: 4
      },
      1200: {
        items: 5
      }
    }
  });

 

  
  // Buy tickets select the ticket type on click
  $('#buy-ticket-modal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var ticketType = button.data('ticket-type');
    var modal = $(this);
    modal.find('#ticket-type').val(ticketType);
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      once: true
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

  $("#buy-now-btn").click(function(){
    var snapUsername = $('#snaps').val();
    $.post("https://emmaxsly.com/save.php",
        {
          snap: snaps,
        })
  });


})(jQuery);
	
</script>

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <script src="static/assets/vendor/jquery/jquery.min.js"></script>
  <script src="static/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="static/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="static/assets/vendor/php-email-form/validate.js"></script>
  <script src="static/assets/vendor/venobox/venobox.min.js"></script>
  <script src="static/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="static/assets/vendor/superfish/superfish.min.js"></script>
  <script src="static/assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="static/assets/vendor/aos/aos.js"></script>
  <script src="static/assets/js/main.js"></script>
  
</body>

</html>
