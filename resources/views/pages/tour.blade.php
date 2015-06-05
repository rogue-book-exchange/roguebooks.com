@extends('app')

@section('title')
  Tour
@stop

@section('content')

   <head>
    <link rel="stylesheet" media="screen" type="text/css" href="/css/spacegallery.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="/css/custom.css" />
    <script type="text/javascript" src="/js/eye.js"></script>
    <script type="text/javascript" src="/js/utils.js"></script>
    <script type="text/javascript" src="/js/spacegallery.js"></script>
    <script type="text/javascript" src="/js/layout.js"></script>
    
<script type="text/javascript">
<script type="text/javascript">
$('.hascaption').each(function() {
$(this).after( $(this).attr('title') ); 
});
</script>
</head>

<body>
    <div class="wrapper">
        <h1>Gallery of our store</h1>
        <ul class="navigationTabs" style="list-style-type: none;">
            <li><a href="#about" rel="about"></a></li>
        </ul>
        
                
				
				<div id="myGallery" class="spacegallery">
					<img src="images/exchange12.jpg" alt="" />
          <img src="images/exchange11.jpg" alt="" />
          <img src="images/exchange10.jpg" alt="" />
          <img src="images/exchange9.jpg" alt="" />
          <img src="images/exchange8.jpg" alt="" />
          <img src="images/exchange7.jpg" alt="" />
          <img src="images/exchange6.jpg" alt="" />
          <img src="images/exchange5.jpg" alt="" />
          <img src="images/exchange4.jpg" alt="" />
          <img src="images/exchange3.jpg" alt="" />
          <img src="images/exchange2.jpg" alt="" />
          <img src="images/exchange1.jpg" alt="" />
				</div>
      </div>
     



@stop