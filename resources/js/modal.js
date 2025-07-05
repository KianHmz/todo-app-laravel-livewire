$(document).ready(function () {

    $(".edit-task-btn").on("click", function (e) {
        e.preventDefault();

        const taskId = $(this).data("id");
        const taskTitle = $(this).data("title");

        $("#task_id").val(taskId);
        $("#title").val(taskTitle);

        $("#editTaskModal").removeClass("hidden").addClass("flex");
    });

    $(".closeModalBtn, #cancelEditBtn").on("click", function () {
        $("#editTaskModal").removeClass("flex").addClass("hidden");
    });

    $("#editTaskForm").on("submit", function (e) {
        e.preventDefault();

        const taskId = $("#task_id").val();
        const title = $("#title").val();
        const status = $("#status").val();

        $.ajax({
            url: `/tasks/${taskId}/update`,
            type: "PUT",
            data: {
                _token: $('meta[name="csrf-token"]').attr("content"),
                title: title,
                status: status,
            },
            success: function (response) {
                location.reload();
            },
            error: function (xhr) {
                alert("Error updating task");
            },
        });
    });

});
