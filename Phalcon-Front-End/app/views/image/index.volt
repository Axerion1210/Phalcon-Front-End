<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
        <title>Dashboard</title>
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h3>Getter from Gd</h3>
                <img src="{{filepath}}">
                <p>height: {{height}}</p>
                <p>image: {{images}}</p>
                <p>mime: {{mime}}</p>
                <p>realpath: {{realpath}}</p>
                <p>type: {{type}}</p>
                <p>width: {{width}}</p>
            </div>
            <div class="page-header">
                <h3>blur</h3>
                <img src="{{filepath}}">
                <img src="{{blur}}">
            </div>            
            <div class="page-header">
                <h3>crop</h3>
                <img src="{{filepath}}">
                <img src="{{crop}}">
            </div>            
            <div class="page-header">
                <h3>flip</h3>
                <img src="{{filepath}}">
                <img src="{{flip}}">
            </div>            
            <div class="page-header">
                <h3>pixelate</h3>
                <img src="{{filepath}}">
                <img src="{{pixel}}">
            </div>
            <div class="page-header">
                <h3>reflection</h3>
                <img src="{{filepath}}">
                <img src="{{reflection}}">
            </div>        
            <div class="page-header">
                <h3>render</h3>
                <img src="{{filepath}}">
                {% if render %}
                <p>telah di render</p>
                {% endif %}
            </div>
            <div class="page-header">
                <h3>resize height</h3>
                <img src="{{filepath}}">
                <img src="{{resize_h}}">
            </div>        
            <div class="page-header">
                <h3>resize width</h3>
                <img src="{{filepath}}">
                <img src="{{resize_w}}">
            </div>                                
            <div class="page-header">
                <h3>rotasi</h3>
                <img src="{{filepath}}">
                <img src="{{rotate}}">
            </div>                    
            <div class="page-header">
                <h3>sharpen</h3>
                <img src="{{filepath}}">
                <img src="{{sharpen}}">
            </div>        
            <div class="page-header">
                <h3>text</h3>
                <img src="{{filepath}}">
                <img src="{{text}}">
            </div>              
            <div class="page-header">
                <h3>watermark</h3>
                <img src="{{filepath}}">
                <img src="{{watermark}}">
            </div>                          
            <div class="page-header">
                <h3>factory</h3>
                <p>factory: {{factory}}</p>
            </div>            
            <div class="page-header">
                <h3>load</h3>
                <p>height: {{h_load}}</p>
                <p>width: {{w_load}}</p>
            </div>            
            {{ flashSession.output() }}
        </div>
    </body>
</html>