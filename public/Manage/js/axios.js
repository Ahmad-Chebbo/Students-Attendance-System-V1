// For adding the token to axios header (add this only one time).
var token = document.head.querySelector('meta[name="csrf-token"]');
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;

$(document).ready(function(){
    isAdding = false;
    function clear(){
        $("#input-name").val('');
        $("#desc").val('');
        $("#input-date").val('');
        $("#start-input").val('');
        $("#end-input").val('');
        $("#employee").empty();
    }
    function validation(){
        if($("#input-name").val() == null && $("#desc").val() == null && $("#input-date").val() == null && $("#start-input").val() == null && $("#end-input").val() == null){
            return false;
        }else{
            return true;
        }
    }
    // Book a Meeting
    $("#submit").click(function(){
         $("#submit").html("BOOKING...");
        $("#submit").attr('disabled','disabled');
        var employees = [];
        $("#employee").val().forEach(element => {
            employees.push(element);
        });
        var formData = new FormData();
        formData.append('title', $("#input-name").val());
        formData.append('desc', $("#desc").val());
        formData.append('date', $("#input-date").val());
        formData.append('start_time', $("#start-input").val());
        formData.append('finish_time', $("#end-input").val());
        for (let i = 0; i < employees.length; i++) {
            formData.append('members[]', employees[i]);
        }
        axios.post('/admin/meetings', formData).then((response)=>{
            console.log(response.data);
            $("#submit").html("BOOK MEETING");
            $("#submit").removeAttr('disabled');
            if(response.data['message'] == 'exist'){
                new Noty({
                    layout: 'topRight',
                    theme: 'metroui',
                    type: 'error',
                    text: "The room is already reserved with this date and times",
                    killer: true,
                    timeout: 2000,
                }).show();
            }
            else if(response.data['message'] == 'Success'){
                clear();
                new Noty({
                    layout: 'topRight',
                    theme: 'metroui',
                    type: 'success',
                    text: "Room booked successfully",
                    killer: true,
                    timeout: 2000,
                }).show();
            }

        }).catch((error)=>{
            console.log(error.response.data.errors.title.length);
            $("#submit").html("BOOK MEETING");
            $("#submit").removeAttr('disabled');
            // error.response.data.errors.forEach(element => {
            //     new Noty({
            //         layouts: 'topRight',
            //         theme: 'metroui',
            //         type: 'error',
            //         text: element,
            //         killer: true,
            //         timeout: 2000,
            //     }).show();
            // });
        });
    });
});



// if(error.response.data.errors.title != null){
//     error.response.data.errors.title.forEach(element => {
//         new Noty({
//             layouts: 'topRight',
//             theme: 'metroui',
//             type: 'error',
//             text: element,
//             killer: true,
//             timeout: 2000,
//         }).show();
//     });
// }
// if(error.response.data.errors.desc != null){
//     error.response.data.errors.desc.forEach(element => {
//         new Noty({
//             layouts: 'topRight',
//             theme: 'metroui',
//             type: 'error',
//             text: element,
//             killer: true,
//             timeout: 2000,
//         }).show();
//     });
// }
// if(error.response.data.errors.date != null){
//     error.response.data.errors.date.forEach(element => {
//         new Noty({
//             layouts: 'topRight',
//             theme: 'metroui',
//             type: 'error',
//             text: element,
//             killer: true,
//             timeout: 2000,
//         }).show();
//     });
// }
// if(error.response.data.errors.start_time != null){
//     error.response.data.errors.start_time.forEach(element => {
//         new Noty({
//             layouts: 'topRight',
//             theme: 'metroui',
//             type: 'error',
//             text: element,
//             killer: true,
//             timeout: 2000,
//         }).show();
//     });
// }
// if(error.response.data.errors.finish_time != null){
//     error.response.data.errors.finish_time.forEach(element => {
//         new Noty({
//             layouts: 'topRight',
//             theme: 'metroui',
//             type: 'error',
//             text: element,
//             killer: true,
//             timeout: 2000,
//         }).show();
//     });
// }
