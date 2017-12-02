CodeMirror.sqlLint = function(text, updateLinting, options, cm) {

    // Skipping check if text box is empty.
    if(text.trim() == "") {
        updateLinting(cm, []);
        return;
    }

    function handleResponse(response) {
        var found = [];
        for (var idx in response) {
            found.push({
                from: CodeMirror.Pos(
                    response[idx].fromLine, response[idx].fromColumn
                ),
                to: CodeMirror.Pos(
                    response[idx].toLine, response[idx].toColumn
                ),
<<<<<<< HEAD
                messageHTML: response[idx].message,
=======
                message: response[idx].message,
>>>>>>> 963d7f7adf76dfd7a7dbc54b828074e76cfb4d65
                severity : response[idx].severity
            });
        }

        updateLinting(cm, found);
    }

    $.ajax({
        method: "POST",
        url: "lint.php",
        dataType: 'json',
        data: {
            sql_query: text,
            token: PMA_commonParams.get('token'),
            server: PMA_commonParams.get('server'),
            options: options.lintOptions,
            no_history: true,
        },
        success: handleResponse
    });
}
