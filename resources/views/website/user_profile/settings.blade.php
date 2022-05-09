<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>settings</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700&display=swap" 
    rel="stylesheet">
     <!--font icon-->
     <link rel="stylesheet" href="{{url('assets/web/css/all.min.css')}}"/>
     <link rel="stylesheet" href="{{url('assets/web/path/to/font-awesome/css/font-awesome.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--custom css file link-->
    <link rel="stylesheet" href="{{url('assets/web/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/web/css/user_profile.css')}}">
</head>
<body>
    <header>
        <a href="#" class="logo">WASL  <i class="fas fa-wallet"></i></a>
    <nav class="navbar ">
  
                <a class="active" href="#">لوحة التحكم</a>
              
    
                <a href="#">المساعدة</a>
              
  
      
    </nav>
    <div class="icon">
        <i class="fas fa-bars toogle" id="menu-bars"></i> 
       <i class="fas fa-bell"></i>
       <i class="fas fa-cog "></i>
     <a href="{{ route('logout') }}" >تسجيل الخروج</a>
   </div>
    </header>
   
  
    <!--Second navbar-->
    <br><br><br>
    <div class="head">
    <nav class="navbar">
        
                <a  href="/settings">حسابي</a>
                <a href="/security">الامان</a>
                <a href="/privacy">خصوصية البيانات</a>
               
               
    </nav>

</div>  

<section class="d-flex justify-content-around">
    <div class="card w-50 m-2 " >
        <div class="card-body ">
          <h5 class="card-title display-2 m-5 fw-bold">اعداد الملف الشخصي</h5>
          
      
        <form action="">
          <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label class="me-5  fs-1" for="">First name</label>
              <input type="text" class="form-control p-3" value="">
  
            </div>

          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="me-5  fs-1" for="">Last name</label>
              <input type="text" class="form-control p-3" value="">
  
            </div>

          </div>
          <h5 class="card-title display-2 m-5 fw-bold">البريد الالكتروني</h5>
          <div class="col-md-6">
            <div class="form-group">
              <label class="me-5  fs-1" for="">Email</label>
              <input type="text" class="form-control p-3" value="">
  
            </div>

          </div>
          <h5 class="card-title display-2 m-5 fw-bold">العنواين</h5>
          <div class="col-md-6">
            <div class="form-group">
              <label class="me-5  fs-1" for="">adderss 1</label>
              <input type="text" class="form-control p-3" value="">
  
            </div>

          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label  class="me-5  fs-1" for="">adderss 2</label>
              <input type="text" class="form-control p-3" value="">
  
            </div>

          </div>
          <h5 class="card-title display-2 m-5 fw-bold">ارقام الهواتف</h5>
          <div class="col-md-6">
            <div class="form-group">
              <label  class="me-5  fs-1" for="">phone number</label>
              <input type="text" class="form-control p-3" value="">
  
            </div>


          </div>
        
        </div>
        <div class="col-md-6 text-center">
          <div class="form-group">
          <button type="submit" class="btn btn-success">update profile</button>

          </div>

        </div>
        </form>
        
       
    <hr>
         
          
        </div>
      </div>
     
         
          
      
   
      

</section>
</body>
</html>