<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<link rel="stylesheet" type="text/css" href="./assets/Semantic-UI-CSS-master/semantic.min.css">
<link rel="stylesheet" type="text/css" href="./assets/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
</script>
<script src="assets/Semantic-UI-CSS-master/semantic.min.js"></script>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    html,
    body {
        display: grid;
        height: 100%;
        place-items: center;
    }

    label {
        position: relative;
        height: 125px;
        width: 125px;
        display: inline-block;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        border-left-color: #5cb85c;
        animation: rotate 1.2s linear infinite;
    }

    @keyframes rotate {
        50% {
            border-left-color: #9b59b6;
        }

        75% {
            border-left-color: #e67e22;
        }

        100% {
            transform: rotate(360deg);
        }
    }

    label .check-icon {
        display: none;
    }

    label .check-icon:after {
        position: absolute;
        content: "";
        top: 50%;
        left: 28px;
        transform: scaleX(-1) rotate(135deg);
        height: 56px;
        width: 28px;
        border-top: 4px solid #5cb85c;
        border-right: 4px solid #5cb85c;
        transform-origin: left top;
        animation: check-icon 0.8s ease;
    }

    @keyframes check-icon {
        0% {
            height: 0;
            width: 0;
            opacity: 1;
        }

        20% {
            height: 0;
            width: 28px;
            opacity: 1;
        }

        40% {
            height: 56px;
            width: 28px;
            opacity: 1;
        }

        100% {
            height: 56px;
            width: 28px;
            opacity: 1;
        }
    }

    input {
        display: none;
    }

    input:checked~label .check-icon {
        display: block;
    }

    input:checked~label {
        animation: none;
        border-color: #5cb85c;
        transition: border 0.5s ease-out;
    }

    body {
        background: #1e1e1e;
    }

    .socket {
        width: 200px;
        height: 200px;
        position: absolute;
        left: 50%;
        margin-left: -100px;
        top: 50%;
        margin-top: -100px;
    }

    .hex-brick {
        background: #ABF8FF;
        width: 30px;
        height: 17px;
        position: absolute;
        top: 5px;
        animation-name: fade;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        -webkit-animation-name: fade;
        -webkit-animation-duration: 2s;
        -webkit-animation-iteration-count: infinite;
    }

    .h2 {
        transform: rotate(60deg);
        -webkit-transform: rotate(60deg);
    }

    .h3 {
        transform: rotate(-60deg);
        -webkit-transform: rotate(-60deg);
    }

    .gel {
        height: 30px;
        width: 30px;
        transition: all .3s;
        -webkit-transition: all .3s;
        position: absolute;
        top: 50%;
        left: 50%;
    }

    .center-gel {
        margin-left: -15px;
        margin-top: -15px;

        animation-name: pulse;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        -webkit-animation-name: pulse;
        -webkit-animation-duration: 2s;
        -webkit-animation-iteration-count: infinite;
    }

    .c1 {
        margin-left: -47px;
        margin-top: -15px;
    }

    .c2 {
        margin-left: -31px;
        margin-top: -43px;
    }

    .c3 {
        margin-left: 1px;
        margin-top: -43px;
    }

    .c4 {
        margin-left: 17px;
        margin-top: -15px;
    }

    .c5 {
        margin-left: -31px;
        margin-top: 13px;
    }

    .c6 {
        margin-left: 1px;
        margin-top: 13px;
    }

    .c7 {
        margin-left: -63px;
        margin-top: -43px;
    }

    .c8 {
        margin-left: 33px;
        margin-top: -43px;
    }

    .c9 {
        margin-left: -15px;
        margin-top: 41px;
    }

    .c10 {
        margin-left: -63px;
        margin-top: 13px;
    }

    .c11 {
        margin-left: 33px;
        margin-top: 13px;
    }

    .c12 {
        margin-left: -15px;
        margin-top: -71px;
    }

    .c13 {
        margin-left: -47px;
        margin-top: -71px;
    }

    .c14 {
        margin-left: 17px;
        margin-top: -71px;
    }

    .c15 {
        margin-left: -47px;
        margin-top: 41px;
    }

    .c16 {
        margin-left: 17px;
        margin-top: 41px;
    }

    .c17 {
        margin-left: -79px;
        margin-top: -15px;
    }

    .c18 {
        margin-left: 49px;
        margin-top: -15px;
    }

    .c19 {
        margin-left: -63px;
        margin-top: -99px;
    }

    .c20 {
        margin-left: 33px;
        margin-top: -99px;
    }

    .c21 {
        margin-left: 1px;
        margin-top: -99px;
    }

    .c22 {
        margin-left: -31px;
        margin-top: -99px;
    }

    .c23 {
        margin-left: -63px;
        margin-top: 69px;
    }

    .c24 {
        margin-left: 33px;
        margin-top: 69px;
    }

    .c25 {
        margin-left: 1px;
        margin-top: 69px;
    }

    .c26 {
        margin-left: -31px;
        margin-top: 69px;
    }

    .c27 {
        margin-left: -79px;
        margin-top: -15px;
    }

    .c28 {
        margin-left: -95px;
        margin-top: -43px;
    }

    .c29 {
        margin-left: -95px;
        margin-top: 13px;
    }

    .c30 {
        margin-left: 49px;
        margin-top: 41px;
    }

    .c31 {
        margin-left: -79px;
        margin-top: -71px;
    }

    .c32 {
        margin-left: -111px;
        margin-top: -15px;
    }

    .c33 {
        margin-left: 65px;
        margin-top: -43px;
    }

    .c34 {
        margin-left: 65px;
        margin-top: 13px;
    }

    .c35 {
        margin-left: -79px;
        margin-top: 41px;
    }

    .c36 {
        margin-left: 49px;
        margin-top: -71px;
    }

    .c37 {
        margin-left: 81px;
        margin-top: -15px;
    }

    .r1 {
        animation-name: pulse;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-delay: .2s;
        -webkit-animation-name: pulse;
        -webkit-animation-duration: 2s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-delay: .2s;
    }

    .r2 {
        animation-name: pulse;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-delay: .4s;
        -webkit-animation-name: pulse;
        -webkit-animation-duration: 2s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-delay: .4s;
    }

    .r3 {
        animation-name: pulse;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-delay: .6s;
        -webkit-animation-name: pulse;
        -webkit-animation-duration: 2s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-delay: .6s;
    }

    .r1>.hex-brick {
        animation-name: fade;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-delay: .2s;
        -webkit-animation-name: fade;
        -webkit-animation-duration: 2s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-delay: .2s;
    }

    .r2>.hex-brick {
        animation-name: fade;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-delay: .4s;
        -webkit-animation-name: fade;
        -webkit-animation-duration: 2s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-delay: .4s;
    }

    .r3>.hex-brick {
        animation-name: fade;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-delay: .6s;
        -webkit-animation-name: fade;
        -webkit-animation-duration: 2s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-delay: .6s;
    }


    @keyframes pulse {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        50% {
            -webkit-transform: scale(0.01);
            transform: scale(0.01);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @keyframes fade {
        0% {
            background: #ABF8FF;
        }

        50% {
            background: #90BBBF;
        }

        100% {
            background: #ABF8FF;
        }
    }

    @-webkit-keyframes pulse {
        0% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        50% {
            -webkit-transform: scale(0.01);
            transform: scale(0.01);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
    }

    @-webkit-keyframes fade {
        0% {
            background: #ABF8FF;
        }

        50% {
            background: #389CA6;
        }

        100% {
            background: #ABF8FF;
        }
    }
</style>

<body>
    <div class="socket">
        <div class="gel center-gel">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c1 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c2 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c3 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c4 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c5 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c6 r1">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>

        <div class="gel c7 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>

        <div class="gel c8 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c9 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c10 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c11 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c12 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c13 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c14 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c15 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c16 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c17 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c18 r2">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c19 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c20 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c21 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c22 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c23 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c24 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c25 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c26 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c28 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c29 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c30 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c31 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c32 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c33 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c34 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c35 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c36 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>
        <div class="gel c37 r3">
            <div class="hex-brick h1"></div>
            <div class="hex-brick h2"></div>
            <div class="hex-brick h3"></div>
        </div>

    </div>
</body>
<script>
    let timer = setTimeout(() => {
        $("body").html("");
        $("body").append(`<input type="checkbox" id="check" checked = 'checked' disabled>
    <label for="check">
      <div class="check-icon">`);
        // $.ajax({
        //     type: "POST",
        //     url: "pay.php",
        //     dataType: "JSON",
        //     success: function(response) {
        //         if (response == "fix") {

        //         }
        //     }
        // });
        setTimeout(() => {
            document.location.href = "./shop.php";
        }, 750);
    }, 2500);
</script>

</html>