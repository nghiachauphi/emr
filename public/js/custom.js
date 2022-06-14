function CheckArrayOrObjectBindData(payload_data)
{
    var data = null;

    if (payload_data != null)
    {
        if (payload_data instanceof Array)
        {
            if (payload_data.length == 0)
            {
                return "";
            }

            data = payload_data[0];
        } else {
            data = payload_data;
        }
    } else {
        return "";
    }

    return data;
}

function hide_result(id_bind)
{
    var label_msg = document.getElementById(id_bind);
    if (label_msg == null)
    {
        return;
    }
    label_msg.style.display = "none";
    label_msg.text = "";
}

function ClearValidateForm(id_form)
{
    var clear_form = document.getElementById(id_form);
    if (clear_form != null && clear_form != undefined) {
        clear_form.classList.remove("was-validated");
    }
}

function BindTextValue(id, data, key = null)
{
    if (key)
    {
        if (data.hasOwnProperty(key))
        {
            if (document.getElementById(id))
            {
                document.getElementById(id).value = data[key];
            }
        }
    }
    else
    {
        if (document.getElementById(id))
        {
            document.getElementById(id).value = data;
        }
    }
}

function BindInnerTextValue(id, data, key = null)
{
    if (key)
    {
        if (data.hasOwnProperty(key))
        {
            if (document.getElementById(id))
            {
                document.getElementById(id).innerHTML = data[key];
            }
        }
    }
    else
    {
        if (document.getElementById(id))
        {
            document.getElementById(id).innerHTML = data;
        }
    }
}

function GenerateAlertModal()
{
    if (document.getElementById("his_modal_alert") != null)
    {
        return document.getElementById("his_modal_alert");
    }

    let alrt_container = document.createElement("div");
    alrt_container.setAttribute("class", "modal fade");
    alrt_container.setAttribute("role", "dialog");
    alrt_container.setAttribute("data-backdrop", "static");
    alrt_container.setAttribute("data-keyboard", "false");
    alrt_container.id = "his_modal_alert";

    let alrt_container_sub = document.createElement("div");
    alrt_container_sub.setAttribute("class", "modal-dialog");

    let alrt_container_content = document.createElement("div");
    alrt_container_content.setAttribute("class", "modal-content");

    let alrt_title_container = document.createElement("div");
    alrt_title_container.setAttribute("class", "modal-header");

    let alrt_title = document.createElement("div");
    alrt_title.setAttribute("class", "modal-title");
    alrt_title.id = "his_modal_alert_title";

    let close_btn = document.createElement("button");
    close_btn.setAttribute("type", "button");
    close_btn.setAttribute("class", "btn-close");
    close_btn.setAttribute("data-bs-dismiss", "modal");
    close_btn.setAttribute("aria-label", "Close");

    alrt_title_container.append(alrt_title);
    alrt_title_container.append(close_btn);

    let alert_content = document.createElement("div");
    alert_content.setAttribute("class", "modal-body text-center");

    let alert_content_text = document.createElement("div");
    alert_content_text.id = "his_modal_alert_text";

    alert_content.append(alert_content_text);

    alrt_container_content.append(alrt_title_container);
    alrt_container_content.append(alert_content);

    alrt_container_sub.append(alrt_container_content);

    alrt_container.append(alrt_container_sub);

    return alrt_container;
}

