/*
 * Eneable dataTables
 */

$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true,
        columDefs: [{
                targets: [5],
                orderData: [5, 4]
            }
        ]
    });
});