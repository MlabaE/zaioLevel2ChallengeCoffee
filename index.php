<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <p id="demo"></p>
        
         <script type="text/javascript">
            function firstDuplicate(array){
               var arrlength = array.length; 
               var array2 = [];
               for(x=0; x<=arrlength; x++)
               {
                  for(i=x+1; i<=arrlength; i++)
                  {
                      if(array[x] === array[i])
                      {
                          array2.push(array.indexOf(i)); 
                      }
                  }
                }
                
                var num = array2.max(); 
               return num;
            
    }
    
    
    var array = [2,1,3,5,3,2];
    document.getElementById("demo").innerHTML = firstDuplicate(array);
                 
        </script>
    </body>
</html>