function GenerateConfirmModal(extra_id, yes_call_back = null, no_call_back = null)
{
    let alrt_container = document.createElement("div");
    alrt_container.setAttribute("class", "modal fade");
    alrt_container.setAttribute("role", "dialog");
    alrt_container.setAttribute("data-backdrop", "static");
    alrt_container.setAttribute("data-keyboard", "false");
    alrt_container.id = "his_modal_confirm_" + extra_id;

    let alrt_container_sub = document.createElement("div");
    alrt_container_sub.setAttribute("class", "modal-dialog");

    let alrt_container_content = document.createElement("div");
    alrt_container_content.setAttribute("class", "modal-content");

    // titile
    let alrt_title_container = document.createElement("div");
    alrt_title_container.setAttribute("class", "modal-header");

    let alrt_title = document.createElement("div");
    alrt_title.setAttribute("class", "modal-title");
    alrt_title.id = "his_modal_confirm_title_" + extra_id;

    let close_btn = document.createElement("button");
    close_btn.setAttribute("type", "button");
    close_btn.setAttribute("class", "btn-close");
    close_btn.setAttribute("data-bs-dismiss", "modal");
    close_btn.setAttribute("aria-label", "Close");

    alrt_title_container.append(alrt_title);
    alrt_title_container.append(close_btn);

    // content
    let alert_content = document.createElement("div");
    alert_content.setAttribute("class", "modal-body text-center");

    let alert_content_text = document.createElement("div");
    alert_content_text.id = "his_modal_confirm_text_" + extra_id;

    alert_content.append(alert_content_text);


    // footer
    let alrt_footer_container = document.createElement("div");
    alrt_footer_container.setAttribute("class", "modal-footer");

    let yes_btn = document.createElement("button");
    yes_btn.setAttribute("type", "button");
    yes_btn.setAttribute("class", "btn btn-update");
    yes_btn.id = "his_modal_confirm_btn_yes_" + extra_id;
    yes_btn.innerText = "Đồng ý";
    yes_btn.onclick = function() {
        if (yes_call_back)
        {
            yes_call_back(this);
        }
    };

    let no_btn = document.createElement("button");
    no_btn.setAttribute("type", "button");
    no_btn.setAttribute("class", "btn");
    no_btn.id = "his_modal_confirm_btn_no_" + extra_id;
    no_btn.innerText = "Không";
    no_btn.onclick = function() {
        if (no_call_back)
        {
            no_call_back(this);
        }
    };

    alrt_footer_container.append(no_btn);
    alrt_footer_container.append(yes_btn);

    alrt_container_content.append(alrt_title_container);
    alrt_container_content.append(alert_content);
    alrt_container_content.append(alrt_footer_container);

    alrt_container_sub.append(alrt_container_content);
    alrt_container.append(alrt_container_sub);

    return alrt_container;
}

/**
 * Register the click handler for the YES button
 * @extra_id the id of the modal
 * @handler handler registered
 */
function HisRegistHandlerConfirmYes(extra_id, handler)
{
    RegisterClickHandler(document.getElementById("his_modal_confirm_btn_yes_" + extra_id), handler);
}

/**
 * Register the click handler for the NO button
 * @extra_id the id of the modal
 * @handler handler registered
 */
function HisRegistHandlerConfirmNo(extra_id, handler)
{
    RegisterClickHandler(document.getElementById("his_modal_confirm_btn_no_" + extra_id), handler);
}

/**
 * Show the modal have extra_id
 * @extra_id the id of the modal
 * @title the title of the modal
 * @msg the message that we need to show
 */
function HisShowConfirm(extra_id, title, msg)
{
    document.getElementById("his_modal_confirm_title_" + extra_id).innerHTML = title;
    show_result("his_modal_confirm_text_" + extra_id, msg, "col-12 h-100 alert alert-danger text-center");
    document.getElementById("his_modal_confirm_btn_yes_" + extra_id).style.display = "";
    document.getElementById("his_modal_confirm_btn_no_" + extra_id).style.display = "";
    $("#his_modal_confirm_" + extra_id).modal('show');
    // (new bootstrap.Modal(document.getElementById("his_modal_confirm_" + extra_id ), {})).show();
    // $("#his_modal_confirm_" + extra_id).modal('show');
}

/**
 * Show the modal have extra_id with the warning layout
 * @extra_id the id of the modal
 * @title the title of the modal
 * @msg the message that we need to show
 */
function HisShowConfirmWarning(extra_id, title, msg)
{
    document.getElementById("his_modal_confirm_title_" + extra_id).innerHTML = title;
    show_result("his_modal_confirm_text_" + extra_id, msg, "col-12 h-100 alert alert-warning text-center");
    $("#his_modal_confirm_" + extra_id).modal('show');
    // (new bootstrap.Modal(document.getElementById("his_modal_confirm_" + extra_id), {})).show();
    // $("#his_modal_confirm_" + extra_id).modal('show');
}

