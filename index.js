/* popup background height */
$(function(){
    let body_height = $("body").css("height");
    $(".popups").css("height", body_height);
});


/* open/close create accaunt popup */
$(function(){
    let button = $("#create_new_acc");
    button.click(function(event){
        event.preventDefault();

        $(".popups").toggleClass("show");
        $(".popups").toggleClass("hide");

        $(".form#edit_account").addClass('hide');
        $(".form#edit_account").removeClass('show');

        $(".form#creating_account").addClass('show');
        $(".form#creating_account").removeClass('hide');


    });
});


$(function(){
    let button = $(".close_creating_form");
    button.click(function(event){
        event.preventDefault();

        $(".popups").toggleClass("show");
        $(".popups").toggleClass("hide");
    });
});


/* validation */
function validation(data){
    let is_no_problem = true;

    data.forEach(element => {
        if ( element[1] == true && ($(element[0]).val() == "" || $.trim(element[0].val()) === '' ) ){
            $(element[0]).addClass("error");
            is_no_problem = false;
        }
    });


    if ( is_no_problem ){
        return true;
    } else {
        return false;
    }
};


/* confirm create acc form */
$(function(){
    let button = $("#creating_account #button_cont button");
    button.click(function(event){
        event.preventDefault();

        /* input name / input object / is important? */
        let form_data = new Map([
            ['First_Name', [$("#creating_account input[name=First_Name]"), true]],
            ['Last_Name', [$("#creating_account input[name=Last_Name]"),true]],
            ['E_mail', [$("#creating_account input[name=E_mail]"), true]],
            ['Telephone_number1', [$("#creating_account input[name=Telephone_number1]"), false]],
            ['Telephone_number2', [$("#creating_account input[name=Telephone_number2]"), false]],
            ['Telephone_number3', [$("#creating_account input[name=Telephone_number3]"), false]],
            ['Position_cont', [$("#creating_account input[name=Position_cont]"), false]],
            ['Company_Name', [$("#creating_account input[name=Company_Name]"), false]]
        ]);


        if(validation(form_data)){
            /* ajax */

            $.ajax({
                url:'add_in_table.php',
                method: 'POST',
                dataType: 'html',
                data:{
                    First_Name: $(form_data.get('First_Name')[0]).val(),
                    Last_Name: $(form_data.get('Last_Name')[0]).val(),
                    E_mail: $(form_data.get('E_mail')[0]).val(),
                    Telephone_number1: $(form_data.get('Telephone_number1')[0]).val(),
                    Telephone_number2: $(form_data.get('Telephone_number2')[0]).val(),
                    Telephone_number3: $(form_data.get('Telephone_number3')[0]).val(),
                    Position_cont: $(form_data.get('Position_cont')[0]).val(),
                    Company_Name: $(form_data.get('Company_Name')[0]).val(),
                },
                success: function(){
                    location.reload();
                },
            });
            
        }
    });

    $(".form_cont input").on('input keyup', function(event){
        event.preventDefault();

        $(this).removeClass("error");

    });

});

/* delete account */
$(function(){
    let button = $(".buttons_block .trash");
    button.click(function(event){
        event.preventDefault();

        let account_id = $(this).parents(".accaunt").attr('data-account_id');
        $.ajax({
            url:'drop_from_table.php',
            method: 'POST',
            dataType: 'html',
            data:{
                account_id: account_id,
            },
            success: function(){
                console.log('deleted');
            }
        });

        $('.accaunt').each(function(index, el){
            if( $(el).attr('data-account_id') == account_id ){
                $(el).remove();
            };
        });

    });
});


/* open/close edit form */
$(function(){
    let button = $(".buttons_block .edit");
    button.click(function(event){
        event.preventDefault();

        $(".form#edit_account #First_Name input").attr("value", $(this).parents('.accaunt').find('#First_Name h2').html());
        $(".form#edit_account #Last_Name input").attr("value", $(this).parents('.accaunt').find('#Last_Name h2').html());
        $(".form#edit_account #E_mail input").attr("value", $(this).parents('.accaunt').find('#E_mail h2').html());
        $(".form#edit_account #Position_cont input").attr("value", $(this).parents('.accaunt').find('#Position_block h2').html());
        $(".form#edit_account #Company_Name input").attr("value", $(this).parents('.accaunt').find('#Company_name h2').html());

        $(".form#edit_account #Telephone_number1 input").attr("value", $(this).parents('.accaunt').find('#Telephone_number #tel1').html());
        $(".form#edit_account #Telephone_number2 input").attr("value", $(this).parents('.accaunt').find('#Telephone_number #tel2').html());
        $(".form#edit_account #Telephone_number3 input").attr("value", $(this).parents('.accaunt').find('#Telephone_number #tel3').html());

        $(".form#edit_account #button_cont button").attr('data-delete_id', $(this).parents('.accaunt').attr('data-account_id'));

        $(".popups").toggleClass("show");
        $(".popups").toggleClass("hide");

        $(".form#edit_account").addClass('show');
        $(".form#edit_account").removeClass('hide');

        $(".form#creating_account").addClass('hide');
        $(".form#creating_account").removeClass('show');

    });
});

/* confirm edit account form */
$(function(){
    let button = $("#edit_account #button_cont button");
    button.click(function(event){
        event.preventDefault();

        /* input name / input object / is important? */
        let form_data = new Map([
            ['First_Name', [$("#edit_account input[name=First_Name]"), true]],
            ['Last_Name', [$("#edit_account input[name=Last_Name]"),true]],
            ['E_mail', [$("#edit_account input[name=E_mail]"), true]],
            ['Telephone_number1', [$("#edit_account input[name=Telephone_number1]"), false]],
            ['Telephone_number2', [$("#edit_account input[name=Telephone_number2]"), false]],
            ['Telephone_number3', [$("#edit_account input[name=Telephone_number3]"), false]],
            ['Position_cont', [$("#edit_account input[name=Position_cont]"), false]],
            ['Company_Name', [$("#edit_account input[name=Company_Name]"), false]]
        ]);


        if(validation(form_data)){
            /* ajax */

            $.ajax({
                url:'edit_data.php',
                method: 'POST',
                dataType: 'html',
                data:{
                    First_Name: $(form_data.get('First_Name')[0]).val(),
                    Last_Name: $(form_data.get('Last_Name')[0]).val(),
                    E_mail: $(form_data.get('E_mail')[0]).val(),
                    Telephone_number1: $(form_data.get('Telephone_number1')[0]).val(),
                    Telephone_number2: $(form_data.get('Telephone_number2')[0]).val(),
                    Telephone_number3: $(form_data.get('Telephone_number3')[0]).val(),
                    Position_cont: $(form_data.get('Position_cont')[0]).val(),
                    Company_Name: $(form_data.get('Company_Name')[0]).val(),
                    Account: $(this).attr('data-delete_id'),
                },
                success: function(){
                    location.reload();
                },
            });
            
        }
    });
});