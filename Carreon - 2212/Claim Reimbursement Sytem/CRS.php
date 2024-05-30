<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
  </head>
  <body>
    <style>
        .modal-dialog{
            border-radius: 10px;
            padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1)
        }
.container{
   margin-top: 35px;
} 



td button:nth-of-type(1):hover
{
            background-color:#87cefa;
            color: black;
        }  
        td button:nth-of-type(2):hover{
            background-color: #98fb98;
            color: black;
        }  
        td button:nth-of-type(3):hover {
            background-color:#ff6347;
            color: black;
        }  
        td button:nth-of-type(1),
        td button:nth-of-type(2),
        td button:nth-of-type(3) {
            padding: 5px 10px;
            background-color: #021024;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
      .breadcrumb {
  text-align: right;
  margin-left: 50px;
}

.breadcrumb-item.active {
  margin-left: 350px;
}

      td a {
	color: black; 
	text-decoration: none; 
  }
  
  td a:hover {
	color: red; 
  }
  

  td a  {
	margin-right: -10px; 
  }
  
  

  td i {
	margin-left:20px; 
  }

  .card .btn {
  font-size: 15px; 
  padding: 5px;
  width: 90px; 
  margin-top: 10px; 
}

.card {
 background-color: #ff8478; 
  
}

.card-body {
    background-color: #ff8478;
   color: #ff8478;
}

.bx-log-out-circle {
  display: inline-block;
  padding: 10px 15px;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border: 1px solid blue; 
    color: #ffffff; 
    background-color: blue; 
    border-radius: 5px; 
    cursor: pointer;
    margin-left: 10px;
    margin-top: 10px; 
}
.bx-log-out-circle:hover{
    background-color: #1e90ff ; 
    border: 1px solid #1e90ff ; 
    color: black;
}
.button {
    display: inline-block;
    padding: 10px 15px;
    font-size: 15px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    border: 1px solid blue;
    color: #ffffff; 
    background-color: blue; 
    border-radius: 5px; 
    cursor: pointer;
    margin-bottom: 10px;
    margin-left: 980px;
}
.button:hover{
    background-color: #1e90ff ; 
    border: 1px solid #1e90ff ; 
    color: black;
}


.table th {
  background-color: #960018;
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  border-color: black;

}


.table td {
  border: 1px solid #ddd;
  padding: 8px;
  background-color: white;
  border-color: black;
 
}
.breadcrumb-item.active {
  font-size: 15px;
  margin-left: -8px;
}




#myTable {
    background-color: #ff8478;
    border-color: #ff8478;
}


.table {
    
    background-color: #ff8478;
    border-color: #ff8478;
}


.table-bordered {
    border: 1px solid #ddd; 
    background-color: #ff8478;
    border-color: #ff8478;
}

.table-striped tbody tr:nth-of-type(odd) {
    border-color: #ff8478;
    background-color: #ff8478; 
}

    </style>
<a href="admin.php" class='bx bx-log-out-circle'> </a> 
	  
		   
    <div class="modal fade" id="claimAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reimbursement Claim Form</h5>
       
        </div>
        <form id="submitForm">
            <div class="modal-body">

                <div id="errorMessage" class="alert alert-warning d-none"></div>

                <div class="mb-3">
                    <label for="">Employee Name:</label>
                    <input type="text" name="employee_name" class="form-control" />
                    
                </div>
                <div class="mb-3">
                <label for="">Department</label>
            <select class="form-select" name="department" class="form-control">
               <option selected disabled>Select Department</option>
               <option value="Emergency">Emergency</option>
               <option value="Cardiology">Cardiology</option>
               <option value="Neurology">Neurology</option>
               <option value="Radiology">Radiology</option>
               <option value="Psychiatry">Psychiatry</option>
               <option value="Oncology">Oncology</option>
               <option value="Others...">Others...</option>

            
            </select>
                    
                </div>
                <div class="mb-3">
                    <label for="">Claim Amount:</label>
                    <input type="text" name="claim_amount" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Claim Date:</label>
                    <input type="date" name="claim_date" class="form-control" />
                </div>
                <div class="mb-3">
                <label for="">Expense Category</label>
           <select class="form-select" name="expense_category" class="form-control">
              <option selected disabled>Select Predefined Categories</option>
              <option value="Travels">Travels</option>
              <option value="Meals">Meals</option>
              <option value="Medical">Medical</option>
              <option value="Lodging">Lodging</option>
              <option value="Personal Income">Personal Income</option>
              <option value="Others...">Others...</option>
           
           </select>
                   
               </div>

               <div class="mb-3">
                    <label for="">Approval Date:</label>
                    <input type="date" name="approval_date" class="form-control" />
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit Form</button>
            </div>
        </form>
        </div>
    </div>
</div>


