
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["id_submarcas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_marca" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["submarca" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id_submarcas" + iSeqRow] && scEventControl_data["id_submarcas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_submarcas" + iSeqRow] && scEventControl_data["id_submarcas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_marca" + iSeqRow] && scEventControl_data["id_marca" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_marca" + iSeqRow] && scEventControl_data["id_marca" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["submarca" + iSeqRow] && scEventControl_data["submarca" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["submarca" + iSeqRow] && scEventControl_data["submarca" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["id_status" + iSeqRow] && scEventControl_data["id_status" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_status" + iSeqRow] && scEventControl_data["id_status" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("id_marca" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("id_status" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_id_submarcas' + iSeqRow).bind('blur', function() { sc_form_submarcas_id_submarcas_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_submarcas_id_submarcas_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_submarcas_id_submarcas_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_marca' + iSeqRow).bind('blur', function() { sc_form_submarcas_id_marca_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_submarcas_id_marca_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_submarcas_id_marca_onfocus(this, iSeqRow) });
  $('#id_sc_field_submarca' + iSeqRow).bind('blur', function() { sc_form_submarcas_submarca_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_submarcas_submarca_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_submarcas_submarca_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_status' + iSeqRow).bind('blur', function() { sc_form_submarcas_id_status_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_submarcas_id_status_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_submarcas_id_status_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_submarcas_id_submarcas_onblur(oThis, iSeqRow) {
  do_ajax_form_submarcas_validate_id_submarcas();
  scCssBlur(oThis);
}

function sc_form_submarcas_id_submarcas_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_submarcas_id_submarcas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_submarcas_id_marca_onblur(oThis, iSeqRow) {
  do_ajax_form_submarcas_validate_id_marca();
  scCssBlur(oThis);
}

function sc_form_submarcas_id_marca_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_submarcas_id_marca_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_submarcas_submarca_onblur(oThis, iSeqRow) {
  do_ajax_form_submarcas_validate_submarca();
  scCssBlur(oThis);
}

function sc_form_submarcas_submarca_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_submarcas_submarca_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_submarcas_id_status_onblur(oThis, iSeqRow) {
  do_ajax_form_submarcas_validate_id_status();
  scCssBlur(oThis);
}

function sc_form_submarcas_id_status_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_submarcas_id_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("id_submarcas", "", status);
	displayChange_field("id_marca", "", status);
	displayChange_field("submarca", "", status);
	displayChange_field("id_status", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_id_submarcas(row, status);
	displayChange_field_id_marca(row, status);
	displayChange_field_submarca(row, status);
	displayChange_field_id_status(row, status);
}

function displayChange_field(field, row, status) {
	if ("id_submarcas" == field) {
		displayChange_field_id_submarcas(row, status);
	}
	if ("id_marca" == field) {
		displayChange_field_id_marca(row, status);
	}
	if ("submarca" == field) {
		displayChange_field_submarca(row, status);
	}
	if ("id_status" == field) {
		displayChange_field_id_status(row, status);
	}
}

function displayChange_field_id_submarcas(row, status) {
    var fieldId;
}

function displayChange_field_id_marca(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_marca__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_marca" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_marca");
	}
}

function displayChange_field_submarca(row, status) {
    var fieldId;
}

function displayChange_field_id_status(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_id_status__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_id_status" + row).select2("destroy");
		}
		scJQSelect2Add(row, "id_status");
	}
}

function scRecreateSelect2() {
	displayChange_field_id_marca("all", "on");
	displayChange_field_id_status("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_submarcas_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(22);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

var api_cache_requests = [];
function ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, hasRun, img_before){
    setTimeout(function(){
        if(img_name == '') return;
        iSeqRow= iSeqRow !== undefined && iSeqRow !== null ? iSeqRow : '';
        var hasVar = p.indexOf('_@NM@_') > -1 || p_cache.indexOf('_@NM@_') > -1 ? true : false;

        p = p.split('_@NM@_');
        $.each(p, function(i,v){
            try{
                p[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p[i] = v;
            }
        });
        p = p.join('');

        p_cache = p_cache.split('_@NM@_');
        $.each(p_cache, function(i,v){
            try{
                p_cache[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p_cache[i] = v;
            }
        });
        p_cache = p_cache.join('');

        img_before = img_before !== undefined ? img_before : $(t).attr('src');
        var str_key_cache = '<?php echo $this->Ini->sc_page; ?>' + img_name+field+p+p_cache;
        if(api_cache_requests[ str_key_cache ] !== undefined && api_cache_requests[ str_key_cache ] !== null){
            if(api_cache_requests[ str_key_cache ] != false){
                do_ajax_check_file(api_cache_requests[ str_key_cache ], field  ,t, iSeqRow);
            }
            return;
        }
        //scAjaxProcOn();
        $(t).attr('src', '<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif');
        api_cache_requests[ str_key_cache ] = false;
        var rs =$.ajax({
                    type: "POST",
                    url: 'index.php?script_case_init=<?php echo $this->Ini->sc_page; ?>',
                    async: true,
                    data:'nmgp_opcao=ajax_check_file&AjaxCheckImg=' + encodeURI(img_name) +'&rsargs='+ field + '&p=' + p + '&p_cache=' + p_cache,
                    success: function (rs) {
                        if(rs.indexOf('</span>') != -1){
                            rs = rs.substr(rs.indexOf('</span>') + 7);
                        }
                        if(rs.indexOf('/') != -1 && rs.indexOf('/') != 0){
                            rs = rs.substr(rs.indexOf('/'));
                        }
                        rs = sc_trim(rs);

                        // if(rs == 0 && hasVar && hasRun === undefined){
                        //     delete window.api_cache_requests[ str_key_cache ];
                        //     ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, 1, img_before);
                        //     return;
                        // }
                        window.api_cache_requests[ str_key_cache ] = rs;
                        do_ajax_check_file(rs, field  ,t, iSeqRow)
                        if(rs == 0){
                            delete window.api_cache_requests[ str_key_cache ];

                           // $(t).attr('src',img_before);
                            do_ajax_check_file(img_before+'_@@NM@@_' + img_before, field  ,t, iSeqRow)

                        }


                    }
        });
    },100);
}

function do_ajax_check_file(rs, field  ,t, iSeqRow){
    if (rs != 0) {
        rs_split = rs.split('_@@NM@@_');
        rs_orig = rs_split[0];
        rs2 = rs_split[1];
        try{
            if(!$(t).is('img')){

                if($('#id_read_on_'+field+iSeqRow).length > 0 ){
                                    var usa_read_only = false;

                switch(field){

                }
                     if(usa_read_only && $('a',$('#id_read_on_'+field+iSeqRow)).length == 0){
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_submarcas')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
                     }
                }
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href', target.join(','));
                }else{
                    var target = $(t).attr('href').split(',');
                     target[1] = "'"+rs2+"'";
                     $(t).attr('href', target.join(','));
                }
            }else{
                $(t).attr('src', rs2);
                $(t).css('display', '');
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $(t).attr('href', target.join(','));
                }else{
                     var t_link = $(t).parent('a');
                     var target = $(t_link).attr('href').split(',');
                     target[0] = "javascript:nm_mostra_img('"+rs_orig+"'";
                     $(t_link).attr('href', target.join(','));
                }

            }
            eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        } catch(err){
                        eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        }
    }
   /* hasFalseCacheRequest = false;
    $.each(api_cache_requests, function(i,v){
        if(v == false){
            hasFalseCacheRequest = true;
        }
    });
    if(hasFalseCacheRequest == false){
        scAjaxProcOff();
    }*/
}

$(document).ready(function(){
});

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "id_marca" == specificField) {
    scJQSelect2Add_id_marca(seqRow);
  }
  if (null == specificField || "id_status" == specificField) {
    scJQSelect2Add_id_status(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_id_marca(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_marca_obj" : "#id_sc_field_id_marca" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_marca_obj',
      dropdownCssClass: 'css_id_marca_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add

function scJQSelect2Add_id_status(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_id_status_obj" : "#id_sc_field_id_status" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_id_status_obj',
      dropdownCssClass: 'css_id_status_obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_marca) { displayChange_field_id_marca(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_id_status) { displayChange_field_id_status(iLine, "on"); } }, 150);
} // scJQElementsAdd

function scGetFileExtension(fileName)
{
    fileNameParts = fileName.split(".");

    if (1 === fileNameParts.length || (2 === fileNameParts.length && "" == fileNameParts[0])) {
        return "";
    }

    return fileNameParts.pop().toLowerCase();
}

function scFormatExtensionSizeErrorMsg(errorMsg)
{
    var msgInfo = errorMsg.split("||"), returnMsg = "";

    if ("err_size" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_size'] ?>. <?php echo $this->Ini->Nm_lang['lang_errm_file_size_extension'] ?>".replace("{SC_EXTENSION}", msgInfo[1]).replace("{SC_LIMIT}", msgInfo[2]);
    } else if ("err_extension" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl'] ?>";
    }

    return returnMsg;
}

