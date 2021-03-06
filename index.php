<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="jquery.panorama.js"></script>
    <link href="panorama_viewer.css" rel="stylesheet" type="text/css">
    <style>
        html {
            height: 100%;
        }
        
        body {
            background: #F1f1f2;
            padding: 0;
            text-align: center;
            font-family: 'open sans';
            position: relative;
            margin: 0;
            height: 100%;
        }
        
        .wrapper {
            height: auto !important;
            height: 100%;
            margin: 0 auto;
            overflow: hidden;
        }
        
        a {
            text-decoration: none;
        }
        
        .pointer {
            color: #00B0FF;
            font-family: 'Pacifico';
            font-size: 24px;
            margin-top: 15px;
            position: absolute;
            top: 130px;
            right: -40px;
        }
        
        .pointer2 {
            color: #00B0FF;
            font-family: 'Pacifico';
            font-size: 24px;
            margin-top: 15px;
            position: absolute;
            top: 130px;
            left: -40px;
        }
        
        .btn {
            width: 200px;
            -webkit-box-shadow: none;
            box-shadow: none;
            background-color: #4D90FE;
            background-image: -webkit-linear-gradient(top, #4D90FE, #4787ED);
            background-image: -moz-linear-gradient(top, #4D90FE, #4787ED);
            background-image: linear-gradient(top, #4d90fe, #4787ed);
            border: 1px solid #3079ED;
            color: #FFF;
        }
        
        .clear {
            width: auto;
        }
        
        .btn:hover,
        .btn:hover {
            background: #317af2;
        }
        
        .btns {
            float: left;
            width: 100%;
            margin: 50px auto;
        }
        
        .credit {
            text-align: center;
            color: #888;
            padding: 10px 10px;
            margin: 0 0 0 0;
            background: #f5f5f5;
            float: left;
            width: 100%;
        }
        
        .credit a {
            text-decoration: none;
            font-weight: bold;
            color: black;
        }
        
        .back {
            position: absolute;
            top: 0;
            left: 0;
            text-align: center;
            display: block;
            padding: 7px;
            width: 100%;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            background: #f5f5f5;
            font-weight: bold;
            font-size: 13px;
            color: #888;
            -webkit-transition: all 200ms ease-out;
            -moz-transition: all 200ms ease-out;
            -o-transition: all 200ms ease-out;
            transition: all 200ms ease-out;
        }
        
        .back:hover {
            background: #eee;
        }
        
        .page-container {
            float: left;
            width: 100%;
            margin: 0 auto 300px;
            position: relative;
        }
        
        .panorama {
            width: 100%;
            float: left;
            margin-top: -5px;
            height: 700px;
            position: relative;
        }
        
        .panorama .credit {
            background: rgba(0, 0, 0, 0.2);
            color: white;
            font-size: 12px;
            text-align: center;
            position: absolute;
            bottom: 0;
            right: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            float: right;
        }
    </style>
    <script>
        // Use $(window).load() on live site instead of document ready. This is for the purpose of running locally only
        $(document).ready(function() {
            $(".panorama").panorama_viewer({
                repeat: true
            });
        });
    </script>
</head>

<body>
    <div class="wrapper">

        <div class="main">
            <div class="header">

            </div>
            <div class="panorama">
                <img src="Screenshot_1.png">

            </div>
        </div>
        <h3><a href="/">Назад</a></h3>
    </div>


</body>

</html>