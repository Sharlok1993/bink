
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
  scEventControl_data["id_valor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["factor_seg_vida" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["seg_auto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["factor_seg_auto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["factor_comision" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["factor_comision2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tia1" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tia2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tia3" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tia4" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tia5" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cat" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["id_status" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["id_valor" + iSeqRow] && scEventControl_data["id_valor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["id_valor" + iSeqRow] && scEventControl_data["id_valor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["factor_seg_vida" + iSeqRow] && scEventControl_data["factor_seg_vida" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["factor_seg_vida" + iSeqRow] && scEventControl_data["factor_seg_vida" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["seg_auto" + iSeqRow] && scEventControl_data["seg_auto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["seg_auto" + iSeqRow] && scEventControl_data["seg_auto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["factor_seg_auto" + iSeqRow] && scEventControl_data["factor_seg_auto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["factor_seg_auto" + iSeqRow] && scEventControl_data["factor_seg_auto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["factor_comision" + iSeqRow] && scEventControl_data["factor_comision" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["factor_comision" + iSeqRow] && scEventControl_data["factor_comision" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["factor_comision2" + iSeqRow] && scEventControl_data["factor_comision2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["factor_comision2" + iSeqRow] && scEventControl_data["factor_comision2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tia1" + iSeqRow] && scEventControl_data["tia1" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tia1" + iSeqRow] && scEventControl_data["tia1" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tia2" + iSeqRow] && scEventControl_data["tia2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tia2" + iSeqRow] && scEventControl_data["tia2" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tia3" + iSeqRow] && scEventControl_data["tia3" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tia3" + iSeqRow] && scEventControl_data["tia3" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tia4" + iSeqRow] && scEventControl_data["tia4" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tia4" + iSeqRow] && scEventControl_data["tia4" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tia5" + iSeqRow] && scEventControl_data["tia5" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tia5" + iSeqRow] && scEventControl_data["tia5" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cat" + iSeqRow] && scEventControl_data["cat" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cat" + iSeqRow] && scEventControl_data["cat" + iSeqRow]["change"]) {
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
  if ("id_valor" + iSeq == fieldName) {
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
  $('#id_sc_field_id_valor' + iSeqRow).bind('blur', function() { sc_form_valores_id_valor_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_valores_id_valor_onfocus(this, iSeqRow) });
  $('#id_sc_field_factor_seg_vida' + iSeqRow).bind('blur', function() { sc_form_valores_factor_seg_vida_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_valores_factor_seg_vida_onfocus(this, iSeqRow) });
  $('#id_sc_field_seg_auto' + iSeqRow).bind('blur', function() { sc_form_valores_seg_auto_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_valores_seg_auto_onfocus(this, iSeqRow) });
  $('#id_sc_field_factor_seg_auto' + iSeqRow).bind('blur', function() { sc_form_valores_factor_seg_auto_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_valores_factor_seg_auto_onfocus(this, iSeqRow) });
  $('#id_sc_field_factor_comision' + iSeqRow).bind('blur', function() { sc_form_valores_factor_comision_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_valores_factor_comision_onfocus(this, iSeqRow) });
  $('#id_sc_field_factor_comision2' + iSeqRow).bind('blur', function() { sc_form_valores_factor_comision2_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_valores_factor_comision2_onfocus(this, iSeqRow) });
  $('#id_sc_field_tia1' + iSeqRow).bind('blur', function() { sc_form_valores_tia1_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_valores_tia1_onfocus(this, iSeqRow) });
  $('#id_sc_field_tia2' + iSeqRow).bind('blur', function() { sc_form_valores_tia2_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_valores_tia2_onfocus(this, iSeqRow) });
  $('#id_sc_field_tia3' + iSeqRow).bind('blur', function() { sc_form_valores_tia3_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_valores_tia3_onfocus(this, iSeqRow) });
  $('#id_sc_field_tia4' + iSeqRow).bind('blur', function() { sc_form_valores_tia4_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_valores_tia4_onfocus(this, iSeqRow) });
  $('#id_sc_field_tia5' + iSeqRow).bind('blur', function() { sc_form_valores_tia5_onblur(this, iSeqRow) })
                                  .bind('focus', function() { sc_form_valores_tia5_onfocus(this, iSeqRow) });
  $('#id_sc_field_cat' + iSeqRow).bind('blur', function() { sc_form_valores_cat_onblur(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_valores_cat_onfocus(this, iSeqRow) });
  $('#id_sc_field_id_status' + iSeqRow).bind('blur', function() { sc_form_valores_id_status_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_valores_id_status_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_valores_id_valor_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_id_valor();
  scCssBlur(oThis);
}

function sc_form_valores_id_valor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_factor_seg_vida_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_factor_seg_vida();
  scCssBlur(oThis);
}

function sc_form_valores_factor_seg_vida_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_seg_auto_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_seg_auto();
  scCssBlur(oThis);
}

function sc_form_valores_seg_auto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_factor_seg_auto_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_factor_seg_auto();
  scCssBlur(oThis);
}

function sc_form_valores_factor_seg_auto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_factor_comision_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_factor_comision();
  scCssBlur(oThis);
}

function sc_form_valores_factor_comision_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_factor_comision2_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_factor_comision2();
  scCssBlur(oThis);
}

function sc_form_valores_factor_comision2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_tia1_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_tia1();
  scCssBlur(oThis);
}

function sc_form_valores_tia1_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_tia2_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_tia2();
  scCssBlur(oThis);
}

function sc_form_valores_tia2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_tia3_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_tia3();
  scCssBlur(oThis);
}

