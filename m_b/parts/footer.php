		<section id = "delivery">
			<div class = 'container'>
				<div class = "row">
					<div class="col-md-10 offset-md-1 col-10 offset-1 text">
						<h2><img src = "images/delivery.png">ДОСТАВКА</h2>
						<p>Завантажуй додатки та замовляй доставку додому або в офіс з надзвичайно великою зоною покриття та приємними цінами від наших партнерів</p>
					</div>
				</div>
				<div class = "row">
					<div class="col-md-12 col-12 logos">
						<a href = "raketaapp.com"><img src = "images/raketa.png"></a>
						<a href = "glovoapp.com"><img src = "images/glovo.png"></a>
						<a href = "misteram.com.ua"><img src = "images/misteram.png"></a>
						
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class = "container">
				<div class = "row">
					<div class = "col-12 col-md-3 logo">
						<a href = "#"><img src = "images/big_logo.png" alt = "Между булок"></a>
					</div>
					<div class = "col-12 col-md-3 menu">
						<ul class="footer_menu">
							<li><a href="#">Головна</a></li>
							<li><a href="#">Про нас</a></li>
							<li><a href="#">Акції</a></li>
							<li><a href="#">Меню</a></li>
							<li><a href="#">Контакти</a></li>
						</ul>
					</div>
					<div class = "col-12 col-md-3 logos">
						<a href = "raketaapp.com"><img src = "images/footer_raketa.png"></a>
						<a href = "glovoapp.com"><img src = "images/footer_glovo.png"></a>
						<a href = "misteram.com.ua"><img src = "images/footer_misteram.png"></a>
					</div>
					<div class = "col-12 col-md-3 info">
						<p>вул. Грушевського, 28, Вінниця</p>
						<p>+38 (097) 094-24-04</p>
						<p>sashadidenk12@gmail.com</p>
						<div class = "social">
							<a href = "#"><img src="images/instagram.svg"></a>
							<a href = "#"><img src="images/facebook.svg"></a>
						</div>
					</div>
				</div>
			</div>
			<div class = "copyright">
				<div class = "container">
					<div class = "row">
						<div class = "col-12">
							<p> © 2020 - bulki.vn.ua</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type='text/javascript'>
			document.getElementById('btn_menu').onclick = function(){
		    
				styles = getComputedStyle(document.getElementById('header_menu'));
				console.log();
				if (styles['display'] == "none"){
					document.getElementById('header_menu').style.display = "flex"; 
				}
				else
					document.getElementById('header_menu').style.display="none";
				
				element = document.getElementById("header_menu");
			    name = "container";
			    arr = element.className.split(" ");
			    if (arr.indexOf(name) == -1) {
					element.className += " " + name;
			    }
		
			}
		</script>
	</body>
</html>