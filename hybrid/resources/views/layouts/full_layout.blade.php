<!DOCTYPE html>
<html>
  <head>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <title>Hybrid</title>
    <link rel="icon" href="\images\hybrid.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type=text/css>
    Body{
        background-image: url('/images/hybrid-background-image.jpeg');

    }
/********header css******/
    .header{
      height: 90px;
      background: black;
    }
    .header ul {
      display:inline-flex;
      list-style: none;
    }
    .logo{
      text-decoration: none;
      font-size:40px;
      color:white;
      padding-top: 10px;
      padding-left: 60px;
      padding-right:30px;
      font-family: arial;
    }
    .options{

      font-size: 20px;
      padding: 23px;
      color:white;
    }
    /**************dropdown-menu**********/
   .dropdown-menu{
     background: black;
     text-decoration: none;
     text-align: center;
     display: none;
   }
   .dropdown-menu a{
     color:white;
   }
   .dropdown:hover .dropdown-menu{
     display:block;
     background: black;
     height: 70px;
   }
   .online-classes:hover{
     color:green;
   }
   .recordered-classes:hover{
     color:green;
   }
   /*****************end of dropdown-menu**************/
    .img-container {
        text-align: center;
      }
    .login-button{
        background:white;
        color:black;
        border-radius:4px;
        font-size: 20px;
        float:right;
        margin-top:20px;
        margin-right:23px;
      }
      .registration{
        float: right;
      }
      .register-button{
        background:white;
        color:black;
        border-radius:4px;
        font-size: 20px;
        margin-top:20px;
        margin-right:115px;
        float:right;
      }

      .register-button:hover{
        background: green;
        color:white;
        border: 1px solid black;
      }
      /******registration drop down***/
      .registration .registration-dropdown-menu{
        margin-top:23px;
        background: white;
        text-decoration: none;
        text-align: center;
        display: none;
        font-size: inherit;
        margin-bottom: 90px;
        border-radius: 4px;
        width:150px;
        position: relative;
      }
      .registration-dropdown-menu a{
        color:white;
      }
      .registration:hover .registration-dropdown-menu{
        display:block;
        background: black;
        height: 70px;
      }
     .student:hover {
        color:green;
      }
     .teacher:hover {
        color:green;
      }
      /**************************/
      .login-button:hover{
        background: green;
        color:white;
        border: 1px solid black;
      }
      a{
        text-decoration: none;
      }
      a:hover {
     text-decoration:none;
     }
     /***********header end******/
     /*********footer Css**********/
     .footer {

          text-align: center;
          height: 200px;
          width: 100%;
          bottom: 0px;
          background-color:black;
          color: white;
          text-align: center;
          padding: 50px;
       }
      /***********footer end******/
        /*******loginform css******/
   .login-form{
     background:black;
     width:30%;
     margin: auto;
     color:white;
     height:400px;
     text-align: center;
     border-radius: 20px;
   }

   .login-logo{
     padding:30px;
   }
   .input-fields{
     margin: 20px 20px 5px 20px;
     border-radius: 5px;
     height:40px;
     width:60%;
   }
   .input-fields:hover{
     border-color: green;
   }
   .login-form-login-button{
     margin: 30px;
     border-radius: 4px;
     height:40px;
     width:70px;
   }
   .login-form-login-button:hover{
     background: green;
     border-color: green;
   }
   /************loginform end**************/
   /*************registration form*********/
       .registration-form{
         background:black;
         width:30%;
         margin: auto;
         color:white;
         height:600px;
         text-align: center;
         border-radius: 20px;
       }
       .registration-logo{
         padding:30px;
       }
       .input-field{
         margin: 20px 20px 5px 20px;
         border-radius: 5px;
         height:40px;
         width:60%;
       }
       .input-field:hover{
         border-color: green;
       }
       .registration-button{
         margin: 30px;
         border-radius: 4px;
         height:40px;
         width:90px;
       }
       .registration-button:hover{
         background: green;
         border-color: green;
       }
       /********end of registration-form******/
  /****error messages****/
  /***end of error messages***/
  </style>
  </head>
  <body>

     @include('layouts.header')


     @yield('content')


     @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div></body>
  </html>
