<?php
if(isset($_GET['category'])){ $category = $_GET['category'];                             
$stmt = $dbh->prepare("SELECT category from kork_categories where cat_id = :category");
$stmt->bindParam(':category', $category);
$stmt->execute();
$result = $stmt->fetchAll();
$row = $result[0];
$selectd_category = $row['category'];                              
 }
if(isset($_GET['schoolName'])){ $schoolName = $_GET['schoolName'];}
if(isset($_GET['schoolID'])){ $schoolID = $_GET['schoolID'];}
 
$url_page = basename($_SERVER['PHP_SELF']);
if($url_page == "deals.php"){
     $nam_key = "deals.php";
}
if ($url_page == "school-category.php" && $_GET['schoolName']){
$nam_key = "school-category.php?schoolID=$schoolID&schoolName=$schoolName";
}
else{
$nam_key = "school-category.php?schoolID=$_college&schoolName=$_collegeName";
}
?>
<nav class="category_nav main-category-search actual_cat">
        	<div class="category_inner">
            	<div class="fake-dropdown fake-dropdown-double">
                   <a href="#" class="dropdown-toggle category" data-toggle="dropdown" data-autowidth="true" rel="nofollow">                       
                   <?php if(isset($_GET['category'])) {echo $selectd_category ;} else{echo "All Categories"; }?></a>
                            <div class="dropdown-menu mega_menu" role="menu">
                                <div class="dropdown-inner">
                                    <span class="arr"></span>
                                    <span class="rightie"></span> 
                                    <ul>
                        <li><a href="<?php echo $nam_key; ?>">All Categories </a></li>
									<?php
											$sql = "SELECT * FROM kork_categories";
                                                foreach ($dbh->query($sql) as $row){
                                                $category = $row['category'];
												$cat_id = $row['cat_id'];
                                                $pageurl = basename($_SERVER['PHP_SELF']);
                                                if($pageurl == "deals.php" || $pageurl == "school-category.php"){
                                                    echo "<li><a href='". $pageurl. "?";
                                                    if(isset($_GET)){
                                                        foreach($_GET as $keyname => $keyvalue){
                                                            if($keyname !== "category")
                                                                echo "$keyname=$keyvalue&";
                                                        }
                                                    }
                                                }else{
                                                    echo "<li><a  href='$collegeURL&";
                                                }
												echo "category=$cat_id'>$category</a></li>";
                                                
                                            }
									?>
