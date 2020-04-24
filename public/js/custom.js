$(document).ready(function () {
  //Initialize sidenav
  $('.sidenav').sidenav();
  //Initialize modals
  $('.modal').modal();


  $('.showModal').on('click', function () {
    var taskID = $(this).attr("data-id");
    var taskTitle = $(this).attr("data-title");
    var taskDescription = $(this).attr("data-description");
    var taskDue = $(this).attr("data-due");

    $(".task-title").text(taskTitle);
    $(".task-description").text(taskDescription);
    $(".task-due").text(taskDue);
    $('#showModalContent').modal();
  })


  /*   $('.addModal').on('click', function () {
  
      var taskTitle = $("#add-task-title").val();
      var taskDescription = $("#add-task-description").val();
      var taskDue = $("#add-due-date").val();
  
      $.ajax({
        url: "/tasks/store",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function (data) {
  
          var html = '';
  
          if (data.error) {
            console.log(data.error);
  
          } else if (data.success) {
            console.log(data.succes);
  
          }
  
        }
      })
  
  
    }) */


});
