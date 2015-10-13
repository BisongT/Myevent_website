

<div class="container" style="margin-bottom: 20px;">
        <section><a href="/templates/layouts/event_eventspage.html" target="_self"><span class="labeltab">More Events</a></section>
      </div>

        <div class="container" style="text-align: left; margin-bottom: 0px;"><div><span><h2><strong>Birthday Parties</strong></h2></span></div></div>

      <div <div class="container">
        <div class="row">
         <div class="col-sm-5">
                 <div class="card_style">
                <!-- <img src="http://www.cipdd.org/upimg/News_1438935628.jpg"/> -->
                  <div><a href="<?php the_post_thumbnail();?>"><span class="label">Lets organise your next birthday party</a>

                </div>
              </div>
              

           </div>
            
            <div class="col-sm-4">
           
              <?php the_permalink(); ?>
           </div>

         <div class="col-sm-3" style="background-color: rgb(224, 232, 240);">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                     <i class="fa fa-map-marker fa-stack-2x fa-inverse"></i>
                      </span>
                      Location: <span style="font-weight: bold;">Enter adress here.</span> <br /><br />
               
                      <span class="p4" ><i class="fa fa-calendar fa-lg"></i></span>
                         Select Date: <span style="font-weight: bold;"> Make a booking</span>
                           <p class="p4" style="font-weight: bold;">Event Vendors:</p>
                           <p class="p4" =""> Photographer: Name of Photogrpher</p>
                           <p class="p4">Lighting & Rentals: Name of Rentals</p>
                           <p class="p4">Catering: Name of Catering company</p>  <br />

                 <div><?php the_post( ); ?> <!--<img src="http://cliparts.co/cliparts/kTK/n4G/kTKn4GXMc.jpg">--></div>

        </div>

    </div>
  </div>

