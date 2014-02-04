    <footer class="b-body-footer">
		<div class="container">
			<a href="#" class="b-scroll-up"></a>
			<!-- ****** Footer menu block ****** -->
			<div class="row b-footer-menu-container">
			
				<!-- Footer menu 1 -->
				<div class="col-md-2 col-sm-2">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-colaps1">
							  Проектирование
							</button>
						</div>
						<div class="collapse navbar-collapse" id="footer-colaps1">
						<ul class="b-footer-menu">
							<li>
								<a href="<?php echo base_url(); ?>projects" class="hidden-xs">Проектирование</a>								
							</li>
						</ul>
						</div>
					</nav>
				</div>
				
				<!-- Footer menu 2 -->
				<div class="col-md-2 col-sm-2">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-colaps2">
							  Оборудование
							</button>
						</div>
						<div class="collapse navbar-collapse" id="footer-colaps2">
						<ul class="b-footer-menu">
							<li>
								<a href="<?php echo base_url(); ?>equipment" class="hidden-xs">Оборудование</a>									
							</li>
						</ul>
						</div>
					</nav>
				</div>
				
				<!-- Footer menu 3 -->
				<div class="col-md-2 col-sm-2">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-colaps3">
							  Монтаж
							</button>
						</div>
						<div class="collapse navbar-collapse" id="footer-colaps3">
						<ul class="b-footer-menu">
							<li>
								<a href="<?php echo base_url(); ?>montage" class="hidden-xs">Монтаж</a>								
							</li>
						</ul>
						</div>
					</nav>
				</div>
				
				<!-- Footer menu 4 -->
				<div class="col-md-2 col-sm-2">
					<nav class="navbar navbar-default" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-colaps4">
							  Сервис
							</button>
						</div>
						<div class="collapse navbar-collapse" id="footer-colaps4">
						<ul class="b-footer-menu">
							<li>
								<a href="<?php echo base_url(); ?>service" class="hidden-xs">Сервис</a>								
							</li>
						</ul>
						</div>
					</nav>
				</div>
				
				<!-- Footer menu 5 -->
				<div class="col-md-2 col-sm-2">
					<nav class="navbar navbar-default" role="navigation">
						<ul class="b-footer-menu">
							<li>
								<a href="<?php echo base_url(); ?>about">О компании</a>
							</li>
						</ul>
					</nav>
				</div>
				
				<!-- Footer menu 6 -->
				<div class="col-md-2 col-sm-2">
					<nav class="navbar navbar-default" role="navigation">
						<ul class="b-footer-menu">
							<li>
								<a href="<?php echo base_url(); ?>contacts">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- ****** Footer menu block ****** -->
			<div class="row b-footer-coperate">
				<div class="col-md-9 col-sm-6">
					<div class="b-coperate"><p>© 2014 Инжиниринг-урал.рф<br>Все права защищены</p></div>
				</div>
				<div class="col-md-3 col-sm-3">
					<div class="b-city">
						г. Екатеринбург,
						<div class="b-tel-footer">+7 (343) 385-12-83</div>
					</div>
				</div>
				<!--<div class="col-md-2 col-sm-3">
					<div class="b-city">
						г. Тюмень,
						<div class="b-tel-footer">+7 (343) 385-12-83</div>
					</div>
				</div>-->
			</div>
		</div>
	</footer>
	
	<!-- Modal -->
	<div class="modal fade" id="order-call" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-body">
		  	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
			<h2>Заказать звонок</h2>
			<?php echo form_open('send_email'); ?>
				<div class="row">
					<div class="col-md-12">
						<input type="text" class="form-control b-form-item" placeholder="Имя и фамилия" name="inputName">
					</div>
					<div class="col-md-12">
						<input type="text" class="form-control b-form-item" placeholder="Название компании" name="inputCompany">
					</div>
					<div class="col-md-12">
						<input type="text" class="form-control b-form-item" placeholder="Контактный телефон" name="inputPhone">
					</div>
					<div class="col-md-12">
						<input type="text" class="form-control b-form-item" placeholder="Адрес электронной почты" name="inputEmail">
					</div>
					<div class="col-md-12">
						<textarea class="form-control b-form-item" placeholder="Текст сообщения" name="inputMessage"></textarea>
					</div>
				</div>
				<div class="b-button">
					<button type="submit" class="btn btn-default">Отправить заявку</button>
				</div>
			</form>
		  </div>
		</div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/script.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Enable responsive features in IE8 with Respond.js (https://github.com/scottjehl/Respond) -->
    <script src="js/respond.js"></script>

    <!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22364239 = new Ya.Metrika({id:22364239,
                    clickmap:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/22364239" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44121958-1', 'stellunger.ru');
  ga('send', 'pageview');

</script>
  </body>
</html>