/**
 * Show the modal have extra_id
 * @extra_id the id of the modal
 * @title the title of the modal
 * @msg the message that we need to show
 */
function HisShowConfirmSucessResult(extra_id, msg)
{
    show_result("his_modal_confirm_text_" + extra_id, msg, "col-12 h-100 alert alert-success text-center");
    // (new bootstrap.Modal(document.getElementById("his_modal_confirm_" + extra_id), {})).show();
    document.getElementById("his_modal_confirm_btn_yes_" + extra_id).style.display = "none";
    document.getElementById("his_modal_confirm_btn_no_" + extra_id).style.display = "none";
    // if (!$('#his_modal_confirm_' + extra_id).hasClass('show'))
    // {
    //     $("#his_modal_confirm_" + extra_id).modal('show');
    // }
}

/**
 * Show the modal have extra_id
 * @extra_id the id of the modal
 * @title the title of the modal
 * @msg the message that we need to show
 */
function HisShowConfirmErrorResult(extra_id, msg)
{
    show_result("his_modal_confirm_text_" + extra_id, msg, "col-12 h-100 alert alert-danger text-center");
    // (new bootstrap.Modal(document.getElementById("his_modal_confirm_" + extra_id), {})).show();
    document.getElementById("his_modal_confirm_btn_yes_" + extra_id).style.display = "none";
    document.getElementById("his_modal_confirm_btn_no_" + extra_id).style.display = "none";
    // if (!$('#his_modal_confirm_' + extra_id).hasClass('show'))
    // {
    //     $("#his_modal_confirm_" + extra_id).modal('show');
    // }
}

/**
 * Clear content and hide the modal have extra_id
 * @extra_id the id of the modal
 */
function HisClearAndHideConfirm(extra_id)
{
    // (new bootstrap.Modal(document.getElementById(), {})).hide();
    $("#his_modal_confirm_" + extra_id).modal('hide');
    document.getElementById("his_modal_confirm_title_" + extra_id).innerHTML = "";
    document.getElementById("his_modal_confirm_text_" + extra_id).innerHTML = "";
}

function show_result(id_bind, msg_bind, class_show = "")
{
    var label_msg = document.getElementById(id_bind);
    label_msg.style.display = "block";
    label_msg.removeAttribute("class");
    label_msg.setAttribute("class",class_show);
    label_msg.innerHTML = msg_bind;
}

/**
 * Register the click handler for the NO button
 * @extra_id the id of the modal
 * @handler handler registered
 */
function HisRegistHandlerConfirmNo(extra_id, handler)
{
    RegisterClickHandler(document.getElementById("his_modal_confirm_btn_no_" + extra_id), handler);
}

// register a handler click event for a element
function RegisterClickHandler(element, handler)
{
    if (element)
    {
        element.addEventListener("click", function(event) {
            if (handler)
            {
                handler(event);
            }
        });
    }
}

/**
 * Show alert modal with success layout
 * @title the title of the modal
 * @msg the message that we need to show
 */
function HisShowAlertSuccess(title, msg)
{
    document.getElementById("his_modal_alert_title").innerHTML = title;
    show_result("his_modal_alert_text", msg, "col-12 h-100 alert alert-success text-center");
    // $("#his_modal_alert").show();
    // (new bootstrap.Modal(document.getElementById("his_modal_alert"), {})).show();
    $("#his_modal_alert").modal('show');
}

/**
 * Show alert modal with warning layout
 * @title the title of the modal
 * @msg the message that we need to show
 */
function HisShowAlertWarning(title, msg)
{
    document.getElementById("his_modal_alert_title").innerHTML = title;
    show_result("his_modal_alert_text", msg, "col-12 h-100 alert alert-warning text-center");
    // (new bootstrap.Modal(document.getElementById("his_modal_alert"), {})).show();
    $("#his_modal_alert").modal('show');
}

/**
 * Show alert modal with error layout
 * @title the title of the modal
 * @msg the message that we need to show
 */
