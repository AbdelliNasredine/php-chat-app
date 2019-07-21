<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/styles.css">
    <title>Chat app - AJAX</title>
</head>

<body>
    <div class="container">
        <div>
            <h1 class="heading">Chat App</h1>
            <p class="sub-heading"> Welcome to this simple chat application </p>
        </div>
        <div id="chat" class="chat-container">
            <p class="chat-text">
                <span class="sender">Abdelli</span>
                Hi how are you ?
            </p>
            <p class="chat-text">
                <span class="sender">Abdelli</span>
                Hi how are you ?
            </p>
        </div>
        <div class="chat-form">
            <form id="form" action="#" autocomplete="off">
                <input type="text" id="sender" name="name" placeholder="your name">
                <input type="text" id="message" name="message" placeholder="your message">
                <button type="submit" title="send your message">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAAq1BMVEVHcEz///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////8te9EbAAAAOHRSTlMAv/2Gaur2M/5mTrceDwXYNA3oT1cQonfGBPXVgYUxMGe21A5uwAwbXgOpa54Th028CaOyoWP3abXhT34AAAC0SURBVCjPtZLXEoIwEEWXamiKShNR7L3X/f8vMwmMQyBvjvuQ3bknD3smAfhLZZk8H6vElwLFNBVZ3seRhnYzHwwNr9vrtBtgj28AHfV6XlzezgyvBk54Zs1GTcxdutBxx1dzBXBTfXgiHXI1Et0eAHcGIBIsLy8XrikH63QpuLGDA6hYMjeAQwkqljo6lmUZFKw2dHC+lg6WNU+KPi1B2GIVE0xIzMdQlJwQspC/VBD89AE+U84Qet3l4EsAAAAASUVORK5CYII=">
                </button>
            </form>
        </div>
    </div>
    <script src="./public/script.js"></script>
</body>
</html>