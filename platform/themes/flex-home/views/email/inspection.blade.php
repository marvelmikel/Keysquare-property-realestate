<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset - VampVine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href=".../assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <style>
.card{
margin: 0;
font-size: .9rem;
font-weight: 400;
line-height: 1.6;
color: #212529;
text-align: center;
background-color: #f5f8fa;
} 
.card-body{
padding:15px;
}
.button{
   
  font: bold 13px Arial;
  text-decoration: none;
  background-color: #deaea8;
  color: white;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
.vertical-center {
  margin: 0;
  position: absolute;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
body {
    font-size: 16px;
    font-family: var(--primary-font), sans-serif !important;
}

.removeitem {
    cursor: pointer;
}

.rowm10 {
    margin-left: -10px;
    margin-right: -10px
}

.colm10 {
    padding-left: 10px;
    padding-right: 10px
}

img {
    max-width: 100%;
}

a:hover {
    color: $primaryColor
}

.scontent img {
    object-fit: cover;
}

header {
    position: relative;
    z-index: 500;
}

.imgs-grid-modal {
    z-index: 999 !important;
}

header img.banner {
    width: 100%;
    min-height: 200px
}

.topmenu {
    top: 0;
    left: 0;
    right: 0;
    z-index: 10;
    border-bottom: #ccc 1px solid;
}

.topmenu.ishome {
    background-image: linear-gradient(to top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8));
}

.topmenu .navbar-nav {
    width: 100%;
}

.topmenu .navbar-nav a {
    color: #fff !important
}

.topmenu .nav-link:hover {
    color: #ffc107 !important
}

.topmenu .navbar-nav a.active {
    font-weight: 600 !important
}

.topmenu .navbar-toggler {
    color: #fff !important;
    border: none !important;
}

.topmenu.bg-light .navbar-nav a {
    color: #000 !important
}

.topmenu.bg-light .navbar-toggler {
    color: #000 !important
}

.topsearch .typesearch {
    margin-bottom: 10px;
    padding-top: 10px;
}

.topsearch .typesearch a {
    color: #000;
    margin-right: 7px;
}

.topsearch .typesearch a.active {
    border-bottom: #000 2px solid;
    font-weight: bold
}

.topsearch .input-group-lg {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
}

.topsearch .input-group-text {
    background: #FFF;
}

.topsearch .form-control {
    font-size: 16px;
    height: 48px !important;
    box-shadow: none;
    outline: none;
    border: 1px solid #ced4da;
    border-left: 0;
}

.topsearch .btn {
    font-size: 15px !important;
    background: $primaryColor;
    color: #FFF
}

.topsearch .btn:hover {
    color: #000
}

.projecthome h2 a {
    color: #222
}

.projecthome .item {
    height: 100%;
    background-color: #f6f6f6;
}

.projecthome > .row > div {
    margin-bottom: 20px;
}

.projecthome .item p {
    padding: 5px 0;
    margin: 0;
}

.blii {
    position: relative !important;
    background-position: 50% 50% !important;
    background-repeat: no-repeat !important;
    padding-top: 66.6667%;
}

.blii .img {
    position: absolute;
    top: 0px !important;
    bottom: 0px !important;
    left: 0px !important;
    right: 0px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.blii .linkdetail {
    position: absolute;
    top: 0 !important;
    bottom: 0 !important;
    left: 0 !important;
    right: 0 !important;
}

.projecthome .item .img img.thumb {
    width: 100%;
    height: 100%;
    border-radius: 6px;
    object-fit: cover;
}

.projecthome .item .img .icon3d {
    position: absolute;
    top: 40%;
    left: 48%;
    transform: translate(-45%, -30%);
}

.projecthome .item .description {
    background: #FFF;
    padding-top: 6px;
    position: relative;
}

.projecthome .item .description .heart {
    position: absolute;
    top: 10px;
    right: 0;
    cursor: pointer;
}

.projecthome .item .description .dia_chi {
    color: #4f4f4f;
    overflow: hidden;
    text-overflow: ellipsis;
    height: 26px;
}

.projecthome .item .description a {
    color: #000;
    text-decoration: none
}

.projecthome .item .description h5 {
    font-weight: bold;
    font-size: 1em;
    line-height: 120%;
    overflow: hidden;
    text-overflow: ellipsis;
    height: 39px;
    padding: 0;
    margin: 0;
    margin-top: 7px;
    padding-right: 15px;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    white-space: normal;
    -webkit-line-clamp: 2;
}

.projecthome .item .description h5:hover {
    text-decoration: underline;
    color: $primaryColor
}

.projecthome .item .description p {
    padding: 0;
    margin: 0;
    margin-top: 7px
}

.itemarea {
    flex: auto;
}

.itemarea img {
    border-radius: 6px;
    width: 100%;
    object-fit: cover;
    height: 100%;
    flex: auto;
}

.itemarea h4 {
    position: absolute;
    width: 100%;
    bottom: 20px;
    left: 0;
    right: 0;
    text-align: center;
    color: #FFF;
    font-weight: bold;
    font-size: 20px
}

.owl-carousel .owl-stage {
    display: flex;
}

.owl-carousel.owl-drag .owl-item {
    display: flex;
    flex: auto;
}

.homehouse {
    position: relative;
    background: #FFF;
}

.boxlisthouse {
    position: relative;
    background: #FFF;
    padding: 0 10px
}

.gridhouse {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    grid-gap: 20px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.listhouse {
    display: none;
}

.listhouse td {
    font-size: 0.9em
}

.listhouse td a {
    font-size: 1.1em;
    color: #000
}

.hourseitem {
    margin-top: 20px;
}

.hourseitem .img .shorttitle {
    position: absolute;
    top: 5px;
    left: 10px;
    background: rgba(0, 0, 0, 0.7);
    color: #FFF;
    font-size: 13px;
    padding: 4px 5px 1px 5px;
    border-radius: 3px;
}

.hourseitem .img .thumb {
    width: 100%;
    border-radius: 6px;
    object-fit: cover;
    height: 100%;
}

.hourseitem .img .icon3d {
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%, -40%);
}

.hourseitem .info {
    padding: 10px 0;
    padding-bottom: 0;
    position: relative;
}

.hourseitem .info .heart {
    position: absolute;
    top: 10px;
    right: 0;
    cursor: pointer;
}

.hourseitem p {
    margin: 0;
    padding: 0;
    margin-top: 5px;
    font-size: 15px
}

.hourseitem h3 {
    height: 42px;
    overflow: hidden;
    margin: 0;
    padding: 0;
    margin-bottom: 10px;
    line-height: 16px;
    font-weight: bold;
    padding-right: 15px
}

.hourseitem h3 a {
    color: #000;
    font-size: 16px;
}

.hourseitem h3 a:hover {
    color: $primaryColor
}

.hourseitem .city {
    color: #4f4f4f;
    max-height: 21px;
    overflow: hidden;
    text-overflow: ellipsis;
}

.hourseitem p.threemt {
    font-size: 0.9em;
    display: flex;
}

.hourseitem p.threemt span {
    font-size: 13.5px;
    float: left;
    margin-right: 10%;
}

.hourseitem p.threemt span i {
    float: left;
    font-style: normal;
}

.hourseitem p.threemt span .vti {
    margin-top: 2px;
    margin-left: 5px;
}

.aboutmain-homes .item {
    position: relative;
    margin-top: 5px;
    min-height: 40px
}

.aboutmain-homes .item img {
    border-radius: 6px;
    width: 100%;
}

.aboutmain-homes .item h4 {
    position: absolute;
    bottom: 0;
    left: 10px;
    right: 10px;
    padding: 20px 0;
    text-align: center;
    color: #FFF;
    font-weight: bold;
    font-size: 20px;
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.9));
    box-sizing: border-box;
    margin: 0;
    border-radius: 6px;
}

