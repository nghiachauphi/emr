@extends('layouts.app')

@section('content')
    <div class="w-100">
        <div class="row p-0 m-0 all-center">
            <div class="col-sm-4">
                <label class="form-label">Chọn tên phiếu</label>
                <select id="his_select" class="form-control select-2">
                    <option value="one">First</option>
                    <option value="two">Second (disabled)</option>
                    <option value="three">Third</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label class="form-label">ID EMR</label>
                <input class="form-control" id="id_emr_show" name="id_emr_show" readonly>
            </div>
        </div>

        <div class="row p-0 m-0 all-center">
            <form class="m-3" method="post" action="{{route('emr_list_create')}}">
                @csrf
                <input id="id_emr" name="id_emr" hidden>
                <div id="generate_html" >

                </div>
            </form>
        </div>
    </div>
@endsection

<script type="text/javascript">
    var data_tmp = new Map();

    data_tmp.set("62a547aaf54b00002a005d82", {
        "_id": "62a547aaf54b00002a005d82",
        "id_emr": "emr_0001",
        "name": "Phiếu cam kết điều trị",
        "index": 1,
        "collection": "emr_0001",
        "description": "Phiếu cam kết điều trị",
        "mrt_url": "mrt/emr_0001-phieucapketdieutri.mrt",
        "json_properties": {
            "id_hs": {
                "required": "required|max:50|unique:emr_list",
                "show": true,
                "name": "id_hs",
                "description": "Mã hồ sơ",
                "views": {
                }
            },
            "id_bn": {
                "required": "required",
                "show": true,
                "name": "id_bn",
                "description": "Mã bệnh nhân",
                "views": {
                }
            },
            "tencoso": {
                "required": "required",
                "show": true,
                "name": "tencoso",
                "description": "Tên cơ sở",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "1,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "tenbv": {
                "required": "required",
                "show": true,
                "name": "tenbv",
                "description": "Tên bệnh viện",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "1,2",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "khoa": {
                "required": "required",
                "show": true,
                "name": "khoa",
                "description": "Tên khoa",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "2,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "tenphieu": {
                "required": "required",
                "show": true,
                "name": "tenphieu",
                "description": "Tên phiếu",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "3,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "kinhgui": {
                "required": "required",
                "show": true,
                "name": "kinhgui",
                "description": "Kính gửi",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "5,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "soba": {
                "required": "required",
                "show": true,
                "name": "soba",
                "description": "Số bệnh án",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "6,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "hotenbn": {
                "required": "required",
                "show": true,
                "name": "hotenbn",
                "description": "Họ tên bệnh nhân",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "7,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "tuoi": {
                "required": "required",
                "show": true,
                "name": "tuoi",
                "description": "Tuổi",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "7,2",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "gioitinh": {
                "required": "required",
                "show": true,
                "name": "gioitinh",
                "description": "Giới tính",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "7,3",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "dantoc": {
                "required": "required",
                "show": true,
                "name": "dantoc",
                "description": "Dân tộc",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "8,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "sodienthoai": {
                "required": "required",
                "show": true,
                "name": "sodienthoai",
                "description": "Số điện thoại",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "8,2",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "nghenghiep": {
                "required": "required",
                "show": true,
                "name": "nghenghiep",
                "description": "Nghề nghiệp",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "8,3",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "diachi": {
                "required": "required",
                "show": true,
                "name": "diachi",
                "description": "Địa chỉ",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "9,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "ngaythangnam": {
                "required": "",
                "show": true,
                "name": "ngaythangnam",
                "description": "Ngày tháng năm",
                "views": {
                    "tags": "datetime-local",
                    "list_type": "string",
                    "search": false,
                    "location": "10,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            }
        }
    });

    data_tmp.set("62a547aaf54b00002a005d83",  {
        "_id": "62a547aaf54b00002a005d83",
        "id_emr": "emr_0004",
        "name": "Giấy xác nhận xin ra viện",
        "index": 1,
        "collection": "emr_0004",
        "description": "Giấy xác nhận xin ra viện",
        "mrt_url": "mrt/emr_0004-giayxinravien.mrt",
        "json_properties": {
            "image": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required",
                "show": true,
                "name": "image",
                "description": "Hình ảnh",
                "views": {
                    "tags": "",
                    "list_type": "",
                    "search": false,
                    "location": "1,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "tencoso": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "tencoso",
                "description": "Tên cơ sở",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "1,2",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "tenbv": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "tenbv",
                "description": "Mã khoa ",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "2,2",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "tenphieu": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "tenphieu",
                "description": "Tên phiếu",
                "views": {
                    "tags": "text-center",
                    "list_type": "string",
                    "search": false,
                    "location": "3,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "idbn": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "idbn",
                "description": "ID bệnh nhân",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "1,2",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "soba": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "name": "soba",
                "required": "required|max:50",
                "show": true,
                "description": "Số bệnh án",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "2,3",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "hoten": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "hoten",
                "description": "Họ tên",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "4,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "gioitinh": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "name": "gioitinh",
                "required": "required|max:50",
                "show": true,
                "description": "Giới tính",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "4,2",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "namsinh": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "name": "namsinh",
                "required": "required|max:50",
                "show": true,
                "description": "Năm sinh",
                "views": {
                    "tags": "date",
                    "list_type": "string",
                    "search": false,
                    "location": "4,3",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "diachi": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "diachi",
                "description": "Địa chỉ",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "5,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "benhnhan": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "benhnhan",
                "description": "Là người thân bệnh nhân",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "6,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "gioitinh2": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "gioitinh2",
                "description": "Giới tính bệnh nhân",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "6,2",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "namsinh2": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "namsinh2",
                "description": "Năm sinh bệnh nhân",
                "views": {
                    "tags": "date",
                    "list_type": "string",
                    "search": false,
                    "location": "6,3",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "vaovienluc": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "vaovienluc",
                "description": "Thời gia vào viện",
                "views": {
                    "tags": "date-time",
                    "list_type": "string",
                    "search": false,
                    "location": "7,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "khoa": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "khoa",
                "description": "Mã khoa ",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "8,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "chandoan": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "chandoan",
                "description": "Chẩn đoán",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "9,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "ketqua": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "ketqua",
                "description": "Kết quả",
                "views": {
                    "tags": "text",
                    "list_type": "string",
                    "search": false,
                    "location": "10,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "ravienluc": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "ravienluc",
                "description": "Thời gian ra viện",
                "views": {
                    "tags": "date-time",
                    "list_type": "string",
                    "search": false,
                    "location": "11,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            },
            "ngaythangnam": {
                "type": "varchar(50)",
                "null": false,
                "default": "",
                "key": "",
                "required": "required|max:50",
                "show": true,
                "name": "ngaythangnam",
                "description": "Mã khoa ",
                "views": {
                    "tags": "date",
                    "list_type": "string",
                    "search": false,
                    "location": "12,1",
                    "func_update": true,
                    "func_del": true,
                    "data_select": {
                    }
                }
            }
        }
    });

    var data_select = [data_tmp.get("62a547aaf54b00002a005d82"), data_tmp.get("62a547aaf54b00002a005d83")];

    function GenerateForm(data, id_form)
    {
        var elementForm = document.getElementById(id_form);

        var properties = data.hasOwnProperty("json_properties")?data["json_properties"]:null;

        if(properties == null)
        {
            return false;
        }

        for(let element in properties)
        {
            let obj_value =properties[element];
            let view = obj_value["views"];

            if(!obj_value["show"])
            {
                continue;
            }

            let divRow = document.getElementById("row_" + GetLocation(view["location"]));
            if(divRow == null)
            {
                divRow = document.createElement("div");
                divRow.setAttribute("class","row mb-3");
                divRow.setAttribute("id","row_" + GetLocation(view["location"]));
            }

            let divCol = document.createElement("div");
            divCol.setAttribute("class","col-sm");
            divCol.setAttribute("id","col_" + GetLocation(view["location"], "col"));

            let labelTag = document.createElement("label");
            labelTag.innerText = obj_value["description"];

            let inputTag = document.createElement("input");

            inputTag.setAttribute("type",(view["tags"]));
            inputTag.setAttribute("class","form-control");
            inputTag.setAttribute("id",element);
            inputTag.setAttribute("name",element);
            if(obj_value["required"])
            {
                inputTag.setAttribute("required", true);
            }

            divCol.appendChild(labelTag);
            divCol.appendChild(inputTag);
            divRow.appendChild(divCol);

            elementForm.appendChild(divRow);
        }

        //Button Submit
        let divSubmitRow = document.createElement("div");
        divSubmitRow.setAttribute("class","row d-flex justify-content-end mb-3");

        let divSubmit = document.createElement("div");
        divSubmit.setAttribute("class","col-sm-2");

        let inputSubmit = document.createElement("button");
        inputSubmit.setAttribute("id","btn_submit_create");
        inputSubmit.setAttribute("type","submit");
        inputSubmit.setAttribute("class","form-control btn btn-primary");
        inputSubmit.innerText = "Lưu";
        // inputSubmit.addEventListener("click",APICreateCategory);

        divSubmit.appendChild(inputSubmit);
        divSubmitRow.appendChild(divSubmit);
        elementForm.appendChild(divSubmitRow);

        BindTextValue("id_emr", data, "id_emr");
        BindTextValue("id_emr_show", data, "id_emr");
    }

    function GetLocation(location, get = "row")
    {
        if(location == "" || location == null)
        {
            return;
        }

        if(get == "row")
        {
            var row = location.substring(0 , location.indexOf(','));

            return row.trim();
        }
        else
        {
            var col = location.substring(location.indexOf(',') + 1);

            return col.trim();
        }
    }

    function InitComponent()
    {
        HisSpinner(false);

        $('#his_select').select2();

        BindCommonDataV2({ "data": data_select, "select_bind": "his_select", "select_lable": "Chọn phiếu", "value_key": "_id", "text_key": "name", "sort_key": "name" });

    }

    function RegisterEvents()
    {
        $('#his_select').on('select2:select', function () {
            document.getElementById("generate_html").innerText = "";

            let id_obj = $('#his_select').select2('val');

            GenerateForm( data_tmp.get(id_obj), "generate_html");
        });
    }

    window.onload = function ()
    {
        InitComponent();
        RegisterEvents();
    }
</script>
