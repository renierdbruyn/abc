$('#go').keyup(function () {
    var Search_term = $(this).val();

    $.get('search.php', { Search_term: Search_term }, function (searchq) {
        $('#search_results').html(searchq);
    });

});