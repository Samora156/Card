"use strict";
// Class definition

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var KTDatatableJsonRemoteDemo = function () {
    // Private functions

    // basic demo
    var demo = function () {
        var datatable = $('#kt_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: HOST_URL + '/admin/list-lembaga/data',
                pageSize: 10,
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [{
                field: 'id',
                title: '#',
                sortable: 'desc',
                width: 20,
                selector: true,
                textAlign: 'center',
            }, {
                field: 'nama',
                title: 'Lembaga',
                width: 250,
                template: function (data) {
                    var number = KTUtil.getRandomInt(1, 14);
                    var user_img = 'background-image:url(\'' + data.foto + '\')';

                    var output = '';
                    output = '<div class="d-flex align-items-center">\
                            <div class="symbol symbol-40 flex-shrink-0">\
                                <div class="symbol-label" style="' + user_img + '"></div>\
                            </div>\
                            <div class="ml-2">\
                                <a href="admin/siswa/' + data.id + '" class="text-dark-75 font-weight-bold line-height-sm text-hover-primary">' + data.nama + '</a>\
                                <br>\
                                <a href="admin/sekolah/' + data.sekolah_id + '" class="font-size-sm text-dark-50 text-hover-primary">' + data.sekolah + '</a>\
                            </div>\
                        </div>';

                    return output;
                },
            }, {
                field: 'alamat',
                title: 'Alamat',
            }, {
                field: 'telepon',
                title: 'Telepon',
            }, {
                field: 'email',
                title: 'Email',
            }, {
                field: 'website',
                title: 'Website',
            }],
        });



        $('#search_sekolah').on('change', function (e) {
            datatable.search($(this).val().toLowerCase(), 'sekolah_id');
        });
        $('#search_ajaran').on('change', function (e) {
            datatable.search($(this).val().toLowerCase(), 'tahun_ajaran');
        });
        $('#search_angkatan').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'angkatan');
        });
        $('#search_kelas').on('change', function () {
            datatable.search($(this).val().toLowerCase(), 'kelas');
        });

        $('#search_sekolah, #search_ajaran, #search_angkatan, #search_kelas').selectpicker();

        datatable.on(
            'datatable-on-check datatable-on-uncheck',
            function (e) {
                var checkedNodes = datatable.rows('.datatable-row-active').nodes();
                var count = checkedNodes.length;
                $('#kt_datatable_selected_records').html(count);
                if (count > 0) {
                    $('#kt_datatable_group_action_form').collapse('show');
                } else {
                    $('#kt_datatable_group_action_form').collapse('hide');
                }
            });

            // ubah angkatan
            $('#kt_datatable_fetch_modal').on('show.bs.modal', function(e) {
                var ids = datatable.rows('.datatable-row-active').
                nodes().
                find('.checkbox > [type="checkbox"]').
                map(function(i, chk) {
                    return $(chk).val();
                });
                var c = document.createDocumentFragment();
                for (var i = 0; i < ids.length; i++) {
                    var li = document.createElement('input');
                    li.setAttribute('name', 'ids[]');
                    li.setAttribute('value', ids[i]);
                    c.appendChild(li);
                }
                $('#kt_datatable_fetch_display').append(c);
            }).on('hide.bs.modal', function(e) {
                $('#kt_datatable_fetch_display').empty();
            });

            // hapus siswa
            $('#kt_datatable_fetch_modal2').on('show.bs.modal', function(e) {
                var ids = datatable.rows('.datatable-row-active').
                nodes().
                find('.checkbox > [type="checkbox"]').
                map(function(i, chk) {
                    return $(chk).val();
                });
                console.log(ids);
                var c = document.createDocumentFragment();
                for (var i = 0; i < ids.length; i++) {
                    var li = document.createElement('input');
                    li.setAttribute('name', 'ids[]');
                    li.setAttribute('value', ids[i]);
                    li.innerHTML = 'Selected record ID: ' + ids[i];
                    c.appendChild(li);
                }
                $('#kt_datatable_fetch_display2').append(c);
            }).on('hide.bs.modal', function(e) {
                $('#kt_datatable_fetch_display2').empty();
            });
        };

    return {
        // public functions
        init: function () {
            demo();
        }
    };
}();

jQuery(document).ready(function () {
    KTDatatableJsonRemoteDemo.init();
});

// delete function
$('body').on('click', '.delete', function () {
    var id = $(this).data('id');
    $.ajax({
        type: "POST",
        url: `${HOST_URL}/admin/siswa/hapus`,
        data: { id: id },
        dataType: 'json',
    });
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: 'Jika data terhapus tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data!'
    }).then((result)=>{
        if(result.isConfirmed){
            Swal.fire(
                'Terhapus!',
                'Data telah berhasil dihapus',
                'success'
            )
            location.reload();
        }
    })
});
