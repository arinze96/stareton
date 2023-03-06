<meta charset="UTF-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Cryptco">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="{{ asset('new3/assets/images/Stareton_Finance_Logo_2.png') }}">
<link rel="stylesheet" href="{{ asset('new2/assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('new2/assets/css/animate.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('new2/assets/css/animated-text.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('new2/assets/css/owl.carousel.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('new2/assets/css/all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('new2/assets/css/icomoon-style.css') }}" type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('new2/assets/css/style.css') }}" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
    integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    .menu {
        display: grid;
        grid-template-rows: 40px max-content;
        /* gap: 10px; */
        width: 150px;

    }

    .breadcrumb {
        background: url({{ asset('new2/assets/images/breadcrumb.jpg') }})no-repeat scroll center center;
        background-size: cover;
        text-align: center;
        padding: 60px 10px;
        font-size: 40px;
        font-weight: 600;
        color: var(--secondary-color);
        line-height: 1.5;
        margin-bottom: 30px;
    }

    .toggle {
        all: unset;
        background-color: #e5ad4b;
        color: white;
        width: 100px;
        padding: 10px;
        font-weight: 700;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 5px;
        cursor: pointer;
    }

    .toggle::after {
        content: "";
        width: 6px;
        height: 6px;
        background-color: red,
            border-width: 0 3px 3px 0;
        border-style: solid;
        transform: rotate(45deg);
        transition: 0.4s;
    }

    .list {
        background-color: white;
        color: #444;
        list-style: none;
        display: grid;
        grid-template-rows: repeat(4, 40px);
        border-radius: 5px;
        overflow: hidden;
        /* justify-content: space-between;
        align-items: center; */
        height: 0;
        transition: 0.4s;
    }

    .list-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        align-items: center;
        /* padding-left: 10px; */
        transition: 0.4s, transform 0.4s var(--delay);
        transform: translateX(-100%);
        user-select: none;
        cursor: pointer;
    }

    .list-item:hover {
        background-color: dodgerblue;
        color: black;
    }

    .toggle:focus::after {
        transform: rotate(225deg);
    }

    .toggle:focus~.list {
        height: 160px;
    }

    .toggle:focus~.list .list-item {
        transform: translateX(0);
    }
</style>

<style>
    .dropdown {
        display: inline-block;
        position: relative;
    }

    .dd-button {
        display: inline-block;
        border: 1px solid gray;
        border-radius: 4px;
        padding: 10px 30px 10px 20px;
        background-color: #ffffff;
        cursor: pointer;
        white-space: nowrap;
    }

    .dd-button:after {
        content: '';
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid black;
    }

    .dd-button:hover {
        background-color: #eeeeee;
    }


    .dd-input {
        display: none;
    }

    .dd-menu {
        position: absolute;
        top: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 0;
        margin: 2px 0 0 0;
        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.1);
        background-color: #ffffff;
        list-style-type: none;
    }

    .dd-input+.dd-menu {
        display: none;
    }

    .dd-input:checked+.dd-menu {
        display: block;
    }

    .dd-menu li {
        padding: 10px 20px;
        cursor: pointer;
        white-space: nowrap;
    }

    .dd-menu li:hover {
        background-color: #f6f6f6;
    }

    .dd-menu li a {
        display: block;
        margin: -10px -20px;
        padding: 10px 20px;
    }

    .dd-menu li.divider {
        padding: 0;
        border-bottom: 1px solid #cccccc;
    }
</style>
<style>
    /*----  Main Style  ----*/
    #cards_landscape_wrap-2 {
        text-align: center;
        background: #F7F7F7;
    }

    #cards_landscape_wrap-2 .container {
        padding-top: 80px;
        padding-bottom: 100px;
    }

    #cards_landscape_wrap-2 a {
        text-decoration: none;
        outline: none;
    }

    #cards_landscape_wrap-2 .card-flyer {
        border-radius: 5px;
    }

    #cards_landscape_wrap-2 .card-flyer .image-box {
        background: #ffffff;
        overflow: hidden;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
        border-radius: 5px;
    }

    #cards_landscape_wrap-2 .card-flyer .image-box img {
        -webkit-transition: all .9s ease;
        -moz-transition: all .9s ease;
        -o-transition: all .9s ease;
        -ms-transition: all .9s ease;
        width: 100%;
        height: 200px;
    }

    #cards_landscape_wrap-2 .card-flyer:hover .image-box img {
        opacity: 0.7;
        -webkit-transform: scale(1.15);
        -moz-transform: scale(1.15);
        -ms-transform: scale(1.15);
        -o-transform: scale(1.15);
        transform: scale(1.15);
    }

    #cards_landscape_wrap-2 .card-flyer .text-box {
        text-align: center;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box .text-container {
        padding: 30px 18px;
    }

    #cards_landscape_wrap-2 .card-flyer {
        background: #FFFFFF;
        margin-top: 50px;
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
    }

    #cards_landscape_wrap-2 .card-flyer:hover {
        background: #fff;
        box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        margin-top: 50px;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box p {
        margin-top: 10px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        font-size: 14px;
        letter-spacing: 1px;
        color: #000000;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box h6 {
        margin-top: 0px;
        margin-bottom: 4px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        font-family: 'Roboto Black', sans-serif;
        letter-spacing: 1px;
        color: #00acc1;
    }
</style>
<!--Start of Tawk.to Script-->
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '64286dd76d34ea27c6a38da9457f31014f42f8fb';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
  <!--End of Tawk.to Script-->