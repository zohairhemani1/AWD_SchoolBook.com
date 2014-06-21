<?php

session_start();
	
	if($_GET['status'] == 'logout')
	{	
		session_start();
		session_destroy();
	}

	include 'headers/_user-details.php';
	
	echo"   <div class='logo'><a href='#'><img src='img/logo.png' width='153' alt=''></a></div>";
	
	if(isset($_SESSION['username'])) 
	{
		
		$query = "SELECT * from inbox i, users u WHERE i.senderID = u.ID && i.receiverID = :receiverID LIMIT 5";
		$sth = $dbh->prepare($query);
		$sth->bindValue(':receiverID',$_userID);
		$sth->execute();
		
		
		
	
    	echo "
		
		   <div id='sidr'>

          <ul>

            <li class='home'><a href='index.php'>HOME</a></li>

             <li class='to_do'><a href='create_gig.php'>START SELLING</a></li>

                         
      
              <li class='admin'><a href='#'> <span class='user_pic_thumb' style='padding:0px'><img src='{$_profilePic}' width='24' alt='user pic'></span> {$_fname_uppercase}</a></li>
            <li><a href='#' class='whats_new'><span class='info_circle fa fa-info-circle' style='display:inline'>&nbsp;</span>What's New in V2?</a></li>
                            <li><a href='inbox.php' class='inbox'><span class='fa fa-inbox' style='display:inline'>&nbsp;</span>Inbox</a></li>
                            <li><a href='#' class='collection'><span class='fa-heart-o'  style='display:inline'>&nbsp;</span>Collections</a></li>
                            <li><a href='#' class='settings'><span class='fa fa-gear'  style='display:inline'>&nbsp;</span>Settings</a></li>
                            <li><a href='index.php?status=logout' class='logout'><span class='fa fa-arrow-circle-o-left'  style='display:inline'>&nbsp;</span>Logout</a></li>
                            <div class='clear'></div>
 </ul>
			  </li>
          </ul>

		</div>
		
		<nav class='main_nav'>
                <ul class='inbox_menu'>
                    <li class='home'><a href='index.php'>HOME</a></li>
                    <li class='to_do'><a href='create_gig.php'>START SELLING</a></li>
                    <li class='bubble'><a href='#' class='topopup'><img src='img/bubble.png' width='24' alt=''></a>
                 <div id='toPopup'>     	
             		<div id='popup_content'>
					
                      <ul class='antiscroll-inner'>";
                    
						while($result = $sth->fetch(PDO::FETCH_ASSOC))
 {
	 	echo "<li>
                        	<a href=inbox_des.php?id=$result[ID]&mode=0>
                            	<em class='envelope envelope'></em>
                                    	You got a new message from $result[fname]
                            </a>
                        </li>";
  
 }
	echo"                      <div class='clear'></div>
                     </ul>
                     <a href='#' class='load_more'>LOAD MORE</a>
                   </div> <!--your content end-->
    </div> <!--toPopup end-->
                    </li>
                    <li id='admin'><a href='#'>
                    				<span class='user_pic_thumb'><img src='{$_profilePic}' width='24' alt='user pic'></span>
                    				{$_fname_uppercase} {$_lname_uppercase}</a>
                    	<ul>
                        	<li><a href='#' class='whats_new'><span class='info_circle fa fa-info-circle'>&nbsp;</span>What's New in V2?</a></li>
                            <li><a href='inbox.php' class='inbox'><span class='fa fa-inbox'>&nbsp;</span>Inbox</a></li>
                            <li><a href='#' class='collection'><span class='fa-heart-o'>&nbsp;</span>Collections</a></li>
                            <li><a href='#' class='settings'><span class='fa fa-gear'>&nbsp;</span>Settings</a></li>
                            <li><a href='index.php?status=logout' class='logout'><span class='fa fa-arrow-circle-o-left'>&nbsp;</span>Logout</a></li>
                            <div class='clear'></div>
                        </ul>
                    </li>
                </ul>
            </nav>";
	}
	
	else
	{
		echo "
		 
    <div id='sidr'>

          <ul>

            <li class='home'><a href='#'>HOME</a></li>

             <li class='to_do'><a href='#'>START SELLING</a></li>

             <li class='shopping'><a href='#' data-toggle='modal' data-target='#login'>SIGN IN</a></li>

              <li id='sales'><a href='#' data-toggle='modal' data-target='#register'>JOIN</a></li>


          </ul>

		</div>
		<nav class='main_nav'>
                <ul>
                    <li class='home'><a href='index.php'>HOME</a></li>
                    <li class='to_do'><a href=''>START SELLING</a></li>
                    <!-- <li class='bubble'><a href='#'><img src='img/bubble.png' width='24' alt=''></a></li> -->
                    <li class='shopping'><a href='#'  data-toggle='modal' data-target='#login'>SIGN IN</a></li>
                    <li id='sales'><a href='#' data-toggle='modal' data-target='#register'>JOIN</a></li>
                    <!-- <li class='admin'><a href='#'>ZOHAIR HEMANI</a></li> -->
                </ul>
			</nav>";
	}
	
?>

