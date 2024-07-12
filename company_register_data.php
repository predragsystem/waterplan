<?php
include('includes/dbConfig.php');

// created by SM : 
if(isset($_POST['register_company']))
{
    $cName = $_POST['cName'];
    $Fname = $_POST['fName'];
    $Lname = $_POST['lName'];
    $Email = $_POST['email']; 
    $Password = md5($_POST['password']);
    $Contact = $_POST['contact'];
    $panCard = $_POST['panCard'];
    $cAddress = $_POST['cAddress'];
    $pinCode = $_POST['pinCode'];
    $Dist = $_POST['dist'];
    $Taluka = $_POST['taluka'];
    $State = $_POST['state'];
    $Country = $_POST['country'];


    if($cName == "" || $Fname == "" || $Lname == "" || $Email == "" || $Password == "" || $Contact == "" || $panCard == "" || $cAddress == "" || $pinCode == "" || $Dist == "" || $Taluka == "" || $State == "" || $Country == "")
    {
        $res =[
                    'status' => 422,
                    'message' => 'All Fields are Required !!!'
                ];
                    echo json_encode($res);
                    return false;
            
    }
    
    

    $query = "INSERT INTO company_details (company_name,first_name,last_name,email,password,contact,pan_number,c_address,pin_code,dist,taluka,state,country) VALUES ('$cName','$Fname','$Lname','$Email','$Password','$Contact','$panCard','$cAddress','$pinCode','$Dist','$Taluka','$State','$Country')";

    try {
        $result=mysqli_query($conn ,$query);
    }catch (Exception $e){
        
        $res =array(
            'status' => 500,
            'message' => 'Something Went Wrong'
        );
        echo json_encode($res);
        return false;
    }

    if($result){
                $res =array(
                    'status' => 200,
                    'message' => 'Company Register Successfully !!!'
                );
                echo json_encode($res);
                return false;
            }
            else{
                $res =array(
                    'status' => 500,
                    'message' => 'Company Not Register'
                );
                echo json_encode($res);
                return false;
            }
    
    }

    include "includes/footer.php";
?>