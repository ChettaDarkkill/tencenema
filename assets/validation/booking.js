
    $( document ).ready(function() {
        $("#my_booking").validate({
              rules: {
                      name1: "required",
                      name2 : "required",
                      name3 : "required",
                      name4 : "required",
                	  name5 : "required",
                	  name6 : "required",
                  },

                  messages: {
                      name1: "<p style = 'color:red;'>กรุณากรอก<p>",
                      name2 : "<p style = 'color:red;'>กรุณากรอก<p>",
                      name3 : "<p style = 'color:red;'>กรุณากรอก<p>",
                      name4 : "<p style = 'color:red;'>กรุณากรอก<p>",
                      name5 : "<p style = 'color:red;'>กรุณากรอก<p>",
                      name6: "<p style = 'color:red;'>กรุณากรอก<p>"
                  },
        });
    });

