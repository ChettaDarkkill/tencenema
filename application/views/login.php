
    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <center><img src = 'assets/img/banner.jpg'></center>
            <br/>
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">ลงชื่อเข้าใช้</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action = "index.php/login/check_login" method = "post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="ชื่อผุ้ใช้">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                    <input type = "submit" class = "btn btn-success" value = "ลงชื่อเข้าใช้"/>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                           ถ้าคุณยังไม่มี Account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            กดเพื่อลงทะเบียนที่นี่
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                     <center><img src = 'assets/img/banner.jpg'></center><br/>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">ลงทะเบียนเพื่อเข้าใช้งานระบบ</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">ลงชื่อเข้าใช้</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action = "index.php/register/insert_user" method = "post">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">ชื่อ</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="ชื่อ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">นามสกุล</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="นามสกุล">
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">ชื่อผู้ใช้</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">รหัสผ่าน</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="รหัสผ่าน">
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">ยืนยันรหัสผ่าน</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="conpassword" placeholder="ยืนยันรหัสผ่าน">
                                    </div>
                                </div>
                                    

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <!--<button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>--> 
                                        <input type = "submit" value = "ลงทะเบียน" class = "btn btn-info"/>
                                    </div>
                                </div>   
                            </form>
                         </div>
                    </div> 
         </div> 
    </div>


    