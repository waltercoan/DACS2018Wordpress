<h1>Eu não acredito...</h1>

<?php
   if(have_posts()){

       while (have_posts()){

       	   the_post();
       	   the_title();
       	   the_content();
       	   
    	   $comments = get_comments(array(
            'post_id' => $postid,
            'status' => 'approve' //Change this to the type of comments to be displayed
           ));

           wp_list_comments(array(
	            'per_page' => 10, //Allow comment pagination
	            'reverse_top_level' => false //Show the latest comments at the top of the list
	       ), $comments);
       }
   }
?>
