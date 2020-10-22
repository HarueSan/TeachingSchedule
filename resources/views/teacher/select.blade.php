<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <style>
    button{
        width:7vw;
    }
    </style>
</head>
<body>
    <div class="container">   
        <div class="row">
            @include('menubar_teacher')
        </div>
        <div class="row">  
            <div class="col-2">  
               <!--nav bar -->	 
            </div>
            <div class="col"> 
                <div class="row" style="margin-left:15%">  
                    <div> <h1>เลือกกระบวนวิชาที่ต้องการสอน</h1>  </div>
                </div>
                <div class="row">   
                <!--  ค้นหา  -->
                    
                    <div class="col-5">  
                        <div> 
                            <div class="active-pink-3 active-pink-4 mb-4">
                                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                            </div>
                        </div> 
                    </div>	
                    <div class="col-6">   
                        <button type="button" class="btn btn-warning">ค้นหา</button> 
                    </div>
                </div>
                <div class="row">  <!--ตาราง  -->
                    <div class="col">   
                        <div>   
                                <table class="table" style="margin-top: 30px;">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">รหัสวิชา</th>
                                            <th scope="col-2">ชื่อวิชา</th>
                                            <th scope="col">เลือก</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                            <tr class="bg-light">
                                                <th scope="row">201110</th>
                                                <td>Intergrated Math Sc</td>
                                                <td><input type="checkbox" aria-label="Checkbox for following text input" 
                                                style="-webkit-transform: scale(3,2); "></td>
                                            
                                            </tr>

                                            <tr class="bg-light">
                                                <th scope="row">204100</th>
                                                <td> IT And Modern Life  </td>
                                                <td><input type="checkbox" aria-label="Checkbox for following text input" 
                                                style="-webkit-transform: scale(3,2); "></td>
                                                
                                            </tr>

                                            <tr class="bg-light">
                                                <th scope="row">204216</th>
                                                <td>C Programming</td>
                                                <td><input type="checkbox" aria-label="Checkbox for following text input" 
                                                style="-webkit-transform: scale(3,2); "></td>
                                                
                                            </tr>

                                            <tr class="bg-light">
                                                <th scope="row">204251</th>
                                                <td>Data Structure</td>
                                                <td><input type="checkbox" aria-label="Checkbox for following text input" 
                                                style="-webkit-transform: scale(3,2); "></td>
                                                
                                            </tr>

                                            <tr class="bg-light">
                                                <th scope="row">204341</th>
                                                <td>Operating System</td>
                                                <td><input type="checkbox" aria-label="Checkbox for following text input" 
                                                style="-webkit-transform: scale(3,2); "></td>
                                                
                                            </tr>

                                            <tr class="bg-light">
                                                <th scope="row">204453</th>
                                                <td>Pattern Recognition</td>
                                                <td><input type="checkbox" aria-label="Checkbox for following text input" 
                                                style="-webkit-transform: scale(3,2); "></td>
                                                
                                            </tr>
                                    </tbody>
                                
                            </table>
                        </div>
                        <div class="row">  <!--เปลี่ยนหน้า  -->
                            <nav aria-label="Page navigation example" style="margin-left:72.5%">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="row">
                            <div style="margin-left:75%">
                                <button type="button" class="btn btn-warning">ยืนยัน</button> 
                            </div>
                        </div>
                </div>
                

    </div>
</body>
</html>