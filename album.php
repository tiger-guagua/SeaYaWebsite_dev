<?php include_once "header.php"; ?>
<style>
    /* 样式表中设置网格布局 */
    .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4列 */
        grid-gap: 30px; /* 图片之间的间隔 */
    }
    .grid-item img {
        width: 100%; /* 图片宽度占据其容器的100% */
        height: auto; /* 根据宽度自动调整高度，保持图片比例 */
    }
</style>
<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="grid-container">
        <div class="grid-item"><img src="img/DSC00773.jpg" alt="img/DSC00773.jpg"></div>
        <div class="grid-item"><img src="img/DSC09060.jpg" alt="img/DSC09060.jpg"></div>
        <div class="grid-item"><img src="img/DSC03979.jpg" alt="img/DSC03979.jpg"></div>
        <div class="grid-item"><img src="img/DSC04387.jpg" alt="img/DSC04387.jpg"></div>
        <div class="grid-item"><img src="img/DSC04849.jpg" alt="img/DSC04849.jpg"></div>
        <div class="grid-item"><img src="img/DSC04883.jpg" alt="img/DSC04883.jpg"></div>
        <div class="grid-item"><img src="img/DSC04995.jpg" alt="img/DSC04995.jpg"></div>
        <div class="grid-item"><img src="img/DSC05392.jpg" alt="img/DSC05392.jpg"></div>
        <div class="grid-item"><img src="img/DSC06229.jpg" alt="img/DSC06229.jpg"></div>
        <div class="grid-item"><img src="img/DSC06253.jpg" alt="img/DSC06253.jpg"></div>
        <div class="grid-item"><img src="img/DSC07624.jpg" alt="img/DSC07624.jpg"></div>
        <div class="grid-item"><img src="img/DSC07639.jpg" alt="img/DSC07639.jpg"></div>
        <div class="grid-item"><img src="img/DSC08048.jpg" alt="img/DSC08048.jpg"></div>
        <div class="grid-item"><img src="img/DSC08137.jpg" alt="img/DSC08137.jpg"></div>
        <div class="grid-item"><img src="img/DSC08235.jpg" alt="img/DSC08235.jpg"></div>
        <div class="grid-item"><img src="img/DSC08620.jpg" alt="img/DSC08620.jpg"></div>
    </div>
</body>