.slidesdiscover {
    width: 100%;
}

.slidesdiscover img {
    border-radius: 6px;
    width: 100%;
    object-fit: cover;
    flex: auto;
}

.slidesdiscover h4 {
    font-weight: bold;
    font-size: 18px;
    padding-top: 25px;
    color: #222;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.slidesdiscover p {
    color: #4f4f4f;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.slidesdiscover a {
    text-decoration: none
}

.slidesdiscover a:hover h4 {
    color: $primaryColor
}

footer {
    background-color: #f7f5f4;
    min-height: 320px;
}

footer p a {
    color: $primaryColor
}

footer .menufooter h4 {
    border-bottom: #e0e0e0 1px solid;
    padding-bottom: 10px;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: bold
}

footer .menufooter ul {
    margin: 0;
    padding: 0;
}

footer .menufooter ul li {
    list-style: none;
    padding: 3px 0
}

footer .menufooter ul li a {
    color: #4f4f4f
}

footer .copyright {
    border-top: #e0e0e0 1px solid;
    padding-top: 20px;
    color: #4f4f4f;
    font-size: 15px
}

.pad10 {
    padding: 10px
}

.font16 {
    font-size: 16px;
}

/**/
.wppb-user-forms p {
    padding: 5px 0;
}

.padtop10 {
    padding-top: 10px
}

