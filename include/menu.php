		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->

                    <li class="current"><a href="index.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i>Home</a></li>
                    <?php if ($page_name!="INDEX"){ ?>
                    <li class="current"><a href="category.php?category=<?php echo $category_code; ?>"><i class="fa fa-sitemap fa-2x" aria-hidden="true"></i> <?php echo $category_name; ?></a></li>
                        <?php if ($page_name!="CATEGORY"){ ?>
                        <li class="current"><a href="prodect.php?prodect=<?php echo $prodect; ?>"><i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>  <?php echo $prodect; ?></a></li>
                            <?php if ($page_name!="PRODECT"){ ?>
                            <li class="current"><a href="prodect.php?prodect=<?php echo $prodect; ?>"><i class="fa fa-picture-o fa-2x" aria-hidden="true"></i> <?php echo $prodect; ?></a></li>
                        
                    <?php }}}  ?>
                   
                </ul>
             </div>
		  </div>
		  