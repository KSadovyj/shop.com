        
    </div>
    </div>
    <script type="text/javascript">
        function mainload(){
           var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function(){
               if(this.readyState==4){
                   if(this.status>=200 && xhr.status <300){
                       document.getElementById('cont').innerHTML=this.responseText;
                   }
               }
           };
           xhr.open('GET', 'nav_tabs/main.php');
           xhr.send();
       }
    </script>
     
    <script type="text/javascript">
        function deliveryload(){
           var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function(){
               if(this.readyState==4){
                   if(this.status>=200 && xhr.status <300){
                       document.getElementById('cont').innerHTML=this.responseText;
                   }
               }
           };
           xhr.open('GET', 'nav_tabs/delivery.php');
           xhr.send();
       }
    </script>
     
    <script type="text/javascript">
        function contactsload(){
           var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function(){
               if(this.readyState==4){
                   if(this.status>=200 && xhr.status <300){
                       document.getElementById('cont').innerHTML=this.responseText;
                   }
               }
           };
           xhr.open('GET', 'nav_tabs/contacts.php');
           xhr.send();
       }
    </script>
     
    <script type="text/javascript">
       function orderload(){ 
           var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function(){
               if(this.readyState==4){
                   if(this.status>=200 && xhr.status <300){
                       document.getElementById('cont').innerHTML=this.responseText;
                   }
               }
           };
           xhr.open('GET', 'nav_tabs/order.php');
           xhr.send();
       }
    </script>
    
    <script type="text/javascript">
        function commentsload(){
           var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function(){
               if(this.readyState==4){
                   if(this.status>=200 && xhr.status <300){
                       document.getElementById('cont').innerHTML=this.responseText;
                   }
               }
            };
           xhr.open('GET', 'nav_tabs/comments.php');
           xhr.send();
       }
    </script>
        </div>
         
         </div>
        <div id="footer" style="margin-left: 15px; margin-right: 15px;">
                <div class="footer-top row">
                    <div class="menu-footer col-sm-12 col-md-12"><div class="well" 
                    style="background-color: #fff3d1; text-align: center">@Интернет-магазин Zakolka 2017</div>
                    </div>
                </div>
            </div>
        </div>
        <script id="dsq-count-scr" src="//zakolka-comli-com-1.disqus.com/count.js" async></script> 
    </body>
</html>