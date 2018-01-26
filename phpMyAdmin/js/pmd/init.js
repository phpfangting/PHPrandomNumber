/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Initialises the data required to run PMD, then fires it up.
 */

<<<<<<< HEAD
var j_tabs, h_tabs, contr, display_field, server, db, selected_page, pmd_tables_enabled;
=======
var j_tabs, h_tabs, contr, display_field, server, db, token, selected_page, pmd_tables_enabled;
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65

AJAX.registerTeardown('pmd/init.js', function () {
    $(".trigger").unbind('click');
});

AJAX.registerOnload('pmd/init.js', function () {
    $(".trigger").click(function () {
        $(".panel").toggle("fast");
        $(this).toggleClass("active");
        $('#ab').accordion("refresh");
        return false;
    });
    var tables_data = JSON.parse($("#script_tables").html());

    j_tabs             = tables_data.j_tabs;
    h_tabs             = tables_data.h_tabs;
    contr              = JSON.parse($("#script_contr").html());
    display_field      = JSON.parse($("#script_display_field").html());

    server             = $("#script_server").html();
    db                 = $("#script_db").html();
<<<<<<< HEAD
=======
    token              = $("#script_token").html();
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
    selected_page      = $("#script_display_page").html() === "" ? "-1" : $("#script_display_page").html();
    pmd_tables_enabled = $("#pmd_tables_enabled").html() === "1";

    Main();

    if (! pmd_tables_enabled) {
        DesignerOfflineDB.open(function(success) {
            if (success) {
                Show_tables_in_landing_page(db);
            }
        });
    }
});