.padtop20 {
    padding-top: 20px
}

.padtop30 {
    padding-top: 30px
}

.padtop40 {
    padding-top: 40px
}

.padtop50 {
    padding-top: 50px
}

.padtop60 {
    padding-top: 60px
}

.padtop70 {
    padding-top: 70px
}

.pl-md-5 {
    padding-left: 30rem !important;
}

.pr-md-5 {
    padding-right: 30rem !important;
}

.action_footer {
    position: fixed;
    bottom: 5px;
    width: auto;
    right: 80px;
    z-index: 9;
}

.action_footer a {
    float: right;
    background: $primaryColor;
    padding: 5px 10px;
    border-radius: 3px;
    margin-bottom: 10px;
    color: #333;
}

.action_footer a img {
    height: 22px;
}

.action_footer .cd-top {
    position: absolute;
    top: 1px;
    right: -40px;
    background: rgb(48, 151, 209);
    color: #FFF
}

.bgheadproject {
    padding: 30px 0;
    background: url(../images/banner-du-an.jpg);
    color: #fff;
}

.bgheadproject h1 {
    padding-top: 20px
}

.bgheadproject p {
    padding: 0;
}

.boxfilter {
    padding: 10px 0;
    margin: 0 -5px
}

.boxfilter .col-sm-auto .multiple {
    min-width: 150px;
    border: #ccc 1px solid !important
}

.boxfilter .col-sm-auto .multiple button {
    padding: 0.20rem 0.5rem;
}

.boxfilter .col-sm-auto {
    padding: 5px;
}

.boxfilter .col-sm-auto .txtkey {
    min-width: 290px
}

.boxfilter .col-sm-auto .care {
    cursor: pointer;
    padding: 5px 0
}

.titlenotfound {
    color: #900;
    text-align: center;
    margin-top: 100px
}

.form-connect {
    text-align: center;
    padding-bottom: 60px
}

.form-connect .form-control {
    height: 50px;
    margin-bottom: 35px;
}

.wppb-user-forms {
    background: none;
    margin: 0 auto;
    margin-top: 60px;
    padding: 10px 30px 30px;
}

.wppb-user-forms_wrap {
    text-align: center;
}

.wppb-user-forms h3 {
    text-align: center;
    text-transform: uppercase;
    font-size: 20px;
    margin-bottom: 30px;
}

.wppb-user-forms form {
    float: left;
    width: 100%;
}

#loginform p {
    margin: 0;
}

#loginform .remember {
    text-align: left;
    padding: 0;
    font-weight: bold
}

#loginform .input {
    width: 100%;
    padding-left: 15px;
    background: #f1f1f1;
    border: 0;
    height: 35px;
    border-radius: 3px;
}

#loginform button {
    padding: 8px;
}

.btn-face {
    background: #48629b none repeat scroll 0 0;
    border: 0
}

.boxhouse {
    margin: 0;
}

.boxhouse .control {
    padding: 4px 15px 5px 15px;
    background: #f9f9f9;
}

#map {
    height: 730px;
}

.bold500 {
    font-weight: 600
}

.lineheight220 {
    line-height: 220%
}

.list-group-sm .list-group-item {
    padding: .45rem .75rem
}