<!--
//                                    </ul>
//									<ul>
//										<li><a href="#" onMouseOver="getlist(1)">Gifts</a></li>
//										<li><a href="#"onmouseover="getlist(2)">Graphics & Design</a></li>
//										<li><a href="#"onmouseover="getlist(3)">Video & Animation</a></li>
//										<li><a href="#"onmouseover="getlist(4)">Online Marketing</a></li>
//										<li><a href="#"onmouseover="getlist(5)">Writing & Translation</a></li>
//										<li><a href="#"onmouseover="getlist(6)">Advertising</a></li>
//										<li><a href="#"onmouseover="getlist(7)">Business</a></li>
//									</ul>
//                                    <div class="side-menu">
//                                                <ul class="hidee" id="veiwlist1">
//                                                    <li><h5><a href="#">Gifts</a></h5></li>
//                                                    <li><a href="#">Greeting Cards</a></li>
//                                                    <li><a href="#">Video Greetings</a></li>
//                                                    <li><a href="#">Unusual Gifts</a></li>
//                                                    <li><a href="#">Arts & Crafts</a></li>
//
//                                                </ul>
//                                                <ul class="hidee" id="veiwlist2">
//                                                 
//                                                    <li><h5><a href="#">Graphics & Design</a></h5></li>
//                                                    <li><a href="#">Cartoons & Caricatures</a></li>
//                                                    <li><a href="#">Logo Design</a></li>
//                                                    <li><a href="#">Illustration</a></li>
//                                                    <li><a href="#">Ebook Covers & Packages</a></li>
//                                                    <li><a href="#">Web Design & UI</a></li>
//                                                    <li><a href="#">Photography & Photoshopping</a></li>
//                                                    <li><a href="#">Presentation Design</a></li>
//                                                    <li><a href="#">Flyers & Brochures </a></li>
//                                                    <li><a href="#">Business Cards</a></li>
//                                                    <li><a href="#">Banners & Headers</a></li>
//                                                    <li><a href="#">Architecture</a></li>
//                                                    <li><a href="#">Landing Pages</a></li>
//                                                    <li><a href="#">Other</a></li>
//                                             
//                                                </ul>
//                                                <ul class="hidee" id="veiwlist3">
//                                                    <li><h5><a href="#">Video & Animation</a></h5></li>
//                                                    <li><a href="#">Commercials</a></li>
//                                                    <li><a href="#">Editing & Post Production</a></li>
//                                                    <li><a href="#">Animation & 3D</a></li>
//                                                    <li><a href="#">Testimonials & Reviews by Actors</a></li>
//                                                    <li><a href="#">Puppets</a></li>
//                                                    <li><a href="#">Stop Motion</a></li>
//                                                    <li><a href="#">Intros</a></li>
//                                                    <li><a href="#">Other</a></li>
//                                                </ul>
//                                                <ul class="hidee" id="veiwlist4">
//                                                   <li><h5><a href="#">Online Marketing</a></h5></li>
//                                                    <li><a href="#">Web Analytics</a></li>
//                                                    <li><a href="#">Article & PR Submission</a></li>
//                                                    <li><a href="#">Blog Mentions</a></li>
//                                                    <li><a href="#">Domain Research</a></li>
//                                                    <li><a href="#">Fan Pages</a></li>
//                                                    <li><a href="#">Keywords Research</a></li>
//                                                    <li><a href="#">SEO</a></li>
//                                                </ul>
//                                                <ul class="hidee" id="veiwlist5">
//                                                    <li><h5><a href="#">Advertising</a></h5></li>
//                                                    <li><a href="#">Hold Your Sign</a></li>
//                                                    <li><a href="#">Flyers & Handouts</a></li>
//                                                    <li><a href="#">Human Billboards</a></li>
//                                                    <li><a href="#">Pet Models</a></li>
//                                                    <li><a href="#">Outdoor Advertising</a></li>
//                                                    <li><a href="#">Radio</a></li>
//                                                </ul>
//                                                <ul class="hidee" id="veiwlist6">
//                                                    <li><h5><a href="#">Video & Animation</a></h5></li>
//                                                    <li><a href="#">Commercials</a></li>
//                                                    <li><a href="#">Editing & Post Production</a></li>
//                                                    <li><a href="#">Animation & 3D</a></li>
//                                                </ul>
//                                    </div>
-->
                          </div>
                                
                    
                </div>
            </div>
			<?php
			$pageurl = basename($_SERVER['PHP_SELF']);
            if(isset($_GET) && ($pageurl == "deals.php" || $pageurl == "school-category.php")){
                $pageurl .= "?";
                foreach($_GET as $keyname => $keyvalue){
                    $pageurl .= "$keyname=$keyvalue&";
                }
                $pageurl = substr($pageurl, 0, -1);
            }else{
                $pageurl = "school-category.php?schoolID={$_college}&schoolName={$name_hypens}";
            }
        ?>
            <div class="wrap-search">
					<form action="<?php echo $pageurl; ?>" method="post">
						<input id="query" required maxlength="80" name="query" type="text" value="<?php echo isset($_POST['query']) ? $_POST['query'] : ""; ?>" placeholder="SEARCH">
						<input type="image" src="img/glass_small.png" alt="Go">
					</form>
                  </div>
                <div class="clear"></div>  
           </div> 
        </nav>  
    