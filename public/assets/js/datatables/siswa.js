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
                source: HOST_URL + '/admin/siswa/data',
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
                title: 'Siswa',
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
                field: 'tahun_ajaran',
                title: 'Tahun Ajaran',
            }, {
                field: 'angkatan',
                title: 'Angkatan',
            }, {
                field: 'kelas',
                title: 'Kelas',
            }, {
                field: '',
                title: 'Aksi',
                sortable: false,
                width: 125,
                overflow: 'visible',
                textAlign: 'center',
                autoHide: false,
                template: function (data) {
                    return '\
                        <a href="admin/siswa/' + data.id + '/edit" class="btn btn-sm d-inline" title="Edit">\
                            <span class="svg-icon svg-icon-warning svg-icon-lg">\
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"/>\
                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
                                    </g>\
                                </svg>\
                            </span>\
                        </a>\
                        <a href="javascript:;" data-id="' + data.id + '" data-toggle="tooltip" data-original-title="Delete" class="btn btn-sm btn-clean btn-icon delete" title="Hapus">\
                            <span class="svg-icon svg-icon-danger svg-icon-lg">\
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"/>\
                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
                                    </g>\
                                </svg>\
                            </span>\
                        </a>\
        ';
                },
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