function sc_form_valores_tia3_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_tia4_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_tia4();
  scCssBlur(oThis);
}

function sc_form_valores_tia4_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_tia5_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_tia5();
  scCssBlur(oThis);
}

function sc_form_valores_tia5_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_cat_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_cat();
  scCssBlur(oThis);
}

function sc_form_valores_cat_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_valores_id_status_onblur(oThis, iSeqRow) {
  do_ajax_form_valores_mob_validate_id_status();
  scCssBlur(oThis);
}

function sc_form_valores_id_status_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("id_valor", "", status);
	displayChange_field("factor_seg_vida", "", status);
	displayChange_field("seg_auto", "", status);
	displayChange_field("factor_seg_auto", "", status);
	displayChange_field("factor_comision", "", status);
	displayChange_field("factor_comision2", "", status);
	displayChange_field("tia1", "", status);
	displayChange_field("tia2", "", status);
	displayChange_field("tia3", "", status);
	displayChange_field("tia4", "", status);
	displayChange_field("tia5", "", status);
	displayChange_field("cat", "", status);
	displayChange_field("id_status", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_id_valor(row, status);
	displayChange_field_factor_seg_vida(row, status);
	displayChange_field_seg_auto(row, status);
	displayChange_field_factor_seg_auto(row, status);
	displayChange_field_factor_comision(row, status);
	displayChange_field_factor_comision2(row, status);
	displayChange_field_tia1(row, status);
	displayChange_field_tia2(row, status);
	displayChange_field_tia3(row, status);
	displayChange_field_tia4(row, status);
	displayChange_field_tia5(row, status);
	displayChange_field_cat(row, status);
	displayChange_field_id_status(row, status);
}

function displayChange_field(field, row, status) {
	if ("id_valor" == field) {
		displayChange_field_id_valor(row, status);
	}
	if ("factor_seg_vida" == field) {
		displayChange_field_factor_seg_vida(row, status);
	}
	if ("seg_auto" == field) {
		displayChange_field_seg_auto(row, status);
	}
	if ("factor_seg_auto" == field) {
		displayChange_field_factor_seg_auto(row, status);
	}
	if ("factor_comision" == field) {
		displayChange_field_factor_comision(row, status);
	}
	if ("factor_comision2" == field) {
		displayChange_field_factor_comision2(row, status);
	}
	if ("tia1" == field) {
		displayChange_field_tia1(row, status);
	}
	if ("tia2" == field) {
		displayChange_field_tia2(row, status);
	}
	if ("tia3" == field) {
		displayChange_field_tia3(row, status);
	}
	if ("tia4" == field) {
		displayChange_field_tia4(row, status);
	}
	if ("tia5" == field) {
		displayChange_field_tia5(row, status);
	}
	if ("cat" == field) {
		displayChange_field_cat(row, status);
	}
	if ("id_status" == field) {
		displayChange_field_id_status(row, status);
	}
}

function displayChange_field_id_valor(row, status) {
    var fieldId;
}

function displayChange_field_factor_seg_vida(row, status) {
    var fieldId;
}

function displayChange_field_seg_auto(row, status) {
    var fieldId;
}

function displayChange_field_factor_seg_auto(row, status) {
    var fieldId;
}

function displayChange_field_factor_comision(row, status) {
    var fieldId;
}

function displayChange_field_factor_comision2(row, status) {
    var fieldId;
}

function displayChange_field_tia1(row, status) {
    var fieldId;
}

function displayChange_field_tia2(row, status) {
    var fieldId;
}

function displayChange_field_tia3(row, status) {
    var fieldId;
}

function displayChange_field_tia4(row, status) {
    var fieldId;
}

function displayChange_field_tia5(row, status) {
    var fieldId;
}

function displayChange_field_cat(row, status) {
    var fieldId;
}

function displayChange_field_id_status(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_valores_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(24);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_valores_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
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

