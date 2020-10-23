<!-- M -->
<!DOCTYPE html>
<html lang="en">
<html>
    <br>
    <head>
    <title>Show by date -Staff</title>
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
                <div class="col" style="margin-left: 18%; margin-top: 0;">
                    <div class="row">
                        <div class="col">
                            <center>
                            <h1>ตารางสอนรวม</h1>
                            </center>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col">
                            <select name="furnitureType1" id="" class="form-control">
                                <option selected>วัน</option>
                                <option value="1">จันทร์</option>
                                <option value="2">อังคาร</option>
                                <option value="3">พุธ</option>
                                <option value="4">พฤหัสบดี</option>
                                <option value="5">ศุกร์</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="furnitureType1" id="" class="form-control">
                                <option selected>ภาคเรียน</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="furnitureType1" id="" class="form-control">
                                <option selected>ปีการศึกษา</option>
                                <option value="1">2560</option>
                                <option value="2">2561</option>
                                <option value="3">2563</option>
                                <option value="4">2564</option>
                            </select>
                        </div>
                        <div class="col" style="text-align: center;">
                            <button type="button" class="btn btn-warning" style="margin-left: 140px;">ยืนยัน</button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col" style="text-align: center;">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr style="">
                                        <th>08:00 - 09:30</th>
                                        <th>09:30 - 11:00</th>
                                        <th>11:00 - 12:30</th>
                                        <th>13:00 - 14:30</th>
                                        <th>14:30 - 16:00</th>
                                        <th>16:00 - 17:30</th>
                                    </tr>
                                </thead>
                                <tbody style="">
                                    <tr> <!------ แถว1 ------>
                                        <td></td>
                                        <td><p>00123</p>
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
                                    <tr> <!------ แถว2 ------>
                                        <td><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                    </tr>
                                    <tr> <!------ แถว3 ------>
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
                                    <tr> <!------ แถว4 ------>
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
                                    <tr> <!------ แถว5 ------>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                        <td></td>
                                        <td><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                    </tr>
                                    <tr> <!------ แถว6 ------>
                                        <td><p>00123</p>
                                            <p>abcd</p>
                                            <p>T.....</p>
                                            <p>Room...</p></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><p>00123</p>
                                            <p>abcd</p>
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
        @include('bottom')
    </body>
</html>
