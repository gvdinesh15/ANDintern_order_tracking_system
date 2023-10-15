<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            display: flex;
            align-items: center;
        }

        .photo {
            width: 250px;
            height: 300px;
            /* Adjust the width as needed */
            margin-right: 20px;
            /* Margin between photo and content */
            padding: 20px;
        }

        .content {
            flex: 1;
            /* Take up the remaining available space */
            border: 1px solid #ccc;
            padding: 25px;
        }

        .redirect-button {
            padding: 3px 100px;
        }
    </style>
</head>

<body>
    @csrf
    <header>
        <h1>YOUR ORDER'S</h1>
        <hr>
    </header>
    <div class="container">
        <img class="photo"
            src="https://rukminim2.flixcart.com/image/550/650/xif0q/shirt/r/9/n/xxl-patta-14-jai-textiles-original-imagn2fzpawqukgq.jpeg?q=90&crop=false"
            alt="Your Photo">
        <div class="content">
            <h3>Men Slim Fit Striped Spread Collar Casual Shirt</h3>
            <p><span style="color: rgb(90, 147, 5);">pproduct-description:</span><br>
                A product which gives comfort and stlyle. A product which gives comfort and stlyle.This stylish cotton shirt features an eye-catching pattern with elegant greenish and gray stripes, making it a versatile addition to your wardrobe. Its comfortable fabric and trendy design are perfect for any occasion, adding a touch of sophistication to your look.
            </p>
            <p><span style="color: rgb(90, 147, 5);">price :</span> 30 $</p>
            <p><span style="color: rgb(90, 147, 5);">delivery status :</span> packed</p>
           
            <button class="redirect-button" onclick="redirectToAnotherPage()">view</button>
        </div>
    </div>

    <div class="container">
        <img class="photo"
            src="https://images.asos-media.com/products/topman-skinny-chino-pants-in-stone/201212706-1-stone?$n_750w$&wid=750&hei=750&fit=crop"
            alt="Your Photo">
        <div class="content">
            <h3>Topman skinny chino pants in stone |</h3>
            <p><span style="color: rgb(90, 147, 5);">product-description:</span><br>
                Cheenos is a premium skin offering a stunning combination of vibrant colors and intricate design. Its sleek, eye-catching
                 appearance immediately draws attention and sets you apart on the battlefield.
            </p>
            <p><span style="color: rgb(90, 147, 5);">price :</span> 345 $</p>
            <p><span style="color: rgb(90, 147, 5);">delivery status :</span> out for delivery</p>
            
           
                <button class="redirect-button" onclick="redirectTootherPage()">view</button>
            
        </div>
    </div>
    <script>
        function redirectToAnotherPage() {
            window.location.href = "{{url('/trackingpage1')}}"; // Replace with your desired URL
        }
        function redirectTootherPage() {
            window.location.href = "{{url('/trackingpage2')}}"; // Replace with your desired URL
        }
    </script>
</body>

</html>