.accordion {
    border-top: #e0e0e0 1px solid;
    margin-top: 15px
}

.from {
    font-weight: normal
}

.action_grid .btn-default:hover, .action_grid .btn-default:focus, .action_grid .btn-default:active, .action_grid .btn-default.active, .action_grid .open > .dropdown-toggle.btn-default {
    background-color: #adadad;
    color: #333;
    border-color: #adadad;
    border-radius: 4px;
}

.boxsliderdetail {
    position: relative;
    height: auto;
    overflow: hidden;
}

.boxsliderdetail .slidetop {
    height: 350px;
    position: relative;
}

.boxsliderdetail .slidetop .item {
    width: 100%;
}

.boxsliderdetail .slidetop img {
    height: 350px;
    width: 100% !important;
    object-fit: cover;
    cursor: pointer;
}

.boxsliderdetail .slidebot {
    height: auto;
    position: relative;
    background: #222222;
    padding: 0 15px;
}

.boxsliderdetail .slidebot .control {
    margin-left: -5px;
    margin-right: -5px
}

// .boxsliderdetail .slidebot .control .itemct {
//     padding: 10px 5px;
// }

.boxsliderdetail .slidebot .icon {
    background-color: rgba(255, 255, 255, 0.1);
    float: left;
    height: 80px;
    color: #e0e0e0;
    text-align: center;
    cursor: pointer;
    padding: 10px 0px;
    font-size: 0.8em;
    width: 100%;
}

.boxsliderdetail .slidebot .icon i {
    font-size: 2em;
}

.boxsliderdetail .slidebot .icon p {
    margin: 0;
    padding-top: 10px
}

.boxsliderdetail .slidebot #listcarouselthumb {
    padding: 10px 0;
    height: 90px;
}

.boxsliderdetail .slidebot .item {
    margin: 0 3px;
    width: 100%;
}

.boxsliderdetail .slidebot img {
    height: 80px;
    border: #222 5px solid;
    width: 100% !important;
    object-fit: cover;
    cursor: pointer;
}

.btn-xs {
    padding: .1rem .3rem;
    font-size: .75rem;
    line-height: 1.5;
    border-radius: .15rem;
}

.modal-xs .modal-header, .modal-xs .modal-footer {
    padding: 5px;
}

.modal-xs .modal-header .modal-title {
    font-size: 1.1em
}

.modal-xs .modal-body {
    padding: 10px;
}

.modal-xs .modal-body .list-group-item {
    padding: 5px 10px
}

.icontbbot td {
    padding: 5px 2px
}

.pagination .page-item a, .pagination .page-item span {
    border: 0;
    color: #222;
    background-color: #f4f5f9;
    padding: 3px 12px !important;
    margin: 0 5px;
    border-radius: 0 !important;
}

.pagination .page-item.active span {
    background: $primaryColor;
}

.mainsearch .form-control {
    box-shadow: none;
    outline: none
}

.videoch {
    position: relative;
    object-fit: cover;
    overflow: hidden;
    width: 100%;
    height: 250px;
}

.titlenews {
    font-size: 1.8em;
    font-weight: 600
}

.titlenewnews {
    font-weight: 600
}

.showbigimg {
    cursor: pointer;
}

#popfillimg {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
}

#popfillimg img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
}

@keyframes lds-ring {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes lds-circle {
    0%, 100% {
        animation-timing-function: cubic-bezier(0.5, 0, 1, 0.5);
    }
    0% {
        transform: rotateY(0deg);
    }
    50% {
        transform: rotateY(1800deg);
        animation-timing-function: cubic-bezier(0, 0.5, 0.5, 1);
    }
    100% {
        transform: rotateY(3600deg);
    }
}

.video-responsive {
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative;
    height: 0;
}

.video-responsive iframe {
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    position: absolute;
}

.owl-nav {
    color: #FFF;
    position: absolute;
    left: 0;
    right: 0;
    top: 45%
}

.owl-nav i {
    border-radius: 50%;
    background-color: #FFF;
    top: 0;
    width: 36px;
    height: 36px;
    float: left;
    padding: 6px;
    box-sizing: border-box
}

.owl-nav .owl-prev {
    left: -15px;
    position: absolute;
    z-index: 2;
    outline: none;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.25);
    border-radius: 50%;
}

