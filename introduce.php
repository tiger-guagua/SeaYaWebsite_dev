<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Sea ya Cafe</title>
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
  width:;
  margin:;
  justigy-content:center;
  align-items:;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">    
        
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost:8888/Seaya%20Cafe.php"><img src="/img/logo_工作區域 1.png" alt="/img/logo_工作區域 1.png" width="250px"></a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="http://localhost:8888/Seaya%20Cafe.php">關於Sea ya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8888/introduce.php">introduce</a>
              <li class="nav-item">
              <a class="nav-link" href="http://localhost:8888/img.php#">img</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="banner-container">
        <img class="" id="logo"src="/img/logo_工作區域 1.png" alt="seaya_logo"width="400px">
    </div>
<div class="blue">
    <div class="flex-container">
        <div class="item" >
            <img src="/img/150ppi/暖流配方.png">
            <p>
                <br>處理法：水洗
                <br>產地：哥倫比亞/坦尚尼亞/瓜地馬拉
                <br>有紅糖的些許發酵香氣，帶有楓糖甜感、
                <br>烤榛果與牛奶巧克力的風味
            </p>
            </p>
        </div>
        <div class="item" >
            <img src="/img/150ppi/衝浪配方.png">
               <p>
                <br>處理法：日曬、水洗
                <br>產地：衣索比亞/瓜地馬拉
                <br>明亮柑橘酸質、檸檬糖甜感，
                <br>呈現豐富水果調性
                </p>
            </div>
    </div>
        <div class="center">------</div>
        <div class="flex-container">
            <div class="item">
                <img src="/img/150ppi/custom.png">
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
                <img src="/img/150ppi/+40.png">
                <br>
                <img src="/img/150ppi/+20.png">
            </ul>
            </div>
        </div>
        <div class="center">------</div>
        <div class="flex-container">
            <div class="item"><p>單品豆、餐點請洽櫃檯<br>自備環保杯折扣 $5</p>
            </div>
        </div>
</div>

</body>
