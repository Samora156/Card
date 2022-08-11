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
                source: HOST_URL + '/user/pengguna/data',
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
            columns: [
            // {
            //     field: 'id',
            //     title: '#',
            //     sortable: 'desc',
            //     width: 20,
            //     selector: true,
            //     textAlign: 'center',
            // }, 
            
            {
                field: 'nama',
                title: 'Nama',
                width: 230,
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
                                <a href="admin/sekolah/' + data.jabatan + '" class="font-size-sm text-dark-50 text-hover-primary">' + data.jabatan + '</a>\
                            </div>\
                        </div>';

                    return output;
                },
            }, {
                field: 'jenis_kelamin',
                title: 'Jenis Kelamin',
            }, {
                field: 'tanggal_bergabung',
                title: 'Tanggal Bergabung',
                width: 160,
            }, {
                field: 'tanggal_berakhir',
                title: 'Tanggal Berakhir',
                width: 150,
            }, {
                field: 'no_id',
                title: 'No ID',
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
                        <a href="user/pengguna/' + data.id + '/show" class="btn btn-sm btn-clean btn-icon mr-2" title="Detail">\
                            <span class="svg-icon svg-icon-success svg-icon-lg">\
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
                                        <rect x="0" y="0" width="24" height="24"/>\
                                        <path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3"/>\
                                        <path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>\
                                    </g>\
                                </svg>\
                            </span>\
                        </a>\
                        <a href="user/pengguna/' + data.id + '/edit" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit">\
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
    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: 'Data terhapus tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result)=>{
        if(result.isConfirmed){
            $.ajax({
                type: "POST",
                url: 'user/pengguna/hapus',
                data: { id: id },
                dataType: 'json',
                success: function(){
                    location.reload()
                }
            });
        }
    })
});