.owl-nav .owl-next {
    right: -15px;
    position: absolute;
    z-index: 2;
    outline: none;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.25);
    border-radius: 50%;
}

#listcarouselthumb .owl-nav .owl-prev {
    box-shadow: none;
    border-radius: 0
}

#listcarouselthumb .owl-nav .owl-next {
    box-shadow: none;
    border-radius: 0
}

#listcarouselthumb .owl-nav {
    top: 15px;
}

#listcarouselthumb .owl-nav i {
    box-shadow: none !important;
    width: 20px;
    height: 70px;
    outline: none !important;
    border-radius: 0;
    font-size: 1em;
    top: 10px;
    background: rgba(255, 255, 255, 0.1);
    padding: 27px 2px;
}


.bgmenupro {
    border-top: #f2f2f2 1px solid;
    border-bottom: #f2f2f2 1px solid;
    background: #FFF;
    box-shadow: 0 3px 3px #f2f2f2;
    padding: 0
}

.bgmenupro .w90 {
    padding: 0
}

.bgmenupro .navbar {
    padding: 0 1rem;
}

.bgmenupro .navbar li {
    padding: 0.5rem 0;
    margin-right: 10px;
}

.bgmenupro .navbar li a.nav-link {
    color: #222
}

.bgmenupro li.active {
    font-weight: bold;
    border-bottom: orange 2px solid
}

.boxright {
    box-shadow: 0 3px 5px #e0e0e0;
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 5px;
}

.boxright .head {
    padding: 10px 0;
    font-weight: bold;
    color: #000;
    border-bottom: #e0e0e0 1px solid;
    font-size: 18px;
    margin-bottom: 15px
}

.boxright .itemagent {
    font-size: 15px;
}

.boxright .itemagent img {
    margin-bottom: 15px;
    border: none;
}

.boxright .itemagent .col-md-4, .itemagent .col-md-8 {
    padding: 0
}

.boxright .itemagent .info a {
    color: #000;
    font-size: 16px;
    font-weight: bold
}

.boxright .itemagent .info p {
    margin: 0;
    padding: 5px 0;
}

.boxright .itemagent .info p.mobile {
    font-weight: bold;
    color: $primaryColor
}

.contactagency {
    padding: 15px;
    box-shadow: 0 3px 5px #e0e0e0;
    border-radius: 5px;
    margin-bottom: 15px;
    background: #FFF
}

.btn-orange {
    background: $primaryColor;
    color: #FFF;
    font-size: 16px;
    line-height: 25px
}

.text-orange {
    color: $primaryColor !important;
}

.topmenu.bg-light .navbar-nav a.text-orange {
    color: $primaryColor !important;
    font-weight: 600 !important
}

.text-red {
    color: #FE0000
}

.text-pink {
    color: rgb(255, 99, 132);
}

.titlehouse {
    color: #222222;
    font-size: 30px;
    font-weight: bold
}

.addresshouse {
    color: #4f4f4f;
}

.pricehouse {
    color: $primaryColor;
    font-weight: bold;
    font-size: 16px;
    border-bottom: #e0e0e0 1px solid;
    padding: 0;
    margin: 0;
    padding-bottom: 10px;
}

.headifhouse {
    margin: 0;
    padding: 0;
    border-bottom: #e0e0e0 1px solid;
    padding-bottom: 10px;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
}

.controlbh .btn-light {
    border: #ccc 1px solid !important;
    margin-right: 5px;
}

.boxbanghang {
    max-height: 680px;
    font-size: 15px
}

.fullscreen {
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 999999;
}

.fullscreen .boxbanghang {
    max-height: 880px;
}

#frmhomesearch {
    position: relative;
}

.listsuggest {
    position: absolute;
    background: rgba(255, 255, 255, 0.9);
    width: 100%;
    display: none;
    max-height: 400px;
    overflow-y: scroll;
}

.listsuggest ul {
    margin: 0;
    padding: 0;;
}

