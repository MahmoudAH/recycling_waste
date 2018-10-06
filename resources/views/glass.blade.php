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
      <iframe style="margin-top: 40px" width="400" height="315" src="https://www.youtube.com/embed/IERzI9KxihU"
             frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><h3 style="color: #FF8C00">GLASS RECYCLING </h3>
    </div>
    
    <div id="explore8"> <a href="\"> <button>
     <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
       more.....
</button></a></div>
    <div class="paper2" style="display: inline;margin-bottom: 80px">
        <h2 style="margin-top: 50px;font-size: 30px">What is it used for?</h2>
        <p>Food and beverage containers</p></br>
        <h2 style="font-size: 30px">Why it wants to be recycled.</h2>
        <p>Glass can be recycled over and over without any loss in purity or quality. For every ton of glass that is recycled,
        over a ton of natural resources are saved, including 1,300 pounds of sand, 410 pounds of soda ash,
        380 pounds of limestone and 160 pounds of feldspar. Using recycled glass cuts energy costs
        about 2 to 3% for every 10% of recycled glass used  and reduces greenhouse gas emissions. For every six tons of recycled glass used, a ton of carbon dioxide is reduced.
        Recycle a jar or bottle and help save the planet!</p>
          <h2 style="font-size: 30px">How to recycle it?</h2>
        <p>Curbside, school or work recycling bin or local recycling drop-off center. In some states, beverage container recycling refund programs are in place, and consumers can return their container to a retail outlet or other redemption center for a refund on the deposit paid when the beverage container was purchased. It is important not to include dishware, light bulbs, heat resistant glass (Pyrex), mirror or window glass and crystal or any computer screen glass in your recycling bin.
        These types of glass and ceramics damage the furnace and cause impurities in new containers.</p></br>
        <h2 style="font-size: 30px">What does recycled glass become?</h2>
        <p>For the glass containers collected through deposit refund programs, approximately 65% to 80% is purchased by glass
        container manufacturing companies for production in making new containers. Recycled glass that cannot be sorted for
        container-end use may be used in kitchen tiles, counter tops and wall insulation. In order to be recycled, glass is
        collected mixed and then sorted by color-clear, green, and amber-at a materials recovery facility. Most glass then
        goes to a processor for further cleaning, sorting and crushing into cullet.
        This cullet is mixed with sand, soda ash and limestone and then heated and molded into the desired shape for reuse.</p>
  
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>  
  <script src="js/bootstrap.min.js"></script> 
</body>
</html>
@endsection

