 
<!DOCTYPE html>
<html>
<body> 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
        <!-- This is feedback  -->
        <form method="POST" action="resume.php"> 
        <label>Your Name</label> 
        <label class="form-control"><?PHP echo '<b>'.$_SESSION['name'] .'</b>';?></label> 

        <label>Give your Feedback .....!</label> 
        <textarea class="form-control" type="text" name="name" placeholder="Give feedback..."></textarea>
      </div> 
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" value="submit" name="submit" class="btn btn-primary"><a href="resume.php" style="color:white;">Submit</a></button>
      </div> 
    </div>
  </div>
</div> 
</body>
</html> 