.listsuggest ul li {
    padding: 5px 10px;
    list-style: none;
    border-bottom: #ccc 1px solid;
    &:last-child {
        border-bottom: none;
    }
}

.listsuggest ul li p {
    margin: 0;
    padding: 5px;
    font-size: 0.9em
}

.listsuggest ul li p a {
    color: #000;
    font-weight: bold;
    font-size: 1.1em
}

.language {
    font-size: 0.8em;
}

.language a {
    color: #000;
    font-weight: bold
}

#ismain-homes h2 {
    font-weight: 700
}

.owl-carousel .item img {
    object-fit: cover;
}

.listnews {
    padding: 0;
    margin: 0;
}

.listnews li {
    list-style: none;
    padding: 7px 0;
    border-bottom: 1px solid #E0E0E0
}

.lastestnews .img-thumbnail {
    border: 0;
    max-height: 67px;
    width: auto;
}

.lastestnews {
    font-size: 0.85em;
    font-weight: 600
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #b4b4b4 !important;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: #b4b4b4 !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: #b4b4b4 !important;
}

.sharea {
    position: relative;
    width: 150px;
    background: rgb(248, 249, 250);
    cursor: pointer;
}

.sharea .box {
    position: absolute;
    z-index: 3;
    width: 180px;
    background: #FFF;
    transform: translate3d(0px, 29px, 0px);
    max-height: 465px;
    overflow: hidden;
    will-change: transform;
    top: 0px;
    left: 0px;
    border: #ccc 1px solid !important;
    padding: 10px;
    border-radius: 4px;
    display: none
}

.sharea:hover > .box {
    display: block
}

.caretab .active {
    font-weight: bold;
    color: orange
}

.boxmarker {
    color: #fff;
    background-color: $primaryColor;
    padding: 2px 5px;
    border-radius: 3px;
    box-shadow: 0 0 5px #333;
    text-align: center;
    font-weight: bold;
}

.infomarker h5 {
    font-size: 14px;
    margin: 0;
    padding: 0;
    height: 34px;
    overflow: hidden;
    margin-bottom: 5px;
    font-weight: bold;
}

.infomarker p {
    margin: 0;
    padding: 0;
}

.infomarker h5 a {
    color: $primaryColor
}

#boxsuggest {
    width: 300px;
    overflow: hidden;
    position: absolute;
    left: 0;
    top: 30px;
    background: #FFF;
    border: #ccc 1px solid;
    border-radius: 5px;
    z-index: 999;
    display: none;
}

#boxsuggest p {
    margin: 0;
    padding: 5px;
    list-style: decimal;
}

.listfile {
    margin: 0;
    padding: 5px;
    border: #fae0e0 1px solid;
    border-radius: 5px;
}

.itemfile {
    display: flex;
    flex-direction: columns;
    font-size: 16px;
    cursor: pointer;
}

.itemfile a {
    flex: 1;
    padding: 5px 10px;
    width: 100%;
}

.itemfile:hover {
    background: #fae0e0;
}

.itemfile .icon {
    width: 25px;
    float: left;
}

.itemfile .icon .fa-file {
    color: #03a539;
}

.itemfile .icon .fa-folder {
    color: $primaryColor;
}

@media (max-width: 576px) {
    .w90 {
        width: 100%
    }
    .bannerhome .description {
        top: 22%
    }
    .topsearch .typesearch a {
        color: #000;
    }
    .topsearch .typesearch a.active {
        border-bottom: #000 2px solid
    }
    .boxlisthouse {
        height: auto;
    }
    .boxcalbank .colcal {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .videoch {
        height: 250px !important;
    }
}

@media (min-width: 576px) {
    .w90 {
        width: 100%
    }
    .bannerhome .description {
        top: 22%
    }
    .topsearch .typesearch a {
        color: #000;
    }
    .topsearch .typesearch a.active {
        border-bottom: #000 2px solid
    }
    .boxlisthouse {
        height: auto;
    }
    .boxcalbank .colcal {
        flex: 0 0 100%;
        max-width: 100%;
    }
    .videoch {
        height: 250px !important;
    }
}

@media (min-width: 900px) {
    .w90 {
        width: 100%
    }
    .bannerhome .description {
        top: 30%
    }
    .topsearch .typesearch a {
        color: #FFF;
    }
    .topsearch .typesearch a.active {
        border-bottom: #FFF 2px solid
    }
    .boxlisthouse {
        height: 690px;
        overflow-y: scroll;
    }
    .stylebar::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.2);
        background-color: #f9f9f9;
    }
    .stylebar::-webkit-scrollbar {
        width: 3px;
        background-color: #fae0e0;
        height: 3px;
    }
    .stylebar::-webkit-scrollbar-thumb {
        background-color: #f9f9f9;
        border: 2px solid #777;
        border-radius: 2px;
    }
    .boxcalbank .colcal {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .videoch {
        height: 450px !important;
    }
}

