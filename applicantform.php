<script>
  var x = document.getElementById("TELNO");
  if(x.pattern=TRUE){
    alert("ok");
  }
  else{
    alert("Please Enter The Contact Number In Requested Format");
  }
</script>

<style type="text/css">
.form-control-2 {
  display: inline-block;
  width: 25%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
   
</style>


            <form action="application_submit.php" enctype="multipart/form-data" class="bg-white p-5 contact-form">
              <div class="form-group">
               <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
               <input class="form-control " id="FNAME" name="FNAME" placeholder=
                  "Firstname" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" >
              </div>
              <div class="form-group">
                   <input  class="form-control " id="LNAME" name="LNAME" placeholder="Lastname"  onkeyup="javascript:capitalize(this.id, this.value);" >
              </div>
              <div class="form-group">
                <input  class="form-control " id="MNAME" name="MNAME" placeholder="Middle Name" onkeyup="javascript:capitalize(this.id, this.value);" > 
              </div>
              <div class="form-group"> 
                  <textarea class="form-control " id="ADDRESS" name="ADDRESS" placeholder="Address" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" ></textarea>
              </div>

              <div class="form-group">   
                Sex: 
                    <input id="optionsRadios1" name="sex" type="radio" value="Female">Female
                     <input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Male   
              </div>


    <div class="form-group">  Date of Birth  
       <input type="date" name="date"> 
       
        
        </select>
      </div> 
 
              <div class="form-group">  
                <textarea class="form-control " id="BIRTHPLACE" name="BIRTHPLACE" placeholder= "Place of Birth" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" ></textarea>
              </div>
              <div class="form-group"> 
                 <input class="form-control " id="TELNO" name="TELNO" placeholder= "Contact No." type="tel" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" maxlength="12" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><small>Format: 123-456-7890</small>
              </div>
              <div class="form-group">
                    <select class="form-control " name="CIVILSTATUS" id="CIVILSTATUS">
                        <option value="none" >Select Civil Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow" >Widow</option> 
                    </select> 
                
              </div>
              <div class="form-group">
                   <input type="Email" value=<?php echo $email;?> class="form-control " id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Email Address"   autocomplete="false"/>  
              </div>
       


             <div class="form-group"> 
                 Attach your Resume here. 
                    <input id="picture"  accept="application/pdf, application/vnd.ms-excel" name="picture" type="file"  >
                    <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> 
            </div>  


           

              <div class="form-group">
                <input type="submit" value="Submit Application" name="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>












