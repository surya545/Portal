          <!-- Student Register -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div  class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Register</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">New User</div>
  <form action="" method="POST" data-toggle="validator" role="form">
<div class="row">
  <div class="col-lg-5">
  <table class="table" >
         <tr>
            <div class="form-group">
    <label for="inputName" class="control-label">First Name</label>
    <input onblur="fnames();" type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
     </div>
      </tr>
         <tr>
            <div class="form-group">
    <label for="inputName" class="control-label">Last Name</label>
          <input disabled onblur="lnames();" type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
     </div>
      </tr>
         <tr>
        <td>Department</td>
        <td>
          <select disabled onblur="branchs();" id="branch" name="branch" class="form-control">
            <option value="BT" selected>Biotechnology</option>
            <option value="CE">Civil</option>
            <option value="CH">Chemical</option>
            <option value="EE">Electrical</option>
            <option value="IT">Information Technology</option>
            <option value="ME">Mechanical</option>
            <option value="MME">Metallurgy</option>
          </select> 
        </td>
      </tr>
         <tr>
        <td>Year of Joining</td>
        <td>

          <select disabled onblur="yearofjoins();" id="yearofjoin" name="year" class="form-control">
            <option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Roll Number</td>
        <td>
          <select onblur="rolls()" onload="rolls2()" id="roll" disabled name="roll" class="form-control">  
        </td>
      </tr>
    
       <tr>
        <td>Date of Birth</td>
        <td>
          <input onblur="dobs();" disabled id="dob" type="date" name="dob" placeholder="dd/mm/yyyy" class="form-control">  
        </td>
      </tr>
      <tr>

      </table>
  </div> 
  <div class="col-lg-7">
  <table class="table">
            <div class="form-group">
    <label for="inputName" class="control-label">Day Scholar</label>
          <input disabled id ="ds1" type="radio" name="dayscholar" value="Yes"/> Yes
          <input disabled id ="ds2" type="radio" name="dayscholar" value="No" checked/> No
     </div>
      </tr>
      <tr>
            <div class="form-group">
    <label for="inputName" class="control-label">Gender</label>
          <input disabled id ="g1" type="radio" name="gender" value="male" checked/> Male
          <input disabled id ="g2" type="radio" name="gender" value="female"/> Female  
     </div>      
   </tr>
      <tr>
            <div class="form-group">
    <label for="inputName" class="control-label"style="">Hobbies</label>
        <div id="hob">
          <button class="btn btn-info btn-xs" disabled id="addhobby" onclick="addhobbys()" type="button" style="padding:5px;" >+</button><br><br>
        </div>
     </div> 
      </tr>
      <tr>
            <div class="form-group">
    <label for="inputName" class="control-label">Photo</label>
        <input disabled onblur="photos();" id="photo" type="file" id="exampleInputFile" name="photo">
        <div  id="gayab1"></div>
        <div id="gayab2">
          <img id="blah" src="#" alt="your image" width="100%" height ="200px"/>
        </div>
     </div> 
      </tr>
      <tr>
            <div class="form-group">
    <label for="inputName" class="control-label">Email</label>
          <input disabled onblur="emails();" type="email" class="form-control" id="email" placeholder="Email" name="email">
     </div> 
      </tr>
      <tr>
            <div class="form-group">
    <label for="inputName" class="control-label">Password</label>
          <input disabled onblur="passwords();" type="password" class="form-control" id="password" placeholder="Password" name="password">
     </div> 
      </tr>
      <tr>
        <div class="form-group">
        <label for="inputName" class="control-label">Confirm Password</label>
        <input disabled onblur="password2s();" type="password" class="form-control" id="password2" placeholder="Password" name="password">
      </div>
      </tr>
      <tr>
  </table>
  </div>
</div>
</div>
      </div>
      <div class="modal-footer">
          <button onclick="resetnow()" type="button" id="reset" class="btn btn-primary">Reset</button>
          <button disabled id="submit" type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#photo").change(function(){
        readURL(this);
    });
</script>








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
  <div class="panel-heading">Registered User</div>
  <table class="table">
         <tr>
        <td>eMail ID</td>
        <td><input type="text" name="email" placeholder="Email ID" class="form-control"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="pass" placeholder="Password" class="form-control"></td>
      </tr>
  </table>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>









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
        <td><input type="text" name="email" placeholder="Email ID" class="form-control"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="pass" placeholder="Password" class="form-control"></td>
      </tr>
  </table>
</div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="Submit" class="btn btn-primary">Login</button>
      </div>
    </form>
    </div>
  </div>
</div>






















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