<div class="modal fade" id="claimEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Claim Form</h5>
          
        </div>
        <form id="updateClaim">
            <div class="modal-body">

                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                <input type="hidden" name="claim_id" id="claim_id" >

                <div class="mb-3">
                    <label for="">Employee Name:</label>
                    <input type="text" name="employee_name" id="employee_name" class="form-control" />
                </div>
                <div class="mb-3">
                <label for="">Department</label>
            <select class="form-select" name="department" id="department" class="form-control">
               <option selected disabled>Select Department</option>
               <option value="Emergency">Emergency</option>
               <option value="Cardiology">Cardiology</option>
               <option value="Neurology">Neurology</option>
               <option value="Radiology">Radiology</option>
               <option value="Psychiatry">Psychiatry</option>
               <option value="Oncology">Oncology</option>
               <option value="Others...">Others...</option>
            </select>
                    
                </div>
                <div class="mb-3">
                    <label for="">Claim Amount:</label>
                    <input type="text" name="claim_amount" id="claim_amount" class="form-control" />
                </div>
                <div class="mb-3">
                    <label for="">Claim Date:</label>
                    <input type="date" name="claim_date" id="claim_date" class="form-control" />
                </div>

                <div class="mb-3">
                <label for="">Expense Category</label>
           <select class="form-select" name="expense_category" id="expense_category" class="form-control" >
              <option selected disabled>Select Predefined Categories</option>
              <option value="Travels">Travels</option>
              <option value="Meals">Meals</option>
              <option value="Medical">Medical</option>
              <option value="Lodging">Lodging</option>
              <option value="Personal Income">Personal Income</option>
              <option value="Others...">Others...</option>
             
           </select>
                </div>

                <div class="mb-3">
                    <label for="">Approval Date</label>
                    <input type="date" name="approval_date" id="approval_date" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Claim Form</button>
            </div>
        </form>
        </div>
    </div>
</div>


<div class="modal fade" id="claimViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">View Claim Form</h5>
            
        </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="">Employee Name:</label>
                    <p id="view_employee_name" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Department:</label>
                    <p id="view_department" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Claim Amount:</label>
                    <p id="view_claim_amount" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Claim Date:</label>
                    <p id="view_claim_date" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Expense Category:</label>
                    <p id="view_expense_category" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Approval Date:</label>
                    <p id="view_approval_date" class="form-control"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
                
            
                        <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#claimAddModal">
                            + Create Claim
                        </button>
                
               
                
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Employee Name</th>
                                <th>Department</th>
                                <th>Claim Amount</th>
                                <th>Claim Date</th>
                                <th>Expense Category</th>
                                <th>Approval Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'Connections.php';

                            $query = "SELECT * FROM claim";
                            $query_run = mysqli_query($Connections, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $claim)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $claim['id'] ?></td>
                                        <td><?= $claim['employee_name'] ?></td>
                                        <td><?= $claim['department'] ?></td>
                                        <td><?= $claim['claim_amount'] ?></td>
                                        <td><?= $claim['claim_date'] ?></td>
                                        <td><?= $claim['expense_category'] ?></td>
                                        <td><?= $claim['approval_date'] ?></td>
                                        <td>
                                            <button type="button" value="<?=$claim['id'];?>" class="viewClaimBtn bx bx-show"></button>
                                            <button type="button" value="<?=$claim['id'];?>" class="editClaimBtn bx bx-edit"></button>
                                            <button type="button" value="<?=$claim['id'];?>" class="deleteClaimBtn bx bx-trash"></button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>
                 
            </div>
        </div>
    </div>
</div>
    
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        $(document).on('submit', '#submitForm', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("submit_Form", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#claimAddModal').modal('hide');
                        $('#submitForm')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.editClaimBtn', function () {

            var claim_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code.php?claim_id=" + claim_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#claim_id').val(res.data.id);
                        $('#employee_name').val(res.data.employee_name);
                        $('#department').val(res.data.department);
                        $('#claim_amount').val(res.data.claim_amount);
                        $('#claim_date').val(res.data.claim_date);
                        $('#expense_category').val(res.data.expense_category);
                        $('#approval_date').val(res.data.approval_date);

                        $('#claimEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updateClaim', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_claim", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        $('#claimEditModal').modal('hide');
                        $('#updateClaim')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });


        $(document).on('click', '.viewClaimBtn', function () {

            var claim_id = $(this).val();
            $.ajax({
                type: "GET",
                url: "code.php?claim_id=" + claim_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#view_employee_name').text(res.data.employee_name);
                        $('#view_department').text(res.data.department);
                        $('#view_claim_amount').text(res.data.claim_amount);
                        $('#view_claim_date').text(res.data.claim_date);
                        $('#view_expense_category').text(res.data.expense_category);
                        $('#view_approval_date').text(res.data.approval_date);


                        $('#claimViewModal').modal('show');
                    }
                }
            });
        });

        $(document).on('click', '.deleteClaimBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var claim_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_claim': true,
                        'claim_id': claim_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });

    </script>



  </body>
  
  </html>



