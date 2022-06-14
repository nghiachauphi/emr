@extends('layouts.app')

@section('content')
    <div class="w-100">
        <div class="row all-center">
            <div class="col-sm-4">
                <label>Chọn tên phiếu</label>
                <select id="his_select" class="form-control select-2">
                    <option value="one">First</option>
                    <option value="two">Second (disabled)</option>
                    <option value="three">Third</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        <div class="row">
            <form id="generate_html">

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
                "show": false,
                "description": "Mã hồ sơ",
                "views": {
                }
            },
            "id_bn": {
                "required": "required",
                "show": false,
                "description": "Mã bệnh nhân",
                "views": {
                }
            },
            "tencoso": {
                "required": "required",
                "show": true,
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
        let divSubmit = document.createElement("div");
        divSubmit.setAttribute("class","col-sm-2");

        let inputSubmit = document.createElement("input");
        inputSubmit.setAttribute("id","btn_submit_create");
        inputSubmit.setAttribute("class","form-control btn btn-primary");
        inputSubmit.setAttribute("value","Lưu");
        // inputSubmit.addEventListener("click",APICreateCategory);

        divSubmit.appendChild(inputSubmit);
        elementForm.appendChild(divSubmit);
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
        BindCommonDataV2({ "data": data_select, "select_bind": "his_select", "select_lable": "Chọn phiếu", "value_key": "_id", "text_key": "name", "sort_key": "name" });
    }
</script>
