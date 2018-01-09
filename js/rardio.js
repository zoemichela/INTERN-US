
    $(function () {
        $("input[name='option']").click(function () {
            if ($("#checked-student").is(":checked")) {
                $("#student-login").show();
            } 
            if ($("#checked-company").is(":checked")) {
                $("#company-login").show();
            }
            else {
            	$("#student-login").hide();
                $("#company-login").hide();
            }
        });

    });