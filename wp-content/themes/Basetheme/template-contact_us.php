<?php
/**
 * Template Name: Contact_Us page
 */
?>


<?php while (have_posts()) : the_post(); ?>
  <div class="container"> <?php get_template_part('templates/page', 'header'); ?></div>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="container">
       <div class="row">

         <div class="col-sm-6">
           <form>
              <div class="form-group">
                <label for="Name">NAME</label>
                <input type="text" class="form-control" id="Name" placeholder="Name">
              </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">EMAIL ADDRESS</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                 </div>
                  <div class="form-group">
                   <label for="number"> PHONE NUMBER</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone number">
               </div>
                <div class="form-group">
                <label for="Comments">ENQUIRY</label>
                <textarea class="form-control" rows="3" placeholder="Enter enquiry here"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
             </form>

         </div>


         <div class="col-sm-4" style="margin-left: 100px;">
           <h4 class="intro">News</h4>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
         </div>
        
      </div>
      
    </div>