@media (min-width: 1100px) {
    .w90 {
        width: 90%
    }
    .bannerhome .description {
        top: 40%
    }
    .topsearch .typesearch a {
        color: #FFF;
    }
    .topsearch .typesearch a.active {
        border-bottom: #FFF 2px solid
    }
    .boxlisthouse {
        height: 690px;
        overflow-y: scroll;
    }
    .col-md-20 {
        flex: 0 0 20%;
        max-width: 20%;
    }
    .stylebar::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.2);
        background-color: #f9f9f9;
    }
    .stylebar::-webkit-scrollbar {
        width: 3px;
        background-color: #fae0e0;
        height: 3px;
    }
    .stylebar::-webkit-scrollbar-thumb {
        background-color: #f9f9f9;
        border: 2px solid #777;
        border-radius: 2px;
    }
    .boxcalbank .colcal {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .abdes {
        width: 90%;
    }

    .videoch {
        height: 650px !important;
    }
}


</style>
</head>
<body class="card">
    <div class="card-body text-center">
    <h2 style="color:#deaea8;text-align:center"> Inspection Booked </h2>
    <h3 style ="text-align:center; color:black;"> Hello, One client just booked an inspection </h3>
    <div class="vertical-center" style="align-text:center; align-content:center;">
    <a href="#" class="button" style="background:#deaea8; color:white;"> Reset Password </a>
    </div>
    <p style="text-align:center"> The Client Details are as follows: <br>
        If you did not request a password reset, no further action is required.</p>       
        <p style="text-align:center;"> Regards, </p> 
        </div>
    <h5 style="color:#deaea8;text-align:center;text-transform:uppercase;">  </h5>
    
</div>
<div class="close">
						<span>&times;</span>
					</div>
					<div class="form-body">
						<h3 class="heading" style="font-weight:300;">BOOK AN INSPECTION</h3>
						<p class="paragraph">Fill the form below and one of our Executives will get in touch with you</p>
						<div class="txt-field">
							<div><input class="txt-input" type="text" name="name" placeholder="Full Name" required></div>
						</div>
						<div class="txt-field">
							<input class="txt-input" type="email" name="email" placeholder="Email" required>
						</div>
						<div class="txt-field">
							<input class="txt-input" type="number" name="phone_number" placeholder="Phone number" required>
						</div>
						<div class="txt-field">
							<label>Choose Preffered Date</label>
							<input class="txt-input" type="date" name="preffered_date" placeholder="Click to choose date" required>
						</div>
						<div class="txt-field">
							<label>Choose Preffered Time</label>
							<input class="txt-input" type="time" name="preffered_time" placeholder="Click to choose time" required>
						</div>
						<div class="txt-field">
							<select class="txt-input" id="preffered_city" name="preffered_city" required>
							<option> choose preferred estate Location</option>
							<option value="Abuja">Idu</option>
							<option value="Lagos">Apo</option>
							<option value="Enugu">Lugbe</option>
							<option value="Kano">Karasana</option>
                            <option value="Kano">Maitama</option>
                            <option value="Kano">Kubwa</option>
                            <option value="Kano">Guzape</option>
                            <option value="Kano">Life Camp</option>
                            <option value="Kano">Jahi</option>
							</select>
						</div>
					</div>
					<div class="button">
						<button type="submit" class="btn" style="background: #06112A; color:aliceblue">SUBMIT</button>
					</div>
</body>
</html>