function HisShowAlertError(title, msg)
{
    document.getElementById("his_modal_alert_title").innerHTML = title;
    show_result("his_modal_alert_text", msg, "col-12 h-100 alert alert-danger text-center");
    // (new bootstrap.Modal(document.getElementById("his_modal_alert"), {})).show();
    $("#his_modal_alert").modal('show');
}


/**
 * clear content and hide alert modal
 */
function HisClearAlert()
{
    document.getElementById("his_modal_alert_title").innerHTML = "";
    document.getElementById("his_modal_alert_text").innerHTML = "";
    // $("#his_modal_alert").hide();
    $("#his_modal_alert").modal('hide');
}

function HiddenElement(id, _true = true)
{
    if (id)
    {
        if (document.getElementById(id))
        {
            if (_true)
            {
                document.getElementById(id).setAttribute("hidden", true);
            }
            else
            {
                document.getElementById(id).removeAttribute("hidden", false);
            }
        }
    }
}

function ReadOnlyElement(id, _true = true)
{
    if (id)
    {
        if (document.getElementById(id))
        {
            if (_true)
            {
                document.getElementById(id).setAttribute("readonly", true);
            }
            else
            {
                document.getElementById(id).removeAttribute("readonly");
            }
        }
    }
}

function HisSpinner(show = true)
{
    let spinner = document.getElementById("spinner_container_page");

    if (spinner == null)
    {
        return;
    }

    if( show == true && spinner.style.display != "")
    {
        spinner.style.display = "";
    }
    else if (show == false && spinner.style.display != "none")
    {
        spinner.style.display = "none";
    }
}

function Paginator(payload, func)
{
    HisSpinner();
    var page_number = payload.length;
    var page = document.getElementById("page_number");
    var count = null;

    if ((page_number%paginate_max) == 0)
        count = parseInt(page_number/paginate_max);
    else
        count = parseInt((page_number/paginate_max)+1);

    if (count < paginate_max && paginate_now != null)
    {
        for (let i = 1; i <= count; i++)
        {
            var li = document.createElement("li");
            li.setAttribute("class", 'page-item');

            var item = document.createElement("a");
            item.setAttribute("class", 'page-link');
            item.setAttribute("id", 'page_link_' + i);
            item.innerText = i;
            item.onclick = function() {
                func(i);
                paginate_now = i;
            };

            li.append(item);
            page.append(li);
        }
    }
    else if (paginate_now == null)
    {
        for (let i = 1; i <= 7; i++)
        {
            var li = document.createElement("li");
            li.setAttribute("class", 'page-item');

            var item = document.createElement("a");
            item.setAttribute("class", 'page-link');
            item.setAttribute("id", 'page_link_' + i);
            item.innerText = i;
            item.onclick = function () {
                func(i);
                paginate_now = i;
            }

            li.append(item);
            page.append(li);
        }

        if (count > 7)
        {
            var li = document.createElement("li");
            li.setAttribute("class", 'page-item');

            var itemContinue = document.createElement("a");
            itemContinue.setAttribute("class", 'page-link');
            itemContinue.innerText = "...";
            li.append(itemContinue);
            page.append(li);
        }
    }
    else if(count => paginate_max && paginate_now != null)
    {
        console.log("cccccccccc")
        var first_page = paginate_now-3;
        if (first_page <= 1)
        {
            first_page = 1;
        }
        else {
            var liPre = document.createElement("li");
                liPre.setAttribute("class", 'page-item');

            var itemPre = document.createElement("a");
                itemPre.setAttribute("class", 'page-link');
                itemPre.innerText = "...";
                liPre.append(itemPre);
                page.append(liPre);
        }

        var latest_page = paginate_now+3;
        if (latest_page > count)
        {
            latest_page = count;
        }

        console.log("first", first_page)
        for (let i = first_page; i <= latest_page; i++)
        {
            var li = document.createElement("li");
                li.setAttribute("class", 'page-item');

            var item = document.createElement("a");
                item.setAttribute("class", 'page-link');
                item.setAttribute("id", 'page_link_' + i);
                item.innerText = i;
                item.onclick = function () {
                    func(i);
                    paginate_now = i;
                }

                li.append(item);
                page.append(li);
        }

        if (latest_page != count)
        {
            var li = document.createElement("li");
                li.setAttribute("class", 'page-item');

            var itemContinue = document.createElement("a");
                itemContinue.setAttribute("class", 'page-link');
                itemContinue.innerText = "...";
                li.append(itemContinue);
                page.append(li);
        }
    }

    HisSpinner(false);

    document.getElementById("previous_click").onclick = function() {
        func(1);
        paginate_now = 1;
        HighlightPaginate(1);
    }

    document.getElementById("next_click").onclick = function() {
        func(count);
        paginate_now = count;
        HighlightPaginate(count);
    }
}

