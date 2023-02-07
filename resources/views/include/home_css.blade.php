
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="{{ asset('front/css/normalize.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/font-awesome-5.10.2.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/plugin/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/plugin/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/plugin/animate.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">


<style>
    div.dropdown {
        position: relative;
        width: 200px,
    }

    div.dropdown>div.caption {
        background-color: #f2f2f2;
        padding: 11px 24px;
        border-radius: 3px;
        cursor: pointer;
    }

    div.dropdown>div.list {
        position: absolute;
        background-color: #f2f2f2;
        width: 200px;
        border-radius: 0 0 3px 3px;
        display: none;
    }

    div.dropdown>div.list>div.item {
        padding: 11px 24px;
        cursor: pointer;
        font-family: "Open Sans", sans-serif;
        font-size: 18px;
        line-height: 28px;
        font-weight: 600;
    }

    div.dropdown>div.list>div.item.selected {
        font-weight: bold;
    }

    div.dropdown>div.caption:hover,
    div.dropdown>div.list>div.item:hover {
        background-color: #f2f2f2;
        color: #33276a;
    }

    div.dropdown.open>div.caption {
        border-radius: 3px 3px 0 0;
        border-bottom: solid 1px #999;
    }

    div.dropdown.open>div.list {
        display: block;
    }
</style>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

  
    ul {
        list-style: none;
    }

    input {
        overflow: hidden;
    }

    .section-title {
        position: relative;
        font-size: 30px;
        font-weight: 600;
        font-family: "Poppins", sans-serif;
        margin: 0 0 35px;
    }

    .sec-pad {
        padding: 60px 0 0;
        margin: 50px 0;
    }

    .contact-sec {
        align-item: center;
        display: flex;
        background-color: #f2f2f2;
    }

    .contact-sec .contact-ul li,
    .contact-ul b {
        font-size: 20px;
        margin: 10px 0;
        font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
        word-wrap: break-word;
    }

    .contact-sec .contact-ul i {
        font-size: 18px;
        padding: 10px;
        margin-right: 10px;
        border-radius: 50%;
    }

    .contact-detail a {
        color: #000;
        text-decoration: none;
    }

    .contact-sec .contact-ul li b:hover {
        color: #f93;
    }

    .contact-sec .contact-ul li .fa-location-dot {
        color: #f44337;
        border: 2px solid #f4433790;
    }

    .contact-sec .contact-ul li .fa-phone {
        color: #00b055;
        border: 2px solid #00b05590;
    }

    .contact-sec .contact-ul li .fa-envelope {
        color: #ff6347;
        border: 2px solid #ff634790;
    }

    .contact-detail span {
        width: 400px;
        display: flex;
        justify-content: center;
    }

    .contact-detail span a {
        font-size: 20px;
        padding: 6px 12px;
        color: #000;
        border-radius: 50%;
        margin: 0px 5px;
    }

    .contact-detail span .fb {
        color: #3b5998;
        border: 3px solid #3b5998;
    }

    .contact-detail span .fb:hover {
        color: #fff;
        background-color: #3b5998;
    }

    .contact-detail span .insta {
        color: #833ab4;
        border: 3px solid #833ab4;
    }

    .contact-detail span .insta:hover {
        color: #fff;
        background-color: #833ab4;
    }

    .contact-detail span .twitter {
        color: #00acee;
        border: 3px solid #00acee;
    }

    .contact-detail span .twitter:hover {
        color: #fff;
        background-color: #00acee;
    }

    form.contFrm {
        max-width: 396px;
        margin: auto;
    }

    .inptFld {
        width: 100%;
        height: 50px;
        border: 0;
        margin: 0 0 10px;
        border-radius: 8px;
        padding: 0 20px;
        font-size: 16px;
        color: #000;
    }

    .inptFld:focus {
        outline-offset: -4px;
        outline: 1px solid #f93;
    }

    .contFrm textarea {
        height: 75px;
        padding-top: 5px;
    }

    .inptBtn {
        height: 50px;
        border: 0;
        background: #00b055;
        font-size: 14px;
        color: #fff;
        margin: auto;
        letter-spacing: 1px;
        cursor: pointer;
        width: 100%;
        max-width: 200px;
    }

    /* Responcive css Start */

    @media (max-width: 991px) {
        .sec-pad {
            padding: 20px 0 0px;
        }

        .contact-sec .contact-ul li,
        .contact-ul b {
            font-size: 18px;
        }

        .contact-sec .contact-ul i {
            font-size: 14px;
            padding: 6px;
            margin-right: 6px;
        }

        .inptFld {
            height: 40px;
            margin: 0 0 10px;
            padding: 0 14px;
            font-size: 14px;
        }
    }

    @media (max-width: 767px) {
        .contact-detail span {
            width: auto;
        }

        .contact-detail span a {
            font-size: 18px;
            padding: 5px 10px;
            color: #000;
            border-radius: 50%;
            margin: 0px 5px 20px;
        }
    }

    @media (max-width: 575px) {
        .section-title {
            font-size: 26px;
            font-weight: 500;
        }

        .contact-sec {
            border-radius: 10% 10% 0% 0% / 5% 5% 0% 0%;
        }

        .contact-sec .contact-ul i {
            border: none;
        }

        .inptFld {
            height: 36px;
            margin: 0 0 8px;
            padding: 0 14px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {

        .contact-sec .contact-ul li,
        .contact-ul b {
            font-size: 16px;
        }
    }
</style>
