<?php

require 'Connections.php';

if(isset($_POST['submit_Form']))
{
    $employee_name = mysqli_real_escape_string($Connections, $_POST['employee_name']);
    $department = mysqli_real_escape_string($Connections, $_POST['department']);
    $claim_amount = mysqli_real_escape_string($Connections, $_POST['claim_amount']);
    $claim_date = mysqli_real_escape_string($Connections, $_POST['claim_date']);
    $expense_category = mysqli_real_escape_string($Connections, $_POST['expense_category']);
    $approval_date = mysqli_real_escape_string($Connections, $_POST['approval_date']);


    if($employee_name == NULL || $department == NULL || $claim_amount == NULL || $claim_date == NULL || $expense_category == NULL || $approval_date == NULL )
    {
        $res = [
            'status' => 422,
            'message' => 'Please complete the information below'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO claim (employee_name,department,claim_amount,claim_date,expense_category,approval_date) VALUES ('$employee_name','$department','$claim_amount','$claim_date','$expense_category','$approval_date')";
    $query_run = mysqli_query($Connections, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Claim Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Claim Not Created'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_POST['update_claim']))
{
    $claim_id = mysqli_real_escape_string($Connections, $_POST['claim_id']);

    $employee_name = mysqli_real_escape_string($Connections, $_POST['employee_name']);
    $department = mysqli_real_escape_string($Connections, $_POST['department']);
    $claim_amount = mysqli_real_escape_string($Connections, $_POST['claim_amount']);
    $claim_date = mysqli_real_escape_string($Connections, $_POST['claim_date']);
    $expense_category = mysqli_real_escape_string($Connections, $_POST['expense_category']);
    $approval_date = mysqli_real_escape_string($Connections, $_POST['approval_date']);

    if($employee_name == NULL || $department == NULL || $claim_amount == NULL || $claim_date == NULL || $expense_category == NULL || $approval_date == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE claim SET employee_name='$employee_name', department= '$department', claim_amount= '$claim_amount', claim_date='$claim_date', expense_category='$expense_category', approval_date='$approval_date' 
                WHERE id='$claim_id'";
    $query_run = mysqli_query($Connections, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Claim Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Claim Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}


if(isset($_GET['claim_id']))
{
    $claim_id = mysqli_real_escape_string($Connections, $_GET['claim_id']);

    $query = "SELECT * FROM claim WHERE id='$claim_id'";
    $query_run = mysqli_query($Connections, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $claim = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Claim Fetch Successfully by id',
            'data' => $claim
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Claim Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_claim']))
{
    $claim_id = mysqli_real_escape_string($Connections, $_POST['claim_id']);

    $query = "DELETE FROM claim WHERE id='$claim_id'";
    $query_run = mysqli_query($Connections, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Claim Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Claim Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
}

?>