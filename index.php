<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Weight Converter</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- all css here -->
        <!-- style css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- modernizr js -->
        <script src="js/practice.js"></script>
        <style>
                body{
                        margin-top:70px;
                        background: #333;
                        color: #fff;
                }
                h4{
                        color: #0a0c0e;
                }

        </style>
</head>
<body>
<div class="container">
        <div class="row">
                <div class="col-md-6 offset-md-3">
                        <h1 class="display-4 text-center mb-3">Weight Converter</h1>
                        <form id="lbsInput">
                                <div class="form-group">
                                        <input type="number" min="0" class="form-control form-control-lg" placeholder="Enter your weight (pounds)">
                                </div>
                        </form>
                        <div id="output">
                                <div class="card card-primary mb-2">
                                        <div class="card-block">
                                                <h4 align="center">Grams</h4>
                                                <div id="g" style="color: #0A246A" align="center"> </div>
                                        </div>
                                </div>

                                <div class="card card-success mb-2">
                                        <div class="card-block">
                                                <h4 align="center">Kilograms:</h4>
                                                <div id="k" style="color: #0A246A" align="center"> </div>
                                        </div>
                                </div>

                                <div class="card card-danger mb-2">
                                        <div class="card-block">
                                                <h4 align="center">Ounces</h4>
                                                <div id="o" style="color: #0A246A" align="center"> </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>

<script>
        document.getElementById('output').style.visibility = 'hidden';
        document.getElementById('lbsInput').addEventListener('input', function (e) {
            document.getElementById('output').style.visibility = 'visible';
            let lbs =e.target.value;
            document.getElementById('g').innerHTML = Math.round(lbs/0.0022046);
            document.getElementById('k').innerHTML = Math.round(lbs/2.2046);
            document.getElementById('o').innerHTML = lbs*16;
        })
</script>


</body>



<footer>

</footer>