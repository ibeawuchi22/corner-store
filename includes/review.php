<?php
            $sql2 = "SELECT * FROM reviews WHERE bagid = $bid ORDER BY bagid DESC";
            $con = mysqli_query($connect, $sql2);
            if(mysqli_num_rows($con) > 0){
              while($rev_row = mysqli_fetch_assoc($con)){
                $revid = $rev_row['id'];
                $rname = $rev_row['name'];
                $summary = $rev_row['summary'];
                $review = $rev_row['review'];
                $reimg = $rev_row['img'];
                $revdate = $rev_row['createddate'];

               
            
               
          
          ?>
          <div style="display: block; padding: 30px; border: 1px solid rgb(211, 208, 208);">
          <img src="../../includes/dp/<?=$reimg?>" alt="Suitcase" style="border: 1px solid gold;   margin-top: -15px; border-radius: 100px; width: 40px; height: 40px;"><p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><?=$rname?></p>
            <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 20;"><?=$summary?></p>
            <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"><?=$review?></p>
            <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Review by <strong><?=$rname?></strong></p>
            <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Posted on <?=$revdate?></p>
          </div>
          <?php } }else{ ?>


  <p style = "color:blue;">no review uploaded yet. Be the first to review this product.</p>


<?php } ?>