

$(document).ready(function () {
    $('#listeTrait').DataTable();
    $('.dataTables_length').addClass('bs-select');
});

// attribuer départements
$('#validAttrDep').click(function () {

    var idAgent = $('#idAgent').val();

    var dep = '';

    $("#depToAttribute :selected").each(function(i, sel){
        dep =  dep.concat( $(sel).val(), ',');
    });

    if (dep.length>0) {

        dep = dep.substr(0, dep.length -1);

        $.ajax({
            method: "POST",
            url: window.cheminURLAjaxAttibuteDep,
            data: {
                'dep': dep,
                'id_agent': idAgent,
            },
            success: function(data){

                document.location.reload();
            }
        });
    }
});

//enlever département
function deleteDep(dep)
{

    $.ajax({
        method: "POST",
        url: window.cheminURLAjaxSuppDep,
        data: {
            'dep': dep,
        },
        success: function(data){

            document.location.reload();
        }
    });
}


$('#validShowDep').on('click', function() {
    var dep = $("#selectDep option:selected").val();

    if (!dep) {
        alert('Veuillez selectionner un déparement');
    } else {
        document.location = window.cheminURLAjaxShowDepHistoTraiment+'?dep='+dep;
    }
});



$('#validShowRes').on('click', function() {
    var res = $("#selectRes option:selected").val();

    if (!res) {
        alert('Veuillez selectionner un déparement');
    } else {
        document.location = window.cheminURLAjaxShowDepHistoTraiment+'?res='+res;
    }
});


