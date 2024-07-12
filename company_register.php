<?php
    include "includes/header.php";
?>

<body >
  <div class="container-fluid">
    <div class="container">
        <div class="mt-5">
            <form action="company_register_data.php" id="adminForm" method="post" class="form-control rounded-3 shadow p-3 mb-5 bg-body-tertiary rounded">  
                <h4 class="adminDetails">Admin Details</h4>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="cName" class="form-label">Company Name</label>
                        <input type="text" name="cName" id="cName" class="form-control" placeholder="">
                        <div class="error" id="companyNameError"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="fName" class="form-label">First Name</label>
                        <input type="text" name="fName" id="fName" class="form-control" placeholder="">
                        <div class="error" id="firstNameError"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="lName" class="form-label">Last Name</label>
                        <input type="text" name="lName" id="lName" class="form-control" placeholder="">
                        <div class="error" id="lastNameError"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="">
                        <div class="error" id="emailError"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" class="form-control" placeholder="">                        
                        <div class="error" id="passwordError"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="number" name="contact" id="contact"  class="form-control" placeholder="">
                        <div class="error" id="contactError"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="panCard" class="form-label">PAN Number</label>
                        <input type="text" name="panCard" id="panCard" class="form-control" placeholder="">
                        <div class="error" id="panError"></div>
                    </div>   
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="cAddress" class="form-label">Company Address</label>
                         <textarea name="cAddress" id="cAddress" class="form-control"></textarea>
                         <div class="error" id="caddressError"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="pinCode" class="form-label">Pin Code</label>
                        <input type="number" name="pinCode" id="pinCode"  class="form-control" placeholder="">
                        <div class="error" id="cpinError"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="country" class="form-label">Country</label>
                            <select class="form-control form-select" id="country" name="country">
                            <option value="">Select</option>
                            <option value="INDIA"> INDIA </option>
                        </select>
                        <div class="error" id="countryError"></div>
                    </div>  
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="state" class="form-label">State</label>
                        <select class="form-control form-select" id="state" name="state">
                        <option value="">Select</option>
                        <option value="MAHARASHTRA"> MAHARASHTRA </option>
                        </select>
                        <div class="error" id="stateError"></div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="dist" class="form-label">Dist</label>
                        <select class="form-control form-select" id="dist" name="dist">
                        <option value="">Select</option>
                        <option value="NANDED">NANDED</option>
                        </select>
                        <div class="error" id="distError"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                        <label for="taluka" class="form-label">Taluka</label>
                        <select class="form-control form-select" id="taluka" name="taluka">
                        <option value="">Select</option>
                        <option value="KINWAT">KINWAT</option>
                        <option value="BHOKAR">BHOKAR</option>
                        <option value="HADAGAON">HADAGAON</option>
                        </select>
                        <div class="error" id="talukaError"></div>
                    </div>
                </div>
                
                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" name="register_company" id="register_company" class="btn btn-primary  w-25" onclick="formValidation()">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>

<?php
include "includes/footer.php";
?>


 <!-- Created By SM  -->
 <!-- Ajax Validations  -->
<script>
    $(document).on('submit','#adminForm',function(e){
           e.preventDefault(); 
            var formData = new FormData(this);
            console.log(FormData);
           formData.append("register_company",true);
           
           $.ajax({
            type: "POST",
            url: "company_register_data.php",
            data: formData,
            processData: false,
            contentType: false,
            success:function(res){

                var res =jQuery.parseJSON(res);
                if(res.status == 500){

                    $('#errorMessage').addClass('d-none');
                    $('#companyAddModal').modal('hide');
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                }
                else if(res.status == 200){
                    $('#errorMessage').addClass('d-none');
                    $('#companyAddModal').modal('hide');
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                }else if(res.status == 422){
                    $('#errorMessage').addClass('d-none');
                    $('#companyAddModal').modal('hide');
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                }
            }
           });   
        });
</script>
</body>
</html>
