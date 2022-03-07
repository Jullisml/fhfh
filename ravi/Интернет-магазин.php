<?php
require( 'connect.php' );
?>

<?php
require('header.php')
?>

		<div id="topmenu">
			<ul>
				<li>
					<a href="">Мужская одежда</a>
				</li>
				
				<li>
					<a href="">Женская одежда</a>
				</li>
				<li>
					<a href="">О нас</a>
				</li>
			</ul>
			
		</div>
		<div id="content">
			<div id="left">
				<div id="menu">
					<div class="header">
						<h3>Категории</h3>
					</div>
					<form action = "categ.php">
					<select name "page">
					<option value = "1">Аксессуры</option>
					<option value = "2">Платья</option>
					<option value = "3">Блузки</option>
					<option value = "4">Верхняя одежда</option>
					<option value = "5">Брюки</option>
					</select>
					<input type = "submit" value= "Выбрать">
					</form>
					<div class="bottom"></div>
				</div>
			</div>
			<div id="right">
	<table class="products">
					<tbody><tr>
						<td>
				<div class="intro_product">
					<p class="img">
						<img src="./Интернет-магазин_files/платье1.jpg" alt="Платье"</a>
					</p>
					<p class="title">
						<a href="">Платье</a>
					</p>
					<p class="price">2000</p>
					<p>
						<a class="link_cart" href="">Добавить</a>
					</p>
				</div>
			</td>
							<td>
				<div class="intro_product">
					<p class="img">
						<img src="./Интернет-магазин_files/пуховик.jpg" alt="Пуховик">
					</p>
					<p class="title">
						<a href="">Пуховик</a>
					</p>
					<p class="price">2000</p>
					<p>
						<a class="link_cart" href="">Добавить</a>
					</p>
				</div>
			</td>
							<td>
				<div class="intro_product">
					<p class="img">
						<img src="./Интернет-магазин_files/рубашка.jpg" alt="Рубашка">
					</p>
					<p class="title">
						<a href="">Рубашка</a>
					</p>
					<p class="price">2000</p>
					<p>
						<a class="link_cart" href="">Добавить</a>
					</p>
				</div>
			</td>
							<td>
				<div class="intro_product">
					<p class="img">
						<img src="./Интернет-магазин_files/брюки.jpg" alt="Брюки">
					</p>
					<p class="title">
						<a href="">Брюки</a>
					</p>
					<p class="price">2900</p>
					<p>
						<a class="link_cart" href="">Добавить</a>
					</p>
				</div>
			</td>
							</tr>
								<tr>
						<td>
				<div class="intro_product">
					<p class="img">
						<img src="./Интернет-магазин_files/акс.jpg" alt="Колье">
					</p>
					<p class="title">
						<a href="">Колье</a>
					</p>
					<p class="price">1100</p>
					<p>
						<a class="link_cart" href="">Добавить</a>
					</p>
				</div>
			</td>
							<td>
				<div class="intro_product">
					<p class="img">
						<img src="./Интернет-магазин_files/платье2.jpg" alt="Платье">
					</p>
					<p class="title">
						<a href="">Платье</a>
					</p>
					<p class="price">4100</p>
					<p>
						<a class="link_cart" href="">Добавить</a>
					</p>
				</div>
			</td>
							<td>
				<div class="intro_product">
					<p class="img">
						<img src="./Интернет-магазин_files/куртка.jpg" alt="Куртка">
					</p>
					<p class="title">
						<a href="">Куртка</a>
					</p>
					<p class="price">7000</p>
					<p>
						<a class="link_cart" href="">Добавить</a>
					</p>
				</div>
			</td>
							<td>
				<div class="intro_product">
					<p class="img">
						<img src="./Интернет-магазин_files/акс2.jpg" alt="Очки">
					</p>
					<p class="title">
						<a href="">Очки</a>
					</p>
					<p class="price">3500</p>
					<p>
						<a class="link_cart" href="">Добавить</a>
					</p>
				</div>
			</td>
							</tr>
				</tbody></table>
				</div>
		</div>
	</div>

</body></html>