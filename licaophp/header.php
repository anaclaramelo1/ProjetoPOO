<!DOCTYPE html>
  <html>
   <head>
    <meta charset="UTF-8">
    <title>header</title>
    <style type="text/css">
        .area-cabecalho {
            padding: 15px;
        }
        
        .area-menu {
            text-align: center;
            
        }
        
        a {
          text-decoration: none;
          padding: 8px 12px ;
         }
         a:link, a:visited {
             color: #6c0087;
         }
         a:hover {
             color: #6c0087;
            background-color: #fff;
         }   
         .mainmenubtn {
            background-color: #d734f4;
            color: #6c0087;
            border: none;
            cursor: pointer;
            padding:20px;
            margin-top:20px;
}
        .mainmenubtn:hover {
           background-color: white;
          }
        .dropdown {
          position: relative;
          display: inline-block;
         }
        .dropdown-child {
          display: none;
          background-color: #DE9BF5;
          min-width: 200px;
         }
       .dropdown-child a {
         color: #6c0087;
         padding: 20px;
         text-decoration: none;
         display: block;
        }
       .dropdown:hover .dropdown-child {
         display: block;
        }
    
    </style>    
   </head>
   
   <body>
     <div id = "area-cabecalho">   
      
     <div id = "area-logo" >
     <img src = "img/borbo.png" height = "100"> 
    
     </div>
     <div id = "area-menu" align = center>
        <a href = "index.php"> Home </a>
        <div class="dropdown">
  <button class="mainmenubtn">Sobre mim</button>
  <div class="dropdown-child">
    <a href="pag1.html">Principais informações</a>
    <a href="pag2.html">Acadêmico</a>
    <a href="pag3.html">Hobbies</a>   
    
    
  </div>
</div>
        
     </div>
     </div>

   </body>
  </html>