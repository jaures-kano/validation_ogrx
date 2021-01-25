
function validSearch(site, id)
{
    if (site && id) {
        $.ajax({
            method: "POST",
            url: window.URLAjaxValidSerach,

            data: {
                'site': site,
                'id': id,
            },
            success: function(data){

                //document.location.reload();
            }
        });
    }
}


function validAllCommentaires(id)
{
    var commvali = concatCommentaires();
    var codens = $("#codens_" + id).text().trim();
    //alert(commvali);

    if (commvali) {
        $.ajax({
            method: "POST",
            url: window.URLAjaxValidSerach,

            data: {
                'codens': codens,
                'com' : commvali,
                'id': id,
            },
            success: function(data){

                //document.location.reload();
            }
        });
    }
}



function concatCommentaires()
{
    var comvali = '';
    var currentYear = (new Date).getFullYear();
    var dateSv = $('#date_sv').val();
    //alert(dateSv);

    if ($('#validGoogle').is(":checked")) {

        comvali += 'Validé Google ' + currentYear + '/ ';
    }
    if ($('#validGoogleMap').is(":checked")) {

        if (!dateSv) {
            alert('Commentaire Street view nécessite une date');
            return;
        }

        comvali += 'Validé street view ' + dateSv + '/ ';
    }
    if ($('#validSoc').is(":checked")) {

        comvali += 'Validé soc.com ' + currentYear + '/ ';
    }
    if ($('#validTel').is(":checked")) {

        comvali += 'Validé Téléphone ' + currentYear + '/ ';
    }

    if ($('#validSite').is(":checked")) {

        comvali += 'Validé site ' + currentYear + '/ ';
    }

    return comvali;
}