function HighlightPaginate(number_highlight)
{
    if (number_highlight == null)
        number_highlight = 1;

    var paginate_now_bg = document.getElementById("page_link_" + number_highlight);

    if (paginate_now_bg == null)
        return

    paginate_now_bg.style.background = "#5b5959";
}

$(document).on('select2:open', function () {
    document.querySelector('.select2-search__field').focus();
});

/**
 * @brief Bind data into select
 * @param: An object defines as below:
 * {
 *      url: url to get data,
 *      data: data static,
 *      select_bind: the select is bind data,
 *      select_lable: the lable of the select
 *      value_key: value key in data to behind
 *      text_key: text key display in data to show
 *      sub_text_keys: ["first-key", "second key", ...]
 *      appends: [{value: "your value for 1", text: "your text for 1"}, {value: "your value for 2", text: "your text for 2"}],
 *      selected_value: your selected value,
 *      sort_key: the key data to sort,
 *      reverse: true/false,
 *      status_key: the key name of the status attribute in entity
 * }
 */
function BindCommonDataV2(select_obj)
{
    if (select_obj.data == null && select_obj.url != null)
    {
        GetData(select_obj.url,
            function(json_obj_data){
                if (json_obj_data.hasOwnProperty("payload_data"))
                {
                    select_obj.data = json_obj_data.payload_data;
                    bind_select2(select_obj);
                }
            },
            function(json_obj_data){
                console.log("cannot get common data" + json_obj_data.error_msg);
            }
        );
    }
    else
    {
        bind_select2(select_obj);
    }
}

/**
 * @brief Bind data into select
 * @param: An object defines as below:
 * {
 *      url: url to get data,
 *      data: data static,
 *      select_bind: the select is bind data,
 *      select_lable: the lable of the select
 *      value_key: value key in data to behind
 *      text_key: text key display in data to show
 *      sub_text_keys: ["first-key", "second key", ...]
 *      appends: [{value: "your value for 1", text: "your text for 1"}, {value: "your value for 2", text: "your text for 2"}],
 *      selected_value: your selected value,
 *      sort_key: the key data to sort,
 *      reverse: true/false,
 *      status_key: the key name of the status attribute in entity data
 * }
 */
