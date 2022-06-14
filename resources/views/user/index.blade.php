@extends('layouts.app')

@section('content')
    <div>
        <div class="card-header text-center"><h2>Thông tin tài khoản</h2></div>

        <div class="row mt-3">
            <div class="col-4">
                <div class="d-flex justify-content-center align-items-center">
{{--                    <img class="rounded w-75" id="bind_avatar" onclick="ChangeAvatar();">--}}
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-center align-items-center">
                            <input type="file" class="form-control w-75" id="avatar_upload" name="avatar_upload">
                        </div>
                    </form>
                </div>
                <div class="row mb-3 p-0 m-0">
                    <div role="alert" id="label_update"></div>
                </div>
            </div>

            <div class="col-8">
                <form method="post" id="form_info">
                    <div class="row mb-3">
                        <div class="col-sm-2">
                            Họ và tên
                        </div>
                        <div class="col-sm-8">
                            <input id="bind_name" name="name" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-2">
                            Điện thoại
                        </div>
                        <div class="col-sm-8">
                            <input id="bind_macs" name="phone" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-2">
                            Email
                        </div>
                        <div class="col-sm-8">
                            <input id="bind_email" name="email" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-2">
                            Token
                        </div>
                        <div class="col-sm-8">
                            <input id="bind_license" name="api_token" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="row mb-3 d-flex justify-content-end align-items-end">
                        <div class="col-2">
                            <input class="form-control btn btn-primary" onclick="PostDataUser()" type="button" value="Lưu">
                        </div>
                        <div class="col-2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2"></div>
                        <div role="alert" id="label_update_user"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var data_user = {!! $data !!};

        function GetDataUser(){
            console.log(data_user);
            var payload = CheckArrayOrObjectBindData(data_user.results);

            BindTextValue("bind_name",payload ,"name");
            BindTextValue("bind_license",payload ,"license");
            BindTextValue("bind_macs",payload ,"macs");
            BindTextValue("bind_email",payload ,"email");

            // var src = document.getElementById("bind_avatar");
            // src.setAttribute("src", payload.avatar_upload);
        }

        // function PostDataUser(){
        //     axios.post('/api/user/update',{
        //         _id: data_user,
        //         name: document.getElementById('bind_name').value,
        //         email: document.getElementById('bind_email').value,
        //         phone: document.getElementById('bind_macs').value,
        //     })
        //         .then(function (response) {
        //             // handle success
        //             GetDataUser();
        //             show_result("label_update_user", response.data.message, "col-8 alert alert-success text-center");
        //         })
        //         .catch(function (error) {
        //             // handle error
        //             console.log(error);
        //             let stringdata = error.response.data.message;
        //             let message = stringdata[Object.keys(stringdata)[0]][0];
        //             show_result("label_update_user", message, "col-8 alert alert-danger text-center");
        //         })
        //         .then(function () {
        //             // always executed
        //         });
        // }

        // function ChangeAvatar()
        // {
        //     $('#avatar_upload').change( (event) => {
        //
        //         var formData = new FormData();
        //         var imagefile = document.querySelector('#avatar_upload');
        //         formData.append("avatar_upload", imagefile.files[0]);
        //
        //         axios.post('/api/user/image', formData, {
        //             headers: {
        //                 'Content-Type': 'multipart/form-data'
        //             }
        //         })
        //             .then(function (response) {
        //                 console.log(response);
        //                 GetDataUser();
        //                 show_result("label_update", response.data.message, "col-12 h-100 alert alert-success text-center");
        //             })
        //             .catch(function (error) {
        //                 console.log(error);
        //                 show_result("label_update", error.response.message, "col-12 h-100 alert alert-danger text-center");
        //             });
        //     });
        // }

        function RegisterEvents()
        {
            $('body').click(function(e)
            {
                if(!$(event.target).closest('#form_info').length)
                {
                    ReadOnlyElement("bind_name", true);
                    ReadOnlyElement("bind_email", true);
                    ReadOnlyElement("bind_macs", true);
                }else{
                    ReadOnlyElement("bind_name", false);
                    ReadOnlyElement("bind_email", false);
                    ReadOnlyElement("bind_macs", false);
                }
            });
        }

        window.onload = function(){
            HisSpinner(false);
            // RegisterEvents();
            GetDataUser();
            // ChangeAvatar();

        };
    </script>
@endsection


