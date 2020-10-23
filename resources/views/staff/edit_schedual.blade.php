<!-- M -->
<!DOCTYPE html>
<html lang="en">
<html>
    <br>
    <head>
    <title>Manage -Staff</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    </head>
    <body style="line-height: 0;">
        <div class="container" style="margin-left: 0; margin-top: 0;">
            <div class="row">
                    @include('menubar_staff')
            </div>
        </div>
        <div>
        <center>
        <body><h1 style="margin-top: 30px; margin-bottom: 30px;">ตารางจัดการสอน</h1>
        </body>
        </center>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing" style="margin-left: 30px;"> รหัสวิชา </span>
            </div>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            <select name="dayType1" id="" class="form-control" style="margin-left: 30px;" >
                <option selected>วัน</option>
                    <option value="1234">จันทร์</option>
                    <option value="3456">อังคาร</option>
                    <option value="1234">พุธ</option>
                    <option value="3456">พฤหัสบดี</option>
                    <option value="1234">ศุกร์</option>
            </select>
            <select name="timeType1" id="" class="form-control" style="margin-left: 30px;"   >
                <option selected>ช่วงเวลา</option>
                    <option value="1234">08:00 - 09:30</option>
                    <option value="3456">09:30 - 11:00</option>
                    <option value="1234">11:00 - 12:30</option>
                    <option value="3456">13:00 - 14:30</option>
                    <option value="1234">14:30 - 16:00</option>
                    <option value="1234">16:00 - 17:30</option>
            </select><select name="dayType1" id="" class="form-control" style="margin-left: 30px; margin-right: 30px; width:fit-content">
                <option selected>ห้อง</option>
                    <option value="1234">Lec CSB100</option>
                    <option value="3456">Lec CSB201</option>
                    <option value="1234">Lec CSB207</option>
                    <option value="3456">Lec CSB208</option>
                    <option value="1234">Lec CSB209</option>
                    <option value="1234">Lec CSB210</option>
                    <option value="3456">Lab CSB301</option>
                    <option value="1234">Lab CSB307</option>
                    <option value="3456">Lab CSB308</option>
            </select>
            
    <button type="button" class="btn btn-warning"  style="margin-right: 50px;"> เพิ่ม </button>
    <div>
    <!-- M -->
<!DOCTYPE html>
<html lang="en">
<html>
    <br>
    <head>
    <title>Manage -Staff</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    </head>
    <body style="line-height: 0;">
        <div class="container" style="margin-left: 0; margin-top: 0;">
            <div class="row">
                    @include('menubar_staff')
            </div>
        </div>
        <div class="row" style="margin-top: 5px;">
            <div class="col-2">
            </div>
    <body style="line-height: 0;">
        <div class="container" style="margin-left: 8%; margin-top: 0;">
           <div class="row">
                <div class="col" style="margin-left: 18%; margin-top: 0;">
                    <div class="row" style="margin-top: 30px;">
                        <div class="col" style="text-align: center;">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr style="">
                                        <th>วัน\เวลา</th>
                                        <th>08:00 - 09:30</th>
                                        <th>09:30 - 11:00</th>
                                        <th>11:00 - 12:30</th>
                                        <th>13:00 - 14:30</th>
                                        <th>14:30 - 16:00</th>
                                        <th>16:00 - 17:30</th>
                                    </tr>
                                </thead>
                                <tbody style="">
                                    <tr> <!------ จันทร์ ------>
                                        <td><h5>จันทร์</h5></td>
                                        <td></td>
                                        <td>
                                        <button type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                    </tr>
                                    <tr> <!------ อังคาร ------>
                                        <td><h5>อังคาร</h5></td>
                                        <td><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                    </tr>
                                    <tr> <!------ พุธ ------>
                                        <td><h5>พุธ</h5></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                        <td></td>
                                    </tr>
                                    <tr> <!------ พฤหัสบดี ------>
                                        <td><h5>พฤหัสบดี</h5></td>
                                        <td></td>
                                        <td><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                        <td><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr> <!------ ศุกร์ ------>
                                        <td><h5>ศุกร์</h5></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                        <td></td>
                                        
                                        <td><p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div>
                <button type="button" class="btn btn-info" text-transform="inherit":  style="margin-right: 50px;"> แก้ไข </button>
                <button type="button" class="btn btn-warning"  style="margin-right: 50px;"> ยืนยัน </button>
            </div>
        @include('bottom')
    </body>
</html>
    </body>
</html> 
    </div>
    </body>
</html>


