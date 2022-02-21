<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add Facebook Like and Share Buttons in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       .container {
           max-width: 600px;
       }
    </style>
</head>
<body>
    <div class="container mt-4">
        @foreach($posts as $posts )
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{$posts->title}}</h5>
                    <p class="card-text">{{$posts->description}}</p>
                    
                    <div class="likeShareBtnmt-3">
                        <a href="http://twitter.com/share?text={{$posts->title}}">Twitter</a>
                        <div id="fb-root"></div>
                        <a href="https://www.facebook.com/sharer/sharer.php?">Facebook</a>                         <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0" nonce="ccaa4s"></script>
                        <div 
                            class="fb-like" 
                            data-layout="standard" 
                            data-action="like" 
                            data-size="large" 
                            data-show-faces="true" 
                            data-href="https://developers.facebook.com/docs/plugins/" 
                            data-share="true">
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>