function bind_select2(select_obj)
{
    if (!select_obj.hasOwnProperty("select_bind"))
    {
        return;
    }

    var common_select = document.getElementById(select_obj.select_bind);
    if (common_select == null)
    {
        return;
    }

    while(common_select.firstChild != null)
    {
        common_select.removeChild(common_select.firstChild);
    }

    var default_select = document.createElement("option");
    default_select.setAttribute("value", "");
    default_select.innerText= select_obj.select_lable;
    common_select.append(default_select);

    if (!select_obj.hasOwnProperty("selected_value") || select_obj["selected_value"] == null || select_obj["selected_value"] !== select_obj["selected_value"])
    {
        $('#' + select_obj.select_bind).prop('selectedIndex', 0).trigger('change');
    }

    if (!select_obj.hasOwnProperty("data"))
    {
        return;
    }

    if (select_obj.data == null)
    {
        return;
    }

    if (select_obj.hasOwnProperty("appends"))
    {
        for (let i=0; i < select_obj.appends.length; i++)
        {
            let tmp_select = document.createElement("option");

            tmp_select.setAttribute("value", select_obj.appends[i].value);

            tmp_select.innerText= select_obj.appends[i].text;
            common_select.append(tmp_select);
        }
    }

    let array_sort;
    if (select_obj.reverse)
    {
        array_sort = ArrayReverse(select_obj.data, function(a,b){
            let avalue = a[select_obj.sort_key];
            let bvalue  = b[select_obj.sort_key];
            // if (Number.isInteger(avalue) && Number.isInteger(bvalue))
            // {
            //     avalue = avalue.toString().toLocaleLowerCase();
            //     bvalue = bvalue.toString().toLocaleLowerCase();
            //     return avalue.localeCompare(bvalue, "vi");
            // }
            // else
            // {
            //     avalue = avalue.toLocaleLowerCase();
            //     bvalue = bvalue.toLocaleLowerCase();
            //     return avalue.localeCompare(bvalue, "vi");
            // }

            avalue = avalue ? avalue.toLocaleLowerCase() : "";
            bvalue = bvalue ? bvalue.toLocaleLowerCase() : "";
            return avalue.localeCompare(bvalue, "vi");
        });
    }
    else
    {
        array_sort = ArraySort(select_obj.data, function(a,b){
            let avalue = a[select_obj.sort_key];
            let bvalue  = b[select_obj.sort_key];
            // if (Number.isInteger(avalue) && Number.isInteger(bvalue))
            // {
            //     avalue = avalue.toString().toLocaleLowerCase();
            //     bvalue = bvalue.toString().toLocaleLowerCase();
            //     return avalue.localeCompare(bvalue, "vi");
            // }
            // else
            // {
            //     avalue = avalue?.toLocaleLowerCase();
            //     bvalue = bvalue?.toLocaleLowerCase();
            //     return avalue?.localeCompare(bvalue, "vi");
            // }

            avalue = avalue ? avalue.toLocaleLowerCase() : "";
            bvalue = bvalue ? bvalue.toLocaleLowerCase() : "";
            return avalue.localeCompare(bvalue, "vi");
        });
    }

    array_sort.forEach(function(item)
    {
        if (select_obj.hasOwnProperty("value_key"))
        {
            let opt_tmp = document.createElement("option");

            // default the status key is "status"
            if (!select_obj.hasOwnProperty("status_key"))
            {
                select_obj.status_key = "status";
            }

            // disabling the item has the status as 0
            if (item.hasOwnProperty(select_obj.status_key))
            {
                if (select_obj.hasOwnProperty("status_values"))
                {
                    select_obj.status_values.forEach(function(status_value) {
                        if (status_value == item[select_obj.status_key])
                        {
                            // opt_tmp.setAttribute("disabled", true);
                            opt_tmp.disabled = true;
                        }
                    });
                }
                else if (item[select_obj.status_key] == "00")
                {
                    opt_tmp.setAttribute("disabled", true);
                }
            }

            opt_tmp.setAttribute("value",  item[select_obj.value_key]);

            if (item.hasOwnProperty(select_obj.text_key))
            {
                opt_tmp.innerText = item[select_obj.text_key];
            }

            if (select_obj.hasOwnProperty("sub_text_keys"))
            {
                for (let i=0; i < select_obj.sub_text_keys.length; i++)
                {
                    if (item.hasOwnProperty(select_obj.sub_text_keys[i]) && item[select_obj.sub_text_keys[i]] != "")
                    {
                        opt_tmp.innerText += hdm_static_select_text_prefix + item[select_obj.sub_text_keys[i]];
                    }
                }
            }
            common_select.append(opt_tmp);

            if (select_obj.hasOwnProperty("selected_value") && select_obj["selected_value"] != null)
            {
                if  (select_obj.selected_value == item[select_obj.value_key])
                {
                    opt_tmp.selected = true;
                    // common_select.value = opt_tmp.value.toString();
                    // common_select.dispatchEvent(new Event("change"));

                    $("#" + select_obj.select_bind).val(opt_tmp.value.toString()).trigger('change');
                }
            }
        }
    });
}

function ArraySort(arr_in, compare_func)
{
    let arr_out = new Array();

    for (let i =0 ; i< arr_in.length; i++)
    {
        arr_out.push(arr_in[i]);
    }

    arr_out.sort(function (a, b) {
        return compare_func(a, b);
    });

    return arr_out;
}
