<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <label class="btn btn-open" for="nav">OPEN NAV</label>
    <input type="checkbox" id="nav" class="nav-opener" />
    <div class="nav">
        <div class="nav-header">
        <div class="nav-title">MENU</div>
        <label class="btn btn-nav" for="nav">
            <svg style="width: 36px; height: 36px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
            </svg>
        </label>
        </div>
        <input type="radio" name="image" id="image1" class="nav-link-opener" checked="checked" />
        <input type="radio" name="image" id="image2" class="nav-link-opener" />
        <input type="radio" name="image" id="image3" class="nav-link-opener" />
        <input type="radio" name="image" id="image4" class="nav-link-opener" />
        <input type="radio" name="image" id="image5" class="nav-link-opener" />
        <input type="radio" name="image" id="image6" class="nav-link-opener" />
        <input type="radio" name="image" id="image7" class="nav-link-opener" />
        <input type="radio" name="image" id="image8" class="nav-link-opener" />
        <input type="radio" name="image" id="image9" class="nav-link-opener" />
        <input type="radio" name="image" id="image10" class="nav-link-opener" />
        <ul class="nav-links">
        <li class="nav-link"><label for="image1">Home</label></li>
        <li class="nav-link"><label for="image2">Company Information</label></li>
        <li class="nav-link"><label for="image3">Product Information</label></li>
        <li class="nav-link"><label for="image4">Service Information</label></li>
        <li class="nav-link"><label for="image5">Delivery</label></li>
        <li class="nav-link"><label for="image6">Cat Image</label></li>
        <li class="nav-link"><label for="image7">Dog Image</label></li>
        <li class="nav-link"><label for="image8">Bird Image</label></li>
        <li class="nav-link"><label for="image9">Fish Image</label></li>
        <li class="nav-link"><label for="image10">Contact Us</label></li>
        </ul>
        <div class="nav-images">
        <div class="nav-image image-1"></div>
        <div class="nav-image image-2"></div>
        <div class="nav-image image-3"></div>
        <div class="nav-image image-4"></div>
        <div class="nav-image image-5"></div>
        <div class="nav-image image-6"></div>
        <div class="nav-image image-7"></div>
        <div class="nav-image image-8"></div>
        <div class="nav-image image-9"></div>
        <div class="nav-image image-10"></div>
        <form class="nav-search-box" action="#">
            <input type="search" name="search" placeholder="Your keyword here..." />
            <button type="button">Search</button>
        </form>
        </div>
    </div>
    </div>
    <style>

        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");

        :root {
        --screen-width: 100vw;
        --screen-height: 100vh;
        
        --container-bg-1: #ff9eaa;
        --container-bg-2: #e860ff;
        --container-bg-size: 4rem;
        
        --nav-text-color: #ffffff;
        --nav-height: 50px;
        --nav-width: 320px;
        --nav-count: 10;
        }

        body {
        font-family: "Open Sans", sans-serif;
        font-size: 16px;
        }

        .container {

        width: var(--screen-width);
        height: var(--screen-height);
        display: grid;
        place-items: center;
        overflow: hidden;
        }

        .btn {
        color: var(--nav-text-color);
        font-weight: bold;
        width: 180px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        user-select: none;
        text-shadow: 0 -1px rgba(0, 0, 0, 0.5);
        cursor: pointer;
        transition: all 150ms ease-out;
        }

        .btn-open {
        background-color: #328fff;
        border-radius: 8px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5), 0 0 0 rgba(0, 0, 0, 0.3) inset;
        }

        .btn-open:active, .btn-open:focus {
        box-shadow: 0 0 0 rgba(0, 0, 0, 0.5), 0 4px 8px rgba(0, 0, 0, 0.3) inset;
        transform: translateY(7px);
        }

        .nav-opener {
        display: none;
        }

        .nav-opener:checked + .nav {
        width: var(--screen-width);
        height: var(--screen-height);
        opacity: 1;
        transition: opacity 300ms ease-out;
        }

        .nav {
        width: 0;
        height: 0;
        display: grid;
        grid-template-rows: var(--nav-height) 30% auto;
        grid-template-columns: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
        opacity: 0;
        transition: opacity 300ms ease-out, width 0ms 300ms, height 0ms 300ms;
        }

        .nav-header {
        background-color: #323232;
        display: flex;
        justify-content: space-between;
        }

        .nav-links {
        background-color: #484848;
        padding: 0;
        margin: 0;
        display: grid;
        grid-template-rows: repeat(var(--nav-count), var(--nav-height));
        grid-template-columns: 100%;
        overflow: auto;
        list-style-type: none;
        }

        .nav-link {
        color: var(--nav-text-color);
        display: flex;
        align-items: center;
        user-select: none;
        transition: all 150ms ease-out;
        }

        .nav-link label {
        width: 100%;
        height: 100%;
        padding-left: 20px;
        display: flex;
        align-items: center;
        cursor: pointer;
        }

        .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.15);
        }

        .nav-link:focus, .nav-link:active {
        background-color: rgba(0, 0, 0, 0.30);
        }

        .nav-images {
        display: flex;
        flex-flow: row wrap;
        flex-shrink: 0;
        flex-grow: 0;
        overflow: hidden;
        position: relative;
        }

        .nav-image {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-color: #000000;
        width: 100%;
        height: 100%;
        transition: all 400ms ease-out;
        }

        #image1:checked ~ .nav-images > .nav-image {
        transform: translateY(0);
        }

        #image1:checked ~ .nav-links > .nav-link:nth-child(1) {
        background-color: rgba(0, 0, 0, 0.5);
        }

        #image2:checked ~ .nav-images > .nav-image {
        transform: translateY(-100%);
        }

        #image2:checked ~ .nav-links > .nav-link:nth-child(2) {
        background-color: rgba(0, 0, 0, 0.5);
        }

        #image3:checked ~ .nav-images > .nav-image {
        transform: translateY(-200%);
        }

        #image3:checked ~ .nav-links > .nav-link:nth-child(3) {
        background-color: rgba(0, 0, 0, 0.5);
        }

        #image4:checked ~ .nav-images > .nav-image {
        transform: translateY(-300%);
        }

        #image4:checked ~ .nav-links > .nav-link:nth-child(4) {
        background-color: rgba(0, 0, 0, 0.5);
        }

        #image5:checked ~ .nav-images > .nav-image {
        transform: translateY(-400%);
        }

        #image5:checked ~ .nav-links > .nav-link:nth-child(5) {
        background-color: rgba(0, 0, 0, 0.5);
        }

        #image6:checked ~ .nav-images > .nav-image {
        transform: translateY(-500%);
        }

        #image6:checked ~ .nav-links > .nav-link:nth-child(6) {
        background-color: rgba(0, 0, 0, 0.5);
        }

        #image7:checked ~ .nav-images > .nav-image {
        transform: translateY(-600%);
        }

        #image7:checked ~ .nav-links > .nav-link:nth-child(7) {
        background-color: rgba(0, 0, 0, 0.5);
        }

        #image8:checked ~ .nav-images > .nav-image {
        transform: translateY(-700%);
        }

        #image8:checked ~ .nav-links > .nav-link:nth-child(8) {
        background-color: rgba(0, 0, 0, 0.5);
        }

        #image9:checked ~ .nav-images > .nav-image {
        transform: translateY(-800%);
        }

        #image9:checked ~ .nav-links > .nav-link:nth-child(9) {
        background-color: rgba(0, 0, 0, 0.5);
        }

        #image10:checked ~ .nav-images > .nav-image {
        transform: translateY(-900%);
        }

        #image10:checked ~ .nav-links > .nav-link:nth-child(10) {
        background-color: rgba(0, 0, 0, 0.5);
        }

        .nav-title {
        color: var(--nav-text-color);
        font-weight: bold;
        height: var(--nav-height);
        margin-left: 20px;
        display: flex;
        align-items: center;
        }

        .btn-nav {
        text-align: center;
        background-color: #ef2424;
        width: 56px;
        }

        .btn-nav:active, .btn-nav:focus {
        background-color: #ef2424;
        opacity: 0.8;
        }

        .btn-nav svg {
        display: block;
        vertical-align: top;
        }

        .btn-nav svg path {
        stroke: #ffffff;
        fill: #ffffff;
        }

        .nav-link-opener {
        display: none;
        }

        .image-1 {
        background-image:
            linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://images.unsplash.com/photo-1480074568708-e7b720bb3f09?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
        }

        .image-2 {
        background-image:
            linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://images.unsplash.com/photo-1512403754473-27835f7b9984?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
        }

        .image-3 {
        background-image:
            linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://images.unsplash.com/photo-1511556820780-d912e42b4980?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
        }

        .image-4 {
        background-image:
            linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
        }

        .image-5 {
        background-image:
            linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://images.unsplash.com/photo-1541544181051-e46607bc22a4?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
        }

        .image-6 {
        background-image:
            linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
        }

        .image-7 {
        background-image:
            linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
        }

        .image-8 {
        background-image:
            linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://images.unsplash.com/photo-1555169062-013468b47731?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
        }

        .image-9 {
        background-image:
            linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://images.unsplash.com/photo-1524704654690-b56c05c78a00?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
        }

        .image-10 {
        background-image:
            linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5)),
            url(https://images.unsplash.com/photo-1512125098323-cce1035bf4bf?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ);
        }

        .nav-search-box {
        background-color: #328fff;
        width: 70%;
        height: var(--nav-height);
        display: grid;
        grid-template-columns: auto 90px;
        grid-template-rows: 100%;
        position: absolute;
        top: 30px;
        left: 50%;
        overflow: hidden;
        box-shadow: 0 12px 20px 4px rgba(40, 40, 40, 0.5);
        border-radius: 8px;
        transform: translateX(-50%);
        }

        .nav-search-box > input[type="search"],
        .nav-search-box > button {
        font-family: inherit;
        width: 100%;
        height: var(--nav-height);
        border: 0;
        outline: 0;
        display: block;
        }

        .nav-search-box > input[type="search"] {
        background-color: #dedede;
        padding: 0 15px;
        transition: all 150ms ease-out;
        }

        .nav-search-box > input[type="search"]:focus {
        background-color: #ffffff;
        }

        .nav-search-box > button {
        color: var(--nav-text-color);
        font-weight: bold;
        background-color: rgba(0, 0, 0, 0);
        transition: all 150ms ease-out;
        }

        .nav-search-box > button:hover {
        background-color: rgba(0, 0, 0, 0.25);
        }

        .nav-search-box > button:active {
        background-color: rgba(0, 0, 0, 0.5);
        }

        @media (min-width: 768px) {
        .nav {
            grid-template-rows: var(--nav-height) auto;
            grid-template-columns: var(--nav-width) auto;
        }
        
        .nav-header {
            grid-column-start: span 2;
        }
        }

    </style>
</body>
</html>