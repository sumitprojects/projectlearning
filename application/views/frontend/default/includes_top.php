<link rel="favicon" href="<?php echo base_url().'assets/frontend/default/img/icons/favicon.ico' ?>">
<link rel="apple-touch-icon" href="<?php echo base_url().'assets/frontend/default/img/icons/icon.png'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/frontend/default/css/jquery.webui-popover.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/frontend/default/css/select2.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/frontend/default/css/slick.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/frontend/default/css/slick-theme.css'; ?>">
<!-- font awesome 5 -->
<link rel="stylesheet" href="<?php echo base_url().'assets/frontend/default/css/fontawesome-all.min.css'; ?>">

<link rel="stylesheet" href="<?php echo base_url().'assets/frontend/default/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/frontend/default/css/bootstrap-tagsinput.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/frontend/default/css/main.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/frontend/default/css/responsive.css'; ?>">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url().'assets/global/toastr/toastr.css' ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.css" />
<script src="<?php echo base_url().'assets/frontend/default/js/vendor/jquery-3.2.1.min.js'; ?>"></script>

<style>
h1,h2,h3,h4,h5,h6 {
    font-family:  'Zilla Slab', serif;
    color:#181D20;
    /* font-size: 20px; */
}


.main-nav-wrap>ul>li>a,
.menu-icon-box .icon a,
.sign-in-box>.btn {
    font-size: 18px !important;
}


.main-nav-wrap>ul>li {
    padding:0px !important;
}


.home-banner {
    position: relative;
    background-color: black;
    /* height: 75vh; */
    min-height: 25rem;
    width: 100%;
    overflow: hidden;
    color: white;
}

.home-payments-icon img {
    border: 1px solid;
    padding: 5px 10px;
    border-radius: 4px;
    margin-bottom: 10px;
    margin-right: 10px;
    width: 100px;
    height: 50px;
}

.element-item {
    position: relative;
    float: left;
    width: 300px;
    height:400px;
}

.home-banner .container {
    position: absolute;
    z-index: 2;
    top: 20%;
}
.mobile-main-nav span{
    color:#181D20;
    font-family: 'Inter', sans-serif;
    text-transform: uppercase;
    font-weight:700;
    font-size:16px;
}

.nav-link{
    padding: 0.5rem 0rem;
}

.dropdown-user-logout {
    padding: 10px 0;
    background: #181D20 !important;
}

.dropdown-user-logout a,
.dropdown-user-logout a:hover {
    background: #181D20 !important;
    color: white !important;
}

#st-2.st-right {
    z-index: 0;
}
@keyframes placeHolderShimmer{
    0%{
        background-position: -468px 0
    }
    100%{
        background-position: 468px 0
    }
}

.animated-background {
    animation-duration: 1s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
    animation-name: placeHolderShimmer;
    animation-timing-function: linear;
    background: #f6f7f8;
    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
    height: 96px;
    position: relative;
}

</style>