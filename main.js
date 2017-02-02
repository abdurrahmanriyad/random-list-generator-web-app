$(document).ready(function () {
    var $data = $('#data');

    $(".btn").on('click', function () {
        $data.empty();
        $.ajax({
            type: "POST",
            url: 'process.php',
            data:{action:'pressed'},
            success:function(list) {
                $.each(list, function(index, value){
                    $data.append(
                        '<tr>'+
                        '<td>' + index + '</td>'+
                        '<td>' + value + '</td>'+
                        '</tr>'
                    ).hide().show(200);
                });
            }

        });
    });
});