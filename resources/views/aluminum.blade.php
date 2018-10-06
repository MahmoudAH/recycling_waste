@extends('layouts.app')
@section('content')

<div id="paper">
 <!--
    <h3>How To Recycle</h3>
     <p>The average American generates 4.4 pounds of trash per day, adding to the grand total of about 258 million tons of trash the United States accumulates per year. American communities recycled and composted nearly 35% of municipal solid waste in 2014, diverting 89 million tons to recovery according to
     the U.S. EPA. Use the "Recycling Explorer" below to learn what to recycle and how.</p>
-->
    <h2></h2>
    
    <div class="video">
      <iframe style="margin-top: 40px" width="400" height="315" src="https://www.youtube.com/embed/AOpGhAdQFEY"
            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         <h3 style="color: #FF8C00;padding: 5px">ALUMINUM RECYCLING </h3>
    </div>
    
    
    
    <div id="explore4"> <a href="\"> <button>
     <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
       more.....
</button></a></div>
    <div class="paper2" style="display: inline;margin-bottom: 80px">
        <h2 style="margin-top: 50px;font-size: 30px>What is it used for?</h2>
        <p>Beverage cans, pet food cans, aerosol cans, aluminum foil, and cookware. </br> aluminum foil, and cookware</p></br>

        <h2 style="font-size: 30px">Why it wants to be recycled.</h2>
        <p>Aluminum is infinitely recyclable. Recycling prevents the need to extract raw materials, saves significant amounts of energy and keeps greenhouse gas emissions from being generated. Recycling a can takes only 5% of the energy and
        emits only 5% of the greenhouse gases as producing a can from raw material.</p></br>

        <h2 style="font-size: 30px">How to recycle it?</h2>
        <p>Curbside, school, work, or public space recycling bins, or at local recycling drop-off or buy-back centers. In some states, beverage cans are returnable to the retail outlet
        or other redemption center for a refund on the deposit paid when the beverage was purchased.</p></br>

        <h2 style="font-size: 30px">What does recycled paper become?</h2>
        <p>Recycled aluminum is refined and melted into ingots – which are very large blocks of metal.
        Aluminum’s recycling journey begins when it is collected, crushed and then cut into chips that are fed into a furnace to remove paint and coatings. The chip pieces are then melted and formed into the blocks of aluminum. The aluminum blocks are rolled into sheets which are sent to manufacturers to make new cans. One of these blocks contains enough aluminum to make 1.3 million new cans. A can’s journey from the recycling bin through the recycling process and back to store shelves takes less than 60 days. Today’s aluminum cans have an average of 68% recycled content.

</p>
  
    </div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>  
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>
@endsection
