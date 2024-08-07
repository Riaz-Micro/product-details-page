(function ($) {
    'use strict';

     //Child-row
     function format(value) {

        return '<div class="gpsc-child-row gpsc-slider">Summary: ' + value + '</div>';
    }
    
    $(document).ready(function () {

        $(".gpsc-table-main").each(function () {

            var gmTblArg = $(this).data('tbl-args');
            var gmAttrData = $('.gpsc-child-attr-data').data('child-value');

            $(".gpsc-table thead tr")
                .clone(true)
                .addClass("filters")
                .appendTo(".gpsc-table thead");

            var table = $(".gpsc-table").DataTable({

                orderCellsTop: true,
                pageLength: parseInt(gmTblArg.page_length),
                bLengthChange: false,
                autoWidth: true,
                fixedColumns: (('1' === gmTblArg.col_sticky) ? (('left' === gmTblArg.sticky_which) ? { left: 2 } : { right: 1 }) : false),
                scrollX: ('1' === gmTblArg.header_sticky) ? true : false,
                paging: ('1' === gmTblArg.paging_show) ? true : false,
                order: [],
                language: {
                    info: '_START_ to _END_ of _TOTAL_',
                    searchPlaceholder: 'Any Column',
                },
                columnDefs: [('1' === gmTblArg.data_sort) ? { targets: "no-sort", orderable: false } : { targets: '_all', orderable: false }],
                initComplete: function () {

                    //Category filter
                    if ('1' === gmTblArg.cat_filter) {

                        this.api()
                            .columns('.gpsc-category')
                            .every(function () {
                                var column = this;
                                var level = $('<level>"Category:"<select class="gpsc-select"><option class="gpsc-option" value=""></option></select><level>')
                                var select = $('<select class="gpsc-select"><option class="gpsc-option" value="">Category</option></select>')
                                    .appendTo($(column.header()))
                                    .on("change", function () {
                                        var columnVal = $.fn.dataTable.util.escapeRegex($(this).val());
                                        column.search(columnVal).draw();
                                    });
                                var colCatArr = [];
                                column.data().unique().sort().each(function (d, j) {
                                    colCatArr.push($(d).text());
                                });
                                var flatArr = colCatArr.flatMap(item => item.split(',').map(str => str.trim()));
                                var uniqueArr = Array.from(new Set(flatArr));
                                $.each(uniqueArr, function (index, value) {
                                    select.append('<option class="gpsc-option" value="' + value + '">' + value + "</option>");
                                });

                                $(select).click(function (e) {
                                    e.stopPropagation();
                                });
                            });

                    }

                    //Search each columns
                    if ('1' === gmTblArg.search_col) {

                        var api = this.api();
                        api
                            .columns(['.gpsc-image', '.gpsc-name-column', '.gpsc-category', '.gpsc-tags', '.gpsc-reviews', '.gpsc-stock', '.gpsc-price', '.gpsc-buy'])
                            .eq(0)
                            .each(function (colIdx) {
                                var cell = $(".filters th").eq($(api.column(colIdx).header()).index());
                                var title = $(cell).text();
                                $(cell).html('<input type="text" placeholder="' + title + '" />');

                                $("input", $(".filters th").eq($(api.column(colIdx).header()).index()))
                                    .off("keyup change")
                                    .on("keyup change", function (e) {

                                        e.stopPropagation();
                                        $(this).attr('title', $(this).val());
                                        var regexr = '({search})';
                                        var cursorPosition = this.selectionStart;
                                        // Search the column for that value
                                        api
                                            .column(colIdx)
                                            .search((this.value != "") ? regexr.replace('{search}', '(((' + this.value + ')))') : "", this.value != "", this.value == "")
                                            .draw();
                                        $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                                    })
                            });

                    }
                },
            });

            table.columns.adjust().draw();

            //Child-Row
            if ('1' === gmTblArg.child_row) {

                $(this).on('click', 'td.gpsc-details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = table.row(tr);
                    if (row.child.isShown()) {

                        $('div.gpsc-slider', row.child()).slideUp(100, function () {
                            row.child.hide();
                            tr.removeClass('shown');
                        });

                    }
                    else {

                        row.child(format(tr.data('child-value'))).show();
                        tr.addClass('shown');
                        $('div.gpsc-slider', (row.child()), 'no-padding').slideDown(100);

                    }
                });

            }

            // Header Sticky
            if ('1' === gmTblArg.header_sticky) {

                new $.fn.dataTable.FixedHeader(table);

            }

            //Overflow Auto scrollbar-hide
            var parent = document.getElementById('gpsc-table-responsive');
            var child = document.getElementById('gpsc-table_wrapper');
            child.style.paddingRight = child.offsetWidth - child.clientWidth + "px";

        });

    });

})(jQuery);