<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{URL::asset('CSS/home.css')}}">
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

</head>
<body>
    @include('navbar')

    <section>
        <div class="banner_bg_main"> 
            <div class="welcome">
                <div id="model1">
                    <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
                    <model-viewer src="../Models/model1/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model1/scene.gltf" class="model"></model-viewer>
                </div>
                <div class="p_welcome">
                    <p>Lorem ipsum dolor sit, accusamus quibusdam! Libero, non?</p>
                    <button>
                        <span>Shop now</span>
                    </button>
                </div>
                
            </div>
            
        </div>
    </section>

    <section class="sec2">
        <h2>Shoes</h2>        
        <div class="card">
            <div id="model2">
                <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
                <model-viewer src="../Models/shoes/s1/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/shoes/s1/scene.gltf" class="model"></model-viewer>
            </div>

            <div class="p-iteam">
                <p>Lorem ipsum dolor sit, accusamus quibusdam! Libero, non?</p>
                <button>
                    <span>Shop now</span>
                </button>
            </div>

        </div>
      
        <div class="card">
            <div id="model2">
                <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
                <model-viewer src="../Models/shoes/s5/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/shoes/s2/scene.gltf" class="model"></model-viewer>
            </div>

            <div class="p-iteam">
                <p>Lorem ipsum dolor sit, accusamus quibusdam! Libero, non?</p>
                <button>
                    <span>Shop now</span>
                </button>
            </div>

        </div>

        <div class="card">
            <div id="model2">
                <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
                <model-viewer src="../Models/shoes/s7/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/shoes/s3/scene.gltf" class="model"></model-viewer>
            </div>

            <div class="p-iteam">
                <p>Lorem ipsum dolor sit, accusamus quibusdam! Libero, non?</p>
                <button>
                    <span>Shop now</span>
                </button>
            </div>

        </div>

        <h2>T-Shirt</h2>
        <div class="card">
            <div id="model2">
                <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
                <model-viewer src="../Models/t-shirt/Man/tm1/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model1/scene.gltf" class="model"></model-viewer>
            </div>

            <div class="p-iteam">
                <p>Lorem ipsum dolor sit, accusamus quibusdam! Libero, non?</p>
                <button>
                    <span>Shop now</span>
                </button>
            </div>

        </div>

        <div class="card">
            <div id="model2">
                <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
                <model-viewer src="../Models/t-shirt/Woman/tw1/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model1/scene.gltf" class="model"></model-viewer>
            </div>

            <div class="p-iteam">
                <p>Lorem ipsum dolor sit, accusamus quibusdam! Libero, non?</p>
                <button>
                    <span>Shop now</span>
                </button>
            </div>

        </div>

        <div class="card">
            <div id="model2">
                <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
                <model-viewer src="../Models/t-shirt/Woman/tw2/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model1/scene.gltf" class="model"></model-viewer>
            </div>

            <div class="p-iteam">
                <p>Lorem ipsum dolor sit, accusamus quibusdam! Libero, non?</p>
                <button>
                    <span>Shop now</span>
                </button>
            </div>

        </div>

        <h2>Pants</h2>

        <div class="card">
            <div id="model2">
                <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
                <model-viewer src="../Models/pants/Man/pm1/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model1/scene.gltf" class="model"></model-viewer>
            </div>

            <div class="p-iteam">
                <p>Lorem ipsum dolor sit, accusamus quibusdam! Libero, non?</p>
                <button>
                    <span>Shop now</span>
                </button>
            </div>

        </div>

        <div class="card">
            <div id="model2">
                <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
                <model-viewer src="../Models/pants/Woman/pw2/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model1/scene.gltf" class="model"></model-viewer>
            </div>

            <div class="p-iteam">
                <p>Lorem ipsum dolor sit, accusamus quibusdam! Libero, non?</p>
                <button>
                    <span>Shop now</span>
                </button>
            </div>

        </div>

        <div class="card">
            <div id="model2">
                <!-- <img src="../Master_img/[☀] black and white art fluid wallpaper - Apps on Galaxy Store.png" alt=""> -->
                <model-viewer src="../Models/pants/Woman/pw1/scene.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="../Models/model1/scene.gltf" class="model"></model-viewer>
            </div>

            <div class="p-iteam">
                <p>Lorem ipsum dolor sit, accusamus quibusdam! Libero, non?</p>
                <button>
                    <span>Shop now</span>
                </button>
            </div>

        </div>
    </section>

    {{-- @include('footer') --}}
    {{-- @include('footer') --}}

</body>
</html>