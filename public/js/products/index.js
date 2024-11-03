$(document).ready(function() {
    $('#tags').select2({
        maximumSelectionLength: 20,
        allowClear: true
    });
});

$(document).ready(function() {
    $('#categories').select2();
});
