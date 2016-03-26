<?php 
include ("registration_modal.php");
?>





          <!-- Student Login -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Student Login</div>
  <form action="include/student_redir.php" method="post">
  <table class="table">
         <tr>
        <td>eMail ID</td>
        <td><input type="text" onblur="emailadmin();" id="emailadmn" name="email" placeholder="Email ID" class="form-control"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" disabled onblur="passwadmin();" id="passadmin" name="pass" placeholder="Password" class="form-control"></td>
      </tr>
  </table>
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" disabled id="sub" name="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  function emailadmin(){
    text = document.getElementById("emailadmn").value; 
    var test1 = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(text);
    if(test1 == true){
      document.getElementById("passadmin").disabled = false;
      console.log("True");
    }
    else{
      document.getElementById("passadmin").disabled = true;
    }
  }
  function passwadmin()
  {
    text = document.getElementById("passadmin").value; 
    var test = /[0-9!]/.test(text);
    if(test == false && text != "")
    {
      document.getElementById("sub").disabled = false;
      console.log("True");
    }
    else{
      document.getElementById("sub").disabled = true;
      alert("password is not valid!");
    }
  }
</script>







          <!-- Admin Login -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Admin Login</div>
  <form action="include/admin_redir.php" method="post">
  <table class="table">
         <tr>
        <td>eMail ID</td>
        <td><input type="text" onblur="emailadmiyn();" id="emailadmyn" name="email" placeholder="Email ID" class="form-control"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" onblur="passwadmiyn();" id="passadmyn" disabled name="pass" placeholder="Password" class="form-control"></td>
      </tr>
  </table>
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" disabled id="suby" name="Submit" class="btn btn-primary">Login</button>
      </div>
    </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  function emailadmiyn(){
    text = document.getElementById("emailadmyn").value; 
    var test1 = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(text);
    if(test1 == true){
      document.getElementById("passadmyn").disabled = false;
      console.log("True");
    }
    else{
      document.getElementById("passadmyn").disabled = true;
    }
  }
  function passwadmiyn()
  {
    text = document.getElementById("passadmyn").value; 
    var test = /[0-9!]/.test(text);
    if(test == false && text != "")
    {
      document.getElementById("suby").disabled = false;
      console.log("True");
    }
    else{
      document.getElementById("suby").disabled = true;
      alert("password is not valid!");
    }
  }
</script>





















          <!-- Student Detail -->
<div class="modal fade" id="myModaldet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detail</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Student Detail</div>
  <input type="text" name="bookId" id="bookId" value=""/>
  <script>
  </script>
   <?php 
    echo "string";
       echo $variable = "<script>document.getElementById('gadget_url').value; </script>"; //I want above javascript variable 'a' value to be store here
    ?>
</div>
      </div>
    </div>
  </div>
</div>