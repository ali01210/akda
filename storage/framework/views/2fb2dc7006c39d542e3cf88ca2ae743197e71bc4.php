<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ac academy </title>
    <style>
      
        .container{
            font-family: sans-serif;
            font-size: 30px;
            text-align: center;
            padding-top: 5%;
                }
        .x2{
            width: 300px;
            font-family: sans-serif;
            font-size: xx-large;
          
        }
        .x3{
            width: 300px;
            font-family: sans-serif;
            font-size: xx-large;
          
        }
        .x4{
            width: 110px;
            font-family: sans-serif;
            font-size: xx-large;
            background-color:  rgba(141, 141, 211, 0.377);
          
        }
        #lolo{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 42px;
        }



    </style>
</head>
<body>
    <div class="com">

    <img src="ac.jpg"  width="90px" height="90px"><br>
 
   <span id="lolo" class="auto-type"></span>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    
      <script>
        var typed = new Typed(".auto-type",{
          strings:["Ac academy","Secured certificate "],
          typeSpeed: 160,
          backSpeed: 80,
          loop : true
        })
        
      </script>
    </div>
    <div class="container">
    <center>
        <h1 class="x">
            Check your certificate
        </h1>
        
        <form action="<?php echo e(route('store')); ?>" method="post">
                     <?php echo csrf_field(); ?>  
        <input class="x2" type="text" placeholder="enter your name "name="name"required><br><br>
        <input class="x3" type="number" placeholder="enter certificate Id"name="idCer"required><br> <br>
        <input class="x4" type="submit" >
        </form>


    </center>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\test8\resources\views/sir.blade.php ENDPATH**/ ?>