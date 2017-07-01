<?php

/* @var $this yii\web\View */

$this->title = 'Nike';
?>
<?php

use yii\Helpers\Url;
use yii\widgets\ActiveForm;
use yii\Helpers\Html;

?>

    <!--Slider Area-->

    <section id="slider">
        <div class="container">
            <div class="row">
               
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                               
                                <div class="col-lg-12">
                                    <img src="images/home/home2.jpg" class="girl img-responsive" alt="" />
                                   
                                </div>
                            </div>
                            <div class="item">
                            
                                <div class="col-lg-12">
                                    <img src="images/home/boxing.jpg" class="girl img-responsive" alt="" />
                                   
                                </div>
                            </div>
                            
                            <div class="item">
                               
                                <div class="col-lg-12">
                                    <img src="images/home/home4.jpg" class="girl img-responsive" alt="" />
                                    
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
           

                <div class="col-sm-12 padding-right">
                    <div class="features_items">
                        <h1 style="color: #FE980F;font-family: 'Roboto', sans-serif;font-size: 35px;
                            font-weight: 700;  margin: 0 15px; text-transform: uppercase; margin-bottom: 30px;
                      position: relative; text-align:center;">Features Items</h1>
                    
 
                                    <!--PHP-->    

                        <?php foreach ($product as $product) { ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">


                                         
                                           <a href="javascript:void(0)" >

                       <img id="img_<?= $product["id"]?>"  <?= Html::img('/yii2/advanced/backend/web/uploads/'.$product->image,['width' => '307px','height' => '250px']);?> 
                    
                                            </a>


                                            <h2 id="txtPrice_<?=$product->id?>">$<?=$product->amount?></h2>
                                            <p><a href="#" id="txtProduct_<?=$product->id?>"> <?=$product->name?></p>

                                            <a href="#" class="btn btn-default add-to-cart" onClick="addCart(<?= $product->id?>)">
                                            <i class="fa fa-shopping-cart"></i>Add to cart
                                            </a>
                                        </div>

                                        <div class="product-overlay">
                                        <div class="overlay-content">
                                           <h2 id="txtPrice_<?=$product->id?>">$<?=$product->amount?></h2>
                                            <p><?=$product->name?></p>


                                         <form action="<?=Url::to(['/site/cart'])?>" method="post"> 
                                         <input type="text" name="pid" value="<?=$product->id?>">
                                         <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart

                                         </button>   

                                         </form>



                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    
                                    <form action="<?=Url::to(['/site/cart'])?>" method="post"> 
                                         <input type="text" name="pid" value="<?=$product->id?>">
                                         <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart

                                         </button>   

                                         </form>
                                </div>
                            </div>
                        </div>

                      <!-- PHP -->
                       <?php } ?>
       
                </div>
            </div>
        </div>
    </section>
    
    
    

  
