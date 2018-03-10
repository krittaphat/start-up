<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Rice Brand</a>
    </div>
    <ul class="nav navbar-nav">
      
         <li class="active" >
            <a href="#">เพิ่มข้อมูลผลผลิต</a>  
        </li>
        <li >
            <a href="#">ตรวจสอบการขายผลผลิต</a>  
        </li>
        <li >
            <a href="#">ติดต่อสอบถามข้อมูล</a>  
        </li>
    
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">บัญชีผู้ใช้
            <span class="caret"></span> </a>
            <ul class="dropdown-menu">
            <li><a href="#">แก้ไขข้อมูลส่วนตัว</a></li>
            <li><a href="#">ออกจากระบบ</a></li>
        </ul>    
        
           
    </ul>
  </div>
</nav>
  
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>กรอกรายละเอียด</h1><br/>
             <table class="table">
                <thead>
                  <tr>
                    <th>ชื่อผลผลิต</th>
                    <th>ผลผลิตที่มีอยู่(ตัน)</th>
                    <th>เพิ่มผลผลิต(ตัน)</th>
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td>ข้าว</td>
                    <td>1</td>
                    <td><input   type="text"  class="form-control-md"></td>
                  </tr>
                   <tr>
                    <td>ข้าวโพด</td>
                    <td>10</td>
                    <td><input   type="text"  class="form-control-md"></td>
                  </tr>
                   <tr>
                    <td>ข้าวโอ๊ด</td>
                    <td>5</td>
                    <td><input   type="text"  class="form-control-md"></td>
                  </tr>
                </tbody>

            </table>
               <button type="submit" class="btn btn-success">ยืนยัน</button>   
               <button type="button" class="btn btn-danger">ยกเลิก</button>  
        </div>
    </div>
</div>

</body>
</html>
