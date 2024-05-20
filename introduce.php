<?php include_once "header.php"; ?>
<style>
    body{
        color: white;
    }
    /* 样式表中设置网格布局 */
    .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4列 */
        grid-gap: 10px; /* 图片之间的间隔 */
    }

    .grid-item img {
        width: 100%; /* 图片宽度占据其容器的100% */
        height: auto; /* 根据宽度自动调整高度，保持图片比例 */

    }

    .flex-container {
        display: flex;
        justify-content: space-around;
        padding:10px;
        flex-direction:row;
        flex-wrap: wrap;
        align-items: stretch;
    }
    .item {
        color:white;
        font-size:2rem;
        padding:10px;
    }

    .banner-container{
        background-color:#f7f1dc ;
        text-align: center;
    }

    .blue{
        background-color:#394766;
    }

    .center{
        text-align: center;
    }
</style>
<body>
    <div class="banner-container">
        <img src="img/navbar_logo.png" alt="海見咖啡" width="400px">
    </div>
    <div class="blue">
        <div class="flex-container">
            <div class="item">
                <img src="img/150ppi/暖流配方.png">
                <p>
                    <br>處理法：水洗
                    <br>產地：哥倫比亞/坦尚尼亞/瓜地馬拉
                    <br>有紅糖的些許發酵香氣，帶有楓糖甜感、
                    <br>烤榛果與牛奶巧克力的風味
                </p>
                </p>
            </div>
            <div class="item" >
                <img src="img/150ppi/衝浪配方.png">
                <p>
                    <br>處理法：日曬、水洗
                    <br>產地：衣索比亞/瓜地馬拉
                    <br>明亮柑橘酸質、檸檬糖甜感，
                    <br>呈現豐富水果調性
                </p>
            </div>
        </div>
        <div class="center">------</div>
        <!-- <div class="flex-container">
            <div class="item">
                <img src="img/150ppi/custom.png">
                <h1>想要更多特製？</h1>
            </div>

            <div class="item">
                <ul>
                    <li><h1>加一份濃縮</h1></li>
                <br>
                    <li><h1>換燕麥奶</h1></li>
                </ul>
            </div>
            <div class="item">
                <ul>
                    <img src="img/150ppi/+40.png">
                    <br>
                    <img src="img/150ppi/+20.png">
                </ul>
            </div>
        </div> -->
        <div class="row">
            <div class="col text-center">
                <img src="img/150ppi/custom.png">
                <h1>想要更多特製？</h1>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col">
                                <li class="h1">加一份濃縮</li>
                            </div>
                            <div class="col">
                                <img src="img/150ppi/+40.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col">
                            <li class="h1">換燕麥奶</li>
                            </div>
                            <div class="col">
                                <img src="img/150ppi/+20.png">
                            </div>
                        </div>
                        <!-- <span class="h1">換燕麥奶</span>
                        <img src="img/150ppi/+20.png"> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="center">------</div>
        <div class="flex-container">
            <div class="item"><p>單品豆、餐點請洽櫃檯<br>自備環保杯折扣 $5</p>
            </div>
        </div>
    </div>
</body>
