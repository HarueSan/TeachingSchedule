<!-- M -->
<!DOCTYPE html>
<html lang="en">
<html>
    <br>
    <head>
    <title>Show by teacher -Staff</title>
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
                            <p>เรียกดูจากชื่อของอาจารย์</p>
                            </center>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-6">
                        <select name="furnitureType1" id="" class="form-control">
                                <option selected>อาจารย์</option>
                                <option value="1">ผู้ช่วยศาสตราจารย์ ดร.ดุษฎี ประเสริฐธิติพงษ์</option>
                                <option value="2">รองศาสตราจารย์ ดร.จีรยุทธ ไชยจารุวณิช</option>
                                <option value="3">อาจารย์ ดร.รัศมีทิพย์ วิตา </option>
                                <option value="4">ผู้ช่วยศาสตราจารย์ ดร.จักริน ชวชาติ </option>
                                <option value="5">ผู้ช่วยศาสตราจารย์ ดร.ศุภกิจ อาวิพันธุ์ </option>
                                <option value="1">ผู้ช่วยศาสตราจารย์ ดร.เมทินี เขียวกันยะ</option>
                                <option value="2">อาจารย์ ดร.วิจักษณ์ ศรีสัจจะเลิศวาจา </option>
                                <option value="3">อาจารย์ ดร.วรวุฒิ ศรีสุขคำ</option>
                                <option value="4">ผู้ช่วยศาสตราจารย์ ดร.ชุมพล บุญคุ้มพรภัทร </option>
                            </select>
                        </div>
                        <div class="col-2" style="text-align: center;">
                            <button type="button" class="btn btn-warning" style="margin-left: 372px">ยืนยัน</button>
                        </div>
                    </div>
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
                                        <td><p>00123</p>
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
