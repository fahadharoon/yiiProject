<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Cart';
$this->params['breadcrumbs'][] = $this->title;
?>





<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="<?=Url::to(['/site/cart']) ?>">Cart</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

					<?php foreach ($carts as $cart) { ?>
						
					
						<tr>
							<td class="cart_product">
								<?= Html::img('/yii2/advanced/backend/web/uploads/'.$cart->image,['width' => '307px','height' => '250px']);?>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$cart->name?></a></h4>
							</td>
							<td class="cart_price">
								<p>$<?=$cart->amount?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + <?=$cart->quantity?> </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - <?=$cart->quantity?> </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?=$cart->amount?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> 