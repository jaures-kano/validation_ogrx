



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



