<?php
	
	//class for fetching data of ajax request
	class fetchData{
		
		function homeContentLeft()
		{
			/*echo '<!-- 1st row starts here -->
                <div class="body_details_row_general body_details_row1">
                	<div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                    	<img src="img/1st_row_shoes_icon.png" class="body_details_row1_image img-responsive"/>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7 body_details_row_text_outline">
                    	<h3 class="body_details_row_text_heading">Lorem Ipsum is simply dummy text</h3>
                        <p class="body_details_row_text_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text.</p>
                        <button class="body_details_row_text_button pull-right">
                        	<span>know more</span>
                            <img src="img/body_row_button_arrow.png" />
                        </button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- 1st row ends here -->
                <!-- 2nd row starts here -->
                <div class="body_details_row_general body_details_row2" data-stellar-ratio="0.5">
                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7 body_details_row_text_outline">
                    	<h3 class="body_details_row_text_heading">Lorem Ipsum is simply dummy text</h3>
                        <p class="body_details_row_text_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text.</p>
                        <button class="body_details_row_text_button pull-left">
                        	<span>know more</span>
                            <img src="img/body_row_button_arrow.png" />
                        </button>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                    	<img src="img/1st_row_shoes_icon.png" class="body_details_row1_image img-responsive"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- 2nd row ends here -->
                <!-- 3rd row starts here -->
                <div class="body_details_row_general body_details_row3">
                	<div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                    	<img src="img/1st_row_shoes_icon.png" class="body_details_row1_image img-responsive"/>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7 body_details_row_text_outline">
                    	<h3 class="body_details_row_text_heading">Lorem Ipsum is simply dummy text</h3>
                        <p class="body_details_row_text_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text.</p>
                        <button class="body_details_row_text_button pull-right">
                        	<span>know more</span>
                            <img src="img/body_row_button_arrow.png" />
                        </button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- 3rd row ends here -->
                <!-- 4th row starts here -->
                <div class="body_details_row_general body_details_row4">
                    <div class="col-md-7 col-sm-7 col-xs-7 col-lg-7 body_details_row_text_outline">
                    	<h3 class="body_details_row_text_heading">Lorem Ipsum is simply dummy text</h3>
                        <p class="body_details_row_text_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s Lorem Ipsum is simply dummy text.</p>
                        <button class="body_details_row_text_button pull-left">
                        	<span>know more</span>
                            <img src="img/body_row_button_arrow.png" />
                        </button>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5 col-lg-5">
                    	<img src="img/1st_row_shoes_icon.png" class="body_details_row1_image img-responsive"/>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- 4th row ends here -->
                <!-- 5th row starts here -->
                <div class="body_details_last_row_outline">
                	<div class="col-md-3 col-sm-3 col-xs-6 col-lg-3 body_details_last_row_box_outline">
                    	<div class="body_details_last_row_box">
                        	<img src="img/last_row_image1.png" class="center-block img-responsive" />
                            <div class="body_last_row_text">
                                <div class="body_last_row_name pull-left">Lorem Ipsum</div>
                                <div class="body_last_row_rating pull-right">
                                    <li><img src="img/rated_star.png" /></li>
                                    <li><img src="img/rated_star.png" /></li>                                    
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <button class="body_last_row_price">$225</button>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3 body_details_last_row_box_outline">
                    	<div class="body_details_last_row_box body_last_row_padding_bottom">
                        	<img src="img/last_row_image2.png" class="center-block img-responsive"/>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3 body_details_last_row_box_outline">
                    	<div class="body_details_last_row_box body_last_row_padding_bottom">
                        	<img src="img/last_row_image3.png" class="center-block img-responsive" />
                         </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3 body_details_last_row_box_outline">
                    	<div class="body_details_last_row_box body_last_row_padding_bottom">
                        	<img src="img/last_row_image4.png" class="center-block img-responsive" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- 5th row ends here -->';*/
		}
		
		function plIconsLeftContent()
		{
			/*echo '<div class="pl_row_each_part">
                    <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3 body_details_last_row_box_outline">
                        <div class="body_details_last_row_sliding_box">
                        	<div class="body_last_row_text">
                                <div class="body_last_row_name pull-left">Lorem Ipsum</div>
                                <div class="body_last_row_rating pull-right">
                                    <li><img src="img/rated_star.png" /></li>
                                    <li><img src="img/rated_star.png" /></li>                                    
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <button class="body_last_row_price pull-left">$225</button>
                                <img src="img/pl_row_arrow.png" class="pull-right"/>
                                <div class="clearfix"></div>
                            </div>
                            <p class="body_details_last_row_small_desciption">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s</p>
                            <div class="body_details_bottom_part">
                            	<button class="pull-left body_details_products_description_more_button">
                                    <a href="#">More</a><i class="glyphicon glyphicon-play"></i>
                                </button>
                                <div class="pull-right body_details_addtocart_outline">
                                    <span class="pull-left body_details_addtocart_text">Add to cart</span>
                                    <img src="img/pl_details_addtocart_icon.png" class="pull-right pl_details_addtocart_image" />
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="body_details_last_row_box">
                            <img src="img/pl_row_image1.png" class="center-block img-responsive" />
                            <div class="body_last_row_text">
                                <div class="body_last_row_name pull-left">Lorem Ipsum</div>
                                <div class="body_last_row_rating pull-right">
                                    <li><img src="img/rated_star.png" /></li>
                                    <li><img src="img/rated_star.png" /></li>                                    
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <button class="body_last_row_price pull-left">$225</button>
                            <img src="img/pl_row_arrow.png" class="pull-left pl_row_image_icon"/>
                            <img src="img/pl_row_search_icon.png" class="pull-right pl_row_image_search" />
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3 body_details_last_row_box_outline">
                        <div class="body_details_last_row_sliding_box">
                        	<div class="body_last_row_text">
                                <div class="body_last_row_name pull-left">Lorem Ipsum</div>
                                <div class="body_last_row_rating pull-right">
                                    <li><img src="img/rated_star.png" /></li>
                                    <li><img src="img/rated_star.png" /></li>                                    
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <button class="body_last_row_price pull-left">$225</button>
                                <img src="img/pl_row_arrow.png" class="pull-right"/>
                                <div class="clearfix"></div>
                            </div>
                            <p class="body_details_last_row_small_desciption">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s</p>
                            <div class="body_details_bottom_part">
                            	<button class="pull-left body_details_products_description_more_button">
                                    <a href="#">More</a><i class="glyphicon glyphicon-play"></i>
                                </button>
                                <div class="pull-right body_details_addtocart_outline">
                                    <span class="pull-left body_details_addtocart_text">Add to cart</span>
                                    <img src="img/pl_details_addtocart_icon.png" class="pull-right pl_details_addtocart_image" />
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="body_details_last_row_box">
                            <img src="img/pl_row_image2.png" class="center-block img-responsive" />
                            <div class="body_last_row_text">
                                <div class="body_last_row_name pull-left">Lorem Ipsum</div>
                                <div class="body_last_row_rating pull-right">
                                    <li><img src="img/rated_star.png" /></li>
                                    <li><img src="img/rated_star.png" /></li>                                    
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <button class="body_last_row_price pull-left">$225</button>
                            <img src="img/pl_row_arrow.png" class="pull-left pl_row_image_icon"/>
                            <img src="img/pl_row_search_icon.png" class="pull-right pl_row_image_search" />
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3 body_details_last_row_box_outline">
                        <div class="body_details_last_row_sliding_box">
                        	<div class="body_last_row_text">
                                <div class="body_last_row_name pull-left">Lorem Ipsum</div>
                                <div class="body_last_row_rating pull-right">
                                    <li><img src="img/rated_star.png" /></li>
                                    <li><img src="img/rated_star.png" /></li>                                    
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <button class="body_last_row_price pull-left">$225</button>
                                <img src="img/pl_row_arrow.png" class="pull-right"/>
                                <div class="clearfix"></div>
                            </div>
                            <p class="body_details_last_row_small_desciption">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s</p>
                            <div class="body_details_bottom_part">
                            	<button class="pull-left body_details_products_description_more_button">
                                    <a href="#">More</a><i class="glyphicon glyphicon-play"></i>
                                </button>
                                <div class="pull-right body_details_addtocart_outline">
                                    <span class="pull-left body_details_addtocart_text">Add to cart</span>
                                    <img src="img/pl_details_addtocart_icon.png" class="pull-right pl_details_addtocart_image" />
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="body_details_last_row_box">
                            <img src="img/pl_row_image3.png" class="center-block img-responsive" />
                            <div class="body_last_row_text">
                                <div class="body_last_row_name pull-left">Lorem Ipsum</div>
                                <div class="body_last_row_rating pull-right">
                                    <li><img src="img/rated_star.png" /></li>
                                    <li><img src="img/rated_star.png" /></li>                                    
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <button class="body_last_row_price pull-left">$225</button>
                            <img src="img/pl_row_arrow.png" class="pull-left pl_row_image_icon"/>
                            <img src="img/pl_row_search_icon.png" class="pull-right pl_row_image_search" />
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 col-lg-3 body_details_last_row_box_outline">
                        <div class="body_details_last_row_sliding_box">
                        	<div class="body_last_row_text">
                                <div class="body_last_row_name pull-left">Lorem Ipsum</div>
                                <div class="body_last_row_rating pull-right">
                                    <li><img src="img/rated_star.png" /></li>
                                    <li><img src="img/rated_star.png" /></li>                                    
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div>
                                <button class="body_last_row_price pull-left">$225</button>
                                <img src="img/pl_row_arrow.png" class="pull-right"/>
                                <div class="clearfix"></div>
                            </div>
                            <p class="body_details_last_row_small_desciption">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s</p>
                            <div class="body_details_bottom_part">
                            	<button class="pull-left body_details_products_description_more_button">
                                    <a href="#">More</a><i class="glyphicon glyphicon-play"></i>
                                </button>
                                <div class="pull-right body_details_addtocart_outline">
                                    <span class="pull-left body_details_addtocart_text">Add to cart</span>
                                    <img src="img/pl_details_addtocart_icon.png" class="pull-right pl_details_addtocart_image" />
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="body_details_last_row_box">
                            <img src="img/pl_row_image4.png" class="center-block img-responsive" />
                            <div class="body_last_row_text">
                                <div class="body_last_row_name pull-left">Lorem Ipsum</div>
                                <div class="body_last_row_rating pull-right">
                                    <li><img src="img/rated_star.png" /></li>
                                    <li><img src="img/rated_star.png" /></li>                                    
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                    <li><img src="img/empty_rated_star.png" /></li>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <button class="body_last_row_price pull-left">$225</button>
                            <img src="img/pl_row_arrow.png" class="pull-left pl_row_image_icon"/>
                            <img src="img/pl_row_search_icon.png" class="pull-right pl_row_image_search" />
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>';*/
		}
		
		function plDetailsLeftContent()
		{
			/*echo '<div class="pl_details_row_each_part">
                	<div class="col-md-3 col-sm-6 col-xs-6 col-lg-3 body_details_last_row_box_outline">
                    	<div class="pl_details_row_image_outline"><img src="img/product_list_details_icon.png" class="center-block"/></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3 pl_details_product_name_outline">
                    	<div class="pl_details_product_name">Product Name</div>
                        <p class="pl_details_product_uploader"><span class="grey_text">By:</span> <span class="anchor_text">Sharad Joshi</span></p>
                        <img src="img/pl_row_arrow.png" class="pl_details_product_icon" />
                        <div class="pl_details_rating_icon">
                            <li><img src="img/rated_star.png" /></li>
                            <li><img src="img/rated_star.png" /></li>                                    
                            <li><img src="img/empty_rated_star.png" /></li>
                            <li><img src="img/empty_rated_star.png" /></li>
                            <li><img src="img/empty_rated_star.png" /></li>
                            <div class="clearfix"></div>
                        </div>
                        <button class="body_last_row_price">$225</button>
                        <div class="pl_details_addtocart_part">
                            <div class="pl_details_addtocart_outline">
                                <span class="pull-left pl_details_addtocart_text">Add to cart</span>
                                <img src="img/pl_details_addtocart_icon.png" class="pull-right pl_details_addtocart_image" />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 pl_details_products_description_outline">
                    	<p class="pl_details_product_founder"><span class="deep_grey_text">Found in:</span> <span class="anchor_text">Popular Product</span> <span class="deep_grey_text">/</span> <span class="anchor_text">Demand Product</span></p>
                        <p class="pl_details_products_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <button class="pl_details_products_description_more_button">
                        	<a href="#">More</a><i class="glyphicon glyphicon-play"></i>
                        </button>
                    </div>
                	<div class="clearfix"></div>
                </div>
                <div class="pl_details_row_each_part">
                	<div class="col-md-3 col-sm-6 col-xs-6 col-lg-3 body_details_last_row_box_outline">
                    	<div class="pl_details_row_image_outline"><img src="img/product_list_details_icon.png" class="center-block"/></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-lg-3 pl_details_product_name_outline">
                    	<div class="pl_details_product_name">Product Name</div>
                        <p class="pl_details_product_uploader"><span class="grey_text">By:</span> <span class="anchor_text">Sharad Joshi</span></p>
                        <img src="img/pl_row_arrow.png" class="pl_details_product_icon" />
                        <div class="pl_details_rating_icon">
                            <li><img src="img/rated_star.png" /></li>
                            <li><img src="img/rated_star.png" /></li>                                    
                            <li><img src="img/empty_rated_star.png" /></li>
                            <li><img src="img/empty_rated_star.png" /></li>
                            <li><img src="img/empty_rated_star.png" /></li>
                            <div class="clearfix"></div>
                        </div>
                        <button class="body_last_row_price">$225</button>
                        <div class="pl_details_addtocart_part">
                            <div class="pl_details_addtocart_outline">
                                <span class="pull-left pl_details_addtocart_text">Add to cart</span>
                                <img src="img/pl_details_addtocart_icon.png" class="pull-right pl_details_addtocart_image" />
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 pl_details_products_description_outline">
                    	<p class="pl_details_product_founder"><span class="deep_grey_text">Found in:</span> <span class="anchor_text">Popular Product</span> <span class="deep_grey_text">/</span> <span class="anchor_text">Demand Product</span></p>
                        <p class="pl_details_products_description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <button class="pl_details_products_description_more_button">
                        	<a href="#">More</a><i class="glyphicon glyphicon-play"></i>
                        </button>
                    </div>
                	<div class="clearfix"></div>
                </div>';*/
		}
		
	}
	
	/* receiving data from UI layer Form */
	//making object of class fetchData 
	$fetchData = new fetchData();
	//applying switch case
	switch($GLOBALS['_POST']['refData']){
		//for home page left side content
		case 'homeLeftContent':
		{
			//getting the job list
			$home_left_content = $fetchData->homeContentLeft();
			break;
		}
		
		//for project list icon page left side content
		case 'plIconsLeftContent':
		{
			//getting the job list
			$pl_icons_left_content = $fetchData->plIconsLeftContent();
			break;
		}
		
		//for project list details page left side content
		case 'plDetailsLeftContent':
		{
			//getting the job list
			$pl_details_left_content = $fetchData->plDetailsLeftContent();
			break;
		}
	}

?>
