$(document).ready(function () {
    $('select[name="survey_id"]').change(function () {
        // CSAT 10,5,1
        // CES 1-7
        // NPS 0-10
        let metric = $(this).find('option:selected').data('metric');
        let scoreSelect = $("select[name='score']");
        scoreSelect.find('option').remove();

        if (metric == 'CSAT') {
            scoreSelect.append('<option value="' + 10 + '">' + 10 + '</option>');
            scoreSelect.append('<option value="' + 5 + '">' + 5 + '</option>');
            scoreSelect.append('<option value="' + 1 + '">' + 1 + '</option>');

        } else if (metric == 'CES') {
            for (let i = 0; i <= 7; i++) {
                scoreSelect.append('<option value="' + i + '">' + i + '</option>');
            }

        } else if (metric == 'NPS') {
            for (let i = 0; i <= 10; i++) {
                scoreSelect.append('<option value="' + i + '">' + i + '</option>');
            }
        }
    });
    if ($('select[name="survey_id"]')) {
        $('select[name="survey_id"]').change();
    }
});
