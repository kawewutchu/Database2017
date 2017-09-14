<?php include('header.html'); ?>

    <p class="createEvent" > CREATE EVENT </p>

    <div class="contentBox">
      <form>
         <div class="form-group">
          <label for="inputdefault">Game name</label>
          <input class="form-control" id="inputdefault" type="text">
         </div>

         <div class="form-group">
          <label for="inputdefault">Required participants</label>
          <input class="form-control" id="inputdefault" type="text">
         </div>

    <!--      <div class="form-group">
          <label for="inputdefault">Date</label>
          <input class="form-control" id="inputdefault" type="text">
         </div> -->
         <div class="calendar">    
            <p st>Date</p>
            <div class="input-group date">
                <input type="text" class="form-control" id="datepicker" placeholder="MM/DD/YYYY">
            </div>
          </div>

         <div class="form-group">
          <label for="inputdefault">Time</label>
          <input class="form-control" id="inputdefault" type="text">
         </div>

         <div class="form-group">
          <label for="inputdefault">Required participants</label>
          <input class="form-control" id="inputdefault" type="text">
         </div>

         <div class="form-group">
          <label for="inputdefault">Location</label>
          <input class="form-control" id="inputdefault" type="text">
         </div>

         <div class="form-group">
          <label for="inputdefault">Require ranking</label>
          <input class="form-control" id="inputdefault" type="text">
         </div>

         <div class="form-group">
          <label for="inputdefault">Description</label>
          <input class="form-control" id="inputdefault" type="text">
         </div>

          <input href = "#" type="submit" class="btn btn-info btn-md" value="Submit " style="margin: 0 auto">

      </form>  
   
    </div>

   </body>

   <!-- Date time picker -->
   <script src="scripts.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
   <script type="text/javascript"></script>
</html>  

