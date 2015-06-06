    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
	                <div class="col-md-2"><button style = "display:none;" id = "show_success" data-toggle="page-alert" data-toggle-id="1" class="btn btn-success btn-block">Show success</button></div>
	                <div class="col-md-2"><button style = "display:none;" id = "show_wrong" data-toggle="page-alert" data-toggle-id="4" class="btn btn-danger btn-block">Show danger</button></div>
                </div>
            </div>
        </div>
    </div>
    <script>
    	$(document).ready(function() {
            <?php if($this->session->flashdata('show_success')){ ?>
             $("#show_success").click();
             $("#message_success").text('คุณบันทึกข้อมูลเรียบร้อยแล้ว');
           <?php } ?>
           <?php if($this->session->flashdata('show_success_login')){ ?>
             $("#show_success").click();
             $("#message_success").text('คุณลงชื่อเข้าใช้แล้ว');
           <?php } ?>
           <?php if($this->session->flashdata('cannot_login')){ ?>
             $("#show_wrong").click();
             $("#message_wrong").text('username หรือ password ผิดลองใหม่อีกครั้ง');
           <?php } ?>
        });
    </script>
    <script src = "assets/validation/register.js"></script>
</body>
</html>