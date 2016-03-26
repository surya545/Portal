<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="font-family:comic sans ms;">New Student</h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-default">
  <!-- Default panel contents -->



  <div class="panel-heading" style="font-family:comic sans ms;">Student Register</div>
  <form action="include/student_entry.php" method="POST" enctype="multipart/form-data">
<div class="row">
  <div class="col-lg-6">
    <li class="list-group-item">
      <div class="form-group">
        <label for="inputName" class="control-label" style="font-family:comic sans ms;">Photo</label>
        <input type="file" id="files"  name="file[]"/ onblure="photos()"  id="photo">
          <img id="image"/>
        </div>
   </li>
     </div>



     
  <div class="col-lg-6">
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Password</label>
              <input type="password" class="form-control"  placeholder="Password" name="password" onblur="pass()"  id="pwd">
          </li>
  </div>
</div>






<div class="row">
  <div class="col-lg-3">
    <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1" style="font-family:comic sans ms;">Students Detail</a>
        </h4>
      </div>
      <div class="form-group">
      <div id="collapse1" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">First Name</label>
              <input onblur="fnames();" disabled type="text" class="form-control"   id="fname" placeholder="First Name(only Alphabets)" name="firstname">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Last Name</label>
              <input disabled onblur="lnames();" type="text" class="form-control" id="lname" placeholder="Last Name(only Alphabets)" name="lastname">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Department</label>
              <select disabled onblur="branchs();" id="branch" class="form-control" name="branch">
                <option value="BT" selected>Biotechnology</option>
                <option value="CV">Civil</option>
                <option value="CH">Chemical</option>
                <option value="EE">Electrical</option>
                <option value="IT">Information Technology</option>
                <option value="ME">Mechanical</option>
                <option value="MME">Metallurgy</option>
              </select>
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Year of Joining</label>
              <select disabled onblur="yearofjoins();" class="form-control" id="yearofjoin" name="yearofjoining">
                <option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option>
              </select>
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Roll Number</label>
                <select onblur="rolls()" onload="rolls2()" id="roll"   disabled name="roll" class="form-control" >
                </select>
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Date of Birth</label>
              <input onblur="dobs();" disabled id="dob" type="date" name="dob" placeholder="dd/mm/yyyy" class="form-control">
        </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Registration Number</label>
              <input onblur="regs();" type="text" class="form-control" disabled id="reg" placeholder="Numeric Values" name="reg">
          </li>
        </ul>
      </div>
    </div>
  </div>
    </div>
    </div>










  <div class="col-lg-3">
    <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2" style="font-family:comic sans ms;">Personal Details</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
      <div class="form-group">
        <ul class="list-group">
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Father's Name</label>
              <input onblur="fathernames();" type="text" class="form-control" disabled id="father" placeholder="Contains Only Alphabets" name="father">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Mother's Name</label>
              <input onblur="mothernames();" type="text" class="form-control" id="mother" placeholder="Contains Only Alphabets" name="mother">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Permanent Address</label>
              <input onblur="p_addr();" type="text" class="form-control" disabled id="paddr" placeholder="Contains Only Alphabets" name="paddress">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Address of Correspondance</label>
              <input onblur="c_addr();" type="text" class="form-control" disabled id="C_addr" placeholder="Contains Only Alphabets" name="caddress">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="email" disabled id="email" onblur="emails()">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">Phone Number</label>
              <input onblur="phones();" disabled type="text" class="form-control" id="phone" placeholder="Contains Only Numbers" name="phone">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">10th Board Name</label>
              <input onblur="board();" type="text" class="form-control" disabled id="C_board" placeholder="Contains Only Alphabets" name="tenboard">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">10th School Name</label>
              <input onblur="school();" type="text" class="form-control"id="school1" placeholder="Contains Only Alphabets" name="tenschool">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">10th Passing Year</label>
              <input onblur="schooly();" type="text" class="form-control" disabled id="school1y" placeholder="Contains Only Alphabets" name="tenyear">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">10th Marks Obtained</label>
              <input onblur="marks();"  disabled type="text" class="form-control" id="marks10" placeholder="Contains Only Alphabets" name="tenmarks">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">10th Full Marks</label>
              <input onblur="full();" disabled type="text" class="form-control" id="fmarks" placeholder="Contains Only Alphabets" name="tenfull">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">10th Percentage</label>
              <input onblur="cent();" type="text" class="form-control" disabled id="perct" placeholder="Contains Only Alphabets" name="tenpercent">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">12th Board Name</label>
              <input onblur="inter();" disabled type="text" class="form-control" id="board12" placeholder="Contains Only Alphabets" name="tweboard">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">12th School Name</label>
              <input onblur="schoolname();"  type="text" class="form-control" id="interschool" placeholder="Contains Only Alphabets" name="tweschool">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">12th Passing Year</label>
              <input onblur="schoolyr();" disabled type="text" class="form-control" id="interschooly" placeholder="Contains Only Alphabets" name="tweyear">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">12th Marks Obtained</label>
              <input onblur="th12();" disabled type="text" class="form-control" id="marks12" placeholder="Contains Only Alphabets" name="twemarks">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">12th Full Marks</label>
              <input onblur="full12();" disabled type="text" class="form-control" id="fmarks12" placeholder="Contains Only Alphabets" name="twefull">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">12th Percentage</label>
              <input onblur="percent();"  disabled type="text" class="form-control" id="perc12" placeholder="Contains Only Alphabets" name="twepercent">
          </li>
        </ul>
      </div>
      </div>
    </div>
  </div>
    </div>













  <div class="col-lg-3">
    <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse3" style="font-family:comic sans ms;">Extra Details</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item">
            <label for="inputName"  class="control-label" style="font-family:comic sans ms;">Day Scholar</label></br>
            <input   id ="ds1" type="radio" name="dayscholar" value="Yes"/ style="font-family:courier;"  disabled onblur="yes()"> Yes</br>
            <input   id ="ds2" type="radio" name="dayscholar" value="No" checked/ style="font-family:courier;" disabled onblur="no()"> No
          </li>
          <li class="list-group-item">
            <label for="inputName" class="control-label" style="font-family:comic sans ms;" >Gender</label></br>
            <input  disabled id ="g1" type="radio" name="gender" value="male" checked/ style="font-family:courier;" onblur="male()" > Male</br>
            <input   disabled id ="g2" type="radio" name="gender" value="female"/ style="font-family:courier;" onblur="female()"> Female 
          </li>
          <li class="list-group-item">
            <label for="inputName" class="control-label" style="font-family:comic sans ms;">Hobbies</label>
            <div id="hob">
              <input type="checkbox" name="hobb"  id="id1" value="Painting" style="font-family:courier;">Painting<br>
              <input type="checkbox" name="hobb"  id="id2" value="Dancing" style="font-family:courier;">Dancing<br>
              <input type="checkbox" name="hobb"  id="id3" value="Reading" style="font-family:courier;">Reading<br>
              <input type="checkbox" name="hobb" id="id4" value="Cooking" style="font-family:courier;">Cooking<br>
              <input type="checkbox" name="hobb"  id="id5" value="Playing" style="font-family:courier;">Playing<br>
              <input type="checkbox" name="hobb" a id="oth" value="others" onclick="other()" />Others<br>
              <textarea class="form-control" name="hobbi" id="extrah" style="display:none;"></textarea>
              <textarea name="hobbies" id="ho" style="display:none;"></textarea>
            </div>
          </li>
          <li class="list-group-item">
            <label for="inputName" class="control-label" style="font-family:comic sans ms;">Height</label>
              <input onblur="hg();"  type="text" class="form-control" id="h" placeholder="Numeric Values" name="height">
          </li>
          <li class="list-group-item">
            <label for="inputName" class="control-label" style="font-family:comic sans ms;">Weight</label>
              <input onblur="wg();" disabled type="text" class="form-control" id="w" placeholder="Numeric Values" name="weight">
          </li>
          <li class="list-group-item">
            <label for="inputName" class="control-label" style="font-family:comic sans ms;">Power : Right Eye</label>
              <input onblur="pwr();" disabled type="text" class="form-control" id="pr" placeholder="Numeric Values" name="righteye">
          </li>
          <li class="list-group-item">
            <label for="inputName" class="control-label" style="font-family:comic sans ms;">Power : Left Eye</label>
              <input onblur="pwl();"  disabled type="text" class="form-control" id="pl" placeholder="Numeric Values" name="lefteye">
          </li>
        </ul>
      </div>
    </div>
  </div>
    </div>











  <div class="col-lg-3">
    <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse4" style="font-family:comic sans ms;">Academic Details</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <ul class="list-group">
          
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">1st Sem SGPA</label>
              <input type="text" disabled class="form-control" placeholder="Contains Decimal Number" name="firstsgpa"  onblur="sem1()"  id="num1">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >2nd Sem SGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="secondsgpa" onblur="sem2()" disabled id="num2">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >3rd Sem SGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="thirdsgpa" onblur="sem3()" disabled id="num3">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >4th Sem SGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="fourthsgpa" onblur="sem4()" disabled id="num4">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >5th Sem SGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="fifthsgpa" onblur="sem5()" disabled id="num5">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >6th Sem SGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="sixthsgpa" onblur="sem6()" disabled id="num6">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >7th Sem SGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="seventhsgpa" onblur="sem7()" disabled id="num7">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >8th Sem SGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="eighthsgpa" onblur="sem8()" disabled id="num8">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;">1st Sem CGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="firstcgpa"  onblur="sem9()" disabled id="num9">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >2nd Sem CGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="secondcgpa" onblur="sem10()" disabled id="num10">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >3rd Sem CGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="thirdcgpa" onblur="sem11()" disabled id="num11">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >4th Sem CGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="fourthcgpa" onblur="sem12()" disabled id="num12">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >5th Sem CGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="fifthcgpa" onblur="sem13()" disabled id="num13">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >6th Sem CGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="sixthcgpa" onblur="sem14()" disabled id="num14">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >7th Sem CGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="seventhcgpa" onblur="sem15()" disabled id="num15">
          </li>
          <li class="list-group-item">
              <label for="inputName" class="control-label" style="font-family:comic sans ms;" >8th Sem CGPA</label>
              <input type="text" class="form-control" placeholder="Contains Decimal Number" name="eighthcgpa" onblur="sem16()" disabled id="num16">
          </li>
          
          
        </ul>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>
      </div>




      <div class="modal-footer">
        <button type="submit" name="submit" id="submit" class="btn btn-primary" style="font-family:comic sans ms;" onblur="log()" disabled >Login</button>
      </div>
    




    </form>
    </div>
  </div>
</div>



<script>
document.getElementById("files").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
        document.getElementById("image").width = "100";
        document.getElementById("image").height = "100";
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
</script>