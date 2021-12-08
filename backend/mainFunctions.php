<?php
    function getStatus($status) {
        if($status == 0){
            return(
                '
                    <option class="text-primary" value="0" selected>Pending</option>
                    <option class="text-success" value="1">Accepted</option>
                    <option class="text-danger" value="2">Rejected</option>
                    <option class="text-warning" value="3">Completed</option>
                '
            ) ;
        }else if($status == 1){
            return(
                '
                    <option class="text-primary" value="0" >Pending</option>
                    <option class="text-success" value="1" selected>Accepted</option>
                    <option class="text-danger" value="2">Rejected</option>
                    <option class="text-warning" value="3">Completed</option>
                '
            ) ;
            
        }else if($status == 2){
            return(
                '
                    <option class="text-primary" value="0" >Pending</option>
                    <option class="text-success" value="1">Accepted</option>
                    <option class="text-danger" value="2" selected>Rejected</option>
                    <option class="text-warning" value="3">Completed</option>
                '
            ) ;
        }else{
            return(
                '
                    <option class="text-primary" value="0" >Pending</option>
                    <option class="text-success" value="1">Accepted</option>
                    <option class="text-danger" value="2">Rejected</option>
                    <option class="text-warning" value="3" selected>Completed</option>
                '
            ) ;
        }
    }

    function getStatusCustomer($status){
        if($status == 0){
            return(
                '
                <span class="badge badge-info" onClick="#">Pending</span>
                    
                '
            ) ;
        }else if($status == 1){
            return(
                '
                     <span class="badge badge-primary" onClick="#">Accepted</span>
                '
            ) ;
            
        }else if($status == 2){
            return(
                '
                <span class="badge badge-danger" onClick="#">Rejected</span>
                    
                '
            ) ;
        }else{
            return(
                '
                <span class="badge badge-success" onClick="#">Completed</span>
                '
            ) ;
        }
    }
    function getStatusCustomerForPDF($status){
        if($status == 0){
            return(
                'Pending'
            ) ;
        }else if($status == 1){
            return(
                'Accepted'
            ) ;
            
        }else if($status == 2){
            return(
                'Rejected'
            ) ;
        }else{
            return(
                'Completed'
            ) ;
        }
    }
?>