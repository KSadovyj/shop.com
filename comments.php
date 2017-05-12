<?php require 'header.php';?>
<div class="well" id="info" style="margin-right: 15px; margin-left: 15px; margin-top: -5px;
background-color: #fff3d1;">
    <div id="cont">
        <div class="well" style="margin: 0 auto">
            <h1>Отзывы</h1>
            <hr style="background-color: #9ea1ff; height: 2px">
            <br>
            <div style="width: auto; font-size: large; margin-bottom: 15px;">
                <p>
                    Нам очень интересно знать Ваше мнение о работе нашего магазина,
                    качестве обслуживания и товаров нашего магазина. <br>
                </p>
                <p>
                    Если Вы довольны нашей работой - оставьте пожалуйста отзыв,
                    посоветуйте нас Вашим друзьям, в соц.сетях и т.д. <br>
                </p>
                <p>
                    Если Вы чем-либо не довольны - позвоните нам или напишите - мы
                    всегда решаем все вопросы в Вашу пользу. Делаем всё, чтобы
                    Вы остались довольны сотрудничеством с нами! <br>
                </p>
            </div>
            <div id="disqus_thread"></div>
                <script>
                    /**
                    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                    var d = document, s = d.createElement('script');
                    s.src = 'https://myshop-3.disqus.com/embed.js';
                    s.setAttribute('data-timestamp', +new Date());
                    (d.head || d.body).appendChild(s);
                    })();
                </script>
                    
        </div>
    </div>
</div>
<?php require 'footer.php';