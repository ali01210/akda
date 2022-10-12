

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="discription"  content="">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <title>Ac academy</title>
    </head>
    <style>
 
      *{
        margin: 0;
        padding: 0;
      
      }
      body{
        font-size: 30px;
        font-family: sans-serif;
        background: white;
      }
      *{
        margin: 0;
        padding: 0;
      }
      body{
        font-size: 30px;
        font-family: sans-serif;
        background: #ebebeb;
      }
      .containe{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        flex-direction: column;
      }
      .div{
         box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.2);
        height: 300px;
        width: 400px;
        display: flex;

        justify-content: center;
        align-items: center;
        background: linear-gradient(to right, #1cbdb7, #bdebd8);
        color: white;
        margin: 100px 0;
        border-radius: 7px;
      }
      
      
      .ali{
        text-align: left;
      }
      #ali{
        width: 100%;
      }
     

     
    


      
    
     
      
    </style>
    <body>
  
      <div class="container">
        <h1>  <span class="auto-type"></span></h1>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    
      <script>
        var typed = new Typed(".auto-type",{
          strings:["hello!","Ac academy"],
          typeSpeed: 150,
          backSpeed: 150,
          loop : true
        })
        
      </script>


      
           
      <div class="col-12">
      <div class="container  m-3">
        <div class="row">
        <div class="col-lg-8">
          <div class="jumbotron bg-warning">
            <h1 class="display-4 text-danger"><u><i>Ac academy</i></u></h1>
            <p class="lead">Whatever you want, you will find it here</p>
            <hr class="my-4">



            <form method="get" action="<?php echo e(route('search')); ?>" class="form-inline my-2 my-lg-0">
			       <?php echo e(csrf_field()); ?>  
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
          </form>
          <?php if($result->count()>0): ?>
          <p class="lead">Name :<?php echo e($result->name); ?></p>
          <p class="lead">ID :<?php echo e($result->idCer); ?> </p>
          <?php else: ?>
          <p class="lead">Not found</p>
          <?php endif; ?>
          </div>
        </div>
      </div> 



           

          </div>
          </div>
        </div>
      </div>

      </div>





      <div class="container ">
        <div class="text-center m-5">
          <h1><u><strong>courses</strong></u></h1>
 
    

    
          <h3>هنا سوف تجد جميع الكورسات </h3>
        </div>

        <div class="containe">
          <!------------------------------------------------------------>
          <a href="About.html">   <div class="div">
                  soft skills  course
                    </div></a>
          <!--------------------------------------------------------------->
          <a href="About.html"> <div class="div" data-aos="fade-left" data-aos-duration="1000" data-aos-once="true">
                    icdl course
                    </div></a>  
          <!-------------------------------------------------------------->
          <a href="About.html">  <div class="div" data-aos="fade-right">
                     programming  course 
                    </div>
                  </a>
          <!-- ------------------------------------------------------------->
          <a href="About.html"> <div class="div"  data-aos="fade-up">
                    Accounting  course 
                    </div></a> 
          <!-- ------------------------------------------------------------->
          <a href="About.html"> <div class="div"  data-aos="zoom-in">
                    ic3   course
                    </div></a>
          <!-- ------------------------------------------------------------->
          <a href="About.html"><div class="div" data-aos="flip-up">
                    English   course 
                    </div></a>
          <!-- ------------------------------------------------------------->
              </div>
              <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
              <script>
                AOS.init({
                  duration: 3000,
                  once: true,
                });
              </script>
      







 <div id="ali2" class=" col-12">



</div>

      </div>
      

<div class="col-12">

<footer class="bg-light text-center text-lg-start " style="border-top:10px solid rgb(207, 207, 2) ;">

  <div class="container p-4">

    <div class="row">
    
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h2 class="text-danger"><u><i>Ac academy</i></u></h2>

        <p >Thanks for visiting
          
        </p>
      </div>
    
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h2 class="text-danger "><u><i></i>call us</u></h2>

        <p >
          01210681591        
        </p>
      </div>
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h2 class="text-danger "><u><i></i>certificate</u></h2>

        <p><a href="<?php echo e(route('sir')); ?>">Certificate Verification</a></p>
      </div>
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h2 class="text-danger "><u><i></i>call us</u></h2>

        <p>
        <a href="About.html">courses  </a>      
        </p>
      </div>
    </div>
  </div>
  

  

 
  

    <div class="text-center p-3" style="background-color: rgb(207, 207, 2);">
      © 2022 Copyright:
      <a class="text-white" href=".index.html">Ac academy.com</a>
    </div>

  </footer>
</div>



        <script src="js/popper.min.js"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>







<?php /**PATH C:\xampp\htdocs\test8\resources\views/details.blade.php ENDPATH**/ ?>